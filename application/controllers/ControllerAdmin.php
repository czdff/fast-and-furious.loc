<?php

class ControllerAdmin extends Controller {
    
    public function __construct() {
	parent::__construct();
	$this->model=new ModelAdmin();
    }
        
    public function actionIndex() {
	//$this->model->save_films('test', 2018, 'descr', '/img/test.jpeg');
        //$this->model->save_actors('test','testov','1975-09-02','biogr','/img/test.jpeg');
        $this->model->save_films('$title', '$year', '$description', '$photo');
    }
	
    
    public function actionFilms() {
        $data=  $this->model->get_data();
	$this->view->generate('films/index.php','layout.php',$data,'all films');
        }
    
    public function actionEditFilms() {
	$this->view->generate('films/edit.php', 'layout.php', null, 'hhhhh');
    }
    
    public function actionDeleteFilms() {
	 echo "Edit films";
    }
    
    public function actionActors() {
	 echo "actors";
    }
    
    public function actionEditActors() {
	 $this->view->generate('actors/edit.php', 'layout.php', null, 'hhhhh');
    }
    
    public function actionDeleteActors() {
	 echo "Edit actors";
    }
    
}