<?php

class Dash
{
	protected $controller = "admin";  
	protected $method = "dashboard";
	protected $params = [];
	
	public function __construct(){
		$this->parseUrl();
	}
	
	public function parseUrl()
	{
		if(isset($_GET['url'])){
			$url = explode("/", $_GET['url']);
			$this->controller = isset($url[0]) ? $url[0]: "admin";
			$this->method = isset($url[1])? $url[1]:"dashboard";
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