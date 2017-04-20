<?php

class ModelFilms extends Model {

    private $db;

    public function __construct() {
	$this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    public function get_data() {
	$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if (!$db->connect_error) {
	    $q = "SELECT * FROM films;";
	    $res = $db->query($q);
	    if ($res) {
		$films = array();
		while ($film = $res->fetch_assoc()) {
		    $films[] = $film;
		}
		return $films;
	    }
	}
    }

    public function get_film_by_id() {
	$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if (!$db->connect_error) {
	    $q = "SELECT * FROM films WHERE id LIKE '';";
	    $res = $db->query($q);
	    if ($res) {
		$films = array();
		while ($film = $res->fetch_assoc()) {
		    $films[] = $film;
		}
		return $film;
	    }
	}
    }

}
