<?php

abstract class Controller {
    /**
     *
     * @var Model model
     */
    public $model;
    public $view;

    function __construct() {
	$this->view = new View();
    }

    abstract function actionIndex();

}
