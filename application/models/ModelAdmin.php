<?php

class ModelAdmin extends Model
{

    private $db;

    function __construct()
    {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    public function get_data()
    {
    }

    public function validate_film($title, $year, $description, $photo)
    {
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

        if (!$photo['name']) {
            $message[] = ['type' => 'error', 'text' => 'Фото фильма не выбрано'];
        }

        return $message;
    }

    public function save_photo($photo)
    {
        if (move_uploaded_file($photo['tmp_name'], IMAGE_PATH . DIRECTORY_SEPARATOR . $photo['name'])) {
            return true;
        } else {
            return false;
        }
    }

    public function save_films($title, $year, $description, $photo)
    {

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
