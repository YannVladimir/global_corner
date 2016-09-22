<?php 
	/**
	* 
	*/
	require_once 'configuration.php';
	class Root
	{
		static private $con;
		
		function __construct()
		{
		}

		function connect()
		{
			self::$con= mysqli_connect("localhost","root","","eshopper");
		}
		public function runQuery($query)
		{
			$this->connect();
			return mysqli_query(self::$con,$query);
		}

	}

?>