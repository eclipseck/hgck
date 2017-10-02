<?php
error_reporting(0);
//session_start();
ob_start('ob_gzhandler');
//mb_internal_encoding("UTF-8");
//ini_set("precision",28);
$runtime = microtime(true);
function errorHandler($errno, $errstr, $errfile, $errline) {
	$errname = "";
	switch ($errno) {
		case E_NOTICE:
			$errname="E_NOTICE";
			break;
		case E_WARNING:
			$errname="E_WARNING";
			break;
		case E_PARSE:
			$errname="E_PARSE";
			break;
		case E_NOTICE:
			$errname="E_NOTICE";
			break;
		case E_CORE_ERROR:
			$errname="E_CORE_ERROR";
			break;
		case E_CORE_WARNING:
			$errname="E_CORE_WARNING";
			break;
		case E_COMPILE_ERROR:
			$errname="E_COMPILE_ERROR";
			break;
		case E_COMPILE_WARNING:
			$errname="E_COMPILE_WARNING";
			break;
		case E_USER_ERROR:
			$errname="E_USER_ERROR";
			break;
		case E_USER_WARNING:
			$errname="E_USER_WARNING";
			break;
		case E_USER_NOTICE:
			$errname="E_USER_NOTICE";
			break;
		case E_STRICT:
			$errname="E_STRICT";
			break;
		case E_RECOVERABLE_ERROR:
			$errname="E_RECOVERABLE_ERROR";
			break;
		case E_DEPRECATED:
			$errname="E_DEPRECATED";
			break;
		case E_USER_DEPRECATED:
			$errname="E_USER_DEPRECATED";
			break;
		case E_ALL:
			$errname="E_ALL";
			break;
	}

	switch ($errno) {
		case E_NOTICE:
		case E_STRICT:
			break;
		default:
			throw new Exception(implode('', array('[', $errname, '] ', $errstr)), $errno);
			break;
	}

	/* Don't execute PHP internal error handler */
	return true;
}
//set_error_handler('errorHandler');
//if($_SERVER["REMOTE_ADDR"] == "127.0.0.1") 
set_time_limit(0);
ini_set('max_execution_time', 600);

//ini_set('error_reporting', E_ALL);
//ini_set('log_errors', true);
//ini_set('track_errors', true);
//ini_set('display_errors', 1);
error_reporting(E_ERROR | E_WARNING);
//error_reporting(E_ALL);
//error_reporting(E_ALL & ~E_NOTICE);

set_include_path( implode('',
array(
		'WEB-INF/src/', PATH_SEPARATOR, 
		'WEB-INF/test/', PATH_SEPARATOR,
		'WEB-INF/.classes/', PATH_SEPARATOR, 
		'WEB-INF/lib/', PATH_SEPARATOR, 
//get_include_path()
)
));


//require_once 'Zend/Loader/StandardAutoloader.php';
//$loader = new Zend\Loader\StandardAutoloader(array('autoregister_zf' => true));
//$loader->register();

require_once 'jsml/Ao.jsml';
jsml_Ao::main();
//fb(microtime(true) - $runtime);
?>