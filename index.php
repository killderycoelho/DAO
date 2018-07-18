<?php
/**
 * Created by PhpStorm.
 * User: killdery
 * Date: 17/07/2018
 * Time: 00:41
 */

require_once("config.php");

$root = new Usuario();
$root->loadById(1);

print $root;