<?php
require 'vendor/autoload.php';
$model = new Acme\Model();
//It is important that the controller and the view share the model
$controller = new Acme\Controller($model);
$view = new Acme\View($model);
echo $view->output();

?>