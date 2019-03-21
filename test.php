<?php
/**
 * Created by PhpStorm.
 * User: k.zikanov
 * Date: 2019-03-21
 * Time: 12:43
 */
require_once 'vendor/autoload.php';

    $geo = new \jisoft\sypexgeo\Sypexgeo();

    // get by remote IP
    $geo->get('185.244.23.122');                // also returned geo data as array
    echo $geo->ip,'<br>';
    echo $geo->ipAsLong,'<br>';
    var_dump($geo->country); echo '<br>';
    var_dump($geo->region);  echo '<br>';
    var_dump($geo->city);    echo '<br>';

?>
