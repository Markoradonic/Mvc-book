<?php

class Model {

    protected $db;

	public function __construct()
	{
		global $config;
                
                $this->db = new PDO('mysql:host='.$config["db_host"].';dbname='.$config["db_name"].';charset=utf8mb4', ''.$config["db_username"].'', ''.$config["db_password"].'');   
            
	}

	public function escapeString($string)
	{
		return mysql_real_escape_string($string);
	}

	public function escapeArray($array)
	{
	    array_walk_recursive($array, create_function('&$v', '$v = mysql_real_escape_string($v);'));
		return $array;
	}
	
	public function to_bool($val)
	{
	    return !!$val;
	}
	
	public function to_date($val)
	{
	    return date('Y-m-d', $val);
	}
	
	public function to_time($val)
	{
	    return date('H:i:s', $val);
	}
	
	public function to_datetime($val)
	{
	    return date('Y-m-d H:i:s', $val);
	}
	
 
    
}
?>
