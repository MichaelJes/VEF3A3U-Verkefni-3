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
        $this->bækur[] = array("title" => "Sorg", "author" => "Helix", "pages" => "432");
        $this->bækur[] = array("title" => "Gullfax", "author" => "James", "pages" => "123");
        $this->bækur[] = array("title" => "Kyrð", "author" => "Sigmundur", "pages" => "321");
    }
    public function getBooks() {
        return $this->bækur;
    }

}