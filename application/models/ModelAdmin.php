<?php

class ModelAdmin extends Model{
    
    public function get_data(){
	
    }
     
    public function save_films() {
	$db = new mysqli(DB_HOST, DB_USER,DB_PASS,DB_NAME );
	if (!$db->connect_errno) {
	    $q = "INSERT INTO films title, year, description, photo ";
	    $res = $db->query($q);
	    if ($res) {
		echo 'Ваши данные успешно добавлены';
	    }
	}
    }
    
    public function save_actors() {
	echo "save_actors";
    }
    
     
}
