<?php

class ControllerFilms extends Controller {
    
    public function __construct() {
	parent::__construct();
	$this->model=new ModelFilms();
    }

    public function actionIndex() {
	$data=  $this->model->get_data();
	$this->view->generate('films/index.php','layout.php',$data,'all films');
    }

    public function actionView($id) {
	$data=  $this->model->get_film_by_id($id);
	$this->view->generate('films/view.php','layout.php',$data, $data['title']);
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
