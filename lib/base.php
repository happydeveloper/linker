<?php

/**
* Class that is a namespace for all global OC variables
* No, we can not put this class in its own file because it is used by
* OC_autoload!
*/
class OC {
	/**
	* Associative array for autoloading. classname => filename
	* 자동적으로 로딩되어 있는 연계된 클래스 배열
	*/
	public static $CLASSPATH = array();

	/**
	* Handle the request
	*/
	public static function handleRequest() {
		echo "linker request";
        echo "<br />";
        echo "add view";
	}
}
