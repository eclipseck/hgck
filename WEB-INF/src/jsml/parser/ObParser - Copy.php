<?php
//require_once "jsml/parser/jsminplus.php";
require_once "jsml/parser/jsmin.php";
import("jsml_parser_ObLex");
class jsml_parser_ObParser{
	public function con() {
		$this->lex = get(new jsml_parser_ObLex())->con();
		return $this;
	}

	public $lex;

	protected $path;
	protected $className;
	protected $extendsClass;

	protected $importArray = array();
	protected $packageScriptArray = array();

	public static $SRC_TIME_NAME = "srcTime";
	protected $srcTimeMap;
	public static $NAV_TIME_NAME = "navTime";
	protected $navTimeMap;
	public static $CLASS_PATH_NAME = "classPath";
	protected $classPathArrayMap;
	protected $classPathArray;
	protected $classMapMap = array();
	protected $clearBeforeParse = false;
	protected $enMin = false;

	public static $CLASSES_DIR = "WEB-INF/.classes";
	public static $META_DIR = "WEB-INF/.jsml";
	public static $COMPILED_DIR = '.';
	public static $COMPILED_EXT = '.php';

	protected $parseDirArray = array(
		"WEB-INF/src",
		////"WEB-INF/res",
		"WEB-INF/test"
	);

	public function copyNativeClass($srcDir, $classesDir){
		if(!file_exists($classesDir)) mkdir($classesDir);
		foreach( scanDir($srcDir) as $key => $value ){
			$srcPath = implode("/", array($srcDir, $value) );
			if(is_file($srcPath)){
				$classesPath = implode("/", array($classesDir, $value) );
				$srcTime = filemtime($srcPath);
				$recopy = false;
				if( !file_exists($classesPath) ){
					$recopy = true;
				}
				if(!$recopy && $srcTime > $this->navTimeMap[$srcPath]) $recopy = true;

				if($recopy){
					if( substr($srcPath,-5)=='.jsml' ){
						if(file_exists( substr($srcPath,0,-5) . ".php" )){
							continue;
						}
						$classesPath = substr($classesPath,0,-5) . ".php";
					}
					copy($srcPath, $classesPath);
					$this->navTimeMap[$srcPath] = $srcTime;
					$this->classPathArrayMap[$srcPath] = array($classesPath);
				}
			}
		}
	}

	public function processParseDirArray(){
		$dirArray = array();
		$i = 0;
		foreach($this->parseDirArray as $i => $srcDir){
			if( in_array($srcDir, $dirArray) ) continue;
			array_push($dirArray, $srcDir);
			$this->copyNativeClass($srcDir, self::$CLASSES_DIR);
			while($i < count($dirArray)){
				$dir = $dirArray[$i];
				foreach( scanDir($dir) as $key => $value ){
					if($value=="." || $value==".." || substr($value,0,1)=="." ) continue;
					$path = implode("/", array($dir, $value) );
					if(is_dir($path)){
						array_push($dirArray, $path);

						$classesCurDir = implode("/", array(
						self::$CLASSES_DIR,
						substr($path, strlen($srcDir))
						) );
						$this->copyNativeClass($path, $classesCurDir);
					}
				}
				$i ++;
			}
		}
		return $this->parseDirArray = $dirArray;
	}

	public function processDeleteClassPath(){
		foreach($this->classPathArrayMap as $srcPath=>$classPathArray){
			if( !file_exists($srcPath) ){
				foreach($classPathArray as $i=>$classPath){
					if(file_exists($classPath)) unlink($classPath);
				}
				unset($this->classPathArrayMap[$srcPath]);
				unset($this->srcTimeMap[$srcPath]);
				unset($this->navTimeMap[$srcPath]);
			}
		}
	}

	public function parseAllClass(){
		if($this->clearBeforeParse){
			rmdirAll(self::$CLASSES_DIR);
			rmdirAll(self::$META_DIR);
		}
		if(!file_exists(self::$META_DIR)) mkdir(self::$META_DIR);
		if(!file_exists(self::$CLASSES_DIR)) mkdir(self::$CLASSES_DIR);
		if(!file_exists(self::$COMPILED_DIR)) mkdir(self::$COMPILED_DIR);

		$this->navTimeMap = $this->getMeta(self::$NAV_TIME_NAME);
		$this->srcTimeMap = $this->getMeta(self::$SRC_TIME_NAME);
		$this->classPathArrayMap = $this->getMeta(self::$CLASS_PATH_NAME);
		$this->processParseDirArray();

		foreach($this->parseDirArray as $i=>$dir){
			foreach(scanDir($dir) as $key=>$path){
				$path = implode("/", array($dir, $path) );
				if(is_file($path)){
					if(	substr($path,-5)=='.jsml' ){
						$srcTime = filemtime($path);
						$reparse = false;
						if(!key_exists($path, $this->classPathArrayMap)) {
							$reparse=true;
						}
						else{
							foreach($this->classPathArrayMap[$path] as $j=>$classPath){
								if( !file_exists($classPath) ){
									$reparse = true;
									break;
								}
							}
						}
						if(!$reparse && $srcTime > $this->srcTimeMap[$path]) $reparse = true;

						if($reparse) {
							$this->_parse($path);
							$this->srcTimeMap[$path] = $srcTime;
							$this->classPathArrayMap[$path] = $this->classPathArray;
						}
					}
				}
			}
		}
		$this->processDeleteClassPath();
		$this->saveMeta(self::$NAV_TIME_NAME, $this->navTimeMap);
		$this->saveMeta(self::$SRC_TIME_NAME, $this->srcTimeMap);
		$this->saveMeta(self::$CLASS_PATH_NAME, $this->classPathArrayMap);
	}

	public function parse($mainClass){
		$this->parseAllClass();
		if( !file_exists($this->getClassPath($mainClass)) ) return false;

		$parseClassArray = array(
			 $mainClass ,"jsml_A"
		);
		$processedClassMap = array(
		);
		$processedClassArray = array();

		$nativeArray = array();
		$interfaceArray = array();
		while(1==1){
			if(count($parseClassArray)==0) break;
			$parseClass = array_pop($parseClassArray);
			if( in_array($parseClass, $processedClassArray) ) continue;
			if( in_array($parseClass, $nativeArray) ) continue;
			if( in_array($parseClass, $interfaceArray) ) continue;

			if( (substr($parseClass,-3)=='.js') || (substr($parseClass,-4)=='.css') ){
				array_unshift($nativeArray, $parseClass);
			}
			else{
				$classMap = $this->getClassMap($parseClass, true);
				$extends = $classMap['?:extends'];
				
				if( $processedClassMap[$parseClass]==null ){
					array_push($parseClassArray, $parseClass);
					$processedClassMap[$parseClass]=$parseClass;
				} else{
					array_push($processedClassArray ,$processedClassMap[$parseClass]);
					continue;
				}
				if( $extends!="" && $processedClassMap[$extends]==null ){
					array_push($parseClassArray, $extends);
				}
				for($i=count($classMap['?:import'])-1; $i>=0; $i--){
					$import = $classMap['?:import'][$i];
					if( $processedClassMap[$import]==null ){
						if(! in_array($import ,$parseClassArray)) array_push($parseClassArray, $import);
					}
				}
			}
		}
		/*
		 while($parseClass = array_pop($parseClassArray)){
		 if( in_array($parseClass, $processedClassArray) ) continue;
		 if( in_array($parseClass, $nativeArray) ) continue;
		 if( in_array($parseClass, $interfaceArray) ) continue;

		 if( (substr($parseClass,-3)=='.js') || (substr($parseClass,-4)=='.css') ){
		 array_push($nativeArray, $parseClass);
		 }
		 else{
		 $classMap = $this->getClassMap($parseClass, true);

		 //				if($classMap['?:type'] == 'class'){
		 //					$extendsChainMap[$classMap['?:class']] = $classMap['?:extends'];
		 //				}
		 //				else if($classMap['?:type'] == 'interface'){
		 //					array_push($interfaceArray, $classMap['?:class']);
		 //				}

		 $maxIndex = -1;
		 if($classMap['?:import']!=null){
		 for($i=0; $i < count($classMap['?:import']); $i++){
		 $import = $classMap['?:import'][$i];
		 if( in_array($import, $processedClassArray) ){
		 $index = array_search($import, $processedClassArray);
		 if($index > $maxIndex) $maxIndex = $index;
		 }
		 else{
		 array_push($parseClassArray, $import);
		 }
		 }
		 }
		 array_splice($processedClassArray, $maxIndex+1, 0, $parseClass);
		 }
		 }
		 */
		$filename = implode('', array(self::$COMPILED_DIR, "/", $mainClass, self::$COMPILED_EXT) );
		$handle = null;
		try{
			$handle = fopen($filename, "w");
			fwrite($handle, pack("CCC",0xef,0xbb,0xbf)); 
			/*fwrite($handle,"<? \$old_E = error_reporting(E_ERROR); ob_start('ob_gzhandler'); error_reporting(\$old_E); ?>\n");*/
			fwrite($handle,'<!DOCTYPE html><html><head>');
			////////native old

			foreach($processedClassArray as $i=>$value){
				$this->packageScript($value);
			}
			/*
			fwrite($handle, implode('', array('<script package="1">',"\n")));
			fwrite($handle, implode('', $this->packageScriptArray) );
			fwrite($handle, "</script>\n\n");
			*/
			$staticStringArray = array();
			foreach($processedClassArray as $i=>$value){
				$classMap = $this->getClassMap($value);
				fwrite($handle, implode('', array('<script class="',$value,'">',"\n")));
				if($this->enMin == true) fwrite($handle, JSMin::minify( $classMap['?:code'] ) );
				else fwrite($handle, $classMap['?:code'] );
				array_push($staticStringArray, $classMap['?:static']);
				fwrite($handle, "</script>\n\n");
			}
			
			$nativeArray = array_reverse($nativeArray);
			foreach($nativeArray as $i=>$value){
				$nativePath=implode('', array( self::$CLASSES_DIR, "/", $value ) );
				if(!file_exists($nativePath)) $nativePath=implode('', array( "WEB-INF/res", "/", $value ) );
				if(!file_exists($nativePath)) continue;
				$nativeCode=file_get_contents($nativePath);
				if( (substr($value,-3)=='.js') ){
					fwrite($handle, implode('', array('<script native="',$value,'">',"\n")));
					if($this->enMin == true) fwrite($handle, JSMin::minify( $nativeCode ) );
					else fwrite($handle, $nativeCode );
					fwrite($handle, "</script>\n\n");
				}
				else if( (substr($value,-4)=='.css') ){
					fwrite($handle, implode('', array('<style native="',$value,'">',"\n")));
					//if($this->enMin == true) fwrite($handle, JSMin::minify( file_get_contents(implode('', array( self::$CLASSES_DIR, "/", $value ) ))) );
					//else 
					fwrite($handle, $nativeCode );
					fwrite($handle, "</style>\n\n");
				}
			}

			fwrite($handle, implode('', array('<script static="1">',"\n")));
			fwrite($handle, implode('', $staticStringArray) );
			fwrite($handle, implode('', array("$mainClass.main();\n")));
			fwrite($handle, "</script>\n\n");
			
			fwrite($handle,'</head><body></body></html>');
		}
		catch(Exception $ex){
		}
		if($handle!=null) fclose($handle);
		require_once implode('', array( self::$COMPILED_DIR, "/$mainClass", self::$COMPILED_EXT ) );
		return true;
	}

	public function _parse($path){
		$vo = $this->lex->vo;
		$this->path = $path;
		$this->lex->open(file_get_contents($path));
		$parseArray = array();
		$requireArray = array();
		$this->importArray = array();
		$this->classPathArray = array();
		$this->classMapMap = array();
		$this->className = null;
		$this->htmlName = null;
		$this->varMap = array();
		$this->paramVarMap = array();
		while($token = $this->lex->nextToken()){
			switch($token["type"]){
				case $vo->TYPE_TEXT:
					array_push($parseArray,$token);
					break;
				case $vo->TYPE_STRING:
					$token["string"] = str_replace("\r", "", $token["string"]);
					$token["string"] = str_replace("\n", "\\\n", $token["string"]);
					array_push($parseArray, array( $vo->string => $token["string"], $vo->type => $vo->TYPE_TEXT) );
					break;
				case $vo->TYPE_COMMENT:
					break;
				case $vo->TYPE_TAG_CODE:
					array_push($parseArray,$token);
					break;
				case $vo->TYPE_TAG_WRITE:
					array_push($parseArray,$token);
					break;
				case $vo->TYPE_CODE_CLOSE:
					array_push($parseArray,$token);
					break;
				case $vo->TYPE_CODE_OPEN:
					array_push($parseArray,$token);
					$processArray = array();
					while($popToken = array_pop($parseArray)){
						array_unshift($processArray,$popToken);
						if($popToken["type"] == $vo->TYPE_CODE_CLOSE || $popToken["type"] == $vo->TYPE_WRITE_CLOSE){
							array_push( $parseArray, $this->processHtmlTag(&$processArray));
							break;
						}
					}
					break;
				case $vo->TYPE_WRITE_CLOSE:
					array_push($parseArray,$token);
					$processArray = array();
					while($popToken = array_pop($parseArray)){
						array_unshift($processArray,$popToken);
						if($popToken["type"] == $vo->TYPE_WRITE_OPEN){
							array_push( $parseArray, $this->processWriteTag(&$processArray));
							break;
						}
					}
					break;
				case $vo->TYPE_WRITE_OPEN:
					array_push($parseArray,$token);
					break;
				case $vo->TYPE_CSSCLASS_OPEN:
					array_push($parseArray,$token);
					break;
				case $vo->TYPE_CSSCLASS_CLOSE:
					array_push($parseArray,$token);
					break;
				case $vo->TYPE_VAR:
					array_push($parseArray,$token);
					$var = $token["string"];
					$this->varMap[$var] = $var;
					break;
				case $vo->TYPE_PARAM_VAR:
					array_push($parseArray,$token);
					$var = $token["string"];
					$this->paramVarMap[$var] = $var;
					break;
				case $vo->TYPE_KEYWORD_OPEN:
					array_push($parseArray,$token);
					break;
				case $vo->TYPE_KEYWORD_CLOSE:
					array_push($parseArray,$token);
					$processArray = array();
					while($popToken = array_pop($parseArray)){
						array_unshift($processArray,$popToken);
						if($popToken["type"] == $vo->TYPE_KEYWORD_OPEN){
							if($popToken["string"]=='import'){
								$string = "";
								for($i = 1; $i<count($processArray); $i++){
									$token = $processArray[$i];
									$string .= $token["string"];
								}
								array_push($this->importArray, trim($string, " ;'\"()\r\n"));
							}
							else if($popToken["string"] == 'parent'){
								if($this->extendsClass==null) $this->extendsClass="jsml_Ob";
								$value = "";
								for($i = 1; $i<count($processArray); $i++){
									$token = $processArray[$i];
									$value .= $token["string"];
								}
								$openPos = strpos($value, '(');
								$closePos = strrpos($value, ')');
								$funcName = trim( substr( $value , 0, $openPos) );
								if($funcName=='') $funcName = '.__construct';
								if(substr($funcName,0,2) == "::") $funcName = ".".substr($funcName,2);
								$param = trim( substr( $value , $openPos + 1, $closePos - $openPos - 1) );
								if($param!="") $param = implode('', array(',', $param));
								$value = implode('', array($this->extendsClass, '.prototype', $funcName, '.call(this', $param, ');') );
								array_push($parseArray, array( $vo->string => $value, $vo->type => $vo->TYPE_TEXT) );
							}
							else if($popToken["string"] == 'array'){
								$string = "";
								$isMap = false;
								for($i = 1; $i<count($processArray); $i++){
									$token = $processArray[$i];
									if($token["type"]==$vo->TYPE_KEYWORD && $token["string"]=='=>'){
										$token["string"] = ":";
										if($isMap == false) $isMap = true;
									}
									$string .= $token["string"];
								}
								$pos1 = strpos($string, "(")+1;
								$pos2 = strrpos($string, ")")-1;
								$string = substr($string, $pos1, $pos2-$pos1 + 1);
								if(trim(substr($string, 0, strpos($string,":")), ' "') == "__new__") $string="";
								$str2 = trim($string," \t");
								if( $str2 == "\n" || $str2 == "\r" || $str2 == "\r\n" ) $isMap = true;
								if($isMap == true) $string = '{'.$string.'}';
								else $string = '['.$string.']';
								array_push($parseArray, array( $vo->string => $string, $vo->type => $vo->TYPE_TEXT) );
							}
							else if($popToken["string"] == 'foreach'){
								$string = "";
								$string1 = "";
								$string2 = "";
								$string3 = "";
								$_string = &$string1;
								for($i = 1; $i<count($processArray); $i++){
									$token = $processArray[$i];
									if($token["type"]==$vo->TYPE_KEYWORD && $token["string"]=='as'){
										unset($_string);
										$_string = &$string2;
										continue;
									}
									if($token["type"]==$vo->TYPE_KEYWORD && $token["string"]=='=>'){
										unset($_string);
										$_string = &$string3;
										continue;
									}
									$_string .= $token["string"];
								}
								unset($_string);
								$pos1 = strpos($string1, "(")+1;
								$string1 = trim(substr($string1, $pos1));
								$string2 = trim($string2);
								$pos3 = strrpos($string3, ")");
								$string3 = trim(substr($string3, 0, $pos3));
								$string = "for($string2 in $string1)";

								$nextToken = $this->lex->nextToken();
								$pos = strpos($nextToken["string"], "{")+1;
								$nextToken["string"] = substr($nextToken["string"], $pos);
								$nextToken["string"] = "{var $string3 = $string1"."[".$string2."];" . $nextToken["string"];
								$prevToken = array_pop($parseArray);
								$string = $prevToken["string"] . $string .$nextToken["string"];
								array_push($parseArray, array( $vo->string => $string, $vo->type => $vo->TYPE_TEXT) );
							}
							break;
						}
					}
					break;
				case $vo->TYPE_KEYWORD:
					array_push($parseArray,$token);
					if($token["string"]=='->'){
						$token = array_pop($parseArray);
						$token["string"] = ".";
						array_push($parseArray,$token);
					}
					else if($token["string"]=='::'){
						$token = array_pop($parseArray);
						$token["string"] = ".";
						array_push($parseArray,$token);
					}
					else if($token["string"]=='.'){
						$token = array_pop($parseArray);
						$token["string"] = "+";
						array_push($parseArray,$token);
					}
					else if($token["string"]=='Exception'){
						$token = array_pop($parseArray);
					}
					else if($token["string"]=='class'){
						$textToken = $this->lex->nextToken();
						array_push($parseArray,$textToken);
						$this->className = trim($textToken["string"], " \r\n");
					}
					else if($token["string"]=='extends'){
						$textToken = $this->lex->nextToken();
						array_push($parseArray,$textToken);
						$this->extendsClass = trim($textToken["string"], " \r\n");
					}
					else if($token["string"]=='interface'){
						$textToken = $this->lex->nextToken();
						array_push($parseArray,$textToken);
						$this->className = trim($textToken["string"], " \r\n");
					}
					else if($token["string"]=='self'){
						$token = array_pop($parseArray);
						$token["string"] = $this->className;
						array_push($parseArray,$token);
					}
					break;
				case $vo->TYPE_INTERFACE:
					$processArray = array();
					while($popToken = array_pop($parseArray)){
						array_unshift($processArray,$popToken);
						if($popToken["type"] == $vo->TYPE_KEYWORD){
							if($popToken["string"] == 'interface'){
								$this->classMapMap[$this->className] = $this->processInterface(&$processArray);
								array_unshift($this->importArray, $this->className);
								array_push($this->classPathArray, $this->getClassPath($this->className));
								break;
							}
						}
					}
					$this->className = null;
					$this->extendsClass = null;
					break;
				case $vo->TYPE_CLASS_OPEN:
					array_push($parseArray,$token);
					break;
				case $vo->TYPE_CLASS_CLOSE:
					array_push($parseArray,$token);
					$processArray = array();
					while($popToken = array_pop($parseArray)){
						array_unshift($processArray,$popToken);
						if($popToken["type"] == $vo->TYPE_KEYWORD){
							if($popToken["string"] == 'class'){
								$this->classMapMap[$this->className] = $this->processClass(&$processArray);
								array_unshift($this->importArray, $this->className);
								array_push($this->classPathArray, $this->getClassPath($this->className) );
								break;
							}
						}
					}
					$this->className = null;
					$this->extendsClass = null;
					break;
				case $vo->TYPE_FUNC_PARAM_OPEN:
					array_push($parseArray,$token);
					break;
				case $vo->TYPE_FUNC_PARAM_CLOSE:
					array_push($parseArray,$token);
					break;
				case $vo->TYPE_FUNC_OPEN:
					array_push($parseArray,$token);
					break;
				case $vo->TYPE_FUNC_CLOSE:
					array_push($parseArray,$token);
					$processArray = array();
					while($popToken = array_pop($parseArray)){
						if($popToken["type"] == $vo->TYPE_KEYWORD && $popToken["string"] == 'static'){
							array_push($parseArray, $popToken);
							array_pop($processArray);
							array_shift($processArray);
							array_shift($processArray);
							array_push($parseArray, $this->processFuncBody(&$processArray));
							break;
						}
						array_unshift($processArray,$popToken);
						if($popToken["type"] == $vo->TYPE_FUNC_PARAM_OPEN){
							array_push($parseArray, $this->processFuncBody(&$processArray));
							break;
						}
					}
					break;
				default:
					array_push($parseArray,$token);
					break;
			}
		}
		$static = "";
		while($popToken = array_pop($parseArray)){
			$static = $popToken["string"] . $static;
		}
		$static = trim($static, " \t\r\n");
		foreach($this->classMapMap as $class => $classMap){
			if($static!=null){
				$classMap['?:static'] .= $static."\r\n";
				$static = null;
			}
			$classMap['?:import'] = $this->importArray;
			$this->saveClassMap($class, $classMap);
		}
	}

	public function packageScript($className){
		$classPartArray = explode('.',$className);
		for($i=0; $i<count($classPartArray) - 1; $i++){
			$classPart = implode('',array( $classPart, '.', $classPartArray[$i] ) );
			$classPart = trim($classPart, ".");
			if(!array_key_exists($classPart, $this->packageScriptArray)){
				$this->packageScriptArray[$classPart] = "$classPart = {};\n";
			}
		}
	}

	public function processHtmlTag($processArray){
		$vo = $this->lex->vo;
		$stringArray = array();
		$isEnd = false;
		for($i=0; $i<count($processArray); $i++){
			$token = $processArray[$i];
			switch($token["type"]){
				case $vo->TYPE_CODE_CLOSE:
					array_push( $stringArray,"\r\n");
					break;
				case $vo->TYPE_CODE_OPEN:
					break;
				default:
					$string = $token["string"];
					//$string = trim($token["string"],"\t\r\n");
					$string = str_replace("\r\n","\n", $string);
					$string = str_replace("\t\n"," ",$string);
					$string = str_replace("\t","",$string);
					$string = str_replace("\n","\\\n",$string);
					$string = str_replace("\r","\\\n",$string);
					$string = str_replace("'","\'",$string);
					if($i==1){
						$pos1 = strpos($string, "<!--$");
						$pos2 = strpos($string, "-->");
						if($pos1!==false && $pos2!==false && $pos2 > $pos1){
							$pos1 = $pos1 + 5;
							$this->htmlName = substr($string, $pos1, $pos2 - $pos1);
							$string = substr($string, $pos2 + 3);
							array_push( $stringArray, "var \$$this->htmlName = '';\r\nvar \$__".$this->htmlName."Array = new Array();\r\n" );
							$isEnd = false;
						}
					}
					if($i==count($processArray)-2){
						$pos1 = strrpos($string, "<!--/$");
						$pos2 = strrpos($string, "-->");
						if($pos1!==false && $pos2!==false && $pos2 > $pos1){
							$string = substr($string, 0, $pos1);
							$isEnd = true;
						}
					}
					array_push( $stringArray, implode('', array("\$__".$this->htmlName."Array.push('", $string, "');\r\n") ) );
					if($isEnd){
						array_push( $stringArray, '$'.$this->htmlName.' = $__'.$this->htmlName.'Array.join("");' );
						$this->htmlName = null;
					}
					break;
			}
		}
		return array( $vo->string => implode('',$stringArray), $vo->type => $vo->TYPE_TEXT );
	}

	public function processWriteTag($processArray){
		$vo = $this->lex->vo;
		$stringArray = array();
		$string = "";
		for($i=0; $i<count($processArray); $i++){
			$token = $processArray[$i];
			switch($token["type"]){
				case $vo->TYPE_WRITE_CLOSE:
					array_push( $stringArray, implode('', array("\$__".$this->htmlName."Array.push(", $string, ");\r\n") ) );
					break;
				case $vo->TYPE_WRITE_OPEN:
					break;
				default:
					$string .= trim($token["string"],"\t\r\n");
					break;
			}
		}
		return array( $vo->string => implode('',$stringArray), $vo->type => $vo->TYPE_TEXT );
	}

	public function processFuncBody($processArray){
		$vo = $this->lex->vo;
		$stringArray = array();
		for($i=0; $i<count($processArray); $i++){
			$token = $processArray[$i];
			$str = $token["string"];
			if($str=="{"){
				$str .= "\nvar \$this = this;";
				$str .= " var \$__arguments = arguments;";
				foreach ($this->varMap as $key => $value){
					if($value == '$this') continue;
					if($value == '$_') continue;
					if(substr($value,0,3) == '$__') continue;
					if($this->paramVarMap[$key] != null) continue;
					$str .= " var $value = null;";
				}
			}
			array_push($stringArray, $str);
		}
		$this->varMap = array();
		$this->paramVarMap = array();
		return array( $vo->string => implode('',$stringArray), $vo->type => $vo->TYPE_TEXT );
	}

	public function getJsmlReflection($className, $extends, $interface){
		$vo = $this->lex->vo;
		$stringArray = array();

		if($extends && $className != 'jsml_Ob'){
			array_push($stringArray, $className, '.prototype = new ', $extends, "('__extends__');\r\n");
			array_push($stringArray, $className, '.prototype.__extends = ', $extends, ';', "\r\n");
			//array_push($stringArray, $className, '.jsmlSuper = ', $extends, '.prototype;', "\r\n");
		}
		else {
			array_push($stringArray, $className, '.prototype.__extends = null;', "\r\n");
			//array_push($stringArray, $className, '.jsmlSuper = null;', "\r\n");
		}
		/*
		 array_push($stringArray, $className, '.getJsmlSuper = function(){', "\r\n");
		 array_push($stringArray, "return $className.jsmlSuper;", "\r\n");
		 array_push($stringArray, '}', "\r\n");
		 */
		array_push($stringArray, $this->className, '.prototype.constructor = ', $className, ";\r\n");
		array_push($stringArray, $this->className, '.prototype.__class = ', $className, ';', "\r\n");
		array_push($stringArray, $className, ".__className = '$className';", "\r\n");
		$arr = explode("_", $className);
		$name = $arr[count($arr)-1];
		array_push($stringArray, $className, ".__name = '$name';", "\r\n");
		/*
		 array_push($stringArray, $className, '.getJsmlName = function(){', "\r\n");
		 array_push($stringArray, "\treturn $className.jsmlName;", "\r\n");
		 array_push($stringArray, '}', "\r\n");
		 */
		array_push($stringArray, $className, '.__obReflection__ = null;', "\r\n");
		array_push($stringArray, $className, '.__getObReflection = function(){', "\r\n");
		array_push($stringArray, "\tif($className.__obReflection__ != null) return $className.__obReflection__;", "\r\n");
		array_push($stringArray, "\t$className.__obReflection__ = new jsml_ObReflection();", "\r\n");
		array_push($stringArray, "\t$className.__obReflection__.__class = $className;", "\r\n");

		if($extends && $className != 'jsml_Ob'){
			$extendsClassArray = explode(",", $extends);
			foreach($extendsClassArray as $key=>$value){
				$value = trim($value);
				array_push($stringArray, "\t$className.__obReflection__.__extends = $value;", "\r\n");
			}
		}

		if($interface){
			$extendsClassArray = explode(",", $interface);
			foreach($extendsClassArray as $key=>$value){
				$value = trim($value);
				array_push($stringArray, "\t$className.__obReflection__.__interface['$value'] = $value;", "\r\n");
			}
		}
		array_push($stringArray, "\treturn $className.__obReflection__;", "\r\n");
		array_push($stringArray, '}', "\r\n");

		return implode('',$stringArray);
	}

	public function processInterface($processArray){
		$vo = $this->lex->vo;
		if($this->className==null) return;

		$classArray = array();
		array_push($classArray, $this->className, " = function(){}\r\n");

		for($i=2;$i<count($processArray);$i++){
			$process = $processArray[$i];
			if( $process["type"] == $vo->TYPE_KEYWORD ){
				if($process["string"] == 'extends'){
					$interface = trim($processArray[$i+1]["string"], " \t\r\n");

					$i = $i+1;
				}
			}
		}

		array_push($classArray,
		$this->getJsmlReflection($this->className,null,$interface)
		);
		$string = implode('',$classArray);

		return array(
			'?:import'=>$this->importArray,
			'?:type'=>'interface',
			'?:class'=>$this->className,
			'?:extends'=>'',
			'?:code'=>$string,
			'?:static'=>''
			);
	}

	public function processClass($processArray){
		$vo = $this->lex->vo;
		if($this->className==null) return;
		$classArray = array();
		//array_push($classArray, "", $this->className, " = new Object();\r\n");
		array_push($classArray, $this->className, " = function(){}\r\n");
		$propArray = array();
		$propStaticArray = array();
		$funcArray = array();
		$funcStaticArray = array();
		$extends = null;
		$interface = null;
		$staticStringArray = array();

		for($i=2;$i<count($processArray);$i++){
			$process = $processArray[$i];
			if( $process["type"] == $vo->TYPE_KEYWORD ){
				if($process["string"] == 'extends'){
					$this->extendsClass = trim($processArray[$i+1]["string"], " \t\r\n");
					$extends = $this->extendsClass;

					$i = $i+1;
				}
				else if($process["string"] == 'implements'){
					$interface = trim($processArray[$i+1]["string"], " \t\r\n");

					$i = $i+1;
				}
				else if($process["string"] == 'abstract'){

				}
				else if( in_array( $process["string"], array('public','protected','private') ) ){
					if($processArray[$i+2]["type"] == $vo->TYPE_KEYWORD){
						if($processArray[$i+2]["string"] == 'static'){
							if($processArray[$i+4]["type"] == $vo->TYPE_KEYWORD){
								if($processArray[$i+4]["string"] == 'function'){
									array_push( $funcStaticArray, implode('',array($this->className, '.', $processArray[$i+5]["string"] , ' = function', $processArray[$i+6]["string"], "\r\n"  ) ) );
									$i = $i+6;
								}
							}
							else {
								$value = trim($processArray[$i+3]["string"] . $processArray[$i+4]["string"]);
								//if(substr($value, 0, 1) == '$') $value = substr($value, 1);
								if(!strpos($value, '=')) $value = implode('', array(substr($value,0,-1), '=null;') );
								array_push( $propStaticArray, implode('',array($this->className, '.', $value, "\r\n" )) );
								$i = $i+3;
							}
						}
						else if($processArray[$i+2]["string"] == 'function'){
							$funcName = trim($processArray[$i+3]["string"], " \t\r\n");
							if($funcName == $this->className) $funcName = '__construct';
							array_push( $funcArray, implode('',array( $this->className,'.prototype.', $funcName, ' = function', $processArray[$i+4]["string"], "\r\n"  ) ) );
							$i = $i+4;
						}
					}
					else{
						$value = "";
						for($j = 1; ;$j++){
							$value .= $processArray[$i+$j]["string"];
							if($processArray[$i+$j]["name"] == "property") break;
						}
						$value = trim($value);
						if(substr($value, 0, 1) == '$') $value = substr($value, 1);
						if(!strpos($value, '=')) $value = implode('', array(substr($value,0,-1), '=null;') );
						array_push( $propArray, implode('',array("\tthis.",$value, "\r\n")) );
						//array_push( $propArray, implode('',array("\t$this->className.prototype.",$value, "\r\n")) );
						$i = $i+1;
					}
				}
				else if($process["string"] == 'static'){
					$static = $processArray[$i+1]["string"];
					array_push($staticStringArray, $static);
					$i = $i+1;
				}
			}
		}
		$staticCallString="";
		if(count($staticStringArray)>0){
			array_push( $funcStaticArray, implode('',array(
			$this->className, '.', '__static' , " = function(){\n",
			implode('', $staticStringArray) ,
				"}\n"
				)));
				$staticCallString = implode('', array($this->className, '.', "__static();\n"));
		}

		$classFunc = &$classArray[count($classArray)-1];
		$curlyPos = strpos($classFunc, "{");

		$prop = implode('', $propArray);

		if(!$extends)$extends = 'jsml_Ob';
		if($this->className == 'jsml_Ob'){
			$extends = null;
		}
		$superInitCall="";
		if($extends != null) $superInitCall = "\t$extends.call(this,'__init__');\r\n";

		$classFunc = implode('', array(
		substr($classFunc,0,$curlyPos + 1), "\r\n",
			"\tif(arguments.length==1 && arguments[0]=='__extends__') return;\r\n",
		$superInitCall,
		$prop,
			"\tif(arguments.length==1 && arguments[0]=='__init__') return;\r\n",
			"\tif(this.__construct) this.__construct.apply(this,arguments);\r\n",
		substr($classFunc, $curlyPos + 1)
		));

		array_push($classArray,
		$this->getJsmlReflection($this->className, $extends, $interface)
		);

		$class = implode('',$classArray);

		$propStatic = implode('', $propStaticArray);

		$funcStatic = implode('', $funcStaticArray);

		$func = implode('', $funcArray);

		$string = implode('',array(
		$class, $propStatic, $funcStatic, $func
		));

		return array(
			'?:import'=>$this->importArray,
			'?:type'=>'class',
			'?:class'=>$this->className,
			'?:extends'=>$extends,
			'?:code'=>$string,
			'?:static'=>$staticCallString
		);
	}

	public function getClassMap($class, $excludeCode=false){
		$classPath = $this->getClassPath($class);
		if(!file_exists($classPath)) return array();
		$classMap = array();
		$keyArray = array('?:import', '?:type', '?:class', '?:extends', '?:code', '?:static');
		foreach($keyArray as $i=>$key){
			if($excludeCode){
				if($key=='?:code' || $key=='?:static') continue;
			}
			$open = implode('', array("<", $key, ">"));
			$close = implode('', array("</", $key, ">"));
			//print_p($classPath);
			////////////////////////////////////!check
			$string = file_get_contents($classPath);
			$start = strpos($string, $open) + strlen($open);
			$end = strpos($string, $close);
			$classMap[$key] = substr($string, $start, $end - $start);
			if($key == "?:import"){
				if($classMap[$key]=='') {
					$classMap[$key] = array();
				}
				else $classMap[$key] = explode("\n", $classMap[$key]);
			}
		}
		return $classMap;
	}

	public function saveClassMap($class, $classMap){
		$classPath = $this->getClassPath($class);
		$stringArray = array();
		foreach($classMap as $key=>$value){
			if($key == "?:import"){
				$value = implode("\n", $value);
			}
			array_push($stringArray, implode('', array("<", $key, ">", $value, "</", $key, ">")) );
		}

		file_put_contents($classPath,
		implode("\n", $stringArray)
		);
	}

	public function getClassPath($class){
		$stringArray = null;
		if(strpos($class, ".") === FALSE) $stringArray = explode('_', $class);
		else $stringArray = explode('.', $class);
		array_unshift($stringArray, self::$CLASSES_DIR);
		return implode('', array(
		implode('/',$stringArray),
			'.jsml.class'
			));
	}

	public function getMetaPath($name){
		return implode('', array(self::$META_DIR, "/$name.dat"));
	}

	public function saveMeta($name, $data){
		file_put_contents( $this->getMetaPath($name), json_encode($data) );
	}

	public function getMeta($name){
		$metaPath = $this->getMetaPath($name);
		if(!file_exists($metaPath)) return array();
		$meta = json_decode( file_get_contents($metaPath), true );
		if($meta == null) $meta=array();
		return $meta;
	}
}
