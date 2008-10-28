<?php

/**
 * Routes map a routing path to a controller class / method.
 * 
 * @author Kris Jordan <kris@krisjordan.com>
 * @copyright Copyright (c) 2008, Kris Jordan 
 * @package recess.routing
 */
class Route {
	
	public $methods = array();
	public $path = '';
	public $args = array();
	public $controller;
	public $function;
	
	public function __construct($controller, $function, $methods, $path) {
		$this->function = $function;
		if(is_array($methods)) { $this->methods = $methods; }
		else { $this->methods[] = $methods; }
		$this->path = $path;
		$this->controller = $controller;
	}
	
}

?>