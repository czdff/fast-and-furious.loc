<?php

class Controller404 extends Controller {
    public function actionIndex() {
	var_dump('jiuhnhui');
	$this->view->generate('404.php', 'layout.php', null, 'hhhhh');
    }
    
    
}