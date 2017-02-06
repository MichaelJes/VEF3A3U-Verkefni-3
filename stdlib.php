<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 1/23/2017
 * Time: 1:26 PM
 */
function __autoload($class) {
    include "$class.php";
}