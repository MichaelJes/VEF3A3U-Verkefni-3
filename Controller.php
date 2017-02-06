<?php

/**
 * Created by PhpStorm.
 * User: micha
 * Date: 2/6/2017
 * Time: 1:43 PM
 */
class Controller
{
    private $model;

    public function __construct(Model $model) {
        $this->model = $model;
    }
}