<?php
/**
 * Created by PhpStorm.
 * User: M-ENG
 * Date: 4/16/2019
 * Time: 12:51 AM
 */


session_start();
if (isset($_SESSION['infoID'])){

    $pagetitle = " ";
    include "init.php";


    $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';






    include $tpl . "footer.php";

}

else{

    header("Location:index.php");
    exit();

}

