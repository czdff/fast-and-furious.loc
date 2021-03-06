<?php

class Route {

    public static function Start() {
	// контроллер и действие по умолчанию
	$controller_name = 'Main';
	$action_name = 'index';
	$tmp=explode('?',$_SERVER['REQUEST_URI']);
	$routes = explode('/', $tmp[0]);

	// получаем имя контроллера
	if (!empty($routes[1])) {
	    $controller_name = ucfirst($routes[1]);
	}

	// получаем имя экшена
	if (!empty($routes[2])) {
	    $action_name = $routes[2];
	}
	
	$id = null;
	
	if ((int) $action_name > 0) {
	    $id = (int) $action_name;
	    $action_name = 'View';
	}
	// добавляем префиксы
	$model_name = 'Model' . $controller_name;
	$controller_name = 'Controller' . $controller_name;
	$action_name = 'action' . $action_name;

	// подцепляем файл с классом модели (файла модели может и не быть)

	$model_file = $model_name . '.php';
	$model_path = "application/models/" . $model_file;
	if (file_exists($model_path)) {
	    include_once "application/models/" . $model_file;
	}

	// подцепляем файл с классом контроллера
	$controller_file = $controller_name . '.php';
	$controller_path = "application/controllers/" . $controller_file;
	if (file_exists($controller_path)) {
	    include_once "application/controllers/" . $controller_file;
	} else {
	    /*
	      правильно было бы кинуть здесь исключение,
	      но для упрощения сразу сделаем редирект на страницу 404
	     */
	    self::ErrorPage404();
	}

	// создаем контроллер
	$controller = new $controller_name;
	$action = $action_name;
	if (method_exists($controller, $action)) {
	    // вызываем действие контроллера
	    if ($id) {
		$controller->$action($id);
	    } else {
		$controller->$action();
	    }
	} else {
	    // здесь также разумнее было бы кинуть исключение
	    self::ErrorPage404();
	}
    }
    
    public static function ErrorPage404()
    {
	$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
    }
}
