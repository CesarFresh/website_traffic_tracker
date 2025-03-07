<?php

class Model {
    protected $conn;
    
    /* 
        Start the MySQL connection
    */
    public function __construct() {
        $this->conn = new mysqli(HOST, USER, PASSWORD, DB);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }
}
