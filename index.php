<?php
require 'vendor/autoload.php';
$model = new Acme\Model();
$controller = new Acme\Controller($model);
$view = new Acme\View($model);
//if (isset($_GET['Titlecombobox']))
    //$controller->index($_GET['Titlecombobox']);
$view->display();
?>