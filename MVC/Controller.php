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

    // tekur inn model object
    public function __construct(Model $model) {
        $this->model = $model;
    }
    public function index()
    {
        // Instance new Model (Song)
        $model = new Model();
        // getting all songs and amount of songs
        return $model->getBooks();

    }
}