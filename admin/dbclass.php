<?php
    

class dbconn 
{
	
	public $connect;
	private $localhost="localhost";
	private	$username = "gauurja_gauurja";
	private $password = "Gauurja@1239";
	private $dbname = "gauurja_gauurja";
	/*private $localhost="localhost";
	private	$username = "root";
	private $password = "";
	private $dbname = "vishwamangal";*/
	function __construct()
	{
		 $this->db_connection();
		 
	}
	public function db_connection()
	{
		$this->connect=mysqli_connect($this->localhost,$this->username,$this->password,$this->dbname);
		mysqli_query($this->connect,"SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

	}
}

 ?>