<?php

/**
*
*/

class Template {
    private $args;
	private $files;

	public function __get($name){
		return $this->args[$name];
	}

	public function __construct($file, $args = array()) {
		$this->files = $file;
		$this->args = $args;
	}

	public function render()
	{
		include $this->files;
	}
}
