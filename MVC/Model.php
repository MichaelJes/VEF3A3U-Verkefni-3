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
    public $bækur;
    public function __construct() {
        $this->bækur[] = array("title" => "", "author" => "", "pages" => "");
    }
    public function getBooks() {
        return $this->bækur;
    }
    public function searchbyName($bokarHeiti) {
        $key = array_search($bokarHeiti, array_column($this->bækur, 'title'));
        return $this->bækur[$key];
    }
}