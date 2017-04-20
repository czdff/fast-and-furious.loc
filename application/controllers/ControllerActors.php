<?php

class ControllerActors extends Controller {

    public function __construct() {
	parent::__construct();
	$this->model=new ModelActors();
    }
    public function actionIndex() {
	$actors=  $this->model->get_data();
	$this->view->generate('actors/index.php','layout.php',$actors);
    }

    public function actionView($id) {
	echo 'Actors #' . $id;
    }
}
