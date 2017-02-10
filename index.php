<?php
require 'vendor/autoload.php';
$model = new Acme\Model();
//It is important that the controller and the view share the model
$controller = new Acme\Controller($model);
$view = new Acme\View($model);
if (isset($_GET['action']))
    // call the relevant controller action (specified by $_GET['action']) based on the user interaction.
    // Samt varhugaverð útfærsla, hér er verið að taka við hrágögnu án þessa að checka á input
    $controller->{$_GET['action']}();   // sama og $controller->textclicked þ.e. method virkjuð og model uppfært,

// birting, fer eftir user action að ofan
echo $view->output();

?>