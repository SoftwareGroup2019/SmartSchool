<?php

include "conn.php";


// Routes

$tpl = 'include/template/';

$css = 'layout/css/';

$js = 'layout/js/';

$func = 'include/func/';


include $func . "Functions.php";
include $tpl . "header.php";
include "include/lib/class.query.php";
include "include/lib/class.insert.php";
include "include/lib/class.delete.php";
include "include/lib/class.update.php";



if(!isset($nonavbar))
{

include $tpl . "navbar.php";

}





?>