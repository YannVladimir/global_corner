<?php

class App
{
	protected $controller = "home";  
	protected $method = "index";
	protected $params = [];
	 
	public function __construct(){
		$this->parseUrl();
	}
	
	public function parseUrl()
	{
		if(isset($_GET['url'])){
			$url = explode("/", $_GET['url']);
			$this->controller = isset($url[0]) ? $url[0]: "home";
			$this->method = isset($url[1]) && !empty($url[1])? $url[1]:"index";
		}
	}

	public function get_controller()
	{
		return $this->controller;
	}
	public function get_method()
	{
		return $this->method;
	}
}

?>