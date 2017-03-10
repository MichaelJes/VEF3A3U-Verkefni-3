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

    public function display()
    {

        /*
        $option = '';
        $model = new Model();
        $data = $model->getBooks();
        for ( $i = 0; $i < count($data); $i++)
        {
            $option .= '<option value="'. $i.'">'. $data[$i]['title']. '</option>';
        }

        echo '<form method="get" action=""><select name="Titlecombobox">' . $option . '</select> <input type="submit" /></form>';
        */
        $jsonData = '[
				{"title":"Music","url":"https://i.ytimg.com/vi/NDg2kSwVXU0/maxresdefault.jpg"},
				{"title":"Winter","url":"http://netdna.webdesignerdepot.com/uploads/2013/11/picjumbo.com_DSC_3274.jpg"},
				{"title":"Piano","url":"https://i.ytimg.com/vi/5yRIt5yS36s/maxresdefault.jpg"},
				]';
        $json_array = json_decode($jsonData, true);
        //array_push($json_array[], array('title' => 'Mountain', "url" => "http://kingofwallpapers.com/1920x1080/1920x1080-008.jpg"));
        print_r($json_array);
        $jsonData = json_encode($json_array);
        //file_put_contents($jsonDatan, $jsonData);
    }
    /*
    public function pick($sign)
    {
        $model = new Model();
        $data = $model->getBooks();
        // getting all songs and amount of songs
        echo 'Title'.' '.$data[$sign]['title']."<br>";
        echo 'Author'.' '.$data[$sign]['author']."<br>";
        echo 'Pages'.' '.$data[$sign]['pages']."<br>";
    }
    */

}