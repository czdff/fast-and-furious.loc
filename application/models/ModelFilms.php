<?php

class ModelFilms extends Model {

    private $db;

    public function __construct() {
	$this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    public function get_data() {
	$query = "SELECT * FROM films;";
	$result = $this->db->query($query);
	if ($result) {
	    $str = '';
	    while ($res = $result->fetch_assoc()) {
		$str .= "<p>" . $res['name'] . "</p>";
	    }
	    return $str;
	}
    }


    public function get_film_by_id() {
	$query = "SELECT * FROM films ORDER BY id;";
	$result = $this->db->query($query);
	if ($result) {
	    $str = '';
	    while ($res = $result->fetch_assoc()) {
		$str .= "<p>" . $res['name'] . "</p>";
	    }
	    return $str;
	}
    }

}
