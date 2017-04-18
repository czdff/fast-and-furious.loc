<?php

class ControllerFilms extends Controller {

    public function actionIndex() {
	$data=  $this->model->get_data();
	$this->view->generate('index.php','layout.php',$data);
    }

    public function actionView($id) {
	$data=  $this->model->get_data();
	$this->view->generate('view.php','layout.php',$data);
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
