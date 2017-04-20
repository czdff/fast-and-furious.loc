<?php

class ModelActors extends Model {

    public function get_data() {	
	$db = new mysqli(DB_HOST, DB_USER,DB_PASS,DB_NAME );
	if (!$db->connect_errno) {
	    $q = "SELECT id,name,lastname FROM Actors ";
	    $res = $db->query($q);
	    if ($res) {
		$actors = array();
		while ($actor = $res->fetch_assoc()) {
		    $actors[] = $actor;
		}
		return $actors;
	    }
	}
    }

}
