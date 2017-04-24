<?php

class ControllerMain extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new ModelMain();
    }

    public function actionIndex()
    {
        $data = $this->model->get_data();
        $this->view->generate('main.php', 'layout.php', $data);
    }
}