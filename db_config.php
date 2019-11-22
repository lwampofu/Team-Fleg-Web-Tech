<?php 
/**
 * @author Team Fleg
 * @version 1.1.0
 */
define('DB_SERVER', 'cs.ashesi.edu.gh');
define('DB_USERNAME', 'emmanuel_odonkor');
define('DB_PASSWORD', 'emmanuel_odonkor');
define('DB_DATABASE', 'webtech_fall2019_emmanuel_odonkor');


//creation of a class called DB_con
class DB_con {

	//Instance varaibles
	public $connection;


	/**
	*Instantiation of Attributes in the constructor
	*/
	function __construct(){
        $this->connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE);
		
        if ($this->connection->connect_error) die('Database error -> ' . $this->connection->connect_error);
        
		
	}
	 /**
	*@method ret_obj()
	*@return $this->connection
	*/
	function ret_obj(){
        return $this->connection;
        
	}

}

