<?php
namespace Acme;
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 2/6/2017
 * Time: 1:43 PM
 */
include_once 'Model.php';
include_once 'view.php';
class Controller
{
    private $model;
    public function __construct(Model $model) {
        $this->model = $model;
    }
    public function index($pick)
    {
        $view = new View();
        $view->pick($pick);
    }
}