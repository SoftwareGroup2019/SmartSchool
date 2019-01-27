<?php
/**
 * Created by PhpStorm.
 * User: M-PC
 * Date: 11/27/2018
 * Time: 12:42 PM
 */


$r = rand(pow(10,4),pow(10,8));
//Random Generator

$id = "12345678".$r;
$rid = substr(str_shuffle($id) , 0 , 8);
echo $rid;
//End of ID random generator

