<?php
include 'stdlib.php';// includar Stdlib sem heldur um hluti eins og footer og header
$model = new Model();
//It is important that the controller and the view share the model
$controller = new Controller($model);
$view = new View($model);
echo $view->output();

?>