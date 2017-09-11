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
}