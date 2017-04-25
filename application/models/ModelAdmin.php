<?php

class ModelAdmin extends Model {

    private $db;

    function __construct() {
	$this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    public function get_data() {
	
    }

    public function updateMainPage($id, $title, $html) {
	$query = "UPDATE Pages SET title='" . $title . "', html='" . $html . "' WHERE id=" . (int) $id;
	if ($this->db->query($query)) {
	    return true;
	}
	return false;
    }

    public function loadImage() {
	$images = array_slice(scandir(IMAGE_PATH), 2);
	$data = array_map(function ($item) {
	    return DIRECTORY_SEPARATOR . IMAGE_PATH . DIRECTORY_SEPARATOR . $item;
	}, $images);
	return $data;
    }

    public function validate_film($title, $year, $description, $photo) {
	$message = [];

	if (!$title) {
	    $message[] = ['type' => 'error', 'text' => 'Введите заголовок фильма'];
	}

	if (!$year) {
	    $message[] = ['type' => 'error', 'text' => 'Введите год создания фильма'];
	}

	if (!$description) {
	    $message[] = ['type' => 'error', 'text' => 'Введите описание'];
	}

	if (!$photo) {
	    $message[] = ['type' => 'error', 'text' => 'Фото фильма не выбрано'];
	}

	return $message;
    }

    public function save_photo($photo) {
	if (move_uploaded_file($photo['tmp_name'], IMAGE_PATH . DIRECTORY_SEPARATOR . $photo['name'])) {
	    return true;
	} else {
	    return false;
	}
    }

    public function update_film($id, $title, $year, $description, $photo) {
	$photo = addslashes($photo);
	$query = "UPDATE films SET title='" . $title . "', year=" . $year . ", description='" . $description . "', photo='" . $photo . "' WHERE id=" . (int) $id;
	
	if ($this->db->query($query)) {
	    return true;
	}
	return false;
    }

    public function save_films($title, $year, $description, $photo) {

	if (!$this->db->connect_errno) {
	    $q = "INSERT INTO films(title, year, description, photo) VALUES"
		    . "('$title',$year,'$description', '$photo');";
	    if ($this->db->query($q)) {
		return $this->db->insert_id;
	    } else {
		return false;
	    }
	}
    }

    public function save_actors($name, $lastname, $birthdate, $biography, $photo) {
	$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
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

    public function update_actors($id, $name, $lastname, $birthdate, $biography, $photo) {
	$photo = addslashes($photo);
	$query = "UPDATE Actors SET name='" . $name . "', lastname='" . $lastname . "', birthdate='" . $birthdate . "', biography='" . $biography . "', photo='" . $photo . "' WHERE id=" . (int) $id;
	if ($this->db->query($query)) {
	    return true;
	}
	return false;
    }

    
}
