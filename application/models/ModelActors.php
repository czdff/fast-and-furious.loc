<?php

class ModelActors extends Model {
    private $db;
    public function __construct() {
	$this->db = new mysqli(DB['localhost'], DB['root'], DB[''], DB['FAF']);
    }
    
    public function get_data() {
	$query = "SELECT * FROM Actors";
	$result = $this->db->query($query);
	if($result){
	    $str = '';
	    while ($res = $result->fetch_assoc()) {
		$str .= "<p>".$res['name']."</p>";
	    }
	    return $str;
	}
    }
}