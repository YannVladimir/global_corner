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
			self::$con= mysqli_connect("104.131.171.3","root","uIk3fDIL9q","eshopper");
		}
		public function runQuery($query)
		{
			$this->connect();
			return mysqli_query(self::$con,$query);
		}

	}

?>