<?php
namespace Acme;
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 2/6/2017
 * Time: 1:43 PM
 */
class View
{
    private $model;
    public function __construct(Model $model) {
        $this->model = $model;
    }
    public function display(){
        $model = new Model();
        $data = $model->getBooks();
        // getting all songs and amount of songs
        return print_r($data);
    }

}