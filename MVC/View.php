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

    public function output() {
        // ef smellt þá reload síðu og textclicked value sett í $_GET, objets re-initialised
        return '<select><option value="volvo">' . $this->model->text .'</option></select>';
    }

}