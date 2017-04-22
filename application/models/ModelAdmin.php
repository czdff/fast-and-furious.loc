<?php

class ModelAdmin extends Model{
    
    public function get_data(){
	
    }
    
    private $db;

    public function __construct() {
	$this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }
     
    public function save_films($title, $year, $description, $photo) {
	$db = new mysqli(DB_HOST, DB_USER,DB_PASS,DB_NAME );
	if (!$db->connect_errno) {
	    $q = "INSERT INTO films(title, year, description, photo) VALUES"
                    . "('$title','$year','$description', '$photo');";
	    $res = $db->query($q);
	    if ($res) {
		echo 'Ваши данные успешно добавлены  ';
                return $res;
	    }
	}
    }
    
    public function save_actors($name, $lastname, $birthdate, $biography, $photo) {
	$db = new mysqli(DB_HOST, DB_USER,DB_PASS,DB_NAME );
	if (!$db->connect_errno) {
	    $q = "INSERT INTO Actors(name, lastname, birthdate, biography, photo) VALUES"
                    . "('$name','$lastname','$birthdate','$biography', '$photo');";
	    $res = $db->query($q);
	    if ($res) {
		echo 'Ваши данные успешно добавлены';
                return $res;
	    }
	}
    }
    
     
}
