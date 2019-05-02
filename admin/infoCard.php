<?php
/**
 * Created by PhpStorm.
 * User: M-PC
 * Date: 2/18/2019
 * Time: 9:22 AM
 */

session_start();
if(isset($_SESSION['infoID']))
{
    include 'init.php';



    $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';

    if ($do == 'Manage'){
    ?>


    <h3 class="center">InfoCard</h3>

    <div class="container">

        <form method="post" action="infoCard.php?do=print">

            <select name="cc">

                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>

            </select>


            <select name="cc2">

                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>

            </select>

            <input type="submit" name="submit">

        </form>


    </div>

    <?php

    }

    elseif($do == 'print'){

      if (isset($_POST['submit'])){


          $c = $_POST['cc'].$_POST['cc2'];
          $stmt = $conn->prepare(" SELECT * FROM `student` WHERE class = '$c' ");
          $stmt->execute();
          $Result = $stmt->fetchAll();
          echo "<h4 class='center'>$c</h4>";

          foreach ($Result as $r){

               $pass = $r['password'];
               $infoid = $r['infoID'];
              ?>

              <h3><?php echo $pass; ?></h3>



             <?php


          }



      }


    }




    include $tpl . 'footer.php';
}


?>