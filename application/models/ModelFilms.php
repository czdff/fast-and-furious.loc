<?php

class ModelFilms extends Model {
    private $db;
    
    public function get_data() {
	$this->db = new mysqli(DB['localhost'], DB['root'], DB[''], DB['FAF']);
    }
    
    public function get_films(){
	$query = "SELECT * FROM films;";
	$result = $this->db->query($query);
	if($result){
	    $str = '';
	    while ($res = $result->fetch_assoc()) {
		$str .= "<p>".$res['name']."</p>";
	    }
	    return $str;
	}
    }
    
    public function get_film_by_id(){
	$query = "SELECT * FROM films ORDER BY id;";
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