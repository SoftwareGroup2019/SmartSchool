<?php

include "conn.php";


// Routes

$tpl = 'include/template/';

$css = 'layout/css/';

$js = 'layout/js/';

$func = 'include/func/';


include $func . "Functions.php";
include $tpl . "header.php";



if(!isset($nonavbar))
{

include $tpl . "navbar.php";

}





?>