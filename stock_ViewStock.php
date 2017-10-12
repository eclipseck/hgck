<!DOCTYPE html><html><head><script class="jsml_Ob">
jsml_Ob = function(){
	if(arguments.length==1 && arguments[0]=='__extends__') return;
	this.__jsonOptionMap = {
	};
	if(arguments.length==1 && arguments[0]=='__init__') return;
	if(this.__construct) this.__construct.apply(this,arguments);
}
jsml_Ob.prototype.__extends = null;
jsml_Ob.prototype.constructor = jsml_Ob;
jsml_Ob.prototype.__class = jsml_Ob;
jsml_Ob.__className = 'jsml_Ob';
jsml_Ob.__name = 'Ob';
jsml_Ob.__obReflection__ = null;
jsml_Ob.__getObReflection = function(){
	if(jsml_Ob.__obReflection__ != null) return jsml_Ob.__obReflection__;
	jsml_Ob.__obReflection__ = new jsml_ObReflection();
	jsml_Ob.__obReflection__.__class = jsml_Ob;
	return jsml_Ob.__obReflection__;
}
jsml_Ob.prototype.con = function(){
var $this = this; var $__arguments = arguments;
		return $this;
	}
jsml_Ob.prototype.jsonOption = function($map){
var $this = this; var $__arguments = arguments;
		$this.__jsonOptionMap = $map;
		return $this;
	}
jsml_Ob.prototype.json = function(){
var $this = this; var $__arguments = arguments; var $func = null; var $arr = null; var $aoClass = null; var $jsonpUrl = null; var $crossDomain = null; var $dataType = null; var $data = null; var $contentType = null; var $type = null; var $paramArr = null; var $i = null; var $url = null; var $headers = null; var $s = null; var $lenMax = null; var $_paramArr = null; var $event = null;
		$func = $this.__class.__getObReflection().getFuncName($this.json.caller);
		$arr = explode("_" ,$this.__class.__className);
		$aoClass = $arr[0]+"_Ao";
		eval('$this.ao = '+$aoClass+'.get()');
		if($this.ao.canExe($this.__class.__className ,$func)==false) {
								}
		
				$jsonpUrl = $this.__jsonOptionMap["jsonpUrl"]; if($jsonpUrl==null) $jsonpUrl = "";
		if($jsonpUrl != ""){
			$crossDomain = true;
			$dataType = "jsonp";
		} else {
			$crossDomain = false;
			$dataType = "jsonp";
		}
		$data = $this.__jsonOptionMap["data"]; if($data ==null) $data = {
		};
		$contentType = $this.__jsonOptionMap["contentType"]; if($contentType ==null) "application/json";
		$type = $this.__jsonOptionMap["type"]; if($type ==null) $type = "GET";
		$contentType = $this.__jsonOptionMap["contentType"]; if($contentType ==null) "application/json";
		$this.__jsonOptionMap = {
		};
		
		$paramArr = [];
		for( $i=0; $i<$__arguments.length; $i++){
			$paramArr.push($__arguments[$i]);
		}
		
		$url="j.php";
		if($jsonpUrl!="") $url = $jsonpUrl+$url;
		
						$headers = {
		};
		$headers["jsml_idSession"] = 0;
				$s = [$this.__class.__className,"/",$func,"/", JSON.stringify($paramArr)].join("");
		
		$lenMax=4000;
		if($s.length<$lenMax){
						$data["s"]=$s;
		} else {
			$type = "POST";
			$data["s"]=$s;
		}
		
				return $__que.ajax({
			url: $url
			,"data": $data
			,"dataType": $dataType
			,"crossDomain": $crossDomain
			,"type": $type
			,"contentType": $contentType
			,"__paramArr__":$paramArr
			,"headers":$headers
			,"success": function($result, $textStatus){
									 $dataType = this.dataType;
				 $_paramArr = this.__paramArr__;
																								
					if($dataType=="html") $result = $__que.parseJSON($result);
					if($result["__jsmlErrorBy__"] != null) return;
																				$event = $__que.Event( "rpc."+$func , { "paramArr":$_paramArr } );
					que($this).trigger($event, arg($result["return"]));
																										}
			,"error": function ($XMLHttpRequest, $textStatus, $errorThrown) {
								$event = $__que.Event( "rpc."+$func , { "paramArr":$_paramArr } );
				 if(typeof $this['rpcError'] != 'undefined') $this.rpcError($event);
			$__console.error($errorThrown);
							}
		});
		return $this;
	}
</script>

<script class="jsml_ObReflection">
jsml_ObReflection = function(){
	if(arguments.length==1 && arguments[0]=='__extends__') return;
	jsml_Ob.call(this,'__init__');
	if(arguments.length==1 && arguments[0]=='__init__') return;
	if(this.__construct) this.__construct.apply(this,arguments);
}
jsml_ObReflection.prototype = new jsml_Ob('__extends__');
jsml_ObReflection.prototype.__extends = jsml_Ob;
jsml_ObReflection.prototype.constructor = jsml_ObReflection;
jsml_ObReflection.prototype.__class = jsml_ObReflection;
jsml_ObReflection.__className = 'jsml_ObReflection';
jsml_ObReflection.__name = 'ObReflection';
jsml_ObReflection.__obReflection__ = null;
jsml_ObReflection.__getObReflection = function(){
	if(jsml_ObReflection.__obReflection__ != null) return jsml_ObReflection.__obReflection__;
	jsml_ObReflection.__obReflection__ = new jsml_ObReflection();
	jsml_ObReflection.__obReflection__.__class = jsml_ObReflection;
	jsml_ObReflection.__obReflection__.__extends = jsml_Ob;
	return jsml_ObReflection.__obReflection__;
}
jsml_ObReflection.prototype.getFuncName = function($func){
var $this = this; var $__arguments = arguments; var $value = null; var $i = null;
		for($i in $this.__class.prototype){var $value = $this.__class.prototype[$i];
			if($value==$func) return $i;
		}
	}
</script>

<script class="jsml_Ao">
jsml_Ao = function(){
	if(arguments.length==1 && arguments[0]=='__extends__') return;
	jsml_Ob.call(this,'__init__');
	this.beanMap=null;
	if(arguments.length==1 && arguments[0]=='__init__') return;
	if(this.__construct) this.__construct.apply(this,arguments);
}
jsml_Ao.prototype = new jsml_Ob('__extends__');
jsml_Ao.prototype.__extends = jsml_Ob;
jsml_Ao.prototype.constructor = jsml_Ao;
jsml_Ao.prototype.__class = jsml_Ao;
jsml_Ao.__className = 'jsml_Ao';
jsml_Ao.__name = 'Ao';
jsml_Ao.__obReflection__ = null;
jsml_Ao.__getObReflection = function(){
	if(jsml_Ao.__obReflection__ != null) return jsml_Ao.__obReflection__;
	jsml_Ao.__obReflection__ = new jsml_ObReflection();
	jsml_Ao.__obReflection__.__class = jsml_Ao;
	jsml_Ao.__obReflection__.__extends = jsml_Ob;
	return jsml_Ao.__obReflection__;
}
jsml_Ao.$obj=null;
jsml_Ao. get = function(){
var $this = this; var $__arguments = arguments; var $obj = null;if(jsml_Ao.$obj == null){jsml_Ao.$obj = new jsml_Ao();jsml_Ao.$obj.con();} return jsml_Ao.$obj;}
jsml_Ao.prototype.con = function(){
var $this = this; var $__arguments = arguments;
		return $this;
	}
jsml_Ao.prototype.bean = function($name){
var $this = this; var $__arguments = arguments; var $arr = null; var $bean = null;
		if($this.beanMap==null) $this.beanMap={
		};
		if($this.beanMap[$name]==null){
			$arr=explode("/",$name);
			eval('$bean=new '+$arr[0]+'();');
			$this.beanMap[$name] = $bean;
			 eval('$bean.'+$arr[1]+'();');

					}
		return $this.beanMap[$name];
	}
jsml_Ao.prototype.canExe = function(){
var $this = this; var $__arguments = arguments;
		return true;
	}
jsml_Ao.prototype.getUrlBrowser = function(){
var $this = this; var $__arguments = arguments; var $arr = null; var $str = null; var $re = null;
		return $this.getUrlExcept( ["#",".php",".htm",".html"] );
		$arr = explode("/" ,$__win.location.href);
		do{
			$str = trim(array_pop($arr));
			if($str == "") continue;
			if($str.indexOf("#")>=0) continue;
			if($str.indexOf(".php")>=0) continue;
			if($str.indexOf(".htm")>=0) continue;
			if($str.indexOf(".html")>=0) continue;
			array_push($arr,$str);
			break;
		} while(1==1);
		array_push($arr,"");
		$re = implode("/",$arr);
				return $re;
			}
jsml_Ao.prototype.getUrlBase = function(){
var $this = this; var $__arguments = arguments;
		return $this.getUrlExcept( ["#",".php",".htm",".html","-"] );
	}
jsml_Ao.prototype.getUrlExcept = function($exceptArr){
var $this = this; var $__arguments = arguments; var $arr = null; var $str = null; var $break = null; var $val = null; var $re = null;
		$arr = explode("/" ,$__win.location.href);
		do{
			$str = trim(array_pop($arr));
			if($str == "") continue;
			$break = false;
			for($i in $exceptArr){var $val = $exceptArr[$i];
				if($str.indexOf($val)>=0) {
					$break = true;
					break;
				}
			}
			if($break) break;
			array_push($arr,$str);
			break;
		} while(1==1);
		array_push($arr,"");
		$re = implode("/",$arr);
				return $re;
			}
</script>

<script class="stock_ObDs">
stock_ObDs = function(){
	if(arguments.length==1 && arguments[0]=='__extends__') return;
	jsml_Ob.call(this,'__init__');
	this.pdo=null;
	if(arguments.length==1 && arguments[0]=='__init__') return;
	if(this.__construct) this.__construct.apply(this,arguments);
}
stock_ObDs.prototype = new jsml_Ob('__extends__');
stock_ObDs.prototype.__extends = jsml_Ob;
stock_ObDs.prototype.constructor = stock_ObDs;
stock_ObDs.prototype.__class = stock_ObDs;
stock_ObDs.__className = 'stock_ObDs';
stock_ObDs.__name = 'ObDs';
stock_ObDs.__obReflection__ = null;
stock_ObDs.__getObReflection = function(){
	if(stock_ObDs.__obReflection__ != null) return stock_ObDs.__obReflection__;
	stock_ObDs.__obReflection__ = new jsml_ObReflection();
	stock_ObDs.__obReflection__.__class = stock_ObDs;
	stock_ObDs.__obReflection__.__extends = jsml_Ob;
	return stock_ObDs.__obReflection__;
}
stock_ObDs.prototype.con = function() {
var $this = this; var $__arguments = arguments;


		return $this;
	}
stock_ObDs.prototype.pdoAppfog = function(){
var $this = this; var $__arguments = arguments;


	}
</script>

<script class="stock_Ao">
stock_Ao = function(){
	if(arguments.length==1 && arguments[0]=='__extends__') return;
	jsml_Ao.call(this,'__init__');
	if(arguments.length==1 && arguments[0]=='__init__') return;
	if(this.__construct) this.__construct.apply(this,arguments);
}
stock_Ao.prototype = new jsml_Ao('__extends__');
stock_Ao.prototype.__extends = jsml_Ao;
stock_Ao.prototype.constructor = stock_Ao;
stock_Ao.prototype.__class = stock_Ao;
stock_Ao.__className = 'stock_Ao';
stock_Ao.__name = 'Ao';
stock_Ao.__obReflection__ = null;
stock_Ao.__getObReflection = function(){
	if(stock_Ao.__obReflection__ != null) return stock_Ao.__obReflection__;
	stock_Ao.__obReflection__ = new jsml_ObReflection();
	stock_Ao.__obReflection__.__class = stock_Ao;
	stock_Ao.__obReflection__.__extends = jsml_Ao;
	return stock_Ao.__obReflection__;
}
stock_Ao.$obj=null;
stock_Ao. get = function(){
var $this = this; var $__arguments = arguments; var $obj = null;if(stock_Ao.$obj == null){stock_Ao.$obj = new stock_Ao();stock_Ao.$obj.con();} return stock_Ao.$obj;}
stock_Ao.prototype.con = function(){
var $this = this; var $__arguments = arguments;
		$this.pdo = $this.bean("stock_ObDs/con").pdo;
		$this.urlJ = null;		return $this;
	}
stock_Ao.prototype.toDate = function($str){
var $this = this; var $__arguments = arguments; var $arr = null;
		if($str==null || trim($str)=="") return null;
		$arr = explode("-", $str);
		return mktime(0,0,0,$arr[1],$arr[2],$arr[0]);
	}
stock_Ao.prototype.getTplus = function($date){
var $this = this; var $__arguments = arguments; var $now = null; var $tp = null; var $j = null; var $dayNum = null;
		if($date==null||trim($date)=="") return null;
		$date=$this.toDate($date);
		$now=$this.toDate(date("y-m-d"));
		$tp=round(($now-$date)/(24*60*60));
		for($j=0;$j<=$tp;$j++){
			$dayNum=""+date("w",$date+$j*24*60*60);
			if($dayNum=="0"||$dayNum=="6"){
				$tp--;
			}
		}
		return $tp;
	}
stock_Ao.prototype.mapNoNull = function($map){
var $this = this; var $__arguments = arguments;
		if($map==null) return {
		};
		return $map;
	}
stock_Ao.prototype.isNullEmpty = function($value){
var $this = this; var $__arguments = arguments;
		if($value==null || trim($value)=="") return true;
		return false;
	}
stock_Ao.prototype.isNull0 = function($value){
var $this = this; var $__arguments = arguments;
		if($value==null || $value==0) return true;
		return false;
	}
stock_Ao.prototype.isNullEmpty0 = function($value){
var $this = this; var $__arguments = arguments;
		if($value==null || $value==0 || trim($value)=="") return true;
		return false;
	}
stock_Ao.prototype.isAppfog = function(){
var $this = this; var $__arguments = arguments; var $_SERVER = null;
		if( strpos($_SERVER["SERVER_NAME"], ".aws.af.cm") > 0 ) return true;
		return false;
	}
stock_Ao.prototype.canSaveAppfog = function(){
var $this = this; var $__arguments = arguments;
return false;
		if($this.isOffline()) return false;
		if($this.isAppfog()) return false;
		return true;
	}
stock_Ao.prototype.isOffline = function(){
var $this = this; var $__arguments = arguments;
		return false;
	}
</script>

<script class="stock_ObJfile">
stock_ObJfile = function(){
	if(arguments.length==1 && arguments[0]=='__extends__') return;
	jsml_Ob.call(this,'__init__');
	if(arguments.length==1 && arguments[0]=='__init__') return;
	if(this.__construct) this.__construct.apply(this,arguments);
}
stock_ObJfile.prototype = new jsml_Ob('__extends__');
stock_ObJfile.prototype.__extends = jsml_Ob;
stock_ObJfile.prototype.constructor = stock_ObJfile;
stock_ObJfile.prototype.__class = stock_ObJfile;
stock_ObJfile.__className = 'stock_ObJfile';
stock_ObJfile.__name = 'ObJfile';
stock_ObJfile.__obReflection__ = null;
stock_ObJfile.__getObReflection = function(){
	if(stock_ObJfile.__obReflection__ != null) return stock_ObJfile.__obReflection__;
	stock_ObJfile.__obReflection__ = new jsml_ObReflection();
	stock_ObJfile.__obReflection__.__class = stock_ObJfile;
	stock_ObJfile.__obReflection__.__extends = jsml_Ob;
	return stock_ObJfile.__obReflection__;
}
</script>

<script class="stock_ViewPrice">
stock_ViewPrice = function(){
	if(arguments.length==1 && arguments[0]=='__extends__') return;
	jsml_Ob.call(this,'__init__');
	this.importDir = 'WEB-INF/files/stock/metastock/';
	this.year = 2000;
	if(arguments.length==1 && arguments[0]=='__init__') return;
	if(this.__construct) this.__construct.apply(this,arguments);
}
stock_ViewPrice.prototype = new jsml_Ob('__extends__');
stock_ViewPrice.prototype.__extends = jsml_Ob;
stock_ViewPrice.prototype.constructor = stock_ViewPrice;
stock_ViewPrice.prototype.__class = stock_ViewPrice;
stock_ViewPrice.__className = 'stock_ViewPrice';
stock_ViewPrice.__name = 'ViewPrice';
stock_ViewPrice.__obReflection__ = null;
stock_ViewPrice.__getObReflection = function(){
	if(stock_ViewPrice.__obReflection__ != null) return stock_ViewPrice.__obReflection__;
	stock_ViewPrice.__obReflection__ = new jsml_ObReflection();
	stock_ViewPrice.__obReflection__.__class = stock_ViewPrice;
	stock_ViewPrice.__obReflection__.__extends = jsml_Ob;
	return stock_ViewPrice.__obReflection__;
}
stock_ViewPrice.prototype.con = function(){
var $this = this; var $__arguments = arguments;
		$this.ao=stock_Ao.get();


		return $this;
	}
stock_ViewPrice.prototype.view = function(){
var $this = this; var $__arguments = arguments;
		return $this;
	}
stock_ViewPrice.prototype.tess = function(){
var $this = this; var $__arguments = arguments;

		
	}
stock_ViewPrice.prototype.tess2 = function(){
var $this = this; var $__arguments = arguments;

		
	}
stock_ViewPrice.prototype.getNumStar = function($str){
var $this = this; var $__arguments = arguments; var $pos1 = null; var $pos2 = null;
		$pos1=strpos($str,"*");
		$pos2=strrpos($str,"*");
		$str=substr($str,$pos1+1,$pos2-$pos1-1);
		$str=str_replace(",","",$str);
		return $str; 
	}
stock_ViewPrice.prototype.tess3 = function(){
var $this = this; var $__arguments = arguments;

		
	}
stock_ViewPrice.prototype.getRowPriceLiveMap = function(){
var $this = this; var $__arguments = arguments;
 $this.jsonp();

	}
stock_ViewPrice.prototype.getRowPriceLiveMapSbs = function(){
var $this = this; var $__arguments = arguments;
 $this.jsonp();

	}
stock_ViewPrice.prototype.getRowPriceLiveMapFpt = function(){
var $this = this; var $__arguments = arguments;
 $this.jsonp();

	}
stock_ViewPrice.prototype.getRowPriceLiveMapzzzzzz = function(){
var $this = this; var $__arguments = arguments;
 $this.jsonp();

	}
stock_ViewPrice.prototype.getZipDir = function(){
var $this = this; var $__arguments = arguments;
		return $this.importDir + "istock_" + $this.year + ".zip";
	}
stock_ViewPrice.prototype.getHoDir = function(){
var $this = this; var $__arguments = arguments;
		return $this.importDir + "HO_" + $this.year + ".txt";
	}
stock_ViewPrice.prototype.getHaDir = function(){
var $this = this; var $__arguments = arguments;
		return $this.importDir + "HA_" + $this.year + ".txt";
	}
stock_ViewPrice.prototype.impMetastock = function(){
var $this = this; var $__arguments = arguments;
 $this.jsonp();

	}
stock_ViewPrice.prototype.saveRowPriceLiveMap = function($rowPriceLiveMap){
var $this = this; var $__arguments = arguments;


	}
stock_ViewPrice.prototype.saveRowPriceLiveMapMs = function(){
var $this = this; var $__arguments = arguments;
	

	}
stock_ViewPrice.prototype.rpcMstock = function($strMstock){
var $this = this; var $__arguments = arguments;
 $this.json($strMstock);

	}
stock_ViewPrice.prototype.expOnce = function(){
var $this = this; var $__arguments = arguments;
	

	}
stock_ViewPrice.prototype.toDateFromMs = function($str){
var $this = this; var $__arguments = arguments;
		if($str==null || trim($str)=="") return null;
				return substr($str,0,4) +"-"+ substr($str,4,2) +"-"+ substr($str,6,2)+" 00:00:00";
	}
stock_ViewPrice.prototype.toDateMs = function($str){
var $this = this; var $__arguments = arguments;
		if($str==null || trim($str)=="") return null;
		return substr($str,0,4) + substr($str,5,2) + substr($str,8,2);
	}
stock_ViewPrice.prototype.toDate = function($str){
var $this = this; var $__arguments = arguments; var $arr = null; var $arr2 = null;
		if($str==null || trim($str)=="") return null;
		
		$arr = explode("/", $str);
		$arr2 = [];
		$arr2[0] = $arr[2];
		$arr2[1] = substr("0"+$arr[1], -2);
		$arr2[2] = substr("0"+$arr[0], -2);
		$str = implode("-", $arr2);
		return $str + " 00:00:00";
		
		
					}
stock_ViewPrice.prototype.toPrice = function($str){
var $this = this; var $__arguments = arguments;
		if($str==null || trim($str)=="") return null;
		$str=str_replace(",","",$str);
		return doubleval($str);
	}
stock_ViewPrice.prototype.toNoNbsp = function($str){
var $this = this; var $__arguments = arguments;
		$str=str_replace("&nbsp;","",$str);
		return trim($str);
	}
stock_ViewPrice.prototype.toVolume = function($str){
var $this = this; var $__arguments = arguments;
		if($str==null || trim($str)=="") return null;
		$str = str_replace(",", "", $str);
		return doubleval($str);
	}
stock_ViewPrice.prototype.toVolume10 = function($str){
var $this = this; var $__arguments = arguments;
		if($str==null || trim($str)=="") return null;
		$str = str_replace(",", "", $str);
		return 10*doubleval($str);
	}
</script>

<script class="stock_ViewChart">
stock_ViewChart = function(){
	if(arguments.length==1 && arguments[0]=='__extends__') return;
	jsml_Ob.call(this,'__init__');
	this.jque=null;
	this.w=5;
	this.padX = 0;
	this.valueShift = 0;
	this.ox=0;
	this.oy=40;
	this.minMaxPadFactor = 1.93;
	this.stickY = 11;
	this.padY = 0;
	this.ma1 = 10;
	this.ma2 = 20;
	this.ma3 = 30;
	this.ma4 = 40;
	this.ma5 = 50;
	this.ma6 = 60;
	this.minStockDataX=null;
	this.maxStockDataX=null;
	this.rangeX=null;
	this.scaleX=null;
	this.minStockDataY = 30;
	this.maxStockDataY = 80;
	this.rangeY=null;
	this.scaleY=null;
	this.minStockDataY2 = 0;
	this.maxStockDataY2 = 3000000000;
	this.rangeY2=null;
	this.scaleY2=null;
	this.minStockDataY3 = -7;
	this.maxStockDataY3 = 7;
	this.rangeY3=null;
	this.scaleY3=null;
	this.minStockDataY4 = -10;
	this.maxStockDataY4 = 10;
	this.rangeY4=null;
	this.scaleY4=null;
	this.rowPriceArr = [];
	this.candIMap = {
	};
	this.canvas=null;
	this.context=null;
	this.divCanvasText=null;
	this.width=null;
	this.height=null;
	this.color = {
	};
	this.alpha = 70;
	if(arguments.length==1 && arguments[0]=='__init__') return;
	if(this.__construct) this.__construct.apply(this,arguments);
}
stock_ViewChart.prototype = new jsml_Ob('__extends__');
stock_ViewChart.prototype.__extends = jsml_Ob;
stock_ViewChart.prototype.constructor = stock_ViewChart;
stock_ViewChart.prototype.__class = stock_ViewChart;
stock_ViewChart.__className = 'stock_ViewChart';
stock_ViewChart.__name = 'ViewChart';
stock_ViewChart.__obReflection__ = null;
stock_ViewChart.__getObReflection = function(){
	if(stock_ViewChart.__obReflection__ != null) return stock_ViewChart.__obReflection__;
	stock_ViewChart.__obReflection__ = new jsml_ObReflection();
	stock_ViewChart.__obReflection__.__class = stock_ViewChart;
	stock_ViewChart.__obReflection__.__extends = jsml_Ob;
	return stock_ViewChart.__obReflection__;
}
stock_ViewChart.$startDate2  = "2011-08-16"
stock_ViewChart.$startDate = "2011-09-13"
stock_ViewChart.$startDate3 = "2011-07-29"
stock_ViewChart.$startDate4 = "2011-06-14"
stock_ViewChart.prototype.con = function(){
var $this = this; var $__arguments = arguments;
		$this.ao=stock_Ao.get();
		$this.viewStock=$this.ao.bean("stock_ViewStock/con");
		$this.viewDetail=$this.ao.bean("stock_ViewDetail/con");
		$this.voPrice1=$this.ao.bean("stock_VoPrice/con1");
		$this.w = 1;		$this.padX = 0;
		$this.ox=0;
		$this.height2=100;
		$this.oy=0*100;
		$this.padY = 0;
		$this.minMaxPadFactor = 2.5;
		$this.minMaxPadFactorWeb = $this.minMaxPadFactor;
	
		$this.width = 939;		$this.height = 720;		
		$this.rowPriceArrMap={
		};
		return $this;
	}
stock_ViewChart.prototype.view = function(){
var $this = this; var $__arguments = arguments; var $html = null; var $canvas = null;
		if($this.jque!=null) return $this.jque;
		
var $__htmlArray = new Array();
$__htmlArray.push('\
<div>\
<div id="divCanvasText" style=\'position:relative\'>\
</div>\
<div id="divOnePrice" style=\'position:absolute;left:280px;top:2px\'></div>\
<canvas id="canvas"></canvas>\
</div>\
');
$html = $__htmlArray.join("");
		$this.jque=que($html);
		
		$this.divCanvasText=$this.jque.find("#divCanvasText");
		$this.divOnePrice=$this.jque.find("#divOnePrice");
		$this.canvas=$this.jque.find("#canvas");
		
								$this.canvas.css({
			"background-color" : "white",
			"height" : $this.height,
			"width" : $this.width, "border":"solid 0px"});
		$this.canvas.attr({"width":$this.width, "height":$this.height});

		$canvas = $this.canvas.get(0);
				$this.context = $canvas.getContext('2d');
		
		
		return $this;
	}
stock_ViewChart.prototype.makeRowPriceArr = function($vo, $rowPriceArr ,$limit){
var $this = this; var $__arguments = arguments; var $re = null; var $voRe = null; var $len = null; var $i = null;if($limit==null) $limit=null; var $len2 = null; var $ma01 = null; var $ma02 = null; var $ma0 = null; var $ma1 = null; var $ma2 = null; var $ma3 = null; var $maC = null; var $j = null; var $x = null; var $dev = null; var $k = null; var $y = null; var $close = null;
				$re=[];
		$voRe=$this.viewStock.voRowPriceArr;
		$len=count($rowPriceArr);
		for($i=0 ; $i < $len ;$i++){
			$re[$i]=[];
		}

		if($limit==null) $len2=$len;
		else $len2=$limit;
		
		
		if($this.ao.conf["combineDay"]==1){
			$ma01=5;
			$ma02=8;
			$ma0=13;
			$ma1=21;
			$ma2=34;
			$ma3=55;
		} else if($this.ao.conf["combineDay"]==2 || $this.ao.conf["combineDay"]==8){ 			$ma01=5;
			$ma02=8;
			$ma0=13;
			$ma1=21;
			$ma2=34;
			$ma3=55;
			
														} else {
			$ma01=5;
			$ma02=8;
			$ma0=13;
			$ma1=21;
			$ma2=34;
			$ma3=55;
		}
		
		for($i=$len-1 ; $i >=0 ;$i--){
						if($this.ao.isNull0($rowPriceArr[$i][$vo.close])) continue;
			
			$maC=0;
			for($j=0 ; $j < $ma3 ; $j++){
				$x=$i+$j;
				if($this.ao.isNull0($rowPriceArr[$x][$vo.close])) break;
				if($rowPriceArr[$x+1]==null || $this.ao.isNull0($rowPriceArr[$x+1][$vo.close])) break;

				$maC+=$rowPriceArr[$x+1][$vo.close];
								if($j==$ma0-1 || $j==$ma1-1 || $j==$ma2-1 || $j==$ma3-1  || $j==$ma01-1 || $j==$ma02-1){
					if($j==$ma0-1) $re[$i][$voRe.maC1]=$maC/($j+1);
					if($j==$ma1-1) $re[$i][$voRe.maC2]=$maC/($j+1);
					if($j==$ma2-1) $re[$i][$voRe.maC3]=$maC/($j+1);
					if($j==$ma01-1) $re[$i]["ma01"]=$maC/($j+1);
					if($j==$ma02-1) $re[$i]["ma02"]=$maC/($j+1);
					if($j==$ma3-1) {
						$re[$i][$voRe.maC4]=$maC/($j+1);
						$dev=0;
						for($k=0 ; $k < $ma3 ; $k++){
							$y=$i+$k;
							$close=$rowPriceArr[$y+1][$vo.close];
							$dev+=pow($close-$re[$i][$voRe.maC4],2);
							if($k==$ma3-1) {
								$dev=round(sqrt($dev/($k+1)),2);
								$re[$i][$voRe.dev]=$dev;
							}
						}
					}
				}

			}
		}
		return $re;
	}
stock_ViewChart.prototype.changeRowPriceArr = function($rowPriceArr){
var $this = this; var $__arguments = arguments; var $combineDay = null; var $vo = null; var $rowPriceArrEx = null; var $j = null; var $len = null; var $i = null; var $first = null; var $newI = null; var $mod = null;
		$combineDay=$this.ao.conf["combineDay"];
		if($this.ao.conf["combineDay"]==8) $combineDay=2;
		$vo=$this.voPrice1;
		
		$rowPriceArrEx=[];
		$j=0;
		
		$len=count($rowPriceArr);
		for($i=0;$i<$len;$i++){
			$first=false;
			if($this.ao.conf["combineDay"]==8){
				$newI=$i+1;
				if($i==0) $first=true;
			} else $newI=$i;
			$mod=$newI%$combineDay;
			
			if($first || $mod==0){
				if($first) $j=0;
				else $j=$newI/$combineDay;
				$rowPriceArrEx[$j]=[];
				$rowPriceArrEx[$j][$vo.open] = $rowPriceArr[$i][$vo.open];
				$rowPriceArrEx[$j][$vo.high] = $rowPriceArr[$i][$vo.high];
				$rowPriceArrEx[$j][$vo.low] = $rowPriceArr[$i][$vo.low];
				$rowPriceArrEx[$j][$vo.close] = $rowPriceArr[$i][$vo.close];
				$rowPriceArrEx[$j][$vo.volume] = $rowPriceArr[$i][$vo.volume];
			} else {
				if($rowPriceArrEx[$j][$vo.high] < $rowPriceArr[$i][$vo.high]) $rowPriceArrEx[$j][$vo.high]=$rowPriceArr[$i][$vo.high];
				if($rowPriceArrEx[$j][$vo.low] > $rowPriceArr[$i][$vo.low]) $rowPriceArrEx[$j][$vo.low]=$rowPriceArr[$i][$vo.low];
				$rowPriceArrEx[$j][$vo.open] = $rowPriceArr[$i][$vo.open];
								$rowPriceArrEx[$j][$vo.volume] += $rowPriceArr[$i][$vo.volume];
			}
		}

		return $rowPriceArrEx;
	}
stock_ViewChart.prototype.conPaint = function(){
var $this = this; var $__arguments = arguments;
		$this.symbol = $this.viewDetail.symbol;
		
		$this.rowPriceArrMap={
		};
						$this.rowPriceArrMap[$this.symbol] = $this.changeRowPriceArr($this.viewDetail.rowPriceArrMap[$this.symbol]);
		$this.rowPriceExArr=$this.makeRowPriceArr($this.voPrice1,$this.rowPriceArrMap[$this.symbol],1);
		
		return $this;
	}
stock_ViewChart.prototype.viewPaint = function(){
var $this = this; var $__arguments = arguments;
		$this.context.clearRect(0, 0, $this.width, $this.height);
		$this.divCanvasText.html("");
		$this.paint();
	}
stock_ViewChart.prototype.paintField = function(){
var $this = this; var $__arguments = arguments; var $voStock = null; var $vo2 = null; var $reText = null; var $thisw = null; var $stockMap = null; var $vn30Arr = null; var $vn30Map = null; var $vn30 = null; var $k = null; var $map = null; var $arr = null; var $symbol = null; var $row = null; var $stock = null; var $per = null; var $sum = null; var $count = null; var $str = null; var $text = null; var $text2 = null; var $dis = null; var $x = null; var $acc = null; var $y0 = null; var $i = null; var $y1 = null; var $h = null; var $x1 = null; var $x2 = null; var $y = null;
		$voStock=$this.viewStock.voStock;
		$vo2=$this.viewStock.voPrice2;
		$reText = true;
		
		$thisw=$this.w;
		$this.w = 5;
		$this.padX = 0;
			
		$this.minStockDataY = -5;
		$this.maxStockDataY = 105;
		$this.saveScale();
		
		$stockMap=$this.viewStock.stockMap;
		$vn30Arr=explode(",",$this.ao.conf["vn30"]);
		$vn30Map={
		};
		for($i in $vn30Arr){var $vn30 = $vn30Arr[$i];
			$vn30=trim($vn30,"'");
			$vn30Map[$vn30]=1;
		}
		for($k=0 ; $k< 3; $k++){
			$map = {
			};
			$arr = [0,0,0,0,0,0,0];
			for($symbol in $stockMap){var $stock = $stockMap[$symbol];
				if($this.viewStock.isMarket($symbol)) continue;
				
				$row = $stock[$voStock.live];
				if($row==null) continue;
				
				if($k==1 && $stock[$voStock.value2] < 5000000) continue;
								if($k==2 && $vn30Map[$symbol]==null) continue;
				
				if( $this.ao.isNull0($row[$vo2.ref]) || $this.ao.isNull0($row[$vo2.close])) continue;
				
				$per = round(100*($row[$vo2.close] - $row[$vo2.ref]) / $row[$vo2.ref],1);
				
				if( 99 > $per && $per >= 5 ) $arr[6] += 1;
				else if( 5 > $per && $per >= 3 ) $arr[5] += 1;
				else if( 3 > $per && $per > 0 ) $arr[4] += 1;
				
				else if( 0 >= $per && $per >= 0 ) $arr[3] += 1;
				
				else if( 0 > $per && $per > -3 ) $arr[2] += 1;
				else if( -3 >= $per && $per > -5 ) $arr[1] += 1;
				else if( -5 >= $per && $per >= -99 ) $arr[0] += 1;
			}
		
			
			$sum =  0;
			for($i in $arr){var $count = $arr[$i];
				$sum += $count;
			}

			$str = "";
			if($k==0) $str = "a";
			if($k==1) $str = "g";
			if($k==2) $str = "l";
			
			$text = $str;			$text2= $sum+"<br/>"+$str;
			
			$dis = -$this.w-1;
						
			$x = $this.getX(0 + $k*1) + $dis;
			if($reText) {
							}
			
			$acc = 0;
			$y0= $this.getY($acc);
			for($i = 6; $i>=0; $i--){
				$arr[$i] = round( 100*$arr[$i]/$sum,2 );
				$this.context.fillStyle = "blue";
				if($i==3) $this.context.fillStyle = "white";
				if($i==2 || $i==4) $this.context.fillStyle = "green";
				if($i==0 || $i==6) $this.context.fillStyle = "hotpink";
				
				$x = $this.getX(0 + $k*1.0) + $dis;				
				$acc += $arr[$i];
				
				$y1 = $this.getY( $acc );
				$h = $y1 - $y0;
				if($i==3 && abs($h)<=5) $h=5;
				$this.context.fillRect($x, $y0, $this.w+1, $h);
				$y0 = $y1;
			}
			
			$this.context.restore();
			$this.context.beginPath();
			$this.context.strokeStyle = 'Black';
			$this.context.lineWidth=1;
			
			$x1 = $this.getX(-1 + $k*1.0) + $dis + 0;
			$x2 = $this.getX(0 + $k*1.0) + $dis - 0;
		
			$y = $this.getY(50);
			$this.context.moveTo($x1, $y);
			$this.context.lineTo($x2, $y);
			$this.context.stroke();
		}
		$this.w=$thisw;
	}
stock_ViewChart.prototype.getX = function($i){
var $this = this; var $__arguments = arguments;
		return ($this.width - $this.ox - $this.padX) - ($this.w+1)*$i;
	}
stock_ViewChart.prototype.getI = function($x){
var $this = this; var $__arguments = arguments;
		return round( (($this.width - $this.ox - $this.padX) - $x)/($this.w+1) );
	}
stock_ViewChart.prototype.saveScale = function(){
var $this = this; var $__arguments = arguments;
				
		$this.rangeY = $this.maxStockDataY - $this.minStockDataY;
		$this.scaleY = ($this.height - $this.oy - $this.padY) / $this.rangeY;

		$this.rangeY2 = $this.maxStockDataY2 - $this.minStockDataY2;
		$this.scaleY2 = ($this.height - $this.oy) / $this.rangeY2;

		$this.rangeY3 = $this.maxStockDataY3 - $this.minStockDataY3;
		$this.scaleY3 = ($this.height2) / $this.rangeY3;
		
		$this.rangeY4 = $this.maxStockDataY4 - $this.minStockDataY4;
		$this.scaleY4 = ($this.height2) / $this.rangeY4;
	}
stock_ViewChart.prototype.getY = function($y){
var $this = this; var $__arguments = arguments;
		return ($this.height - $this.oy - $this.padY) - ($y- $this.minStockDataY) * $this.scaleY;
	}
stock_ViewChart.prototype.getY2 = function($y){
var $this = this; var $__arguments = arguments;
		return ($this.height - $this.oy - $this.padY) - ($y- $this.minStockDataY2) * $this.scaleY2;
	}
stock_ViewChart.prototype.getY3 = function($y){
var $this = this; var $__arguments = arguments;
				return ($this.height2 - $this.padY) - ($y- $this.minStockDataY3) * $this.scaleY3;
	}
stock_ViewChart.prototype.getY4 = function($y){
var $this = this; var $__arguments = arguments;
				return ($this.height2 - $this.padY) - ($y- $this.minStockDataY4) * $this.scaleY4;
	}
stock_ViewChart.prototype.saveDtParams = function(){
var $this = this; var $__arguments = arguments; var $vo1 = null; var $minStockDataY = null; var $iMin = null; var $length = null; var $i = null; var $stockData = null; var $x = null; var $maxStockDataY = null; var $isFuture = null; var $futureArr = null; var $str = null; var $maxStockDataY2 = null; var $avg = null; var $count = null; var $div = null; var $value = null;
		$vo1 = $this.voPrice1;
		$minStockDataY = 9999999;
		$iMin=0;
				$length = count($this.rowPriceArr);
		for($i=0; $i<$length; $i++){
			$stockData = $this.rowPriceArr[$i];
			$x = $this.getX($i);
			if($x<0) break;
						
			if($stockData[$vo1.low] <= 0 || $stockData[$vo1.low]==null) continue;
			if($stockData[$vo1.low] < $minStockDataY){
				$minStockDataY = $stockData[$vo1.low];
				$iMin = $i;
			}
					}
		$this._minStockDataY=$minStockDataY;
			
		$maxStockDataY = 0;
		$length = count($this.rowPriceArr);
		for($i=0; $i<$length; $i++){
						$stockData = $this.rowPriceArr[$i];
			$x = $this.getX($i);
			if($x<0) break;
						
			if($stockData[$vo1.high] <= 0 || $stockData[$vo1.high]==null) continue;
			if($stockData[$vo1.high] > $maxStockDataY) {
				$maxStockDataY = $stockData[$vo1.high];
			}
					}
		$this._maxStockDataY=$maxStockDataY;
		
				$isFuture=false;
		$futureArr=explode(",",$this.ao.conf["future"]);
		for($i in $futureArr){var $str = $futureArr[$i];
			$futureArr[$i]=trim($str,"'");
			if($this.symbol==$futureArr[$i]) {
				$isFuture=true;
				break;
			}
		}
		if($this.rowPriceArr[0] != null){
			if($this.symbol == "VNINDEX" || $this.symbol == "VNALLINDEX") {
				$this.minMaxPadFactor = 1.1;
			}
			else if($this.symbol == "HAINDEX") {
				$this.minMaxPadFactor = 1.3;
			}
			else if($this.symbol == "VN30INDEX") {
				$this.minMaxPadFactor = 1.2;
			}
			else if($isFuture) {
				$this.minMaxPadFactor = 1.05;
			}
			else {
				$this.minMaxPadFactor = 1.75;
			}
		}

		if($minStockDataY==null || $minStockDataY==0) $minStockDataY = 10;

		$this.minStockDataY = 0.93 * $minStockDataY;
		$this.maxStockDataY = $this.minMaxPadFactor * $minStockDataY;
		
		if(1.02*$maxStockDataY > $this.maxStockDataY){
			$this.maxStockDataY = 1.02*$maxStockDataY;
		}
		if($this.symbol == "VNINDEX" || $this.symbol == "HAINDEX" || $this.symbol == "VN30INDEX") {
			$this.minStockDataY = 0.985 * $minStockDataY;
			$this.maxStockDataY = 1.01*$maxStockDataY;
		}

		$maxStockDataY2 = 0;
		$avg = 0;
		$count = 0;
		$div = 0;
		$length = count($this.rowPriceArr);
		for($i=0; $i<$length; $i++){
			$stockData = $this.rowPriceArr[$i];
			$x = $this.getX($i);
			if($stockData[$vo1.volume]==null || $stockData[$vo1.volume]<=1) continue;
			$value = $stockData[$vo1.volume]*$stockData[$vo1.close];			if($value > $maxStockDataY2) $maxStockDataY2 = $value;
			$avg += $value;
			$count++;
			if($x<$this.padX) break;
								}
		if($count!=0) $avg=round($avg/$count);
		
				$this.maxStockDataY2 = 30*$avg;
		
										
		$this.saveScale();
	}
stock_ViewChart.prototype.paintText = function($text, $left, $top, $color){
var $this = this; var $__arguments = arguments;
		if($color==null) $color='black';
		return que(implode("", ["<div style='font-size:10px;'>",$text,"</div>"])).css({"position":"absolute", "left":$left, "top":$top, "color":$color}).appendTo($this.divCanvasText);
	}
stock_ViewChart.prototype.paint = function(){
var $this = this; var $__arguments = arguments;
		$this.paintField();
		if($this.symbol == "MARKET") {
			return;
		}
	
		$this.interval = 1;
		$this.padX1 = 1*550+0*171;
		if(1==0 && $this.symbol != "HAINDEX"){
			$this.rowPriceArr = $this.rowPriceArrMap["HAINDEX"];
			$this.isIndex = true;
			
						$this.padX = 100;			$this.w = 3;
			$this.saveDtParams();
			$this.paintClose();
		}
		
		$this.rowPriceArr = $this.rowPriceArrMap[$this.symbol];
		$this.isIndex = false;
		
				$this.padX = 4*5+3;
				$this.padY = 0;
				$this.saveDtParams();
		
		$this.paintStat();
						$this.paintValue();
				$this.paintMa();
		$this.paintCandleStick();
						$this.setOnePrice();
	}
stock_ViewChart.prototype.paintCandleStick = function($limit){
var $this = this; var $__arguments = arguments; var $voRe = null; var $vo1 = null; var $x1 = null; var $x2 = null; var $candCount = null; var $i = null; var $stockData = null; var $x = null; var $_i = null; var $xm1 = null; var $PERCENT = null; var $deltaClose = null; var $deltaHigh = null; var $percent = null;
		$voRe=$this.viewStock.voRowPriceArr;
		$vo1=$this.voPrice1;
		
		$this.context.globalAlpha=1;
		$x1 = $this.getX(10);
		$x2 = $this.getX(20);
		
		$this.context.restore();
		$this.context.globalAlpha=1;
		$this.context.lineWidth=1;
		$candCount = 0;
		
		
		$this.paintText("<div><span style='color:blue'>"+round( 100*($this._maxStockDataY-$this._minStockDataY)/$this._minStockDataY )+"</span></div>", 150 , 0);		for($i=0; $i<$this.rowPriceArr.length-1; $i++){
			if($limit!=null && $i>=$limit) break;
			$stockData = $this.rowPriceArr[$i];
			$x = $this.getX($i);
			if($this.padX == $this.padX1 && $x<0) break;
			if($this.padX != $this.padX1 && $x< 0*(911-$this.padX1 + 20)) break;
			
						if($i==60){				$this.context.restore();
				$this.context.beginPath();
				$this.context.strokeStyle='Black';			
				$this.context.globalAlpha=1;
				$this.context.lineWidth=1;
				$this.context.moveTo($x, $this.getY($this.minStockDataY));
				$this.context.lineTo($x, $this.getY($this.maxStockDataY) );
				$this.context.closePath();
				$this.context.stroke();
			}
			
			$this.context.globalAlpha=1;
			
																					if(1==0&$this.rowPriceExArr[$i][$voRe.status]=="greatF"){
				
				if($this.symbol != "VNINDEX" && $this.symbol != "HAINDEX"){
					$_i=$i;
										$xm1 = $this.getX($_i);
					
					$this.context.beginPath();
					$this.context.fillStyle = 'Black';
					$this.context.arc($xm1, $this.getY($stockData[$vo1.low])+16, 7, 0, 2 * Math.PI, false);
					$this.context.fill();
					
				}
			}
			
			if($i==0 && $this.w<2){
				$this.context.restore();
				$this.context.beginPath();
				$this.context.globalAlpha=1;
				$this.context.strokeStyle='Black';
				$this.context.lineWidth=1;
				
				$this.context.moveTo($x, $this.getY($stockData[$vo1.close]) );
				$this.context.lineTo($this.getX(60), $this.getY($stockData[$vo1.close]) );
				
				$this.context.closePath();
				$this.context.stroke();
			}
			
			if($i==0 && $this.rowPriceExArr[$i][$voRe.status0]=="greatF"){
				
				if($this.symbol != "VNINDEX" && $this.symbol != "HAINDEX"){
					$_i=$i;
					if($i==0) $_i=-1; 
					$xm1 = $this.getX($_i);
					
					$this.context.beginPath();
					$this.context.fillStyle = 'Green';
										$this.context.arc($xm1-5, $this.getY($stockData[$vo1.high])-50, 9, 0, 2 * Math.PI, false);
										$this.context.fill();
					if($i==-10){
						$this.context.fillStyle = 'blue';
						$PERCENT = 1.03;
						if($this.symbol == "VNINDEX") $PERCENT = 1.01;
						else if($this.symbol == "HAINDEX") $PERCENT = 1.01;
						$deltaClose = $this.getY($PERCENT * $stockData[$vo1.close]) - $this.getY($stockData[$vo1.close]);
						$deltaHigh = $this.getY($PERCENT * $stockData[$vo1.close]) - $this.getY($stockData[$vo1.close]);
						
						
						if($this.w%2==0) {
							$this.context.fillRect($xm1 - ($this.w)/2, $this.getY($stockData[$vo1.close]), $this.w, $deltaClose );
						} else if($this.w%2==1){
							$this.context.fillRect($xm1 - ($this.w+1)/2, $this.getY($stockData[$vo1.close]), $this.w, $deltaClose );
						}
						
						if($this.w<=3){
							$this.context.fillRect($xm1-1, $this.getY($stockData[$vo1.close]), 1, $deltaHigh );
						} else {
							$this.context.fillRect($xm1-2, $this.getY($stockData[$vo1.close]), 2, $deltaHigh );
						}
					}
				}
			}
			
									if($this.rowPriceExArr[$i][$voRe.status]=="lessFF"){
				$this.context.restore();
				$this.context.beginPath();
				$this.context.globalAlpha=1;
				$this.context.strokeStyle='Red';
				$this.context.lineWidth=1;
				
				$this.context.moveTo($x, $this.getY($stockData[$vo1.low]) + 20 );
				$this.context.lineTo($x, $this.getY($stockData[$vo1.low]) + 50 );
				
				$this.context.closePath();
				$this.context.stroke();
			}
			
						
			$this.context.globalAlpha=1;
			if($stockData[$vo1.close] >= $stockData[$vo1.open]){
				$this.context.fillStyle = 'blue';
				
				if($this.isIndex==true) {
					$this.context.fillStyle = 'Blue';
					$this.context.globalAlpha=1;
				}
			}
			else{
				$this.context.fillStyle = 'Red';
				
				if($this.isIndex==true) {
					$this.context.fillStyle = 'Red';
					$this.context.globalAlpha=1;
				}
			}
			
			$percent = null;
			if($this.rowPriceArr[$i][$vo1.ref] != null && $this.rowPriceArr[$i][$vo1.ref] != 0) {
				$percent = 100*($stockData[$vo1.close] - $this.rowPriceArr[$i][$vo1.ref])/ $this.rowPriceArr[$i][$vo1.ref];
			} else if($this.rowPriceArr[$i+1] != null && $this.rowPriceArr[$i+1][$vo1.close] !=0) {
				$percent = 100*($stockData[$vo1.close] - $this.rowPriceArr[$i+1][$vo1.close])/ $this.rowPriceArr[$i+1][$vo1.close];
			}
			if($percent != null) {
															}
			
									
			$deltaClose = $this.getY($stockData[$vo1.close]) - $this.getY($stockData[$vo1.open]);
			$deltaHigh = $this.getY($stockData[$vo1.high]) - $this.getY($stockData[$vo1.low]);
			if($deltaClose>=0 && $deltaClose<=2) $deltaClose = 2;
			if($deltaClose<0 && $deltaClose>=-2) $deltaClose = -2;
			if($deltaHigh>=0 && $deltaHigh<=2) $deltaHigh = 2;
			if($deltaHigh<0 && $deltaHigh>=-2) $deltaHigh = -2;
			if($this.w%2==0) {
				$this.context.fillRect($x- ($this.w)/2, $this.getY($stockData[$vo1.open]), $this.w, $deltaClose );
				$this.context.fillRect($x-1, $this.getY($stockData[$vo1.low]), 2, $deltaHigh );
			} else if($this.w%2==1){
				$this.context.fillRect($x - ($this.w+1)/2, $this.getY($stockData[$vo1.open]), $this.w, $deltaClose );
				if($this.w==5) $this.context.fillRect($x-1, $this.getY($stockData[$vo1.low]), 1, $deltaHigh );
				else $this.context.fillRect($x-1, $this.getY($stockData[$vo1.low]), 1, $deltaHigh );
			}
						
			
			if(1==0 && $i==0 && $this.w!=1 && $this.symbol != "VNINDEX" && $this.symbol != "HAINDEX"){
				$x = $this.getX(-1);
					
				$this.context.fillStyle = 'blue';
				$PERCENT = 1.03;
				if($this.symbol == "VNINDEX") $PERCENT = 1.01;
				else if($this.symbol == "HAINDEX") $PERCENT = 1.02;
				$deltaClose = $this.getY($PERCENT * $stockData[$vo1.close]) - $this.getY($stockData[$vo1.close]);
				$deltaHigh = $this.getY($PERCENT * $stockData[$vo1.close]) - $this.getY($stockData[$vo1.close]);
				$this.context.fillRect($x - ($this.w+1)/2, $this.getY($stockData[$vo1.close]), $this.w, $deltaClose );
				$this.context.fillRect($x-1, $this.getY($stockData[$vo1.close]), 1, $deltaHigh );
				
				
			}
		}
		$this.context.globalAlpha=1;
	}
stock_ViewChart.prototype.paintIndicator = function(){
var $this = this; var $__arguments = arguments; var $voRe = null; var $vo1 = null; var $vo = null; var $w = null; var $i = null; var $stockData = null; var $x = null; var $y3 = null; var $x1 = null; var $x2 = null; var $y = null; var $k = null; var $limit = null;
		$voRe=$this.viewStock.voRowPriceArr;
		$vo1=$this.voPrice1;
		$this.context.restore();
		$this.context.globalAlpha=1;
		$vo = new stock_VoPrice();
		$w = $this.w;
		$this.w = 3;
		for($i=0; $i<$this.rowPriceArr.length-1; $i++){
			$stockData = $this.rowPriceArr[$i];
			$vo.row = $stockData;
			$x = $this.getX($i);
			if($x< 0*(911-$this.padX1)) break;

						$y3=100*($stockData[$vo1.close] - $this.rowPriceArr[$i+1][$vo1.close])/$this.rowPriceArr[$i+1][$vo1.close];
			if($y3==null) continue;
			if($x<$this.padX) break;
			if( $y3>=0) $this.context.fillStyle = 'blue';
			else $this.context.fillStyle = 'red';
					}
		$this.w = $w;
		$this.context.globalAlpha=1;
		
		$this.context.restore();
		$this.context.beginPath();
		$this.context.strokeStyle = 'Black';
		$this.context.lineWidth=1;
		$x1 = $this.getX(0);
		$x2 = $this.getX($this.rowPriceArr.length);
		
		$y = $this.getY4(7);
		$this.context.moveTo($x1, $y);
		$this.context.lineTo($x2, $y);
		
		$y = $this.getY4(0);
		$this.context.moveTo($x1, $y);
		$this.context.lineTo($x2, $y);
		
		
		$y = $this.getY4(-3);
		$this.context.moveTo($x1, $y);
		$this.context.lineTo($x2, $y);
		
		
		$this.context.stroke();
				for($k=6; $k>=1; $k--){
			if($limit!= null && $k!=1 && $k!=2 && $k!=3 && $k!=4 && $k!=5 && $k!=6) continue;
			if($k==1){
								$this.context.strokeStyle='Black';
				$this.context.fillStyle='Black';
			}
			else if($k==2){
				continue;
				$this.context.strokeStyle='Blue';
				$this.context.fillStyle='Blue';
			}
			else if($k==3){
				continue;
				$this.context.strokeStyle='Red';
				$this.context.fillStyle='Red';
			}
			else if($k==4){
				continue;
				$this.context.strokeStyle='hotpink';
			}
			else if($k==5){
				continue;
				$this.context.strokeStyle='Black';
				$this.context.strokeStyle='blue';
			}
			else if($k==6){
				continue;
				$this.context.strokeStyle='hotpink';
				$this.context.strokeStyle='blue';
			}
			$this.context.globalAlpha=1;
									
			for($i=0; $i<$this.rowPriceArr.length; $i++){
				if($limit!=null && $i>=$limit) break;
				$x = $this.getX($i) - 0*50;
				if($this.padX == $this.padX1 && $x<0) break;
				if($this.padX != $this.padX1 && $x< 0*(911-$this.padX1 + 20)) break;
				$stockData = $this.rowPriceExArr[$i];
				
				if($k==1) $y = $stockData[$voRe.maxC1];
				if($y==null) continue;
				if($y>10) $y=11;
				$this.context.fillStyle='red';
				$this.context.fillRect($x- ($this.w+1)/2, $this.getY4(0), $this.w, $y*$this.scaleY4);
				
				if($k==1) $y = $stockData[$voRe.minC1];
				if($y==null) continue;
				if($y>10) $y=11;
				$this.context.fillStyle='blue';
				$this.context.fillRect($x- ($this.w+1)/2, $this.getY4(0), $this.w , -$y*$this.scaleY4);
			}
					}
		$this.context.globalAlpha=1;
	}
stock_ViewChart.prototype.conWeb = function(){
var $this = this; var $__arguments = arguments;
		$this.w = 3;
		$this.padX = 10;
		$this.ox=0;
		$this.oy=0;
		$this.padY = 0;
		$this.minMaxPadFactor = 1.3;
		$this.minMaxPadFactorWeb = $this.minMaxPadFactor;
	
		$this.width = 900;		return $this;
	}
stock_ViewChart.prototype.paintMaWeb = function($limit){
var $this = this; var $__arguments = arguments; var $vo = null; var $k = null; var $strokeStyle = null; var $x0 = null; var $y0 = null; var $length = null; var $i = null; var $x = null; var $stockData = null; var $y = null; 		$vo = new stock_VoPrice();
		for($k=1; $k>=1; $k--){
			if($limit!= null && $k!=1 && $k!=2 && $k!=3 && $k!=4) continue;
			$strokeStyle = "";
			if($k==1){
												$strokeStyle=$this.color["purple"];
			}
			else if($k==2){
				continue;
				$strokeStyle=$this.color["sienna"];
			}
			else if($k==3){
				$strokeStyle=$this.color["black"];
			}
			else if($k==4){
				$strokeStyle=$this.color["black"];
			}
			$x0=null;$y0=null;
			$length = count($this.rowPriceArr);
			for($i=0; $i<$length; $i++){
				if($limit!=null && $i>=$limit) break;
				$x = $this.getX($i);
				if($x<$this.padX) break;
				$stockData = $this.rowPriceArr[$i];
				if($k==1) $y = $stockData["ma1"];
				else if($k==2) $y = $stockData["ma2"];
				else if($k==3) $y = $stockData["ma3"];
				else if($k==4) $y = $stockData["ma4"];
				if($y==null) break;
				$y = $this.getY($y);
				if($i==0){
									} else{
										imageline($this.image, $x0, $y0, $x, $y, $strokeStyle);
				}
				$x0 = $x; $y0=$y;
			}
		}
	}
stock_ViewChart.prototype.paintTableWeb = function(){
var $this = this; var $__arguments = arguments; var $stock_symbol = null; var $viewPrice = null; var $text = null; var $font_path = null; var $black = null; var $red = null; var $blue = null; var $mod = null; var $string = null; var $x1 = null; var $x2 = null; var $y = null;

		$stock_symbol = $this.symbol;
		$viewPrice = new stock_ViewPrice();

		$text = "\
tdmua toiuu = tdmua cbcandle <br/>\
tdban toiuu = <b style='color:red'>tcp min</b> <br/>\
cpchia = 4 <br/>\
cpchiacho max = 2\
		";
				if(!file_exists($font_path)) $font_path = 'arial.ttf';
		$black = imagecolorallocate($this.image, 0, 0, 0);
		$red = imagecolorallocate($this.image, 255, 0, 0);
		$blue = imagecolorallocate($this.image, 0, 0, 255);
		$mod = 1;
				$string = $viewPrice.formatPrice($this.rowPriceArr[0]["minClose"])+"_"+$viewPrice.formatPrice($this.rowPriceArr[0]["minMax"])+"_"+$viewPrice.formatValue($this.rowPriceArr[0]["value2"]);
				imagestring($this.image, 5, $this.width - 250 + $mod*80, 350 - $mod*330, $string, $black);
				$string = $viewPrice.formatPrice($this.rowPriceArr[0]["minClose20"])+"_"+$viewPrice.formatPrice($this.rowPriceArr[0]["megaCount"])+"_"+$viewPrice.formatValue($this.rowPriceArr[0]["value"]);
				imagestring($this.image, 5, $this.width - 250 + $mod*80, 370 - $mod*330, $string, $black);
				$string = substr($stock_symbol,0,3)+"."+$this.rowPriceArr[0]["market"];
				imagestring($this.image, 5, $this.width - 340 + $mod*80, 350 - $mod*330, $string, $black);
		if(stock_A.get().isLive()){
					}
		
		
		$x1 = $this.getX(0);
		$x2 = $this.getX(240);
		
		$y = $this.getY($this.rowPriceArr[0]["min"]);
				
		$y = $this.getY(2.00*$this.rowPriceArr[0]["min"]);
				
		$y = $this.getY(3.00*$this.rowPriceArr[0]["min"]);
			}
stock_ViewChart.prototype.paintValueWeb = function(){
var $this = this; var $__arguments = arguments; var $stupid = null; var $vo = null; var $w = null; var $length = null; var $i = null; var $stockData = null; var $x = null; var $y2 = null; var $fillStyle = null; var $x1 = null; var $y1 = null;
		$stupid= 1;
		$vo = new stock_VoPrice();
		$w = $this.w;
				$length = count($this.rowPriceArr);
		if(1==1 || $this.w==5) for($i=0; $i<$length; $i++){
			$stockData = $this.rowPriceArr[$i];
			$vo.row = $stockData;
			$x = $this.getX($i);

			$y2 = $vo.getLiveVolume();
			if($y2==null) continue;
			if($x<$this.padX) break;
			if( $stockData["close"] >= $stockData["open"]) $fillStyle = imagecolorallocate($this.image, 0x00, 0x80, 0x00);			else $fillStyle = imagecolorallocate($this.image, 0xA5, 0x2A, 0x2A);						$x1 = $x- ($this.w+1)/2;
			$y1 = $this.getY2(0);
			imagefilledrectangle($this.image, $x1, $y1, $x1 + $this.w - $stupid, $y1 -$y2*$this.scaleY2 - $stupid, $fillStyle );
					}
				return;
	}
stock_ViewChart.prototype.paintCandleStickWeb = function($limit){
var $this = this; var $__arguments = arguments; var $length = null; var $stupid = null; var $candCount = null; var $perNow = null; var $firstNowDec = null; var $firstNowInc = null; var $firstDec = null; var $firstInc = null; var $decF = null; var $incF = null; var $candIncCount = null; var $candDecCount = null; var $y0 = null; var $stockA = null; var $i = null; var $stockData = null; var $x = null; var $fillStyle = null; var $strokeStyle = null; var $font_path = null; var $red = null; var $blue = null; var $black = null; var $dec = null; var $inc = null; var $equal = null; var $size = null; var $y = null; var $deltaClose = null; var $deltaHigh = null; var $x1 = null; var $y1 = null; var $PERCENT = null; 
		$length = count($this.rowPriceArr);
		$stupid = 1;
		$candCount = 0;
		$perNow = round(100*($this.rowPriceArr[0]["close"] - $this.rowPriceArr[1]["close"])/$this.rowPriceArr[1]["close"]);
		$firstNowDec = true;
		$firstNowInc = true;
		$firstDec = true;
		$firstInc = true;
		$decF=null;$incF=null;
		$candIncCount = 0;
		$candDecCount = 0;
		$y0 = $this.getY($this.rowPriceArr[0]["close"]);
		$stockA = stock_A.get();
		for($i=0; $i<$length-1; $i++){
			if($limit!=null && $i>=$limit) break;
			$stockData = $this.rowPriceArr[$i];
			$x = $this.getX($i);
			if($x<$this.padX) break;
			
			
			
			$fillStyle = '';
			if($stockData["close"] >= $stockData["open"]){
				$fillStyle = imagecolorallocate($this.image, 0, 0, 255);				if($this.isIndex==true) $fillStyle = imagecolorallocatealpha ($this.image, 46, 139, 87, $this.alpha);			}
			else{
				$fillStyle = imagecolorallocate($this.image, 255, 0, 0);				if($this.isIndex==true) $fillStyle = imagecolorallocatealpha ($this.image, 160, 32, 240, $this.alpha);			}
			
			if(1==0 && $this.candIMap[$i] != null){
				if($i==120) $strokeStyle='Green';
				if($i==10) $strokeStyle='Purple';
				if($i==20) $strokeStyle='Teal';
				if($i==60) $strokeStyle='Sienna';
				
				$strokeStyle=imagecolorallocate($this.image, 190, 190, 190);																
								if( $candCount < 10){
					if($this.candIMap[$i]["inc"] >= 2 || 
												($this.candIMap[$i]["inc"] >= 1 && $i <=5)
											) {
													$candCount ++;
							$strokeStyle=imagecolorallocate($this.image,0,0,0);																					if($candCount <= 5){
								$font_path = 'arial.ttf';
								$red = imagecolorallocate($this.image, 255, 0, 0);
								$blue = imagecolorallocate($this.image, 0, 0, 255);
								$black = imagecolorallocate($this.image, 0, 0, 0);								$dec="";$inc="";$equal="";
								if($this.candIMap[$i]["dec"] >0) {
									$candDecCount ++;
									$dec = $this.candIMap[$i]["dec"];
									if($decF == null) {
										$decF = $dec;
										$dec = ""+$dec;
									}
																	}
								if($this.candIMap[$i]["inc"] >0) {
									$candIncCount ++;
									$inc = $this.candIMap[$i]["inc"];
									if($incF == null) {
										$incF = $inc;
										$inc = "*"+$inc;
									}
																	}
								if($this.candIMap[$i]["equal"] >=0) $equal = $this.candIMap[$i]["equal"];
								imagettftext($this.image, 14, 0, $this.width - 90 - ($candCount - 1)*40, 60, $red, $font_path, $dec);
								imagettftext($this.image, 14, 0, $this.width - 90 - ($candCount - 1)*40, 60+ 15, $black, $font_path, $equal);
								imagettftext($this.image, 14, 0, $this.width - 90 - ($candCount - 1)*40, 60+ 30, $blue, $font_path, $inc);
								
							}
												
						if( 1==0 
																				){
							$strokeStyle=imagecolorallocate($this.image,0,0,0);							$size = 6;
							$y = $this.getY($stockData["high"]);
							if($firstNowDec == true){
																																			$firstNowDec = false;
															} 
							
							if($firstDec == true){
								imagettftext($this.image, 14, 0, $x + 4, $y - 10, $black, $font_path, $this.candIMap[$i]["dec"]);
								$firstDec = false;
															} 
								
																					imageline($this.image, $x - 1, $y - 30, $x - 1, $y - 80, $strokeStyle);
													} 
						
						if( 
																					1==1
						){
							$strokeStyle=imagecolorallocate($this.image,0,0,0);							$size = 6;
							$y = $this.getY($stockData["low"]);
							if($firstNowInc == true){
																																			$firstNowInc = false;
															} 
							if($firstInc == true){
								imagettftext($this.image, 14, 0, $x + 4, $y + 14 + 10, $black, $font_path, $this.candIMap[$i]["inc"]);
								$firstInc = false;
															} 
							
																					imageline($this.image, $x - 1, $y + 30, $x - 1, $y + 80, $strokeStyle);
													}
					}
				} else if(1==0){
					if($this.candIMap[$i]["inc"] >= 2){
						if( 							($this.candIMap[$i]["inc"] != 0 && $this.candIMap[$i]["dec"] != 0)
						){
							$strokeStyle=imagecolorallocate($this.image,0,0,0);							$size = 6;
							$y = $this.getY($stockData["high"]);
							if($firstNowDec == true){
																										imageellipse($this.image, $x - 1, $y - 20 - ($candCount - 1)*50/4, $size + 4, $size + 4, $strokeStyle);
									$firstNowDec = false;
															} 
							
							if($firstDec == true){
								imagettftext($this.image, 14, 0, $x + 4, $y - 10, $black, $font_path, $this.candIMap[$i]["dec"]);
								$firstDec = false;
							} 
								
																					imageline($this.image, $x - 1, $y - 20, $x - 1, $y - 70, $strokeStyle);
													} 
						
						if( ($this.candIMap[$i]["inc"] != 0 && $this.candIMap[$i]["dec"] == 0) ||
							($this.candIMap[$i]["inc"] != 0 && $this.candIMap[$i]["dec"] != 0)
						){
							$strokeStyle=imagecolorallocate($this.image,0,0,0);							$size = 6;
							$y = $this.getY($stockData["low"]);
							if($firstNowInc == true){
																										imageellipse($this.image, $x - 1, $y + 20 + ($candCount - 1)*50/4, $size + 4, $size + 4, $strokeStyle);
									$firstNowInc = false;
															} 
							if($firstInc == true){
								imagettftext($this.image, 14, 0, $x + 4, $y + 14 + 10, $black, $font_path, $this.candIMap[$i]["inc"]);
								$firstInc = false;
							} 
							
																					imageline($this.image, $x - 1, $y + 20, $x - 1, $y + 70, $strokeStyle);
													}
					}
				}
			}
			
			if(1==0 && $i==10){
							$strokeStyle=imagecolorallocate($this.image,0,0,0);				$y = $this.getY($stockData["high"]);
				$size = 7;
				imageline($this.image, $x - 1, $this.getY($this.minStockDataY), $x - 1, $this.getY($this.maxStockDataY), $strokeStyle);
				
											}
			if(1==0&$i == $this.rowPriceArr[0]["imin20"]){
				$strokeStyle=imagecolorallocate($this.image,0,0,0);				$y = $this.getY($stockData["low"]);
				$size = 7;
								
								imageellipse($this.image, $x -1, $y + 16, $size + 4, $size + 4, $strokeStyle);
			}
			if($i == $this.rowPriceArr[0]["imin20"]){
							}
						

			$deltaClose = $this.getY($stockData["close"]) - $this.getY($stockData["open"]);
			$deltaHigh = $this.getY($stockData["high"]) - $this.getY($stockData["low"]);
												$x1 = $x - ($this.w+1)/2;
			$y1 = $this.getY($stockData["open"]);
			imagefilledrectangle($this.image, $x1, $y1, $x1 + $this.w - $stupid, $y1 + $deltaClose - $stupid, $fillStyle );
						$x1 = $x-1;
			$y1 = $this.getY($stockData["low"]);
			imagefilledrectangle($this.image, $x1, $y1, $x1 + 1 - $stupid, $y1 + $deltaHigh - $stupid, $fillStyle );
			if(1==0 && $i==0 && $this.w!=1){
				$x = $this.getX(-1);
					
				$fillStyle = imagecolorallocate($this.image, 0, 0, 255);				$PERCENT = 1.05;
				if($this.symbol == "VNINDEX") $PERCENT = 1.01;
				else if($this.symbol == "HAINDEX") $PERCENT = 1.02;
				$deltaClose = $this.getY($PERCENT * $stockData["close"]) - $this.getY($stockData["close"]);
				$deltaHigh = $this.getY($PERCENT * $stockData["close"]) - $this.getY($stockData["close"]);
								$x1 = $x - ($this.w+1)/2;
				$y1 = $this.getY($stockData["close"]);
				imagefilledrectangle($this.image, $x1, $y1, $x1 + $this.w  - $stupid, $y1 + $deltaClose  - $stupid, $fillStyle );
								$x1 = $x-1;
				$y1 = $this.getY($stockData["close"]);
				imagefilledrectangle($this.image, $x1, $y1, $x1 + 1  - $stupid, $y1 + $deltaHigh  - $stupid, $fillStyle );
			
				$fillStyle = imagecolorallocate($this.image, 255, 0, 0);				$PERCENT = 1 - ($PERCENT - 1);
				$deltaClose = $this.getY($PERCENT * $stockData["close"]) - $this.getY($stockData["close"]);
				$deltaHigh = $this.getY($PERCENT * $stockData["close"]) - $this.getY($stockData["close"]);
								$x1 = $x - ($this.w+1)/2;
				$y1 = $this.getY($stockData["close"]);
				imagefilledrectangle($this.image, $x1, $y1, $x1 + $this.w  - $stupid, $y1 + $deltaClose  - $stupid, $fillStyle );
								$x1 = $x-1;
				$y1 = $this.getY($stockData["close"]);
				imagefilledrectangle($this.image, $x1, $y1, $x1 + 1  - $stupid, $y1 + $deltaHigh  - $stupid, $fillStyle );
			}
					}
	}
stock_ViewChart.prototype.paintWeb = function($symbol, $height){
var $this = this; var $__arguments = arguments;
	

	}
stock_ViewChart.prototype.paintClose = function(){
var $this = this; var $__arguments = arguments; var $vo1 = null; var $i = null; var $x = null; var $value = null; var $y = null;
		$vo1=$this.voPrice1;
		
		$this.context.restore();
		$this.context.beginPath();
		$this.context.strokeStyle = 'Red';
		$this.context.strokeStyle = 'Black';
		$this.context.lineWidth=1;
		$this.context.globalAlpha=1;
				if($this.isIndex==true) {
			$this.context.strokeStyle = 'Black';
			$this.context.globalAlpha=1;
		}
		for($i=0; $i<$this.rowPriceArr.length; $i++){
			$x = $this.getX($i) - 0*50;
			if($x<0) break;
			$value = $this.rowPriceArr[$i][$vo1.close];
			if($value==null || $value == 0) continue;
			$y = $this.getY($value);
			if($i==0){
				$this.context.moveTo($x, $y);
			} else{
				$this.context.lineTo($x, $y);
			}
		}
		$this.context.stroke();
		$this.context.globalAlpha=1;
		
		
	}
stock_ViewChart.prototype.paintStat = function(){
var $this = this; var $__arguments = arguments; var $vo1 = null; var $symbol = null; var $status = null; var $text = null; var $arr = null; var $intervalArr = null; var $percentArr = null; var $k = null; var $interval = null; var $interval0 = null; var $x1 = null; var $x2 = null; var $min = null; var $max = null; var $i = null; var $f = null; var $yyy = null; var $y = null;
		$vo1=$this.voPrice1;
		
		
		$symbol=$this.symbol;
		$status = "";
		if($this.viewStock.hrefMap[$symbol]!=null) {
			$text = $this.viewStock.hrefMap[$symbol];
			$arr = explode("/",$text);
			$status = $arr[count($arr)-1];
			$status = str_replace(".chn","",$status);
			$status = str_replace("-"," ",$status);
		}
		$this.paintText("<div style='width:350px;color:black'><b>"+$status+"</b></div>", 20 , 30);		
		return;
		$intervalArr=$this.viewStock.intervalArr;
		$percentArr=$this.viewStock.percentArr;
		for($k=0;$k<count($intervalArr)-1;$k++){
			$interval=$intervalArr[$k];
			$interval0=0;
			if($k!=0)$interval0=$intervalArr[$k-1];
			$x1 = $this.getX($interval0);
			$x2 = $this.getX($interval);
			$min=parseFloat($this.rowPriceArr[0]["min"+$interval]);
			$max=parseFloat($this.rowPriceArr[0]["max"+$interval]);
			for($i=-1;$i<count($percentArr);$i++){
				$this.context.beginPath();
				$this.context.strokeStyle = 'Black';
				$this.context.lineWidth=1;
				$f=($max - $min)/100;
				if($i==-1)$yyy=$min;
				else $yyy=$min+$f*$percentArr[$i];
				$y = $this.getY($yyy);
								$this.context.moveTo($x1, $y);
				$this.context.lineTo($x2, $y);
				$this.context.stroke();
			}
		}
	}
stock_ViewChart.prototype.setOnePrice = function(){
var $this = this; var $__arguments = arguments; var $jSymbol = null; var $i = null; var $obj = null; var $jque = null; var $tr = null;
		$jSymbol=$this.viewDetail.divStock.find("[_tag2='symbolLeft'],[_tag2='symbolRight'],[_tag2='symbolLeft0'],[_tag2='symbolRight0']");
		 $jSymbol.each(function( $i, $obj ) {
		$jque = que($obj);

			if($jque.attr("_value") == $this.symbol){
				$tr=$jque.closest("tr");
				
				$this.divOnePrice.html("");
				$this.divOnePrice.html("<table>"+$tr.html()+"</table>");
				return;
			}
		 });
}
stock_ViewChart.prototype.paintCloseWeb = function(){
var $this = this; var $__arguments = arguments; var $vo = null; var $strokeStyle = null; var $x0 = null; var $y0 = null; var $length = null; var $i = null; var $x = null; var $stockData = null; var $y = null; 		$vo = new stock_VoPrice();
			
			$strokeStyle=imagecolorallocatealpha ($this.image, 0, 0, 0, 0);
									$x0=null;$y0=null;
			$length = count($this.rowPriceArr);
			for($i=0; $i<$length; $i++){
				$x = $this.getX($i);
				if($x<10) break;
				$stockData = $this.rowPriceArr[$i];
				if($stockData["close"]==null || $stockData["close"] == 0) continue;
				$y = $stockData["close"];
				$y = $this.getY($y);
				if($i==0){
									} else{
										imageline($this.image, $x0, $y0, $x, $y, $strokeStyle);
				}
				$x0 = $x; $y0=$y;
			}
	}
stock_ViewChart.prototype.paintValue = function(){
var $this = this; var $__arguments = arguments; var $vo1 = null; var $vo = null; var $thisw = null; var $i = null; var $stockData = null; var $x = null; var $y2 = null; var $value = null; var $y = null;
		$vo1=$this.voPrice1;
		$this.context.restore();
		$this.context.globalAlpha=1;
		$vo = new stock_VoPrice();
		$thisw = $this.w;
				if(1==1 || $this.w==5) for($i=0; $i<$this.rowPriceArr.length; $i++){
			$stockData = $this.rowPriceArr[$i];
			$vo.row = $stockData;
			$x = $this.getX($i);
			if($x< 0*(911-$this.padX1)) break;

						$y2=$stockData[$vo1.volume]*$stockData[$vo1.close];
			if($y2>=$this.maxStockDataY2/7) $y2=round($this.maxStockDataY2/7);
			if($y2==null) continue;
			if($x<$this.padX) break;
			if( $stockData[$vo1.close] >= $stockData[$vo1.open]) $this.context.fillStyle = 'Green';
			else $this.context.fillStyle = 'brown';
			if($this.w==2)$this.context.fillRect($x- 1, $this.getY2(0), $this.w , -$y2*$this.scaleY2);
			else $this.context.fillRect($x- ($this.w+1)/2, $this.getY2(0), $this.w , -$y2*$this.scaleY2);

			if($i==0){
																							}
		}

		$this.context.globalAlpha=1;
		$this.w = $thisw;
		return;
		$this.context.beginPath();
		$this.context.strokeStyle = 'Black';
		$this.context.lineWidth=1;
		for($i=0; $i<$this.rowPriceArr.length; $i++){
			$x = $this.getX($i);
			if($x<$this.padX) break;
			$value = $this.rowPriceArr[$i][$vo1.maVolume];
			if($value==null) continue;
			$y = $this.getY2($value);
			if($i==0){
				$this.context.moveTo($x, $y);
			} else{
				$this.context.lineTo($x, $y);
			}
		}
		$this.context.stroke();
		
	}
stock_ViewChart.prototype.paintMa = function($limit){
var $this = this; var $__arguments = arguments; var $voRe = null; var $vo1 = null; var $vo = null; var $k = null; var $j = null; var $i = null; var $x = null; var $stockData = null; var $y = null;
		$voRe=$this.viewStock.voRowPriceArr;
		$vo1=$this.voPrice1;
		$this.context.restore();
		$vo = new stock_VoPrice();
		
		for($k=6; $k>=1; $k--){
			if($limit!= null && $k!=1 && $k!=2 && $k!=3 && $k!=4 && $k!=5 && $k!=6) continue;
			if($k==1){
								$this.context.strokeStyle='Black';
				$this.context.strokeStyle='sienna';
				$this.context.strokeStyle='purple';
				$this.context.strokeStyle='hotpink';
				$this.context.strokeStyle='sienna';
			}
			else if($k==2){
								$this.context.strokeStyle='Blue';
			}
			else if($k==3){
								$this.context.strokeStyle='hotpink';
				$this.context.strokeStyle='Red';
			}
			else if($k==4){
								$this.context.strokeStyle='sienna';
				$this.context.strokeStyle='black';
				
			}
			else if($k==5){
								$this.context.strokeStyle='black';
			}
			else if($k==6){
								$this.context.strokeStyle='black';
			}
						
			if($k==4){
				
				for($j=2; $j<=3; $j++){
					$this.context.beginPath();
					$this.context.lineWidth=1;
					$this.context.globalAlpha=1;
					for($i=0; $i<$this.rowPriceArr.length; $i++){
						if($limit!=null && $i>=$limit) break;
						$x = $this.getX($i) - 0*50;
						if($this.padX == $this.padX1 && $x<0) break;
						if($this.padX != $this.padX1 && $x< 0*(911-$this.padX1 + 20)) break;
						$stockData = $this.rowPriceExArr[$i];
						$y = $stockData[$voRe.maC4] - $j*$stockData[$voRe.dev];
						if($y==null) break;
						$y = $this.getY($y);
						if($i==0){
							$this.context.moveTo($x, $y);
						} else{
							$this.context.lineTo($x, $y);
						}
					}
					$this.context.stroke();
				}
				
				for($j=2; $j<=3; $j++){
					$this.context.beginPath();
					$this.context.lineWidth=1;
					$this.context.globalAlpha=1;
					for($i=0; $i<$this.rowPriceArr.length; $i++){
						if($limit!=null && $i>=$limit) break;
						$x = $this.getX($i) - 0*50;
						if($this.padX == $this.padX1 && $x<0) break;
						if($this.padX != $this.padX1 && $x< 0*(911-$this.padX1 + 20)) break;
						$stockData = $this.rowPriceExArr[$i];
						$y = $stockData[$voRe.maC4] + $j*$stockData[$voRe.dev];
						if($y==null) break;
						$y = $this.getY($y);
						if($i==0){
							$this.context.moveTo($x, $y);
						} else{
							$this.context.lineTo($x, $y);
						}
					}
					$this.context.stroke();
				}
			}
			
			$this.context.globalAlpha=1;
			$this.context.beginPath();
			$this.context.lineWidth=3;
						
			for($i=0; $i<$this.rowPriceArr.length; $i++){
				if($limit!=null && $i>=$limit) break;
				$x = $this.getX($i) - 0*50;
				if($this.padX == $this.padX1 && $x<0) break;
				if($this.padX != $this.padX1 && $x< 0*(911-$this.padX1 + 20)) break;
				$stockData = $this.rowPriceExArr[$i];
				if($k==1) $y = $stockData[$voRe.maC1];
				else if($k==2) $y = $stockData[$voRe.maC2];
				else if($k==3) $y = $stockData[$voRe.maC3];
				else if($k==4) $y = $stockData[$voRe.maC4];
				else if($k==5) $y = $stockData["ma01"];
				else if($k==6) $y = $stockData["ma02"];
				if($y==null) continue;
				$y = $this.getY($y);
				if($i==0){
					$this.context.moveTo($x, $y);
				} else{
					$this.context.lineTo($x, $y);
				}
			}
			$this.context.stroke();

		}
		$this.context.globalAlpha=1;
	}
stock_ViewChart.prototype.paintTable = function(){
var $this = this; var $__arguments = arguments; var $stock_symbol = null; var $viewPrice = null; var $text = null; var $status = null; var $arr = null; var $x1 = null; var $x2 = null; var $y = null;

		$this.context.restore();
		$stock_symbol = $this.symbol;
		$viewPrice = new stock_ViewPrice();

		$text = "\
tdmua toiuu = tdmua cbcandle <br/>\
tdban toiuu = <b style='color:red'>tcp min</b> <br/>\
cpchia = 4 <br/>\
cpchiacho max = 2\
		";
				$this.paintText("<b><span style='color:red'>"+$viewPrice.formatPrice($this.rowPriceArr[0]["minClose"])+"</span>_<span style='color:red;font-weight:bold'>"+$viewPrice.formatPrice($this.rowPriceArr[0]["maxClose"])+"</span>_<span style='color:red'>"+$viewPrice.formatValue($this.rowPriceArr[0]["value2"])+"</span></b>", $this.width - 160 - $this.padX, 0);
		$this.paintText("<b><span style='color:red'>"+$viewPrice.formatPrice($this.rowPriceArr[0]["minClose20"])+"</span>_<span style='color:red'>"+$viewPrice.formatPrice($this.rowPriceArr[0]["megaCount"])+"</span>_<span style='color:red'>"+$viewPrice.formatValue($this.rowPriceArr[0]["value"])+"</span></b>", $this.width - 160 - $this.padX, 20);
		$this.paintText("<span style='color:black'><b>"+substr($stock_symbol,0,3)+"."+$this.rowPriceArr[0]["market"]+"</b></span>", $this.width - 250 - $this.padX, 0).css("width", 150);
		$status = "";
		if($this.hrefMap[$this.symbol]!=null) {
			$text = $this.hrefMap[$this.symbol];
			$arr = explode("/",$text);
			$status = $arr[count($arr)-1];
			$status = str_replace(".chn","",$status);
			$status = str_replace("-"," ",$status);
		}
		$this.paintText("<span style='color:black'><b>"+$status+"</b></span>", 0, 40).css({
			 "width" : 756
			,"text-align" : "right"
		});
		
		if(stock_A.get().isLive()){
					}

				
		$this.context.restore();
		$this.context.beginPath();
		$this.context.strokeStyle = 'Black';
		$this.context.lineWidth=1;
		
		$x1 = $this.getX(10);
		$x2 = $this.getX(20);
		
		$this.context.beginPath();
		$this.context.strokeStyle = 'Black';
		$this.context.lineWidth=2;
		$y = $this.getY(1.00*$this.rowPriceArr[0]["min"]);
		$this.context.moveTo($x1, $y);
		$this.context.lineTo($x2, $y);
		$this.context.stroke();
		
		$this.context.beginPath();
		$this.context.strokeStyle = 'Black';
		$this.context.lineWidth=1;
		$y = $this.getY(1.25*$this.rowPriceArr[0]["min"]);
		$this.context.moveTo($x1, $y);
		$this.context.lineTo($x2, $y);
		$this.context.stroke();
		
		$this.context.beginPath();
		$this.context.strokeStyle = 'Black';
		$this.context.lineWidth=1;
		$y = $this.getY(1.50*$this.rowPriceArr[0]["min"]);
		$this.context.moveTo($x1, $y);
		$this.context.lineTo($x2, $y);
		$this.context.stroke();
		
		$this.context.beginPath();
		$this.context.strokeStyle = 'Black';
		$this.context.lineWidth=1;
		$y = $this.getY(2.00*$this.rowPriceArr[0]["min"]);
		$this.context.moveTo($x1, $y);
		$this.context.lineTo($x2, $y);
		$this.context.stroke();
		
		
		return;
	}
stock_ViewChart.prototype.paintOxy = function(){
var $this = this; var $__arguments = arguments; var $ox = null; var $ox2 = null; var $one = null; var $value = null; var $y = null; var $i = null; var $x = null; var $stockDate = null;
		$this.context.restore();
		$this.context.beginPath();
		$this.context.strokeStyle = 'black';
		$this.context.globalAlpha = 1;
		$this.context.lineWidth = 1;
				$ox = 0;
		$ox2 = $this.width - $this.ox;
		$this.context.moveTo($ox, $this.getY($this.minStockDataY) + $this.padY);
		$this.context.lineTo($ox, $this.getY($this.maxStockDataY));
		$this.context.moveTo($ox2, $this.getY($this.minStockDataY) + $this.padY);
		$this.context.lineTo($ox2, $this.getY($this.maxStockDataY));

		$one = ($this.maxStockDataY - $this.minStockDataY)/($this.stickY-1);
		for($value=$this.minStockDataY; $value<=$this.maxStockDataY; $value = $value+$one){
			$y = $this.getY($value);
			if($y-8<=0 || $y>=$this.getY($this.minStockDataY)) continue;
			
			$this.context.moveTo($ox2, $y);
			$this.context.lineTo($ox2+4, $y);
					}

				$y = $this.getY($this.minStockDataY);		$this.context.moveTo($ox, $y);
		$this.context.lineTo($ox2, $y);

		for($i=0; $i<$this.rowPriceArr.length; $i++){
			$x = $this.getX($i);
			if($x<$this.padX) break;
			if($i%$this.ma3==0){
				$this.context.moveTo($x, $y);
				$this.context.lineTo($x, $y + 8 );
				$stockDate = $this.rowPriceArr[$i].stockDate;
				if($this.w==1){
					$stockDate = substr($stockDate, 0, 7);
				}
							}
			
		}

		$this.context.closePath();
		$this.context.stroke();


		for($i=0; $i<$this.rowPriceArr.length; $i++){
			$x = $this.getX($i);
			if($x<$this.padX) break;
						if($i==20 || $i==40 || $i==20 || $i==40){
				if($i==120) $this.context.strokeStyle='Green';
				if($i==20) $this.context.strokeStyle='Purple';
				if($i==40) $this.context.strokeStyle='Teal';
				if($i==60) $this.context.strokeStyle='Sienna';
																												$this.context.restore();
				$this.context.beginPath();
				$this.context.strokeStyle='Red';				
				$this.context.globalAlpha=1;
				$this.context.lineWidth=1;
				$this.context.moveTo($x, $y);
				$this.context.lineTo($x, $this.getY($this.maxStockDataY) );
				$this.context.closePath();
				$this.context.stroke();
			}
		}
		return;
	}
stock_ViewChart.prototype.makeMa = function($limit){
var $this = this; var $__arguments = arguments; var $vo1 = null; var $length = null; var $i = null; var $value = null; var $j = null; var $stockData = null; var $k = null; var $ma = null; var $maStr = null;
		$vo1 = $this.voPrice1;
		$length = count($this.rowPriceArr);

		for($i=0; $i<$length; $i++){
			if($limit != null && $i >= $limit) break;
			if($this.rowPriceExArr[$i]["ma1"] != null
			&& $this.rowPriceExArr[$i]["ma2"] != null
			&& $this.rowPriceExArr[$i]["ma3"] != null
			&& $this.rowPriceExArr[$i]["ma4"] != null
			&& $this.rowPriceExArr[$i]["ma5"] != null
			&& $this.rowPriceExArr[$i]["ma6"] != null
			) continue;
			$value = 0;
			for($j=0; $j<=$this.ma6-1; $j++){
				if($i+$j >= $length) break;
				$stockData = $this.rowPriceArr[$i+$j];
				$value += $stockData[$vo1.close];
				if($j==$this.ma1-1) {
					$this.rowPriceExArr[$i]["ma1"] = $value/$this.ma1;
				} else if($j==$this.ma2-1) {
					$this.rowPriceExArr[$i]["ma2"] = $value/$this.ma2;
				} else if($j==$this.ma3-1) {
					$this.rowPriceExArr[$i]["ma3"] = $value/$this.ma3;
				} else if($j==$this.ma4-1) {
					$this.rowPriceExArr[$i]["ma4"] = $value/$this.ma4;
				} else if($j==$this.ma5-1) {
					$this.rowPriceExArr[$i]["ma5"] = $value/$this.ma5;
				} else if($j==$this.ma6-1) {
					$this.rowPriceExArr[$i]["ma6"] = $value/$this.ma6;
				} 
			}
		}
		
		for($i=0; $i<$length; $i++){
			if($limit != null && $i >= $limit) break;
			for($k=1;$k<=6;$k++){
				if($k==1) $ma=$this.ma1;
				if($k==2) $ma=$this.ma2;
				if($k==3) $ma=$this.ma3;
				if($k==4) $ma=$this.ma4;
				if($k==5) $ma=$this.ma5;
				if($k==6) $ma=$this.ma6;
				$maStr="ma"+$k;
				if($this.rowPriceExArr[$i][$maStr]==null) continue;
				
				$value = 0;
				for($j=0; $j<=$ma-1; $j++){
					if($i+$j >= $length) break;
					$stockData = $this.rowPriceExArr[$i+$j];
					$value += pow($stockData[$vo1.close]-$this.rowPriceExArr[$i][$maStr] ,2);
					if($j==$ma-1) {
						$this.rowPriceExArr[$i][$maStr+"E"] = 1*pow($value/$ma ,1/2);
					} 
				}
			}
		}
	}
stock_ViewChart.prototype.makePrice = function($limit){
var $this = this; var $__arguments = arguments; var $vo = null; var $length = null; var $i = null;
		$vo = new stock_LivePriceVo();
		$length = count($this.rowPriceArr);
		for($i=0; $i<$length - 1; $i++){
			if($limit != null && $i >= $limit) break;
			if($this.rowPriceArr[$i+1]["close"]!=0) $this.rowPriceArr[$i]["closePercent"] = 100*($this.rowPriceArr[$i]["close"] - $this.rowPriceArr[$i+1]["close"])/$this.rowPriceArr[$i+1]["close"];
		}
	}
stock_ViewChart.prototype.makeFirst = function(){
var $this = this; var $__arguments = arguments; var $length = null; var $liveValue = null; var $value0 = null; var $value2 = null; var $closePer = null; var $value2Count = null; var $count1 = null; var $count2 = null; var $count3 = null; var $count4 = null; var $megaCount1 = null; var $megaCount2 = null; var $megaCount3 = null; var $megaCount4 = null; var $PERCENT = null; var $volume1 = null; var $volumeCount = null; var $maClose1 = null; var $maClose2 = null; var $maClose3 = null; var $maClose4 = null; var $vo = null; var $i = null; var $delta = null; var $deltaAbs = null; var $megaCount = null; var $min = null; var $imin = null; var $max = null; var $imax = null; var $min60 = null; var $imin60 = null; var $min5 = null; var $max5 = null; var $max60 = null; var $imax60 = null; var $max602 = null; var $imax602 = null; var $max0 = null; var $imax0 = null; var $min2 = null; var $imin2 = null; var $max2 = null; var $imax2 = null; var $x = null; var $k = null; var $minClose5 = null; var $minMax5 = null; var $breakOut = null; var $gtCount = null;
		$length = count($this.rowPriceArr);
		if($length == 0) return;
		$liveValue = 0;
		$value0 = 0;
		$value2 = 0;
		$closePer = -99;
		$value2Count = 0;
		$count1 = 0;
		$count2 = 0;
		$count3 = 0;
		$count4 = 0;
		$megaCount1 = 0;
		$megaCount2 = 0;
		$megaCount3 = 0;
		$megaCount4 = 0;
		$PERCENT = 4;
		$volume1 = 0;
		$volumeCount = 0;
		$maClose1 = 0;
		$maClose2 = 0;
		$maClose3 = 0;
		$maClose4 = 0;
		
		$vo = new stock_VoPrice();
		for($i=0; $i < $length; $i++){
			if($this.rowPriceArr[$i+1]==null || $this.rowPriceArr[$i+1]["close"]==0 || $this.rowPriceArr[$i]["close"]==0) continue;
			$vo.row = $this.rowPriceArr[$i];
			$delta = 100*($this.rowPriceArr[$i]["close"] - $this.rowPriceArr[$i+1]["close"]) / $this.rowPriceArr[$i+1]["close"];
			$deltaAbs = abs($delta);
			if($deltaAbs >= 15){
								continue;
			}

			if($i<12*20){
				$megaCount4 += $deltaAbs;
				$count4++;
			
				$volume1 += $this.rowPriceArr[$i]["volume"];
				$volumeCount ++;
				$maClose4 += $this.rowPriceArr[$i]["close"];
			}
			if($i<$this.ma3){
				$megaCount3 += $deltaAbs;
				$count3++;
				$maClose3 += $this.rowPriceArr[$i]["close"];
			}
			if($i<$this.ma2){
				$megaCount2 += $deltaAbs;
				$count2++;
				$maClose2 += $this.rowPriceArr[$i]["close"];
			}
			if($i==0) {
				$value0 = $vo.getValue();
				$liveValue = $vo.getLiveValue();
				$closePer = $vo.getClosePer();
			}
			if($i<5){
				$value2 += $vo.getLiveValue();
				$value2Count ++;
			}
			if($i<$this.ma1){
				$megaCount1 += $deltaAbs;
				$count1++;
				$maClose1 += $this.rowPriceArr[$i]["close"];
			}
		}
		
		if($count4!=0) {
			$megaCount4 = ($megaCount4)/$count4;
			$maClose4 = $maClose4/$count4;
		}
		if($count3!=0) {
			$megaCount3 = ($megaCount3)/$count3;
			$maClose3 = $maClose3/$count3;
		}
		if($count2!=0) {
			$megaCount2 = ($megaCount2)/$count2;
			$maClose2 = $maClose2/$count2;
		}
		if($count1!=0) {
			$megaCount1 = ($megaCount1)/$count1;
			$maClose1 = $maClose1/$count1;
		}
		if($volumeCount!=0) $volume1 = $volume1/$volumeCount;
		
		$megaCount = $megaCount4;
								$this.rowPriceArr[0]["megaCount"] = $megaCount;
										$this.rowPriceArr[0]["volume1"] = $volume1;
		
		if($value2Count!=0) $value2 = $value2/$value2Count;
		else $value2 = 0;
		$this.rowPriceArr[0]["value"] = $value0;
		$this.rowPriceArr[0]["value2"] = $value2;
		if($value2!=0) $this.rowPriceArr[0]["valuePercent"] = round(100*$value0/$value2);
		$this.rowPriceArr[0]["liveValue"] = $liveValue;
		$this.rowPriceArr[0]["closePer"] = $closePer;
		$this.rowPriceArr[0]["maClose1"] = $maClose1;
		$this.rowPriceArr[0]["maClose2"] = $maClose2;
		$this.rowPriceArr[0]["maClose3"] = $maClose3;
		$this.rowPriceArr[0]["maClose4"] = $maClose4;
		
		$this.rowPriceArr[0]["upCount"] = 0;
		$PERCENT = 0.99;
		if($this.rowPriceArr[0]["maClose4"]!=0){
			if( $this.rowPriceArr[0]["close"]   >= $PERCENT * $this.rowPriceArr[0]["maClose4"]){
				$this.rowPriceArr[0]["upCount"] ++;
			}
			if($this.rowPriceArr[0]["maClose1"] >= $PERCENT * $this.rowPriceArr[0]["maClose4"]){
				$this.rowPriceArr[0]["upCount"] ++;
			}
			if($this.rowPriceArr[0]["maClose2"] >= $PERCENT * $this.rowPriceArr[0]["maClose4"]){
				$this.rowPriceArr[0]["upCount"] ++;
			}
			if($this.rowPriceArr[0]["maClose3"] >= $PERCENT * $this.rowPriceArr[0]["maClose4"]){
				$this.rowPriceArr[0]["upCount"] ++;
			}
		}
		$min = 999999;
		$imin = 0;
		$max = 0;
		$imax = 0;
		$length = count($this.rowPriceArr);
		for($i=0; $i < $length; $i++){
			if($i <= 10){
				if($this.rowPriceArr[$i]["close"] < 1 * $min){
					$min = $this.rowPriceArr[$i]["close"];
					$imin = $i;
				}
			}

			if($this.rowPriceArr[$i]["close"] > $max){
				$max = $this.rowPriceArr[$i]["close"];
				$imax = $i;
			}
		}
		$this.rowPriceArr[0]["maxClose20"] = 0;
		if($this.rowPriceArr[0]["close"]!=0) $this.rowPriceArr[0]["maxClose20"] = 100*($max - $this.rowPriceArr[0]["close"])/$this.rowPriceArr[0]["close"];
		$this.rowPriceArr[0]["imax20"] = $imax;
		
		$this.rowPriceArr[0]["minClose20"] = 0;
		if($min!=0) $this.rowPriceArr[0]["minClose20"] = 100*($this.rowPriceArr[0]["close"] - $min)/$min;
		$this.rowPriceArr[0]["imin20"] = $imin;
		
		
		$min60 = 999999;
		$imin60 = 0;
		
		$min5 = 999999;
		$max5 = 0;
		
		$max60 = 0;
		$imax60 = 0;
		$max602 = 0;
		$imax602 = 0;
		
		$min = 999999;
		$imin = 0;
		
		$max0 = 0;
		$imax0 = 0;
		
		$max = 0;
		$imax = 0;
		
		$min2 = 999999;
		$imin2 = 0;
		
		$max2 = 0;
		$imax2 = 0;
		
		for($i=0; $i < $length; $i++){
			if($i > 10) break;
			if($this.rowPriceArr[$i]["close"] <= $min5){
				$min5 = $this.rowPriceArr[$i]["close"];
			}
		}
		for($i=0; $i < $length; $i++){
			if($i > 10) break;
			if($this.rowPriceArr[$i]["close"] >= $max5){
				$max5 = $this.rowPriceArr[$i]["close"];
			}
		}
		
		for($i=0; $i < $length; $i++){
			if($i >= 6*20) break;
			if($this.rowPriceArr[$i]["close"] <= $min60){
				$min60 = $this.rowPriceArr[$i]["close"];
				$imin60 = $i;
			}
		}
		for($i=0; $i < $length; $i++){
			if($i >= 6*20) break;
			if($this.rowPriceArr[$i]["close"] >= $max60){
				$max60 = $this.rowPriceArr[$i]["close"];
				$imax60 = $i;
			}
		}
		for($i=0; $i <= $imin60; $i++){
			if($i >= 6*20) break;
			if($this.rowPriceArr[$i]["close"] >= $max602){
				$max602 = $this.rowPriceArr[$i]["close"];
				$imax602 = $i;
			}
		}
		
		for($i=0; $i < $length; $i++){
			$x = $this.getX($i);
			if($x<$this.padX) break;
			if($this.rowPriceArr[$i]["close"] < $min){
				$min = $this.rowPriceArr[$i]["close"];
				$imin = $i;
			}
			
			if($this.rowPriceArr[$i]["close"] > $max0){
				$max0 = $this.rowPriceArr[$i]["close"];
				$imax0 = $i;
			}
			
		}
		
		for($i=0; $i <= $imin; $i++){
			if($this.rowPriceArr[$i]["close"] > $max){
				$max = $this.rowPriceArr[$i]["close"];
				$imax = $i;
			}
		}
		
		for($i=0; $i <= $imax; $i++){
			if($this.rowPriceArr[$i]["close"] < $min2){
				$min2 = $this.rowPriceArr[$i]["close"];
				$imin2 = $i;
			}
		}
		
		for($i=0; $i <= $imin2; $i++){
			if($this.rowPriceArr[$i]["close"] > $max2){
				$max2 = $this.rowPriceArr[$i]["close"];
				$imax2 = $i;
			}
		}
		
		$this.rowPriceArr[0]["minClose"] = 0;
		$this.rowPriceArr[0]["maxClose"] = 0;
		$this.rowPriceArr[0]["minMax"] = 0;
						if($this.rowPriceArr[0]["close"]!=0 && $min5!=0) $this.rowPriceArr[0]["minMax"] = 100*($max5 - $min5)/$min5;
		if($this.rowPriceArr[0]["close"]!=0 && $min5!=0) $this.rowPriceArr[0]["minMax5"] = 100*($max5 - $min5)/$min5;
		$this.rowPriceArr[0]["min"] = $min60;
		$this.rowPriceArr[0]["max0"] = $max0;
						if($min5!=0) $this.rowPriceArr[0]["minClose"] = 100*($this.rowPriceArr[0]["close"] - $min5)/$min5;
		if($min5!=0) $this.rowPriceArr[0]["maxClose"] = 100*($max5 - $this.rowPriceArr[0]["close"])/$this.rowPriceArr[0]["close"];
		
		for($k=0; $k<$length; $k++){
			
			$min5=9999999;
			for($i=$k+1; $i <= $k+10; $i++){
				if($i>=$length) break;
				if($this.rowPriceArr[$i]["close"] <= $min5){
					$min5 = $this.rowPriceArr[$i]["close"];
				}
			}
			$max5=0;
			for($i=$k+1; $i <= $k+10; $i++){
				if($i>=$length) break;
				if($this.rowPriceArr[$i]["close"] >= $max5){
					$max5 = $this.rowPriceArr[$i]["close"];
				}
			}
			$minClose5=100*($this.rowPriceArr[$k]["close"] - $min5)/$min5;
			$minMax5=100*($max5 - $min5)/$min5;
		
			$breakOut=0;
			$gtCount=0;
			for($i=$k+1; $i <= $k+10; $i++){
				if($i>=$length) break;
				if($this.rowPriceArr[$k]["close"] >= $this.rowPriceArr[$i]["close"]) $gtCount++;
			}
			if($gtCount>=7) $breakOut=1;
			if($minMax5 >= 20) $breakOut=0;
			$this.rowPriceArr[$k]["breakOut"]=$breakOut;
		
		}
		
		
	}
</script>

<script class="stock_ViewDetail">
stock_ViewDetail = function(){
	if(arguments.length==1 && arguments[0]=='__extends__') return;
	jsml_Ob.call(this,'__init__');
	if(arguments.length==1 && arguments[0]=='__init__') return;
	if(this.__construct) this.__construct.apply(this,arguments);
}
stock_ViewDetail.prototype = new jsml_Ob('__extends__');
stock_ViewDetail.prototype.__extends = jsml_Ob;
stock_ViewDetail.prototype.constructor = stock_ViewDetail;
stock_ViewDetail.prototype.__class = stock_ViewDetail;
stock_ViewDetail.__className = 'stock_ViewDetail';
stock_ViewDetail.__name = 'ViewDetail';
stock_ViewDetail.__obReflection__ = null;
stock_ViewDetail.__getObReflection = function(){
	if(stock_ViewDetail.__obReflection__ != null) return stock_ViewDetail.__obReflection__;
	stock_ViewDetail.__obReflection__ = new jsml_ObReflection();
	stock_ViewDetail.__obReflection__.__class = stock_ViewDetail;
	stock_ViewDetail.__obReflection__.__extends = jsml_Ob;
	return stock_ViewDetail.__obReflection__;
}
stock_ViewDetail.prototype.con = function(){
var $this = this; var $__arguments = arguments;
		$this.ao=stock_Ao.get();
		$this.viewStock=$this.ao.bean("stock_ViewStock/con");
		$this.viewPrice=$this.ao.bean("stock_ViewPrice/con");
		$this.viewChart=$this.ao.bean("stock_ViewChart/con");
		$this.obJfile=$this.ao.bean("stock_ObJfile/con");
		$this.voPrice2=$this.ao.bean("stock_VoPrice/con2");
		$this.voPrice1=$this.ao.bean("stock_VoPrice/con1");
		$this.voPrice=$this.ao.bean("stock_VoPrice/con");
		
		$this.rowPriceArrMap={
		};
		$this.isRun=1;
		return $this;
	}
stock_ViewDetail.prototype.view = function(){
var $this = this; var $__arguments = arguments; var $h1 = null; var $w1 = null; var $html = null; var $event = null; var $result = null;
		if($this.jque!=null) return $this;
		$h1=75;
		$w1=105;

var $__htmlArray = new Array();
$__htmlArray.push('\
<div>\
<table>\
<tr>\
 <td valign="top">\
<div id="divChart"></div>\
 <div style="text-align:right; width:');
$__htmlArray.push( $this.viewChart.width );

$__htmlArray.push('px;">\
 <button id=\'buttonLink\' style="font-weight: bold; width:');
$__htmlArray.push($w1);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px;display:">Link</button>\
<button id=\'buttonOverview\' style="font-weight: bold; width:');
$__htmlArray.push($w1);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px;display:">View</button>\
<button id=\'buttonCap\' style="display:none;font-weight: bold; width:');
$__htmlArray.push($w1);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px">Cap</button>\
<button id=\'buttonBack\' style="font-weight: bold; width:');
$__htmlArray.push($w1);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px">Back</button>\
<select id=\'selectStock\' style=\'width: 200px;height: 40px;display:none\'>\
<option selected>VN30INDEX</option>\
<option >VNINDEX</option>\
</select>\
<input id=\'textStock\' type=\'text\' size=\'7\' style=\'width: ');
$__htmlArray.push($w1);

$__htmlArray.push('px;height: ');
$__htmlArray.push($h1-4);

$__htmlArray.push('px\'></input>\
<button id=\'buttonList\' style="font-weight: bold; width:');
$__htmlArray.push($w1);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px">List</button>\
<button id=\'buttonCand1\' style="font-weight: bold; width:');
$__htmlArray.push($w1);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px">Ca8</button>\
<button id=\'buttonCand\' style="font-weight: bold; width:');
$__htmlArray.push($w1);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px">Ca</button>\
<button id=\'buttonHA\'   style="font-weight: bold; width:');
$__htmlArray.push($w1);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px;display:none">HA</button>\
<button id=\'buttonVN\'   style="font-weight: bold; width:');
$__htmlArray.push($w1);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px">VN</button>\
</div>\
<div id="divTrade"></div>\
<div id="divConf" style="text-align:right;">\
<br/>\
 <button id=\'buttonTa\' style="font-weight: bold; width:');
$__htmlArray.push($w1);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px">Ta</button>\
<button id=\'buttonClear\' style="font-weight: bold; width:');
$__htmlArray.push($w1);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px">Clear</button>\
<button id=\'buttonConf\' style="font-weight: bold; width:');
$__htmlArray.push($w1);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px;display:">Conf</button>\
<button id=\'buttonClean\' style="font-weight: bold; width:');
$__htmlArray.push($w1);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px">Clean</button>\
<button id=\'buttonMstock\' style="font-weight: bold; width:');
$__htmlArray.push($w1);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px">Mstk</button>\
<button id=\'buttonRun\' style="font-weight: bold; width:');
$__htmlArray.push($w1);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px;color:Blue">Run</button>\
<br/>\
</div>\
<div>\
<textarea id="textConf" style="width:');
$__htmlArray.push( $this.viewChart.width-0*700 );

$__htmlArray.push('px;height:400px;"></textarea>\
<br/>\
<textarea id="textTrade" style="width:');
$__htmlArray.push( 200 );

$__htmlArray.push('px;height:400px;"></textarea>\
<br/>\
<textarea id="textMstock" style="width:');
$__htmlArray.push( $this.viewChart.width );

$__htmlArray.push('px;height:200px;display:none"></textarea>\
</div>\
</td>\
<td><div id="divStock" style=\'position:relative\'></div>\
</td>\
</tr>\
</table>\
</div>\
');
$html = $__htmlArray.join("");
		$this.jque=que($html);
		
		 $this.divChart=$this.jque.find("#divChart").bind("click", function($event){ $this.onclickDivChart($event); });
	$this.viewChart.view().jque.appendTo($this.divChart);
		 $this.divStock=$this.jque.find("#divStock").bind("click", function($event){ $this.onclickDivStock($event); });
	 $this.divTrade=$this.jque.find("#divTrade").bind("click", function($event){ $this.onclickDivTrade($event); });
	
		 $this.buttonCand=$this.jque.find("#buttonCand").bind("click", function($event){ $this.onclickButtonCand($event); });
	 $this.buttonCand1=$this.jque.find("#buttonCand1").bind("click", function($event){ $this.onclickButtonCand1($event); });
	 $this.buttonCap=$this.jque.find("#buttonCap").bind("click", function($event){ $this.onclickButtonCap($event); });
	 $this.buttonClean=$this.jque.find("#buttonClean").bind("click", function($event){ $this.onclickButtonClean($event); });
	 $this.buttonTa=$this.jque.find("#buttonTa").bind("click", function($event){ $this.onclickButtonTa($event); });
	 $this.buttonClear=$this.jque.find("#buttonClear").bind("click", function($event){ $this.onclickButtonClear($event); });
	 $this.buttonMstock=$this.jque.find("#buttonMstock").bind("click", function($event){ $this.onclickButtonMstock($event); });
	 $this.buttonBack=$this.jque.find("#buttonBack").bind("click", function($event){ $this.onclickButtonBack($event); });
	 $this.buttonList=$this.jque.find("#buttonList").bind("click", function($event){ $this.onclickButtonList($event); });
	 $this.textStock=$this.jque.find("#textStock").bind("click", function($event){ $this.onclickTextStock($event); });
	 $this.textStock.bind("blur", function($event){ $this.onblurTextStock($event); });
	 $this.buttonHA=$this.jque.find("#buttonHA").bind("click", function($event){ $this.onclickButtonHA($event); });
	 $this.buttonRun=$this.jque.find("#buttonRun").bind("click", function($event){ $this.onclickButtonRun($event); });
	 $this.buttonVN=$this.jque.find("#buttonVN").bind("click", function($event){ $this.onclickButtonVN($event); });
	 $this.selectStock=$this.jque.find("#selectStock").bind("change", function($event){ $this.onchangeSelectStock($event); });
	
		$this.textConf=$this.jque.find("#textConf");
		$this.textTrade=$this.jque.find("#textTrade");
		$this.textMstock=$this.jque.find("#textMstock");
		$this.buttonConf=$this.jque.find("#buttonConf");
		$this.buttonLink=$this.jque.find("#buttonLink");
		$this.buttonOverview=$this.jque.find("#buttonOverview");
		
		 que($this).bind("rpc.rpcBuyTrade", function($event, $result){ $this.onrpcBuyTrade($event, $result); });
	 que($this).bind("rpc.rpcSellTrade", function($event, $result){ $this.onrpcSellTrade($event, $result); });
	 que($this).bind("rpc.rpcDetail", function($event, $result){ $this.onrpcDetail($event, $result); });
	 que($this.viewStock).bind("rpc.rpcMakeTa", function($event, $result){ $this.onrpcMakeTa($event, $result); });
		 que($__doc).bind("keydown", function ($event){ return $this.onkeydown($event); });
	
		return $this;
	}
stock_ViewDetail.prototype.conPaint = function(){
var $this = this; var $__arguments = arguments;
		return $this;
	}
stock_ViewDetail.prototype.viewPaint = function(){
var $this = this; var $__arguments = arguments;
		$this.viewChart.conPaint().viewPaint();		
		$this.conTrade().viewTrade();
				return $this;
	}
stock_ViewDetail.prototype.conTrade = function(){
var $this = this; var $__arguments = arguments; var $vo = null;
		$vo=$this.viewStock.voStock;
		$this.stockMap=$this.viewStock.stockMap;
		if($this.stockMap[$this.symbol]==null) return $this;
		$this.trade=$this.stockMap[$this.symbol][$vo.trade];
		$this.live=$this.stockMap[$this.symbol][$vo.live];
		return $this;
	}
stock_ViewDetail.prototype.viewTrade = function(){
var $this = this; var $__arguments = arguments; var $trade = null; var $live = null; var $symbol = null; var $tradeKey = null; var $dateArr = null; var $priceArr = null; var $volumeArr = null; var $marketArr = null; var $buyPrice = null; var $buy = null; var $h1 = null; var $w1 = null; var $i = null; var $date = null; var $tp = null; var $price = null; var $volume = null; var $value = null; var $valueNow = null; var $profit = null; var $per = null; var $html = null;
		$trade=$this.trade;
		if($trade==null) return;
		$live=$this.live;
		$symbol=$this.symbol;
		$tradeKey=$symbol+$trade["date"]+$trade["price"]+$trade["volume"]+$trade["market"];
		if($this.tradeKey==$tradeKey) return;
		$this.tradeKey=$tradeKey;
		$dateArr=explode(",",$trade["date"]);
		$priceArr=explode(",",$trade["price"]);
		$volumeArr=explode(",",$trade["volume"]);
		$marketArr=explode(",",$trade["market"]);
		$buyPrice=$this.viewStock.getPrice("sellPrice1",$live);
		if($buyPrice!=0) $buy=100*ceil($this.viewStock.buyValue/(100*$buyPrice));
		else $buy=null;
		$h1=75-4;
		$w1=100;

var $__htmlArray = new Array();
$__htmlArray.push('\
<table border="0" style="margin-left:auto;margin-right:0">\
<tr style="display:none">\
<td>Symbol</td>\
<td>Date</td>\
<td>Volume</td>\
<td>Price</td>\
<td>Market</td>\
<td>&nbsp;</td>\
</tr>\
');
 for($i=0;$i<count($dateArr)-1;$i++){
		$date=$dateArr[$i];
		$tp=$this.ao.getTplus($date);
		$price=$priceArr[$i];
		$volume=$volumeArr[$i];
		$value=round($price*$volume);
		$valueNow=round($live["close"]*$volume);
		$profit=$valueNow-$value;
		$per=round(100*($live["close"]-$price)/$price,1);

$__htmlArray.push('\
<tr index="');
$__htmlArray.push($i);

$__htmlArray.push('">\
<td><input _tag="symbol" type="text" value="');
$__htmlArray.push($symbol);

$__htmlArray.push('" style="width:');
$__htmlArray.push($w1*1.5);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px\
;"/></td>\
<td><input _tag="date" type="text" value="');
$__htmlArray.push($dateArr[$i]);

$__htmlArray.push('" style="width:');
$__htmlArray.push($w1*1.55);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px;"/></td>\
<td><input _tag="volume" type="text" value="');
$__htmlArray.push($volumeArr[$i]);

$__htmlArray.push('" style="width:');
$__htmlArray.push($w1);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px;"/></td>\
<td><input _tag="price" type="text" value="');
$__htmlArray.push($priceArr[$i]);

$__htmlArray.push('" style="width:');
$__htmlArray.push($w1);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px;"/></td>\
<td><input _tag="market" type="text" value="');
$__htmlArray.push($marketArr[$i]+$tp);

$__htmlArray.push('" style="width:');
$__htmlArray.push($w1);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px;"/></td>\
<td><button _tag="buttonSell" style="font-weight: bold; width:');
$__htmlArray.push($w1*1.5);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1+4);

$__htmlArray.push('px;display:">Sell</button></td>\
</tr>\
');

} 
$__htmlArray.push('\
<tr>\
<td><input _tag="symbol" type="text" value="');
$__htmlArray.push($symbol);

$__htmlArray.push('" style="width:');
$__htmlArray.push($w1*1.55);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px;"/></td>\
<td><input _tag="date" type="text" value="');
$__htmlArray.push(date("Y-m-d"));

$__htmlArray.push('" style="width:');
$__htmlArray.push($w1*1.5);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px;"/></td>\
<td><input _tag="volume" type="text" value="');
$__htmlArray.push($buy);

$__htmlArray.push('" style="width:');
$__htmlArray.push($w1);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px;"/></td>\
<td><input _tag="price" type="text" value="');
$__htmlArray.push($buyPrice);

$__htmlArray.push('" style="width:');
$__htmlArray.push($w1);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px;"/></td>\
<td><input _tag="market" type="text" value="" style="width:');
$__htmlArray.push($w1);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1);

$__htmlArray.push('px;"/></td>\
<td><button _tag="buttonBuy" style="font-weight: bold; width:');
$__htmlArray.push($w1*1.5);

$__htmlArray.push('px; height: ');
$__htmlArray.push($h1+4);

$__htmlArray.push('px;display:">Buy</button></td>\
</tr>\
</table>\
');
$html = $__htmlArray.join("");
		$this.divTrade.html($html);
		return $this;
	}
stock_ViewDetail.prototype.unload = function(){
var $this = this; var $__arguments = arguments;
			}
stock_ViewDetail.prototype.rpcClear = function(){
var $this = this; var $__arguments = arguments;
 $this.json();

	}
stock_ViewDetail.prototype.rpcMstock = function($strMstock){
var $this = this; var $__arguments = arguments;
 $this.json($strMstock);

	}
stock_ViewDetail.prototype.rpcClean = function(){
var $this = this; var $__arguments = arguments;
 $this.json();

	}
stock_ViewDetail.prototype.onclickDivStock = function($event){
var $this = this; var $__arguments = arguments; var $target = null; var $symbol = null; var $selectStock = null; var $i = null; var $element = null;
		$target = que($event.target);
		if($target.attr("_tag2")=="symbolLeft" || $target.attr("_tag2")=="symbolRight"){
			$symbol=trim($target.attr("_value"));
			$this.symbol=$symbol;
			$this.highlight();
			
			if($symbol=="&nbsp;") $symbol="";
			$selectStock = $this.selectStock;
			 $selectStock.children().each(function($i, $element){
			if($element.value == $symbol) $selectStock.prop("selectedIndex", $i);
			 });
		$this.textStock.prop("value", "");
			$this.buttonList.click();
		}
	}
stock_ViewDetail.prototype.onclickButtonCap = function($event){
var $this = this; var $__arguments = arguments; var $strConf = null;
		$strConf=$this.textConf.prop("value");
		if(confirm("Make trade Cap")){
			$this.viewStock.rpcTradeCap($strConf);
		}
	}
stock_ViewDetail.prototype.onclickButtonClear = function($event){
var $this = this; var $__arguments = arguments;
		if(confirm("Clear")){
			$this.rpcClear();
		}
	}
stock_ViewDetail.prototype.onclickButtonMstock = function($event){
var $this = this; var $__arguments = arguments; var $str = null;
		$str=$this.textMstock.prop("value");
		if($this.isRun==1) $this.buttonRun.click();
		if(confirm("Import: "+$str)){
			$this.viewPrice.jsonOption({"type":"POST"});
			$this.viewPrice.rpcMstock($str);
		}
	}
stock_ViewDetail.prototype.onclickButtonClean = function($event){
var $this = this; var $__arguments = arguments;
		if(confirm("Clean")){
			$this.rpcClean();
		}
	}
stock_ViewDetail.prototype.onclickButtonBack = function($event){
var $this = this; var $__arguments = arguments; var $selectedIndex = null; var $length = null;
		$selectedIndex = $this.selectStock.prop("selectedIndex");
		$length = $this.selectStock.prop("length");
		$selectedIndex--;
		if($selectedIndex==-1) $selectedIndex = $length-1;
		else if($selectedIndex==$length) $selectedIndex = 0;
		$this.selectStock.prop("selectedIndex", $selectedIndex);
		$this.textStock.prop("value","");
		$this.buttonList.click();
	}
stock_ViewDetail.prototype.onclickDivChart = function($event){
var $this = this; var $__arguments = arguments; var $selectedIndex = null; var $length = null;
		$selectedIndex = $this.selectStock.prop("selectedIndex");
		$length = $this.selectStock.prop("length");
		$selectedIndex++;
		if($selectedIndex==-1) $selectedIndex = $length-1;
		else if($selectedIndex==$length) $selectedIndex = 0;
		$this.selectStock.prop("selectedIndex", $selectedIndex);
		$this.textStock.prop("value","");
		$this.buttonList.click();
	}
stock_ViewDetail.prototype.onclickButtonVN = function($event){
var $this = this; var $__arguments = arguments;
		$this.textStock.prop("value","");
		$this.divStock.find("[_tag='symbol'][_value='VN30INDEX']").click();
	}
stock_ViewDetail.prototype.onclickButtonHA = function($event){
var $this = this; var $__arguments = arguments;
		$this.textStock.prop("value","");
		$this.divStock.find("[_tag2='symbolRight'][_value='HAINDEX']").click();
	}
stock_ViewDetail.prototype.onclickButtonRun = function($event){
var $this = this; var $__arguments = arguments;
		if($this.isRun==1) $this.isRun=0;
		else $this.isRun=1;
		if($this.isRun==1){
			$this.buttonRun.text("Run");
			$this.buttonRun.css("color","blue");
			
			$this.viewStock.restartStockMap();
		} else {
			$this.buttonRun.text("Stop");
			$this.buttonRun.css("color","red");
		}
	}
stock_ViewDetail.prototype.onclickButtonCand = function($event){
var $this = this; var $__arguments = arguments; var $strConf = null; var $day = null;
		if($this.ao.conf["combineDay"]==2) $this.ao.conf["combineDay"]=1;
		else $this.ao.conf["combineDay"]=2;
		$this.conPaint().viewPaint();
		$this.buttonCand.text("Ca"+$this.ao.conf["combineDay"]);
		return;
	
		$strConf=$this.textConf.prop("value");
		if( strpos($strConf,'["combineDay"]=1')>0 ) { $strConf=str_replace('["combineDay"]=1','["combineDay"]=2',$strConf); $day=2; }
		else if( strpos($strConf,'["combineDay"]=2')>0 ) { $strConf=str_replace('["combineDay"]=2','["combineDay"]=8',$strConf); $day=8; }
		else if( strpos($strConf,'["combineDay"]=8')>0 ) { $strConf=str_replace('["combineDay"]=8','["combineDay"]=2',$strConf); $day=2; }
						$this.textConf.prop("value",$strConf);
		
		$this.viewStock.rpcConf( $strConf );
		
		$this.buttonCand.text("Ca"+$day);
	}
stock_ViewDetail.prototype.onclickButtonCand1 = function($event){
var $this = this; var $__arguments = arguments; var $strConf = null; var $day = null;
				if($this.ao.conf["combineDay"]==4) $this.ao.conf["combineDay"]=3;
		else $this.ao.conf["combineDay"]=4;
		
		$this.conPaint().viewPaint();
		$this.buttonCand.text("Ca"+$this.ao.conf["combineDay"]);
		return;
		
		$strConf=$this.textConf.prop("value");
		if( strpos($strConf,'["combineDay"]=1')>0 ) { $strConf=str_replace('["combineDay"]=1','["combineDay"]=1',$strConf); $day=1; }
		else if( strpos($strConf,'["combineDay"]=2')>0 ) { $strConf=str_replace('["combineDay"]=2','["combineDay"]=1',$strConf); $day=1; }
		else if( strpos($strConf,'["combineDay"]=8')>0 ) { $strConf=str_replace('["combineDay"]=8','["combineDay"]=1',$strConf); $day=1; }
						$this.textConf.prop("value",$strConf);
		
		$this.viewStock.rpcConf( $strConf );
		
		$this.buttonCand.text("Ca"+$day);
	}
stock_ViewDetail.prototype.onclickTextStock = function($event){
var $this = this; var $__arguments = arguments;
		$this.textStock.prop("value","");
	}
stock_ViewDetail.prototype.onblurTextStock = function($event){
var $this = this; var $__arguments = arguments;
		$this.buttonList.click();
	}
stock_ViewDetail.prototype.onchangeSelectStock = function($event){
var $this = this; var $__arguments = arguments;
		$this.textStock.prop("value","");
		$this.buttonList.click();
	}
stock_ViewDetail.prototype.onclickButtonList = function($event){
var $this = this; var $__arguments = arguments; var $symbol = null; var $i = null; var $element = null; var $live = null;
		$symbol = $this.textStock.prop("value").trim().toUpperCase();
		if($symbol!=""){
			 $this.selectStock.children().each(function($i, $element){
			if($element.value == $symbol) $this.selectStock.prop("selectedIndex", $i);
			 });
	}
		
		$this.textStock.prop("value", $symbol);
		if($symbol=="") $symbol = $this.selectStock.prop("value");
		if($symbol!="") $this.symbol = $symbol;
	
		if($symbol!=""){
			if($this.rowPriceArrMap[$symbol]==null) {
				$this.rowPriceArrMap[$symbol]=[];
				$this.rpcDetail($symbol,"getAll");
			}
			else {
				$live=$this.viewStock.getLivePrice($symbol);
				if($live==null) {
					$this.rpcDetail($symbol,"get1");
				} else {
					$this.symbol = $symbol;
					$this.preloadDetail($this.symbol);
					if(count($this.rowPriceArrMap[$symbol])>0){
						$this.rowPriceArrMap[$symbol][0][$this.voPrice1.open]=$live[$this.voPrice2.open];
						$this.rowPriceArrMap[$symbol][0][$this.voPrice1.high]=$live[$this.voPrice2.high];
						$this.rowPriceArrMap[$symbol][0][$this.voPrice1.low]=$live[$this.voPrice2.low];
						$this.rowPriceArrMap[$symbol][0][$this.voPrice1.close]=$live[$this.voPrice2.close];
						$this.rowPriceArrMap[$symbol][0][$this.voPrice1.volume]=$live[$this.voPrice2.volume];
						$this.conPaint().viewPaint();
					} else $this.rowPriceArrMap[$symbol] = null;
				}
			}
		}
		$this.highlight();
	}
stock_ViewDetail.prototype.onclickButtonTa = function($event){
var $this = this; var $__arguments = arguments;
		if(confirm("Ta")){
			$this.viewStock.rpcMakeTa();
		}
	}
stock_ViewDetail.prototype.onrpcMakeTa = function($event,$result){
var $this = this; var $__arguments = arguments;
		alert("Finish");
	}
stock_ViewDetail.prototype.preloadDetail = function($symbol){
var $this = this; var $__arguments = arguments; var $preKey = null; var $preKey2 = null; var $preKey3 = null; var $key = null;
		if($this.viewStock.stockMap!=null) {
			$preKey=null;
			$preKey2=null;
			$preKey3=null;
			for($key in $this.viewStock.stockMap){var $value = $this.viewStock.stockMap[$key];
				if($preKey3==$symbol){
					if($this.rowPriceArrMap[$preKey2]==null) {
						$this.rowPriceArrMap[$preKey2]=[];
						$this.rpcDetail($preKey2,"preload");
					}
					if($this.rowPriceArrMap[$preKey]==null) {
						$this.rowPriceArrMap[$preKey]=[];
						$this.rpcDetail($preKey,"preload");
					}
					if($this.rowPriceArrMap[$key]==null) {
						$this.rowPriceArrMap[$key]=[];
						$this.rpcDetail($key,"preload");
					}
				}
				$preKey3=$preKey2;
				$preKey2=$preKey;
				$preKey=$key;
			}
		}
	}
stock_ViewDetail.prototype.highlight = function(){
var $this = this; var $__arguments = arguments; var $fnum = null; var $jSymbol = null; var $i = null; var $obj = null; var $jque = null; var $h = null; var $display = null; var $height = null; var $num = null; var $top = null;
		$fnum = 3;
				$jSymbol=$this.divStock.find("[_tag2='symbolLeft'],[_tag2='symbolRight'],[_tag2='symbolLeft0'],[_tag2='symbolRight0']");
		 $jSymbol.each(function( $i, $obj ) {
		$jque = que($obj);
			
			$jque.css("backgroundColor","white");
			$jque.css("color","black");
			
			if($jque.attr("_value") == $this.symbol){
				$jque.css("backgroundColor","blue");
				$jque.css("color","white");
			}
		 });
	 $this.divStock.find("[_tag='symbol']").each(function( $i, $obj ) {
		$jque = que($obj);
			if($jque.attr("_value") == $this.symbol){
				$h=33;				$display = 20;												$height = $h*$display;
				$num = floor($i/$display);
				$top = 0 - $num * $height;
				if($num!=0) $top += $h*$fnum;
				$this.divStock.css("top",$top);
			}
		 });
}
stock_ViewDetail.prototype.onclickDivTrade = function($event){
var $this = this; var $__arguments = arguments; var $target = null; var $tr = null; var $trade = null; var $index = null;
		$target = que($event.target);
		if($target.attr("_tag")=="buttonBuy"){
			$tr=$target.closest("tr");
			$trade={
			};
			$trade["symbol"]=trim($tr.find('[_tag="symbol"]').prop("value"));
			$trade["date"]=trim($tr.find('[_tag="date"]').prop("value"));
			$trade["price"]=floatval(trim($tr.find('[_tag="price"]').prop("value")));
			$trade["volume"]=intval(trim($tr.find('[_tag="volume"]').prop("value")));
			$trade["market"]=trim($tr.find('[_tag="market"]').prop("value"));
			if(confirm("BUY "+JSON.stringify($trade))){
				$this.rpcBuyTrade($trade);
			}
		}
		else if($target.attr("_tag")=="buttonSell"){
			$tr=$target.closest("tr");
			$index=intval($tr.attr("index"));
			$trade={
			};
			$trade["symbol"]=trim($tr.find('[_tag="symbol"]').prop("value"));
			$trade["date"]=trim($tr.find('[_tag="date"]').prop("value"));
			$trade["price"]=floatval(trim($tr.find('[_tag="price"]').prop("value")));
			$trade["volume"]=intval(trim($tr.find('[_tag="volume"]').prop("value")));
			$trade["market"]=trim($tr.find('[_tag="market"]').prop("value"));
			if(confirm("SELL "+JSON.stringify($trade))){
				$this.rpcSellTrade($trade ,$index);
			}
		}
	}
stock_ViewDetail.prototype.onrpcBuyTrade = function($event,$result){
var $this = this; var $__arguments = arguments;
		$this.viewTrade($result);
		$this.divChart.click();
	}
stock_ViewDetail.prototype.rpcBuyTrade = function($buyTrade){
var $this = this; var $__arguments = arguments;
 $this.json($buyTrade);

	}
stock_ViewDetail.prototype.onrpcSellTrade = function($event,$result){
var $this = this; var $__arguments = arguments;
		$this.viewTrade($result);
		$this.divChart.click();
	}
stock_ViewDetail.prototype.rpcSellTrade = function($sellTrade,$index){
var $this = this; var $__arguments = arguments;
 $this.json($sellTrade,$index);

	}
stock_ViewDetail.prototype.onkeydown = function($event){
var $this = this; var $__arguments = arguments; var $target = null; var $charCode = null; var $ch = null;
		
		$target = que($event.target);
		
		 $charCode = ($event.which) ? $event.which : event.keyCode
	
		$ch = strtoupper(chr($charCode));
		if($charCode==13){						$this.textStock.blur();
		}
		
		if($event.target.tagName != "BODY") return;
		if($ch == "N" || $charCode==39){
			$this.divChart.click();
			return false;
		} else if($ch == "B" || $charCode==37){
			$this.buttonBack.click();
			return false;
		} else if($ch == "1"){
			$this.buttonVN.click();
		} else if($ch == "2"){
			$this.buttonHA.click();
		} else if($ch == "3"){
			$this.buttonHA.click();
		} else if($ch == "4"){
			$this.getQue("buttonALL").click();
		} else if($ch == "5"){
			$this.getQue("buttonList").click();
		} else if($ch == "C"){
			$this.buttonCand.click();
		} else if($ch == "T"){
			$this.getQue("buttonT").click();
		} else if($ch == "Y"){
			$this.getQue("buttonY").click();
		} else if($ch == "X"){
			if($this.enablePlus==false){
				$this.enablePlus = true;
				$this.getQue("divXPlus").css("visibility", "visible");
				$this.getQue("divYPlus").css("visibility", "visible");
							} else{
				$this.enablePlus = false;
				$this.getQue("divXPlus").css("visibility", "hidden");
				$this.getQue("divYPlus").css("visibility", "hidden");
							}
			if($this.enablePlus==true){
				$this.mousemoveDivViewChart($event);
			}
		} else if($ch == "A" || $ch == "F"){
			$this.divTrade.find("[_tag='buttonBuy']").click();
		} else if($ch == "S"){
		} else if($ch == "D" || $ch == "H"){
			$this.divTrade.find("[_tag='buttonSell']").click();
		} else if($ch == "L"){
			$this.buttonLink.click();
		} else if($ch == "V"){
			$this.buttonOverview.click();
		} else {
			
		}
		
		return true;
	}
stock_ViewDetail.prototype.onrpcDetail = function($event ,$result){
var $this = this; var $__arguments = arguments; var $mode = null; var $symbol = null;
				$mode=$event["paramArr"][1];
		if($mode=="preload") {
			$symbol=$event["paramArr"][0];
			$this.rowPriceArrMap[$symbol] = $result["rowPriceArr"]; 
			return;
		}
		$this.symbol=$event["paramArr"][0];
		$this.preloadDetail($this.symbol);
		if($mode=="get1"){
			if(count($result["rowPriceArr"])>0) $this.rowPriceArrMap[$this.symbol][0]=$result["rowPriceArr"][0];
		} else if($mode=="getAll") $this.rowPriceArrMap[$this.symbol] = $result["rowPriceArr"]; 
		$this.conPaint().viewPaint();
	}
stock_ViewDetail.prototype.rpcDetail = function($symbol,$mode){
var $this = this; var $__arguments = arguments;
 $this.json($symbol,$mode);

	}
</script>

<script class="stock_ViewTrade">
stock_ViewTrade = function(){
	if(arguments.length==1 && arguments[0]=='__extends__') return;
	jsml_Ob.call(this,'__init__');
	this.jque=null;
	this.w=5;
	this.padX = 10;
	this.valueShift = 0;
	this.ox=0;
	this.oy=40;
	this.minMaxPadFactor = 1.93;
	this.stickY = 11;
	this.padY = 10;
	this.ma1 = 5;
	this.ma2 = 15;
	this.ma3 = 35;
	this.ma4 = 60;
	this.ma5 = 90;
	this.ma6 = 120;
	this.minStockDataX=null;
	this.maxStockDataX=null;
	this.rangeX=null;
	this.scaleX=null;
	this.minStockDataY = 30;
	this.maxStockDataY = 80;
	this.rangeY=null;
	this.scaleY=null;
	this.minStockDataY2 = 0;
	this.maxStockDataY2 = 3000000000;
	this.rangeY2=null;
	this.scaleY2=null;
	this.minStockDataY3 = 0;
	this.maxStockDataY3 = 100;
	this.rangeY3=null;
	this.scaleY3=null;
	this.rowPriceArr = [];
	this.candIMap = {
	};
	this.canvas=null;
	this.context=null;
	this.divCanvasText=null;
	this.width=null;
	this.height=null;
	if(arguments.length==1 && arguments[0]=='__init__') return;
	if(this.__construct) this.__construct.apply(this,arguments);
}
stock_ViewTrade.prototype = new jsml_Ob('__extends__');
stock_ViewTrade.prototype.__extends = jsml_Ob;
stock_ViewTrade.prototype.constructor = stock_ViewTrade;
stock_ViewTrade.prototype.__class = stock_ViewTrade;
stock_ViewTrade.__className = 'stock_ViewTrade';
stock_ViewTrade.__name = 'ViewTrade';
stock_ViewTrade.__obReflection__ = null;
stock_ViewTrade.__getObReflection = function(){
	if(stock_ViewTrade.__obReflection__ != null) return stock_ViewTrade.__obReflection__;
	stock_ViewTrade.__obReflection__ = new jsml_ObReflection();
	stock_ViewTrade.__obReflection__.__class = stock_ViewTrade;
	stock_ViewTrade.__obReflection__.__extends = jsml_Ob;
	return stock_ViewTrade.__obReflection__;
}
stock_ViewTrade.$startDate2  = "2011-08-16"
stock_ViewTrade.$startDate = "2011-09-13"
stock_ViewTrade.$startDate3 = "2011-07-29"
stock_ViewTrade.$startDate4 = "2011-06-14"
stock_ViewTrade. main = function(){
var $this = this; var $__arguments = arguments; var $viewTrade = null;
				 que($__doc).ready(function(){
		$viewTrade=stock_Ao.get().bean("stock_ViewTrade/con").view();
			$viewTrade.jque.appendTo("body");
			$viewTrade.rpcCap();
					 });
}
stock_ViewTrade.prototype.con = function(){
var $this = this; var $__arguments = arguments;
		$this.ao=stock_Ao.get();
		$this.stock_ObDs=$this.ao.bean("stock_ObDs/con");
		$this.viewStock=$this.ao.bean("stock_ViewStock/con");
		$this.viewDetail=$this.ao.bean("stock_ViewDetail/con");
		$this.obJfile=$this.ao.bean("stock_ObJfile/con");
		$this.voPrice3=$this.ao.bean("stock_VoPrice/con3");
		$this.w = 3;
		$this.padX = 10;
		$this.ox=0;
		$this.oy=0;
		$this.padY = 0;
		$this.minMaxPadFactor = 2.5;
		$this.minMaxPadFactorWeb = $this.minMaxPadFactor;
	
		$this.width = 1200;		$this.height = 560;
		
		$this.rowPriceArrMap={
		};
		return $this;
	}
stock_ViewTrade.prototype.view = function(){
var $this = this; var $__arguments = arguments; var $canvas = null; var $event = null; var $result = null;
		if($this.jque!=null) return $this.jque;
		$this.jque = que("<div></div>");
		$this.divCanvasText = que("<div style='position:relative'></div>").appendTo($this.jque);
		$this.canvas = que("<canvas></canvas>").appendTo($this.jque).css({
			"background-color" : "white",
			"height" : $this.height,
			"width" : $this.width, "border":"solid 0px"});
		$this.canvas.attr({"width":$this.width, "height":$this.height});

		$canvas = $this.canvas.get(0);
				$this.context = $canvas.getContext('2d');
		
		 que($this).bind("rpc.rpcCap", function($event, $result){ $this.onrpcCap($event, $result); });
	
		return $this;
	}
stock_ViewTrade.prototype.conPaint = function(){
var $this = this; var $__arguments = arguments;
		$this.symbol = $this.viewDetail.symbol;
		$this.rowPriceArrMap={
		};
		$this.rowPriceArrMap[$this.symbol]=$this.viewDetail.rowPriceArr;
		return $this;
	}
stock_ViewTrade.prototype.viewPaint = function(){
var $this = this; var $__arguments = arguments;
		$this.context.clearRect(0, 0, $this.width, $this.height);
		$this.divCanvasText.html("");
		$this.paint();
	}
stock_ViewTrade.prototype.getX = function($i){
var $this = this; var $__arguments = arguments;
		return ($this.width - $this.ox - $this.padX) - ($this.w+1)*$i;
	}
stock_ViewTrade.prototype.getI = function($x){
var $this = this; var $__arguments = arguments;
		return round( (($this.width - $this.ox - $this.padX) - $x)/($this.w+1) );
	}
stock_ViewTrade.prototype.saveScale = function(){
var $this = this; var $__arguments = arguments;
				
		$this.rangeY = $this.maxStockDataY - $this.minStockDataY;
		$this.scaleY = ($this.height - $this.oy - $this.padY) / $this.rangeY;

		$this.rangeY2 = $this.maxStockDataY2 - $this.minStockDataY2;
		$this.scaleY2 = ($this.height - $this.oy) / $this.rangeY2;

		$this.rangeY3 = $this.maxStockDataY3 - $this.minStockDataY3;
		$this.scaleY3 = ($this.height - $this.oy) / $this.rangeY3;
	}
stock_ViewTrade.prototype.getY = function($y){
var $this = this; var $__arguments = arguments;
		return ($this.height - $this.oy - $this.padY) - ($y- $this.minStockDataY) * $this.scaleY;
	}
stock_ViewTrade.prototype.getY2 = function($y){
var $this = this; var $__arguments = arguments;
		return ($this.height - $this.oy - $this.padY) - ($y- $this.minStockDataY2) * $this.scaleY2;
	}
stock_ViewTrade.prototype.getY3 = function($y){
var $this = this; var $__arguments = arguments;
		return ($this.height - $this.oy - $this.padY) - ($y- $this.minStockDataY3) * $this.scaleY3;
	}
stock_ViewTrade.prototype.saveDtParams = function(){
var $this = this; var $__arguments = arguments;
		
		$this.minStockDataY = 0.5*$this.viewStock.capital/1000;
		$this.maxStockDataY = 3.0*$this.viewStock.capital/1000;
		$this.saveScale();
	}
stock_ViewTrade.prototype.paintText = function($text, $left, $top, $color){
var $this = this; var $__arguments = arguments;
		if($color==null) $color='black';
		return que(implode("", ["<div style='font-size:10px;'>",$text,"</div>"])).css({"position":"absolute", "left":$left, "top":$top, "color":$color}).appendTo($this.divCanvasText);
	}
stock_ViewTrade.prototype.paint = function(){
var $this = this; var $__arguments = arguments;
		$this.paintField();
		if($this.symbol == "MARKET") {
			return;
		}
	
		$this.interval = 1;
		$this.padX1 = 1*550+0*171;
		if(1==0 && $this.symbol != "HAINDEX"){
			$this.rowPriceArr = $this.rowPriceArrMap["HAINDEX"];
			$this.isIndex = true;
			
						$this.padX = 100;			$this.w = 3;
			$this.saveDtParams();
			$this.paintClose();
		}
		
		$this.rowPriceArr = $this.rowPriceArrMap[$this.symbol];
		$this.isIndex = false;
		
				$this.padX = 60;
		$this.w = 3;
		$this.padY = 0;
				$this.saveDtParams();
		
		$this.makeMa();
						$this.paintValue();
		$this.paintMa();
		$this.paintCandleStick();
				$this.paintStat();
	}
stock_ViewTrade.prototype.paintStat = function(){
var $this = this; var $__arguments = arguments; var $flag = null; var $i = null; var $x = null; var $value = null; var $y = null; var $x1 = null; var $y1 = null;
		$flag=1;
		for($i=0; $i<$this.rowPriceArr.length; $i++){
			$x = $this.getX($i) - 0*50;
			if($x<0) break;
			$value = $this.rowPriceArr[$i].close;
			if($value==null || $value == 0) continue;
			$y = $this.getY($value);

			if($i%10==0 || $i%10==1) {
				$x1=$this.getX($i+5);
				$y1=$this.getY($this.rowPriceArr[$i].low);
				if($flag==0){
					$this.paintText($this.rowPriceArr[$i]["codeFull"] ,$x1+5,$y1-100-100);
					$this.paintText($this.rowPriceArr[$i]["count"] ,$x1+5,$y1-80-100);
					$this.paintText(round(10000*($this.rowPriceArr[$i]["avg"]-1)) ,$x1+5,$y1-60-100);
					$flag=1;
				} else {
					$this.paintText(round(10000*($this.rowPriceArr[$i]["avg"]-1)) ,$x1+5,$y1-100);
					$this.paintText($this.rowPriceArr[$i]["count"] ,$x1+5,$y1-80);
					$this.paintText($this.rowPriceArr[$i]["codeFull"] ,$x1+5,$y1-60);
					$flag=0;
				}
			}
			if($i%10==0) {
				$this.context.beginPath();
				$this.context.fillStyle = 'Black';
				$this.context.arc($x-1, $this.getY($this.rowPriceArr[$i].low)+5, 3, 0, 1 * Math.PI, false);
				$this.context.fill();
			}
		}
	}
stock_ViewTrade.prototype.paintOxy = function(){
var $this = this; var $__arguments = arguments; var $ox = null; var $ox2 = null; var $one = null; var $value = null; var $y = null; var $i = null; var $x = null;
		$this.context.restore();
		$this.context.beginPath();
		$this.context.strokeStyle = 'black';
		$this.context.globalAlpha = 1;
		$this.context.lineWidth = 1;
				$ox = 0;
		$ox2 = $this.width - $this.ox;
		$this.context.moveTo($ox, $this.getY($this.minStockDataY) + $this.padY);
		$this.context.lineTo($ox, $this.getY($this.maxStockDataY));
		$this.context.moveTo($ox2, $this.getY($this.minStockDataY) + $this.padY);
		$this.context.lineTo($ox2, $this.getY($this.maxStockDataY));

		$one = ($this.maxStockDataY - $this.minStockDataY)/($this.stickY-1);
		for($value=$this.minStockDataY; $value<=$this.maxStockDataY; $value = $value+$one){
			$y = $this.getY($value);
			if($y-8<=0 || $y>=$this.getY($this.minStockDataY)) continue;
			$this.context.moveTo($ox2, $y);
			$this.context.lineTo($ox2-8, $y);
			$this.paintText(round($value,1), $ox2 + $this.ox - 34, $y - 8);
		}

								
		for($i=0; $i<$this.rowPriceArr.length; $i++){
			$x = $this.getX($i);
			if($x<$this.padX) break;
		}

		$this.context.closePath();
		$this.context.stroke();


		for($i=0; $i<$this.rowPriceArr.length; $i++){
			$x = $this.getX($i);
			if($x<$this.padX) break;
			if(($i==-1) ){							if($i==120) $this.context.strokeStyle='Green';
				if($i==10) $this.context.strokeStyle='Purple';
				if($i==20) $this.context.strokeStyle='Teal';
				if($i==60) $this.context.strokeStyle='Sienna';
																												$this.context.restore();
				$this.context.beginPath();
				$this.context.strokeStyle='Red';				
				$this.context.globalAlpha=1;
				$this.context.lineWidth=1;
				$this.context.moveTo($x, $y);
				$this.context.lineTo($x, $this.getY($this.maxStockDataY) );
				$this.context.closePath();
				$this.context.stroke();
			}
		}
		return;
	}
stock_ViewTrade.prototype.paintCap = function(){
var $this = this; var $__arguments = arguments; var $n = null; var $len = null; var $vArr = null; var $i = null; var $x = null; var $value = null; var $y = null; var $m = null;
		$n=0;
		for($m in $this.capMap){var $vArr = $this.capMap[$m];
			$this.context.restore();
			$this.context.beginPath();
			if($n==0) $this.context.strokeStyle = 'blue';
			if($n==1) $this.context.strokeStyle = 'blue';			if($n==2) $this.context.strokeStyle = 'Red';
			if($n==3) $this.context.strokeStyle = 'Red';			if($n==4) $this.context.strokeStyle = 'Teal';
			if($n==5) $this.context.strokeStyle = 'Teal';			
			$this.context.lineWidth=2;
			$this.context.globalAlpha=1;
						$len=count($vArr);
			for($i=0; $i<$len; $i++){
				$x = $this.getX($i);
				if($x<0) break;
				$value = $vArr[$i];
				if($value==null || $value == 0) continue;
				$y = $this.getY($value);
				if($i==0){
					$this.context.moveTo($x, $y);
					$this.paintText("1/"+$m ,$x+5,$y-8);
				} else{
					$this.context.lineTo($x, $y);
				}
			}
			$this.context.stroke();
			$this.context.globalAlpha=1;
			$n++;
		}
	}
stock_ViewTrade.prototype.conPaint2 = function(){
var $this = this; var $__arguments = arguments;
		return $this;
	}
stock_ViewTrade.prototype.viewPaint2 = function(){
var $this = this; var $__arguments = arguments;
		$this.context.clearRect(0, 0, $this.width, $this.height);
		$this.divCanvasText.html("");
		
		$this.interval = 1;
		$this.padX1 = 1*550+0*171;
		
		$this.isIndex = false;
		
				$this.padX = 60;
		$this.w = 3;
		$this.padY = 0;
				$this.saveDtParams();
		$this.paintOxy();
		
																		$this.paintCap();
	}
stock_ViewTrade.prototype.rpcCap = function(){
var $this = this; var $__arguments = arguments;
 $this.json();

	}
stock_ViewTrade.prototype.onrpcCap = function($event ,$result){
var $this = this; var $__arguments = arguments;
		$this.capMap=$result;
		$this.viewPaint2();
	}
stock_ViewTrade.prototype.rpcAppfog = function(){
var $this = this; var $__arguments = arguments;
 $this.jsonOption({"jsonpUrl":"http://cophieu.ap01.aws.af.cm/"}); $this.json();

	}
</script>

<script class="stock_Vo">
stock_Vo = function(){
	if(arguments.length==1 && arguments[0]=='__extends__') return;
	jsml_Ob.call(this,'__init__');
	if(arguments.length==1 && arguments[0]=='__init__') return;
	if(this.__construct) this.__construct.apply(this,arguments);
}
stock_Vo.prototype = new jsml_Ob('__extends__');
stock_Vo.prototype.__extends = jsml_Ob;
stock_Vo.prototype.constructor = stock_Vo;
stock_Vo.prototype.__class = stock_Vo;
stock_Vo.__className = 'stock_Vo';
stock_Vo.__name = 'Vo';
stock_Vo.__obReflection__ = null;
stock_Vo.__getObReflection = function(){
	if(stock_Vo.__obReflection__ != null) return stock_Vo.__obReflection__;
	stock_Vo.__obReflection__ = new jsml_ObReflection();
	stock_Vo.__obReflection__.__class = stock_Vo;
	stock_Vo.__obReflection__.__extends = jsml_Ob;
	return stock_Vo.__obReflection__;
}
stock_Vo.prototype._con = function($str,$strEx){
var $this = this; var $__arguments = arguments; var $strFull = null; var $arr = null; var $field = null; var $val = null; var $i = null;
		$this.strField=$str;
		$strFull=$str;
		if($strEx!="") $strFull=$str+","+$strEx;
		$arr=explode("," ,$strFull);
		$this.countField=count($arr);
		for($i in $arr){var $val = $arr[$i];
			$field=trim($val);
			 eval('$this.'+$field+'='+$i+";");

		}
		$this.newRow();
		return $this;
	}
stock_Vo.prototype.newRow = function(){
var $this = this; var $__arguments = arguments; var $i = null;
		$this.row=[];
		for($i=0;$i<$this.countField;$i++){
			$this.row[$i]=null;
		}
	}
</script>

<script class="stock_VoPrice">
stock_VoPrice = function(){
	if(arguments.length==1 && arguments[0]=='__extends__') return;
	stock_Vo.call(this,'__init__');
	this.row = [];
	if(arguments.length==1 && arguments[0]=='__init__') return;
	if(this.__construct) this.__construct.apply(this,arguments);
}
stock_VoPrice.prototype = new stock_Vo('__extends__');
stock_VoPrice.prototype.__extends = stock_Vo;
stock_VoPrice.prototype.constructor = stock_VoPrice;
stock_VoPrice.prototype.__class = stock_VoPrice;
stock_VoPrice.__className = 'stock_VoPrice';
stock_VoPrice.__name = 'VoPrice';
stock_VoPrice.__obReflection__ = null;
stock_VoPrice.__getObReflection = function(){
	if(stock_VoPrice.__obReflection__ != null) return stock_VoPrice.__obReflection__;
	stock_VoPrice.__obReflection__ = new jsml_ObReflection();
	stock_VoPrice.__obReflection__.__class = stock_VoPrice;
	stock_VoPrice.__obReflection__.__extends = stock_Vo;
	return stock_VoPrice.__obReflection__;
}
stock_VoPrice.prototype.con = function(){
var $this = this; var $__arguments = arguments;
		return $this._con("symbol,stockDate,open,high,low,close,volume,ref","");
	}
stock_VoPrice.prototype.con1 = function(){
var $this = this; var $__arguments = arguments;
				return $this._con("open,high,low,close,volume","");
	}
stock_VoPrice.prototype.con2 = function(){
var $this = this; var $__arguments = arguments;
				return $this._con("open,high,low,close,volume,ref,market,volume0,buyPrice1,buyVolume1,sellPrice1,sellVolume1","");
	}
stock_VoPrice.prototype.con3 = function(){
var $this = this; var $__arguments = arguments;
		return $this._con("close,volume","");
	}
stock_VoPrice.prototype.getValue = function(){
var $this = this; var $__arguments = arguments;
		return $this.row["volume"]*$this.row["close"];
	}
stock_VoPrice.prototype.getLiveValue = function(){
var $this = this; var $__arguments = arguments;
		
		if( ($this.row["sellVolume1"] == null || trim($this.row["sellVolume1"]) == "" )&& 
			$this.row["buyVolume1"] != null && trim($this.row["buyVolume1"]) != ""
		) {
			return $this.row["volume"]*$this.row["close"] + $this.row["buyVolume1"]*$this.row["buyPrice1"];
		}
		
		return $this.row["volume"]*$this.row["close"];
	}
stock_VoPrice.prototype.getVal = function(){
var $this = this; var $__arguments = arguments;
		if($this.row["volume0"]==null) return 0;
		return $this.row["volume0"]*$this.row["close"];
	}
stock_VoPrice.prototype.getClosePer = function(){
var $this = this; var $__arguments = arguments;
		if($this.row["ref"] == 0) return 0;
		return 100 * ( $this.getSellPrice() - $this.row["ref"] ) / $this.row["ref"];
	}
stock_VoPrice.prototype.getSellPrice = function(){
var $this = this; var $__arguments = arguments;
		if($this.row["sellPrice1"] == null) return $this.row["close"];
		return $this.row["sellPrice1"];
	}
stock_VoPrice.prototype.getLiveVolume = function(){
var $this = this; var $__arguments = arguments;
		return 1.0*$this.row["volume"];
	}
</script>

<script class="stock_ViewStock">
stock_ViewStock = function(){
	if(arguments.length==1 && arguments[0]=='__extends__') return;
	jsml_Ob.call(this,'__init__');
	if(arguments.length==1 && arguments[0]=='__init__') return;
	if(this.__construct) this.__construct.apply(this,arguments);
}
stock_ViewStock.prototype = new jsml_Ob('__extends__');
stock_ViewStock.prototype.__extends = jsml_Ob;
stock_ViewStock.prototype.constructor = stock_ViewStock;
stock_ViewStock.prototype.__class = stock_ViewStock;
stock_ViewStock.__className = 'stock_ViewStock';
stock_ViewStock.__name = 'ViewStock';
stock_ViewStock.__obReflection__ = null;
stock_ViewStock.__getObReflection = function(){
	if(stock_ViewStock.__obReflection__ != null) return stock_ViewStock.__obReflection__;
	stock_ViewStock.__obReflection__ = new jsml_ObReflection();
	stock_ViewStock.__obReflection__.__class = stock_ViewStock;
	stock_ViewStock.__obReflection__.__extends = jsml_Ob;
	return stock_ViewStock.__obReflection__;
}
stock_ViewStock. main = function(){
var $this = this; var $__arguments = arguments;
		 que($__doc).ready(function(){
		stock_Ao.get().bean("stock_ViewStock/con").view();
		 }); 
}
stock_ViewStock.prototype.con = function(){
var $this = this; var $__arguments = arguments;
		$this.ao=stock_Ao.get();
		$this.obJfile=$this.ao.bean("stock_ObJfile/con");
		$this.viewPrice=$this.ao.bean("stock_ViewPrice/con");
		$this.viewDetail=$this.ao.bean("stock_ViewDetail/con");
		$this.viewChart=$this.ao.bean("stock_ViewChart/con");
		$this.viewTrade=$this.ao.bean("stock_ViewTrade/con");
		$this.voPrice=$this.ao.bean("stock_VoPrice/con");
		$this.voPrice2=$this.ao.bean("stock_VoPrice/con2");
		$this.voPrice3=$this.ao.bean("stock_VoPrice/con3");
		$this.voStock=get(new stock_Vo())._con("rate,value2,trade,live,perHigh,minC1,maxC1,bv,roe,ff2","");		
		$this.voRowPriceArr=get(new stock_Vo())._con("value2,code,minC1,maxC1,minC2,maxC2,perHigh,maPerC1,maPerC2,maC1,maC2,maC3,maC4,dev,status,status0,min,imin,max,imax,delta,minMax","");
		$this.voStat=get(new stock_Vo())._con("total,avg","");
		
		
		$this.capital=1000000000;
		$this.fnum=30;
		$this.countMax=10;
		$this.incTest=20;
		$this.minTradeChart=0.5;
		$this.maxTradeChart=2.5;
		$this.buyValue=$this.capital/($this.fnum*1000);
		$this.dayback=0*180;
		
		$this.firstRun=true;
		
								$this.intervalArr = [8,21,34,55];				$this.percentArr = [20,50,80,100];
		$this.valueOff=100000;
		$this.stockMap={
		};
		$this._stockMap={
		};
		$this.indexArr=[];
		$this.hrefMap={
		};
	
		
		return $this;
	}
stock_ViewStock.prototype.view = function(){
var $this = this; var $__arguments = arguments; var $html = null; var $event = null; var $result = null; var $time = null; var $str = null;
		if($this.jque!=null) return $this;

var $__htmlArray = new Array();
$__htmlArray.push('\
<div>\
<div id="divNav" style="display:none;">\
<button value="stock">Stock</button>\
<button value="detail">Detail</button><br/>\
</div>\
<div id="divStock" style="display:none;">\
</div>\
<div id="divDetail" style="display:;">\
</div>\
');
$html = $__htmlArray.join("");
		$this.jque=que($html).appendTo("body");
		$this.divStock=$this.jque.find("#divStock");
		
		$this.divDetail=$this.jque.find("#divDetail");
		$this.viewDetail.view().jque.appendTo($this.divDetail);
		
		$this.divNav=$this.jque.find("#divNav");
		
		 $this.divStock.bind("click", function($event){ $this.onclickDivStock($event); });
	 $this.divNav.bind("click", function($event){ $this.onclickDivNav($event); });
	 que($this).bind("rpc.rpcStockMap", function($event, $result){ $this.onrpcStockMap($event, $result); });
	 que($this).bind("rpc.rpcTradeCap", function($event, $result){ $this.onrpcTradeCap($event, $result); });
	 que($this).bind("rpc.rpcCon", function($event, $result){ $this.onrpcCon($event, $result); });
	$this.rpcStockMap();
		$this.rpcCon();
		$this.viewDetail.buttonList.click();
		 que($this).bind("rpc.rpcConf", function($event, $result){ $this.onrpcConf($event, $result); });
	 que($this).bind("rpc.rpcTradeCap2", function($event, $result){ $this.onrpcTradeCap2($event, $result); });
	 $this.viewDetail.buttonConf.bind("click", function($event){ $this.onclickButtonConf($event); });
	 $this.viewDetail.buttonLink.bind("click", function($event){ $this.onclickButtonLink($event); });
	 $this.viewDetail.buttonOverview.bind("click", function($event){ $this.onclickButtonOverview($event); });
		 setInterval(function(){
		if($this.viewDetail.isRun==0) return;
			if($this.stockMapTime!=null){
				$time=round((new Date() - $this.stockMapTime)/1000 ,0);
				$__doc.title = $time+"+"+$this.stockMapTitle;
				if($time>=25) {
					$__doc.title="Reload";
																				$this.restartStockMap();
				}
				
				$str="<span style='background-color:blue;color:white;'>"+$time+"</span>";
				$this.divStock.find("[_tag='volume0']").html($str);
				$this.viewDetail.divStock.find("[_tag='volume0']").html($str);
			}
		 },1000);
	return $this;
	}
stock_ViewStock.prototype.rpcCon = function(){
var $this = this; var $__arguments = arguments;
 $this.json();

	}
stock_ViewStock.prototype.onrpcCon = function($event,$result){
var $this = this; var $__arguments = arguments; var $strConf = null;
		$strConf=$result["strConf"];
		$this.viewDetail.textConf.prop("value",$strConf);
		$this.makeConf($strConf);
		
		$this.viewDetail.textTrade.prop("value",$result["tradeMap"]);
		
				$this.hrefMap=$result["hrefMap"];
	}
stock_ViewStock.prototype.onclickButtonOverview = function($event){
var $this = this; var $__arguments = arguments; var $symbol = null; var $href = null;
		$symbol=$this.viewDetail.symbol;
		if($this.ao.isNullEmpty($symbol)) return;
		$href = $this.hrefMap[$symbol];
		if($href == null) $href = "http://cafef.vn";
				$this.winOverview = $__window.open($href,"__aOverview");
	}
stock_ViewStock.prototype.onclickButtonLink = function($event){
var $this = this; var $__arguments = arguments; var $symbol = null;
		$symbol=$this.viewDetail.symbol;
		if($this.ao.isNullEmpty($symbol)) return;
		if($this.winOverview == null) return;
		setTimeout(function () {
			if(confirm("Link:"+$symbol + "|"+$this.winOverview.location.href)){
				$this.rpcHrefSave($symbol, $this.winOverview.location.href);
				$this.hrefMap[$symbol] = $this.winOverview.location.href;
			};
		}, 0);
	}
stock_ViewStock.prototype.rpcHrefSave = function($symbol, $href){
var $this = this; var $__arguments = arguments;
 $this.json($symbol, $href);

	}
stock_ViewStock.prototype.makeConf = function($strConf){
var $this = this; var $__arguments = arguments; var $conf = null;
				if($strConf==null||$strConf==""){
			return;
		}
		$conf={
		};
		eval($strConf);
		$this.conf=$conf;
		
		$this.capital=$this.conf["capital"];
		$this.fnum=$this.conf["fnum"];
										$this.buyValue=$this.capital/($this.fnum*1000);
		$this.dayback=$this.conf["dayback"];
		$this.viewChart.w=$this.conf["w"];
		
		$this.ao.conf=$this.conf;
		
	}
stock_ViewStock.prototype.onclickButtonConf = function($event){
var $this = this; var $__arguments = arguments; var $strConf = null; var $strTradeMap = null; var $choice = null; var $map = null;
		$strConf=$this.viewDetail.textConf.prop("value");
		$strTradeMap=$this.viewDetail.textTrade.prop("value");
		$choice=prompt("blank for all", "conf");
		if($choice==null) return;
		if($choice=="conf") $strTradeMap=null;
		$map={
			"strConf":$strConf,
			"strTradeMap":$strTradeMap
		};
		$this.rpcConf( $map );
	}
stock_ViewStock.prototype.rpcConf = function( $map ){
var $this = this; var $__arguments = arguments;
 $this.json($map);

	}
stock_ViewStock.prototype.onrpcConf = function($event ,$result){
var $this = this; var $__arguments = arguments; var $strConf = null; var $strTradeMap = null;
		$strConf=$result["strConf"];
		$strTradeMap=$result["strTradeMap"];
		$this.viewDetail.textConf.prop("value",$strConf);
		$this.viewDetail.textTrade.prop("value",$strTradeMap);
		$this.makeConf($strConf);
		$this.viewDetail.buttonList.click();
	}
stock_ViewStock.prototype.loadConf = function(){
var $this = this; var $__arguments = arguments; var $strConf = null;
		$strConf=$this.obJfile.load("stock_ViewDetail/strConf");
		return $strConf;
	}
stock_ViewStock.prototype.onclickDivStock = function($event){
var $this = this; var $__arguments = arguments; var $target = null;
		$target = que($event.target);
		if($target.attr("_tag2")=="symbolLeft" || $target.attr("_tag2")=="symbolRight"){
			$this.viewDetail.onclickDivStock($event);
			$this.divNav.find("[value='detail']").click();
		}
	}
stock_ViewStock.prototype.onclickDivNav = function($event){
var $this = this; var $__arguments = arguments; var $target = null; var $value = null;
		$target = que($event.target);
		$value=$target.val();
		if($value=="stock"){
			$this.divDetail.css("display","none");
			$this.divStock.css("display","");
		}
		else if($value=="detail"){
			$this.divDetail.css("display","");
			$this.divStock.css("display","none");
			que("body,html").scrollLeft(-999990);
			que("body,html").scrollTop(0);
		}
	}
stock_ViewStock.prototype.getRowSymbolArr = function(){
var $this = this; var $__arguments = arguments;


	}
stock_ViewStock.prototype.getRowSymbolArrByValue = function(){
var $this = this; var $__arguments = arguments;


	}
stock_ViewStock.prototype.getRowPriceArr = function($vo, $symbol,$day){
var $this = this; var $__arguments = arguments;
	

	}
stock_ViewStock.prototype.getRowPriceArrS = function($vo, $symbol,$day){
var $this = this; var $__arguments = arguments;


	}
stock_ViewStock.prototype.makeRowPriceArr = function($vo, $rowPriceArr ,$limit){
var $this = this; var $__arguments = arguments; var $re = null; var $len = null; var $i = null; var $intervalLen = null;if($limit==null) $limit=null; var $len2 = null; var $maGreatCount = null; var $value2 = null; var $delta = null; var $less = null; var $min = null; var $max = null; var $isDivide = null; var $codeFull = null; var $imin = null; var $imax = null; var $maClose = null; var $maCloseVol = null; var $maMap = null; var $perMap = null; var $gain = null; var $loss = null; var $j = null; var $interval = null; var $maAvg = null; var $d = null;
				$re=[];
		$len=count($rowPriceArr);
		for($i=0 ; $i < $len ;$i++){
			$re[$i]={
			};
		}
		$intervalLen=count($this.intervalArr);
		if($limit==null) $len2=$len;
		else $len2=$limit;
		
		$maGreatCount=0;
				for($i=$len2-1 ; $i >=0 ;$i--){
			$re[$i]["less"]=-1;
			if($len-$i-1<$this.intervalArr[$intervalLen-1]) continue;
			if($this.isNull0($rowPriceArr[$i][$vo.close])) continue;

			$value2=0;
			$delta=0;
			
			$less=0;
					
			$min=999999999;$max=0;
			$isDivide=false;
			$codeFull="";
			$imin=null;$imax=null;
			$maClose=0;
			$maCloseVol=0;
			$maMap={
			};
			$perMap={
			};
			$gain=0; $loss=0;
			$maGreatCount++;
						$re[$i]["maGreat"]=0;
			for($j=$i+1; $j-$i <= $this.intervalArr[$intervalLen-1] - 1 ;$j++){
				if($rowPriceArr[$j][$vo.close]==0) break;
				if($rowPriceArr[$j+1][$vo.close]==0) break;
				
												$maClose+=$rowPriceArr[$j][$vo.close];
				$maCloseVol+=1;
				$interval= $j - $i + 1;
				
				if($interval<=$this.intervalArr[1]) {
					$value2 += $rowPriceArr[$j][$vo.close]*$rowPriceArr[$j][$vo.volume];
					if($interval==$this.intervalArr[1]){
						$re[$i]["value2"]=round($value2/$interval,0);
						if($re[$i]["value2"]<$this.valueOff) break;
					}
				}
				
				if($interval>=2 && $interval<=6){
					if($rowPriceArr[$i][$vo.close]<=$rowPriceArr[$j][$vo.close]) $less++;
					if($interval==6){
						$re[$i]["less"]=$less;
					}
				}
				
				if($interval==10){
					$re[$i]["maxClose0"]=round(100*($max-$rowPriceArr[$i][$vo.close])/$rowPriceArr[$i][$vo.close],1);
					$re[$i]["minClose0"]=round(100*($rowPriceArr[$i][$vo.close]-$min)/$min,1);
				}
				
				if($interval==$this.intervalArr[0]||$interval==$this.intervalArr[1]||$interval==$this.intervalArr[2]||$interval==$this.intervalArr[3]){
					$maAvg=$maClose/$maCloseVol;					$re[$i]["ma"+$interval]=$maAvg;
					
					$d=($rowPriceArr[$i][$vo.close]-$maAvg)/$maAvg;
										if($d>=0 && ($interval==$this.intervalArr[2] || $interval==$this.intervalArr[3]) ) {
																		$re[$i]["maGreat"]++;
					}
					$re[$i]["maPer"+$interval]=round(100*$d,2);
					
																			}
			}
		}
		return $re;
	}
stock_ViewStock.prototype.makeRowPriceArrzzzz = function($vo, $rowPriceArr ,$limit){
var $this = this; var $__arguments = arguments; var $re = null; var $len = null; var $i = null; var $intervalLen = null;if($limit==null) $limit=null; var $len2 = null; var $maGreatCount = null; var $value2 = null; var $delta = null; var $less = null; var $min = null; var $max = null; var $isDivide = null; var $codeFull = null; var $imin = null; var $imax = null; var $maClose = null; var $maCloseVol = null; var $maMap = null; var $perMap = null; var $gain = null; var $loss = null; var $j = null; var $interval = null; var $maAvg = null; var $d = null;
				$re=[];
		$len=count($rowPriceArr);
		for($i=0 ; $i < $len ;$i++){
			$re[$i]={
			};
		}
		$intervalLen=count($this.intervalArr);
		if($limit==null) $len2=$len;
		else $len2=$limit;
		
		$maGreatCount=0;
				for($i=$len2-1 ; $i >=0 ;$i--){
			$re[$i]["less"]=-1;
			if($len-$i-1<$this.intervalArr[$intervalLen-1]) continue;
			if($this.isNull0($rowPriceArr[$i][$vo.close])) continue;

			$value2=0;
			$delta=0;
			
			$less=0;
					
			$min=999999999;$max=0;
			$isDivide=false;
			$codeFull="";
			$imin=null;$imax=null;
			$maClose=0;
			$maCloseVol=0;
			$maMap={
			};
			$perMap={
			};
			$gain=0; $loss=0;
			$maGreatCount++;
						$re[$i]["maGreat"]=0;
			for($j=$i+1; $j-$i <= $this.intervalArr[$intervalLen-1] - 1 ;$j++){
				if($rowPriceArr[$j][$vo.close]==0) break;
				if($rowPriceArr[$j+1][$vo.close]==0) break;
				
												$maClose+=$rowPriceArr[$j][$vo.close];
				$maCloseVol+=1;
				$interval= $j - $i + 1;
				
				if($interval<=$this.intervalArr[1]) {
					$value2 += $rowPriceArr[$j][$vo.close]*$rowPriceArr[$j][$vo.volume];
					if($interval==$this.intervalArr[1]){
						$re[$i]["value2"]=round($value2/$interval,0);
						if($re[$i]["value2"]<$this.valueOff) break;
					}
				}
				
				if($interval>=2 && $interval<=6){
					if($rowPriceArr[$i][$vo.close]<=$rowPriceArr[$j][$vo.close]) $less++;
					if($interval==6){
						$re[$i]["less"]=$less;
					}
				}
				
				
				if($interval==$this.intervalArr[0]||$interval==$this.intervalArr[1]||$interval==$this.intervalArr[2]||$interval==$this.intervalArr[3]){
					$maAvg=$maClose/$maCloseVol;					$re[$i]["ma"+$interval]=$maAvg;
					
					$d=($rowPriceArr[$i][$vo.close]-$maAvg)/$maAvg;
										if($d>=0 && ($interval==$this.intervalArr[2] || $interval==$this.intervalArr[3]) ) {
																		$re[$i]["maGreat"]++;
					}
					$re[$i]["maPer"+$interval]=round(100*$d,2);
					
																			}
			}
		}
		return $re;
	}
stock_ViewStock.prototype.makeRowPriceArr2 = function($vo, $rowPriceArr ,$limit){
var $this = this; var $__arguments = arguments; var $re = null; var $voRe = null; var $len = null; var $i = null;if($limit==null) $limit=null; var $len2 = null; var $ma0 = null; var $ma1 = null; var $ma2 = null; var $ma3 = null; var $ma01 = null; var $ma02 = null; var $maC = null; var $j = null; var $x = null; var $dev = null; var $k = null; var $y = null; var $close = null;
				$re=[];
		$voRe=$this.voRowPriceArr;
		$len=count($rowPriceArr);
		for($i=0 ; $i < $len ;$i++){
			$re[$i]=[];
		}

		if($limit==null) $len2=$len;
		else $len2=$limit;


		if($this.ao.conf["combineDay"]==1){
			$ma0=8
			$ma1=21
			$ma2=34
			$ma3=55
		} else if($this.ao.conf["combineDay"]==2 || $this.ao.conf["combineDay"]==8){
					$ma0=5;
			$ma01=9;
			$ma1=13;
			$ma02=17;
			$ma2=21;
			$ma3=34;
			
														} else {
					$ma0=8;
			$ma1=21;
			$ma2=21;
			$ma3=34;
		}
		
		for($i=$len-1 ; $i >=0 ;$i--){
						if($this.isNull0($rowPriceArr[$i][$vo.close])) continue;
			
			$maC=0;
			for($j=0 ; $j < $ma3 ; $j++){
				$x=$i+$j;
				if($this.isNull0($rowPriceArr[$x][$vo.close])) break;
				if($rowPriceArr[$x+1]==null || $this.isNull0($rowPriceArr[$x+1][$vo.close])) break;

				$maC+=$rowPriceArr[$x+1][$vo.close];
								if($j==$ma0-1 || $j==$ma1-1 || $j==$ma2-1 || $j==$ma3-1 || $j==$ma01-1 || $j==$ma02-1){
					if($j==$ma0-1) $re[$i][$voRe.maC1]=$maC/($j+1);
					if($j==$ma1-1) $re[$i][$voRe.maC2]=$maC/($j+1);
					if($j==$ma2-1) $re[$i][$voRe.maC3]=$maC/($j+1);
					if($j==$ma01-1) $re[$i]["ma01"]=$maC/($j+1);
					if($j==$ma02-1) $re[$i]["ma02"]=$maC/($j+1);
					if($j==$ma3-1) {
						$re[$i][$voRe.maC4]=$maC/($j+1);
						$dev=0;
						for($k=0 ; $k < $ma3 ; $k++){
							$y=$i+$k;
							$close=$rowPriceArr[$y+1][$vo.close];
							$dev+=pow($close-$re[$i][$voRe.maC4],2);
							if($k==$ma3-1) {
								$dev=round(sqrt($dev/($k+1)),2);
								$re[$i][$voRe.dev]=$dev;
							}
						}
					}
				}

			}
		}
		return $re;
	}
stock_ViewStock.prototype.formatVolume3 = function($volume , $name ,$dt ,$_dt){
var $this = this; var $__arguments = arguments; var $vo = null; var $price = null; var $style = null; var $color = null;
		$vo=$this.voPrice2;
		$price=$dt[$name];
		if($price==null) return "";
		$style="";
		
		$color="red";
						if($price == $dt[$vo.ceil]) $color="magenta";
		else if($price == $dt[$vo.floor]) $color="limegreen";
		else if($price > $dt[$vo.ref]) $color="blue";
		else if($price <= $dt[$vo.ref]) $color="red";
				
		if($volume==null || $volume==0) return null;
				$volume = $volume/1000;
		if($volume >= 999.9) return number_format($volume/1000,0,",",",") + "k";
		if($volume>=9.9) return number_format($volume,0,",","");

		return "<span style='color:"+$color+";"+$style+"'>"+number_format($volume,1,".","")+"</span>";
	}
stock_ViewStock.prototype.formatVolume2 = function($volume){
var $this = this; var $__arguments = arguments;
		if($volume==null || $volume==0) return null;
				$volume = $volume/1000;
		if($volume >= 999.9) return number_format($volume/1000,0,",",",") + "k";
		if($volume>=9.9) return number_format($volume,0,",","");
		return number_format($volume,1,".","");
	}
stock_ViewStock.prototype.formatVolume = function($volume){
var $this = this; var $__arguments = arguments;
				if($volume==null || $volume==0) return null;
				$volume = $volume/1000;
		
		$volume=round(10*$volume);
		if($volume>=100000) $volume=90000;
		
		if($volume >= 10000) return floor($volume/10000) + "n";
		if($volume >= 1000) return floor($volume/1000) + "t";
		if($volume>=100) return floor($volume/100) + "c";
		return $volume;
	}
stock_ViewStock.prototype.formatVolume0 = function($volume,$dt,$_dt,$symbol){
var $this = this; var $__arguments = arguments; var $vo = null; var $style = null;
		$vo=$this.voPrice2;
		if($dt && $this.isMarket($symbol)){
			return "<div _tag='volume0' style='background-color:blue;color:white;text-align:center;'></div>";
		}
		if($volume==null || $volume==0) return "";
		$volume=$volume/1000;
		$volume=round($volume);
		if($volume>=100) $volume=99;
						
		$style="";
		if($_dt!=null && $dt[$vo.volume]>$_dt[$vo.volume]){
			if(!$this.isMarket($symbol)){
				$style="background-color:blue;color:white";
			}
		}
		return "<div style='"+$style+"'>"+$volume+"</div>";
	}
stock_ViewStock.prototype.formatVolume1 = function($name ,$dt ,$_dt,$symbol){
var $this = this; var $__arguments = arguments; var $vo = null; var $volume = null; var $style = null; var $name2 = null;
		$vo=$this.voPrice2;
		$volume=$dt[$name];
		$volume=$this.formatVolume($volume);
		if($volume==null) return "";
		$style="";
		if($name==$vo.sellVolume1) $name2=$vo.sellPrice1;
		if($name==$vo.buyVolume1) $name2=$vo.buyPrice1;
		
		if($_dt!=null && $dt[$vo.volume]>$_dt[$vo.volume]){
			if($dt[$name2]==$dt[$vo.close] && !$this.isMarket($symbol)){
				$style="background-color:blue;color:white";
			}
		}

		return "<div style='"+$style+"'>"+$volume+"</div>";
	}
stock_ViewStock.prototype.formatValue = function($value){
var $this = this; var $__arguments = arguments; var $color = null; var $style = null;
		if($value==null) return "";
		$value = $value/1000000;
				if($value>=3) $color="black";
		else $color="black";
		if($value >= 999.9) $value=number_format($value/1000,0,",",",") + "";
		else if($value >= 9.9) $value=number_format($value,0,",","");
		else $value=number_format($value,1,".",",");
		return "<span style='color:"+$color+";"+$style+"'>"+$value+"</span>";
	}
stock_ViewStock.prototype.formatValue2 = function($value){
var $this = this; var $__arguments = arguments; var $color = null; var $style = null;
		if($value==null) return "";
		$value = $value/1000000;
				if($value>=3) $color="blue";
		else $color="red";
		$color="black";
		if($value >= 999.9) $value=number_format($value/1000,0,",",",") + "";
		else if($value >= 9.9) $value=number_format($value,0,",","");
		else $value=number_format($value,0,".",",");
		if($value>=100) $value=99;
		return "<span style='color:"+$color+";"+$style+"'>"+$value+"</span>";
	}
stock_ViewStock.prototype.formatValueTrade = function($value){
var $this = this; var $__arguments = arguments;
		if($value==null) return "";
		if($value<0)$value=-$value;
		$value = $value/1000;
		if($value >= 9.9) return number_format($value,0,",","");
		return number_format($value,1,".",",");
	}
stock_ViewStock.prototype.formatPrice = function($name ,$dt ,$_dt){
var $this = this; var $__arguments = arguments; var $vo = null; var $price = null; var $style = null; var $color = null;
		$vo=$this.voPrice2;
		$price=$dt[$name];
		if($price==null) return "";
		$style="";
		
		$color="red";
						if($price == $dt[$vo.ceil]) $color="magenta";
		else if($price == $dt[$vo.floor]) $color="limegreen";
		else if($price > $dt[$vo.ref]) $color="blue";
		else if($price <= $dt[$vo.ref]) $color="red";
				
		if($price <0 ) $price = ""+number_format(-100*$price,0)+"";
		else $price = number_format(100*$price,0,",","");
		
		if($price >=100000) $price=substr($price,1,4);
		else $price=substr($price,0,4);

		return "<span style='color:"+$color+";"+$style+"'>"+$price+"</span>";
	}
stock_ViewStock.prototype.formatPer = function($value,$dt,$symbol){
var $this = this; var $__arguments = arguments; var $vo = null; var $color = null; var $f = null;
		$vo=$this.voPrice2;
		
		if($dt && $this.isMarket($symbol)){
			return "<div _tag='volume0' style='background-color:blue;color:white;text-align:center;'></div>";
		}
		
		if($value==null) return "";
		if($value>6) $color="magenta";
		else if($value>0)$color="blue";
		else if($value==0)$color="blue";
		else if($value<-6)$color="limegreen";
		else if($value<0)$color="red";
		
		if($value<=0)$color="red";
		else $color="blue";
		
		$f=10;
		if($value>=10)$value=9.9;
		if($value<=-10)$value=-9.9;
		
		if($value <0 ) $value = ""+number_format(-$f*$value,0)+"";
		else $value = number_format($f*$value,0,",","");
		
		return "<span style='color:"+$color+"'>"+$value+"</span>";
	}
stock_ViewStock.prototype.formatBvp = function($value){
var $this = this; var $__arguments = arguments; var $vo = null; var $dt = null; var $symbol = null; var $color = null; var $f = null;
				$vo=$this.voPrice2;
		
		if($dt && $this.isMarket($symbol)){
			return "<div _tag='volume0' style='background-color:blue;color:white;text-align:center;'></div>";
		}
	
		$color="black";
		
		$f=10;
		if($value>=10)$value=9.9;
		if($value<=-10)$value=-9.9;
		
		if($value <0 ) $value = "<u>"+number_format(-$f*$value,0)+"</u>";
		else $value = number_format($f*$value,0,",","");
		
		return "<span style='color:"+$color+"'>"+$value+"</span>";
	}
stock_ViewStock.prototype.formatRoe = function($value,$ysFa,$noFa){
var $this = this; var $__arguments = arguments; var $color = null;
		if($value==null) return "";
		if($value>=20) $color="blue";
		else $color="red";
		if($value>=100) $value=99;
		if($value<=-100) $value=-99;
		
		if($value <0 ) $value = "<u>"+number_format(-1*$value,0)+"</u>";
		else {
			$value = number_format(1*$value,0,",","");
			if($ysFa) {
				$color="blue";
				$value = "<u>"+$value+"</u>";
			}
		}
		
		if($noFa) $color="red";

		return "<span style='color:"+$color+"'>"+$value+"</span>";
	}
stock_ViewStock.prototype.formatFf0 = function($value,$ysFa,$noFa){
var $this = this; var $__arguments = arguments; var $color = null;
		return $this.formatPer($value);
		if($value==null) return "";
		if($value>=0) $color="blue";
		else $color="red";
		if($value>=100) $value=99;
		if($value<=-100) $value=-99;
		$color="black";
				if($value <0 ) $value = "<u>"+number_format(-1*$value,0)+"</u>";
		
		
		return "<span style='color:"+$color+"'>"+$value+"</span>";
	}
stock_ViewStock.prototype.formatFf = function($value,$ysFa,$noFa){
var $this = this; var $__arguments = arguments; var $color = null;
		return $this.formatPer($value);
		if($value==null) return "";
		if($value>=0) $color="blue";
		else $color="red";
		if($value>=100) $value=99;
		if($value<=-100) $value=-99;
				if($value <0 ) $value = ""+number_format(-1*$value,0)+"";
		
		
		return "<span style='color:"+$color+"'>"+$value+"</span>";
	}
stock_ViewStock.prototype.formatPercentScale = function($value, $maPer){
var $this = this; var $__arguments = arguments; var $color = null;
		if($value==null) return "";
		if($value>=50) $color="blue";
		else $color="red";
						if($value>=100) $value=99;
		if($value<=-100) $value=-99;
		if($value<0) $color="limegreen";
		
		if($value <0 ) $value = ""+number_format(-1*$value,0)+"";
		else $value = number_format(1*$value,0,",","");
		$value=substr($value,0,3);

		return "<span style='color:"+$color+"'>"+$value+"</span>";
	}
stock_ViewStock.prototype.formatPercentValue = function($value){
var $this = this; var $__arguments = arguments; var $color = null;
		if($value==null) return "";
		if($value>=40) $color="blue";
		else $color="red";
		if($value<0) $color="limegreen";
		
		$value=$value/10;
		if($value>=100)$value=99;
		if($value <0 ) $value = ""+number_format(-1*$value,0)+"";
		else $value = number_format(1*$value,0,",","");
		$value=substr($value,0,3);

		return "<span style='color:"+$color+"'>"+$value+"</span>";
	}
stock_ViewStock.prototype.formatPercent = function($value){
var $this = this; var $__arguments = arguments; var $color = null;
		if($value==null) return "";
		if($value<=3) $color="blue";
		else $color="red";
		if($value<0) $color="limegreen";
		
		if($value <0 ) $value = ""+number_format(-10*$value,0)+"";
		else $value = number_format(10*$value,0,",","");
		$value=substr($value,0,3);

		return "<span style='color:"+$color+"'>"+$value+"</span>";
	}
stock_ViewStock.prototype.formatPercentRev = function($value){
var $this = this; var $__arguments = arguments; var $color = null;
		if($value==null) return "";
		if($value<3.5) $color="blue";
		else $color="red";
		if($value<0) $color="limegreen";
		
		if($value <0 ) $value = ""+number_format(-1*$value,0)+"";
		else $value = number_format(1*$value,0,",","");
		$value=substr($value,0,3);

		return "<span style='color:"+$color+"'>"+$value+"</span>";
	}
stock_ViewStock.prototype.formatStatus = function($str,$str0){
var $this = this; var $__arguments = arguments; var $value = null; var $color = null;
		if($str==null) $value="N";
		if($str=="less") $value="L";
		if($str=="great") $value="G";
		if($str=="greatF") $value="F";
		
		if($str0==null) $value+="N";
		if($str0=="less") $value+="L";
		if($str0=="great") $value+="G";
		if($str0=="greatF") $value+="F";
		
		$color="black";
		return "<span style='color:"+$color+"'>"+$value+"</span>";
	}
stock_ViewStock.prototype.formatPercentNone = function($value){
var $this = this; var $__arguments = arguments; var $color = null;
		if($value==null) return "";
		if($value>=8) $color="black";
		else $color="black";
		if($value<0) $color="limegreen";
		
		if($value <0 ) $value = ""+number_format(-10*$value,0)+"";
		else $value = number_format(10*$value,0,",","");
		$value=substr($value,0,3);

		return "<span style='color:"+$color+"'>"+$value+"</span>";
	}
stock_ViewStock.prototype.formatMarket = function($value){
var $this = this; var $__arguments = arguments; var $color = null;
				if($value==null) return "";
		if($value=="vn") $color="blue";
		else $color="red";
		$color="black";
		if($value=="vn") $value="v";
		if($value=="ha") $value="h";
		if($value=="uc") $value="u";
		return "<span style='color:"+$color+"'>"+$value+"</span>";
	}
stock_ViewStock.prototype.formatMarketTrade = function($value,$canSell,$tp){
var $this = this; var $__arguments = arguments; var $color = null;
		if($tp==0)$tp="a";
		if($tp==1)$tp="b";
		if($tp==2)$tp="c";
		if($tp==3)$tp="d";
		if($canSell) return "<span style='font-weight:bold'>"+$value+"</span>";
		else return "";				
		
		return;
		if($canSell) $color="blue";
		else $color="red";
		return "<span style='color:"+$color+"'>"+$value+"</span>";
	}
stock_ViewStock.prototype.formatKelly = function($value){
var $this = this; var $__arguments = arguments; var $color = null;
				if($value==null) return "";
				if($value>0) $color="blue";
		else $color="red";
				
		if($value <0 ) $value = ""+number_format(-10*$value,0)+"";
		else $value = number_format(10*$value,0,",","");
		return $value;
		return "<span style='color:"+$color+"'>"+$value+"</span>";
	}
stock_ViewStock.prototype.formatBet = function($value){
var $this = this; var $__arguments = arguments;
		if($value==null) return "";
		return number_format($value,1,".",",");
	}
stock_ViewStock.prototype.formatSymbol = function($symbol){
var $this = this; var $__arguments = arguments;
		if($symbol==null) return "";
		if($this.isMarket($symbol)) return substr($symbol,0,3);
		return substr($symbol,-3);
	}
stock_ViewStock.prototype.getPrice = function($name ,$dt){
var $this = this; var $__arguments = arguments; var $vo = null; var $price = null;
		$vo=$this.voPrice2;
		if($dt==null) return null;
		$price=$dt[$name];
		if($price==null) $price=$dt[$vo.close];
		if($name==$vo.sellPrice1 && $price<$dt[$vo.close]) $price=$dt[$vo.close];
		if($name==$vo.buyPrice1 && $price>$dt[$vo.close]) $price=$dt[$vo.close];
		return $price;
	}
stock_ViewStock.prototype.getPricePer = function($name ,$dt){
var $this = this; var $__arguments = arguments; var $vo = null; var $price = null; var $per = null; var $priceRef = null;
		$vo=$this.voPrice2;
		$price=$this.getPrice($name,$dt);
		if($dt[$vo.ref]!=0) $per=round(100*($price-$dt[$vo.ref])/$dt[$vo.ref],1);
		if($name==$vo.low){
			if($price!=0) $per=round(100*($dt[$vo.close]-$price)/$price,1);
		}
		if($name==$vo.high){
			if($price<$dt[$vo.ref]) $price=$dt[$vo.ref];
			if($price<$dt[$vo.close]) $price=$dt[$vo.close];
						$priceRef=$dt[$vo.close];
			if($priceRef==null || $priceRef==0) $priceRef=$dt[$vo.close];
			if($price!=0) $per=round(100*($priceRef-$price)/$price,1);
		}
		
		return $per;
	}
stock_ViewStock.prototype.getPriceColor = function($price, $dt){
var $this = this; var $__arguments = arguments;
								
		if($price==null) $price = $dt["close"];
		
		if($price == $dt["ceil"]) return "orchid";
		if($price == $dt["floor"]) return "limegreen";
		if($price > $dt["ref"]) return "blue";
		if($price <= $dt["ref"]) return "red";
		return "#F7FF31";
	}
stock_ViewStock.prototype.getPerColor = function($per){
var $this = this; var $__arguments = arguments;
		if($per > 2 ) return "lime";
		return "red";
	}
stock_ViewStock.prototype.format2Digit = function($num,$index){
var $this = this; var $__arguments = arguments; var $str = null; var $color = null;
		$num=round($num);
		$str=$num+"";
		if($num<10) $str="0"+$num;
		if($num>=100) $str="99";
		if($num<=0) $str="T"+(-$num);
		$color="black";
		if($index==1 || $index==3){
			if($num<=10 && $index==1) $color="red";
			else if($num<=10 && $index==3) $color="red";
			else $color="blue";
		}
		return "<b style='color:"+$color+"'>"+$str+"</b>";
	}
stock_ViewStock.prototype.formatDelta = function($value){
var $this = this; var $__arguments = arguments; var $color = null;
		if($value>2) $color="blue";
		else $color="red";
		return "<span style='color:"+$color+"'>"+$value+"</span>";
	}
stock_ViewStock.prototype.formatProp = function($value){
var $this = this; var $__arguments = arguments; var $color = null;
		if($value==null) return "";
		
		if($value>20) $color="blue";
		else $color="red";
		
		return "<span style='color:"+$color+"'>"+$value+"</span>";
	}
stock_ViewStock.prototype.formatAvg = function($value){
var $this = this; var $__arguments = arguments; var $color = null;
		if($value==null) return "";
		if($value>=1) {
			$value=$value-1;
			$color="blue";
		}
		else {
			$value=1-$value;
			$color="red";
		}
		$value=round(10000*$value);
		return "<span style='font:inherit;color:"+$color+"'>"+$value+"</span>";
	}
stock_ViewStock.prototype.formatInc = function($value){
var $this = this; var $__arguments = arguments; var $color = null;
		if($value==null) return "";
		if($value>50) {
			$color="blue";
		}
		else {
			$color="red";
		}
		return "<span style='font:inherit;color:"+$color+"'>"+$value+"</span>";
	}
stock_ViewStock.prototype.formatCount = function($value){
var $this = this; var $__arguments = arguments; var $color = null;
		if($value>1000) $color="blue";
		else $color="red";
		return "<span style='color:"+$color+"'>"+$value+"</span>";
	}
stock_ViewStock.prototype.formatMinMax = function($value){
var $this = this; var $__arguments = arguments; var $color = null;
		if($value==null) return "";
		if($value>50) $color="blue";
		else $color="red";
		return "<span style='color:"+$color+"'>"+$value+"</span>";
	}
stock_ViewStock.prototype.formatCodeFull = function($value){
var $this = this; var $__arguments = arguments; var $arr = null; var $str = null; var $i = null; var $ch = null; var $color = null; var $num = null;
		if($value==null) return "";
		$arr=$value.split("");
		$str="";
		for($i=0 ;$i<count($arr) ;$i++){
			$ch=$arr[$i];
			if($ch=="[" || $ch=="]") {
				$str+=$ch;
				continue;
			}
			if($ch=="V"||$ch=="A"){
				$color="black";
				$num=$ch;
			} else if($ch=="H"){
				$num=$ch;
				$color="blue";
			} else if($ch=="L"){
				$num=$ch;
				$color="red";
			} else {
				$num=parseInt($ch);
				if($num==0 || $num==1) $color="limegreen";
				else if($num==9 || $num==8) $color="orchid";
				else if($num>=1&$num<=4) $color="blue";
				else if($num>=5&$num<=8) $color="red";
			}
			$str+="<span style='color:"+$color+"'>"+$num+"</span>";
		}
		return $str;
	}
stock_ViewStock.prototype.shortString = function($str){
var $this = this; var $__arguments = arguments; var $arr = null;
		$arr=explode(",",$str);
		if(count($arr)>=3){
			$str="<u>"+$arr[0]+"</u>";
		} else $str=""+$arr[0]+"";
				return $str;
	}
stock_ViewStock.prototype.onrpcTradeCap = function($event,$result){
var $this = this; var $__arguments = arguments;
		$this.tradeFullMap=$result;
		$this.viewDetail.buttonList.click();
		$this.rpcTradeCap2();
	}
stock_ViewStock.prototype.rpcTradeCap = function($strConf){
var $this = this; var $__arguments = arguments;
 $this.json($strConf);

	}
stock_ViewStock.prototype.onrpcTradeCap2 = function($event,$result){
var $this = this; var $__arguments = arguments;
		alert("Finished");
	}
stock_ViewStock.prototype.rpcTradeCap2 = function(){
var $this = this; var $__arguments = arguments;
 $this.json();

	}
stock_ViewStock.prototype.rpcTradeCapAppfog = function($tradeFullMap,$rowPriceLiveMap){
var $this = this; var $__arguments = arguments;
 $this.json($tradeFullMap,$rowPriceLiveMap);

	}
stock_ViewStock.prototype.getLivePrice = function($symbol){
var $this = this; var $__arguments = arguments; var $voStock = null;
		$voStock=$this.voStock;
		if($this.stockMap==null || $this.stockMap[$symbol]==null) return null;
		return $this.stockMap[$symbol][$voStock.live];
	}
stock_ViewStock.prototype.onrpcStockMap = function($event ,$result){
var $this = this; var $__arguments = arguments; var $vo = null; var $voStock = null; var $count = null; var $valueT = null; var $valueNowT = null; var $profitT = null; var $valueTfake = null; var $valueNowTfake = null; var $profitTfake = null; var $seperate = null; var $seperate2 = null; var $seperate3 = null; var $seperate4 = null; var $seperate5 = null; var $ysFaArr = null; var $ysFaMap = null; var $symbol = null; var $str = null; var $noFaArr = null; var $noFaMap = null; var $_live = null; var $buy = null; var $perSell = null; var $perBuy = null; var $stock = null; var $buyPrice = null; var $symbolTrade = null; var $trade = null; var $dateArr = null; var $priceArr = null; var $volumeArr = null; var $marketArr = null; var $live = null; var $value = null; var $valueNow = null; var $profit = null; var $canSell = null; var $i = null; var $date = null; var $tp = null; var $price = null; var $volume = null; var $marketTrade = null; var $per = null; var $trStyle = null; var $perValue = null; var $value0 = null; var $bvp = null; var $ysFa = null; var $noFa = null; var $html2 = null; var $htmlTr2 = null; var $html = null; var $arrayStock_symbol = null; var $selectStock = null; var $selectedSymbol = null; var $selectedIndex = null;
		$vo=$this.voPrice2;
		$voStock=$this.voStock;
		$this._stockMap=$this.stockMap;
		$this.stockMap=$result;
		
		if($this.firstRun){
			$this.viewDetail.preloadDetail($this.viewDetail.symbol);
			$this.firstRun=false;
		}

var $__html2Array = new Array();
$__html2Array.push('\
<table border="0" style="border-color:red;border-spacing:0px 0px;">\
<tr style="display:none">\
 <td>m</td>\
<td>&nbsp;</td>\
<td>&nbsp;</td>\
 <td>&nbsp;</td>\
<td>&nbsp;</td>\
<td>&nbsp;</td>\
<td>&nbsp;</td>\
<td>&nbsp;</td>\
<td>&nbsp;</td>\
<td>&nbsp;</td>\
<td>&nbsp;</td>\
<td>&nbsp;</td>\
 <td>pb</td>\
<td>&nbsp;</td>\
 <td>hi</td>\
<td>&nbsp;</td>\
 <td>pS</td>\
<td>&nbsp;</td>\
<td>pL</td>\
<td>&nbsp;</td>\
 <td>pV</td>\
<td>&nbsp;</td>\
  </tr>\
');
$html2 = $__html2Array.join("");
	$count=0;
	$valueT=0;
	$valueNowT=0;
	$profitT=0;
	$valueTfake=0;
	$valueNowTfake=0;
	$profitTfake=0;
	$seperate=null;
	$seperate2=null;
	$seperate3=null;
	$seperate4=null;
	$seperate5=null;

	$ysFaArr=explode(",",$this.ao.conf["ysFA"]);
	$ysFaMap={
	};
	for($i in $ysFaArr){var $str = $ysFaArr[$i];
		$symbol=$str;
		$ysFaMap[$symbol]=$symbol;
	}
	
	$noFaArr=explode(",",$this.ao.conf["noFA"]);
	$noFaMap={
	};
	for($i in $noFaArr){var $str = $noFaArr[$i];
		$symbol=$str;
		$noFaMap[$symbol]=$symbol;
	}
	for($symbol in $this.stockMap){var $stock = $this.stockMap[$symbol];
		if($this._stockMap[$symbol]!=null) $_live=$this._stockMap[$symbol][$voStock.live];
		$buy=null;
		$perSell=$this.getPricePer($vo.sellPrice1,$this.stockMap[$symbol][$voStock.live]);
		$perBuy=$this.getPricePer($vo.buyPrice1,$this.stockMap[$symbol][$voStock.live]);
				
		if($stock[$voStock.live]==null) {
						continue;
		}
		if(!$this.isMarket($symbol)){
			$buyPrice=$this.getPrice($vo.sellPrice1,$stock[$voStock.live]);
			if($buyPrice!=0) $buy=100*ceil($this.buyValue/(100*$buyPrice));
			else $buy=null;
			
		}
		else {
			$stock[$voStock.live][$vo.buyPrice1]=$stock[$voStock.live][$vo.close];
			$buy=null;
		}
		
		if(!$this.isMarket($symbol)) $symbolTrade=$symbol;
		$count++;
		if(count($this.stockMap[$symbol][$voStock.trade])!=0){
			$trade=$this.stockMap[$symbol][$voStock.trade];
			
			if($trade["market"]==",") {
								if($seperate==null) $seperate=$count;
			} else {
				
			}
			$dateArr=explode(",",$trade["date"]);
			$priceArr=explode(",",$trade["price"]);
			$volumeArr=explode(",",$trade["volume"]);
			$marketArr=explode(",",$trade["market"]);
			$live=$this.stockMap[$symbol][$voStock.live];
			
			$value=0;
			$valueNow=0;
			$profit=0;
			$canSell=false;
			for($i=0;$i<count($dateArr)-1;$i++){
				$date=$dateArr[$i];
				$tp=$this.ao.getTplus($date);
				if($tp>=3) $canSell=true;
				if($tp>=10)$tp=9;
				$marketArr[$i]=$marketArr[$i];				$price=$priceArr[$i];
				$volume=$volumeArr[$i];
				$value+=$price*$volume;
				$valueNow+=$this.getPrice($vo.buyPrice1,$live)*$volume;
				$profit+=$valueNow-$value;
							}
			$marketTrade=$this.formatMarketTrade(implode(",",$marketArr),$canSell,$tp);
			if($trade["market"]!=","){
				$valueT+=$value;
				$valueNowT+=$valueNow;
				$profitT+=$profit;
			} else {
				$valueTfake+=$value;
				$valueNowTfake+=$valueNow;
				$profitTfake+=$profit;
			}
			if($value!=0) $per=round(100*($valueNow-$value)/$value,1);
			else $per=null;
		} else {
			$marketTrade=null;
			$value=null;
			$valueNow=null;
			$profit=null;
			$per=null;
			if($seperate2==null && $this.stockMap[$symbol][$voStock.rate]<9000000000) $seperate2=$count;
		}
		
		
		if($this.stockMap[$symbol][$voStock.rate]<9000000 && $seperate3==null && $seperate2!=null) $seperate3=$count;
		
		if($seperate==$count || $seperate2==$count || $seperate3==$count || $seperate4==$count || $seperate5==$count) {
			$trStyle="border-top:2px solid black;";
		}
		else $trStyle="";
		
								
		$perValue=0;
		$value0=$stock[$voStock.live][$vo.close]*$stock[$voStock.live][$vo.volume];
		if($stock[$voStock.value2]!=0 && $stock[$voStock.value2]!=null) $perValue=round(100*$value0/$stock[$voStock.value2]);
		
		if($stock[$voStock.perHigh]>=10) $stock[$voStock.perHigh]=9;
		if($stock[$voStock.maxC1]>=100) $stock[$voStock.maxC1]=99;
				
		if(!$this.isNull0($stock[$voStock.bv])) $bvp=(1*($stock[$voStock.live][$vo.close]-$stock[$voStock.bv])/$stock[$voStock.bv]);
		else $bvp=null;
		
		$ysFa=false;
		if($ysFaMap[$symbol]!=null) $ysFa=true;
		
		$noFa=false;
		if($noFaMap[$symbol]!=null) $noFa=true;

var $__htmlTr2Array = new Array();
$__htmlTr2Array.push('\
<tr>\
 <td style="border-left:0px solid black;');
$__htmlTr2Array.push( $trStyle );

$__htmlTr2Array.push('">');
$__htmlTr2Array.push( $this.formatPer($perBuy,$stock[$voStock.live],$symbol) );

$__htmlTr2Array.push('</td>\
 ');
 if($count%2==1 || $count==-1) {
$__htmlTr2Array.push('\
<td style="');
$__htmlTr2Array.push( $trStyle );

$__htmlTr2Array.push('"><a _tag2="symbolLeft" _tag="symbol" _value="');
$__htmlTr2Array.push($symbol);

$__htmlTr2Array.push('" href="#" onclick="return false;" style="text-decoration:none;color:black;background-color:white;">');
$__htmlTr2Array.push( $this.formatSymbol($symbol) );

$__htmlTr2Array.push('</a></td>\
');
 } else { 
$__htmlTr2Array.push('\
<td _tag2="symbolLeft0" _tag="symbol" _value="');
$__htmlTr2Array.push($symbol);

$__htmlTr2Array.push('" style="font-weight:normal;');
$__htmlTr2Array.push( $trStyle );

$__htmlTr2Array.push('">');
$__htmlTr2Array.push( $this.formatSymbol($symbol) );

$__htmlTr2Array.push('</td>\
');
 } 
$__htmlTr2Array.push('\
<td style="border-right:0px solid black;');
$__htmlTr2Array.push( $trStyle );

$__htmlTr2Array.push('">');
$__htmlTr2Array.push( $this.formatPer($perSell,$stock[$voStock.live],null) );

$__htmlTr2Array.push('</td>\
  <td style="border-right:0px solid black;');
$__htmlTr2Array.push( $trStyle );

$__htmlTr2Array.push('">');
$__htmlTr2Array.push( $this.shortString($marketTrade) );

$__htmlTr2Array.push('</td>\
<td style="border-right:2px solid black;');
$__htmlTr2Array.push( $trStyle );

$__htmlTr2Array.push('">');
$__htmlTr2Array.push( $this.formatPercentRev( $stock[$voStock.perHigh] ) );

$__htmlTr2Array.push(' </td>\
  <td style="border-right:0px solid black;');
$__htmlTr2Array.push( $trStyle );

$__htmlTr2Array.push('"> ');
$__htmlTr2Array.push( $this.formatPercentScale( $stock[$voStock.minC1], null ) );

$__htmlTr2Array.push(' </td>\
<td style="border-right:0px solid black;');
$__htmlTr2Array.push( $trStyle );

$__htmlTr2Array.push('"> ');
$__htmlTr2Array.push( $stock[$voStock.maxC1] );

$__htmlTr2Array.push(' </td>\
 <td style="');
$__htmlTr2Array.push( $trStyle );

$__htmlTr2Array.push('">');
$__htmlTr2Array.push(  $this.formatPercentValue( $perValue ) );

$__htmlTr2Array.push('</td>\
<td style="');
$__htmlTr2Array.push( $trStyle );

$__htmlTr2Array.push(';border-right:0px solid black;">');
$__htmlTr2Array.push( $this.formatValue2($stock[$voStock.value2]) );

$__htmlTr2Array.push('</td>\
 <td style="');
$__htmlTr2Array.push( $trStyle );

$__htmlTr2Array.push('">');
$__htmlTr2Array.push( $this.formatPrice($vo.buyPrice1,$stock[$voStock.live],$_live) );

$__htmlTr2Array.push('</td>\
<td style="border-right:0px solid black;');
$__htmlTr2Array.push( $trStyle );

$__htmlTr2Array.push('">');
$__htmlTr2Array.push( $this.formatVolume1($vo.buyVolume1,$stock[$voStock.live],$_live,$symbol) );

$__htmlTr2Array.push('</td>\
 <td style="border-left:0px solid black;');
$__htmlTr2Array.push( $trStyle );

$__htmlTr2Array.push('">');
$__htmlTr2Array.push( $this.formatPrice($vo.sellPrice1,$stock[$voStock.live],$_live) );

$__htmlTr2Array.push('</td>\
<td style="border-right:2px solid black;');
$__htmlTr2Array.push( $trStyle );

$__htmlTr2Array.push('">');
$__htmlTr2Array.push( $this.formatVolume1($vo.sellVolume1,$stock[$voStock.live],$_live,$symbol) );

$__htmlTr2Array.push('</td>\
\
<td style="color:black;border-right:0px solid black;');
$__htmlTr2Array.push( $trStyle );

$__htmlTr2Array.push('" >');
$__htmlTr2Array.push( $this.formatRoe($stock[$voStock.roe],$ysFa,$noFa) );

$__htmlTr2Array.push('</td>\
<td style="color:black;border-right:0px solid black;');
$__htmlTr2Array.push( $trStyle );

$__htmlTr2Array.push('" >');
$__htmlTr2Array.push( $this.formatBvp($bvp) );

$__htmlTr2Array.push('</td>\
  <td style="color:black;border-right:0px solid black;');
$__htmlTr2Array.push( $trStyle );

$__htmlTr2Array.push('" >');
$__htmlTr2Array.push( $this.formatFf($stock[$voStock.ff2],$ysFa,$noFa) );

$__htmlTr2Array.push('</td>\
<td style="color:black;border-right:0px solid black;');
$__htmlTr2Array.push( $trStyle );

$__htmlTr2Array.push('" >');
$__htmlTr2Array.push( $this.formatVolume2($buy,$vo.sellPrice1,$stock[$voStock.live],$_live) );

$__htmlTr2Array.push('</td>\
  ');
  
$__htmlTr2Array.push('\
</tr>\
');
$htmlTr2 = $__htmlTr2Array.join("");
		$html2+=$htmlTr2;
	}
		$html+="</table>";
		$html2+="</table>";
		$this.viewDetail.divStock.html($html2);
		
		
		$arrayStock_symbol = [];
		for($symbol in $this.stockMap){var $stock = $this.stockMap[$symbol];
			array_push($arrayStock_symbol, $symbol);
		}
		
		$selectStock = $this.viewDetail.selectStock;
		$selectedSymbol = $selectStock.prop("value");
		
var $__htmlArray = new Array();
$__htmlArray.push('\
<option></option>\
');
 
		$selectedIndex = 0;
		for($i in $arrayStock_symbol){var $value = $arrayStock_symbol[$i]; 
			if($value == $selectedSymbol) $selectedIndex = 1*$i + 1;

$__htmlArray.push('\
<option value="');
$__htmlArray.push( $value );

$__htmlArray.push('">');
$__htmlArray.push( $value );

$__htmlArray.push('</option>\
');
 } 
$__htmlArray.push(' ');
$html = $__htmlArray.join("");
		$selectStock.html($html);
		$selectStock.prop("selectedIndex", $selectedIndex);
		
		
		$this.viewDetail.highlight();
				
		$this.viewChart.setOnePrice();
		
		$this.stockMapTime=new Date();
		$this.stockMapTitle = date("H:i:s d/m/Y");
		$__doc.title = $this.stockMapTitle;
		$this.rpcStockMap();
	}
stock_ViewStock.prototype.isMarket = function($symbol){
var $this = this; var $__arguments = arguments;
		if($symbol=="VNINDEX") return true;
		if($symbol=="HAINDEX") return true;
		if($symbol=="VN30INDEX") return true;
		if($symbol=="HA30INDEX") return true;
		if($symbol=="VNALLINDEX") return true;
		return false;
	}
stock_ViewStock.prototype.isNull0 = function($value){
var $this = this; var $__arguments = arguments;
		if($value==null || $value==0) return true;
		return false;
	}
stock_ViewStock.prototype.getCodeFull = function($rowPriceArr,$i){
var $this = this; var $__arguments = arguments; var $codeFull = null;
		$codeFull=$rowPriceArr[$i]["codeFull"];
		return $codeFull;
		if($codeFull==null||$this.indexArr[$i]==null||$this.indexArr[$i]["codePer"]==null){
			return null;
		} else{
			return $codeFull=$codeFull+$this.indexArr[$i]["codePer"];
		}
	}
stock_ViewStock.prototype.makeIndex = function(){
var $this = this; var $__arguments = arguments; var $len = null; var $i = null; var $perT = null; var $countT = null; var $j = null;
		$len=count($this.indexArr);
		for($i=0;$i<$len;$i++){
			if($i+1+10>$len) break;
			if($this.indexArr[$i]["count"]==0) break;
			$perT=0;
			$countT=0;
			for($j=$i+1;$j<$i+1+10;$j++){
				if($this.indexArr[$j]["count"]==0) break;
				$perT+=$this.indexArr[$j]["per"];
				$countT+=$this.indexArr[$j]["count"];
				if($j-$i==10){
					$perT=round($perT/$countT,2);
					
					if($perT<0) $this.indexArr[$i]["codePer"]="G"+round(-100*$perT);
					else $this.indexArr[$i]["codePer"]="T"+round(100*$perT);
				}
			}
			if($this.indexArr[$i]["codePer"]==null) break;
			$this.indexArr[$i]["per"]=round($this.indexArr[$i]["per"]/$this.indexArr[$i]["count"],2);
			if($this.indexArr[$i]["per"]<0) $this.indexArr[$i]["codePer"]+="g"+round(-100*$this.indexArr[$i]["per"]);
			else $this.indexArr[$i]["codePer"]+="t"+round(100*$this.indexArr[$i]["per"]);
		}
	}
stock_ViewStock.prototype.rpcMakeTa = function(){
var $this = this; var $__arguments = arguments;
 $this.json();

	}
stock_ViewStock.prototype.restartStockMap = function(){
var $this = this; var $__arguments = arguments;
		$this.stockMapTime=null;
		$this.xhrStockMap.abort();
		$this.rpcStockMap();
	}
stock_ViewStock.prototype.stopStockMap = function(){
var $this = this; var $__arguments = arguments;
		$this.stockMapTime=null;
		$this.xhrStockMap.abort();
	}
stock_ViewStock.prototype.rpcStockMap = function(){
var $this = this; var $__arguments = arguments;
 if($this.viewDetail.isRun==0) {$this.stopStockMap();return;} $this.xhrStockMap = $this.json();

	}
stock_ViewStock.prototype.mapNoNull = function($map){
var $this = this; var $__arguments = arguments;
		if($map==null) return {
		};
		return $map;
	}
stock_ViewStock.prototype.loadTradeMap = function(){
var $this = this; var $__arguments = arguments; var $tradeMap = null;
		$tradeMap=$this.obJfile.load("stock_ViewStock/tradeMap");
		return $tradeMap;
	}
stock_ViewStock.prototype.loadStatMap = function(){
var $this = this; var $__arguments = arguments; var $statMap = null;
		$statMap=$this.obJfile.load("stock_ViewStock/statMap");
		return $statMap;
	}
stock_ViewStock.prototype.rpcMakeStatMapzzz = function(){
var $this = this; var $__arguments = arguments;
 $this.json();

	}
stock_ViewStock.prototype.rpcMakeStatMapAppfog = function($statMap){
var $this = this; var $__arguments = arguments;
 $this.json($statMap);

	}
stock_ViewStock.prototype.rpcMakeStatMap = function(){
var $this = this; var $__arguments = arguments;
 $this.json();

	}
stock_ViewStock.prototype.rpcMakeStatMapzz = function(){
var $this = this; var $__arguments = arguments;
 $this.json();

	}
</script>

<script native="jsml/jquery-1.7.1.min.js">
/*! jQuery v1.7.1 jquery.com | jquery.org/license */
(function(a,b){function cy(a){return f.isWindow(a)?a:a.nodeType===9?a.defaultView||a.parentWindow:!1}function cv(a){if(!ck[a]){var b=c.body,d=f("<"+a+">").appendTo(b),e=d.css("display");d.remove();if(e==="none"||e===""){cl||(cl=c.createElement("iframe"),cl.frameBorder=cl.width=cl.height=0),b.appendChild(cl);if(!cm||!cl.createElement)cm=(cl.contentWindow||cl.contentDocument).document,cm.write((c.compatMode==="CSS1Compat"?"<!doctype html>":"")+"<html><body>"),cm.close();d=cm.createElement(a),cm.body.appendChild(d),e=f.css(d,"display"),b.removeChild(cl)}ck[a]=e}return ck[a]}function cu(a,b){var c={};f.each(cq.concat.apply([],cq.slice(0,b)),function(){c[this]=a});return c}function ct(){cr=b}function cs(){setTimeout(ct,0);return cr=f.now()}function cj(){try{return new a.ActiveXObject("Microsoft.XMLHTTP")}catch(b){}}function ci(){try{return new a.XMLHttpRequest}catch(b){}}function cc(a,c){a.dataFilter&&(c=a.dataFilter(c,a.dataType));var d=a.dataTypes,e={},g,h,i=d.length,j,k=d[0],l,m,n,o,p;for(g=1;g<i;g++){if(g===1)for(h in a.converters)typeof h=="string"&&(e[h.toLowerCase()]=a.converters[h]);l=k,k=d[g];if(k==="*")k=l;else if(l!=="*"&&l!==k){m=l+" "+k,n=e[m]||e["* "+k];if(!n){p=b;for(o in e){j=o.split(" ");if(j[0]===l||j[0]==="*"){p=e[j[1]+" "+k];if(p){o=e[o],o===!0?n=p:p===!0&&(n=o);break}}}}!n&&!p&&f.error("No conversion from "+m.replace(" "," to ")),n!==!0&&(c=n?n(c):p(o(c)))}}return c}function cb(a,c,d){var e=a.contents,f=a.dataTypes,g=a.responseFields,h,i,j,k;for(i in g)i in d&&(c[g[i]]=d[i]);while(f[0]==="*")f.shift(),h===b&&(h=a.mimeType||c.getResponseHeader("content-type"));if(h)for(i in e)if(e[i]&&e[i].test(h)){f.unshift(i);break}if(f[0]in d)j=f[0];else{for(i in d){if(!f[0]||a.converters[i+" "+f[0]]){j=i;break}k||(k=i)}j=j||k}if(j){j!==f[0]&&f.unshift(j);return d[j]}}function ca(a,b,c,d){if(f.isArray(b))f.each(b,function(b,e){c||bE.test(a)?d(a,e):ca(a+"["+(typeof e=="object"||f.isArray(e)?b:"")+"]",e,c,d)});else if(!c&&b!=null&&typeof b=="object")for(var e in b)ca(a+"["+e+"]",b[e],c,d);else d(a,b)}function b_(a,c){var d,e,g=f.ajaxSettings.flatOptions||{};for(d in c)c[d]!==b&&((g[d]?a:e||(e={}))[d]=c[d]);e&&f.extend(!0,a,e)}function b$(a,c,d,e,f,g){f=f||c.dataTypes[0],g=g||{},g[f]=!0;var h=a[f],i=0,j=h?h.length:0,k=a===bT,l;for(;i<j&&(k||!l);i++)l=h[i](c,d,e),typeof l=="string"&&(!k||g[l]?l=b:(c.dataTypes.unshift(l),l=b$(a,c,d,e,l,g)));(k||!l)&&!g["*"]&&(l=b$(a,c,d,e,"*",g));return l}function bZ(a){return function(b,c){typeof b!="string"&&(c=b,b="*");if(f.isFunction(c)){var d=b.toLowerCase().split(bP),e=0,g=d.length,h,i,j;for(;e<g;e++)h=d[e],j=/^\+/.test(h),j&&(h=h.substr(1)||"*"),i=a[h]=a[h]||[],i[j?"unshift":"push"](c)}}}function bC(a,b,c){var d=b==="width"?a.offsetWidth:a.offsetHeight,e=b==="width"?bx:by,g=0,h=e.length;if(d>0){if(c!=="border")for(;g<h;g++)c||(d-=parseFloat(f.css(a,"padding"+e[g]))||0),c==="margin"?d+=parseFloat(f.css(a,c+e[g]))||0:d-=parseFloat(f.css(a,"border"+e[g]+"Width"))||0;return d+"px"}d=bz(a,b,b);if(d<0||d==null)d=a.style[b]||0;d=parseFloat(d)||0;if(c)for(;g<h;g++)d+=parseFloat(f.css(a,"padding"+e[g]))||0,c!=="padding"&&(d+=parseFloat(f.css(a,"border"+e[g]+"Width"))||0),c==="margin"&&(d+=parseFloat(f.css(a,c+e[g]))||0);return d+"px"}function bp(a,b){b.src?f.ajax({url:b.src,async:!1,dataType:"script"}):f.globalEval((b.text||b.textContent||b.innerHTML||"").replace(bf,"/*$0*/")),b.parentNode&&b.parentNode.removeChild(b)}function bo(a){var b=c.createElement("div");bh.appendChild(b),b.innerHTML=a.outerHTML;return b.firstChild}function bn(a){var b=(a.nodeName||"").toLowerCase();b==="input"?bm(a):b!=="script"&&typeof a.getElementsByTagName!="undefined"&&f.grep(a.getElementsByTagName("input"),bm)}function bm(a){if(a.type==="checkbox"||a.type==="radio")a.defaultChecked=a.checked}function bl(a){return typeof a.getElementsByTagName!="undefined"?a.getElementsByTagName("*"):typeof a.querySelectorAll!="undefined"?a.querySelectorAll("*"):[]}function bk(a,b){var c;if(b.nodeType===1){b.clearAttributes&&b.clearAttributes(),b.mergeAttributes&&b.mergeAttributes(a),c=b.nodeName.toLowerCase();if(c==="object")b.outerHTML=a.outerHTML;else if(c!=="input"||a.type!=="checkbox"&&a.type!=="radio"){if(c==="option")b.selected=a.defaultSelected;else if(c==="input"||c==="textarea")b.defaultValue=a.defaultValue}else a.checked&&(b.defaultChecked=b.checked=a.checked),b.value!==a.value&&(b.value=a.value);b.removeAttribute(f.expando)}}function bj(a,b){if(b.nodeType===1&&!!f.hasData(a)){var c,d,e,g=f._data(a),h=f._data(b,g),i=g.events;if(i){delete h.handle,h.events={};for(c in i)for(d=0,e=i[c].length;d<e;d++)f.event.add(b,c+(i[c][d].namespace?".":"")+i[c][d].namespace,i[c][d],i[c][d].data)}h.data&&(h.data=f.extend({},h.data))}}function bi(a,b){return f.nodeName(a,"table")?a.getElementsByTagName("tbody")[0]||a.appendChild(a.ownerDocument.createElement("tbody")):a}function U(a){var b=V.split("|"),c=a.createDocumentFragment();if(c.createElement)while(b.length)c.createElement(b.pop());return c}function T(a,b,c){b=b||0;if(f.isFunction(b))return f.grep(a,function(a,d){var e=!!b.call(a,d,a);return e===c});if(b.nodeType)return f.grep(a,function(a,d){return a===b===c});if(typeof b=="string"){var d=f.grep(a,function(a){return a.nodeType===1});if(O.test(b))return f.filter(b,d,!c);b=f.filter(b,d)}return f.grep(a,function(a,d){return f.inArray(a,b)>=0===c})}function S(a){return!a||!a.parentNode||a.parentNode.nodeType===11}function K(){return!0}function J(){return!1}function n(a,b,c){var d=b+"defer",e=b+"queue",g=b+"mark",h=f._data(a,d);h&&(c==="queue"||!f._data(a,e))&&(c==="mark"||!f._data(a,g))&&setTimeout(function(){!f._data(a,e)&&!f._data(a,g)&&(f.removeData(a,d,!0),h.fire())},0)}function m(a){for(var b in a){if(b==="data"&&f.isEmptyObject(a[b]))continue;if(b!=="toJSON")return!1}return!0}function l(a,c,d){if(d===b&&a.nodeType===1){var e="data-"+c.replace(k,"-$1").toLowerCase();d=a.getAttribute(e);if(typeof d=="string"){try{d=d==="true"?!0:d==="false"?!1:d==="null"?null:f.isNumeric(d)?parseFloat(d):j.test(d)?f.parseJSON(d):d}catch(g){}f.data(a,c,d)}else d=b}return d}function h(a){var b=g[a]={},c,d;a=a.split(/\s+/);for(c=0,d=a.length;c<d;c++)b[a[c]]=!0;return b}var c=a.document,d=a.navigator,e=a.location,f=function(){function J(){if(!e.isReady){try{c.documentElement.doScroll("left")}catch(a){setTimeout(J,1);return}e.ready()}}var e=function(a,b){return new e.fn.init(a,b,h)},f=a.jQuery,g=a.$,h,i=/^(?:[^#<]*(<[\w\W]+>)[^>]*$|#([\w\-]*)$)/,j=/\S/,k=/^\s+/,l=/\s+$/,m=/^<(\w+)\s*\/?>(?:<\/\1>)?$/,n=/^[\],:{}\s]*$/,o=/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,p=/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,q=/(?:^|:|,)(?:\s*\[)+/g,r=/(webkit)[ \/]([\w.]+)/,s=/(opera)(?:.*version)?[ \/]([\w.]+)/,t=/(msie) ([\w.]+)/,u=/(mozilla)(?:.*? rv:([\w.]+))?/,v=/-([a-z]|[0-9])/ig,w=/^-ms-/,x=function(a,b){return(b+"").toUpperCase()},y=d.userAgent,z,A,B,C=Object.prototype.toString,D=Object.prototype.hasOwnProperty,E=Array.prototype.push,F=Array.prototype.slice,G=String.prototype.trim,H=Array.prototype.indexOf,I={};e.fn=e.prototype={constructor:e,init:function(a,d,f){var g,h,j,k;if(!a)return this;if(a.nodeType){this.context=this[0]=a,this.length=1;return this}if(a==="body"&&!d&&c.body){this.context=c,this[0]=c.body,this.selector=a,this.length=1;return this}if(typeof a=="string"){a.charAt(0)!=="<"||a.charAt(a.length-1)!==">"||a.length<3?g=i.exec(a):g=[null,a,null];if(g&&(g[1]||!d)){if(g[1]){d=d instanceof e?d[0]:d,k=d?d.ownerDocument||d:c,j=m.exec(a),j?e.isPlainObject(d)?(a=[c.createElement(j[1])],e.fn.attr.call(a,d,!0)):a=[k.createElement(j[1])]:(j=e.buildFragment([g[1]],[k]),a=(j.cacheable?e.clone(j.fragment):j.fragment).childNodes);return e.merge(this,a)}h=c.getElementById(g[2]);if(h&&h.parentNode){if(h.id!==g[2])return f.find(a);this.length=1,this[0]=h}this.context=c,this.selector=a;return this}return!d||d.jquery?(d||f).find(a):this.constructor(d).find(a)}if(e.isFunction(a))return f.ready(a);a.selector!==b&&(this.selector=a.selector,this.context=a.context);return e.makeArray(a,this)},selector:"",jquery:"1.7.1",length:0,size:function(){return this.length},toArray:function(){return F.call(this,0)},get:function(a){return a==null?this.toArray():a<0?this[this.length+a]:this[a]},pushStack:function(a,b,c){var d=this.constructor();e.isArray(a)?E.apply(d,a):e.merge(d,a),d.prevObject=this,d.context=this.context,b==="find"?d.selector=this.selector+(this.selector?" ":"")+c:b&&(d.selector=this.selector+"."+b+"("+c+")");return d},each:function(a,b){return e.each(this,a,b)},ready:function(a){e.bindReady(),A.add(a);return this},eq:function(a){a=+a;return a===-1?this.slice(a):this.slice(a,a+1)},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},slice:function(){return this.pushStack(F.apply(this,arguments),"slice",F.call(arguments).join(","))},map:function(a){return this.pushStack(e.map(this,function(b,c){return a.call(b,c,b)}))},end:function(){return this.prevObject||this.constructor(null)},push:E,sort:[].sort,splice:[].splice},e.fn.init.prototype=e.fn,e.extend=e.fn.extend=function(){var a,c,d,f,g,h,i=arguments[0]||{},j=1,k=arguments.length,l=!1;typeof i=="boolean"&&(l=i,i=arguments[1]||{},j=2),typeof i!="object"&&!e.isFunction(i)&&(i={}),k===j&&(i=this,--j);for(;j<k;j++)if((a=arguments[j])!=null)for(c in a){d=i[c],f=a[c];if(i===f)continue;l&&f&&(e.isPlainObject(f)||(g=e.isArray(f)))?(g?(g=!1,h=d&&e.isArray(d)?d:[]):h=d&&e.isPlainObject(d)?d:{},i[c]=e.extend(l,h,f)):f!==b&&(i[c]=f)}return i},e.extend({noConflict:function(b){a.$===e&&(a.$=g),b&&a.jQuery===e&&(a.jQuery=f);return e},isReady:!1,readyWait:1,holdReady:function(a){a?e.readyWait++:e.ready(!0)},ready:function(a){if(a===!0&&!--e.readyWait||a!==!0&&!e.isReady){if(!c.body)return setTimeout(e.ready,1);e.isReady=!0;if(a!==!0&&--e.readyWait>0)return;A.fireWith(c,[e]),e.fn.trigger&&e(c).trigger("ready").off("ready")}},bindReady:function(){if(!A){A=e.Callbacks("once memory");if(c.readyState==="complete")return setTimeout(e.ready,1);if(c.addEventListener)c.addEventListener("DOMContentLoaded",B,!1),a.addEventListener("load",e.ready,!1);else if(c.attachEvent){c.attachEvent("onreadystatechange",B),a.attachEvent("onload",e.ready);var b=!1;try{b=a.frameElement==null}catch(d){}c.documentElement.doScroll&&b&&J()}}},isFunction:function(a){return e.type(a)==="function"},isArray:Array.isArray||function(a){return e.type(a)==="array"},isWindow:function(a){return a&&typeof a=="object"&&"setInterval"in a},isNumeric:function(a){return!isNaN(parseFloat(a))&&isFinite(a)},type:function(a){return a==null?String(a):I[C.call(a)]||"object"},isPlainObject:function(a){if(!a||e.type(a)!=="object"||a.nodeType||e.isWindow(a))return!1;try{if(a.constructor&&!D.call(a,"constructor")&&!D.call(a.constructor.prototype,"isPrototypeOf"))return!1}catch(c){return!1}var d;for(d in a);return d===b||D.call(a,d)},isEmptyObject:function(a){for(var b in a)return!1;return!0},error:function(a){throw new Error(a)},parseJSON:function(b){if(typeof b!="string"||!b)return null;b=e.trim(b);if(a.JSON&&a.JSON.parse)return a.JSON.parse(b);if(n.test(b.replace(o,"@").replace(p,"]").replace(q,"")))return(new Function("return "+b))();e.error("Invalid JSON: "+b)},parseXML:function(c){var d,f;try{a.DOMParser?(f=new DOMParser,d=f.parseFromString(c,"text/xml")):(d=new ActiveXObject("Microsoft.XMLDOM"),d.async="false",d.loadXML(c))}catch(g){d=b}(!d||!d.documentElement||d.getElementsByTagName("parsererror").length)&&e.error("Invalid XML: "+c);return d},noop:function(){},globalEval:function(b){b&&j.test(b)&&(a.execScript||function(b){a.eval.call(a,b)})(b)},camelCase:function(a){return a.replace(w,"ms-").replace(v,x)},nodeName:function(a,b){return a.nodeName&&a.nodeName.toUpperCase()===b.toUpperCase()},each:function(a,c,d){var f,g=0,h=a.length,i=h===b||e.isFunction(a);if(d){if(i){for(f in a)if(c.apply(a[f],d)===!1)break}else for(;g<h;)if(c.apply(a[g++],d)===!1)break}else if(i){for(f in a)if(c.call(a[f],f,a[f])===!1)break}else for(;g<h;)if(c.call(a[g],g,a[g++])===!1)break;return a},trim:G?function(a){return a==null?"":G.call(a)}:function(a){return a==null?"":(a+"").replace(k,"").replace(l,"")},makeArray:function(a,b){var c=b||[];if(a!=null){var d=e.type(a);a.length==null||d==="string"||d==="function"||d==="regexp"||e.isWindow(a)?E.call(c,a):e.merge(c,a)}return c},inArray:function(a,b,c){var d;if(b){if(H)return H.call(b,a,c);d=b.length,c=c?c<0?Math.max(0,d+c):c:0;for(;c<d;c++)if(c in b&&b[c]===a)return c}return-1},merge:function(a,c){var d=a.length,e=0;if(typeof c.length=="number")for(var f=c.length;e<f;e++)a[d++]=c[e];else while(c[e]!==b)a[d++]=c[e++];a.length=d;return a},grep:function(a,b,c){var d=[],e;c=!!c;for(var f=0,g=a.length;f<g;f++)e=!!b(a[f],f),c!==e&&d.push(a[f]);return d},map:function(a,c,d){var f,g,h=[],i=0,j=a.length,k=a instanceof e||j!==b&&typeof j=="number"&&(j>0&&a[0]&&a[j-1]||j===0||e.isArray(a));if(k)for(;i<j;i++)f=c(a[i],i,d),f!=null&&(h[h.length]=f);else for(g in a)f=c(a[g],g,d),f!=null&&(h[h.length]=f);return h.concat.apply([],h)},guid:1,proxy:function(a,c){if(typeof c=="string"){var d=a[c];c=a,a=d}if(!e.isFunction(a))return b;var f=F.call(arguments,2),g=function(){return a.apply(c,f.concat(F.call(arguments)))};g.guid=a.guid=a.guid||g.guid||e.guid++;return g},access:function(a,c,d,f,g,h){var i=a.length;if(typeof c=="object"){for(var j in c)e.access(a,j,c[j],f,g,d);return a}if(d!==b){f=!h&&f&&e.isFunction(d);for(var k=0;k<i;k++)g(a[k],c,f?d.call(a[k],k,g(a[k],c)):d,h);return a}return i?g(a[0],c):b},now:function(){return(new Date).getTime()},uaMatch:function(a){a=a.toLowerCase();var b=r.exec(a)||s.exec(a)||t.exec(a)||a.indexOf("compatible")<0&&u.exec(a)||[];return{browser:b[1]||"",version:b[2]||"0"}},sub:function(){function a(b,c){return new a.fn.init(b,c)}e.extend(!0,a,this),a.superclass=this,a.fn=a.prototype=this(),a.fn.constructor=a,a.sub=this.sub,a.fn.init=function(d,f){f&&f instanceof e&&!(f instanceof a)&&(f=a(f));return e.fn.init.call(this,d,f,b)},a.fn.init.prototype=a.fn;var b=a(c);return a},browser:{}}),e.each("Boolean Number String Function Array Date RegExp Object".split(" "),function(a,b){I["[object "+b+"]"]=b.toLowerCase()}),z=e.uaMatch(y),z.browser&&(e.browser[z.browser]=!0,e.browser.version=z.version),e.browser.webkit&&(e.browser.safari=!0),j.test(" ")&&(k=/^[\s\xA0]+/,l=/[\s\xA0]+$/),h=e(c),c.addEventListener?B=function(){c.removeEventListener("DOMContentLoaded",B,!1),e.ready()}:c.attachEvent&&(B=function(){c.readyState==="complete"&&(c.detachEvent("onreadystatechange",B),e.ready())});return e}(),g={};f.Callbacks=function(a){a=a?g[a]||h(a):{};var c=[],d=[],e,i,j,k,l,m=function(b){var d,e,g,h,i;for(d=0,e=b.length;d<e;d++)g=b[d],h=f.type(g),h==="array"?m(g):h==="function"&&(!a.unique||!o.has(g))&&c.push(g)},n=function(b,f){f=f||[],e=!a.memory||[b,f],i=!0,l=j||0,j=0,k=c.length;for(;c&&l<k;l++)if(c[l].apply(b,f)===!1&&a.stopOnFalse){e=!0;break}i=!1,c&&(a.once?e===!0?o.disable():c=[]:d&&d.length&&(e=d.shift(),o.fireWith(e[0],e[1])))},o={add:function(){if(c){var a=c.length;m(arguments),i?k=c.length:e&&e!==!0&&(j=a,n(e[0],e[1]))}return this},remove:function(){if(c){var b=arguments,d=0,e=b.length;for(;d<e;d++)for(var f=0;f<c.length;f++)if(b[d]===c[f]){i&&f<=k&&(k--,f<=l&&l--),c.splice(f--,1);if(a.unique)break}}return this},has:function(a){if(c){var b=0,d=c.length;for(;b<d;b++)if(a===c[b])return!0}return!1},empty:function(){c=[];return this},disable:function(){c=d=e=b;return this},disabled:function(){return!c},lock:function(){d=b,(!e||e===!0)&&o.disable();return this},locked:function(){return!d},fireWith:function(b,c){d&&(i?a.once||d.push([b,c]):(!a.once||!e)&&n(b,c));return this},fire:function(){o.fireWith(this,arguments);return this},fired:function(){return!!e}};return o};var i=[].slice;f.extend({Deferred:function(a){var b=f.Callbacks("once memory"),c=f.Callbacks("once memory"),d=f.Callbacks("memory"),e="pending",g={resolve:b,reject:c,notify:d},h={done:b.add,fail:c.add,progress:d.add,state:function(){return e},isResolved:b.fired,isRejected:c.fired,then:function(a,b,c){i.done(a).fail(b).progress(c);return this},always:function(){i.done.apply(i,arguments).fail.apply(i,arguments);return this},pipe:function(a,b,c){return f.Deferred(function(d){f.each({done:[a,"resolve"],fail:[b,"reject"],progress:[c,"notify"]},function(a,b){var c=b[0],e=b[1],g;f.isFunction(c)?i[a](function(){g=c.apply(this,arguments),g&&f.isFunction(g.promise)?g.promise().then(d.resolve,d.reject,d.notify):d[e+"With"](this===i?d:this,[g])}):i[a](d[e])})}).promise()},promise:function(a){if(a==null)a=h;else for(var b in h)a[b]=h[b];return a}},i=h.promise({}),j;for(j in g)i[j]=g[j].fire,i[j+"With"]=g[j].fireWith;i.done(function(){e="resolved"},c.disable,d.lock).fail(function(){e="rejected"},b.disable,d.lock),a&&a.call(i,i);return i},when:function(a){function m(a){return function(b){e[a]=arguments.length>1?i.call(arguments,0):b,j.notifyWith(k,e)}}function l(a){return function(c){b[a]=arguments.length>1?i.call(arguments,0):c,--g||j.resolveWith(j,b)}}var b=i.call(arguments,0),c=0,d=b.length,e=Array(d),g=d,h=d,j=d<=1&&a&&f.isFunction(a.promise)?a:f.Deferred(),k=j.promise();if(d>1){for(;c<d;c++)b[c]&&b[c].promise&&f.isFunction(b[c].promise)?b[c].promise().then(l(c),j.reject,m(c)):--g;g||j.resolveWith(j,b)}else j!==a&&j.resolveWith(j,d?[a]:[]);return k}}),f.support=function(){var b,d,e,g,h,i,j,k,l,m,n,o,p,q=c.createElement("div"),r=c.documentElement;q.setAttribute("className","t"),q.innerHTML="   <link/><table></table><a href='/a' style='top:1px;float:left;opacity:.55;'>a</a><input type='checkbox'/>",d=q.getElementsByTagName("*"),e=q.getElementsByTagName("a")[0];if(!d||!d.length||!e)return{};g=c.createElement("select"),h=g.appendChild(c.createElement("option")),i=q.getElementsByTagName("input")[0],b={leadingWhitespace:q.firstChild.nodeType===3,tbody:!q.getElementsByTagName("tbody").length,htmlSerialize:!!q.getElementsByTagName("link").length,style:/top/.test(e.getAttribute("style")),hrefNormalized:e.getAttribute("href")==="/a",opacity:/^0.55/.test(e.style.opacity),cssFloat:!!e.style.cssFloat,checkOn:i.value==="on",optSelected:h.selected,getSetAttribute:q.className!=="t",enctype:!!c.createElement("form").enctype,html5Clone:c.createElement("nav").cloneNode(!0).outerHTML!=="<:nav></:nav>",submitBubbles:!0,changeBubbles:!0,focusinBubbles:!1,deleteExpando:!0,noCloneEvent:!0,inlineBlockNeedsLayout:!1,shrinkWrapBlocks:!1,reliableMarginRight:!0},i.checked=!0,b.noCloneChecked=i.cloneNode(!0).checked,g.disabled=!0,b.optDisabled=!h.disabled;try{delete q.test}catch(s){b.deleteExpando=!1}!q.addEventListener&&q.attachEvent&&q.fireEvent&&(q.attachEvent("onclick",function(){b.noCloneEvent=!1}),q.cloneNode(!0).fireEvent("onclick")),i=c.createElement("input"),i.value="t",i.setAttribute("type","radio"),b.radioValue=i.value==="t",i.setAttribute("checked","checked"),q.appendChild(i),k=c.createDocumentFragment(),k.appendChild(q.lastChild),b.checkClone=k.cloneNode(!0).cloneNode(!0).lastChild.checked,b.appendChecked=i.checked,k.removeChild(i),k.appendChild(q),q.innerHTML="",a.getComputedStyle&&(j=c.createElement("div"),j.style.width="0",j.style.marginRight="0",q.style.width="2px",q.appendChild(j),b.reliableMarginRight=(parseInt((a.getComputedStyle(j,null)||{marginRight:0}).marginRight,10)||0)===0);if(q.attachEvent)for(o in{submit:1,change:1,focusin:1})n="on"+o,p=n in q,p||(q.setAttribute(n,"return;"),p=typeof q[n]=="function"),b[o+"Bubbles"]=p;k.removeChild(q),k=g=h=j=q=i=null,f(function(){var a,d,e,g,h,i,j,k,m,n,o,r=c.getElementsByTagName("body")[0];!r||(j=1,k="position:absolute;top:0;left:0;width:1px;height:1px;margin:0;",m="visibility:hidden;border:0;",n="style='"+k+"border:5px solid #000;padding:0;'",o="<div "+n+"><div></div></div>"+"<table "+n+" cellpadding='0' cellspacing='0'>"+"<tr><td></td></tr></table>",a=c.createElement("div"),a.style.cssText=m+"width:0;height:0;position:static;top:0;margin-top:"+j+"px",r.insertBefore(a,r.firstChild),q=c.createElement("div"),a.appendChild(q),q.innerHTML="<table><tr><td style='padding:0;border:0;display:none'></td><td>t</td></tr></table>",l=q.getElementsByTagName("td"),p=l[0].offsetHeight===0,l[0].style.display="",l[1].style.display="none",b.reliableHiddenOffsets=p&&l[0].offsetHeight===0,q.innerHTML="",q.style.width=q.style.paddingLeft="1px",f.boxModel=b.boxModel=q.offsetWidth===2,typeof q.style.zoom!="undefined"&&(q.style.display="inline",q.style.zoom=1,b.inlineBlockNeedsLayout=q.offsetWidth===2,q.style.display="",q.innerHTML="<div style='width:4px;'></div>",b.shrinkWrapBlocks=q.offsetWidth!==2),q.style.cssText=k+m,q.innerHTML=o,d=q.firstChild,e=d.firstChild,h=d.nextSibling.firstChild.firstChild,i={doesNotAddBorder:e.offsetTop!==5,doesAddBorderForTableAndCells:h.offsetTop===5},e.style.position="fixed",e.style.top="20px",i.fixedPosition=e.offsetTop===20||e.offsetTop===15,e.style.position=e.style.top="",d.style.overflow="hidden",d.style.position="relative",i.subtractsBorderForOverflowNotVisible=e.offsetTop===-5,i.doesNotIncludeMarginInBodyOffset=r.offsetTop!==j,r.removeChild(a),q=a=null,f.extend(b,i))});return b}();var j=/^(?:\{.*\}|\[.*\])$/,k=/([A-Z])/g;f.extend({cache:{},uuid:0,expando:"jQuery"+(f.fn.jquery+Math.random()).replace(/\D/g,""),noData:{embed:!0,object:"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",applet:!0},hasData:function(a){a=a.nodeType?f.cache[a[f.expando]]:a[f.expando];return!!a&&!m(a)},data:function(a,c,d,e){if(!!f.acceptData(a)){var g,h,i,j=f.expando,k=typeof c=="string",l=a.nodeType,m=l?f.cache:a,n=l?a[j]:a[j]&&j,o=c==="events";if((!n||!m[n]||!o&&!e&&!m[n].data)&&k&&d===b)return;n||(l?a[j]=n=++f.uuid:n=j),m[n]||(m[n]={},l||(m[n].toJSON=f.noop));if(typeof c=="object"||typeof c=="function")e?m[n]=f.extend(m[n],c):m[n].data=f.extend(m[n].data,c);g=h=m[n],e||(h.data||(h.data={}),h=h.data),d!==b&&(h[f.camelCase(c)]=d);if(o&&!h[c])return g.events;k?(i=h[c],i==null&&(i=h[f.camelCase(c)])):i=h;return i}},removeData:function(a,b,c){if(!!f.acceptData(a)){var d,e,g,h=f.expando,i=a.nodeType,j=i?f.cache:a,k=i?a[h]:h;if(!j[k])return;if(b){d=c?j[k]:j[k].data;if(d){f.isArray(b)||(b in d?b=[b]:(b=f.camelCase(b),b in d?b=[b]:b=b.split(" ")));for(e=0,g=b.length;e<g;e++)delete d[b[e]];if(!(c?m:f.isEmptyObject)(d))return}}if(!c){delete j[k].data;if(!m(j[k]))return}f.support.deleteExpando||!j.setInterval?delete j[k]:j[k]=null,i&&(f.support.deleteExpando?delete a[h]:a.removeAttribute?a.removeAttribute(h):a[h]=null)}},_data:function(a,b,c){return f.data(a,b,c,!0)},acceptData:function(a){if(a.nodeName){var b=f.noData[a.nodeName.toLowerCase()];if(b)return b!==!0&&a.getAttribute("classid")===b}return!0}}),f.fn.extend({data:function(a,c){var d,e,g,h=null;if(typeof a=="undefined"){if(this.length){h=f.data(this[0]);if(this[0].nodeType===1&&!f._data(this[0],"parsedAttrs")){e=this[0].attributes;for(var i=0,j=e.length;i<j;i++)g=e[i].name,g.indexOf("data-")===0&&(g=f.camelCase(g.substring(5)),l(this[0],g,h[g]));f._data(this[0],"parsedAttrs",!0)}}return h}if(typeof a=="object")return this.each(function(){f.data(this,a)});d=a.split("."),d[1]=d[1]?"."+d[1]:"";if(c===b){h=this.triggerHandler("getData"+d[1]+"!",[d[0]]),h===b&&this.length&&(h=f.data(this[0],a),h=l(this[0],a,h));return h===b&&d[1]?this.data(d[0]):h}return this.each(function(){var b=f(this),e=[d[0],c];b.triggerHandler("setData"+d[1]+"!",e),f.data(this,a,c),b.triggerHandler("changeData"+d[1]+"!",e)})},removeData:function(a){return this.each(function(){f.removeData(this,a)})}}),f.extend({_mark:function(a,b){a&&(b=(b||"fx")+"mark",f._data(a,b,(f._data(a,b)||0)+1))},_unmark:function(a,b,c){a!==!0&&(c=b,b=a,a=!1);if(b){c=c||"fx";var d=c+"mark",e=a?0:(f._data(b,d)||1)-1;e?f._data(b,d,e):(f.removeData(b,d,!0),n(b,c,"mark"))}},queue:function(a,b,c){var d;if(a){b=(b||"fx")+"queue",d=f._data(a,b),c&&(!d||f.isArray(c)?d=f._data(a,b,f.makeArray(c)):d.push(c));return d||[]}},dequeue:function(a,b){b=b||"fx";var c=f.queue(a,b),d=c.shift(),e={};d==="inprogress"&&(d=c.shift()),d&&(b==="fx"&&c.unshift("inprogress"),f._data(a,b+".run",e),d.call(a,function(){f.dequeue(a,b)},e)),c.length||(f.removeData(a,b+"queue "+b+".run",!0),n(a,b,"queue"))}}),f.fn.extend({queue:function(a,c){typeof a!="string"&&(c=a,a="fx");if(c===b)return f.queue(this[0],a);return this.each(function(){var b=f.queue(this,a,c);a==="fx"&&b[0]!=="inprogress"&&f.dequeue(this,a)})},dequeue:function(a){return this.each(function(){f.dequeue(this,a)})},delay:function(a,b){a=f.fx?f.fx.speeds[a]||a:a,b=b||"fx";return this.queue(b,function(b,c){var d=setTimeout(b,a);c.stop=function(){clearTimeout(d)}})},clearQueue:function(a){return this.queue(a||"fx",[])},promise:function(a,c){function m(){--h||d.resolveWith(e,[e])}typeof a!="string"&&(c=a,a=b),a=a||"fx";var d=f.Deferred(),e=this,g=e.length,h=1,i=a+"defer",j=a+"queue",k=a+"mark",l;while(g--)if(l=f.data(e[g],i,b,!0)||(f.data(e[g],j,b,!0)||f.data(e[g],k,b,!0))&&f.data(e[g],i,f.Callbacks("once memory"),!0))h++,l.add(m);m();return d.promise()}});var o=/[\n\t\r]/g,p=/\s+/,q=/\r/g,r=/^(?:button|input)$/i,s=/^(?:button|input|object|select|textarea)$/i,t=/^a(?:rea)?$/i,u=/^(?:autofocus|autoplay|async|checked|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped|selected)$/i,v=f.support.getSetAttribute,w,x,y;f.fn.extend({attr:function(a,b){return f.access(this,a,b,!0,f.attr)},removeAttr:function(a){return this.each(function(){f.removeAttr(this,a)})},prop:function(a,b){return f.access(this,a,b,!0,f.prop)},removeProp:function(a){a=f.propFix[a]||a;return this.each(function(){try{this[a]=b,delete this[a]}catch(c){}})},addClass:function(a){var b,c,d,e,g,h,i;if(f.isFunction(a))return this.each(function(b){f(this).addClass(a.call(this,b,this.className))});if(a&&typeof a=="string"){b=a.split(p);for(c=0,d=this.length;c<d;c++){e=this[c];if(e.nodeType===1)if(!e.className&&b.length===1)e.className=a;else{g=" "+e.className+" ";for(h=0,i=b.length;h<i;h++)~g.indexOf(" "+b[h]+" ")||(g+=b[h]+" ");e.className=f.trim(g)}}}return this},removeClass:function(a){var c,d,e,g,h,i,j;if(f.isFunction(a))return this.each(function(b){f(this).removeClass(a.call(this,b,this.className))});if(a&&typeof a=="string"||a===b){c=(a||"").split(p);for(d=0,e=this.length;d<e;d++){g=this[d];if(g.nodeType===1&&g.className)if(a){h=(" "+g.className+" ").replace(o," ");for(i=0,j=c.length;i<j;i++)h=h.replace(" "+c[i]+" "," ");g.className=f.trim(h)}else g.className=""}}return this},toggleClass:function(a,b){var c=typeof a,d=typeof b=="boolean";if(f.isFunction(a))return this.each(function(c){f(this).toggleClass(a.call(this,c,this.className,b),b)});return this.each(function(){if(c==="string"){var e,g=0,h=f(this),i=b,j=a.split(p);while(e=j[g++])i=d?i:!h.hasClass(e),h[i?"addClass":"removeClass"](e)}else if(c==="undefined"||c==="boolean")this.className&&f._data(this,"__className__",this.className),this.className=this.className||a===!1?"":f._data(this,"__className__")||""})},hasClass:function(a){var b=" "+a+" ",c=0,d=this.length;for(;c<d;c++)if(this[c].nodeType===1&&(" "+this[c].className+" ").replace(o," ").indexOf(b)>-1)return!0;return!1},val:function(a){var c,d,e,g=this[0];{if(!!arguments.length){e=f.isFunction(a);return this.each(function(d){var g=f(this),h;if(this.nodeType===1){e?h=a.call(this,d,g.val()):h=a,h==null?h="":typeof h=="number"?h+="":f.isArray(h)&&(h=f.map(h,function(a){return a==null?"":a+""})),c=f.valHooks[this.nodeName.toLowerCase()]||f.valHooks[this.type];if(!c||!("set"in c)||c.set(this,h,"value")===b)this.value=h}})}if(g){c=f.valHooks[g.nodeName.toLowerCase()]||f.valHooks[g.type];if(c&&"get"in c&&(d=c.get(g,"value"))!==b)return d;d=g.value;return typeof d=="string"?d.replace(q,""):d==null?"":d}}}}),f.extend({valHooks:{option:{get:function(a){var b=a.attributes.value;return!b||b.specified?a.value:a.text}},select:{get:function(a){var b,c,d,e,g=a.selectedIndex,h=[],i=a.options,j=a.type==="select-one";if(g<0)return null;c=j?g:0,d=j?g+1:i.length;for(;c<d;c++){e=i[c];if(e.selected&&(f.support.optDisabled?!e.disabled:e.getAttribute("disabled")===null)&&(!e.parentNode.disabled||!f.nodeName(e.parentNode,"optgroup"))){b=f(e).val();if(j)return b;h.push(b)}}if(j&&!h.length&&i.length)return f(i[g]).val();return h},set:function(a,b){var c=f.makeArray(b);f(a).find("option").each(function(){this.selected=f.inArray(f(this).val(),c)>=0}),c.length||(a.selectedIndex=-1);return c}}},attrFn:{val:!0,css:!0,html:!0,text:!0,data:!0,width:!0,height:!0,offset:!0},attr:function(a,c,d,e){var g,h,i,j=a.nodeType;if(!!a&&j!==3&&j!==8&&j!==2){if(e&&c in f.attrFn)return f(a)[c](d);if(typeof a.getAttribute=="undefined")return f.prop(a,c,d);i=j!==1||!f.isXMLDoc(a),i&&(c=c.toLowerCase(),h=f.attrHooks[c]||(u.test(c)?x:w));if(d!==b){if(d===null){f.removeAttr(a,c);return}if(h&&"set"in h&&i&&(g=h.set(a,d,c))!==b)return g;a.setAttribute(c,""+d);return d}if(h&&"get"in h&&i&&(g=h.get(a,c))!==null)return g;g=a.getAttribute(c);return g===null?b:g}},removeAttr:function(a,b){var c,d,e,g,h=0;if(b&&a.nodeType===1){d=b.toLowerCase().split(p),g=d.length;for(;h<g;h++)e=d[h],e&&(c=f.propFix[e]||e,f.attr(a,e,""),a.removeAttribute(v?e:c),u.test(e)&&c in a&&(a[c]=!1))}},attrHooks:{type:{set:function(a,b){if(r.test(a.nodeName)&&a.parentNode)f.error("type property can't be changed");else if(!f.support.radioValue&&b==="radio"&&f.nodeName(a,"input")){var c=a.value;a.setAttribute("type",b),c&&(a.value=c);return b}}},value:{get:function(a,b){if(w&&f.nodeName(a,"button"))return w.get(a,b);return b in a?a.value:null},set:function(a,b,c){if(w&&f.nodeName(a,"button"))return w.set(a,b,c);a.value=b}}},propFix:{tabindex:"tabIndex",readonly:"readOnly","for":"htmlFor","class":"className",maxlength:"maxLength",cellspacing:"cellSpacing",cellpadding:"cellPadding",rowspan:"rowSpan",colspan:"colSpan",usemap:"useMap",frameborder:"frameBorder",contenteditable:"contentEditable"},prop:function(a,c,d){var e,g,h,i=a.nodeType;if(!!a&&i!==3&&i!==8&&i!==2){h=i!==1||!f.isXMLDoc(a),h&&(c=f.propFix[c]||c,g=f.propHooks[c]);return d!==b?g&&"set"in g&&(e=g.set(a,d,c))!==b?e:a[c]=d:g&&"get"in g&&(e=g.get(a,c))!==null?e:a[c]}},propHooks:{tabIndex:{get:function(a){var c=a.getAttributeNode("tabindex");return c&&c.specified?parseInt(c.value,10):s.test(a.nodeName)||t.test(a.nodeName)&&a.href?0:b}}}}),f.attrHooks.tabindex=f.propHooks.tabIndex,x={get:function(a,c){var d,e=f.prop(a,c);return e===!0||typeof e!="boolean"&&(d=a.getAttributeNode(c))&&d.nodeValue!==!1?c.toLowerCase():b},set:function(a,b,c){var d;b===!1?f.removeAttr(a,c):(d=f.propFix[c]||c,d in a&&(a[d]=!0),a.setAttribute(c,c.toLowerCase()));return c}},v||(y={name:!0,id:!0},w=f.valHooks.button={get:function(a,c){var d;d=a.getAttributeNode(c);return d&&(y[c]?d.nodeValue!=="":d.specified)?d.nodeValue:b},set:function(a,b,d){var e=a.getAttributeNode(d);e||(e=c.createAttribute(d),a.setAttributeNode(e));return e.nodeValue=b+""}},f.attrHooks.tabindex.set=w.set,f.each(["width","height"],function(a,b){f.attrHooks[b]=f.extend(f.attrHooks[b],{set:function(a,c){if(c===""){a.setAttribute(b,"auto");return c}}})}),f.attrHooks.contenteditable={get:w.get,set:function(a,b,c){b===""&&(b="false"),w.set(a,b,c)}}),f.support.hrefNormalized||f.each(["href","src","width","height"],function(a,c){f.attrHooks[c]=f.extend(f.attrHooks[c],{get:function(a){var d=a.getAttribute(c,2);return d===null?b:d}})}),f.support.style||(f.attrHooks.style={get:function(a){return a.style.cssText.toLowerCase()||b},set:function(a,b){return a.style.cssText=""+b}}),f.support.optSelected||(f.propHooks.selected=f.extend(f.propHooks.selected,{get:function(a){var b=a.parentNode;b&&(b.selectedIndex,b.parentNode&&b.parentNode.selectedIndex);return null}})),f.support.enctype||(f.propFix.enctype="encoding"),f.support.checkOn||f.each(["radio","checkbox"],function(){f.valHooks[this]={get:function(a){return a.getAttribute("value")===null?"on":a.value}}}),f.each(["radio","checkbox"],function(){f.valHooks[this]=f.extend(f.valHooks[this],{set:function(a,b){if(f.isArray(b))return a.checked=f.inArray(f(a).val(),b)>=0}})});var z=/^(?:textarea|input|select)$/i,A=/^([^\.]*)?(?:\.(.+))?$/,B=/\bhover(\.\S+)?\b/,C=/^key/,D=/^(?:mouse|contextmenu)|click/,E=/^(?:focusinfocus|focusoutblur)$/,F=/^(\w*)(?:#([\w\-]+))?(?:\.([\w\-]+))?$/,G=function(a){var b=F.exec(a);b&&(b[1]=(b[1]||"").toLowerCase(),b[3]=b[3]&&new RegExp("(?:^|\\s)"+b[3]+"(?:\\s|$)"));return b},H=function(a,b){var c=a.attributes||{};return(!b[1]||a.nodeName.toLowerCase()===b[1])&&(!b[2]||(c.id||{}).value===b[2])&&(!b[3]||b[3].test((c["class"]||{}).value))},I=function(a){return f.event.special.hover?a:a.replace(B,"mouseenter$1 mouseleave$1")};
f.event={add:function(a,c,d,e,g){var h,i,j,k,l,m,n,o,p,q,r,s;if(!(a.nodeType===3||a.nodeType===8||!c||!d||!(h=f._data(a)))){d.handler&&(p=d,d=p.handler),d.guid||(d.guid=f.guid++),j=h.events,j||(h.events=j={}),i=h.handle,i||(h.handle=i=function(a){return typeof f!="undefined"&&(!a||f.event.triggered!==a.type)?f.event.dispatch.apply(i.elem,arguments):b},i.elem=a),c=f.trim(I(c)).split(" ");for(k=0;k<c.length;k++){l=A.exec(c[k])||[],m=l[1],n=(l[2]||"").split(".").sort(),s=f.event.special[m]||{},m=(g?s.delegateType:s.bindType)||m,s=f.event.special[m]||{},o=f.extend({type:m,origType:l[1],data:e,handler:d,guid:d.guid,selector:g,quick:G(g),namespace:n.join(".")},p),r=j[m];if(!r){r=j[m]=[],r.delegateCount=0;if(!s.setup||s.setup.call(a,e,n,i)===!1)a.addEventListener?a.addEventListener(m,i,!1):a.attachEvent&&a.attachEvent("on"+m,i)}s.add&&(s.add.call(a,o),o.handler.guid||(o.handler.guid=d.guid)),g?r.splice(r.delegateCount++,0,o):r.push(o),f.event.global[m]=!0}a=null}},global:{},remove:function(a,b,c,d,e){var g=f.hasData(a)&&f._data(a),h,i,j,k,l,m,n,o,p,q,r,s;if(!!g&&!!(o=g.events)){b=f.trim(I(b||"")).split(" ");for(h=0;h<b.length;h++){i=A.exec(b[h])||[],j=k=i[1],l=i[2];if(!j){for(j in o)f.event.remove(a,j+b[h],c,d,!0);continue}p=f.event.special[j]||{},j=(d?p.delegateType:p.bindType)||j,r=o[j]||[],m=r.length,l=l?new RegExp("(^|\\.)"+l.split(".").sort().join("\\.(?:.*\\.)?")+"(\\.|$)"):null;for(n=0;n<r.length;n++)s=r[n],(e||k===s.origType)&&(!c||c.guid===s.guid)&&(!l||l.test(s.namespace))&&(!d||d===s.selector||d==="**"&&s.selector)&&(r.splice(n--,1),s.selector&&r.delegateCount--,p.remove&&p.remove.call(a,s));r.length===0&&m!==r.length&&((!p.teardown||p.teardown.call(a,l)===!1)&&f.removeEvent(a,j,g.handle),delete o[j])}f.isEmptyObject(o)&&(q=g.handle,q&&(q.elem=null),f.removeData(a,["events","handle"],!0))}},customEvent:{getData:!0,setData:!0,changeData:!0},trigger:function(c,d,e,g){if(!e||e.nodeType!==3&&e.nodeType!==8){var h=c.type||c,i=[],j,k,l,m,n,o,p,q,r,s;if(E.test(h+f.event.triggered))return;h.indexOf("!")>=0&&(h=h.slice(0,-1),k=!0),h.indexOf(".")>=0&&(i=h.split("."),h=i.shift(),i.sort());if((!e||f.event.customEvent[h])&&!f.event.global[h])return;c=typeof c=="object"?c[f.expando]?c:new f.Event(h,c):new f.Event(h),c.type=h,c.isTrigger=!0,c.exclusive=k,c.namespace=i.join("."),c.namespace_re=c.namespace?new RegExp("(^|\\.)"+i.join("\\.(?:.*\\.)?")+"(\\.|$)"):null,o=h.indexOf(":")<0?"on"+h:"";if(!e){j=f.cache;for(l in j)j[l].events&&j[l].events[h]&&f.event.trigger(c,d,j[l].handle.elem,!0);return}c.result=b,c.target||(c.target=e),d=d!=null?f.makeArray(d):[],d.unshift(c),p=f.event.special[h]||{};if(p.trigger&&p.trigger.apply(e,d)===!1)return;r=[[e,p.bindType||h]];if(!g&&!p.noBubble&&!f.isWindow(e)){s=p.delegateType||h,m=E.test(s+h)?e:e.parentNode,n=null;for(;m;m=m.parentNode)r.push([m,s]),n=m;n&&n===e.ownerDocument&&r.push([n.defaultView||n.parentWindow||a,s])}for(l=0;l<r.length&&!c.isPropagationStopped();l++)m=r[l][0],c.type=r[l][1],q=(f._data(m,"events")||{})[c.type]&&f._data(m,"handle"),q&&q.apply(m,d),q=o&&m[o],q&&f.acceptData(m)&&q.apply(m,d)===!1&&c.preventDefault();c.type=h,!g&&!c.isDefaultPrevented()&&(!p._default||p._default.apply(e.ownerDocument,d)===!1)&&(h!=="click"||!f.nodeName(e,"a"))&&f.acceptData(e)&&o&&e[h]&&(h!=="focus"&&h!=="blur"||c.target.offsetWidth!==0)&&!f.isWindow(e)&&(n=e[o],n&&(e[o]=null),f.event.triggered=h,e[h](),f.event.triggered=b,n&&(e[o]=n));return c.result}},dispatch:function(c){c=f.event.fix(c||a.event);var d=(f._data(this,"events")||{})[c.type]||[],e=d.delegateCount,g=[].slice.call(arguments,0),h=!c.exclusive&&!c.namespace,i=[],j,k,l,m,n,o,p,q,r,s,t;g[0]=c,c.delegateTarget=this;if(e&&!c.target.disabled&&(!c.button||c.type!=="click")){m=f(this),m.context=this.ownerDocument||this;for(l=c.target;l!=this;l=l.parentNode||this){o={},q=[],m[0]=l;for(j=0;j<e;j++)r=d[j],s=r.selector,o[s]===b&&(o[s]=r.quick?H(l,r.quick):m.is(s)),o[s]&&q.push(r);q.length&&i.push({elem:l,matches:q})}}d.length>e&&i.push({elem:this,matches:d.slice(e)});for(j=0;j<i.length&&!c.isPropagationStopped();j++){p=i[j],c.currentTarget=p.elem;for(k=0;k<p.matches.length&&!c.isImmediatePropagationStopped();k++){r=p.matches[k];if(h||!c.namespace&&!r.namespace||c.namespace_re&&c.namespace_re.test(r.namespace))c.data=r.data,c.handleObj=r,n=((f.event.special[r.origType]||{}).handle||r.handler).apply(p.elem,g),n!==b&&(c.result=n,n===!1&&(c.preventDefault(),c.stopPropagation()))}}return c.result},props:"attrChange attrName relatedNode srcElement altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),fixHooks:{},keyHooks:{props:"char charCode key keyCode".split(" "),filter:function(a,b){a.which==null&&(a.which=b.charCode!=null?b.charCode:b.keyCode);return a}},mouseHooks:{props:"button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),filter:function(a,d){var e,f,g,h=d.button,i=d.fromElement;a.pageX==null&&d.clientX!=null&&(e=a.target.ownerDocument||c,f=e.documentElement,g=e.body,a.pageX=d.clientX+(f&&f.scrollLeft||g&&g.scrollLeft||0)-(f&&f.clientLeft||g&&g.clientLeft||0),a.pageY=d.clientY+(f&&f.scrollTop||g&&g.scrollTop||0)-(f&&f.clientTop||g&&g.clientTop||0)),!a.relatedTarget&&i&&(a.relatedTarget=i===a.target?d.toElement:i),!a.which&&h!==b&&(a.which=h&1?1:h&2?3:h&4?2:0);return a}},fix:function(a){if(a[f.expando])return a;var d,e,g=a,h=f.event.fixHooks[a.type]||{},i=h.props?this.props.concat(h.props):this.props;a=f.Event(g);for(d=i.length;d;)e=i[--d],a[e]=g[e];a.target||(a.target=g.srcElement||c),a.target.nodeType===3&&(a.target=a.target.parentNode),a.metaKey===b&&(a.metaKey=a.ctrlKey);return h.filter?h.filter(a,g):a},special:{ready:{setup:f.bindReady},load:{noBubble:!0},focus:{delegateType:"focusin"},blur:{delegateType:"focusout"},beforeunload:{setup:function(a,b,c){f.isWindow(this)&&(this.onbeforeunload=c)},teardown:function(a,b){this.onbeforeunload===b&&(this.onbeforeunload=null)}}},simulate:function(a,b,c,d){var e=f.extend(new f.Event,c,{type:a,isSimulated:!0,originalEvent:{}});d?f.event.trigger(e,null,b):f.event.dispatch.call(b,e),e.isDefaultPrevented()&&c.preventDefault()}},f.event.handle=f.event.dispatch,f.removeEvent=c.removeEventListener?function(a,b,c){a.removeEventListener&&a.removeEventListener(b,c,!1)}:function(a,b,c){a.detachEvent&&a.detachEvent("on"+b,c)},f.Event=function(a,b){if(!(this instanceof f.Event))return new f.Event(a,b);a&&a.type?(this.originalEvent=a,this.type=a.type,this.isDefaultPrevented=a.defaultPrevented||a.returnValue===!1||a.getPreventDefault&&a.getPreventDefault()?K:J):this.type=a,b&&f.extend(this,b),this.timeStamp=a&&a.timeStamp||f.now(),this[f.expando]=!0},f.Event.prototype={preventDefault:function(){this.isDefaultPrevented=K;var a=this.originalEvent;!a||(a.preventDefault?a.preventDefault():a.returnValue=!1)},stopPropagation:function(){this.isPropagationStopped=K;var a=this.originalEvent;!a||(a.stopPropagation&&a.stopPropagation(),a.cancelBubble=!0)},stopImmediatePropagation:function(){this.isImmediatePropagationStopped=K,this.stopPropagation()},isDefaultPrevented:J,isPropagationStopped:J,isImmediatePropagationStopped:J},f.each({mouseenter:"mouseover",mouseleave:"mouseout"},function(a,b){f.event.special[a]={delegateType:b,bindType:b,handle:function(a){var c=this,d=a.relatedTarget,e=a.handleObj,g=e.selector,h;if(!d||d!==c&&!f.contains(c,d))a.type=e.origType,h=e.handler.apply(this,arguments),a.type=b;return h}}}),f.support.submitBubbles||(f.event.special.submit={setup:function(){if(f.nodeName(this,"form"))return!1;f.event.add(this,"click._submit keypress._submit",function(a){var c=a.target,d=f.nodeName(c,"input")||f.nodeName(c,"button")?c.form:b;d&&!d._submit_attached&&(f.event.add(d,"submit._submit",function(a){this.parentNode&&!a.isTrigger&&f.event.simulate("submit",this.parentNode,a,!0)}),d._submit_attached=!0)})},teardown:function(){if(f.nodeName(this,"form"))return!1;f.event.remove(this,"._submit")}}),f.support.changeBubbles||(f.event.special.change={setup:function(){if(z.test(this.nodeName)){if(this.type==="checkbox"||this.type==="radio")f.event.add(this,"propertychange._change",function(a){a.originalEvent.propertyName==="checked"&&(this._just_changed=!0)}),f.event.add(this,"click._change",function(a){this._just_changed&&!a.isTrigger&&(this._just_changed=!1,f.event.simulate("change",this,a,!0))});return!1}f.event.add(this,"beforeactivate._change",function(a){var b=a.target;z.test(b.nodeName)&&!b._change_attached&&(f.event.add(b,"change._change",function(a){this.parentNode&&!a.isSimulated&&!a.isTrigger&&f.event.simulate("change",this.parentNode,a,!0)}),b._change_attached=!0)})},handle:function(a){var b=a.target;if(this!==b||a.isSimulated||a.isTrigger||b.type!=="radio"&&b.type!=="checkbox")return a.handleObj.handler.apply(this,arguments)},teardown:function(){f.event.remove(this,"._change");return z.test(this.nodeName)}}),f.support.focusinBubbles||f.each({focus:"focusin",blur:"focusout"},function(a,b){var d=0,e=function(a){f.event.simulate(b,a.target,f.event.fix(a),!0)};f.event.special[b]={setup:function(){d++===0&&c.addEventListener(a,e,!0)},teardown:function(){--d===0&&c.removeEventListener(a,e,!0)}}}),f.fn.extend({on:function(a,c,d,e,g){var h,i;if(typeof a=="object"){typeof c!="string"&&(d=c,c=b);for(i in a)this.on(i,c,d,a[i],g);return this}d==null&&e==null?(e=c,d=c=b):e==null&&(typeof c=="string"?(e=d,d=b):(e=d,d=c,c=b));if(e===!1)e=J;else if(!e)return this;g===1&&(h=e,e=function(a){f().off(a);return h.apply(this,arguments)},e.guid=h.guid||(h.guid=f.guid++));return this.each(function(){f.event.add(this,a,e,d,c)})},one:function(a,b,c,d){return this.on.call(this,a,b,c,d,1)},off:function(a,c,d){if(a&&a.preventDefault&&a.handleObj){var e=a.handleObj;f(a.delegateTarget).off(e.namespace?e.type+"."+e.namespace:e.type,e.selector,e.handler);return this}if(typeof a=="object"){for(var g in a)this.off(g,c,a[g]);return this}if(c===!1||typeof c=="function")d=c,c=b;d===!1&&(d=J);return this.each(function(){f.event.remove(this,a,d,c)})},bind:function(a,b,c){return this.on(a,null,b,c)},unbind:function(a,b){return this.off(a,null,b)},live:function(a,b,c){f(this.context).on(a,this.selector,b,c);return this},die:function(a,b){f(this.context).off(a,this.selector||"**",b);return this},delegate:function(a,b,c,d){return this.on(b,a,c,d)},undelegate:function(a,b,c){return arguments.length==1?this.off(a,"**"):this.off(b,a,c)},trigger:function(a,b){return this.each(function(){f.event.trigger(a,b,this)})},triggerHandler:function(a,b){if(this[0])return f.event.trigger(a,b,this[0],!0)},toggle:function(a){var b=arguments,c=a.guid||f.guid++,d=0,e=function(c){var e=(f._data(this,"lastToggle"+a.guid)||0)%d;f._data(this,"lastToggle"+a.guid,e+1),c.preventDefault();return b[e].apply(this,arguments)||!1};e.guid=c;while(d<b.length)b[d++].guid=c;return this.click(e)},hover:function(a,b){return this.mouseenter(a).mouseleave(b||a)}}),f.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),function(a,b){f.fn[b]=function(a,c){c==null&&(c=a,a=null);return arguments.length>0?this.on(b,null,a,c):this.trigger(b)},f.attrFn&&(f.attrFn[b]=!0),C.test(b)&&(f.event.fixHooks[b]=f.event.keyHooks),D.test(b)&&(f.event.fixHooks[b]=f.event.mouseHooks)}),function(){function x(a,b,c,e,f,g){for(var h=0,i=e.length;h<i;h++){var j=e[h];if(j){var k=!1;j=j[a];while(j){if(j[d]===c){k=e[j.sizset];break}if(j.nodeType===1){g||(j[d]=c,j.sizset=h);if(typeof b!="string"){if(j===b){k=!0;break}}else if(m.filter(b,[j]).length>0){k=j;break}}j=j[a]}e[h]=k}}}function w(a,b,c,e,f,g){for(var h=0,i=e.length;h<i;h++){var j=e[h];if(j){var k=!1;j=j[a];while(j){if(j[d]===c){k=e[j.sizset];break}j.nodeType===1&&!g&&(j[d]=c,j.sizset=h);if(j.nodeName.toLowerCase()===b){k=j;break}j=j[a]}e[h]=k}}}var a=/((?:\((?:\([^()]+\)|[^()]+)+\)|\[(?:\[[^\[\]]*\]|['"][^'"]*['"]|[^\[\]'"]+)+\]|\\.|[^ >+~,(\[\\]+)+|[>+~])(\s*,\s*)?((?:.|\r|\n)*)/g,d="sizcache"+(Math.random()+"").replace(".",""),e=0,g=Object.prototype.toString,h=!1,i=!0,j=/\\/g,k=/\r\n/g,l=/\W/;[0,0].sort(function(){i=!1;return 0});var m=function(b,d,e,f){e=e||[],d=d||c;var h=d;if(d.nodeType!==1&&d.nodeType!==9)return[];if(!b||typeof b!="string")return e;var i,j,k,l,n,q,r,t,u=!0,v=m.isXML(d),w=[],x=b;do{a.exec(""),i=a.exec(x);if(i){x=i[3],w.push(i[1]);if(i[2]){l=i[3];break}}}while(i);if(w.length>1&&p.exec(b))if(w.length===2&&o.relative[w[0]])j=y(w[0]+w[1],d,f);else{j=o.relative[w[0]]?[d]:m(w.shift(),d);while(w.length)b=w.shift(),o.relative[b]&&(b+=w.shift()),j=y(b,j,f)}else{!f&&w.length>1&&d.nodeType===9&&!v&&o.match.ID.test(w[0])&&!o.match.ID.test(w[w.length-1])&&(n=m.find(w.shift(),d,v),d=n.expr?m.filter(n.expr,n.set)[0]:n.set[0]);if(d){n=f?{expr:w.pop(),set:s(f)}:m.find(w.pop(),w.length===1&&(w[0]==="~"||w[0]==="+")&&d.parentNode?d.parentNode:d,v),j=n.expr?m.filter(n.expr,n.set):n.set,w.length>0?k=s(j):u=!1;while(w.length)q=w.pop(),r=q,o.relative[q]?r=w.pop():q="",r==null&&(r=d),o.relative[q](k,r,v)}else k=w=[]}k||(k=j),k||m.error(q||b);if(g.call(k)==="[object Array]")if(!u)e.push.apply(e,k);else if(d&&d.nodeType===1)for(t=0;k[t]!=null;t++)k[t]&&(k[t]===!0||k[t].nodeType===1&&m.contains(d,k[t]))&&e.push(j[t]);else for(t=0;k[t]!=null;t++)k[t]&&k[t].nodeType===1&&e.push(j[t]);else s(k,e);l&&(m(l,h,e,f),m.uniqueSort(e));return e};m.uniqueSort=function(a){if(u){h=i,a.sort(u);if(h)for(var b=1;b<a.length;b++)a[b]===a[b-1]&&a.splice(b--,1)}return a},m.matches=function(a,b){return m(a,null,null,b)},m.matchesSelector=function(a,b){return m(b,null,null,[a]).length>0},m.find=function(a,b,c){var d,e,f,g,h,i;if(!a)return[];for(e=0,f=o.order.length;e<f;e++){h=o.order[e];if(g=o.leftMatch[h].exec(a)){i=g[1],g.splice(1,1);if(i.substr(i.length-1)!=="\\"){g[1]=(g[1]||"").replace(j,""),d=o.find[h](g,b,c);if(d!=null){a=a.replace(o.match[h],"");break}}}}d||(d=typeof b.getElementsByTagName!="undefined"?b.getElementsByTagName("*"):[]);return{set:d,expr:a}},m.filter=function(a,c,d,e){var f,g,h,i,j,k,l,n,p,q=a,r=[],s=c,t=c&&c[0]&&m.isXML(c[0]);while(a&&c.length){for(h in o.filter)if((f=o.leftMatch[h].exec(a))!=null&&f[2]){k=o.filter[h],l=f[1],g=!1,f.splice(1,1);if(l.substr(l.length-1)==="\\")continue;s===r&&(r=[]);if(o.preFilter[h]){f=o.preFilter[h](f,s,d,r,e,t);if(!f)g=i=!0;else if(f===!0)continue}if(f)for(n=0;(j=s[n])!=null;n++)j&&(i=k(j,f,n,s),p=e^i,d&&i!=null?p?g=!0:s[n]=!1:p&&(r.push(j),g=!0));if(i!==b){d||(s=r),a=a.replace(o.match[h],"");if(!g)return[];break}}if(a===q)if(g==null)m.error(a);else break;q=a}return s},m.error=function(a){throw new Error("Syntax error, unrecognized expression: "+a)};var n=m.getText=function(a){var b,c,d=a.nodeType,e="";if(d){if(d===1||d===9){if(typeof a.textContent=="string")return a.textContent;if(typeof a.innerText=="string")return a.innerText.replace(k,"");for(a=a.firstChild;a;a=a.nextSibling)e+=n(a)}else if(d===3||d===4)return a.nodeValue}else for(b=0;c=a[b];b++)c.nodeType!==8&&(e+=n(c));return e},o=m.selectors={order:["ID","NAME","TAG"],match:{ID:/#((?:[\w\u00c0-\uFFFF\-]|\\.)+)/,CLASS:/\.((?:[\w\u00c0-\uFFFF\-]|\\.)+)/,NAME:/\[name=['"]*((?:[\w\u00c0-\uFFFF\-]|\\.)+)['"]*\]/,ATTR:/\[\s*((?:[\w\u00c0-\uFFFF\-]|\\.)+)\s*(?:(\S?=)\s*(?:(['"])(.*?)\3|(#?(?:[\w\u00c0-\uFFFF\-]|\\.)*)|)|)\s*\]/,TAG:/^((?:[\w\u00c0-\uFFFF\*\-]|\\.)+)/,CHILD:/:(only|nth|last|first)-child(?:\(\s*(even|odd|(?:[+\-]?\d+|(?:[+\-]?\d*)?n\s*(?:[+\-]\s*\d+)?))\s*\))?/,POS:/:(nth|eq|gt|lt|first|last|even|odd)(?:\((\d*)\))?(?=[^\-]|$)/,PSEUDO:/:((?:[\w\u00c0-\uFFFF\-]|\\.)+)(?:\((['"]?)((?:\([^\)]+\)|[^\(\)]*)+)\2\))?/},leftMatch:{},attrMap:{"class":"className","for":"htmlFor"},attrHandle:{href:function(a){return a.getAttribute("href")},type:function(a){return a.getAttribute("type")}},relative:{"+":function(a,b){var c=typeof b=="string",d=c&&!l.test(b),e=c&&!d;d&&(b=b.toLowerCase());for(var f=0,g=a.length,h;f<g;f++)if(h=a[f]){while((h=h.previousSibling)&&h.nodeType!==1);a[f]=e||h&&h.nodeName.toLowerCase()===b?h||!1:h===b}e&&m.filter(b,a,!0)},">":function(a,b){var c,d=typeof b=="string",e=0,f=a.length;if(d&&!l.test(b)){b=b.toLowerCase();for(;e<f;e++){c=a[e];if(c){var g=c.parentNode;a[e]=g.nodeName.toLowerCase()===b?g:!1}}}else{for(;e<f;e++)c=a[e],c&&(a[e]=d?c.parentNode:c.parentNode===b);d&&m.filter(b,a,!0)}},"":function(a,b,c){var d,f=e++,g=x;typeof b=="string"&&!l.test(b)&&(b=b.toLowerCase(),d=b,g=w),g("parentNode",b,f,a,d,c)},"~":function(a,b,c){var d,f=e++,g=x;typeof b=="string"&&!l.test(b)&&(b=b.toLowerCase(),d=b,g=w),g("previousSibling",b,f,a,d,c)}},find:{ID:function(a,b,c){if(typeof b.getElementById!="undefined"&&!c){var d=b.getElementById(a[1]);return d&&d.parentNode?[d]:[]}},NAME:function(a,b){if(typeof b.getElementsByName!="undefined"){var c=[],d=b.getElementsByName(a[1]);for(var e=0,f=d.length;e<f;e++)d[e].getAttribute("name")===a[1]&&c.push(d[e]);return c.length===0?null:c}},TAG:function(a,b){if(typeof b.getElementsByTagName!="undefined")return b.getElementsByTagName(a[1])}},preFilter:{CLASS:function(a,b,c,d,e,f){a=" "+a[1].replace(j,"")+" ";if(f)return a;for(var g=0,h;(h=b[g])!=null;g++)h&&(e^(h.className&&(" "+h.className+" ").replace(/[\t\n\r]/g," ").indexOf(a)>=0)?c||d.push(h):c&&(b[g]=!1));return!1},ID:function(a){return a[1].replace(j,"")},TAG:function(a,b){return a[1].replace(j,"").toLowerCase()},CHILD:function(a){if(a[1]==="nth"){a[2]||m.error(a[0]),a[2]=a[2].replace(/^\+|\s*/g,"");var b=/(-?)(\d*)(?:n([+\-]?\d*))?/.exec(a[2]==="even"&&"2n"||a[2]==="odd"&&"2n+1"||!/\D/.test(a[2])&&"0n+"+a[2]||a[2]);a[2]=b[1]+(b[2]||1)-0,a[3]=b[3]-0}else a[2]&&m.error(a[0]);a[0]=e++;return a},ATTR:function(a,b,c,d,e,f){var g=a[1]=a[1].replace(j,"");!f&&o.attrMap[g]&&(a[1]=o.attrMap[g]),a[4]=(a[4]||a[5]||"").replace(j,""),a[2]==="~="&&(a[4]=" "+a[4]+" ");return a},PSEUDO:function(b,c,d,e,f){if(b[1]==="not")if((a.exec(b[3])||"").length>1||/^\w/.test(b[3]))b[3]=m(b[3],null,null,c);else{var g=m.filter(b[3],c,d,!0^f);d||e.push.apply(e,g);return!1}else if(o.match.POS.test(b[0])||o.match.CHILD.test(b[0]))return!0;return b},POS:function(a){a.unshift(!0);return a}},filters:{enabled:function(a){return a.disabled===!1&&a.type!=="hidden"},disabled:function(a){return a.disabled===!0},checked:function(a){return a.checked===!0},selected:function(a){a.parentNode&&a.parentNode.selectedIndex;return a.selected===!0},parent:function(a){return!!a.firstChild},empty:function(a){return!a.firstChild},has:function(a,b,c){return!!m(c[3],a).length},header:function(a){return/h\d/i.test(a.nodeName)},text:function(a){var b=a.getAttribute("type"),c=a.type;return a.nodeName.toLowerCase()==="input"&&"text"===c&&(b===c||b===null)},radio:function(a){return a.nodeName.toLowerCase()==="input"&&"radio"===a.type},checkbox:function(a){return a.nodeName.toLowerCase()==="input"&&"checkbox"===a.type},file:function(a){return a.nodeName.toLowerCase()==="input"&&"file"===a.type},password:function(a){return a.nodeName.toLowerCase()==="input"&&"password"===a.type},submit:function(a){var b=a.nodeName.toLowerCase();return(b==="input"||b==="button")&&"submit"===a.type},image:function(a){return a.nodeName.toLowerCase()==="input"&&"image"===a.type},reset:function(a){var b=a.nodeName.toLowerCase();return(b==="input"||b==="button")&&"reset"===a.type},button:function(a){var b=a.nodeName.toLowerCase();return b==="input"&&"button"===a.type||b==="button"},input:function(a){return/input|select|textarea|button/i.test(a.nodeName)},focus:function(a){return a===a.ownerDocument.activeElement}},setFilters:{first:function(a,b){return b===0},last:function(a,b,c,d){return b===d.length-1},even:function(a,b){return b%2===0},odd:function(a,b){return b%2===1},lt:function(a,b,c){return b<c[3]-0},gt:function(a,b,c){return b>c[3]-0},nth:function(a,b,c){return c[3]-0===b},eq:function(a,b,c){return c[3]-0===b}},filter:{PSEUDO:function(a,b,c,d){var e=b[1],f=o.filters[e];if(f)return f(a,c,b,d);if(e==="contains")return(a.textContent||a.innerText||n([a])||"").indexOf(b[3])>=0;if(e==="not"){var g=b[3];for(var h=0,i=g.length;h<i;h++)if(g[h]===a)return!1;return!0}m.error(e)},CHILD:function(a,b){var c,e,f,g,h,i,j,k=b[1],l=a;switch(k){case"only":case"first":while(l=l.previousSibling)if(l.nodeType===1)return!1;if(k==="first")return!0;l=a;case"last":while(l=l.nextSibling)if(l.nodeType===1)return!1;return!0;case"nth":c=b[2],e=b[3];if(c===1&&e===0)return!0;f=b[0],g=a.parentNode;if(g&&(g[d]!==f||!a.nodeIndex)){i=0;for(l=g.firstChild;l;l=l.nextSibling)l.nodeType===1&&(l.nodeIndex=++i);g[d]=f}j=a.nodeIndex-e;return c===0?j===0:j%c===0&&j/c>=0}},ID:function(a,b){return a.nodeType===1&&a.getAttribute("id")===b},TAG:function(a,b){return b==="*"&&a.nodeType===1||!!a.nodeName&&a.nodeName.toLowerCase()===b},CLASS:function(a,b){return(" "+(a.className||a.getAttribute("class"))+" ").indexOf(b)>-1},ATTR:function(a,b){var c=b[1],d=m.attr?m.attr(a,c):o.attrHandle[c]?o.attrHandle[c](a):a[c]!=null?a[c]:a.getAttribute(c),e=d+"",f=b[2],g=b[4];return d==null?f==="!=":!f&&m.attr?d!=null:f==="="?e===g:f==="*="?e.indexOf(g)>=0:f==="~="?(" "+e+" ").indexOf(g)>=0:g?f==="!="?e!==g:f==="^="?e.indexOf(g)===0:f==="$="?e.substr(e.length-g.length)===g:f==="|="?e===g||e.substr(0,g.length+1)===g+"-":!1:e&&d!==!1},POS:function(a,b,c,d){var e=b[2],f=o.setFilters[e];if(f)return f(a,c,b,d)}}},p=o.match.POS,q=function(a,b){return"\\"+(b-0+1)};for(var r in o.match)o.match[r]=new RegExp(o.match[r].source+/(?![^\[]*\])(?![^\(]*\))/.source),o.leftMatch[r]=new RegExp(/(^(?:.|\r|\n)*?)/.source+o.match[r].source.replace(/\\(\d+)/g,q));var s=function(a,b){a=Array.prototype.slice.call(a,0);if(b){b.push.apply(b,a);return b}return a};try{Array.prototype.slice.call(c.documentElement.childNodes,0)[0].nodeType}catch(t){s=function(a,b){var c=0,d=b||[];if(g.call(a)==="[object Array]")Array.prototype.push.apply(d,a);else if(typeof a.length=="number")for(var e=a.length;c<e;c++)d.push(a[c]);else for(;a[c];c++)d.push(a[c]);return d}}var u,v;c.documentElement.compareDocumentPosition?u=function(a,b){if(a===b){h=!0;return 0}if(!a.compareDocumentPosition||!b.compareDocumentPosition)return a.compareDocumentPosition?-1:1;return a.compareDocumentPosition(b)&4?-1:1}:(u=function(a,b){if(a===b){h=!0;return 0}if(a.sourceIndex&&b.sourceIndex)return a.sourceIndex-b.sourceIndex;var c,d,e=[],f=[],g=a.parentNode,i=b.parentNode,j=g;if(g===i)return v(a,b);if(!g)return-1;if(!i)return 1;while(j)e.unshift(j),j=j.parentNode;j=i;while(j)f.unshift(j),j=j.parentNode;c=e.length,d=f.length;for(var k=0;k<c&&k<d;k++)if(e[k]!==f[k])return v(e[k],f[k]);return k===c?v(a,f[k],-1):v(e[k],b,1)},v=function(a,b,c){if(a===b)return c;var d=a.nextSibling;while(d){if(d===b)return-1;d=d.nextSibling}return 1}),function(){var a=c.createElement("div"),d="script"+(new Date).getTime(),e=c.documentElement;a.innerHTML="<a name='"+d+"'/>",e.insertBefore(a,e.firstChild),c.getElementById(d)&&(o.find.ID=function(a,c,d){if(typeof c.getElementById!="undefined"&&!d){var e=c.getElementById(a[1]);return e?e.id===a[1]||typeof e.getAttributeNode!="undefined"&&e.getAttributeNode("id").nodeValue===a[1]?[e]:b:[]}},o.filter.ID=function(a,b){var c=typeof a.getAttributeNode!="undefined"&&a.getAttributeNode("id");return a.nodeType===1&&c&&c.nodeValue===b}),e.removeChild(a),e=a=null}(),function(){var a=c.createElement("div");a.appendChild(c.createComment("")),a.getElementsByTagName("*").length>0&&(o.find.TAG=function(a,b){var c=b.getElementsByTagName(a[1]);if(a[1]==="*"){var d=[];for(var e=0;c[e];e++)c[e].nodeType===1&&d.push(c[e]);c=d}return c}),a.innerHTML="<a href='#'></a>",a.firstChild&&typeof a.firstChild.getAttribute!="undefined"&&a.firstChild.getAttribute("href")!=="#"&&(o.attrHandle.href=function(a){return a.getAttribute("href",2)}),a=null}(),c.querySelectorAll&&function(){var a=m,b=c.createElement("div"),d="__sizzle__";b.innerHTML="<p class='TEST'></p>";if(!b.querySelectorAll||b.querySelectorAll(".TEST").length!==0){m=function(b,e,f,g){e=e||c;if(!g&&!m.isXML(e)){var h=/^(\w+$)|^\.([\w\-]+$)|^#([\w\-]+$)/.exec(b);if(h&&(e.nodeType===1||e.nodeType===9)){if(h[1])return s(e.getElementsByTagName(b),f);if(h[2]&&o.find.CLASS&&e.getElementsByClassName)return s(e.getElementsByClassName(h[2]),f)}if(e.nodeType===9){if(b==="body"&&e.body)return s([e.body],f);if(h&&h[3]){var i=e.getElementById(h[3]);if(!i||!i.parentNode)return s([],f);if(i.id===h[3])return s([i],f)}try{return s(e.querySelectorAll(b),f)}catch(j){}}else if(e.nodeType===1&&e.nodeName.toLowerCase()!=="object"){var k=e,l=e.getAttribute("id"),n=l||d,p=e.parentNode,q=/^\s*[+~]/.test(b);l?n=n.replace(/'/g,"\\$&"):e.setAttribute("id",n),q&&p&&(e=e.parentNode);try{if(!q||p)return s(e.querySelectorAll("[id='"+n+"'] "+b),f)}catch(r){}finally{l||k.removeAttribute("id")}}}return a(b,e,f,g)};for(var e in a)m[e]=a[e];b=null}}(),function(){var a=c.documentElement,b=a.matchesSelector||a.mozMatchesSelector||a.webkitMatchesSelector||a.msMatchesSelector;if(b){var d=!b.call(c.createElement("div"),"div"),e=!1;try{b.call(c.documentElement,"[test!='']:sizzle")}catch(f){e=!0}m.matchesSelector=function(a,c){c=c.replace(/\=\s*([^'"\]]*)\s*\]/g,"='$1']");if(!m.isXML(a))try{if(e||!o.match.PSEUDO.test(c)&&!/!=/.test(c)){var f=b.call(a,c);if(f||!d||a.document&&a.document.nodeType!==11)return f}}catch(g){}return m(c,null,null,[a]).length>0}}}(),function(){var a=c.createElement("div");a.innerHTML="<div class='test e'></div><div class='test'></div>";if(!!a.getElementsByClassName&&a.getElementsByClassName("e").length!==0){a.lastChild.className="e";if(a.getElementsByClassName("e").length===1)return;o.order.splice(1,0,"CLASS"),o.find.CLASS=function(a,b,c){if(typeof b.getElementsByClassName!="undefined"&&!c)return b.getElementsByClassName(a[1])},a=null}}(),c.documentElement.contains?m.contains=function(a,b){return a!==b&&(a.contains?a.contains(b):!0)}:c.documentElement.compareDocumentPosition?m.contains=function(a,b){return!!(a.compareDocumentPosition(b)&16)}:m.contains=function(){return!1},m.isXML=function(a){var b=(a?a.ownerDocument||a:0).documentElement;return b?b.nodeName!=="HTML":!1};var y=function(a,b,c){var d,e=[],f="",g=b.nodeType?[b]:b;while(d=o.match.PSEUDO.exec(a))f+=d[0],a=a.replace(o.match.PSEUDO,"");a=o.relative[a]?a+"*":a;for(var h=0,i=g.length;h<i;h++)m(a,g[h],e,c);return m.filter(f,e)};m.attr=f.attr,m.selectors.attrMap={},f.find=m,f.expr=m.selectors,f.expr[":"]=f.expr.filters,f.unique=m.uniqueSort,f.text=m.getText,f.isXMLDoc=m.isXML,f.contains=m.contains}();var L=/Until$/,M=/^(?:parents|prevUntil|prevAll)/,N=/,/,O=/^.[^:#\[\.,]*$/,P=Array.prototype.slice,Q=f.expr.match.POS,R={children:!0,contents:!0,next:!0,prev:!0};f.fn.extend({find:function(a){var b=this,c,d;if(typeof a!="string")return f(a).filter(function(){for(c=0,d=b.length;c<d;c++)if(f.contains(b[c],this))return!0});var e=this.pushStack("","find",a),g,h,i;for(c=0,d=this.length;c<d;c++){g=e.length,f.find(a,this[c],e);if(c>0)for(h=g;h<e.length;h++)for(i=0;i<g;i++)if(e[i]===e[h]){e.splice(h--,1);break}}return e},has:function(a){var b=f(a);return this.filter(function(){for(var a=0,c=b.length;a<c;a++)if(f.contains(this,b[a]))return!0})},not:function(a){return this.pushStack(T(this,a,!1),"not",a)},filter:function(a){return this.pushStack(T(this,a,!0),"filter",a)},is:function(a){return!!a&&(typeof a=="string"?Q.test(a)?f(a,this.context).index(this[0])>=0:f.filter(a,this).length>0:this.filter(a).length>0)},closest:function(a,b){var c=[],d,e,g=this[0];if(f.isArray(a)){var h=1;while(g&&g.ownerDocument&&g!==b){for(d=0;d<a.length;d++)f(g).is(a[d])&&c.push({selector:a[d],elem:g,level:h});g=g.parentNode,h++}return c}var i=Q.test(a)||typeof a!="string"?f(a,b||this.context):0;for(d=0,e=this.length;d<e;d++){g=this[d];while(g){if(i?i.index(g)>-1:f.find.matchesSelector(g,a)){c.push(g);break}g=g.parentNode;if(!g||!g.ownerDocument||g===b||g.nodeType===11)break}}c=c.length>1?f.unique(c):c;return this.pushStack(c,"closest",a)},index:function(a){if(!a)return this[0]&&this[0].parentNode?this.prevAll().length:-1;if(typeof a=="string")return f.inArray(this[0],f(a));return f.inArray(a.jquery?a[0]:a,this)},add:function(a,b){var c=typeof a=="string"?f(a,b):f.makeArray(a&&a.nodeType?[a]:a),d=f.merge(this.get(),c);return this.pushStack(S(c[0])||S(d[0])?d:f.unique(d))},andSelf:function(){return this.add(this.prevObject)}}),f.each({parent:function(a){var b=a.parentNode;return b&&b.nodeType!==11?b:null},parents:function(a){return f.dir(a,"parentNode")},parentsUntil:function(a,b,c){return f.dir(a,"parentNode",c)},next:function(a){return f.nth(a,2,"nextSibling")},prev:function(a){return f.nth(a,2,"previousSibling")},nextAll:function(a){return f.dir(a,"nextSibling")},prevAll:function(a){return f.dir(a,"previousSibling")},nextUntil:function(a,b,c){return f.dir(a,"nextSibling",c)},prevUntil:function(a,b,c){return f.dir(a,"previousSibling",c)},siblings:function(a){return f.sibling(a.parentNode.firstChild,a)},children:function(a){return f.sibling(a.firstChild)},contents:function(a){return f.nodeName(a,"iframe")?a.contentDocument||a.contentWindow.document:f.makeArray(a.childNodes)}},function(a,b){f.fn[a]=function(c,d){var e=f.map(this,b,c);L.test(a)||(d=c),d&&typeof d=="string"&&(e=f.filter(d,e)),e=this.length>1&&!R[a]?f.unique(e):e,(this.length>1||N.test(d))&&M.test(a)&&(e=e.reverse());return this.pushStack(e,a,P.call(arguments).join(","))}}),f.extend({filter:function(a,b,c){c&&(a=":not("+a+")");return b.length===1?f.find.matchesSelector(b[0],a)?[b[0]]:[]:f.find.matches(a,b)},dir:function(a,c,d){var e=[],g=a[c];while(g&&g.nodeType!==9&&(d===b||g.nodeType!==1||!f(g).is(d)))g.nodeType===1&&e.push(g),g=g[c];return e},nth:function(a,b,c,d){b=b||1;var e=0;for(;a;a=a[c])if(a.nodeType===1&&++e===b)break;return a},sibling:function(a,b){var c=[];for(;a;a=a.nextSibling)a.nodeType===1&&a!==b&&c.push(a);return c}});var V="abbr|article|aside|audio|canvas|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",W=/ jQuery\d+="(?:\d+|null)"/g,X=/^\s+/,Y=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/ig,Z=/<([\w:]+)/,$=/<tbody/i,_=/<|&#?\w+;/,ba=/<(?:script|style)/i,bb=/<(?:script|object|embed|option|style)/i,bc=new RegExp("<(?:"+V+")","i"),bd=/checked\s*(?:[^=]|=\s*.checked.)/i,be=/\/(java|ecma)script/i,bf=/^\s*<!(?:\[CDATA\[|\-\-)/,bg={option:[1,"<select multiple='multiple'>","</select>"],legend:[1,"<fieldset>","</fieldset>"],thead:[1,"<table>","</table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],col:[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"],area:[1,"<map>","</map>"],_default:[0,"",""]},bh=U(c);bg.optgroup=bg.option,bg.tbody=bg.tfoot=bg.colgroup=bg.caption=bg.thead,bg.th=bg.td,f.support.htmlSerialize||(bg._default=[1,"div<div>","</div>"]),f.fn.extend({text:function(a){if(f.isFunction(a))return this.each(function(b){var c=f(this);c.text(a.call(this,b,c.text()))});if(typeof a!="object"&&a!==b)return this.empty().append((this[0]&&this[0].ownerDocument||c).createTextNode(a));return f.text(this)},wrapAll:function(a){if(f.isFunction(a))return this.each(function(b){f(this).wrapAll(a.call(this,b))});if(this[0]){var b=f(a,this[0].ownerDocument).eq(0).clone(!0);this[0].parentNode&&b.insertBefore(this[0]),b.map(function(){var a=this;while(a.firstChild&&a.firstChild.nodeType===1)a=a.firstChild;return a}).append(this)}return this},wrapInner:function(a){if(f.isFunction(a))return this.each(function(b){f(this).wrapInner(a.call(this,b))});return this.each(function(){var b=f(this),c=b.contents();c.length?c.wrapAll(a):b.append(a)})},wrap:function(a){var b=f.isFunction(a);return this.each(function(c){f(this).wrapAll(b?a.call(this,c):a)})},unwrap:function(){return this.parent().each(function(){f.nodeName(this,"body")||f(this).replaceWith(this.childNodes)}).end()},append:function(){return this.domManip(arguments,!0,function(a){this.nodeType===1&&this.appendChild(a)})},prepend:function(){return this.domManip(arguments,!0,function(a){this.nodeType===1&&this.insertBefore(a,this.firstChild)})},before:function(){if(this[0]&&this[0].parentNode)return this.domManip(arguments,!1,function(a){this.parentNode.insertBefore(a,this)});if(arguments.length){var a=f.clean(arguments);a.push.apply(a,this.toArray());return this.pushStack(a,"before",arguments)}},after:function(){if(this[0]&&this[0].parentNode)return this.domManip(arguments,!1,function(a){this.parentNode.insertBefore(a,this.nextSibling)});if(arguments.length){var a=this.pushStack(this,"after",arguments);a.push.apply(a,f.clean(arguments));return a}},remove:function(a,b){for(var c=0,d;(d=this[c])!=null;c++)if(!a||f.filter(a,[d]).length)!b&&d.nodeType===1&&(f.cleanData(d.getElementsByTagName("*")),f.cleanData([d])),d.parentNode&&d.parentNode.removeChild(d);return this},empty:function()
{for(var a=0,b;(b=this[a])!=null;a++){b.nodeType===1&&f.cleanData(b.getElementsByTagName("*"));while(b.firstChild)b.removeChild(b.firstChild)}return this},clone:function(a,b){a=a==null?!1:a,b=b==null?a:b;return this.map(function(){return f.clone(this,a,b)})},html:function(a){if(a===b)return this[0]&&this[0].nodeType===1?this[0].innerHTML.replace(W,""):null;if(typeof a=="string"&&!ba.test(a)&&(f.support.leadingWhitespace||!X.test(a))&&!bg[(Z.exec(a)||["",""])[1].toLowerCase()]){a=a.replace(Y,"<$1></$2>");try{for(var c=0,d=this.length;c<d;c++)this[c].nodeType===1&&(f.cleanData(this[c].getElementsByTagName("*")),this[c].innerHTML=a)}catch(e){this.empty().append(a)}}else f.isFunction(a)?this.each(function(b){var c=f(this);c.html(a.call(this,b,c.html()))}):this.empty().append(a);return this},replaceWith:function(a){if(this[0]&&this[0].parentNode){if(f.isFunction(a))return this.each(function(b){var c=f(this),d=c.html();c.replaceWith(a.call(this,b,d))});typeof a!="string"&&(a=f(a).detach());return this.each(function(){var b=this.nextSibling,c=this.parentNode;f(this).remove(),b?f(b).before(a):f(c).append(a)})}return this.length?this.pushStack(f(f.isFunction(a)?a():a),"replaceWith",a):this},detach:function(a){return this.remove(a,!0)},domManip:function(a,c,d){var e,g,h,i,j=a[0],k=[];if(!f.support.checkClone&&arguments.length===3&&typeof j=="string"&&bd.test(j))return this.each(function(){f(this).domManip(a,c,d,!0)});if(f.isFunction(j))return this.each(function(e){var g=f(this);a[0]=j.call(this,e,c?g.html():b),g.domManip(a,c,d)});if(this[0]){i=j&&j.parentNode,f.support.parentNode&&i&&i.nodeType===11&&i.childNodes.length===this.length?e={fragment:i}:e=f.buildFragment(a,this,k),h=e.fragment,h.childNodes.length===1?g=h=h.firstChild:g=h.firstChild;if(g){c=c&&f.nodeName(g,"tr");for(var l=0,m=this.length,n=m-1;l<m;l++)d.call(c?bi(this[l],g):this[l],e.cacheable||m>1&&l<n?f.clone(h,!0,!0):h)}k.length&&f.each(k,bp)}return this}}),f.buildFragment=function(a,b,d){var e,g,h,i,j=a[0];b&&b[0]&&(i=b[0].ownerDocument||b[0]),i.createDocumentFragment||(i=c),a.length===1&&typeof j=="string"&&j.length<512&&i===c&&j.charAt(0)==="<"&&!bb.test(j)&&(f.support.checkClone||!bd.test(j))&&(f.support.html5Clone||!bc.test(j))&&(g=!0,h=f.fragments[j],h&&h!==1&&(e=h)),e||(e=i.createDocumentFragment(),f.clean(a,i,e,d)),g&&(f.fragments[j]=h?e:1);return{fragment:e,cacheable:g}},f.fragments={},f.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(a,b){f.fn[a]=function(c){var d=[],e=f(c),g=this.length===1&&this[0].parentNode;if(g&&g.nodeType===11&&g.childNodes.length===1&&e.length===1){e[b](this[0]);return this}for(var h=0,i=e.length;h<i;h++){var j=(h>0?this.clone(!0):this).get();f(e[h])[b](j),d=d.concat(j)}return this.pushStack(d,a,e.selector)}}),f.extend({clone:function(a,b,c){var d,e,g,h=f.support.html5Clone||!bc.test("<"+a.nodeName)?a.cloneNode(!0):bo(a);if((!f.support.noCloneEvent||!f.support.noCloneChecked)&&(a.nodeType===1||a.nodeType===11)&&!f.isXMLDoc(a)){bk(a,h),d=bl(a),e=bl(h);for(g=0;d[g];++g)e[g]&&bk(d[g],e[g])}if(b){bj(a,h);if(c){d=bl(a),e=bl(h);for(g=0;d[g];++g)bj(d[g],e[g])}}d=e=null;return h},clean:function(a,b,d,e){var g;b=b||c,typeof b.createElement=="undefined"&&(b=b.ownerDocument||b[0]&&b[0].ownerDocument||c);var h=[],i;for(var j=0,k;(k=a[j])!=null;j++){typeof k=="number"&&(k+="");if(!k)continue;if(typeof k=="string")if(!_.test(k))k=b.createTextNode(k);else{k=k.replace(Y,"<$1></$2>");var l=(Z.exec(k)||["",""])[1].toLowerCase(),m=bg[l]||bg._default,n=m[0],o=b.createElement("div");b===c?bh.appendChild(o):U(b).appendChild(o),o.innerHTML=m[1]+k+m[2];while(n--)o=o.lastChild;if(!f.support.tbody){var p=$.test(k),q=l==="table"&&!p?o.firstChild&&o.firstChild.childNodes:m[1]==="<table>"&&!p?o.childNodes:[];for(i=q.length-1;i>=0;--i)f.nodeName(q[i],"tbody")&&!q[i].childNodes.length&&q[i].parentNode.removeChild(q[i])}!f.support.leadingWhitespace&&X.test(k)&&o.insertBefore(b.createTextNode(X.exec(k)[0]),o.firstChild),k=o.childNodes}var r;if(!f.support.appendChecked)if(k[0]&&typeof (r=k.length)=="number")for(i=0;i<r;i++)bn(k[i]);else bn(k);k.nodeType?h.push(k):h=f.merge(h,k)}if(d){g=function(a){return!a.type||be.test(a.type)};for(j=0;h[j];j++)if(e&&f.nodeName(h[j],"script")&&(!h[j].type||h[j].type.toLowerCase()==="text/javascript"))e.push(h[j].parentNode?h[j].parentNode.removeChild(h[j]):h[j]);else{if(h[j].nodeType===1){var s=f.grep(h[j].getElementsByTagName("script"),g);h.splice.apply(h,[j+1,0].concat(s))}d.appendChild(h[j])}}return h},cleanData:function(a){var b,c,d=f.cache,e=f.event.special,g=f.support.deleteExpando;for(var h=0,i;(i=a[h])!=null;h++){if(i.nodeName&&f.noData[i.nodeName.toLowerCase()])continue;c=i[f.expando];if(c){b=d[c];if(b&&b.events){for(var j in b.events)e[j]?f.event.remove(i,j):f.removeEvent(i,j,b.handle);b.handle&&(b.handle.elem=null)}g?delete i[f.expando]:i.removeAttribute&&i.removeAttribute(f.expando),delete d[c]}}}});var bq=/alpha\([^)]*\)/i,br=/opacity=([^)]*)/,bs=/([A-Z]|^ms)/g,bt=/^-?\d+(?:px)?$/i,bu=/^-?\d/,bv=/^([\-+])=([\-+.\de]+)/,bw={position:"absolute",visibility:"hidden",display:"block"},bx=["Left","Right"],by=["Top","Bottom"],bz,bA,bB;f.fn.css=function(a,c){if(arguments.length===2&&c===b)return this;return f.access(this,a,c,!0,function(a,c,d){return d!==b?f.style(a,c,d):f.css(a,c)})},f.extend({cssHooks:{opacity:{get:function(a,b){if(b){var c=bz(a,"opacity","opacity");return c===""?"1":c}return a.style.opacity}}},cssNumber:{fillOpacity:!0,fontWeight:!0,lineHeight:!0,opacity:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":f.support.cssFloat?"cssFloat":"styleFloat"},style:function(a,c,d,e){if(!!a&&a.nodeType!==3&&a.nodeType!==8&&!!a.style){var g,h,i=f.camelCase(c),j=a.style,k=f.cssHooks[i];c=f.cssProps[i]||i;if(d===b){if(k&&"get"in k&&(g=k.get(a,!1,e))!==b)return g;return j[c]}h=typeof d,h==="string"&&(g=bv.exec(d))&&(d=+(g[1]+1)*+g[2]+parseFloat(f.css(a,c)),h="number");if(d==null||h==="number"&&isNaN(d))return;h==="number"&&!f.cssNumber[i]&&(d+="px");if(!k||!("set"in k)||(d=k.set(a,d))!==b)try{j[c]=d}catch(l){}}},css:function(a,c,d){var e,g;c=f.camelCase(c),g=f.cssHooks[c],c=f.cssProps[c]||c,c==="cssFloat"&&(c="float");if(g&&"get"in g&&(e=g.get(a,!0,d))!==b)return e;if(bz)return bz(a,c)},swap:function(a,b,c){var d={};for(var e in b)d[e]=a.style[e],a.style[e]=b[e];c.call(a);for(e in b)a.style[e]=d[e]}}),f.curCSS=f.css,f.each(["height","width"],function(a,b){f.cssHooks[b]={get:function(a,c,d){var e;if(c){if(a.offsetWidth!==0)return bC(a,b,d);f.swap(a,bw,function(){e=bC(a,b,d)});return e}},set:function(a,b){if(!bt.test(b))return b;b=parseFloat(b);if(b>=0)return b+"px"}}}),f.support.opacity||(f.cssHooks.opacity={get:function(a,b){return br.test((b&&a.currentStyle?a.currentStyle.filter:a.style.filter)||"")?parseFloat(RegExp.$1)/100+"":b?"1":""},set:function(a,b){var c=a.style,d=a.currentStyle,e=f.isNumeric(b)?"alpha(opacity="+b*100+")":"",g=d&&d.filter||c.filter||"";c.zoom=1;if(b>=1&&f.trim(g.replace(bq,""))===""){c.removeAttribute("filter");if(d&&!d.filter)return}c.filter=bq.test(g)?g.replace(bq,e):g+" "+e}}),f(function(){f.support.reliableMarginRight||(f.cssHooks.marginRight={get:function(a,b){var c;f.swap(a,{display:"inline-block"},function(){b?c=bz(a,"margin-right","marginRight"):c=a.style.marginRight});return c}})}),c.defaultView&&c.defaultView.getComputedStyle&&(bA=function(a,b){var c,d,e;b=b.replace(bs,"-$1").toLowerCase(),(d=a.ownerDocument.defaultView)&&(e=d.getComputedStyle(a,null))&&(c=e.getPropertyValue(b),c===""&&!f.contains(a.ownerDocument.documentElement,a)&&(c=f.style(a,b)));return c}),c.documentElement.currentStyle&&(bB=function(a,b){var c,d,e,f=a.currentStyle&&a.currentStyle[b],g=a.style;f===null&&g&&(e=g[b])&&(f=e),!bt.test(f)&&bu.test(f)&&(c=g.left,d=a.runtimeStyle&&a.runtimeStyle.left,d&&(a.runtimeStyle.left=a.currentStyle.left),g.left=b==="fontSize"?"1em":f||0,f=g.pixelLeft+"px",g.left=c,d&&(a.runtimeStyle.left=d));return f===""?"auto":f}),bz=bA||bB,f.expr&&f.expr.filters&&(f.expr.filters.hidden=function(a){var b=a.offsetWidth,c=a.offsetHeight;return b===0&&c===0||!f.support.reliableHiddenOffsets&&(a.style&&a.style.display||f.css(a,"display"))==="none"},f.expr.filters.visible=function(a){return!f.expr.filters.hidden(a)});var bD=/%20/g,bE=/\[\]$/,bF=/\r?\n/g,bG=/#.*$/,bH=/^(.*?):[ \t]*([^\r\n]*)\r?$/mg,bI=/^(?:color|date|datetime|datetime-local|email|hidden|month|number|password|range|search|tel|text|time|url|week)$/i,bJ=/^(?:about|app|app\-storage|.+\-extension|file|res|widget):$/,bK=/^(?:GET|HEAD)$/,bL=/^\/\//,bM=/\?/,bN=/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi,bO=/^(?:select|textarea)/i,bP=/\s+/,bQ=/([?&])_=[^&]*/,bR=/^([\w\+\.\-]+:)(?:\/\/([^\/?#:]*)(?::(\d+))?)?/,bS=f.fn.load,bT={},bU={},bV,bW,bX=["*/"]+["*"];try{bV=e.href}catch(bY){bV=c.createElement("a"),bV.href="",bV=bV.href}bW=bR.exec(bV.toLowerCase())||[],f.fn.extend({load:function(a,c,d){if(typeof a!="string"&&bS)return bS.apply(this,arguments);if(!this.length)return this;var e=a.indexOf(" ");if(e>=0){var g=a.slice(e,a.length);a=a.slice(0,e)}var h="GET";c&&(f.isFunction(c)?(d=c,c=b):typeof c=="object"&&(c=f.param(c,f.ajaxSettings.traditional),h="POST"));var i=this;f.ajax({url:a,type:h,dataType:"html",data:c,complete:function(a,b,c){c=a.responseText,a.isResolved()&&(a.done(function(a){c=a}),i.html(g?f("<div>").append(c.replace(bN,"")).find(g):c)),d&&i.each(d,[c,b,a])}});return this},serialize:function(){return f.param(this.serializeArray())},serializeArray:function(){return this.map(function(){return this.elements?f.makeArray(this.elements):this}).filter(function(){return this.name&&!this.disabled&&(this.checked||bO.test(this.nodeName)||bI.test(this.type))}).map(function(a,b){var c=f(this).val();return c==null?null:f.isArray(c)?f.map(c,function(a,c){return{name:b.name,value:a.replace(bF,"\r\n")}}):{name:b.name,value:c.replace(bF,"\r\n")}}).get()}}),f.each("ajaxStart ajaxStop ajaxComplete ajaxError ajaxSuccess ajaxSend".split(" "),function(a,b){f.fn[b]=function(a){return this.on(b,a)}}),f.each(["get","post"],function(a,c){f[c]=function(a,d,e,g){f.isFunction(d)&&(g=g||e,e=d,d=b);return f.ajax({type:c,url:a,data:d,success:e,dataType:g})}}),f.extend({getScript:function(a,c){return f.get(a,b,c,"script")},getJSON:function(a,b,c){return f.get(a,b,c,"json")},ajaxSetup:function(a,b){b?b_(a,f.ajaxSettings):(b=a,a=f.ajaxSettings),b_(a,b);return a},ajaxSettings:{url:bV,isLocal:bJ.test(bW[1]),global:!0,type:"GET",contentType:"application/x-www-form-urlencoded",processData:!0,async:!0,accepts:{xml:"application/xml, text/xml",html:"text/html",text:"text/plain",json:"application/json, text/javascript","*":bX},contents:{xml:/xml/,html:/html/,json:/json/},responseFields:{xml:"responseXML",text:"responseText"},converters:{"* text":a.String,"text html":!0,"text json":f.parseJSON,"text xml":f.parseXML},flatOptions:{context:!0,url:!0}},ajaxPrefilter:bZ(bT),ajaxTransport:bZ(bU),ajax:function(a,c){function w(a,c,l,m){if(s!==2){s=2,q&&clearTimeout(q),p=b,n=m||"",v.readyState=a>0?4:0;var o,r,u,w=c,x=l?cb(d,v,l):b,y,z;if(a>=200&&a<300||a===304){if(d.ifModified){if(y=v.getResponseHeader("Last-Modified"))f.lastModified[k]=y;if(z=v.getResponseHeader("Etag"))f.etag[k]=z}if(a===304)w="notmodified",o=!0;else try{r=cc(d,x),w="success",o=!0}catch(A){w="parsererror",u=A}}else{u=w;if(!w||a)w="error",a<0&&(a=0)}v.status=a,v.statusText=""+(c||w),o?h.resolveWith(e,[r,w,v]):h.rejectWith(e,[v,w,u]),v.statusCode(j),j=b,t&&g.trigger("ajax"+(o?"Success":"Error"),[v,d,o?r:u]),i.fireWith(e,[v,w]),t&&(g.trigger("ajaxComplete",[v,d]),--f.active||f.event.trigger("ajaxStop"))}}typeof a=="object"&&(c=a,a=b),c=c||{};var d=f.ajaxSetup({},c),e=d.context||d,g=e!==d&&(e.nodeType||e instanceof f)?f(e):f.event,h=f.Deferred(),i=f.Callbacks("once memory"),j=d.statusCode||{},k,l={},m={},n,o,p,q,r,s=0,t,u,v={readyState:0,setRequestHeader:function(a,b){if(!s){var c=a.toLowerCase();a=m[c]=m[c]||a,l[a]=b}return this},getAllResponseHeaders:function(){return s===2?n:null},getResponseHeader:function(a){var c;if(s===2){if(!o){o={};while(c=bH.exec(n))o[c[1].toLowerCase()]=c[2]}c=o[a.toLowerCase()]}return c===b?null:c},overrideMimeType:function(a){s||(d.mimeType=a);return this},abort:function(a){a=a||"abort",p&&p.abort(a),w(0,a);return this}};h.promise(v),v.success=v.done,v.error=v.fail,v.complete=i.add,v.statusCode=function(a){if(a){var b;if(s<2)for(b in a)j[b]=[j[b],a[b]];else b=a[v.status],v.then(b,b)}return this},d.url=((a||d.url)+"").replace(bG,"").replace(bL,bW[1]+"//"),d.dataTypes=f.trim(d.dataType||"*").toLowerCase().split(bP),d.crossDomain==null&&(r=bR.exec(d.url.toLowerCase()),d.crossDomain=!(!r||r[1]==bW[1]&&r[2]==bW[2]&&(r[3]||(r[1]==="http:"?80:443))==(bW[3]||(bW[1]==="http:"?80:443)))),d.data&&d.processData&&typeof d.data!="string"&&(d.data=f.param(d.data,d.traditional)),b$(bT,d,c,v);if(s===2)return!1;t=d.global,d.type=d.type.toUpperCase(),d.hasContent=!bK.test(d.type),t&&f.active++===0&&f.event.trigger("ajaxStart");if(!d.hasContent){d.data&&(d.url+=(bM.test(d.url)?"&":"?")+d.data,delete d.data),k=d.url;if(d.cache===!1){var x=f.now(),y=d.url.replace(bQ,"$1_="+x);d.url=y+(y===d.url?(bM.test(d.url)?"&":"?")+"_="+x:"")}}(d.data&&d.hasContent&&d.contentType!==!1||c.contentType)&&v.setRequestHeader("Content-Type",d.contentType),d.ifModified&&(k=k||d.url,f.lastModified[k]&&v.setRequestHeader("If-Modified-Since",f.lastModified[k]),f.etag[k]&&v.setRequestHeader("If-None-Match",f.etag[k])),v.setRequestHeader("Accept",d.dataTypes[0]&&d.accepts[d.dataTypes[0]]?d.accepts[d.dataTypes[0]]+(d.dataTypes[0]!=="*"?", "+bX+"; q=0.01":""):d.accepts["*"]);for(u in d.headers)v.setRequestHeader(u,d.headers[u]);if(d.beforeSend&&(d.beforeSend.call(e,v,d)===!1||s===2)){v.abort();return!1}for(u in{success:1,error:1,complete:1})v[u](d[u]);p=b$(bU,d,c,v);if(!p)w(-1,"No Transport");else{v.readyState=1,t&&g.trigger("ajaxSend",[v,d]),d.async&&d.timeout>0&&(q=setTimeout(function(){v.abort("timeout")},d.timeout));try{s=1,p.send(l,w)}catch(z){if(s<2)w(-1,z);else throw z}}return v},param:function(a,c){var d=[],e=function(a,b){b=f.isFunction(b)?b():b,d[d.length]=encodeURIComponent(a)+"="+encodeURIComponent(b)};c===b&&(c=f.ajaxSettings.traditional);if(f.isArray(a)||a.jquery&&!f.isPlainObject(a))f.each(a,function(){e(this.name,this.value)});else for(var g in a)ca(g,a[g],c,e);return d.join("&").replace(bD,"+")}}),f.extend({active:0,lastModified:{},etag:{}});var cd=f.now(),ce=/(\=)\?(&|$)|\?\?/i;f.ajaxSetup({jsonp:"callback",jsonpCallback:function(){return f.expando+"_"+cd++}}),f.ajaxPrefilter("json jsonp",function(b,c,d){var e=b.contentType==="application/x-www-form-urlencoded"&&typeof b.data=="string";if(b.dataTypes[0]==="jsonp"||b.jsonp!==!1&&(ce.test(b.url)||e&&ce.test(b.data))){var g,h=b.jsonpCallback=f.isFunction(b.jsonpCallback)?b.jsonpCallback():b.jsonpCallback,i=a[h],j=b.url,k=b.data,l="$1"+h+"$2";b.jsonp!==!1&&(j=j.replace(ce,l),b.url===j&&(e&&(k=k.replace(ce,l)),b.data===k&&(j+=(/\?/.test(j)?"&":"?")+b.jsonp+"="+h))),b.url=j,b.data=k,a[h]=function(a){g=[a]},d.always(function(){a[h]=i,g&&f.isFunction(i)&&a[h](g[0])}),b.converters["script json"]=function(){g||f.error(h+" was not called");return g[0]},b.dataTypes[0]="json";return"script"}}),f.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/javascript|ecmascript/},converters:{"text script":function(a){f.globalEval(a);return a}}}),f.ajaxPrefilter("script",function(a){a.cache===b&&(a.cache=!1),a.crossDomain&&(a.type="GET",a.global=!1)}),f.ajaxTransport("script",function(a){if(a.crossDomain){var d,e=c.head||c.getElementsByTagName("head")[0]||c.documentElement;return{send:function(f,g){d=c.createElement("script"),d.async="async",a.scriptCharset&&(d.charset=a.scriptCharset),d.src=a.url,d.onload=d.onreadystatechange=function(a,c){if(c||!d.readyState||/loaded|complete/.test(d.readyState))d.onload=d.onreadystatechange=null,e&&d.parentNode&&e.removeChild(d),d=b,c||g(200,"success")},e.insertBefore(d,e.firstChild)},abort:function(){d&&d.onload(0,1)}}}});var cf=a.ActiveXObject?function(){for(var a in ch)ch[a](0,1)}:!1,cg=0,ch;f.ajaxSettings.xhr=a.ActiveXObject?function(){return!this.isLocal&&ci()||cj()}:ci,function(a){f.extend(f.support,{ajax:!!a,cors:!!a&&"withCredentials"in a})}(f.ajaxSettings.xhr()),f.support.ajax&&f.ajaxTransport(function(c){if(!c.crossDomain||f.support.cors){var d;return{send:function(e,g){var h=c.xhr(),i,j;c.username?h.open(c.type,c.url,c.async,c.username,c.password):h.open(c.type,c.url,c.async);if(c.xhrFields)for(j in c.xhrFields)h[j]=c.xhrFields[j];c.mimeType&&h.overrideMimeType&&h.overrideMimeType(c.mimeType),!c.crossDomain&&!e["X-Requested-With"]&&(e["X-Requested-With"]="XMLHttpRequest");try{for(j in e)h.setRequestHeader(j,e[j])}catch(k){}h.send(c.hasContent&&c.data||null),d=function(a,e){var j,k,l,m,n;try{if(d&&(e||h.readyState===4)){d=b,i&&(h.onreadystatechange=f.noop,cf&&delete ch[i]);if(e)h.readyState!==4&&h.abort();else{j=h.status,l=h.getAllResponseHeaders(),m={},n=h.responseXML,n&&n.documentElement&&(m.xml=n),m.text=h.responseText;try{k=h.statusText}catch(o){k=""}!j&&c.isLocal&&!c.crossDomain?j=m.text?200:404:j===1223&&(j=204)}}}catch(p){e||g(-1,p)}m&&g(j,k,m,l)},!c.async||h.readyState===4?d():(i=++cg,cf&&(ch||(ch={},f(a).unload(cf)),ch[i]=d),h.onreadystatechange=d)},abort:function(){d&&d(0,1)}}}});var ck={},cl,cm,cn=/^(?:toggle|show|hide)$/,co=/^([+\-]=)?([\d+.\-]+)([a-z%]*)$/i,cp,cq=[["height","marginTop","marginBottom","paddingTop","paddingBottom"],["width","marginLeft","marginRight","paddingLeft","paddingRight"],["opacity"]],cr;f.fn.extend({show:function(a,b,c){var d,e;if(a||a===0)return this.animate(cu("show",3),a,b,c);for(var g=0,h=this.length;g<h;g++)d=this[g],d.style&&(e=d.style.display,!f._data(d,"olddisplay")&&e==="none"&&(e=d.style.display=""),e===""&&f.css(d,"display")==="none"&&f._data(d,"olddisplay",cv(d.nodeName)));for(g=0;g<h;g++){d=this[g];if(d.style){e=d.style.display;if(e===""||e==="none")d.style.display=f._data(d,"olddisplay")||""}}return this},hide:function(a,b,c){if(a||a===0)return this.animate(cu("hide",3),a,b,c);var d,e,g=0,h=this.length;for(;g<h;g++)d=this[g],d.style&&(e=f.css(d,"display"),e!=="none"&&!f._data(d,"olddisplay")&&f._data(d,"olddisplay",e));for(g=0;g<h;g++)this[g].style&&(this[g].style.display="none");return this},_toggle:f.fn.toggle,toggle:function(a,b,c){var d=typeof a=="boolean";f.isFunction(a)&&f.isFunction(b)?this._toggle.apply(this,arguments):a==null||d?this.each(function(){var b=d?a:f(this).is(":hidden");f(this)[b?"show":"hide"]()}):this.animate(cu("toggle",3),a,b,c);return this},fadeTo:function(a,b,c,d){return this.filter(":hidden").css("opacity",0).show().end().animate({opacity:b},a,c,d)},animate:function(a,b,c,d){function g(){e.queue===!1&&f._mark(this);var b=f.extend({},e),c=this.nodeType===1,d=c&&f(this).is(":hidden"),g,h,i,j,k,l,m,n,o;b.animatedProperties={};for(i in a){g=f.camelCase(i),i!==g&&(a[g]=a[i],delete a[i]),h=a[g],f.isArray(h)?(b.animatedProperties[g]=h[1],h=a[g]=h[0]):b.animatedProperties[g]=b.specialEasing&&b.specialEasing[g]||b.easing||"swing";if(h==="hide"&&d||h==="show"&&!d)return b.complete.call(this);c&&(g==="height"||g==="width")&&(b.overflow=[this.style.overflow,this.style.overflowX,this.style.overflowY],f.css(this,"display")==="inline"&&f.css(this,"float")==="none"&&(!f.support.inlineBlockNeedsLayout||cv(this.nodeName)==="inline"?this.style.display="inline-block":this.style.zoom=1))}b.overflow!=null&&(this.style.overflow="hidden");for(i in a)j=new f.fx(this,b,i),h=a[i],cn.test(h)?(o=f._data(this,"toggle"+i)||(h==="toggle"?d?"show":"hide":0),o?(f._data(this,"toggle"+i,o==="show"?"hide":"show"),j[o]()):j[h]()):(k=co.exec(h),l=j.cur(),k?(m=parseFloat(k[2]),n=k[3]||(f.cssNumber[i]?"":"px"),n!=="px"&&(f.style(this,i,(m||1)+n),l=(m||1)/j.cur()*l,f.style(this,i,l+n)),k[1]&&(m=(k[1]==="-="?-1:1)*m+l),j.custom(l,m,n)):j.custom(l,h,""));return!0}var e=f.speed(b,c,d);if(f.isEmptyObject(a))return this.each(e.complete,[!1]);a=f.extend({},a);return e.queue===!1?this.each(g):this.queue(e.queue,g)},stop:function(a,c,d){typeof a!="string"&&(d=c,c=a,a=b),c&&a!==!1&&this.queue(a||"fx",[]);return this.each(function(){function h(a,b,c){var e=b[c];f.removeData(a,c,!0),e.stop(d)}var b,c=!1,e=f.timers,g=f._data(this);d||f._unmark(!0,this);if(a==null)for(b in g)g[b]&&g[b].stop&&b.indexOf(".run")===b.length-4&&h(this,g,b);else g[b=a+".run"]&&g[b].stop&&h(this,g,b);for(b=e.length;b--;)e[b].elem===this&&(a==null||e[b].queue===a)&&(d?e[b](!0):e[b].saveState(),c=!0,e.splice(b,1));(!d||!c)&&f.dequeue(this,a)})}}),f.each({slideDown:cu("show",1),slideUp:cu("hide",1),slideToggle:cu("toggle",1),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(a,b){f.fn[a]=function(a,c,d){return this.animate(b,a,c,d)}}),f.extend({speed:function(a,b,c){var d=a&&typeof a=="object"?f.extend({},a):{complete:c||!c&&b||f.isFunction(a)&&a,duration:a,easing:c&&b||b&&!f.isFunction(b)&&b};d.duration=f.fx.off?0:typeof d.duration=="number"?d.duration:d.duration in f.fx.speeds?f.fx.speeds[d.duration]:f.fx.speeds._default;if(d.queue==null||d.queue===!0)d.queue="fx";d.old=d.complete,d.complete=function(a){f.isFunction(d.old)&&d.old.call(this),d.queue?f.dequeue(this,d.queue):a!==!1&&f._unmark(this)};return d},easing:{linear:function(a,b,c,d){return c+d*a},swing:function(a,b,c,d){return(-Math.cos(a*Math.PI)/2+.5)*d+c}},timers:[],fx:function(a,b,c){this.options=b,this.elem=a,this.prop=c,b.orig=b.orig||{}}}),f.fx.prototype={update:function(){this.options.step&&this.options.step.call(this.elem,this.now,this),(f.fx.step[this.prop]||f.fx.step._default)(this)},cur:function(){if(this.elem[this.prop]!=null&&(!this.elem.style||this.elem.style[this.prop]==null))return this.elem[this.prop];var a,b=f.css(this.elem,this.prop);return isNaN(a=parseFloat(b))?!b||b==="auto"?0:b:a},custom:function(a,c,d){function h(a){return e.step(a)}var e=this,g=f.fx;this.startTime=cr||cs(),this.end=c,this.now=this.start=a,this.pos=this.state=0,this.unit=d||this.unit||(f.cssNumber[this.prop]?"":"px"),h.queue=this.options.queue,h.elem=this.elem,h.saveState=function(){e.options.hide&&f._data(e.elem,"fxshow"+e.prop)===b&&f._data(e.elem,"fxshow"+e.prop,e.start)},h()&&f.timers.push(h)&&!cp&&(cp=setInterval(g.tick,g.interval))},show:function(){var a=f._data(this.elem,"fxshow"+this.prop);this.options.orig[this.prop]=a||f.style(this.elem,this.prop),this.options.show=!0,a!==b?this.custom(this.cur(),a):this.custom(this.prop==="width"||this.prop==="height"?1:0,this.cur()),f(this.elem).show()},hide:function(){this.options.orig[this.prop]=f._data(this.elem,"fxshow"+this.prop)||f.style(this.elem,this.prop),this.options.hide=!0,this.custom(this.cur(),0)},step:function(a){var b,c,d,e=cr||cs(),g=!0,h=this.elem,i=this.options;if(a||e>=i.duration+this.startTime){this.now=this.end,this.pos=this.state=1,this.update(),i.animatedProperties[this.prop]=!0;for(b in i.animatedProperties)i.animatedProperties[b]!==!0&&(g=!1);if(g){i.overflow!=null&&!f.support.shrinkWrapBlocks&&f.each(["","X","Y"],function(a,b){h.style["overflow"+b]=i.overflow[a]}),i.hide&&f(h).hide();if(i.hide||i.show)for(b in i.animatedProperties)f.style(h,b,i.orig[b]),f.removeData(h,"fxshow"+b,!0),f.removeData(h,"toggle"+b,!0);d=i.complete,d&&(i.complete=!1,d.call(h))}return!1}i.duration==Infinity?this.now=e:(c=e-this.startTime,this.state=c/i.duration,this.pos=f.easing[i.animatedProperties[this.prop]](this.state,c,0,1,i.duration),this.now=this.start+(this.end-this.start)*this.pos),this.update();return!0}},f.extend(f.fx,{tick:function(){var a,b=f.timers,c=0;for(;c<b.length;c++)a=b[c],!a()&&b[c]===a&&b.splice(c--,1);b.length||f.fx.stop()},interval:13,stop:function(){clearInterval(cp),cp=null},speeds:{slow:600,fast:200,_default:400},step:{opacity:function(a){f.style(a.elem,"opacity",a.now)},_default:function(a){a.elem.style&&a.elem.style[a.prop]!=null?a.elem.style[a.prop]=a.now+a.unit:a.elem[a.prop]=a.now}}}),f.each(["width","height"],function(a,b){f.fx.step[b]=function(a){f.style(a.elem,b,Math.max(0,a.now)+a.unit)}}),f.expr&&f.expr.filters&&(f.expr.filters.animated=function(a){return f.grep(f.timers,function(b){return a===b.elem}).length});var cw=/^t(?:able|d|h)$/i,cx=/^(?:body|html)$/i;"getBoundingClientRect"in c.documentElement?f.fn.offset=function(a){var b=this[0],c;if(a)return this.each(function(b){f.offset.setOffset(this,a,b)});if(!b||!b.ownerDocument)return null;if(b===b.ownerDocument.body)return f.offset.bodyOffset(b);try{c=b.getBoundingClientRect()}catch(d){}var e=b.ownerDocument,g=e.documentElement;if(!c||!f.contains(g,b))return c?{top:c.top,left:c.left}:{top:0,left:0};var h=e.body,i=cy(e),j=g.clientTop||h.clientTop||0,k=g.clientLeft||h.clientLeft||0,l=i.pageYOffset||f.support.boxModel&&g.scrollTop||h.scrollTop,m=i.pageXOffset||f.support.boxModel&&g.scrollLeft||h.scrollLeft,n=c.top+l-j,o=c.left+m-k;return{top:n,left:o}}:f.fn.offset=function(a){var b=this[0];if(a)return this.each(function(b){f.offset.setOffset(this,a,b)});if(!b||!b.ownerDocument)return null;if(b===b.ownerDocument.body)return f.offset.bodyOffset(b);var c,d=b.offsetParent,e=b,g=b.ownerDocument,h=g.documentElement,i=g.body,j=g.defaultView,k=j?j.getComputedStyle(b,null):b.currentStyle,l=b.offsetTop,m=b.offsetLeft;while((b=b.parentNode)&&b!==i&&b!==h){if(f.support.fixedPosition&&k.position==="fixed")break;c=j?j.getComputedStyle(b,null):b.currentStyle,l-=b.scrollTop,m-=b.scrollLeft,b===d&&(l+=b.offsetTop,m+=b.offsetLeft,f.support.doesNotAddBorder&&(!f.support.doesAddBorderForTableAndCells||!cw.test(b.nodeName))&&(l+=parseFloat(c.borderTopWidth)||0,m+=parseFloat(c.borderLeftWidth)||0),e=d,d=b.offsetParent),f.support.subtractsBorderForOverflowNotVisible&&c.overflow!=="visible"&&(l+=parseFloat(c.borderTopWidth)||0,m+=parseFloat(c.borderLeftWidth)||0),k=c}if(k.position==="relative"||k.position==="static")l+=i.offsetTop,m+=i.offsetLeft;f.support.fixedPosition&&k.position==="fixed"&&(l+=Math.max(h.scrollTop,i.scrollTop),m+=Math.max(h.scrollLeft,i.scrollLeft));return{top:l,left:m}},f.offset={bodyOffset:function(a){var b=a.offsetTop,c=a.offsetLeft;f.support.doesNotIncludeMarginInBodyOffset&&(b+=parseFloat(f.css(a,"marginTop"))||0,c+=parseFloat(f.css(a,"marginLeft"))||0);return{top:b,left:c}},setOffset:function(a,b,c){var d=f.css(a,"position");d==="static"&&(a.style.position="relative");var e=f(a),g=e.offset(),h=f.css(a,"top"),i=f.css(a,"left"),j=(d==="absolute"||d==="fixed")&&f.inArray("auto",[h,i])>-1,k={},l={},m,n;j?(l=e.position(),m=l.top,n=l.left):(m=parseFloat(h)||0,n=parseFloat(i)||0),f.isFunction(b)&&(b=b.call(a,c,g)),b.top!=null&&(k.top=b.top-g.top+m),b.left!=null&&(k.left=b.left-g.left+n),"using"in b?b.using.call(a,k):e.css(k)}},f.fn.extend({position:function(){if(!this[0])return null;var a=this[0],b=this.offsetParent(),c=this.offset(),d=cx.test(b[0].nodeName)?{top:0,left:0}:b.offset();c.top-=parseFloat(f.css(a,"marginTop"))||0,c.left-=parseFloat(f.css(a,"marginLeft"))||0,d.top+=parseFloat(f.css(b[0],"borderTopWidth"))||0,d.left+=parseFloat(f.css(b[0],"borderLeftWidth"))||0;return{top:c.top-d.top,left:c.left-d.left}},offsetParent:function(){return this.map(function(){var a=this.offsetParent||c.body;while(a&&!cx.test(a.nodeName)&&f.css(a,"position")==="static")a=a.offsetParent;return a})}}),f.each(["Left","Top"],function(a,c){var d="scroll"+c;f.fn[d]=function(c){var e,g;if(c===b){e=this[0];if(!e)return null;g=cy(e);return g?"pageXOffset"in g?g[a?"pageYOffset":"pageXOffset"]:f.support.boxModel&&g.document.documentElement[d]||g.document.body[d]:e[d]}return this.each(function(){g=cy(this),g?g.scrollTo(a?f(g).scrollLeft():c,a?c:f(g).scrollTop()):this[d]=c})}}),f.each(["Height","Width"],function(a,c){var d=c.toLowerCase();f.fn["inner"+c]=function(){var a=this[0];return a?a.style?parseFloat(f.css(a,d,"padding")):this[d]():null},f.fn["outer"+c]=function(a){var b=this[0];return b?b.style?parseFloat(f.css(b,d,a?"margin":"border")):this[d]():null},f.fn[d]=function(a){var e=this[0];if(!e)return a==null?null:this;if(f.isFunction(a))return this.each(function(b){var c=f(this);c[d](a.call(this,b,c[d]()))});if(f.isWindow(e)){var g=e.document.documentElement["client"+c],h=e.document.body;return e.document.compatMode==="CSS1Compat"&&g||h&&h["client"+c]||g}if(e.nodeType===9)return Math.max(e.documentElement["client"+c],e.body["scroll"+c],e.documentElement["scroll"+c],e.body["offset"+c],e.documentElement["offset"+c]);if(a===b){var i=f.css(e,d),j=parseFloat(i);return f.isNumeric(j)?j:i}return this.css(d,typeof a=="string"?a:a+"px")}}),a.jQuery=a.$=f,typeof define=="function"&&define.amd&&define.amd.jQuery&&define("jquery",[],function(){return f})})(window);</script>

<script native="jsml/php.default.min.js">
/* 
 * More info at: http://phpjs.org
 * 
 * This is version: 3.26
 * php.js is copyright 2011 Kevin van Zonneveld.
 * 
 * Portions copyright Brett Zamir (http://brett-zamir.me), Kevin van Zonneveld
 * (http://kevin.vanzonneveld.net), Onno Marsman, Theriault, Michael White
 * (http://getsprink.com), Waldo Malqui Silva, Paulo Freitas, Jack, Jonas
 * Raoni Soares Silva (http://www.jsfromhell.com), Philip Peterson, Legaev
 * Andrey, Ates Goral (http://magnetiq.com), Alex, Ratheous, Martijn Wieringa,
 * Rafał Kukawski (http://blog.kukawski.pl), lmeyrick
 * (https://sourceforge.net/projects/bcmath-js/), Nate, Philippe Baumann,
 * Enrique Gonzalez, Webtoolkit.info (http://www.webtoolkit.info/), Carlos R.
 * L. Rodrigues (http://www.jsfromhell.com), Ash Searle
 * (http://hexmen.com/blog/), Jani Hartikainen, travc, Ole Vrijenhoek,
 * Erkekjetter, Michael Grier, Rafał Kukawski (http://kukawski.pl), Johnny
 * Mast (http://www.phpvrouwen.nl), T.Wild, d3x,
 * http://stackoverflow.com/questions/57803/how-to-convert-decimal-to-hex-in-javascript,
 * Rafał Kukawski (http://blog.kukawski.pl/), stag019, pilus, WebDevHobo
 * (http://webdevhobo.blogspot.com/), marrtins, GeekFG
 * (http://geekfg.blogspot.com), Andrea Giammarchi
 * (http://webreflection.blogspot.com), Arpad Ray (mailto:arpad@php.net),
 * gorthaur, Paul Smith, Tim de Koning (http://www.kingsquare.nl), Joris, Oleg
 * Eremeev, Steve Hilder, majak, gettimeofday, KELAN, Josh Fraser
 * (http://onlineaspect.com/2007/06/08/auto-detect-a-time-zone-with-javascript/),
 * Marc Palau, Kevin van Zonneveld (http://kevin.vanzonneveld.net/), Martin
 * (http://www.erlenwiese.de/), Breaking Par Consulting Inc
 * (http://www.breakingpar.com/bkp/home.nsf/0/87256B280015193F87256CFB006C45F7),
 * Chris, Mirek Slugen, saulius, Alfonso Jimenez
 * (http://www.alfonsojimenez.com), Diplom@t (http://difane.com/), felix,
 * Mailfaker (http://www.weedem.fr/), Tyler Akins (http://rumkin.com), Caio
 * Ariede (http://caioariede.com), Robin, Kankrelune
 * (http://www.webfaktory.info/), Karol Kowalski, Imgen Tata
 * (http://www.myipdf.com/), mdsjack (http://www.mdsjack.bo.it), Dreamer,
 * Felix Geisendoerfer (http://www.debuggable.com/felix), Lars Fischer, AJ,
 * David, Aman Gupta, Michael White, Public Domain
 * (http://www.json.org/json2.js), Steven Levithan
 * (http://blog.stevenlevithan.com), Sakimori, Pellentesque Malesuada,
 * Thunder.m, Dj (http://phpjs.org/functions/htmlentities:425#comment_134018),
 * Steve Clay, David James, Francois, class_exists, nobbler, T. Wild, Itsacon
 * (http://www.itsacon.net/), date, Ole Vrijenhoek (http://www.nervous.nl/),
 * Fox, Raphael (Ao RUDLER), Marco, noname, Mateusz "loonquawl" Zalega, Frank
 * Forte, Arno, ger, mktime, john (http://www.jd-tech.net), Nick Kolosov
 * (http://sammy.ru), marc andreu, Scott Cariss, Douglas Crockford
 * (http://javascript.crockford.com), madipta, Slawomir Kaniecki,
 * ReverseSyntax, Nathan, Alex Wilson, kenneth, Bayron Guevara, Adam Wallner
 * (http://web2.bitbaro.hu/), paulo kuong, jmweb, Lincoln Ramsay, djmix,
 * Pyerre, Jon Hohle, Thiago Mata (http://thiagomata.blog.com), lmeyrick
 * (https://sourceforge.net/projects/bcmath-js/this.), Linuxworld, duncan,
 * Gilbert, Sanjoy Roy, Shingo, sankai, Oskar Larsson Högfeldt
 * (http://oskar-lh.name/), Denny Wardhana, 0m3r, Everlasto, Subhasis Deb,
 * josh, jd, Pier Paolo Ramon (http://www.mastersoup.com/), P, merabi, Soren
 * Hansen, Eugene Bulkin (http://doubleaw.com/), Der Simon
 * (http://innerdom.sourceforge.net/), echo is bad, Ozh, XoraX
 * (http://www.xorax.info), EdorFaus, JB, J A R, Marc Jansen, Francesco, LH,
 * Stoyan Kyosev (http://www.svest.org/), nord_ua, omid
 * (http://phpjs.org/functions/380:380#comment_137122), Brad Touesnard, MeEtc
 * (http://yass.meetcweb.com), Peter-Paul Koch
 * (http://www.quirksmode.org/js/beat.html), Olivier Louvignes
 * (http://mg-crea.com/), T0bsn, Tim Wiel, Bryan Elliott, Jalal Berrami,
 * Martin, JT, David Randall, Thomas Beaucourt (http://www.webapp.fr), taith,
 * vlado houba, Pierre-Luc Paour, Kristof Coomans (SCK-CEN Belgian Nucleair
 * Research Centre), Martin Pool, Kirk Strobeck, Rick Waldron, Brant Messenger
 * (http://www.brantmessenger.com/), Devan Penner-Woelk, Saulo Vallory, Wagner
 * B. Soares, Artur Tchernychev, Valentina De Rosa, Jason Wong
 * (http://carrot.org/), Christoph, Daniel Esteban, strftime, Mick@el, rezna,
 * Simon Willison (http://simonwillison.net), Anton Ongson, Gabriel Paderni,
 * Marco van Oort, penutbutterjelly, Philipp Lenssen, Bjorn Roesbeke
 * (http://www.bjornroesbeke.be/), Bug?, Eric Nagel, Tomasz Wesolowski,
 * Evertjan Garretsen, Bobby Drake, Blues (http://tech.bluesmoon.info/), Luke
 * Godfrey, Pul, uestla, Alan C, Ulrich, Rafal Kukawski, Yves Sucaet,
 * sowberry, Norman "zEh" Fuchs, hitwork, Zahlii, johnrembo, Nick Callen,
 * Steven Levithan (stevenlevithan.com), ejsanders, Scott Baker, Brian Tafoya
 * (http://www.premasolutions.com/), Philippe Jausions
 * (http://pear.php.net/user/jausions), Aidan Lister
 * (http://aidanlister.com/), Rob, e-mike, HKM, ChaosNo1, metjay, strcasecmp,
 * strcmp, Taras Bogach, jpfle, Alexander Ermolaev
 * (http://snippets.dzone.com/user/AlexanderErmolaev), DxGx, kilops, Orlando,
 * dptr1988, Le Torbi, James (http://www.james-bell.co.uk/), Pedro Tainha
 * (http://www.pedrotainha.com), James, Arnout Kazemier
 * (http://www.3rd-Eden.com), Chris McMacken, gabriel paderni, Yannoo,
 * FGFEmperor, baris ozdil, Tod Gentille, Greg Frazier, jakes, 3D-GRAF, Allan
 * Jensen (http://www.winternet.no), Howard Yeend, Benjamin Lupton, davook,
 * daniel airton wermann (http://wermann.com.br), Atli Þór, Maximusya, Ryan
 * W Tenney (http://ryan.10e.us), Alexander M Beedie, fearphage
 * (http://http/my.opera.com/fearphage/), Nathan Sepulveda, Victor, Matteo,
 * Billy, stensi, Cord, Manish, T.J. Leahy, Riddler
 * (http://www.frontierwebdev.com/), Rafał Kukawski, FremyCompany, Matt
 * Bradley, Tim de Koning, Luis Salazar (http://www.freaky-media.com/), Diogo
 * Resende, Rival, Andrej Pavlovic, Garagoth, Le Torbi
 * (http://www.letorbi.de/), Dino, Josep Sanz (http://www.ws3.es/), rem,
 * Russell Walker (http://www.nbill.co.uk/), Jamie Beck
 * (http://www.terabit.ca/), setcookie, Michael, YUI Library:
 * http://developer.yahoo.com/yui/docs/YAHOO.util.DateLocale.html, Blues at
 * http://hacks.bluesmoon.info/strftime/strftime.js, Ben
 * (http://benblume.co.uk/), DtTvB
 * (http://dt.in.th/2008-09-16.string-length-in-bytes.html), Andreas, William,
 * meo, incidence, Cagri Ekin, Amirouche, Amir Habibi
 * (http://www.residence-mixte.com/), Luke Smith (http://lucassmith.name),
 * Kheang Hok Chin (http://www.distantia.ca/), Jay Klehr, Lorenzo Pisani,
 * Tony, Yen-Wei Liu, Greenseed, mk.keck, Leslie Hoare, dude, booeyOH, Ben
 * Bryan
 * 
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a
 * copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL KEVIN VAN ZONNEVELD BE LIABLE FOR ANY CLAIM, DAMAGES
 * OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
 * ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 */ 


// Compression: minified


function abs(mixed_number){return Math.abs(mixed_number)||0;}
function acos(arg){return Math.acos(arg);}
function acosh(arg){return Math.log(arg+Math.sqrt(arg*arg-1));}
function addslashes(str){return(str+'').replace(/[\\"']/g,'\\$&').replace(/\u0000/g,'\\0');}
function array_change_key_case(array,cs){var case_fn,key,tmp_ar={};if(Object.prototype.toString.call(array)==='[object Array]'){return array;}
if(array&&typeof array==='object'&&array.change_key_case){return array.change_key_case(cs);}
if(array&&typeof array==='object'){case_fn=(!cs||cs==='CASE_LOWER')?'toLowerCase':'toUpperCase';for(key in array){tmp_ar[key[case_fn]()]=array[key];}
return tmp_ar;}
return false;}
function array_chunk(input,size,preserve_keys){var x,p='',i=0,c=-1,l=input.length||0,n=[];if(size<1){return null;}
if(Object.prototype.toString.call(input)==='[object Array]'){if(preserve_keys){while(i<l){(x=i%size)?n[c][i]=input[i]:n[++c]={},n[c][i]=input[i];i++;}}
else{while(i<l){(x=i%size)?n[c][x]=input[i]:n[++c]=[input[i]];i++;}}}
else{if(preserve_keys){for(p in input){if(input.hasOwnProperty(p)){(x=i%size)?n[c][p]=input[p]:n[++c]={},n[c][p]=input[p];i++;}}}
else{for(p in input){if(input.hasOwnProperty(p)){(x=i%size)?n[c][x]=input[p]:n[++c]=[input[p]];i++;}}}}
return n;}
function array_combine(keys,values){var new_array={},keycount=keys&&keys.length,i=0;if(typeof keys!=='object'||typeof values!=='object'||typeof keycount!=='number'||typeof values.length!=='number'||!keycount){return false;}
if(keycount!=values.length){return false;}
for(i=0;i<keycount;i++){new_array[keys[i]]=values[i];}
return new_array;}
function array_count_values(array){var tmp_arr={},key='',t='';var __getType=function(obj){var t=typeof obj;t=t.toLowerCase();if(t==="object"){t="array";}
return t;};var __countValue=function(value){switch(typeof(value)){case"number":if(Math.floor(value)!==value){return;}
case"string":if(value in this&&this.hasOwnProperty(value)){++this[value];}else{this[value]=1;}}};t=__getType(array);if(t==='array'){for(key in array){if(array.hasOwnProperty(key)){__countValue.call(tmp_arr,array[key]);}}}
return tmp_arr;}
function array_diff(arr1){var retArr={},argl=arguments.length,k1='',i=1,k='',arr={};arr1keys:for(k1 in arr1){for(i=1;i<argl;i++){arr=arguments[i];for(k in arr){if(arr[k]===arr1[k1]){continue arr1keys;}}
retArr[k1]=arr1[k1];}}
return retArr;}
function array_diff_assoc(arr1){var retArr={},argl=arguments.length,k1='',i=1,k='',arr={};arr1keys:for(k1 in arr1){for(i=1;i<argl;i++){arr=arguments[i];for(k in arr){if(arr[k]===arr1[k1]&&k===k1){continue arr1keys;}}
retArr[k1]=arr1[k1];}}
return retArr;}
function array_diff_key(arr1){var argl=arguments.length,retArr={},k1='',i=1,k='',arr={};arr1keys:for(k1 in arr1){for(i=1;i<argl;i++){arr=arguments[i];for(k in arr){if(k===k1){continue arr1keys;}}
retArr[k1]=arr1[k1];}}
return retArr;}
function array_diff_uassoc(arr1){var retArr={},arglm1=arguments.length-1,cb=arguments[arglm1],arr={},i=1,k1='',k='';cb=(typeof cb==='string')?this.window[cb]:(Object.prototype.toString.call(cb)==='[object Array]')?this.window[cb[0]][cb[1]]:cb;arr1keys:for(k1 in arr1){for(i=1;i<arglm1;i++){arr=arguments[i];for(k in arr){if(arr[k]===arr1[k1]&&cb(k,k1)===0){continue arr1keys;}}
retArr[k1]=arr1[k1];}}
return retArr;}
function array_diff_ukey(arr1){var retArr={},arglm1=arguments.length-1,cb=arguments[arglm1],arr={},i=1,k1='',k='';cb=(typeof cb==='string')?this.window[cb]:(Object.prototype.toString.call(cb)==='[object Array]')?this.window[cb[0]][cb[1]]:cb;arr1keys:for(k1 in arr1){for(i=1;i<arglm1;i++){arr=arguments[i];for(k in arr){if(cb(k,k1)===0){continue arr1keys;}}
retArr[k1]=arr1[k1];}}
return retArr;}
function array_fill(start_index,num,mixed_val){var key,tmp_arr={};if(!isNaN(start_index)&&!isNaN(num)){for(key=0;key<num;key++){tmp_arr[(key+start_index)]=mixed_val;}}
return tmp_arr;}
function array_fill_keys(keys,value){var retObj={},key='';for(key in keys){retObj[keys[key]]=value;}
return retObj;}
function array_filter(arr,func){var retObj={},k;for(k in arr){if(func(arr[k])){retObj[k]=arr[k];}}
return retObj;}
function array_flip(trans){var key,tmp_ar={};for(key in trans){if(!trans.hasOwnProperty(key)){continue;}
tmp_ar[trans[key]]=key;}
return tmp_ar;}
function array_intersect(arr1){var retArr={},argl=arguments.length,arglm1=argl-1,k1='',arr={},i=0,k='';arr1keys:for(k1 in arr1){arrs:for(i=1;i<argl;i++){arr=arguments[i];for(k in arr){if(arr[k]===arr1[k1]){if(i===arglm1){retArr[k1]=arr1[k1];}
continue arrs;}}
continue arr1keys;}}
return retArr;}
function array_intersect_assoc(arr1){var retArr={},argl=arguments.length,arglm1=argl-1,k1='',arr={},i=0,k='';arr1keys:for(k1 in arr1){arrs:for(i=1;i<argl;i++){arr=arguments[i];for(k in arr){if(arr[k]===arr1[k1]&&k===k1){if(i===arglm1){retArr[k1]=arr1[k1];}
continue arrs;}}
continue arr1keys;}}
return retArr;}
function array_intersect_key(arr1){var retArr={},argl=arguments.length,arglm1=argl-1,k1='',arr={},i=0,k='';arr1keys:for(k1 in arr1){arrs:for(i=1;i<argl;i++){arr=arguments[i];for(k in arr){if(k===k1){if(i===arglm1){retArr[k1]=arr1[k1];}
continue arrs;}}
continue arr1keys;}}
return retArr;}
function array_intersect_uassoc(arr1){var retArr={},arglm1=arguments.length-1,arglm2=arglm1-1,cb=arguments[arglm1],k1='',i=1,arr={},k='';cb=(typeof cb==='string')?this.window[cb]:(Object.prototype.toString.call(cb)==='[object Array]')?this.window[cb[0]][cb[1]]:cb;arr1keys:for(k1 in arr1){arrs:for(i=1;i<arglm1;i++){arr=arguments[i];for(k in arr){if(arr[k]===arr1[k1]&&cb(k,k1)===0){if(i===arglm2){retArr[k1]=arr1[k1];}
continue arrs;}}
continue arr1keys;}}
return retArr;}
function array_intersect_ukey(arr1){var retArr={},arglm1=arguments.length-1,arglm2=arglm1-1,cb=arguments[arglm1],k1='',i=1,arr={},k='';cb=(typeof cb==='string')?this.window[cb]:(Object.prototype.toString.call(cb)==='[object Array]')?this.window[cb[0]][cb[1]]:cb;arr1keys:for(k1 in arr1){arrs:for(i=1;i<arglm1;i++){arr=arguments[i];for(k in arr){if(cb(k,k1)===0){if(i===arglm2){retArr[k1]=arr1[k1];}
continue arrs;}}
continue arr1keys;}}
return retArr;}
function array_key_exists(key,search){if(!search||(search.constructor!==Array&&search.constructor!==Object)){return false;}
return key in search;}
function array_keys(input,search_value,argStrict){var search=typeof search_value!=='undefined',tmp_arr=[],strict=!!argStrict,include=true,key='';if(input&&typeof input==='object'&&input.change_key_case){return input.keys(search_value,argStrict);}
for(key in input){if(input.hasOwnProperty(key)){include=true;if(search){if(strict&&input[key]!==search_value){include=false;}
else if(input[key]!=search_value){include=false;}}
if(include){tmp_arr[tmp_arr.length]=key;}}}
return tmp_arr;}
function array_map(callback){var argc=arguments.length,argv=arguments;var j=argv[1].length,i=0,k=1,m=0;var tmp=[],tmp_ar=[];while(i<j){while(k<argc){tmp[m++]=argv[k++][i];}
m=0;k=1;if(callback){if(typeof callback==='string'){callback=this.window[callback];}
tmp_ar[i++]=callback.apply(null,tmp);}else{tmp_ar[i++]=tmp;}
tmp=[];}
return tmp_ar;}
function array_merge(){var args=Array.prototype.slice.call(arguments),argl=args.length,arg,retObj={},k='',argil=0,j=0,i=0,ct=0,toStr=Object.prototype.toString,retArr=true;for(i=0;i<argl;i++){if(toStr.call(args[i])!=='[object Array]'){retArr=false;break;}}
if(retArr){retArr=[];for(i=0;i<argl;i++){retArr=retArr.concat(args[i]);}
return retArr;}
for(i=0,ct=0;i<argl;i++){arg=args[i];if(toStr.call(arg)==='[object Array]'){for(j=0,argil=arg.length;j<argil;j++){retObj[ct++]=arg[j];}}
else{for(k in arg){if(arg.hasOwnProperty(k)){if(parseInt(k,10)+''===k){retObj[ct++]=arg[k];}
else{retObj[k]=arg[k];}}}}}
return retObj;}
function array_merge_recursive(arr1,arr2){var idx='';if(arr1&&Object.prototype.toString.call(arr1)==='[object Array]'&&arr2&&Object.prototype.toString.call(arr2)==='[object Array]'){for(idx in arr2){arr1.push(arr2[idx]);}}else if((arr1&&(arr1 instanceof Object))&&(arr2&&(arr2 instanceof Object))){for(idx in arr2){if(idx in arr1){if(typeof arr1[idx]=='object'&&typeof arr2=='object'){arr1[idx]=this.array_merge(arr1[idx],arr2[idx]);}else{arr1[idx]=arr2[idx];}}else{arr1[idx]=arr2[idx];}}}
return arr1;}
function array_pad(input,pad_size,pad_value){var pad=[],newArray=[],newLength,diff=0,i=0;if(Object.prototype.toString.call(input)==='[object Array]'&&!isNaN(pad_size)){newLength=((pad_size<0)?(pad_size*-1):pad_size);diff=newLength-input.length;if(diff>0){for(i=0;i<diff;i++){newArray[i]=pad_value;}
pad=((pad_size<0)?newArray.concat(input):input.concat(newArray));}else{pad=input;}}
return pad;}
function array_pop(inputArr){var key='',lastKey='';if(inputArr.hasOwnProperty('length')){if(!inputArr.length){return null;}
return inputArr.pop();}else{for(key in inputArr){if(inputArr.hasOwnProperty(key)){lastKey=key;}}
if(lastKey){var tmp=inputArr[lastKey];delete(inputArr[lastKey]);return tmp;}else{return null;}}}
function array_product(input){var idx=0,product=1,il=0;if(Object.prototype.toString.call(input)!=='[object Array]'){return null;}
il=input.length;while(idx<il){product*=(!isNaN(input[idx])?input[idx]:0);idx++;}
return product;}
function array_push(inputArr){var i=0,pr='',argv=arguments,argc=argv.length,allDigits=/^\d$/,size=0,highestIdx=0,len=0;if(inputArr.hasOwnProperty('length')){for(i=1;i<argc;i++){inputArr[inputArr.length]=argv[i];}
return inputArr.length;}
for(pr in inputArr){if(inputArr.hasOwnProperty(pr)){++len;if(pr.search(allDigits)!==-1){size=parseInt(pr,10);highestIdx=size>highestIdx?size:highestIdx;}}}
for(i=1;i<argc;i++){inputArr[++highestIdx]=argv[i];}
return len+i-1;}
function array_rand(input,num_req){var indexes=[];var ticks=num_req||1;var checkDuplicate=function(input,value){var exist=false,index=0,il=input.length;while(index<il){if(input[index]===value){exist=true;break;}
index++;}
return exist;};if(Object.prototype.toString.call(input)==='[object Array]'&&ticks<=input.length){while(true){var rand=Math.floor((Math.random()*input.length));if(indexes.length===ticks){break;}
if(!checkDuplicate(indexes,rand)){indexes.push(rand);}}}else{indexes=null;}
return((ticks==1)?indexes.join():indexes);}
function array_reduce(a_input,callback){var lon=a_input.length;var res=0,i=0;var tmp=[];for(i=0;i<lon;i+=2){tmp[0]=a_input[i];if(a_input[(i+1)]){tmp[1]=a_input[(i+1)];}else{tmp[1]=0;}
res+=callback.apply(null,tmp);tmp=[];}
return res;}
function array_reverse(array,preserve_keys){var isArray=Object.prototype.toString.call(array)==="[object Array]",tmp_arr=preserve_keys?{}:[],key;if(isArray&&!preserve_keys){return array.slice(0).reverse();}
if(preserve_keys){var keys=[];for(key in array){keys.push(key);}
var i=keys.length;while(i--){key=keys[i];tmp_arr[key]=array[key];}}else{for(key in array){tmp_arr.unshift(array[key]);}}
return tmp_arr;}
function array_search(needle,haystack,argStrict){var strict=!!argStrict,key='';if(haystack&&typeof haystack==='object'&&haystack.change_key_case){return haystack.search(needle,argStrict);}
if(typeof needle==='object'&&needle.exec){if(!strict){var flags='i'+(needle.global?'g':'')+
(needle.multiline?'m':'')+
(needle.sticky?'y':'');needle=new RegExp(needle.source,flags);}
for(key in haystack){if(needle.test(haystack[key])){return key;}}
return false;}
for(key in haystack){if((strict&&haystack[key]===needle)||(!strict&&haystack[key]==needle)){return key;}}
return false;}
function array_shift(inputArr){var props=false,shift=undefined,pr='',allDigits=/^\d$/,int_ct=-1,_checkToUpIndices=function(arr,ct,key){if(arr[ct]!==undefined){var tmp=ct;ct+=1;if(ct===key){ct+=1;}
ct=_checkToUpIndices(arr,ct,key);arr[ct]=arr[tmp];delete arr[tmp];}
return ct;};if(inputArr.length===0){return null;}
if(inputArr.length>0){return inputArr.shift();}}
function array_slice(arr,offst,lgth,preserve_keys){var key='';if(Object.prototype.toString.call(arr)!=='[object Array]'||(preserve_keys&&offst!==0)){var lgt=0,newAssoc={};for(key in arr){lgt+=1;newAssoc[key]=arr[key];}
arr=newAssoc;offst=(offst<0)?lgt+offst:offst;lgth=lgth===undefined?lgt:(lgth<0)?lgt+lgth-offst:lgth;var assoc={};var start=false,it=-1,arrlgth=0,no_pk_idx=0;for(key in arr){++it;if(arrlgth>=lgth){break;}
if(it==offst){start=true;}
if(!start){continue;}++arrlgth;if(this.is_int(key)&&!preserve_keys){assoc[no_pk_idx++]=arr[key];}else{assoc[key]=arr[key];}}
return assoc;}
if(lgth===undefined){return arr.slice(offst);}else if(lgth>=0){return arr.slice(offst,offst+lgth);}else{return arr.slice(offst,lgth);}}
function array_splice(arr,offst,lgth,replacement){var _checkToUpIndices=function(arr,ct,key){if(arr[ct]!==undefined){var tmp=ct;ct+=1;if(ct===key){ct+=1;}
ct=_checkToUpIndices(arr,ct,key);arr[ct]=arr[tmp];delete arr[tmp];}
return ct;};if(replacement&&typeof replacement!=='object'){replacement=[replacement];}
if(lgth===undefined){lgth=offst>=0?arr.length-offst:-offst;}else if(lgth<0){lgth=(offst>=0?arr.length-offst:-offst)+lgth;}
if(Object.prototype.toString.call(arr)!=='[object Array]'){var lgt=0,ct=-1,rmvd=[],rmvdObj={},repl_ct=-1,int_ct=-1;var returnArr=true,rmvd_ct=0,rmvd_lgth=0,key='';for(key in arr){lgt+=1;}
offst=(offst>=0)?offst:lgt+offst;for(key in arr){ct+=1;if(ct<offst){if(this.is_int(key)){int_ct+=1;if(parseInt(key,10)===int_ct){continue;}
_checkToUpIndices(arr,int_ct,key);arr[int_ct]=arr[key];delete arr[key];}
continue;}
if(returnArr&&this.is_int(key)){rmvd.push(arr[key]);rmvdObj[rmvd_ct++]=arr[key];}else{rmvdObj[key]=arr[key];returnArr=false;}
rmvd_lgth+=1;if(replacement&&replacement[++repl_ct]){arr[key]=replacement[repl_ct];}else{delete arr[key];}}
return returnArr?rmvd:rmvdObj;}
if(replacement){replacement.unshift(offst,lgth);return Array.prototype.splice.apply(arr,replacement);}
return arr.splice(offst,lgth);}
function array_sum(array){var key,sum=0;if(typeof array!=='object'){return null;}
for(key in array){sum+=(array[key]*1);}
return sum;}
function array_udiff(arr1){var retArr={},arglm1=arguments.length-1,cb=arguments[arglm1],arr='',i=1,k1='',k='';cb=(typeof cb==='string')?this.window[cb]:(Object.prototype.toString.call(cb)==='[object Array]')?this.window[cb[0]][cb[1]]:cb;arr1keys:for(k1 in arr1){for(i=1;i<arglm1;i++){arr=arguments[i];for(k in arr){if(cb(arr[k],arr1[k1])===0){continue arr1keys;}}
retArr[k1]=arr1[k1];}}
return retArr;}
function array_udiff_assoc(arr1){var retArr={},arglm1=arguments.length-1,cb=arguments[arglm1],arr={},i=1,k1='',k='';cb=(typeof cb==='string')?this.window[cb]:(Object.prototype.toString.call(cb)==='[object Array]')?this.window[cb[0]][cb[1]]:cb;arr1keys:for(k1 in arr1){for(i=1;i<arglm1;i++){arr=arguments[i];for(k in arr){if(cb(arr[k],arr1[k1])===0&&k===k1){continue arr1keys;}}
retArr[k1]=arr1[k1];}}
return retArr;}
function array_udiff_uassoc(arr1){var retArr={},arglm1=arguments.length-1,arglm2=arglm1-1,cb=arguments[arglm1],cb0=arguments[arglm2],k1='',i=1,k='',arr={};cb=(typeof cb==='string')?this.window[cb]:(Object.prototype.toString.call(cb)==='[object Array]')?this.window[cb[0]][cb[1]]:cb;cb0=(typeof cb0==='string')?this.window[cb0]:(Object.prototype.toString.call(cb0)==='[object Array]')?this.window[cb0[0]][cb0[1]]:cb0;arr1keys:for(k1 in arr1){for(i=1;i<arglm2;i++){arr=arguments[i];for(k in arr){if(cb0(arr[k],arr1[k1])===0&&cb(k,k1)===0){continue arr1keys;}}
retArr[k1]=arr1[k1];}}
return retArr;}
function array_uintersect(arr1){var retArr={},arglm1=arguments.length-1,arglm2=arglm1-1,cb=arguments[argm1],k1='',i=1,arr={},k='';cb=(typeof cb==='string')?this.window[cb]:(Object.prototype.toString.call(cb)==='[object Array]')?this.window[cb[0]][cb[1]]:cb;arr1keys:for(k1 in arr1){arrs:for(i=1;i<arglm1;i++){arr=arguments[i];for(k in arr){if(cb(arr[k],arr1[k1])===0){if(i===arglm2){retArr[k1]=arr1[k1];}
continue arrs;}}
continue arr1keys;}}
return retArr;}
function array_uintersect_assoc(arr1){var retArr={},arglm1=arguments.length-1,arglm2=arglm1-2,cb=arguments[arglm1],k1='',i=1,arr={},k='';cb=(typeof cb==='string')?this.window[cb]:(Object.prototype.toString.call(cb)==='[object Array]')?this.window[cb[0]][cb[1]]:cb;arr1keys:for(k1 in arr1){arrs:for(i=1;i<arglm1;i++){arr=arguments[i];for(k in arr){if(k===k1&&cb(arr[k],arr1[k1])===0){if(i===arglm2){retArr[k1]=arr1[k1];}
continue arrs;}}
continue arr1keys;}}
return retArr;}
function array_uintersect_uassoc(arr1){var retArr={},arglm1=arguments.length-1,arglm2=arglm1-1,cb=arguments[arglm1],cb0=arguments[arglm2],k1='',i=1,k='',arr={};cb=(typeof cb==='string')?this.window[cb]:(Object.prototype.toString.call(cb)==='[object Array]')?this.window[cb[0]][cb[1]]:cb;cb0=(typeof cb0==='string')?this.window[cb0]:(Object.prototype.toString.call(cb0)==='[object Array]')?this.window[cb0[0]][cb0[1]]:cb0;arr1keys:for(k1 in arr1){arrs:for(i=1;i<arglm2;i++){arr=arguments[i];for(k in arr){if(cb0(arr[k],arr1[k1])===0&&cb(k,k1)===0){if(i===arguments.length-3){retArr[k1]=arr1[k1];}
continue arrs;}}
continue arr1keys;}}
return retArr;}
function array_unique(inputArr){var key='',tmp_arr2={},val='';var __array_search=function(needle,haystack){var fkey='';for(fkey in haystack){if(haystack.hasOwnProperty(fkey)){if((haystack[fkey]+'')===(needle+'')){return fkey;}}}
return false;};for(key in inputArr){if(inputArr.hasOwnProperty(key)){val=inputArr[key];if(false===__array_search(val,tmp_arr2)){tmp_arr2[key]=val;}}}
return tmp_arr2;}
function array_unshift(array){var i=arguments.length;while(--i!==0){arguments[0].unshift(arguments[i]);}
return arguments[0].length;}
function array_values(input){var tmp_arr=[],key='';if(input&&typeof input==='object'&&input.change_key_case){return input.values();}
for(key in input){tmp_arr[tmp_arr.length]=input[key];}
return tmp_arr;}
function array_walk(array,funcname,userdata){var key;if(typeof array!=='object'||array===null){return false;}
for(key in array){if(typeof(userdata)!=='undefined'){eval(funcname+'( array [key] , key , userdata  )');}else{eval(funcname+'(  userdata ) ');}}
return true;}
function array_walk_recursive(array,funcname,userdata){var key;if(typeof array!='object'){return false;}
for(key in array){if(typeof array[key]=='object'){return this.array_walk_recursive(array[key],funcname,userdata);}
if(typeof(userdata)!='undefined'){eval(funcname+'( array [key] , key , userdata  )');}else{eval(funcname+'(  userdata ) ');}}
return true;}
function arsort(inputArr,sort_flags){var valArr=[],valArrLen=0,k,i,ret,sorter,that=this,strictForIn=false,populateArr={};switch(sort_flags){case'SORT_STRING':sorter=function(a,b){return that.strnatcmp(b,a);};break;case'SORT_LOCALE_STRING':var loc=this.i18n_loc_get_default();sorter=this.php_js.i18nLocales[loc].sorting;break;case'SORT_NUMERIC':sorter=function(a,b){return(a-b);};break;case'SORT_REGULAR':default:sorter=function(b,a){var aFloat=parseFloat(a),bFloat=parseFloat(b),aNumeric=aFloat+''===a,bNumeric=bFloat+''===b;if(aNumeric&&bNumeric){return aFloat>bFloat?1:aFloat<bFloat?-1:0;}else if(aNumeric&&!bNumeric){return 1;}else if(!aNumeric&&bNumeric){return-1;}
return a>b?1:a<b?-1:0;};break;}
this.php_js=this.php_js||{};this.php_js.ini=this.php_js.ini||{};strictForIn=this.php_js.ini['phpjs.strictForIn']&&this.php_js.ini['phpjs.strictForIn'].local_value&&this.php_js.ini['phpjs.strictForIn'].local_value!=='off';populateArr=strictForIn?inputArr:populateArr;for(k in inputArr){if(inputArr.hasOwnProperty(k)){valArr.push([k,inputArr[k]]);if(strictForIn){delete inputArr[k];}}}
valArr.sort(function(a,b){return sorter(a[1],b[1]);});for(i=0,valArrLen=valArr.length;i<valArrLen;i++){populateArr[valArr[i][0]]=valArr[i][1];}
return strictForIn||populateArr;}
function asin(arg){return Math.asin(arg);}
function asinh(arg){return Math.log(arg+Math.sqrt(arg*arg+1));}
function asort(inputArr,sort_flags){var valArr=[],valArrLen=0,k,i,ret,sorter,that=this,strictForIn=false,populateArr={};switch(sort_flags){case'SORT_STRING':sorter=function(a,b){return that.strnatcmp(a,b);};break;case'SORT_LOCALE_STRING':var loc=this.i18n_loc_get_default();sorter=this.php_js.i18nLocales[loc].sorting;break;case'SORT_NUMERIC':sorter=function(a,b){return(a-b);};break;case'SORT_REGULAR':default:sorter=function(a,b){var aFloat=parseFloat(a),bFloat=parseFloat(b),aNumeric=aFloat+''===a,bNumeric=bFloat+''===b;if(aNumeric&&bNumeric){return aFloat>bFloat?1:aFloat<bFloat?-1:0;}else if(aNumeric&&!bNumeric){return 1;}else if(!aNumeric&&bNumeric){return-1;}
return a>b?1:a<b?-1:0;};break;}
this.php_js=this.php_js||{};this.php_js.ini=this.php_js.ini||{};strictForIn=this.php_js.ini['phpjs.strictForIn']&&this.php_js.ini['phpjs.strictForIn'].local_value&&this.php_js.ini['phpjs.strictForIn'].local_value!=='off';populateArr=strictForIn?inputArr:populateArr;for(k in inputArr){if(inputArr.hasOwnProperty(k)){valArr.push([k,inputArr[k]]);if(strictForIn){delete inputArr[k];}}}
valArr.sort(function(a,b){return sorter(a[1],b[1]);});for(i=0,valArrLen=valArr.length;i<valArrLen;i++){populateArr[valArr[i][0]]=valArr[i][1];}
return strictForIn||populateArr;}
function atan(arg){return Math.atan(arg);}
function atan2(y,x){return Math.atan2(y,x);}
function atanh(arg){return 0.5*Math.log((1+arg)/(1-arg));}
function base64_decode(data){var b64="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";var o1,o2,o3,h1,h2,h3,h4,bits,i=0,ac=0,dec="",tmp_arr=[];if(!data){return data;}
data+='';do{h1=b64.indexOf(data.charAt(i++));h2=b64.indexOf(data.charAt(i++));h3=b64.indexOf(data.charAt(i++));h4=b64.indexOf(data.charAt(i++));bits=h1<<18|h2<<12|h3<<6|h4;o1=bits>>16&0xff;o2=bits>>8&0xff;o3=bits&0xff;if(h3==64){tmp_arr[ac++]=String.fromCharCode(o1);}else if(h4==64){tmp_arr[ac++]=String.fromCharCode(o1,o2);}else{tmp_arr[ac++]=String.fromCharCode(o1,o2,o3);}}while(i<data.length);dec=tmp_arr.join('');dec=this.utf8_decode(dec);return dec;}
function base64_encode(data){var b64="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";var o1,o2,o3,h1,h2,h3,h4,bits,i=0,ac=0,enc="",tmp_arr=[];if(!data){return data;}
data=this.utf8_encode(data+'');do{o1=data.charCodeAt(i++);o2=data.charCodeAt(i++);o3=data.charCodeAt(i++);bits=o1<<16|o2<<8|o3;h1=bits>>18&0x3f;h2=bits>>12&0x3f;h3=bits>>6&0x3f;h4=bits&0x3f;tmp_arr[ac++]=b64.charAt(h1)+b64.charAt(h2)+b64.charAt(h3)+b64.charAt(h4);}while(i<data.length);enc=tmp_arr.join('');var r=data.length%3;return(r?enc.slice(0,r-3):enc)+'==='.slice(r||3);}
function base_convert(number,frombase,tobase){return parseInt(number+'',frombase|0).toString(tobase|0);}
function bin2hex(s){var i,f=0,a=[];s+='';f=s.length;for(i=0;i<f;i++){a[i]=s.charCodeAt(i).toString(16).replace(/^([\da-f])$/,"0$1");}
return a.join('');}
function bindec(binary_string){binary_string=(binary_string+'').replace(/[^01]/gi,'');return parseInt(binary_string,2);}
function ceil(value){return Math.ceil(value);}
function checkdate(m,d,y){return m>0&&m<13&&y>0&&y<32768&&d>0&&d<=(new Date(y,m,0)).getDate();}
function chop(str,charlist){return this.rtrim(str,charlist);}
function chr(codePt){if(codePt>0xFFFF){codePt-=0x10000;return String.fromCharCode(0xD800+(codePt>>10),0xDC00+(codePt&0x3FF));}
return String.fromCharCode(codePt);}
function chunk_split(body,chunklen,end){chunklen=parseInt(chunklen,10)||76;end=end||'\r\n';if(chunklen<1){return false;}
return body.match(new RegExp(".{0,"+chunklen+"}","g")).join(end);}
function class_exists(cls){var i='';cls=this.window[cls];if(typeof cls!=='function'){return false;}
for(i in cls.prototype){return true;}
for(i in cls){if(i!=='prototype'){return true;}}
if(cls.toSource&&cls.toSource().match(/this\./)){return true;}
return false;}
function compact(){var matrix={},that=this;var process=function(value){var i=0,l=value.length,key_value='';for(i=0;i<l;i++){key_value=value[i];if(Object.prototype.toString.call(key_value)==='[object Array]'){process(key_value);}else{if(typeof that.window[key_value]!=='undefined'){matrix[key_value]=that.window[key_value];}}}
return true;};process(arguments);return matrix;}
function cos(arg){return Math.cos(arg);}
function cosh(arg){return(Math.exp(arg)+Math.exp(-arg))/2;}
function count(mixed_var,mode){var key,cnt=0;if(mixed_var===null||typeof mixed_var==='undefined'){return 0;}else if(mixed_var.constructor!==Array&&mixed_var.constructor!==Object){return 1;}
if(mode==='COUNT_RECURSIVE'){mode=1;}
if(mode!=1){mode=0;}
for(key in mixed_var){if(mixed_var.hasOwnProperty(key)){cnt++;if(mode==1&&mixed_var[key]&&(mixed_var[key].constructor===Array||mixed_var[key].constructor===Object)){cnt+=this.count(mixed_var[key],1);}}}
return cnt;}
function count_chars(str,mode){var result={},resultArr=[],i;str=(''+str).split('').sort().join('').match(/(.)\1*/g);if((mode&1)==0){for(i=0;i!=256;i++){result[i]=0;}}
if(mode===2||mode===4){for(i=0;i!=str.length;i+=1){delete result[str[i].charCodeAt(0)];}
for(i in result){result[i]=(mode===4)?String.fromCharCode(i):0;}}else if(mode===3){for(i=0;i!=str.length;i+=1){result[i]=str[i].slice(0,1);}}else{for(i=0;i!=str.length;i+=1){result[str[i].charCodeAt(0)]=str[i].length;}}
if(mode<3){return result;}
for(i in result){resultArr.push(result[i]);}
return resultArr.join('');}
function crc32(str){str=this.utf8_encode(str);var table="00000000 77073096 EE0E612C 990951BA 076DC419 706AF48F E963A535 9E6495A3 0EDB8832 79DCB8A4 E0D5E91E 97D2D988 09B64C2B 7EB17CBD E7B82D07 90BF1D91 1DB71064 6AB020F2 F3B97148 84BE41DE 1ADAD47D 6DDDE4EB F4D4B551 83D385C7 136C9856 646BA8C0 FD62F97A 8A65C9EC 14015C4F 63066CD9 FA0F3D63 8D080DF5 3B6E20C8 4C69105E D56041E4 A2677172 3C03E4D1 4B04D447 D20D85FD A50AB56B 35B5A8FA 42B2986C DBBBC9D6 ACBCF940 32D86CE3 45DF5C75 DCD60DCF ABD13D59 26D930AC 51DE003A C8D75180 BFD06116 21B4F4B5 56B3C423 CFBA9599 B8BDA50F 2802B89E 5F058808 C60CD9B2 B10BE924 2F6F7C87 58684C11 C1611DAB B6662D3D 76DC4190 01DB7106 98D220BC EFD5102A 71B18589 06B6B51F 9FBFE4A5 E8B8D433 7807C9A2 0F00F934 9609A88E E10E9818 7F6A0DBB 086D3D2D 91646C97 E6635C01 6B6B51F4 1C6C6162 856530D8 F262004E 6C0695ED 1B01A57B 8208F4C1 F50FC457 65B0D9C6 12B7E950 8BBEB8EA FCB9887C 62DD1DDF 15DA2D49 8CD37CF3 FBD44C65 4DB26158 3AB551CE A3BC0074 D4BB30E2 4ADFA541 3DD895D7 A4D1C46D D3D6F4FB 4369E96A 346ED9FC AD678846 DA60B8D0 44042D73 33031DE5 AA0A4C5F DD0D7CC9 5005713C 270241AA BE0B1010 C90C2086 5768B525 206F85B3 B966D409 CE61E49F 5EDEF90E 29D9C998 B0D09822 C7D7A8B4 59B33D17 2EB40D81 B7BD5C3B C0BA6CAD EDB88320 9ABFB3B6 03B6E20C 74B1D29A EAD54739 9DD277AF 04DB2615 73DC1683 E3630B12 94643B84 0D6D6A3E 7A6A5AA8 E40ECF0B 9309FF9D 0A00AE27 7D079EB1 F00F9344 8708A3D2 1E01F268 6906C2FE F762575D 806567CB 196C3671 6E6B06E7 FED41B76 89D32BE0 10DA7A5A 67DD4ACC F9B9DF6F 8EBEEFF9 17B7BE43 60B08ED5 D6D6A3E8 A1D1937E 38D8C2C4 4FDFF252 D1BB67F1 A6BC5767 3FB506DD 48B2364B D80D2BDA AF0A1B4C 36034AF6 41047A60 DF60EFC3 A867DF55 316E8EEF 4669BE79 CB61B38C BC66831A 256FD2A0 5268E236 CC0C7795 BB0B4703 220216B9 5505262F C5BA3BBE B2BD0B28 2BB45A92 5CB36A04 C2D7FFA7 B5D0CF31 2CD99E8B 5BDEAE1D 9B64C2B0 EC63F226 756AA39C 026D930A 9C0906A9 EB0E363F 72076785 05005713 95BF4A82 E2B87A14 7BB12BAE 0CB61B38 92D28E9B E5D5BE0D 7CDCEFB7 0BDBDF21 86D3D2D4 F1D4E242 68DDB3F8 1FDA836E 81BE16CD F6B9265B 6FB077E1 18B74777 88085AE6 FF0F6A70 66063BCA 11010B5C 8F659EFF F862AE69 616BFFD3 166CCF45 A00AE278 D70DD2EE 4E048354 3903B3C2 A7672661 D06016F7 4969474D 3E6E77DB AED16A4A D9D65ADC 40DF0B66 37D83BF0 A9BCAE53 DEBB9EC5 47B2CF7F 30B5FFE9 BDBDF21C CABAC28A 53B39330 24B4A3A6 BAD03605 CDD70693 54DE5729 23D967BF B3667A2E C4614AB8 5D681B02 2A6F2B94 B40BBE37 C30C8EA1 5A05DF1B 2D02EF8D";var crc=0;var x=0;var y=0;crc=crc^(-1);for(var i=0,iTop=str.length;i<iTop;i++){y=(crc^str.charCodeAt(i))&0xFF;x="0x"+table.substr(y*9,8);crc=(crc>>>8)^x;}
return crc^(-1);}
function date(format,timestamp){var that=this,jsdate,f,formatChr=/\\?([a-z])/gi,formatChrCb,_pad=function(n,c){if((n=n+'').length<c){return new Array((++c)-n.length).join('0')+n;}
return n;},txt_words=["Sun","Mon","Tues","Wednes","Thurs","Fri","Satur","January","February","March","April","May","June","July","August","September","October","November","December"];formatChrCb=function(t,s){return f[t]?f[t]():s;};f={d:function(){return _pad(f.j(),2);},D:function(){return f.l().slice(0,3);},j:function(){return jsdate.getDate();},l:function(){return txt_words[f.w()]+'day';},N:function(){return f.w()||7;},S:function(){var j=f.j();return j>4&&j<21?'th':{1:'st',2:'nd',3:'rd'}[j%10]||'th';},w:function(){return jsdate.getDay();},z:function(){var a=new Date(f.Y(),f.n()-1,f.j()),b=new Date(f.Y(),0,1);return Math.round((a-b)/864e5)+1;},W:function(){var a=new Date(f.Y(),f.n()-1,f.j()-f.N()+3),b=new Date(a.getFullYear(),0,4);return _pad(1+Math.round((a-b)/864e5/7),2);},F:function(){return txt_words[6+f.n()];},m:function(){return _pad(f.n(),2);},M:function(){return f.F().slice(0,3);},n:function(){return jsdate.getMonth()+1;},t:function(){return(new Date(f.Y(),f.n(),0)).getDate();},L:function(){return new Date(f.Y(),1,29).getMonth()===1|0;},o:function(){var n=f.n(),W=f.W(),Y=f.Y();return Y+(n===12&&W<9?-1:n===1&&W>9);},Y:function(){return jsdate.getFullYear();},y:function(){return(f.Y()+"").slice(-2);},a:function(){return jsdate.getHours()>11?"pm":"am";},A:function(){return f.a().toUpperCase();},B:function(){var H=jsdate.getUTCHours()*36e2,i=jsdate.getUTCMinutes()*60,s=jsdate.getUTCSeconds();return _pad(Math.floor((H+i+s+36e2)/86.4)%1e3,3);},g:function(){return f.G()%12||12;},G:function(){return jsdate.getHours();},h:function(){return _pad(f.g(),2);},H:function(){return _pad(f.G(),2);},i:function(){return _pad(jsdate.getMinutes(),2);},s:function(){return _pad(jsdate.getSeconds(),2);},u:function(){return _pad(jsdate.getMilliseconds()*1000,6);},e:function(){throw'Not supported (see source code of date() for timezone on how to add support)';},I:function(){var a=new Date(f.Y(),0),c=Date.UTC(f.Y(),0),b=new Date(f.Y(),6),d=Date.UTC(f.Y(),6);return 0+((a-c)!==(b-d));},O:function(){var tzo=jsdate.getTimezoneOffset(),a=Math.abs(tzo);return(tzo>0?"-":"+")+_pad(Math.floor(a/60)*100+a%60,4);},P:function(){var O=f.O();return(O.substr(0,3)+":"+O.substr(3,2));},T:function(){return'UTC';},Z:function(){return-jsdate.getTimezoneOffset()*60;},c:function(){return'Y-m-d\\Th:i:sP'.replace(formatChr,formatChrCb);},r:function(){return'D, d M Y H:i:s O'.replace(formatChr,formatChrCb);},U:function(){return jsdate.getTime()/1000|0;}};this.date=function(format,timestamp){that=this;jsdate=((typeof timestamp==='undefined')?new Date():(timestamp instanceof Date)?new Date(timestamp):new Date(timestamp*1000));return format.replace(formatChr,formatChrCb);};return this.date(format,timestamp);}
function decbin(number){if(number<0){number=0xFFFFFFFF+number+1;}
return parseInt(number,10).toString(2);}
function dechex(number){if(number<0){number=0xFFFFFFFF+number+1;}
return parseInt(number,10).toString(16);}
function decoct(number){if(number<0){number=0xFFFFFFFF+number+1;}
return parseInt(number,10).toString(8);}
function deg2rad(angle){return(angle/180)*Math.PI;}
function doubleval(mixed_var){return this.floatval(mixed_var);}
function echo(){var arg='',argc=arguments.length,argv=arguments,i=0,holder,win=this.window,d=win.document,ns_xhtml='http://www.w3.org/1999/xhtml',ns_xul='http://www.mozilla.org/keymaster/gatekeeper/there.is.only.xul';var stringToDOM=function(str,parent,ns,container){var extraNSs='';if(ns===ns_xul){extraNSs=' xmlns:html="'+ns_xhtml+'"';}
var stringContainer='<'+container+' xmlns="'+ns+'"'+extraNSs+'>'+str+'</'+container+'>';var dils=win.DOMImplementationLS,dp=win.DOMParser,ax=win.ActiveXObject;if(dils&&dils.createLSInput&&dils.createLSParser){var lsInput=dils.createLSInput();lsInput.stringData=stringContainer;var lsParser=dils.createLSParser(1,null);return lsParser.parse(lsInput).firstChild;}else if(dp){try{var fc=new dp().parseFromString(stringContainer,'text/xml');if(fc&&fc.documentElement&&fc.documentElement.localName!=='parsererror'&&fc.documentElement.namespaceURI!=='http://www.mozilla.org/newlayout/xml/parsererror.xml'){return fc.documentElement.firstChild;}}catch(e){}}else if(ax){var axo=new ax('MSXML2.DOMDocument');axo.loadXML(str);return axo.documentElement;}
if(d.createElementNS&&(d.documentElement.namespaceURI||d.documentElement.nodeName.toLowerCase()!=='html'||(d.contentType&&d.contentType!=='text/html'))){holder=d.createElementNS(ns,container);}else{holder=d.createElement(container);}
holder.innerHTML=str;while(holder.firstChild){parent.appendChild(holder.firstChild);}
return false;};var ieFix=function(node){if(node.nodeType===1){var newNode=d.createElement(node.nodeName);var i,len;if(node.attributes&&node.attributes.length>0){for(i=0,len=node.attributes.length;i<len;i++){newNode.setAttribute(node.attributes[i].nodeName,node.getAttribute(node.attributes[i].nodeName));}}
if(node.childNodes&&node.childNodes.length>0){for(i=0,len=node.childNodes.length;i<len;i++){newNode.appendChild(ieFix(node.childNodes[i]));}}
return newNode;}else{return d.createTextNode(node.nodeValue);}};var replacer=function(s,m1,m2){if(m1!=='\\'){return m1+eval(m2);}else{return s;}};this.php_js=this.php_js||{};var phpjs=this.php_js,ini=phpjs.ini,obs=phpjs.obs;for(i=0;i<argc;i++){arg=argv[i];if(ini&&ini['phpjs.echo_embedded_vars']){arg=arg.replace(/(.?)\{?\$(\w*?\}|\w*)/g,replacer);}
if(!phpjs.flushing&&obs&&obs.length){obs[obs.length-1].buffer+=arg;continue;}
if(d.appendChild){if(d.body){if(win.navigator.appName==='Microsoft Internet Explorer'){d.body.appendChild(stringToDOM(ieFix(arg)));}else{var unappendedLeft=stringToDOM(arg,d.body,ns_xhtml,'div').cloneNode(true);if(unappendedLeft){d.body.appendChild(unappendedLeft);}}}else{d.documentElement.appendChild(stringToDOM(arg,d.documentElement,ns_xul,'description'));}}else if(d.write){d.write(arg);}}}
function end(arr){this.php_js=this.php_js||{};this.php_js.pointers=this.php_js.pointers||[];var indexOf=function(value){for(var i=0,length=this.length;i<length;i++){if(this[i]===value){return i;}}
return-1;};var pointers=this.php_js.pointers;if(!pointers.indexOf){pointers.indexOf=indexOf;}
if(pointers.indexOf(arr)===-1){pointers.push(arr,0);}
var arrpos=pointers.indexOf(arr);if(Object.prototype.toString.call(arr)!=='[object Array]'){var ct=0;for(var k in arr){ct++;var val=arr[k];}
if(ct===0){return false;}
pointers[arrpos+1]=ct-1;return val;}
if(arr.length===0){return false;}
pointers[arrpos+1]=arr.length-1;return arr[pointers[arrpos+1]];}
function exp(arg){return Math.exp(arg);}
function explode(delimiter,string,limit){var emptyArray={0:''};if(arguments.length<2||typeof arguments[0]=='undefined'||typeof arguments[1]=='undefined'){return null;}
if(delimiter===''||delimiter===false||delimiter===null){return false;}
if(typeof delimiter=='function'||typeof delimiter=='object'||typeof string=='function'||typeof string=='object'){return emptyArray;}
if(delimiter===true){delimiter='1';}
if(!limit){return string.toString().split(delimiter.toString());}
var splitted=string.toString().split(delimiter.toString());var partA=splitted.splice(0,limit-1);var partB=splitted.join(delimiter.toString());partA.push(partB);return partA;}
function expm1(x){var ret=0,n=50;var factorial=function factorial(n){if((n===0)||(n===1)){return 1;}else{var result=(n*factorial(n-1));return result;}};for(var i=1;i<n;i++){ret+=Math.pow(x,i)/factorial(i);}
return ret;}
function floatval(mixed_var){return(parseFloat(mixed_var)||0);}
function floor(value){return Math.floor(value);}
function fmod(x,y){var tmp,tmp2,p=0,pY=0,l=0.0,l2=0.0;tmp=x.toExponential().match(/^.\.?(.*)e(.+)$/);p=parseInt(tmp[2],10)-(tmp[1]+'').length;tmp=y.toExponential().match(/^.\.?(.*)e(.+)$/);pY=parseInt(tmp[2],10)-(tmp[1]+'').length;if(pY>p){p=pY;}
tmp2=(x%y);if(p<-100||p>20){l=Math.round(Math.log(tmp2)/Math.log(10));l2=Math.pow(10,l);return(tmp2/l2).toFixed(l-p)*l2;}else{return parseFloat(tmp2.toFixed(-p));}}
function get_class(obj){if(obj&&typeof obj==='object'&&Object.prototype.toString.call(obj)!=='[object Array]'&&obj.constructor&&obj!=this.window){var arr=obj.constructor.toString().match(/function\s*(\w+)/);if(arr&&arr.length==2){return arr[1];}}
return false;}
function get_defined_vars(){var i='',arr=[],already={};for(i in this.window){try{if(typeof this.window[i]==='object'){for(var j in this.window[i]){if(this.window[j]&&!already[j]){already[j]=1;arr.push(j);}}}else if(!already[i]){already[i]=1;arr.push(i);}}catch(e){if(!already[i]){already[i]=1;arr.push(i);}}}
return arr;}
function get_headers(url,format){var req=this.window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest();if(!req){throw new Error('XMLHttpRequest not supported');}
var tmp,headers,pair,i,j=0;req.open('HEAD',url,false);req.send(null);if(req.readyState<3){return false;}
tmp=req.getAllResponseHeaders();tmp=tmp.split('\n');tmp=this.array_filter(tmp,function(value){return value.substring(1)!=='';});headers=format?{}:[];for(i in tmp){if(format){pair=tmp[i].split(':');headers[pair.splice(0,1)]=pair.join(':').substring(1);}else{headers[j++]=tmp[i];}}
return headers;}
function get_html_translation_table(table,quote_style){var entities={},hash_map={},decimal;var constMappingTable={},constMappingQuoteStyle={};var useTable={},useQuoteStyle={};constMappingTable[0]='HTML_SPECIALCHARS';constMappingTable[1]='HTML_ENTITIES';constMappingQuoteStyle[0]='ENT_NOQUOTES';constMappingQuoteStyle[2]='ENT_COMPAT';constMappingQuoteStyle[3]='ENT_QUOTES';useTable=!isNaN(table)?constMappingTable[table]:table?table.toUpperCase():'HTML_SPECIALCHARS';useQuoteStyle=!isNaN(quote_style)?constMappingQuoteStyle[quote_style]:quote_style?quote_style.toUpperCase():'ENT_COMPAT';if(useTable!=='HTML_SPECIALCHARS'&&useTable!=='HTML_ENTITIES'){throw new Error("Table: "+useTable+' not supported');}
entities['38']='&amp;';if(useTable==='HTML_ENTITIES'){entities['160']='&nbsp;';entities['161']='&iexcl;';entities['162']='&cent;';entities['163']='&pound;';entities['164']='&curren;';entities['165']='&yen;';entities['166']='&brvbar;';entities['167']='&sect;';entities['168']='&uml;';entities['169']='&copy;';entities['170']='&ordf;';entities['171']='&laquo;';entities['172']='&not;';entities['173']='&shy;';entities['174']='&reg;';entities['175']='&macr;';entities['176']='&deg;';entities['177']='&plusmn;';entities['178']='&sup2;';entities['179']='&sup3;';entities['180']='&acute;';entities['181']='&micro;';entities['182']='&para;';entities['183']='&middot;';entities['184']='&cedil;';entities['185']='&sup1;';entities['186']='&ordm;';entities['187']='&raquo;';entities['188']='&frac14;';entities['189']='&frac12;';entities['190']='&frac34;';entities['191']='&iquest;';entities['192']='&Agrave;';entities['193']='&Aacute;';entities['194']='&Acirc;';entities['195']='&Atilde;';entities['196']='&Auml;';entities['197']='&Aring;';entities['198']='&AElig;';entities['199']='&Ccedil;';entities['200']='&Egrave;';entities['201']='&Eacute;';entities['202']='&Ecirc;';entities['203']='&Euml;';entities['204']='&Igrave;';entities['205']='&Iacute;';entities['206']='&Icirc;';entities['207']='&Iuml;';entities['208']='&ETH;';entities['209']='&Ntilde;';entities['210']='&Ograve;';entities['211']='&Oacute;';entities['212']='&Ocirc;';entities['213']='&Otilde;';entities['214']='&Ouml;';entities['215']='&times;';entities['216']='&Oslash;';entities['217']='&Ugrave;';entities['218']='&Uacute;';entities['219']='&Ucirc;';entities['220']='&Uuml;';entities['221']='&Yacute;';entities['222']='&THORN;';entities['223']='&szlig;';entities['224']='&agrave;';entities['225']='&aacute;';entities['226']='&acirc;';entities['227']='&atilde;';entities['228']='&auml;';entities['229']='&aring;';entities['230']='&aelig;';entities['231']='&ccedil;';entities['232']='&egrave;';entities['233']='&eacute;';entities['234']='&ecirc;';entities['235']='&euml;';entities['236']='&igrave;';entities['237']='&iacute;';entities['238']='&icirc;';entities['239']='&iuml;';entities['240']='&eth;';entities['241']='&ntilde;';entities['242']='&ograve;';entities['243']='&oacute;';entities['244']='&ocirc;';entities['245']='&otilde;';entities['246']='&ouml;';entities['247']='&divide;';entities['248']='&oslash;';entities['249']='&ugrave;';entities['250']='&uacute;';entities['251']='&ucirc;';entities['252']='&uuml;';entities['253']='&yacute;';entities['254']='&thorn;';entities['255']='&yuml;';}
if(useQuoteStyle!=='ENT_NOQUOTES'){entities['34']='&quot;';}
if(useQuoteStyle==='ENT_QUOTES'){entities['39']='&#39;';}
entities['60']='&lt;';entities['62']='&gt;';for(decimal in entities){if(entities.hasOwnProperty(decimal)){hash_map[String.fromCharCode(decimal)]=entities[decimal];}}
return hash_map;}
function getdate(timestamp){var _w=['Sun','Mon','Tues','Wednes','Thurs','Fri','Satur'];var _m=['January','February','March','April','May','June','July','August','September','October','November','December'];var d=((typeof(timestamp)=='undefined')?new Date():(typeof(timestamp)=='object')?new Date(timestamp):new Date(timestamp*1000));var w=d.getDay();var m=d.getMonth();var y=d.getFullYear();var r={};r.seconds=d.getSeconds();r.minutes=d.getMinutes();r.hours=d.getHours();r.mday=d.getDate();r.wday=w;r.mon=m+1;r.year=y;r.yday=Math.floor((d-(new Date(y,0,1)))/86400000);r.weekday=_w[w]+'day';r.month=_m[m];r['0']=parseInt(d.getTime()/1000,10);return r;}
function getrandmax(){return 2147483647;}
function hexdec(hex_string){hex_string=(hex_string+'').replace(/[^a-f0-9]/gi,'');return parseInt(hex_string,16);}
function html_entity_decode(string,quote_style){var hash_map={},symbol='',tmp_str='',entity='';tmp_str=string.toString();if(false===(hash_map=this.get_html_translation_table('HTML_ENTITIES',quote_style))){return false;}
delete(hash_map['&']);hash_map['&']='&amp;';for(symbol in hash_map){entity=hash_map[symbol];tmp_str=tmp_str.split(entity).join(symbol);}
tmp_str=tmp_str.split('&#039;').join("'");return tmp_str;}
function htmlentities(string,quote_style,charset,double_encode){var hash_map=this.get_html_translation_table('HTML_ENTITIES',quote_style),symbol='';string=string==null?'':string+'';if(!hash_map){return false;}
if(quote_style&&quote_style==='ENT_QUOTES'){hash_map["'"]='&#039;';}
if(!!double_encode||double_encode==null){for(symbol in hash_map){if(hash_map.hasOwnProperty(symbol)){string=string.split(symbol).join(hash_map[symbol]);}}}else{string=string.replace(/([\s\S]*?)(&(?:#\d+|#x[\da-f]+|[a-zA-Z][\da-z]*);|$)/g,function(ignore,text,entity){for(symbol in hash_map){if(hash_map.hasOwnProperty(symbol)){text=text.split(symbol).join(hash_map[symbol]);}}
return text+entity;});}
return string;}
function htmlspecialchars(string,quote_style,charset,double_encode){var optTemp=0,i=0,noquotes=false;if(typeof quote_style==='undefined'||quote_style===null){quote_style=2;}
string=string.toString();if(double_encode!==false){string=string.replace(/&/g,'&amp;');}
string=string.replace(/</g,'&lt;').replace(/>/g,'&gt;');var OPTS={'ENT_NOQUOTES':0,'ENT_HTML_QUOTE_SINGLE':1,'ENT_HTML_QUOTE_DOUBLE':2,'ENT_COMPAT':2,'ENT_QUOTES':3,'ENT_IGNORE':4};if(quote_style===0){noquotes=true;}
if(typeof quote_style!=='number'){quote_style=[].concat(quote_style);for(i=0;i<quote_style.length;i++){if(OPTS[quote_style[i]]===0){noquotes=true;}
else if(OPTS[quote_style[i]]){optTemp=optTemp|OPTS[quote_style[i]];}}
quote_style=optTemp;}
if(quote_style&OPTS.ENT_HTML_QUOTE_SINGLE){string=string.replace(/'/g,'&#039;');}
if(!noquotes){string=string.replace(/"/g,'&quot;');}
return string;}
function htmlspecialchars_decode(string,quote_style){var optTemp=0,i=0,noquotes=false;if(typeof quote_style==='undefined'){quote_style=2;}
string=string.toString().replace(/&lt;/g,'<').replace(/&gt;/g,'>');var OPTS={'ENT_NOQUOTES':0,'ENT_HTML_QUOTE_SINGLE':1,'ENT_HTML_QUOTE_DOUBLE':2,'ENT_COMPAT':2,'ENT_QUOTES':3,'ENT_IGNORE':4};if(quote_style===0){noquotes=true;}
if(typeof quote_style!=='number'){quote_style=[].concat(quote_style);for(i=0;i<quote_style.length;i++){if(OPTS[quote_style[i]]===0){noquotes=true;}else if(OPTS[quote_style[i]]){optTemp=optTemp|OPTS[quote_style[i]];}}
quote_style=optTemp;}
if(quote_style&OPTS.ENT_HTML_QUOTE_SINGLE){string=string.replace(/&#0*39;/g,"'");}
if(!noquotes){string=string.replace(/&quot;/g,'"');}
string=string.replace(/&amp;/g,'&');return string;}
function http_build_query(formdata,numeric_prefix,arg_separator){var value,key,tmp=[],that=this;var _http_build_query_helper=function(key,val,arg_separator){var k,tmp=[];if(val===true){val="1";}else if(val===false){val="0";}
if(val!==null&&typeof(val)==="object"){for(k in val){if(val[k]!==null){tmp.push(_http_build_query_helper(key+"["+k+"]",val[k],arg_separator));}}
return tmp.join(arg_separator);}else if(typeof(val)!=="function"){return that.urlencode(key)+"="+that.urlencode(val);}else{throw new Error('There was an error processing for http_build_query().');}};if(!arg_separator){arg_separator="&";}
for(key in formdata){value=formdata[key];if(numeric_prefix&&!isNaN(key)){key=String(numeric_prefix)+key;}
tmp.push(_http_build_query_helper(key,value,arg_separator));}
return tmp.join(arg_separator);}
function hypot(x,y){return Math.sqrt(x*x+y*y)||0;}
function implode(glue,pieces){var i='',retVal='',tGlue='';if(arguments.length===1){pieces=glue;glue='';}
if(typeof(pieces)==='object'){if(Object.prototype.toString.call(pieces)==='[object Array]'){return pieces.join(glue);}
for(i in pieces){retVal+=tGlue+pieces[i];tGlue=glue;}
return retVal;}
return pieces;}
function in_array(needle,haystack,argStrict){var key='',strict=!!argStrict;if(strict){for(key in haystack){if(haystack[key]===needle){return true;}}}else{for(key in haystack){if(haystack[key]==needle){return true;}}}
return false;}
function intval(mixed_var,base){var tmp;var type=typeof(mixed_var);if(type==='boolean'){return+mixed_var;}else if(type==='string'){tmp=parseInt(mixed_var,base||10);return(isNaN(tmp)||!isFinite(tmp))?0:tmp;}else if(type==='number'&&isFinite(mixed_var)){return mixed_var|0;}else{return 0;}}
function ip2long(IP){var i=0;IP=IP.match(/^([1-9]\d*|0[0-7]*|0x[\da-f]+)(?:\.([1-9]\d*|0[0-7]*|0x[\da-f]+))?(?:\.([1-9]\d*|0[0-7]*|0x[\da-f]+))?(?:\.([1-9]\d*|0[0-7]*|0x[\da-f]+))?$/i);if(!IP){return false;}
IP[0]=0;for(i=1;i<5;i+=1){IP[0]+=!!((IP[i]||'').length);IP[i]=parseInt(IP[i])||0;}
IP.push(256,256,256,256);IP[4+IP[0]]*=Math.pow(256,4-IP[0]);if(IP[1]>=IP[5]||IP[2]>=IP[6]||IP[3]>=IP[7]||IP[4]>=IP[8]){return false;}
return IP[1]*(IP[0]===1||16777216)+IP[2]*(IP[0]<=2||65536)+IP[3]*(IP[0]<=3||256)+IP[4]*1;}
function is_bool(mixed_var){return(typeof mixed_var==='boolean');}
function is_double(mixed_var){return this.is_float(mixed_var);}
function is_finite(val){var warningType='';if(val===Infinity||val===-Infinity){return false;}
if(typeof val=='object'){warningType=(Object.prototype.toString.call(val)==='[object Array]'?'array':'object');}else if(typeof val=='string'&&!val.match(/^[\+\-]?\d/)){warningType='string';}
if(warningType){throw new Error('Warning: is_finite() expects parameter 1 to be double, '+warningType+' given');}
return true;}
function is_float(mixed_var){return+mixed_var===mixed_var&&!!(mixed_var%1);}
function is_infinite(val){var warningType='';if(val===Infinity||val===-Infinity){return true;}
if(typeof val=='object'){warningType=(Object.prototype.toString.call(val)==='[object Array]'?'array':'object');}else if(typeof val=='string'&&!val.match(/^[\+\-]?\d/)){warningType='string';}
if(warningType){throw new Error('Warning: is_infinite() expects parameter 1 to be double, '+warningType+' given');}
return false;}
function is_int(mixed_var){return mixed_var===~~mixed_var;}
function is_integer(mixed_var){return this.is_int(mixed_var);}
function is_long(mixed_var){return this.is_float(mixed_var);}
function is_nan(val){var warningType='';if(typeof val=='number'&&isNaN(val)){return true;}
if(typeof val=='object'){warningType=(Object.prototype.toString.call(val)==='[object Array]'?'array':'object');}
else if(typeof val=='string'&&!val.match(/^[\+\-]?\d/)){warningType='string';}
if(warningType){throw new Error('Warning: is_nan() expects parameter 1 to be double, '+warningType+' given');}
return false;}
function is_null(mixed_var){return(mixed_var===null);}
function is_numeric(mixed_var){return(typeof(mixed_var)==='number'||typeof(mixed_var)==='string')&&mixed_var!==''&&!isNaN(mixed_var);}
function is_real(mixed_var){return this.is_float(mixed_var);}
function is_scalar(mixed_var){return(/boolean|number|string/).test(typeof mixed_var);}
function is_string(mixed_var){return(typeof(mixed_var)=='string');}
function join(glue,pieces){return this.implode(glue,pieces);}
function json_decode(str_json){var json=this.window.JSON;if(typeof json==='object'&&typeof json.parse==='function'){try{return json.parse(str_json);}catch(err){if(!(err instanceof SyntaxError)){throw new Error('Unexpected error type in json_decode()');}
this.php_js=this.php_js||{};this.php_js.last_error_json=4;return null;}}
var cx=/[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g;var j;var text=str_json;cx.lastIndex=0;if(cx.test(text)){text=text.replace(cx,function(a){return'\\u'+('0000'+a.charCodeAt(0).toString(16)).slice(-4);});}
if((/^[\],:{}\s]*$/).test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,'@').replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,']').replace(/(?:^|:|,)(?:\s*\[)+/g,''))){j=eval('('+text+')');return j;}
this.php_js=this.php_js||{};this.php_js.last_error_json=4;return null;}
function json_encode(mixed_val){var retVal,json=this.window.JSON;try{if(typeof json==='object'&&typeof json.stringify==='function'){retVal=json.stringify(mixed_val);if(retVal===undefined){throw new SyntaxError('json_encode');}
return retVal;}
var value=mixed_val;var quote=function(string){var escapable=/[\\\"\u0000-\u001f\u007f-\u009f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g;var meta={'\b':'\\b','\t':'\\t','\n':'\\n','\f':'\\f','\r':'\\r','"':'\\"','\\':'\\\\'};escapable.lastIndex=0;return escapable.test(string)?'"'+string.replace(escapable,function(a){var c=meta[a];return typeof c==='string'?c:'\\u'+('0000'+a.charCodeAt(0).toString(16)).slice(-4);})+'"':'"'+string+'"';};var str=function(key,holder){var gap='';var indent='    ';var i=0;var k='';var v='';var length=0;var mind=gap;var partial=[];var value=holder[key];if(value&&typeof value==='object'&&typeof value.toJSON==='function'){value=value.toJSON(key);}
switch(typeof value){case'string':return quote(value);case'number':return isFinite(value)?String(value):'null';case'boolean':case'null':return String(value);case'object':if(!value){return'null';}
if((this.PHPJS_Resource&&value instanceof this.PHPJS_Resource)||(window.PHPJS_Resource&&value instanceof window.PHPJS_Resource)){throw new SyntaxError('json_encode');}
gap+=indent;partial=[];if(Object.prototype.toString.apply(value)==='[object Array]'){length=value.length;for(i=0;i<length;i+=1){partial[i]=str(i,value)||'null';}
v=partial.length===0?'[]':gap?'[\n'+gap+partial.join(',\n'+gap)+'\n'+mind+']':'['+partial.join(',')+']';gap=mind;return v;}
for(k in value){if(Object.hasOwnProperty.call(value,k)){v=str(k,value);if(v){partial.push(quote(k)+(gap?': ':':')+v);}}}
v=partial.length===0?'{}':gap?'{\n'+gap+partial.join(',\n'+gap)+'\n'+mind+'}':'{'+partial.join(',')+'}';gap=mind;return v;case'undefined':case'function':default:throw new SyntaxError('json_encode');}};return str('',{'':value});}catch(err){if(!(err instanceof SyntaxError)){throw new Error('Unexpected error type in json_encode()');}
this.php_js=this.php_js||{};this.php_js.last_error_json=4;return null;}}
function krsort(inputArr,sort_flags){var tmp_arr={},keys=[],sorter,i,k,that=this,strictForIn=false,populateArr={};switch(sort_flags){case'SORT_STRING':sorter=function(a,b){return that.strnatcmp(b,a);};break;case'SORT_LOCALE_STRING':var loc=this.i18n_loc_get_default();sorter=this.php_js.i18nLocales[loc].sorting;break;case'SORT_NUMERIC':sorter=function(a,b){return(b-a);};break;case'SORT_REGULAR':default:sorter=function(b,a){var aFloat=parseFloat(a),bFloat=parseFloat(b),aNumeric=aFloat+''===a,bNumeric=bFloat+''===b;if(aNumeric&&bNumeric){return aFloat>bFloat?1:aFloat<bFloat?-1:0;}else if(aNumeric&&!bNumeric){return 1;}else if(!aNumeric&&bNumeric){return-1;}
return a>b?1:a<b?-1:0;};break;}
for(k in inputArr){if(inputArr.hasOwnProperty(k)){keys.push(k);}}
keys.sort(sorter);this.php_js=this.php_js||{};this.php_js.ini=this.php_js.ini||{};strictForIn=this.php_js.ini['phpjs.strictForIn']&&this.php_js.ini['phpjs.strictForIn'].local_value&&this.php_js.ini['phpjs.strictForIn'].local_value!=='off';populateArr=strictForIn?inputArr:populateArr;for(i=0;i<keys.length;i++){k=keys[i];tmp_arr[k]=inputArr[k];if(strictForIn){delete inputArr[k];}}
for(i in tmp_arr){if(tmp_arr.hasOwnProperty(i)){populateArr[i]=tmp_arr[i];}}
return strictForIn||populateArr;}
function ksort(inputArr,sort_flags){var tmp_arr={},keys=[],sorter,i,k,that=this,strictForIn=false,populateArr={};switch(sort_flags){case'SORT_STRING':sorter=function(a,b){return that.strnatcmp(a,b);};break;case'SORT_LOCALE_STRING':var loc=this.i18n_loc_get_default();sorter=this.php_js.i18nLocales[loc].sorting;break;case'SORT_NUMERIC':sorter=function(a,b){return((a+0)-(b+0));};break;default:sorter=function(a,b){var aFloat=parseFloat(a),bFloat=parseFloat(b),aNumeric=aFloat+''===a,bNumeric=bFloat+''===b;if(aNumeric&&bNumeric){return aFloat>bFloat?1:aFloat<bFloat?-1:0;}else if(aNumeric&&!bNumeric){return 1;}else if(!aNumeric&&bNumeric){return-1;}
return a>b?1:a<b?-1:0;};break;}
for(k in inputArr){if(inputArr.hasOwnProperty(k)){keys.push(k);}}
keys.sort(sorter);this.php_js=this.php_js||{};this.php_js.ini=this.php_js.ini||{};strictForIn=this.php_js.ini['phpjs.strictForIn']&&this.php_js.ini['phpjs.strictForIn'].local_value&&this.php_js.ini['phpjs.strictForIn'].local_value!=='off';populateArr=strictForIn?inputArr:populateArr;for(i=0;i<keys.length;i++){k=keys[i];tmp_arr[k]=inputArr[k];if(strictForIn){delete inputArr[k];}}
for(i in tmp_arr){if(tmp_arr.hasOwnProperty(i)){populateArr[i]=tmp_arr[i];}}
return strictForIn||populateArr;}
function lcfirst(str){str+='';var f=str.charAt(0).toLowerCase();return f+str.substr(1);}
function lcg_value(){return Math.random();}
function levenshtein(s1,s2){if(s1==s2){return 0;}
var s1_len=s1.length;var s2_len=s2.length;if(s1_len===0){return s2_len;}
if(s2_len===0){return s1_len;}
var split=false;try{split=!('0')[0];}catch(e){split=true;}
if(split){s1=s1.split('');s2=s2.split('');}
var v0=new Array(s1_len+1);var v1=new Array(s1_len+1);var s1_idx=0,s2_idx=0,cost=0;for(s1_idx=0;s1_idx<s1_len+1;s1_idx++){v0[s1_idx]=s1_idx;}
var char_s1='',char_s2='';for(s2_idx=1;s2_idx<=s2_len;s2_idx++){v1[0]=s2_idx;char_s2=s2[s2_idx-1];for(s1_idx=0;s1_idx<s1_len;s1_idx++){char_s1=s1[s1_idx];cost=(char_s1==char_s2)?0:1;var m_min=v0[s1_idx+1]+1;var b=v1[s1_idx]+1;var c=v0[s1_idx]+cost;if(b<m_min){m_min=b;}
if(c<m_min){m_min=c;}
v1[s1_idx+1]=m_min;}
var v_tmp=v0;v0=v1;v1=v_tmp;}
return v0[s1_len];}
function log(arg,base){return(typeof base==='undefined')?Math.log(arg):Math.log(arg)/Math.log(base);}
function log10(arg){return Math.log(arg)/2.302585092994046;}
function log1p(x){var ret=0,n=50;if(x<=-1){return'-INF';}
if(x<0||x>1){return Math.log(1+x);}
for(var i=1;i<n;i++){if((i%2)===0){ret-=Math.pow(x,i)/i;}else{ret+=Math.pow(x,i)/i;}}
return ret;}
function long2ip(proper_address){var output=false;if(!isNaN(proper_address)&&(proper_address>=0||proper_address<=4294967295)){output=Math.floor(proper_address/Math.pow(256,3))+'.'+Math.floor((proper_address%Math.pow(256,3))/Math.pow(256,2))+'.'+Math.floor(((proper_address%Math.pow(256,3))%Math.pow(256,2))/Math.pow(256,1))+'.'+Math.floor((((proper_address%Math.pow(256,3))%Math.pow(256,2))%Math.pow(256,1))/Math.pow(256,0));}
return output;}
function ltrim(str,charlist){charlist=!charlist?' \\s\u00A0':(charlist+'').replace(/([\[\]\(\)\.\?\/\*\{\}\+\$\^\:])/g,'$1');var re=new RegExp('^['+charlist+']+','g');return(str+'').replace(re,'');}
function max(){var ar,retVal,i=0,n=0,argv=arguments,argc=argv.length,_obj2Array=function(obj){if(Object.prototype.toString.call(obj)==='[object Array]'){return obj;}
else{var ar=[];for(var i in obj){if(obj.hasOwnProperty(i)){ar.push(obj[i]);}}
return ar;}},_compare=function(current,next){var i=0,n=0,tmp=0,nl=0,cl=0;if(current===next){return 0;}
else if(typeof current==='object'){if(typeof next==='object'){current=_obj2Array(current);next=_obj2Array(next);cl=current.length;nl=next.length;if(nl>cl){return 1;}
else if(nl<cl){return-1;}
for(i=0,n=cl;i<n;++i){tmp=_compare(current[i],next[i]);if(tmp==1){return 1;}
else if(tmp==-1){return-1;}}
return 0;}
return-1;}
else if(typeof next=='object'){return 1;}
else if(isNaN(next)&&!isNaN(current)){if(current==0){return 0;}
return(current<0?1:-1);}
else if(isNaN(current)&&!isNaN(next)){if(next==0){return 0;}
return(next>0?1:-1);}
if(next==current){return 0;}
return(next>current?1:-1);};if(argc===0){throw new Error('At least one value should be passed to max()');}
else if(argc===1){if(typeof argv[0]==='object'){ar=_obj2Array(argv[0]);}
else{throw new Error('Wrong parameter count for max()');}
if(ar.length===0){throw new Error('Array must contain at least one element for max()');}}
else{ar=argv;}
retVal=ar[0];for(i=1,n=ar.length;i<n;++i){if(_compare(retVal,ar[i])==1){retVal=ar[i];}}
return retVal;}
function md5(str){var xl;var rotateLeft=function(lValue,iShiftBits){return(lValue<<iShiftBits)|(lValue>>>(32-iShiftBits));};var addUnsigned=function(lX,lY){var lX4,lY4,lX8,lY8,lResult;lX8=(lX&0x80000000);lY8=(lY&0x80000000);lX4=(lX&0x40000000);lY4=(lY&0x40000000);lResult=(lX&0x3FFFFFFF)+(lY&0x3FFFFFFF);if(lX4&lY4){return(lResult^0x80000000^lX8^lY8);}
if(lX4|lY4){if(lResult&0x40000000){return(lResult^0xC0000000^lX8^lY8);}else{return(lResult^0x40000000^lX8^lY8);}}else{return(lResult^lX8^lY8);}};var _F=function(x,y,z){return(x&y)|((~x)&z);};var _G=function(x,y,z){return(x&z)|(y&(~z));};var _H=function(x,y,z){return(x^y^z);};var _I=function(x,y,z){return(y^(x|(~z)));};var _FF=function(a,b,c,d,x,s,ac){a=addUnsigned(a,addUnsigned(addUnsigned(_F(b,c,d),x),ac));return addUnsigned(rotateLeft(a,s),b);};var _GG=function(a,b,c,d,x,s,ac){a=addUnsigned(a,addUnsigned(addUnsigned(_G(b,c,d),x),ac));return addUnsigned(rotateLeft(a,s),b);};var _HH=function(a,b,c,d,x,s,ac){a=addUnsigned(a,addUnsigned(addUnsigned(_H(b,c,d),x),ac));return addUnsigned(rotateLeft(a,s),b);};var _II=function(a,b,c,d,x,s,ac){a=addUnsigned(a,addUnsigned(addUnsigned(_I(b,c,d),x),ac));return addUnsigned(rotateLeft(a,s),b);};var convertToWordArray=function(str){var lWordCount;var lMessageLength=str.length;var lNumberOfWords_temp1=lMessageLength+8;var lNumberOfWords_temp2=(lNumberOfWords_temp1-(lNumberOfWords_temp1%64))/64;var lNumberOfWords=(lNumberOfWords_temp2+1)*16;var lWordArray=new Array(lNumberOfWords-1);var lBytePosition=0;var lByteCount=0;while(lByteCount<lMessageLength){lWordCount=(lByteCount-(lByteCount%4))/4;lBytePosition=(lByteCount%4)*8;lWordArray[lWordCount]=(lWordArray[lWordCount]|(str.charCodeAt(lByteCount)<<lBytePosition));lByteCount++;}
lWordCount=(lByteCount-(lByteCount%4))/4;lBytePosition=(lByteCount%4)*8;lWordArray[lWordCount]=lWordArray[lWordCount]|(0x80<<lBytePosition);lWordArray[lNumberOfWords-2]=lMessageLength<<3;lWordArray[lNumberOfWords-1]=lMessageLength>>>29;return lWordArray;};var wordToHex=function(lValue){var wordToHexValue="",wordToHexValue_temp="",lByte,lCount;for(lCount=0;lCount<=3;lCount++){lByte=(lValue>>>(lCount*8))&255;wordToHexValue_temp="0"+lByte.toString(16);wordToHexValue=wordToHexValue+wordToHexValue_temp.substr(wordToHexValue_temp.length-2,2);}
return wordToHexValue;};var x=[],k,AA,BB,CC,DD,a,b,c,d,S11=7,S12=12,S13=17,S14=22,S21=5,S22=9,S23=14,S24=20,S31=4,S32=11,S33=16,S34=23,S41=6,S42=10,S43=15,S44=21;str=this.utf8_encode(str);x=convertToWordArray(str);a=0x67452301;b=0xEFCDAB89;c=0x98BADCFE;d=0x10325476;xl=x.length;for(k=0;k<xl;k+=16){AA=a;BB=b;CC=c;DD=d;a=_FF(a,b,c,d,x[k+0],S11,0xD76AA478);d=_FF(d,a,b,c,x[k+1],S12,0xE8C7B756);c=_FF(c,d,a,b,x[k+2],S13,0x242070DB);b=_FF(b,c,d,a,x[k+3],S14,0xC1BDCEEE);a=_FF(a,b,c,d,x[k+4],S11,0xF57C0FAF);d=_FF(d,a,b,c,x[k+5],S12,0x4787C62A);c=_FF(c,d,a,b,x[k+6],S13,0xA8304613);b=_FF(b,c,d,a,x[k+7],S14,0xFD469501);a=_FF(a,b,c,d,x[k+8],S11,0x698098D8);d=_FF(d,a,b,c,x[k+9],S12,0x8B44F7AF);c=_FF(c,d,a,b,x[k+10],S13,0xFFFF5BB1);b=_FF(b,c,d,a,x[k+11],S14,0x895CD7BE);a=_FF(a,b,c,d,x[k+12],S11,0x6B901122);d=_FF(d,a,b,c,x[k+13],S12,0xFD987193);c=_FF(c,d,a,b,x[k+14],S13,0xA679438E);b=_FF(b,c,d,a,x[k+15],S14,0x49B40821);a=_GG(a,b,c,d,x[k+1],S21,0xF61E2562);d=_GG(d,a,b,c,x[k+6],S22,0xC040B340);c=_GG(c,d,a,b,x[k+11],S23,0x265E5A51);b=_GG(b,c,d,a,x[k+0],S24,0xE9B6C7AA);a=_GG(a,b,c,d,x[k+5],S21,0xD62F105D);d=_GG(d,a,b,c,x[k+10],S22,0x2441453);c=_GG(c,d,a,b,x[k+15],S23,0xD8A1E681);b=_GG(b,c,d,a,x[k+4],S24,0xE7D3FBC8);a=_GG(a,b,c,d,x[k+9],S21,0x21E1CDE6);d=_GG(d,a,b,c,x[k+14],S22,0xC33707D6);c=_GG(c,d,a,b,x[k+3],S23,0xF4D50D87);b=_GG(b,c,d,a,x[k+8],S24,0x455A14ED);a=_GG(a,b,c,d,x[k+13],S21,0xA9E3E905);d=_GG(d,a,b,c,x[k+2],S22,0xFCEFA3F8);c=_GG(c,d,a,b,x[k+7],S23,0x676F02D9);b=_GG(b,c,d,a,x[k+12],S24,0x8D2A4C8A);a=_HH(a,b,c,d,x[k+5],S31,0xFFFA3942);d=_HH(d,a,b,c,x[k+8],S32,0x8771F681);c=_HH(c,d,a,b,x[k+11],S33,0x6D9D6122);b=_HH(b,c,d,a,x[k+14],S34,0xFDE5380C);a=_HH(a,b,c,d,x[k+1],S31,0xA4BEEA44);d=_HH(d,a,b,c,x[k+4],S32,0x4BDECFA9);c=_HH(c,d,a,b,x[k+7],S33,0xF6BB4B60);b=_HH(b,c,d,a,x[k+10],S34,0xBEBFBC70);a=_HH(a,b,c,d,x[k+13],S31,0x289B7EC6);d=_HH(d,a,b,c,x[k+0],S32,0xEAA127FA);c=_HH(c,d,a,b,x[k+3],S33,0xD4EF3085);b=_HH(b,c,d,a,x[k+6],S34,0x4881D05);a=_HH(a,b,c,d,x[k+9],S31,0xD9D4D039);d=_HH(d,a,b,c,x[k+12],S32,0xE6DB99E5);c=_HH(c,d,a,b,x[k+15],S33,0x1FA27CF8);b=_HH(b,c,d,a,x[k+2],S34,0xC4AC5665);a=_II(a,b,c,d,x[k+0],S41,0xF4292244);d=_II(d,a,b,c,x[k+7],S42,0x432AFF97);c=_II(c,d,a,b,x[k+14],S43,0xAB9423A7);b=_II(b,c,d,a,x[k+5],S44,0xFC93A039);a=_II(a,b,c,d,x[k+12],S41,0x655B59C3);d=_II(d,a,b,c,x[k+3],S42,0x8F0CCC92);c=_II(c,d,a,b,x[k+10],S43,0xFFEFF47D);b=_II(b,c,d,a,x[k+1],S44,0x85845DD1);a=_II(a,b,c,d,x[k+8],S41,0x6FA87E4F);d=_II(d,a,b,c,x[k+15],S42,0xFE2CE6E0);c=_II(c,d,a,b,x[k+6],S43,0xA3014314);b=_II(b,c,d,a,x[k+13],S44,0x4E0811A1);a=_II(a,b,c,d,x[k+4],S41,0xF7537E82);d=_II(d,a,b,c,x[k+11],S42,0xBD3AF235);c=_II(c,d,a,b,x[k+2],S43,0x2AD7D2BB);b=_II(b,c,d,a,x[k+9],S44,0xEB86D391);a=addUnsigned(a,AA);b=addUnsigned(b,BB);c=addUnsigned(c,CC);d=addUnsigned(d,DD);}
var temp=wordToHex(a)+wordToHex(b)+wordToHex(c)+wordToHex(d);return temp.toLowerCase();}
function method_exists(obj,method){if(typeof obj==='string'){return this.window[obj]&&typeof this.window[obj][method]==='function';}
return typeof obj[method]==='function';}
function microtime(get_as_float){var now=new Date().getTime()/1000;var s=parseInt(now,10);return(get_as_float)?now:(Math.round((now-s)*1000)/1000)+' '+s;}
function min(){var ar,retVal,i=0,n=0,argv=arguments,argc=argv.length,_obj2Array=function(obj){if(Object.prototype.toString.call(obj)==='[object Array]'){return obj;}
var ar=[];for(var i in obj){if(obj.hasOwnProperty(i)){ar.push(obj[i]);}}
return ar;},_compare=function(current,next){var i=0,n=0,tmp=0,nl=0,cl=0;if(current===next){return 0;}
else if(typeof current==='object'){if(typeof next==='object'){current=_obj2Array(current);next=_obj2Array(next);cl=current.length;nl=next.length;if(nl>cl){return 1;}
else if(nl<cl){return-1;}
for(i=0,n=cl;i<n;++i){tmp=_compare(current[i],next[i]);if(tmp==1){return 1;}
else if(tmp==-1){return-1;}}
return 0;}
return-1;}
else if(typeof next=='object'){return 1;}
else if(isNaN(next)&&!isNaN(current)){if(current==0){return 0;}
return(current<0?1:-1);}
else if(isNaN(current)&&!isNaN(next)){if(next==0){return 0;}
return(next>0?1:-1);}
if(next==current){return 0;}
return(next>current?1:-1);};if(argc===0){throw new Error('At least one value should be passed to min()');}
else if(argc===1){if(typeof argv[0]==='object'){ar=_obj2Array(argv[0]);}
else{throw new Error('Wrong parameter count for min()');}
if(ar.length===0){throw new Error('Array must contain at least one element for min()');}}
else{ar=argv;}
retVal=ar[0];for(i=1,n=ar.length;i<n;++i){if(_compare(retVal,ar[i])==-1){retVal=ar[i];}}
return retVal;}
function mktime(){var d=new Date(),r=arguments,i=0,e=['Hours','Minutes','Seconds','Month','Date','FullYear'];for(i=0;i<e.length;i++){if(typeof r[i]==='undefined'){r[i]=d['get'+e[i]]();r[i]+=(i===3);}else{r[i]=parseInt(r[i],10);if(isNaN(r[i])){return false;}}}
r[5]+=(r[5]>=0?(r[5]<=69?2e3:(r[5]<=100?1900:0)):0);d.setFullYear(r[5],r[3]-1,r[4]);d.setHours(r[0],r[1],r[2]);return(d.getTime()/1e3>>0)-(d.getTime()<0);}
function mt_getrandmax(){return 2147483647;}
function mt_rand(min,max){var argc=arguments.length;if(argc===0){min=0;max=2147483647;}else if(argc===1){throw new Error('Warning: mt_rand() expects exactly 2 parameters, 1 given');}
return Math.floor(Math.random()*(max-min+1))+min;}
function natcasesort(inputArr){var valArr=[],k,i,ret,that=this,strictForIn=false,populateArr={};this.php_js=this.php_js||{};this.php_js.ini=this.php_js.ini||{};strictForIn=this.php_js.ini['phpjs.strictForIn']&&this.php_js.ini['phpjs.strictForIn'].local_value&&this.php_js.ini['phpjs.strictForIn'].local_value!=='off';populateArr=strictForIn?inputArr:populateArr;for(k in inputArr){if(inputArr.hasOwnProperty(k)){valArr.push([k,inputArr[k]]);if(strictForIn){delete inputArr[k];}}}
valArr.sort(function(a,b){return that.strnatcasecmp(a[1],b[1]);});for(i=0;i<valArr.length;i++){populateArr[valArr[i][0]]=valArr[i][1];}
return strictForIn||populateArr;}
function natsort(inputArr){var valArr=[],k,i,ret,that=this,strictForIn=false,populateArr={};this.php_js=this.php_js||{};this.php_js.ini=this.php_js.ini||{};strictForIn=this.php_js.ini['phpjs.strictForIn']&&this.php_js.ini['phpjs.strictForIn'].local_value&&this.php_js.ini['phpjs.strictForIn'].local_value!=='off';populateArr=strictForIn?inputArr:populateArr;for(k in inputArr){if(inputArr.hasOwnProperty(k)){valArr.push([k,inputArr[k]]);if(strictForIn){delete inputArr[k];}}}
valArr.sort(function(a,b){return that.strnatcmp(a[1],b[1]);});for(i=0;i<valArr.length;i++){populateArr[valArr[i][0]]=valArr[i][1];}
return strictForIn||populateArr;}
function nl2br(str,is_xhtml){var breakTag=(is_xhtml||typeof is_xhtml==='undefined')?'<br />':'<br>';return(str+'').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g,'$1'+breakTag+'$2');}
function number_format(number,decimals,dec_point,thousands_sep){number=(number+'').replace(/[^0-9+\-Ee.]/g,'');var n=!isFinite(+number)?0:+number,prec=!isFinite(+decimals)?0:Math.abs(decimals),sep=(typeof thousands_sep==='undefined')?',':thousands_sep,dec=(typeof dec_point==='undefined')?'.':dec_point,s='',toFixedFix=function(n,prec){var k=Math.pow(10,prec);return''+Math.round(n*k)/k;};s=(prec?toFixedFix(n,prec):''+Math.round(n)).split('.');if(s[0].length>3){s[0]=s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g,sep);}
if((s[1]||'').length<prec){s[1]=s[1]||'';s[1]+=new Array(prec-s[1].length+1).join('0');}
return s.join(dec);}
function octdec(oct_string){oct_string=(oct_string+'').replace(/[^0-7]/gi,'');return parseInt(oct_string,8);}
function ord(string){var str=string+'',code=str.charCodeAt(0);if(0xD800<=code&&code<=0xDBFF){var hi=code;if(str.length===1){return code;}
var low=str.charCodeAt(1);return((hi-0xD800)*0x400)+(low-0xDC00)+0x10000;}
if(0xDC00<=code&&code<=0xDFFF){return code;}
return code;}
function parse_str(str,array){var glue1='=',glue2='&',array2=String(str).replace(/^&?([\s\S]*?)&?$/,'$1').split(glue2),i,j,chr,tmp,key,value,bracket,keys,evalStr,that=this,fixStr=function(str){return that.urldecode(str).replace(/([\\"'])/g,'\\$1').replace(/\n/g,'\\n').replace(/\r/g,'\\r');};if(!array){array=this.window;}
for(i=0;i<array2.length;i++){tmp=array2[i].split(glue1);if(tmp.length<2){tmp=[tmp,''];}
key=fixStr(tmp[0]);value=fixStr(tmp[1]);while(key.charAt(0)===' '){key=key.substr(1);}
if(key.indexOf('\0')!==-1){key=key.substr(0,key.indexOf('\0'));}
if(key&&key.charAt(0)!=='['){keys=[];bracket=0;for(j=0;j<key.length;j++){if(key.charAt(j)==='['&&!bracket){bracket=j+1;}else if(key.charAt(j)===']'){if(bracket){if(!keys.length){keys.push(key.substr(0,bracket-1));}
keys.push(key.substr(bracket,j-bracket));bracket=0;if(key.charAt(j+1)!=='['){break;}}}}
if(!keys.length){keys=[key];}
for(j=0;j<keys[0].length;j++){chr=keys[0].charAt(j);if(chr===' '||chr==='.'||chr==='['){keys[0]=keys[0].substr(0,j)+'_'+keys[0].substr(j+1);}
if(chr==='['){break;}}
evalStr='array';for(j=0;j<keys.length;j++){key=keys[j];if((key!==''&&key!==' ')||j===0){key="'"+key+"'";}else{key=eval(evalStr+'.push([]);')-1;}
evalStr+='['+key+']';if(j!==keys.length-1&&eval('typeof '+evalStr)==='undefined'){eval(evalStr+' = [];');}}
evalStr+=" = '"+value+"';\n";eval(evalStr);}}}
function parse_url(str,component){var key=['source','scheme','authority','userInfo','user','pass','host','port','relative','path','directory','file','query','fragment'],ini=(this.php_js&&this.php_js.ini)||{},mode=(ini['phpjs.parse_url.mode']&&ini['phpjs.parse_url.mode'].local_value)||'php',parser={php:/^(?:([^:\/?#]+):)?(?:\/\/()(?:(?:()(?:([^:@]*):?([^:@]*))?@)?([^:\/?#]*)(?::(\d*))?))?()(?:(()(?:(?:[^?#\/]*\/)*)()(?:[^?#]*))(?:\?([^#]*))?(?:#(.*))?)/,strict:/^(?:([^:\/?#]+):)?(?:\/\/((?:(([^:@]*):?([^:@]*))?@)?([^:\/?#]*)(?::(\d*))?))?((((?:[^?#\/]*\/)*)([^?#]*))(?:\?([^#]*))?(?:#(.*))?)/,loose:/^(?:(?![^:@]+:[^:@\/]*@)([^:\/?#.]+):)?(?:\/\/\/?)?((?:(([^:@]*):?([^:@]*))?@)?([^:\/?#]*)(?::(\d*))?)(((\/(?:[^?#](?![^?#\/]*\.[^?#\/.]+(?:[?#]|$)))*\/?)?([^?#\/]*))(?:\?([^#]*))?(?:#(.*))?)/};var m=parser[mode].exec(str),uri={},i=14;while(i--){if(m[i]){uri[key[i]]=m[i];}}
if(component){return uri[component.replace('PHP_URL_','').toLowerCase()];}
if(mode!=='php'){var name=(ini['phpjs.parse_url.queryKey']&&ini['phpjs.parse_url.queryKey'].local_value)||'queryKey';parser=/(?:^|&)([^&=]*)=?([^&]*)/g;uri[name]={};uri[key[12]].replace(parser,function($0,$1,$2){if($1){uri[name][$1]=$2;}});}
delete uri.source;return uri;}
function pi(){return 3.141592653589793;}
function pow(base,exp){return Math.pow(base,exp);}
function preg_grep(pattern,input,flags){var p='',retObj={};var invert=(flags===1||flags==='PREG_GREP_INVERT');if(typeof pattern==='string'){pattern=eval(pattern);}
if(invert){for(p in input){if(input[p].search(pattern)===-1){retObj[p]=input[p];}}}else{for(p in input){if(input[p].search(pattern)!==-1){retObj[p]=input[p];}}}
return retObj;}
function preg_quote(str,delimiter){return(str+'').replace(new RegExp('[.\\\\+*?\\[\\^\\]$(){}=!<>|:\\'+(delimiter||'')+'-]','g'),'\\$&');}
function print_r(array,return_val){var output='',pad_char=' ',pad_val=4,d=this.window.document,getFuncName=function(fn){var name=(/\W*function\s+([\w\$]+)\s*\(/).exec(fn);if(!name){return'(Anonymous)';}
return name[1];},repeat_char=function(len,pad_char){var str='';for(var i=0;i<len;i++){str+=pad_char;}
return str;},formatArray=function(obj,cur_depth,pad_val,pad_char){if(cur_depth>0){cur_depth++;}
var base_pad=repeat_char(pad_val*cur_depth,pad_char);var thick_pad=repeat_char(pad_val*(cur_depth+1),pad_char);var str='';if(typeof obj==='object'&&obj!==null&&obj.constructor&&getFuncName(obj.constructor)!=='PHPJS_Resource'){str+='Array\n'+base_pad+'(\n';for(var key in obj){if(Object.prototype.toString.call(obj[key])==='[object Array]'){str+=thick_pad+'['+key+'] => '+formatArray(obj[key],cur_depth+1,pad_val,pad_char);}
else{str+=thick_pad+'['+key+'] => '+obj[key]+'\n';}}
str+=base_pad+')\n';}
else if(obj===null||obj===undefined){str='';}
else{str=obj.toString();}
return str;};output=formatArray(array,0,pad_val,pad_char);if(return_val!==true){if(d.body){this.echo(output);}
else{try{d=XULDocument;this.echo('<pre xmlns="http://www.w3.org/1999/xhtml" style="white-space:pre;">'+output+'</pre>');}catch(e){this.echo(output);}}
return true;}
return output;}
function printf(){var body,elmt,d=this.window.document;var ret='';var HTMLNS='http://www.w3.org/1999/xhtml';body=d.getElementsByTagNameNS?(d.getElementsByTagNameNS(HTMLNS,'body')[0]?d.getElementsByTagNameNS(HTMLNS,'body')[0]:d.documentElement.lastChild):d.getElementsByTagName('body')[0];if(!body){return false;}
ret=this.sprintf.apply(this,arguments);elmt=d.createTextNode(ret);body.appendChild(elmt);return ret.length;}
function property_exists(cls,prop){cls=(typeof cls==='string')?this.window[cls]:cls;if(typeof cls==='function'&&cls.toSource&&cls.toSource().match(new RegExp('this\\.'+prop+'\\s'))){return true;}
return(cls[prop]!==undefined&&typeof cls[prop]!=='function')||(cls.prototype!==undefined&&cls.prototype[prop]!==undefined&&typeof cls.prototype[prop]!=='function')||(cls.constructor&&cls.constructor[prop]!==undefined&&typeof cls.constructor[prop]!=='function');}
function quotemeta(str){return(str+'').replace(/([\.\\\+\*\?\[\^\]\$\(\)])/g,'\\$1');}
function rad2deg(angle){return angle*57.29577951308232;}
function rand(min,max){var argc=arguments.length;if(argc===0){min=0;max=2147483647;}else if(argc===1){throw new Error('Warning: rand() expects exactly 2 parameters, 1 given');}
return Math.floor(Math.random()*(max-min+1))+min;}
function range(low,high,step){var matrix=[];var inival,endval,plus;var walker=step||1;var chars=false;if(!isNaN(low)&&!isNaN(high)){inival=low;endval=high;}else if(isNaN(low)&&isNaN(high)){chars=true;inival=low.charCodeAt(0);endval=high.charCodeAt(0);}else{inival=(isNaN(low)?0:low);endval=(isNaN(high)?0:high);}
plus=((inival>endval)?false:true);if(plus){while(inival<=endval){matrix.push(((chars)?String.fromCharCode(inival):inival));inival+=walker;}}else{while(inival>=endval){matrix.push(((chars)?String.fromCharCode(inival):inival));inival-=walker;}}
return matrix;}
function rawurldecode(str){return decodeURIComponent(str+'');}
function rawurlencode(str){str=(str+'').toString();return encodeURIComponent(str).replace(/!/g,'%21').replace(/'/g,'%27').replace(/\(/g,'%28').replace(/\)/g,'%29').replace(/\*/g,'%2A');}
function reset(arr){this.php_js=this.php_js||{};this.php_js.pointers=this.php_js.pointers||[];var indexOf=function(value){for(var i=0,length=this.length;i<length;i++){if(this[i]===value){return i;}}
return-1;};var pointers=this.php_js.pointers;if(!pointers.indexOf){pointers.indexOf=indexOf;}
if(pointers.indexOf(arr)===-1){pointers.push(arr,0);}
var arrpos=pointers.indexOf(arr);if(Object.prototype.toString.call(arr)!=='[object Array]'){for(var k in arr){if(pointers.indexOf(arr)===-1){pointers.push(arr,0);}else{pointers[arrpos+1]=0;}
return arr[k];}
return false;}
if(arr.length===0){return false;}
pointers[arrpos+1]=0;return arr[pointers[arrpos+1]];}
function round(value,precision,mode){var m,f,isHalf,sgn;precision|=0;m=Math.pow(10,precision);value*=m;sgn=(value>0)|-(value<0);isHalf=value%1===0.5*sgn;f=Math.floor(value);if(isHalf){switch(mode){case'PHP_ROUND_HALF_DOWN':value=f+(sgn<0);break;case'PHP_ROUND_HALF_EVEN':value=f+(f%2*sgn);break;case'PHP_ROUND_HALF_ODD':value=f+!(f%2);break;default:value=f+(sgn>0);}}
return(isHalf?value:Math.round(value))/m;}
function rsort(inputArr,sort_flags){var valArr=[],k='',i=0,sorter=false,that=this,strictForIn=false,populateArr=[];switch(sort_flags){case'SORT_STRING':sorter=function(a,b){return that.strnatcmp(b,a);};break;case'SORT_LOCALE_STRING':var loc=this.i18n_loc_get_default();sorter=this.php_js.i18nLocales[loc].sorting;break;case'SORT_NUMERIC':sorter=function(a,b){return(b-a);};break;case'SORT_REGULAR':default:sorter=function(b,a){var aFloat=parseFloat(a),bFloat=parseFloat(b),aNumeric=aFloat+''===a,bNumeric=bFloat+''===b;if(aNumeric&&bNumeric){return aFloat>bFloat?1:aFloat<bFloat?-1:0;}else if(aNumeric&&!bNumeric){return 1;}else if(!aNumeric&&bNumeric){return-1;}
return a>b?1:a<b?-1:0;};break;}
this.php_js=this.php_js||{};this.php_js.ini=this.php_js.ini||{};strictForIn=this.php_js.ini['phpjs.strictForIn']&&this.php_js.ini['phpjs.strictForIn'].local_value&&this.php_js.ini['phpjs.strictForIn'].local_value!=='off';populateArr=strictForIn?inputArr:populateArr;for(k in inputArr){if(inputArr.hasOwnProperty(k)){valArr.push(inputArr[k]);if(strictForIn){delete inputArr[k];}}}
valArr.sort(sorter);for(i=0;i<valArr.length;i++){populateArr[i]=valArr[i];}
return strictForIn||populateArr;}
function rtrim(str,charlist){charlist=!charlist?' \\s\u00A0':(charlist+'').replace(/([\[\]\(\)\.\?\/\*\{\}\+\$\^\:])/g,'\\$1');var re=new RegExp('['+charlist+']+$','g');return(str+'').replace(re,'');}
function serialize(mixed_value){var _utf8Size=function(str){var size=0,i=0,l=str.length,code='';for(i=0;i<l;i++){code=str.charCodeAt(i);if(code<0x0080){size+=1;}else if(code<0x0800){size+=2;}else{size+=3;}}
return size;};var _getType=function(inp){var type=typeof inp,match;var key;if(type==='object'&&!inp){return'null';}
if(type==="object"){if(!inp.constructor){return'object';}
var cons=inp.constructor.toString();match=cons.match(/(\w+)\(/);if(match){cons=match[1].toLowerCase();}
var types=["boolean","number","string","array"];for(key in types){if(cons==types[key]){type=types[key];break;}}}
return type;};var type=_getType(mixed_value);var val,ktype='';switch(type){case"function":val="";break;case"boolean":val="b:"+(mixed_value?"1":"0");break;case"number":val=(Math.round(mixed_value)==mixed_value?"i":"d")+":"+mixed_value;break;case"string":val="s:"+_utf8Size(mixed_value)+":\""+mixed_value+"\"";break;case"array":case"object":val="a";var count=0;var vals="";var okey;var key;for(key in mixed_value){if(mixed_value.hasOwnProperty(key)){ktype=_getType(mixed_value[key]);if(ktype==="function"){continue;}
okey=(key.match(/^[0-9]+$/)?parseInt(key,10):key);vals+=this.serialize(okey)+this.serialize(mixed_value[key]);count++;}}
val+=":"+count+":{"+vals+"}";break;case"undefined":default:val="N";break;}
if(type!=="object"&&type!=="array"){val+=";";}
return val;}
function setcookie(name,value,expires,path,domain,secure){return this.setrawcookie(name,encodeURIComponent(value),expires,path,domain,secure);}
function setrawcookie(name,value,expires,path,domain,secure){if(typeof expires==='string'&&(/^\d+$/).test(expires)){expires=parseInt(expires,10);}
if(expires instanceof Date){expires=expires.toGMTString();}else if(typeof(expires)==='number'){expires=(new Date(expires*1e3)).toGMTString();}
var r=[name+'='+value],s={},i='';s={expires:expires,path:path,domain:domain};for(i in s){if(s.hasOwnProperty(i)){s[i]&&r.push(i+'='+s[i]);}}
return secure&&r.push('secure'),this.window.document.cookie=r.join(";"),true;}
function settype(vr,type){var is_array=function(arr){return typeof arr==='object'&&typeof arr.length==='number'&&!(arr.propertyIsEnumerable('length'))&&typeof arr.splice==='function';};var v,mtch,i,obj;v=this[vr]?this[vr]:vr;try{switch(type){case'boolean':if(is_array(v)&&v.length===0){this[vr]=false;}else if(v==='0'){this[vr]=false;}else if(typeof v==='object'&&!is_array(v)){var lgth=false;for(i in v){lgth=true;}
this[vr]=lgth;}else{this[vr]=!!v;}
break;case'integer':if(typeof v==='number'){this[vr]=parseInt(v,10);}else if(typeof v==='string'){mtch=v.match(/^([+\-]?)(\d+)/);if(!mtch){this[vr]=0;}else{this[vr]=parseInt(v,10);}}else if(v===true){this[vr]=1;}else if(v===false||v===null){this[vr]=0;}else if(is_array(v)&&v.length===0){this[vr]=0;}else if(typeof v==='object'){this[vr]=1;}
break;case'float':if(typeof v==='string'){mtch=v.match(/^([+\-]?)(\d+(\.\d+)?|\.\d+)([eE][+\-]?\d+)?/);if(!mtch){this[vr]=0;}else{this[vr]=parseFloat(v,10);}}else if(v===true){this[vr]=1;}else if(v===false||v===null){this[vr]=0;}else if(is_array(v)&&v.length===0){this[vr]=0;}else if(typeof v==='object'){this[vr]=1;}
break;case'string':if(v===null||v===false){this[vr]='';}else if(is_array(v)){this[vr]='Array';}else if(typeof v==='object'){this[vr]='Object';}else if(v===true){this[vr]='1';}else{this[vr]+='';}
break;case'array':if(v===null){this[vr]=[];}else if(typeof v!=='object'){this[vr]=[v];}
break;case'object':if(v===null){this[vr]={};}else if(is_array(v)){for(i=0,obj={};i<v.length;i++){obj[i]=v;}
this[vr]=obj;}else if(typeof v!=='object'){this[vr]={scalar:v};}
break;case'null':delete this[vr];break;}
return true;}catch(e){return false;}}
function sha1(str){var rotate_left=function(n,s){var t4=(n<<s)|(n>>>(32-s));return t4;};var cvt_hex=function(val){var str="";var i;var v;for(i=7;i>=0;i--){v=(val>>>(i*4))&0x0f;str+=v.toString(16);}
return str;};var blockstart;var i,j;var W=new Array(80);var H0=0x67452301;var H1=0xEFCDAB89;var H2=0x98BADCFE;var H3=0x10325476;var H4=0xC3D2E1F0;var A,B,C,D,E;var temp;str=this.utf8_encode(str);var str_len=str.length;var word_array=[];for(i=0;i<str_len-3;i+=4){j=str.charCodeAt(i)<<24|str.charCodeAt(i+1)<<16|str.charCodeAt(i+2)<<8|str.charCodeAt(i+3);word_array.push(j);}
switch(str_len%4){case 0:i=0x080000000;break;case 1:i=str.charCodeAt(str_len-1)<<24|0x0800000;break;case 2:i=str.charCodeAt(str_len-2)<<24|str.charCodeAt(str_len-1)<<16|0x08000;break;case 3:i=str.charCodeAt(str_len-3)<<24|str.charCodeAt(str_len-2)<<16|str.charCodeAt(str_len-1)<<8|0x80;break;}
word_array.push(i);while((word_array.length%16)!=14){word_array.push(0);}
word_array.push(str_len>>>29);word_array.push((str_len<<3)&0x0ffffffff);for(blockstart=0;blockstart<word_array.length;blockstart+=16){for(i=0;i<16;i++){W[i]=word_array[blockstart+i];}
for(i=16;i<=79;i++){W[i]=rotate_left(W[i-3]^W[i-8]^W[i-14]^W[i-16],1);}
A=H0;B=H1;C=H2;D=H3;E=H4;for(i=0;i<=19;i++){temp=(rotate_left(A,5)+((B&C)|(~B&D))+E+W[i]+0x5A827999)&0x0ffffffff;E=D;D=C;C=rotate_left(B,30);B=A;A=temp;}
for(i=20;i<=39;i++){temp=(rotate_left(A,5)+(B^C^D)+E+W[i]+0x6ED9EBA1)&0x0ffffffff;E=D;D=C;C=rotate_left(B,30);B=A;A=temp;}
for(i=40;i<=59;i++){temp=(rotate_left(A,5)+((B&C)|(B&D)|(C&D))+E+W[i]+0x8F1BBCDC)&0x0ffffffff;E=D;D=C;C=rotate_left(B,30);B=A;A=temp;}
for(i=60;i<=79;i++){temp=(rotate_left(A,5)+(B^C^D)+E+W[i]+0xCA62C1D6)&0x0ffffffff;E=D;D=C;C=rotate_left(B,30);B=A;A=temp;}
H0=(H0+A)&0x0ffffffff;H1=(H1+B)&0x0ffffffff;H2=(H2+C)&0x0ffffffff;H3=(H3+D)&0x0ffffffff;H4=(H4+E)&0x0ffffffff;}
temp=cvt_hex(H0)+cvt_hex(H1)+cvt_hex(H2)+cvt_hex(H3)+cvt_hex(H4);return temp.toLowerCase();}
function shuffle(inputArr){var valArr=[],k='',i=0,strictForIn=false,populateArr=[];for(k in inputArr){if(inputArr.hasOwnProperty(k)){valArr.push(inputArr[k]);if(strictForIn){delete inputArr[k];}}}
valArr.sort(function(){return 0.5-Math.random();});this.php_js=this.php_js||{};this.php_js.ini=this.php_js.ini||{};strictForIn=this.php_js.ini['phpjs.strictForIn']&&this.php_js.ini['phpjs.strictForIn'].local_value&&this.php_js.ini['phpjs.strictForIn'].local_value!=='off';populateArr=strictForIn?inputArr:populateArr;for(i=0;i<valArr.length;i++){populateArr[i]=valArr[i];}
return strictForIn||populateArr;}
function sin(arg){return Math.sin(arg);}
function sinh(arg){return(Math.exp(arg)-Math.exp(-arg))/2;}
function sizeof(mixed_var,mode){return this.count(mixed_var,mode);}
function sort(inputArr,sort_flags){var valArr=[],keyArr=[],k='',i=0,sorter=false,that=this,strictForIn=false,populateArr=[];switch(sort_flags){case'SORT_STRING':sorter=function(a,b){return that.strnatcmp(a,b);};break;case'SORT_LOCALE_STRING':var loc=this.i18n_loc_get_default();sorter=this.php_js.i18nLocales[loc].sorting;break;case'SORT_NUMERIC':sorter=function(a,b){return(a-b);};break;case'SORT_REGULAR':default:sorter=function(a,b){var aFloat=parseFloat(a),bFloat=parseFloat(b),aNumeric=aFloat+''===a,bNumeric=bFloat+''===b;if(aNumeric&&bNumeric){return aFloat>bFloat?1:aFloat<bFloat?-1:0;}else if(aNumeric&&!bNumeric){return 1;}else if(!aNumeric&&bNumeric){return-1;}
return a>b?1:a<b?-1:0;};break;}
this.php_js=this.php_js||{};this.php_js.ini=this.php_js.ini||{};strictForIn=this.php_js.ini['phpjs.strictForIn']&&this.php_js.ini['phpjs.strictForIn'].local_value&&this.php_js.ini['phpjs.strictForIn'].local_value!=='off';populateArr=strictForIn?inputArr:populateArr;for(k in inputArr){if(inputArr.hasOwnProperty(k)){valArr.push(inputArr[k]);if(strictForIn){delete inputArr[k];}}}
valArr.sort(sorter);for(i=0;i<valArr.length;i++){populateArr[i]=valArr[i];}
return strictForIn||populateArr;}
function soundex(str){str=(str+'').toUpperCase();if(!str){return'';}
var sdx=[0,0,0,0],m={B:1,F:1,P:1,V:1,C:2,G:2,J:2,K:2,Q:2,S:2,X:2,Z:2,D:3,T:3,L:4,M:5,N:5,R:6},i=0,j,s=0,c,p;while((c=str.charAt(i++))&&s<4){if(j=m[c]){if(j!==p){sdx[s++]=p=j;}}else{s+=i===1;p=0;}}
sdx[0]=str.charAt(0);return sdx.join('');}
function split(delimiter,string){return this.explode(delimiter,string);}
function sprintf(){var regex=/%%|%(\d+\$)?([-+\'#0 ]*)(\*\d+\$|\*|\d+)?(\.(\*\d+\$|\*|\d+))?([scboxXuidfegEG])/g;var a=arguments,i=0,format=a[i++];var pad=function(str,len,chr,leftJustify){if(!chr){chr=' ';}
var padding=(str.length>=len)?'':Array(1+len-str.length>>>0).join(chr);return leftJustify?str+padding:padding+str;};var justify=function(value,prefix,leftJustify,minWidth,zeroPad,customPadChar){var diff=minWidth-value.length;if(diff>0){if(leftJustify||!zeroPad){value=pad(value,minWidth,customPadChar,leftJustify);}else{value=value.slice(0,prefix.length)+pad('',diff,'0',true)+value.slice(prefix.length);}}
return value;};var formatBaseX=function(value,base,prefix,leftJustify,minWidth,precision,zeroPad){var number=value>>>0;prefix=prefix&&number&&{'2':'0b','8':'0','16':'0x'}[base]||'';value=prefix+pad(number.toString(base),precision||0,'0',false);return justify(value,prefix,leftJustify,minWidth,zeroPad);};var formatString=function(value,leftJustify,minWidth,precision,zeroPad,customPadChar){if(precision!=null){value=value.slice(0,precision);}
return justify(value,'',leftJustify,minWidth,zeroPad,customPadChar);};var doFormat=function(substring,valueIndex,flags,minWidth,_,precision,type){var number;var prefix;var method;var textTransform;var value;if(substring=='%%'){return'%';}
var leftJustify=false,positivePrefix='',zeroPad=false,prefixBaseX=false,customPadChar=' ';var flagsl=flags.length;for(var j=0;flags&&j<flagsl;j++){switch(flags.charAt(j)){case' ':positivePrefix=' ';break;case'+':positivePrefix='+';break;case'-':leftJustify=true;break;case"'":customPadChar=flags.charAt(j+1);break;case'0':zeroPad=true;break;case'#':prefixBaseX=true;break;}}
if(!minWidth){minWidth=0;}else if(minWidth=='*'){minWidth=+a[i++];}else if(minWidth.charAt(0)=='*'){minWidth=+a[minWidth.slice(1,-1)];}else{minWidth=+minWidth;}
if(minWidth<0){minWidth=-minWidth;leftJustify=true;}
if(!isFinite(minWidth)){throw new Error('sprintf: (minimum-)width must be finite');}
if(!precision){precision='fFeE'.indexOf(type)>-1?6:(type=='d')?0:undefined;}else if(precision=='*'){precision=+a[i++];}else if(precision.charAt(0)=='*'){precision=+a[precision.slice(1,-1)];}else{precision=+precision;}
value=valueIndex?a[valueIndex.slice(0,-1)]:a[i++];switch(type){case's':return formatString(String(value),leftJustify,minWidth,precision,zeroPad,customPadChar);case'c':return formatString(String.fromCharCode(+value),leftJustify,minWidth,precision,zeroPad);case'b':return formatBaseX(value,2,prefixBaseX,leftJustify,minWidth,precision,zeroPad);case'o':return formatBaseX(value,8,prefixBaseX,leftJustify,minWidth,precision,zeroPad);case'x':return formatBaseX(value,16,prefixBaseX,leftJustify,minWidth,precision,zeroPad);case'X':return formatBaseX(value,16,prefixBaseX,leftJustify,minWidth,precision,zeroPad).toUpperCase();case'u':return formatBaseX(value,10,prefixBaseX,leftJustify,minWidth,precision,zeroPad);case'i':case'd':number=(+value)|0;prefix=number<0?'-':positivePrefix;value=prefix+pad(String(Math.abs(number)),precision,'0',false);return justify(value,prefix,leftJustify,minWidth,zeroPad);case'e':case'E':case'f':case'F':case'g':case'G':number=+value;prefix=number<0?'-':positivePrefix;method=['toExponential','toFixed','toPrecision']['efg'.indexOf(type.toLowerCase())];textTransform=['toString','toUpperCase']['eEfFgG'.indexOf(type)%2];value=prefix+Math.abs(number)[method](precision);return justify(value,prefix,leftJustify,minWidth,zeroPad)[textTransform]();default:return substring;}};return format.replace(regex,doFormat);}
function sql_regcase(str){this.setlocale('LC_ALL',0);var i=0,upper='',lower='',pos=0,retStr='';upper=this.php_js.locales[this.php_js.localeCategories.LC_CTYPE].LC_CTYPE.upper;lower=this.php_js.locales[this.php_js.localeCategories.LC_CTYPE].LC_CTYPE.lower;for(i=0;i<str.length;i++){if(((pos=upper.indexOf(str.charAt(i)))!==-1)||((pos=lower.indexOf(str.charAt(i)))!==-1)){retStr+='['+upper.charAt(pos)+lower.charAt(pos)+']';}else{retStr+=str.charAt(i);}}
return retStr;}
function sqrt(arg){return Math.sqrt(arg);}
function str_getcsv(input,delimiter,enclosure,escape){var output=[];var backwards=function(str){return str.split('').reverse().join('');};var pq=function(str){return(str+'').replace(/([\\\.\+\*\?\[\^\]\$\(\)\{\}\=\!\<\>\|\:])/g,"\\$1");};delimiter=delimiter||',';enclosure=enclosure||'"';escape=escape||'\\';input=input.replace(new RegExp('^\\s*'+pq(enclosure)),'').replace(new RegExp(pq(enclosure)+'\\s*$'),'');input=backwards(input).split(new RegExp(pq(enclosure)+'\\s*'+pq(delimiter)+'\\s*'+pq(enclosure)+'(?!'+pq(escape)+')','g')).reverse();for(var i=0;i<input.length;i++){output.push(backwards(input[i]).replace(new RegExp(pq(escape)+pq(enclosure),'g'),enclosure));}
return output;}
function str_ireplace(search,replace,subject){var i,k='';var searchl=0;var reg;var escapeRegex=function(s){return s.replace(/([\\\^\$*+\[\]?{}.=!:(|)])/g,'\\$1');};search+='';searchl=search.length;if(Object.prototype.toString.call(replace)!=='[object Array]'){replace=[replace];if(Object.prototype.toString.call(search)==='[object Array]'){while(searchl>replace.length){replace[replace.length]=replace[0];}}}
if(Object.prototype.toString.call(search)!=='[object Array]'){search=[search];}
while(search.length>replace.length){replace[replace.length]='';}
if(Object.prototype.toString.call(subject)==='[object Array]'){for(k in subject){if(subject.hasOwnProperty(k)){subject[k]=str_ireplace(search,replace,subject[k]);}}
return subject;}
searchl=search.length;for(i=0;i<searchl;i++){reg=new RegExp(escapeRegex(search[i]),'gi');subject=subject.replace(reg,replace[i]);}
return subject;}
function str_pad(input,pad_length,pad_string,pad_type){var half='',pad_to_go;var str_pad_repeater=function(s,len){var collect='',i;while(collect.length<len){collect+=s;}
collect=collect.substr(0,len);return collect;};input+='';pad_string=pad_string!==undefined?pad_string:' ';if(pad_type!='STR_PAD_LEFT'&&pad_type!='STR_PAD_RIGHT'&&pad_type!='STR_PAD_BOTH'){pad_type='STR_PAD_RIGHT';}
if((pad_to_go=pad_length-input.length)>0){if(pad_type=='STR_PAD_LEFT'){input=str_pad_repeater(pad_string,pad_to_go)+input;}else if(pad_type=='STR_PAD_RIGHT'){input=input+str_pad_repeater(pad_string,pad_to_go);}else if(pad_type=='STR_PAD_BOTH'){half=str_pad_repeater(pad_string,Math.ceil(pad_to_go/2));input=half+input+half;input=input.substr(0,pad_length);}}
return input;}
function str_repeat(input,multiplier){return new Array(multiplier+1).join(input);}
function str_replace(search,replace,subject,count){var i=0,j=0,temp='',repl='',sl=0,fl=0,f=[].concat(search),r=[].concat(replace),s=subject,ra=Object.prototype.toString.call(r)==='[object Array]',sa=Object.prototype.toString.call(s)==='[object Array]';s=[].concat(s);if(count){this.window[count]=0;}
for(i=0,sl=s.length;i<sl;i++){if(s[i]===''){continue;}
for(j=0,fl=f.length;j<fl;j++){temp=s[i]+'';repl=ra?(r[j]!==undefined?r[j]:''):r[0];s[i]=(temp).split(f[j]).join(repl);if(count&&s[i]!==temp){this.window[count]+=(temp.length-s[i].length)/f[j].length;}}}
return sa?s:s[0];}
function str_rot13(str){return(str+'').replace(/[a-z]/gi,function(s){return String.fromCharCode(s.charCodeAt(0)+(s.toLowerCase()<'n'?13:-13));});}
function str_shuffle(str){if(str==undefined){throw'Wrong parameter count for str_shuffle()';}
var getRandomInt=function(max){return Math.floor(Math.random()*(max+1));};var newStr='',rand=0;while(str.length){rand=getRandomInt(str.length-1);newStr+=str.charAt(rand);str=str.substring(0,rand)+str.substr(rand+1);}
return newStr;}
function str_split(string,split_length){if(split_length===null){split_length=1;}
if(string===null||split_length<1){return false;}
string+='';var chunks=[],pos=0,len=string.length;while(pos<len){chunks.push(string.slice(pos,pos+=split_length));}
return chunks;}
function str_word_count(str,format,charlist){var len=str.length,cl=charlist&&charlist.length,chr='',tmpStr='',i=0,c='',wArr=[],wC=0,assoc={},aC=0,reg='',match=false;var _preg_quote=function(str){return(str+'').replace(/([\\\.\+\*\?\[\^\]\$\(\)\{\}\=\!<>\|\:])/g,'\\$1');},_getWholeChar=function(str,i){var code=str.charCodeAt(i);if(code<0xD800||code>0xDFFF){return str.charAt(i);}
if(0xD800<=code&&code<=0xDBFF){if(str.length<=(i+1)){throw'High surrogate without following low surrogate';}
var next=str.charCodeAt(i+1);if(0xDC00>next||next>0xDFFF){throw'High surrogate without following low surrogate';}
return str.charAt(i)+str.charAt(i+1);}
if(i===0){throw'Low surrogate without preceding high surrogate';}
var prev=str.charCodeAt(i-1);if(0xD800>prev||prev>0xDBFF){throw'Low surrogate without preceding high surrogate';}
return false;};if(cl){reg='^('+_preg_quote(_getWholeChar(charlist,0));for(i=1;i<cl;i++){if((chr=_getWholeChar(charlist,i))===false){continue;}
reg+='|'+_preg_quote(chr);}
reg+=')$';reg=new RegExp(reg);}
for(i=0;i<len;i++){if((c=_getWholeChar(str,i))===false){continue;}
match=this.ctype_alpha(c)||(reg&&c.search(reg)!==-1)||((i!==0&&i!==len-1)&&c==='-')||(i!==0&&c==="'");if(match){if(tmpStr===''&&format===2){aC=i;}
tmpStr=tmpStr+c;}
if(i===len-1||!match&&tmpStr!==''){if(format!==2){wArr[wArr.length]=tmpStr;}else{assoc[aC]=tmpStr;}
tmpStr='';wC++;}}
if(!format){return wC;}else if(format===1){return wArr;}else if(format===2){return assoc;}
throw'You have supplied an incorrect format';}
function strcasecmp(f_string1,f_string2){var string1=(f_string1+'').toLowerCase();var string2=(f_string2+'').toLowerCase();if(string1>string2){return 1;}else if(string1==string2){return 0;}
return-1;}
function strchr(haystack,needle,bool){return this.strstr(haystack,needle,bool);}
function strcmp(str1,str2){return((str1==str2)?0:((str1>str2)?1:-1));}
function strcspn(str,mask,start,length){start=start?start:0;var count=(length&&((start+length)<str.length))?start+length:str.length;strct:for(var i=start,lgth=0;i<count;i++){for(var j=0;j<mask.length;j++){if(str.charAt(i).indexOf(mask[j])!==-1){continue strct;}}++lgth;}
return lgth;}
function strip_tags(input,allowed){allowed=(((allowed||"")+"").toLowerCase().match(/<[a-z][a-z0-9]*>/g)||[]).join('');var tags=/<\/?([a-z][a-z0-9]*)\b[^>]*>/gi,commentsAndPhpTags=/<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>/gi;return input.replace(commentsAndPhpTags,'').replace(tags,function($0,$1){return allowed.indexOf('<'+$1.toLowerCase()+'>')>-1?$0:'';});}
function stripos(f_haystack,f_needle,f_offset){var haystack=(f_haystack+'').toLowerCase();var needle=(f_needle+'').toLowerCase();var index=0;if((index=haystack.indexOf(needle,f_offset))!==-1){return index;}
return false;}
function stripslashes(str){return(str+'').replace(/\\(.?)/g,function(s,n1){switch(n1){case'\\':return'\\';case'0':return'\u0000';case'':return'';default:return n1;}});}
function stristr(haystack,needle,bool){var pos=0;haystack+='';pos=haystack.toLowerCase().indexOf((needle+'').toLowerCase());if(pos==-1){return false;}else{if(bool){return haystack.substr(0,pos);}else{return haystack.slice(pos);}}}
function strlen(string){var str=string+'';var i=0,chr='',lgth=0;if(!this.php_js||!this.php_js.ini||!this.php_js.ini['unicode.semantics']||this.php_js.ini['unicode.semantics'].local_value.toLowerCase()!=='on'){return string.length;}
var getWholeChar=function(str,i){var code=str.charCodeAt(i);var next='',prev='';if(0xD800<=code&&code<=0xDBFF){if(str.length<=(i+1)){throw'High surrogate without following low surrogate';}
next=str.charCodeAt(i+1);if(0xDC00>next||next>0xDFFF){throw'High surrogate without following low surrogate';}
return str.charAt(i)+str.charAt(i+1);}else if(0xDC00<=code&&code<=0xDFFF){if(i===0){throw'Low surrogate without preceding high surrogate';}
prev=str.charCodeAt(i-1);if(0xD800>prev||prev>0xDBFF){throw'Low surrogate without preceding high surrogate';}
return false;}
return str.charAt(i);};for(i=0,lgth=0;i<str.length;i++){if((chr=getWholeChar(str,i))===false){continue;}
lgth++;}
return lgth;}
function strnatcasecmp(str1,str2){var a=(str1+'').toLowerCase();var b=(str2+'').toLowerCase();var isWhitespaceChar=function(a){return a.charCodeAt(0)<=32;};var isDigitChar=function(a){var charCode=a.charCodeAt(0);return(charCode>=48&&charCode<=57);};var compareRight=function(a,b){var bias=0;var ia=0;var ib=0;var ca;var cb;for(var cnt=0;true;ia++,ib++){ca=a.charAt(ia);cb=b.charAt(ib);if(!isDigitChar(ca)&&!isDigitChar(cb)){return bias;}else if(!isDigitChar(ca)){return-1;}else if(!isDigitChar(cb)){return 1;}else if(ca<cb){if(bias===0){bias=-1;}}else if(ca>cb){if(bias===0){bias=1;}}else if(ca==='0'&&cb==='0'){return bias;}}};var ia=0,ib=0;var nza=0,nzb=0;var ca,cb;var result;while(true){nza=nzb=0;ca=a.charAt(ia);cb=b.charAt(ib);while(isWhitespaceChar(ca)||ca==='0'){if(ca==='0'){nza++;}else{nza=0;}
ca=a.charAt(++ia);}
while(isWhitespaceChar(cb)||cb==='0'){if(cb==='0'){nzb++;}else{nzb=0;}
cb=b.charAt(++ib);}
if(isDigitChar(ca)&&isDigitChar(cb)){if((result=compareRight(a.substring(ia),b.substring(ib)))!==0){return result;}}
if(ca==='0'&&cb==='0'){return nza-nzb;}
if(ca<cb){return-1;}else if(ca>cb){return+1;}
++ia;++ib;}}
function strnatcmp(f_string1,f_string2,f_version){var i=0;if(f_version==undefined){f_version=false;}
var __strnatcmp_split=function(f_string){var result=[];var buffer='';var chr='';var i=0,f_stringl=0;var text=true;f_stringl=f_string.length;for(i=0;i<f_stringl;i++){chr=f_string.substring(i,i+1);if(chr.match(/\d/)){if(text){if(buffer.length>0){result[result.length]=buffer;buffer='';}
text=false;}
buffer+=chr;}else if((text==false)&&(chr=='.')&&(i<(f_string.length-1))&&(f_string.substring(i+1,i+2).match(/\d/))){result[result.length]=buffer;buffer='';}else{if(text==false){if(buffer.length>0){result[result.length]=parseInt(buffer,10);buffer='';}
text=true;}
buffer+=chr;}}
if(buffer.length>0){if(text){result[result.length]=buffer;}else{result[result.length]=parseInt(buffer,10);}}
return result;};var array1=__strnatcmp_split(f_string1+'');var array2=__strnatcmp_split(f_string2+'');var len=array1.length;var text=true;var result=-1;var r=0;if(len>array2.length){len=array2.length;result=1;}
for(i=0;i<len;i++){if(isNaN(array1[i])){if(isNaN(array2[i])){text=true;if((r=this.strcmp(array1[i],array2[i]))!=0){return r;}}else if(text){return 1;}else{return-1;}}else if(isNaN(array2[i])){if(text){return-1;}else{return 1;}}else{if(text||f_version){if((r=(array1[i]-array2[i]))!=0){return r;}}else{if((r=this.strcmp(array1[i].toString(),array2[i].toString()))!=0){return r;}}
text=false;}}
return result;}
function strncasecmp(argStr1,argStr2,len){var diff,i=0;var str1=(argStr1+'').toLowerCase().substr(0,len);var str2=(argStr2+'').toLowerCase().substr(0,len);if(str1.length!==str2.length){if(str1.length<str2.length){len=str1.length;if(str2.substr(0,str1.length)==str1){return str1.length-str2.length;}}else{len=str2.length;if(str1.substr(0,str2.length)==str2){return str1.length-str2.length;}}}else{len=str1.length;}
for(diff=0,i=0;i<len;i++){diff=str1.charCodeAt(i)-str2.charCodeAt(i);if(diff!==0){return diff;}}
return 0;}
function strncmp(str1,str2,lgth){var s1=(str1+'').substr(0,lgth);var s2=(str2+'').substr(0,lgth);return((s1==s2)?0:((s1>s2)?1:-1));}
function strpbrk(haystack,char_list){for(var i=0,len=haystack.length;i<len;++i){if(char_list.indexOf(haystack.charAt(i))>=0){return haystack.slice(i);}}
return false;}
function strpos(haystack,needle,offset){var i=(haystack+'').indexOf(needle,(offset||0));return i===-1?false:i;}
function strrchr(haystack,needle){var pos=0;if(typeof needle!=='string'){needle=String.fromCharCode(parseInt(needle,10));}
needle=needle.charAt(0);pos=haystack.lastIndexOf(needle);if(pos===-1){return false;}
return haystack.substr(pos);}
function strrev(string){string=string+'';var grapheme_extend=/(.)([\uDC00-\uDFFF\u0300-\u036F\u0483-\u0489\u0591-\u05BD\u05BF\u05C1\u05C2\u05C4\u05C5\u05C7\u0610-\u061A\u064B-\u065E\u0670\u06D6-\u06DC\u06DE-\u06E4\u06E7\u06E8\u06EA-\u06ED\u0711\u0730-\u074A\u07A6-\u07B0\u07EB-\u07F3\u0901-\u0903\u093C\u093E-\u094D\u0951-\u0954\u0962\u0963\u0981-\u0983\u09BC\u09BE-\u09C4\u09C7\u09C8\u09CB-\u09CD\u09D7\u09E2\u09E3\u0A01-\u0A03\u0A3C\u0A3E-\u0A42\u0A47\u0A48\u0A4B-\u0A4D\u0A51\u0A70\u0A71\u0A75\u0A81-\u0A83\u0ABC\u0ABE-\u0AC5\u0AC7-\u0AC9\u0ACB-\u0ACD\u0AE2\u0AE3\u0B01-\u0B03\u0B3C\u0B3E-\u0B44\u0B47\u0B48\u0B4B-\u0B4D\u0B56\u0B57\u0B62\u0B63\u0B82\u0BBE-\u0BC2\u0BC6-\u0BC8\u0BCA-\u0BCD\u0BD7\u0C01-\u0C03\u0C3E-\u0C44\u0C46-\u0C48\u0C4A-\u0C4D\u0C55\u0C56\u0C62\u0C63\u0C82\u0C83\u0CBC\u0CBE-\u0CC4\u0CC6-\u0CC8\u0CCA-\u0CCD\u0CD5\u0CD6\u0CE2\u0CE3\u0D02\u0D03\u0D3E-\u0D44\u0D46-\u0D48\u0D4A-\u0D4D\u0D57\u0D62\u0D63\u0D82\u0D83\u0DCA\u0DCF-\u0DD4\u0DD6\u0DD8-\u0DDF\u0DF2\u0DF3\u0E31\u0E34-\u0E3A\u0E47-\u0E4E\u0EB1\u0EB4-\u0EB9\u0EBB\u0EBC\u0EC8-\u0ECD\u0F18\u0F19\u0F35\u0F37\u0F39\u0F3E\u0F3F\u0F71-\u0F84\u0F86\u0F87\u0F90-\u0F97\u0F99-\u0FBC\u0FC6\u102B-\u103E\u1056-\u1059\u105E-\u1060\u1062-\u1064\u1067-\u106D\u1071-\u1074\u1082-\u108D\u108F\u135F\u1712-\u1714\u1732-\u1734\u1752\u1753\u1772\u1773\u17B6-\u17D3\u17DD\u180B-\u180D\u18A9\u1920-\u192B\u1930-\u193B\u19B0-\u19C0\u19C8\u19C9\u1A17-\u1A1B\u1B00-\u1B04\u1B34-\u1B44\u1B6B-\u1B73\u1B80-\u1B82\u1BA1-\u1BAA\u1C24-\u1C37\u1DC0-\u1DE6\u1DFE\u1DFF\u20D0-\u20F0\u2DE0-\u2DFF\u302A-\u302F\u3099\u309A\uA66F-\uA672\uA67C\uA67D\uA802\uA806\uA80B\uA823-\uA827\uA880\uA881\uA8B4-\uA8C4\uA926-\uA92D\uA947-\uA953\uAA29-\uAA36\uAA43\uAA4C\uAA4D\uFB1E\uFE00-\uFE0F\uFE20-\uFE26]+)/g;string=string.replace(grapheme_extend,'$2$1');return string.split('').reverse().join('');}
function strripos(haystack,needle,offset){haystack=(haystack+'').toLowerCase();needle=(needle+'').toLowerCase();var i=-1;if(offset){i=(haystack+'').slice(offset).lastIndexOf(needle);if(i!==-1){i+=offset;}}else{i=(haystack+'').lastIndexOf(needle);}
return i>=0?i:false;}
function strrpos(haystack,needle,offset){var i=-1;if(offset){i=(haystack+'').slice(offset).lastIndexOf(needle);if(i!==-1){i+=offset;}}else{i=(haystack+'').lastIndexOf(needle);}
return i>=0?i:false;}
function strspn(str1,str2,start,lgth){var found;var stri;var strj;var j=0;var i=0;start=start?(start<0?(str1.length+start):start):0;lgth=lgth?((lgth<0)?(str1.length+lgth-start):lgth):str1.length-start;str1=str1.substr(start,lgth);for(i=0;i<str1.length;i++){found=0;stri=str1.substring(i,i+1);for(j=0;j<=str2.length;j++){strj=str2.substring(j,j+1);if(stri==strj){found=1;break;}}
if(found!=1){return i;}}
return i;}
function strstr(haystack,needle,bool){var pos=0;haystack+='';pos=haystack.indexOf(needle);if(pos==-1){return false;}else{if(bool){return haystack.substr(0,pos);}else{return haystack.slice(pos);}}}
function strtok(str,tokens){this.php_js=this.php_js||{};if(tokens===undefined){tokens=str;str=this.php_js.strtokleftOver;}
if(str.length===0){return false;}
if(tokens.indexOf(str.charAt(0))!==-1){return this.strtok(str.substr(1),tokens);}
for(var i=0;i<str.length;i++){if(tokens.indexOf(str.charAt(i))!==-1){break;}}
this.php_js.strtokleftOver=str.substr(i+1);return str.substring(0,i);}
function strtolower(str){return(str+'').toLowerCase();}
function strtotime(str,now){var i,match,s,strTmp='',parse='';strTmp=str;strTmp=strTmp.replace(/\s{2,}|^\s|\s$/g,' ');strTmp=strTmp.replace(/[\t\r\n]/g,'');if(strTmp=='now'){return(new Date()).getTime()/1000;}else if(!isNaN(parse=Date.parse(strTmp))){return(parse/1000);}else if(now){now=new Date(now*1000);}else{now=new Date();}
strTmp=strTmp.toLowerCase();var __is={day:{'sun':0,'mon':1,'tue':2,'wed':3,'thu':4,'fri':5,'sat':6},mon:{'jan':0,'feb':1,'mar':2,'apr':3,'may':4,'jun':5,'jul':6,'aug':7,'sep':8,'oct':9,'nov':10,'dec':11}};var process=function(m){var ago=(m[2]&&m[2]=='ago');var num=(num=m[0]=='last'?-1:1)*(ago?-1:1);switch(m[0]){case'last':case'next':switch(m[1].substring(0,3)){case'yea':now.setFullYear(now.getFullYear()+num);break;case'mon':now.setMonth(now.getMonth()+num);break;case'wee':now.setDate(now.getDate()+(num*7));break;case'day':now.setDate(now.getDate()+num);break;case'hou':now.setHours(now.getHours()+num);break;case'min':now.setMinutes(now.getMinutes()+num);break;case'sec':now.setSeconds(now.getSeconds()+num);break;default:var day;if(typeof(day=__is.day[m[1].substring(0,3)])!='undefined'){var diff=day-now.getDay();if(diff==0){diff=7*num;}else if(diff>0){if(m[0]=='last'){diff-=7;}}else{if(m[0]=='next'){diff+=7;}}
now.setDate(now.getDate()+diff);}}
break;default:if(/\d+/.test(m[0])){num*=parseInt(m[0],10);switch(m[1].substring(0,3)){case'yea':now.setFullYear(now.getFullYear()+num);break;case'mon':now.setMonth(now.getMonth()+num);break;case'wee':now.setDate(now.getDate()+(num*7));break;case'day':now.setDate(now.getDate()+num);break;case'hou':now.setHours(now.getHours()+num);break;case'min':now.setMinutes(now.getMinutes()+num);break;case'sec':now.setSeconds(now.getSeconds()+num);break;}}else{return false;}
break;}
return true;};match=strTmp.match(/^(\d{2,4}-\d{2}-\d{2})(?:\s(\d{1,2}:\d{2}(:\d{2})?)?(?:\.(\d+))?)?$/);if(match!=null){if(!match[2]){match[2]='00:00:00';}else if(!match[3]){match[2]+=':00';}
s=match[1].split(/-/g);for(i in __is.mon){if(__is.mon[i]==s[1]-1){s[1]=i;}}
s[0]=parseInt(s[0],10);s[0]=(s[0]>=0&&s[0]<=69)?'20'+(s[0]<10?'0'+s[0]:s[0]+''):(s[0]>=70&&s[0]<=99)?'19'+s[0]:s[0]+'';return parseInt(this.strtotime(s[2]+' '+s[1]+' '+s[0]+' '+match[2])+(match[4]?match[4]/1000:''),10);}
var regex='([+-]?\\d+\\s'+'(years?|months?|weeks?|days?|hours?|min|minutes?|sec|seconds?'+'|sun\\.?|sunday|mon\\.?|monday|tue\\.?|tuesday|wed\\.?|wednesday'+'|thu\\.?|thursday|fri\\.?|friday|sat\\.?|saturday)'+'|(last|next)\\s'+'(years?|months?|weeks?|days?|hours?|min|minutes?|sec|seconds?'+'|sun\\.?|sunday|mon\\.?|monday|tue\\.?|tuesday|wed\\.?|wednesday'+'|thu\\.?|thursday|fri\\.?|friday|sat\\.?|saturday))'+'(\\sago)?';match=strTmp.match(new RegExp(regex,'gi'));if(match==null){return false;}
for(i=0;i<match.length;i++){if(!process(match[i].split(' '))){return false;}}
return(now.getTime()/1000);}
function strtoupper(str){return(str+'').toUpperCase();}
function strtr(str,from,to){var fr='',i=0,j=0,lenStr=0,lenFrom=0,tmpStrictForIn=false,fromTypeStr='',toTypeStr='',istr='';var tmpFrom=[];var tmpTo=[];var ret='';var match=false;if(typeof from==='object'){tmpStrictForIn=this.ini_set('phpjs.strictForIn',false);from=this.krsort(from);this.ini_set('phpjs.strictForIn',tmpStrictForIn);for(fr in from){if(from.hasOwnProperty(fr)){tmpFrom.push(fr);tmpTo.push(from[fr]);}}
from=tmpFrom;to=tmpTo;}
lenStr=str.length;lenFrom=from.length;fromTypeStr=typeof from==='string';toTypeStr=typeof to==='string';for(i=0;i<lenStr;i++){match=false;if(fromTypeStr){istr=str.charAt(i);for(j=0;j<lenFrom;j++){if(istr==from.charAt(j)){match=true;break;}}}else{for(j=0;j<lenFrom;j++){if(str.substr(i,from[j].length)==from[j]){match=true;i=(i+from[j].length)-1;break;}}}
if(match){ret+=toTypeStr?to.charAt(j):to[j];}else{ret+=str.charAt(i);}}
return ret;}
function substr(str,start,len){var i=0,allBMP=true,es=0,el=0,se=0,ret='';str+='';var end=str.length;this.php_js=this.php_js||{};this.php_js.ini=this.php_js.ini||{};switch((this.php_js.ini['unicode.semantics']&&this.php_js.ini['unicode.semantics'].local_value.toLowerCase())){case'on':for(i=0;i<str.length;i++){if(/[\uD800-\uDBFF]/.test(str.charAt(i))&&/[\uDC00-\uDFFF]/.test(str.charAt(i+1))){allBMP=false;break;}}
if(!allBMP){if(start<0){for(i=end-1,es=(start+=end);i>=es;i--){if(/[\uDC00-\uDFFF]/.test(str.charAt(i))&&/[\uD800-\uDBFF]/.test(str.charAt(i-1))){start--;es--;}}}else{var surrogatePairs=/[\uD800-\uDBFF][\uDC00-\uDFFF]/g;while((surrogatePairs.exec(str))!=null){var li=surrogatePairs.lastIndex;if(li-2<start){start++;}else{break;}}}
if(start>=end||start<0){return false;}
if(len<0){for(i=end-1,el=(end+=len);i>=el;i--){if(/[\uDC00-\uDFFF]/.test(str.charAt(i))&&/[\uD800-\uDBFF]/.test(str.charAt(i-1))){end--;el--;}}
if(start>end){return false;}
return str.slice(start,end);}else{se=start+len;for(i=start;i<se;i++){ret+=str.charAt(i);if(/[\uD800-\uDBFF]/.test(str.charAt(i))&&/[\uDC00-\uDFFF]/.test(str.charAt(i+1))){se++;}}
return ret;}
break;}
case'off':default:if(start<0){start+=end;}
end=typeof len==='undefined'?end:(len<0?len+end:len+start);return start>=str.length||start<0||start>end?!1:str.slice(start,end);}
return undefined;}
function substr_compare(main_str,str,offset,length,case_insensitivity){if(!offset&&offset!==0){throw'Missing offset for substr_compare()';}
if(offset<0){offset=main_str.length+offset;}
if(length&&length>(main_str.length-offset)){return false;}
length=length||main_str.length-offset;main_str=main_str.substr(offset,length);str=str.substr(0,length);if(case_insensitivity){main_str=(main_str+'').toLowerCase();str=(str+'').toLowerCase();if(main_str==str){return 0;}
return(main_str>str)?1:-1;}
return((main_str==str)?0:((main_str>str)?1:-1));}
function substr_count(haystack,needle,offset,length){var pos=0,cnt=0;haystack+='';needle+='';if(isNaN(offset)){offset=0;}
if(isNaN(length)){length=0;}
offset--;while((offset=haystack.indexOf(needle,offset+1))!=-1){if(length>0&&(offset+needle.length)>length){return false;}else{cnt++;}}
return cnt;}
function substr_replace(str,replace,start,length){if(start<0){start=start+str.length;}
length=length!==undefined?length:str.length;if(length<0){length=length+str.length-start;}
return str.slice(0,start)+replace.substr(0,length)+replace.slice(length)+str.slice(start+length);}
function tan(arg){return Math.tan(arg);}
function tanh(arg){return(Math.exp(arg)-Math.exp(-arg))/(Math.exp(arg)+Math.exp(-arg));}
function time(){return Math.floor(new Date().getTime()/1000);}
function trim(str,charlist){var whitespace,l=0,i=0;str+='';if(!charlist){whitespace=" \n\r\t\f\x0b\xa0\u2000\u2001\u2002\u2003\u2004\u2005\u2006\u2007\u2008\u2009\u200a\u200b\u2028\u2029\u3000";}else{charlist+='';whitespace=charlist.replace(/([\[\]\(\)\.\?\/\*\{\}\+\$\^\:])/g,'$1');}
l=str.length;for(i=0;i<l;i++){if(whitespace.indexOf(str.charAt(i))===-1){str=str.substring(i);break;}}
l=str.length;for(i=l-1;i>=0;i--){if(whitespace.indexOf(str.charAt(i))===-1){str=str.substring(0,i+1);break;}}
return whitespace.indexOf(str.charAt(0))===-1?str:'';}
function uasort(inputArr,sorter){var valArr=[],tempKeyVal,tempValue,ret,k='',i=0,strictForIn=false,populateArr={};if(typeof sorter==='string'){sorter=this[sorter];}else if(Object.prototype.toString.call(sorter)==='[object Array]'){sorter=this[sorter[0]][sorter[1]];}
this.php_js=this.php_js||{};this.php_js.ini=this.php_js.ini||{};strictForIn=this.php_js.ini['phpjs.strictForIn']&&this.php_js.ini['phpjs.strictForIn'].local_value&&this.php_js.ini['phpjs.strictForIn'].local_value!=='off';populateArr=strictForIn?inputArr:populateArr;for(k in inputArr){if(inputArr.hasOwnProperty(k)){valArr.push([k,inputArr[k]]);if(strictForIn){delete inputArr[k];}}}
valArr.sort(function(a,b){return sorter(a[1],b[1]);});for(i=0;i<valArr.length;i++){populateArr[valArr[i][0]]=valArr[i][1];}
return strictForIn||populateArr;}
function ucfirst(str){str+='';var f=str.charAt(0).toUpperCase();return f+str.substr(1);}
function ucwords(str){return(str+'').replace(/^([a-z])|\s+([a-z])/g,function($1){return $1.toUpperCase();});}
function uksort(inputArr,sorter){var tmp_arr={},keys=[],i=0,k='',strictForIn=false,populateArr={};if(typeof sorter==='string'){sorter=this.window[sorter];}
for(k in inputArr){if(inputArr.hasOwnProperty(k)){keys.push(k);}}
try{if(sorter){keys.sort(sorter);}else{keys.sort();}}catch(e){return false;}
this.php_js=this.php_js||{};this.php_js.ini=this.php_js.ini||{};strictForIn=this.php_js.ini['phpjs.strictForIn']&&this.php_js.ini['phpjs.strictForIn'].local_value&&this.php_js.ini['phpjs.strictForIn'].local_value!=='off';populateArr=strictForIn?inputArr:populateArr;for(i=0;i<keys.length;i++){k=keys[i];tmp_arr[k]=inputArr[k];if(strictForIn){delete inputArr[k];}}
for(i in tmp_arr){if(tmp_arr.hasOwnProperty(i)){populateArr[i]=tmp_arr[i];}}
return strictForIn||populateArr;}
function unserialize(data){var that=this;var utf8Overhead=function(chr){var code=chr.charCodeAt(0);if(code<0x0080){return 0;}
if(code<0x0800){return 1;}
return 2;};var error=function(type,msg,filename,line){throw new that.window[type](msg,filename,line);};var read_until=function(data,offset,stopchr){var buf=[];var chr=data.slice(offset,offset+1);var i=2;while(chr!=stopchr){if((i+offset)>data.length){error('Error','Invalid');}
buf.push(chr);chr=data.slice(offset+(i-1),offset+i);i+=1;}
return[buf.length,buf.join('')];};var read_chrs=function(data,offset,length){var buf;buf=[];for(var i=0;i<length;i++){var chr=data.slice(offset+(i-1),offset+i);buf.push(chr);length-=utf8Overhead(chr);}
return[buf.length,buf.join('')];};var _unserialize=function(data,offset){var readdata;var readData;var chrs=0;var ccount;var stringlength;var keyandchrs;var keys;if(!offset){offset=0;}
var dtype=(data.slice(offset,offset+1)).toLowerCase();var dataoffset=offset+2;var typeconvert=function(x){return x;};switch(dtype){case'i':typeconvert=function(x){return parseInt(x,10);};readData=read_until(data,dataoffset,';');chrs=readData[0];readdata=readData[1];dataoffset+=chrs+1;break;case'b':typeconvert=function(x){return parseInt(x,10)!==0;};readData=read_until(data,dataoffset,';');chrs=readData[0];readdata=readData[1];dataoffset+=chrs+1;break;case'd':typeconvert=function(x){return parseFloat(x);};readData=read_until(data,dataoffset,';');chrs=readData[0];readdata=readData[1];dataoffset+=chrs+1;break;case'n':readdata=null;break;case's':ccount=read_until(data,dataoffset,':');chrs=ccount[0];stringlength=ccount[1];dataoffset+=chrs+2;readData=read_chrs(data,dataoffset+1,parseInt(stringlength,10));chrs=readData[0];readdata=readData[1];dataoffset+=chrs+2;if(chrs!=parseInt(stringlength,10)&&chrs!=readdata.length){error('SyntaxError','String length mismatch');}
readdata=that.utf8_decode(readdata);break;case'a':readdata={};keyandchrs=read_until(data,dataoffset,':');chrs=keyandchrs[0];keys=keyandchrs[1];dataoffset+=chrs+2;for(var i=0;i<parseInt(keys,10);i++){var kprops=_unserialize(data,dataoffset);var kchrs=kprops[1];var key=kprops[2];dataoffset+=kchrs;var vprops=_unserialize(data,dataoffset);var vchrs=vprops[1];var value=vprops[2];dataoffset+=vchrs;readdata[key]=value;}
dataoffset+=1;break;default:error('SyntaxError','Unknown / Unhandled data type(s): '+dtype);break;}
return[dtype,dataoffset-offset,typeconvert(readdata)];};return _unserialize((data+''),0)[2];}
function urldecode(str){return decodeURIComponent((str+'').replace(/\+/g,'%20'));}
function urlencode(str){str=(str+'').toString();return encodeURIComponent(str).replace(/!/g,'%21').replace(/'/g,'%27').replace(/\(/g,'%28').replace(/\)/g,'%29').replace(/\*/g,'%2A').replace(/%20/g,'+');}
function usort(inputArr,sorter){var valArr=[],k='',i=0,strictForIn=false,populateArr={};if(typeof sorter==='string'){sorter=this[sorter];}else if(Object.prototype.toString.call(sorter)==='[object Array]'){sorter=this[sorter[0]][sorter[1]];}
this.php_js=this.php_js||{};this.php_js.ini=this.php_js.ini||{};strictForIn=this.php_js.ini['phpjs.strictForIn']&&this.php_js.ini['phpjs.strictForIn'].local_value&&this.php_js.ini['phpjs.strictForIn'].local_value!=='off';populateArr=strictForIn?inputArr:populateArr;for(k in inputArr){if(inputArr.hasOwnProperty(k)){valArr.push(inputArr[k]);if(strictForIn){delete inputArr[k];}}}
try{valArr.sort(sorter);}catch(e){return false;}
for(i=0;i<valArr.length;i++){populateArr[i]=valArr[i];}
return strictForIn||populateArr;}
function utf8_decode(str_data){var tmp_arr=[],i=0,ac=0,c1=0,c2=0,c3=0;str_data+='';while(i<str_data.length){c1=str_data.charCodeAt(i);if(c1<128){tmp_arr[ac++]=String.fromCharCode(c1);i++;}else if(c1>191&&c1<224){c2=str_data.charCodeAt(i+1);tmp_arr[ac++]=String.fromCharCode(((c1&31)<<6)|(c2&63));i+=2;}else{c2=str_data.charCodeAt(i+1);c3=str_data.charCodeAt(i+2);tmp_arr[ac++]=String.fromCharCode(((c1&15)<<12)|((c2&63)<<6)|(c3&63));i+=3;}}
return tmp_arr.join('');}
function utf8_encode(argString){if(argString===null||typeof argString==="undefined"){return"";}
var string=(argString+'');var utftext="",start,end,stringl=0;start=end=0;stringl=string.length;for(var n=0;n<stringl;n++){var c1=string.charCodeAt(n);var enc=null;if(c1<128){end++;}else if(c1>127&&c1<2048){enc=String.fromCharCode((c1>>6)|192)+String.fromCharCode((c1&63)|128);}else{enc=String.fromCharCode((c1>>12)|224)+String.fromCharCode(((c1>>6)&63)|128)+String.fromCharCode((c1&63)|128);}
if(enc!==null){if(end>start){utftext+=string.slice(start,end);}
utftext+=enc;start=end=n+1;}}
if(end>start){utftext+=string.slice(start,stringl);}
return utftext;}
function var_dump(){var output='',pad_char=' ',pad_val=4,lgth=0,i=0,d=this.window.document;var _getFuncName=function(fn){var name=(/\W*function\s+([\w\$]+)\s*\(/).exec(fn);if(!name){return'(Anonymous)';}
return name[1];};var _repeat_char=function(len,pad_char){var str='';for(var i=0;i<len;i++){str+=pad_char;}
return str;};var _getInnerVal=function(val,thick_pad){var ret='';if(val===null){ret='NULL';}else if(typeof val==='boolean'){ret='bool('+val+')';}else if(typeof val==='string'){ret='string('+val.length+') "'+val+'"';}else if(typeof val==='number'){if(parseFloat(val)==parseInt(val,10)){ret='int('+val+')';}else{ret='float('+val+')';}}
else if(typeof val==='undefined'){ret='undefined';}else if(typeof val==='function'){var funcLines=val.toString().split('\n');ret='';for(var i=0,fll=funcLines.length;i<fll;i++){ret+=(i!==0?'\n'+thick_pad:'')+funcLines[i];}}else if(val instanceof Date){ret='Date('+val+')';}else if(val instanceof RegExp){ret='RegExp('+val+')';}else if(val.nodeName){switch(val.nodeType){case 1:if(typeof val.namespaceURI==='undefined'||val.namespaceURI==='http://www.w3.org/1999/xhtml'){ret='HTMLElement("'+val.nodeName+'")';}else{ret='XML Element("'+val.nodeName+'")';}
break;case 2:ret='ATTRIBUTE_NODE('+val.nodeName+')';break;case 3:ret='TEXT_NODE('+val.nodeValue+')';break;case 4:ret='CDATA_SECTION_NODE('+val.nodeValue+')';break;case 5:ret='ENTITY_REFERENCE_NODE';break;case 6:ret='ENTITY_NODE';break;case 7:ret='PROCESSING_INSTRUCTION_NODE('+val.nodeName+':'+val.nodeValue+')';break;case 8:ret='COMMENT_NODE('+val.nodeValue+')';break;case 9:ret='DOCUMENT_NODE';break;case 10:ret='DOCUMENT_TYPE_NODE';break;case 11:ret='DOCUMENT_FRAGMENT_NODE';break;case 12:ret='NOTATION_NODE';break;}}
return ret;};var _formatArray=function(obj,cur_depth,pad_val,pad_char){var someProp='';if(cur_depth>0){cur_depth++;}
var base_pad=_repeat_char(pad_val*(cur_depth-1),pad_char);var thick_pad=_repeat_char(pad_val*(cur_depth+1),pad_char);var str='';var val='';if(typeof obj==='object'&&obj!==null){if(obj.constructor&&_getFuncName(obj.constructor)==='PHPJS_Resource'){return obj.var_dump();}
lgth=0;for(someProp in obj){lgth++;}
str+='array('+lgth+') {\n';for(var key in obj){var objVal=obj[key];if(typeof objVal==='object'&&objVal!==null&&!(objVal instanceof Date)&&!(objVal instanceof RegExp)&&!objVal.nodeName){str+=thick_pad+'['+key+'] =>\n'+thick_pad+_formatArray(objVal,cur_depth+1,pad_val,pad_char);}else{val=_getInnerVal(objVal,thick_pad);str+=thick_pad+'['+key+'] =>\n'+thick_pad+val+'\n';}}
str+=base_pad+'}\n';}else{str=_getInnerVal(obj,thick_pad);}
return str;};output=_formatArray(arguments[0],0,pad_val,pad_char);for(i=1;i<arguments.length;i++){output+='\n'+_formatArray(arguments[i],0,pad_val,pad_char);}
if(d.body){this.echo(output);}else{try{d=XULDocument;this.echo('<pre xmlns="http://www.w3.org/1999/xhtml" style="white-space:pre;">'+output+'</pre>');}catch(e){this.echo(output);}}}
function var_export(mixed_expression,bool_return){var retstr='',iret='',cnt=0,x=[],i=0,funcParts=[],idtLevel=arguments[2]||2,innerIndent='',outerIndent='';var getFuncName=function(fn){var name=(/\W*function\s+([\w\$]+)\s*\(/).exec(fn);if(!name){return'(Anonymous)';}
return name[1];};var _makeIndent=function(idtLevel){return(new Array(idtLevel+1)).join(' ');};var __getType=function(inp){var i=0;var match,type=typeof inp;if(type==='object'&&inp.constructor&&getFuncName(inp.constructor)==='PHPJS_Resource'){return'resource';}
if(type==='function'){return'function';}
if(type==='object'&&!inp){return'null';}
if(type==="object"){if(!inp.constructor){return'object';}
var cons=inp.constructor.toString();match=cons.match(/(\w+)\(/);if(match){cons=match[1].toLowerCase();}
var types=["boolean","number","string","array"];for(i=0;i<types.length;i++){if(cons===types[i]){type=types[i];break;}}}
return type;};var type=__getType(mixed_expression);if(type===null){retstr="NULL";}else if(type==='array'||type==='object'){outerIndent=_makeIndent(idtLevel-2);innerIndent=_makeIndent(idtLevel);for(i in mixed_expression){var value=this.var_export(mixed_expression[i],true,idtLevel+2);value=typeof value==='string'?value.replace(/</g,'&lt;').replace(/>/g,'&gt;'):value;x[cnt++]=innerIndent+i+' => '+(__getType(mixed_expression[i])==='array'?'\n':'')+value;}
iret=x.join(',\n');retstr=outerIndent+"array (\n"+iret+'\n'+outerIndent+')';}else if(type==='function'){funcParts=mixed_expression.toString().match(/function .*?\((.*?)\) \{([\s\S]*)\}/);retstr="create_function ('"+funcParts[1]+"', '"+funcParts[2].replace(new RegExp("'",'g'),"\\'")+"')";}else if(type==='resource'){retstr='NULL';}else{retstr=(typeof(mixed_expression)!=='string')?mixed_expression:"'"+mixed_expression.replace(/(["'])/g,"\\$1").replace(/\0/g,"\\0")+"'";}
if(bool_return!==true){this.echo(retstr);return null;}else{return retstr;}}
function vprintf(format,args){var body,elmt;var ret='',d=this.window.document;var HTMLNS='http://www.w3.org/1999/xhtml';body=d.getElementsByTagNameNS?(d.getElementsByTagNameNS(HTMLNS,'body')[0]?d.getElementsByTagNameNS(HTMLNS,'body')[0]:d.documentElement.lastChild):d.getElementsByTagName('body')[0];if(!body){return false;}
ret=this.sprintf.apply(this,[format].concat(args));elmt=d.createTextNode(ret);body.appendChild(elmt);return ret.length;}
function vsprintf(format,args){return this.sprintf.apply(this,[format].concat(args));}
function wordwrap(str,int_width,str_break,cut){var m=((arguments.length>=2)?arguments[1]:75);var b=((arguments.length>=3)?arguments[2]:"\n");var c=((arguments.length>=4)?arguments[3]:false);var i,j,l,s,r;str+='';if(m<1){return str;}
for(i=-1,l=(r=str.split(/\r\n|\n|\r/)).length;++i<l;r[i]+=s){for(s=r[i],r[i]="";s.length>m;r[i]+=s.slice(0,j)+((s=s.slice(j)).length?b:"")){j=c==2||(j=s.slice(0,m+1).match(/\S*(\s)?$/))[1]?m:j.input.length-j[0].length||c==1&&m||j.input.length+(j=s.slice(m).match(/^\S*/)).input.length;}}
return r.join("\n");}</script>

<script native="jsml/json2.js">
/*
    json2.js
    2013-05-26

    Public Domain.

    NO WARRANTY EXPRESSED OR IMPLIED. USE AT YOUR OWN RISK.

    See http://www.JSON.org/js.html


    This code should be minified before deployment.
    See http://javascript.crockford.com/jsmin.html

    USE YOUR OWN COPY. IT IS EXTREMELY UNWISE TO LOAD CODE FROM SERVERS YOU DO
    NOT CONTROL.


    This file creates a global JSON object containing two methods: stringify
    and parse.

        JSON.stringify(value, replacer, space)
            value       any JavaScript value, usually an object or array.

            replacer    an optional parameter that determines how object
                        values are stringified for objects. It can be a
                        function or an array of strings.

            space       an optional parameter that specifies the indentation
                        of nested structures. If it is omitted, the text will
                        be packed without extra whitespace. If it is a number,
                        it will specify the number of spaces to indent at each
                        level. If it is a string (such as '\t' or '&nbsp;'),
                        it contains the characters used to indent at each level.

            This method produces a JSON text from a JavaScript value.

            When an object value is found, if the object contains a toJSON
            method, its toJSON method will be called and the result will be
            stringified. A toJSON method does not serialize: it returns the
            value represented by the name/value pair that should be serialized,
            or undefined if nothing should be serialized. The toJSON method
            will be passed the key associated with the value, and this will be
            bound to the value

            For example, this would serialize Dates as ISO strings.

                Date.prototype.toJSON = function (key) {
                    function f(n) {
                        // Format integers to have at least two digits.
                        return n < 10 ? '0' + n : n;
                    }

                    return this.getUTCFullYear()   + '-' +
                         f(this.getUTCMonth() + 1) + '-' +
                         f(this.getUTCDate())      + 'T' +
                         f(this.getUTCHours())     + ':' +
                         f(this.getUTCMinutes())   + ':' +
                         f(this.getUTCSeconds())   + 'Z';
                };

            You can provide an optional replacer method. It will be passed the
            key and value of each member, with this bound to the containing
            object. The value that is returned from your method will be
            serialized. If your method returns undefined, then the member will
            be excluded from the serialization.

            If the replacer parameter is an array of strings, then it will be
            used to select the members to be serialized. It filters the results
            such that only members with keys listed in the replacer array are
            stringified.

            Values that do not have JSON representations, such as undefined or
            functions, will not be serialized. Such values in objects will be
            dropped; in arrays they will be replaced with null. You can use
            a replacer function to replace those with JSON values.
            JSON.stringify(undefined) returns undefined.

            The optional space parameter produces a stringification of the
            value that is filled with line breaks and indentation to make it
            easier to read.

            If the space parameter is a non-empty string, then that string will
            be used for indentation. If the space parameter is a number, then
            the indentation will be that many spaces.

            Example:

            text = JSON.stringify(['e', {pluribus: 'unum'}]);
            // text is '["e",{"pluribus":"unum"}]'


            text = JSON.stringify(['e', {pluribus: 'unum'}], null, '\t');
            // text is '[\n\t"e",\n\t{\n\t\t"pluribus": "unum"\n\t}\n]'

            text = JSON.stringify([new Date()], function (key, value) {
                return this[key] instanceof Date ?
                    'Date(' + this[key] + ')' : value;
            });
            // text is '["Date(---current time---)"]'


        JSON.parse(text, reviver)
            This method parses a JSON text to produce an object or array.
            It can throw a SyntaxError exception.

            The optional reviver parameter is a function that can filter and
            transform the results. It receives each of the keys and values,
            and its return value is used instead of the original value.
            If it returns what it received, then the structure is not modified.
            If it returns undefined then the member is deleted.

            Example:

            // Parse the text. Values that look like ISO date strings will
            // be converted to Date objects.

            myData = JSON.parse(text, function (key, value) {
                var a;
                if (typeof value === 'string') {
                    a =
/^(\d{4})-(\d{2})-(\d{2})T(\d{2}):(\d{2}):(\d{2}(?:\.\d*)?)Z$/.exec(value);
                    if (a) {
                        return new Date(Date.UTC(+a[1], +a[2] - 1, +a[3], +a[4],
                            +a[5], +a[6]));
                    }
                }
                return value;
            });

            myData = JSON.parse('["Date(09/09/2001)"]', function (key, value) {
                var d;
                if (typeof value === 'string' &&
                        value.slice(0, 5) === 'Date(' &&
                        value.slice(-1) === ')') {
                    d = new Date(value.slice(5, -1));
                    if (d) {
                        return d;
                    }
                }
                return value;
            });


    This is a reference implementation. You are free to copy, modify, or
    redistribute.
*/

/*jslint evil: true, regexp: true */

/*members "", "\b", "\t", "\n", "\f", "\r", "\"", JSON, "\\", apply,
    call, charCodeAt, getUTCDate, getUTCFullYear, getUTCHours,
    getUTCMinutes, getUTCMonth, getUTCSeconds, hasOwnProperty, join,
    lastIndex, length, parse, prototype, push, replace, slice, stringify,
    test, toJSON, toString, valueOf
*/


// Create a JSON object only if one does not already exist. We create the
// methods in a closure to avoid creating global variables.

if (typeof JSON !== 'object') {
    JSON = {};
}

(function () {
    'use strict';

    function f(n) {
        // Format integers to have at least two digits.
        return n < 10 ? '0' + n : n;
    }

    if (typeof Date.prototype.toJSON !== 'function') {

        Date.prototype.toJSON = function () {

            return isFinite(this.valueOf())
                ? this.getUTCFullYear()     + '-' +
                    f(this.getUTCMonth() + 1) + '-' +
                    f(this.getUTCDate())      + 'T' +
                    f(this.getUTCHours())     + ':' +
                    f(this.getUTCMinutes())   + ':' +
                    f(this.getUTCSeconds())   + 'Z'
                : null;
        };

        String.prototype.toJSON      =
            Number.prototype.toJSON  =
            Boolean.prototype.toJSON = function () {
                return this.valueOf();
            };
    }

    var cx = /[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
        escapable = /[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
        gap,
        indent,
        meta = {    // table of character substitutions
            '\b': '\\b',
            '\t': '\\t',
            '\n': '\\n',
            '\f': '\\f',
            '\r': '\\r',
            '"' : '\\"',
            '\\': '\\\\'
        },
        rep;


    function quote(string) {

// If the string contains no control characters, no quote characters, and no
// backslash characters, then we can safely slap some quotes around it.
// Otherwise we must also replace the offending characters with safe escape
// sequences.

        escapable.lastIndex = 0;
        return escapable.test(string) ? '"' + string.replace(escapable, function (a) {
            var c = meta[a];
            return typeof c === 'string'
                ? c
                : '\\u' + ('0000' + a.charCodeAt(0).toString(16)).slice(-4);
        }) + '"' : '"' + string + '"';
    }


    function str(key, holder) {

// Produce a string from holder[key].

        var i,          // The loop counter.
            k,          // The member key.
            v,          // The member value.
            length,
            mind = gap,
            partial,
            value = holder[key];

// If the value has a toJSON method, call it to obtain a replacement value.

        if (value && typeof value === 'object' &&
                typeof value.toJSON === 'function') {
            value = value.toJSON(key);
        }

// If we were called with a replacer function, then call the replacer to
// obtain a replacement value.

        if (typeof rep === 'function') {
            value = rep.call(holder, key, value);
        }

// What happens next depends on the value's type.

        switch (typeof value) {
        case 'string':
            return quote(value);

        case 'number':

// JSON numbers must be finite. Encode non-finite numbers as null.

            return isFinite(value) ? String(value) : 'null';

        case 'boolean':
        case 'null':

// If the value is a boolean or null, convert it to a string. Note:
// typeof null does not produce 'null'. The case is included here in
// the remote chance that this gets fixed someday.

            return String(value);

// If the type is 'object', we might be dealing with an object or an array or
// null.

        case 'object':

// Due to a specification blunder in ECMAScript, typeof null is 'object',
// so watch out for that case.

            if (!value) {
                return 'null';
            }

// Make an array to hold the partial results of stringifying this object value.

            gap += indent;
            partial = [];

// Is the value an array?

            if (Object.prototype.toString.apply(value) === '[object Array]') {

// The value is an array. Stringify every element. Use null as a placeholder
// for non-JSON values.

                length = value.length;
                for (i = 0; i < length; i += 1) {
                    partial[i] = str(i, value) || 'null';
                }

// Join all of the elements together, separated with commas, and wrap them in
// brackets.

                v = partial.length === 0
                    ? '[]'
                    : gap
                    ? '[\n' + gap + partial.join(',\n' + gap) + '\n' + mind + ']'
                    : '[' + partial.join(',') + ']';
                gap = mind;
                return v;
            }

// If the replacer is an array, use it to select the members to be stringified.

            if (rep && typeof rep === 'object') {
                length = rep.length;
                for (i = 0; i < length; i += 1) {
                    if (typeof rep[i] === 'string') {
                        k = rep[i];
                        v = str(k, value);
                        if (v) {
                            partial.push(quote(k) + (gap ? ': ' : ':') + v);
                        }
                    }
                }
            } else {

// Otherwise, iterate through all of the keys in the object.

                for (k in value) {
                    if (Object.prototype.hasOwnProperty.call(value, k)) {
                        v = str(k, value);
                        if (v) {
                            partial.push(quote(k) + (gap ? ': ' : ':') + v);
                        }
                    }
                }
            }

// Join all of the member texts together, separated with commas,
// and wrap them in braces.

            v = partial.length === 0
                ? '{}'
                : gap
                ? '{\n' + gap + partial.join(',\n' + gap) + '\n' + mind + '}'
                : '{' + partial.join(',') + '}';
            gap = mind;
            return v;
        }
    }

// If the JSON object does not yet have a stringify method, give it one.

    if (typeof JSON.stringify !== 'function') {
        JSON.stringify = function (value, replacer, space) {

// The stringify method takes a value and an optional replacer, and an optional
// space parameter, and returns a JSON text. The replacer can be a function
// that can replace values, or an array of strings that will select the keys.
// A default replacer method can be provided. Use of the space parameter can
// produce text that is more easily readable.

            var i;
            gap = '';
            indent = '';

// If the space parameter is a number, make an indent string containing that
// many spaces.

            if (typeof space === 'number') {
                for (i = 0; i < space; i += 1) {
                    indent += ' ';
                }

// If the space parameter is a string, it will be used as the indent string.

            } else if (typeof space === 'string') {
                indent = space;
            }

// If there is a replacer, it must be a function or an array.
// Otherwise, throw an error.

            rep = replacer;
            if (replacer && typeof replacer !== 'function' &&
                    (typeof replacer !== 'object' ||
                    typeof replacer.length !== 'number')) {
                throw new Error('JSON.stringify');
            }

// Make a fake root object containing our value under the key of ''.
// Return the result of stringifying the value.

            return str('', {'': value});
        };
    }


// If the JSON object does not yet have a parse method, give it one.

    if (typeof JSON.parse !== 'function') {
        JSON.parse = function (text, reviver) {

// The parse method takes a text and an optional reviver function, and returns
// a JavaScript value if the text is a valid JSON text.

            var j;

            function walk(holder, key) {

// The walk method is used to recursively walk the resulting structure so
// that modifications can be made.

                var k, v, value = holder[key];
                if (value && typeof value === 'object') {
                    for (k in value) {
                        if (Object.prototype.hasOwnProperty.call(value, k)) {
                            v = walk(value, k);
                            if (v !== undefined) {
                                value[k] = v;
                            } else {
                                delete value[k];
                            }
                        }
                    }
                }
                return reviver.call(holder, key, value);
            }


// Parsing happens in four stages. In the first stage, we replace certain
// Unicode characters with escape sequences. JavaScript handles many characters
// incorrectly, either silently deleting them, or treating them as line endings.

            text = String(text);
            cx.lastIndex = 0;
            if (cx.test(text)) {
                text = text.replace(cx, function (a) {
                    return '\\u' +
                        ('0000' + a.charCodeAt(0).toString(16)).slice(-4);
                });
            }

// In the second stage, we run the text against regular expressions that look
// for non-JSON patterns. We are especially concerned with '()' and 'new'
// because they can cause invocation, and '=' because it can cause mutation.
// But just to be safe, we want to reject all unexpected forms.

// We split the second stage into 4 regexp operations in order to work around
// crippling inefficiencies in IE's and Safari's regexp engines. First we
// replace the JSON backslash pairs with '@' (a non-JSON character). Second, we
// replace all simple value tokens with ']' characters. Third, we delete all
// open brackets that follow a colon or comma or that begin the text. Finally,
// we look to see that the remaining characters are only whitespace or ']' or
// ',' or ':' or '{' or '}'. If that is so, then the text is safe for eval.

            if (/^[\],:{}\s]*$/
                    .test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g, '@')
                        .replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, ']')
                        .replace(/(?:^|:|,)(?:\s*\[)+/g, ''))) {

// In the third stage we use the eval function to compile the text into a
// JavaScript structure. The '{' operator is subject to a syntactic ambiguity
// in JavaScript: it can begin a block or an object literal. We wrap the text
// in parens to eliminate the ambiguity.

                j = eval('(' + text + ')');

// In the optional fourth stage, we recursively walk the new structure, passing
// each name/value pair to a reviver function for possible transformation.

                return typeof reviver === 'function'
                    ? walk({'': j}, '')
                    : j;
            }

// If the text is not JSON parseable, then a SyntaxError is thrown.

            throw new SyntaxError('JSON.parse');
        };
    }
}());
</script>

<style native="jsml/ao.css">
body {
	/*backgroundColor: #2D9323*/
}

body,div,span,dl,dt,dd,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,button,p,blockquote,th,td,table{
	margin: 0;
	padding: 0;
	font-size: 28px ;
	font-family: sans-serif,Arial, Times New Roman, Arial, Helvetica, sans-serif, Courier New, Verdana;
}

th,td,table {
	//border-collapse: collapse;
	font-weight:bold;
}

a {
	text-decoration: none;
}

a:active,a:visited,a:link {
	text-decoration: none;
	color: #0000FF;
}

a:hover {
	text-decoration: underline;
	color: #ff0000;
}

a.bold { /*font-weight:bold;*/
	color: blue;
}

img {
	border: 0;
}</style>

<script native="jsml/ao.js">
//var que = jQuery.noConflict();
que=$;
///var jQuery = que;
//var que = $;
var $__que = que;
$__que.fn._parent = $__que.fn.parent;
$__que.fn.cr = $__que.fn.children;
$__que.fn.cri = function(i){
	return this.children().eq(i);
}
if (typeof console == 'undefined') {
	console = {
		log : function() {
		},
		error : function() {
		}
	}
}
var $__console = console;
var $__document = document;
var $__window = window;
var $__screen = screen;

var $__doc = $__document;
var $__win = $__window;
var $__src = $__screen;

function fb($str){
	return $__console.log($str);
}

function get($obj){
	return $obj;
}
function arg($arr){
	//$t = new Array();
	//$t = [];
	//alert($t.constructor == Array);
	if($__que.isArray($arr)) $arr = new Array($arr);
	return $arr;
}</script>

<script static="1">
stock_ViewStock.main();
</script>

</head><body></body></html>