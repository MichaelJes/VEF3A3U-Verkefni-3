<?php
namespace Acme;
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 2/6/2017
 * Time: 1:43 PM
 */
class Controller
{
    private $model;

    // tekur inn model object
    public function __construct(Model $model) {
        $this->model = $model;
    }

    // uppfærir model
    // ath Class and method names are NOT case sensitive in PHP (textclicked). Variables are case sensitive
    public function textClicked() {
        $this->model->text = 'Text Updated';
    }
}