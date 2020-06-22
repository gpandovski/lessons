<?php

/**
 * A design pattern provides a general reusable solution for the common problems occurs in software design. 
 * The patterns typically show relationships and interactions between classes or objects.
 */

// General singleton class.
class Singleton {
    // Hold the class instance.
    private static $instance = null;
    
    // The constructor is private
    // to prevent initiation with outer code.
    private function __construct()
    {
      // The expensive process (e.g.,db connection) goes here.
    }
   
    // The object is created from within the class itself
    // only if the class has no instance.
    public static function getInstance()
    {
      if (self::$instance == null)
      {
        self::$instance = new Singleton();
      }
   
      return self::$instance;
    }
  }

  /*
* Mysql database class - only one connection alowed
*/
class Database {
	private $_connection;
	private static $_instance; //The single instance
	private $_host = "HOSTt";
	private $_username = "USERNAME";
	private $_password = "PASSWORd";
	private $_database = "DATABASE";

	/*
	Get an instance of the Database
	@return Instance
	*/
	public static function getInstance() {
		if(!self::$_instance) { // If no instance then make one
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	// Constructor
	private function __construct() {
		$this->_connection = new mysqli($this->_host, $this->_username, 
			$this->_password, $this->_database);
	}

	// Magic method clone is empty to prevent duplication of connection
	private function __clone() { }

	// Get mysqli connection
	public function getConnection() {
		return $this->_connection;
	}
}


$db = Database::getInstance();

$mysqli = $db->getConnection(); 
$sql_query = "SELECT foo FROM .....";
$result = $mysqli->query($sql_query);

$db1 = Database::getInstance(); // new Database();