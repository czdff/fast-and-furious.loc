<?php

class ControllerActors extends Controller {

    public function actionIndex() {
	echo "actors";
    }

    public function actionView($id) {
	echo 'Actors #' . $id;
    }
}
