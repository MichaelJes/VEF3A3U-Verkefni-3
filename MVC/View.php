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
    public function display(){
        $option = '';
        $model = new Model();
        $data = $model->getBooks();
        for ( $i = 0; $i < count($data); $i++)
        {
            $option .= '<option value="'. $i.'">'. $data[$i]['title']. '</option>';
        }
        echo '<form method="get" action=""><select name="Titlecombobox">' . $option . '</select> <input type="submit" /></form>';
    }
    public function pick($sign)
    {
        $model = new Model();
        $data = $model->getBooks();
        // getting all songs and amount of songs
        echo 'Title'.' '.$data[$sign]['title']."<br>";
        echo 'Author'.' '.$data[$sign]['author']."<br>";
        echo 'Pages'.' '.$data[$sign]['pages']."<br>";
    }

}