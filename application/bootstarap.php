<?php

require_once 'core/config/db.php';
require_once 'core/Model.php';
require_once 'core/View.php';
require_once 'core/Controller.php';
require_once 'core/Route.php';
// Load config
require_once 'core/config/db.php';
require_once 'core/config/constants.php';

spl_autoload_register(function($className) {
   $pathModel = 'application/models/';
   $class = $pathModel . $className . '.php';
   if (file_exists($class)) {
       include_once $class;
   }
});

Route::Start();