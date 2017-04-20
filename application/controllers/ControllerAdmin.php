<?php

class ControllerAdmin extends Controller {
        
    public function actionIndex() {
	echo "admin";
    }
    
    public function actionFilms() {
	 echo "films";
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
	 echo "Edit actors";
    }
    
    public function actionDeleteActors() {
	 echo "Edit actors";
    }
    
}