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
    private $data=array();
    public function assign($key,$value){
        $this->data[$key]=$value;
    }
    public function display($htmlPage){
        extract($this->data);
        include_once $htmlPage;

    }

}