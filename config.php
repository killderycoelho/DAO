<?php
/**
 * Created by PhpStorm.
 * User: killdery
 * Date: 17/07/2018
 * Time: 00:39
 */

spl_autoload_register(
  function ($className){
    $filename = $className.".php";
    if(file_exists($filename)){
      require_once($filename);
    }
  }
);