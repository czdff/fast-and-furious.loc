<?php

class ControllerActors extends Controller {

    public function __construct() {
	parent::__construct();
	$this->model=new ModelActors();
    }
    public function actionIndex() {
	$actors=  $this->model->get_data();
	$this->view->generate('actors/index.php','public/layout.php',$actors, 'actors');
    }

    public function actionView($id) {
	$actor=  $this->model->get_actor_by_id($id);
	$this->view->generate('actors/view.php','public/layout.php',$actor);
    }
}
