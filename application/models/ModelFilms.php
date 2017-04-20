<?php

class ModelFilms extends Model {
    public function get_data() {
	
    }
    
    public function get_films(){
	
	$query = "SELECT * FROM photos";
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
	
    }
}