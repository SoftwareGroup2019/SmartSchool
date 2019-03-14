<?php
/**
 * Created by PhpStorm.
 * User: M-PC
 * Date: 3/8/2019
 * Time: 1:05 AM
 */

session_start();
if (isset($_SESSION['infoID']))
{
    include "init.php";

    $id = $_GET['do'];

    $Request= new query();
    $Result = $Request->SELECT("*")->FROM("user")->WHERE("ID = $id")->result();

    foreach ($Result as $row)
    {
        $name = $row['fn'] . " " . $row['ln'];
        $id = $row['infoID'];
        $pass = $row['password'];
        $pn = $row['Pn'];

    }

    ?>


    <div class="container">

        <div class="row">

            <div class="col s12 m4 l2"></div>

            <div class="z-depth-2 center col s12 m4 l8" id="log">

                <img class="circle responsive-img" src="layout/img/me.jpg" height="70px" width="70px">
                <h5 class="center"><?php echo $name; ?></h5>
                <h6 class="center">----------</h6>
                <div class="row">
                    <h6 class="left" style="padding-left: 30px;">infoID:<?php echo $id; ?></h6>
                    <h6 class="right" style="padding-right: 30px; ">Password:<?php echo $pass;?></h6>
                </div>
                <div class="row">
                    <h6 class="left" style="padding-left: 30px;">Class:7</h6>
                    <h6 class="right" style="padding-right: 30px; ">Section:B</h6>
                </div>
                <div class="row">
                    <h6 class="center">Phone Number:<?php echo $pn;?></h6>
                </div>
                <div class="row">
                    <button class="btn-small"><i class="material-icons">edit</i></button>
                    <button class="btn-small"><i class="material-icons">delete</i></button>
                    <button class="btn-small waves-effect waves-light pulse"><i class="material-icons">notifications</i> </button>
                </div>






            </div>

            <div class="col s12 m4 l2"></div>
        </div>
    </div>






    <?php


    include $tpl . "footer.php";

    }

    else
        {

            header("Location:index.php");

        }




?>

