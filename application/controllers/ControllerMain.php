<?php

class ControllerMain extends Controller {
    public function actionIndex() {
        $this->model=new ModelMain();
        $data=  $this->model->get_data();
	$this->view->generate('index.php','layout.php',$data);
    }
}