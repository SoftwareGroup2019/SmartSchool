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



/////////////////////////////////
/////// Template/////////////////
///////////////////////////////
<div class="row">
    <div class="col s12">
        <?php
        $Request= new query();
        $Result = $Request->SELECT("*")->FROM("student")->result();
        ?>
        <table class="responsive-table highlight">
            <thead>
            <tr>
                <th>Student Name</th>

                <th></th>
            </tr>
            </thead>

            <tbody>
           <?php

           foreach ($Result as $row)
           {
               ?>

               <tr id="delete<?php echo $row['ID'];?>">

               <td> <?php echo $row['name']; ?>  </td>

                   <td> </td>

               <td>
                <a href='profle.php?do=<?php echo $row['ID'];?>' class='btn btn-small blue darken-1 tooltipped' data-position="right" data-tooltip="Profile">
                      <i class="material-icons">person</i>
                    </a>
                   </td>

                <td> <a href='profle.php' class='btn btn-small tooltipped' data-position="right" data-tooltip="Mark">
                      <i class="material-icons">assignment</i>
                    </a>
                   </td>

                <td> <button onclick='deletbtn(<?php echo $row['ID'];?>)' class='btn btn-small  red darken-1 tooltipped' data-position="right" data-tooltip="Delete">
                      <i class="material-icons">delete</i>
                    </button>
                    </td>



               </tr>

               <?php


           }

           ?>
            </tbody>
        </table>
    </div>
</div>
