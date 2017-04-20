<?php

/**
 * Description of ModelMain
 *
 * @author web
 */
class ModelMain {
    private $db;
    public function __construct() {
	$this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }
     public function get_data() {
	$query = "SELECT * FROM Pages";
	$result = $this->db->query($query);
	if($result){	    
	    return $result->fetch_assoc();
	}
    }
}
