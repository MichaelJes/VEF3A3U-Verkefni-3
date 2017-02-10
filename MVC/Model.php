<?php
 namespace Acme;
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 2/6/2017
 * Time: 1:43 PM
 */
class Model
{
    public $text;
    public $bokarheiti;
    public $utgafu;
    public $utgafuar;

    public function __construct() {
        $this->text = 'Hello world!';
    }
}