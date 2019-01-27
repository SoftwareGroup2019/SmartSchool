<?php
/**
 * Created by PhpStorm.
 * User: M-PC
 * Date: 12/1/2018
 * Time: 2:14 PM
 */

$r = rand(pow(10,4),pow(10,8));
//Random Generator

$pass = "1234567890".$r;
$rpass = substr(str_shuffle($pass) , 0 , 10);
//End of Password Generatore
echo $rpass;
