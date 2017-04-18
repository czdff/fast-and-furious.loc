<?php

class ControllerFilms extends Controller {

    public function actionIndex() {
	echo "films";
    }

    public function actionView($id) {
	echo 'Film #' . $id;
    }

    public function actionDelete() {
	$id = $_GET['id'];
	echo "Del " . $id;
    }

    public function actionEdit() {
	$id = $_GET['id'];
	echo "Edit " . $id;
    }

}
