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
?>

<div class="container">

  <div class="row">

    <div class="col s12 m4 l2">

    </div>

    <div class="col s12 m4 l8">
      <a href="#">PrintAll<i class="material-icons">printer</i></a>
    </div>

    <div class="col s12 m4 l2">

    </div>



  </div>




</div>


<?php

          foreach ($Result as $r){
               $id = $r['ID'];
               $pass = $r['password'];
               $infoid = $r['infoID'];
               $name = $r['name'];
               $class = $r['class'];
              ?>

                <div class="container">

                  <div class="row">

                    <div class="col s12 m4 l2">

                    </div>

                    <div class="col s12 m4 l8">

                      <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                          <span class="card-title">Name: <?php echo $name; ?></span>
                          <p>ID: <?php echo $infoid; ?></p>
                          <p>Password: <?php echo $pass; ?></p>
                          <p>class: <?php echo $class; ?></p>
                        </div>
                        <div class="card-action">
                          <a href="#">Print<i class="material-icons">printer</i></a>
                          <a href="profle.php?do=<?php echo $id; ?>">Profile<i class="material-icons">person</i></a>
                        </div>
                      </div>

                    </div>

                    <div class="col s12 m4 l2">

                    </div>



                  </div>




                </div>












             <?php


          }



      }


    }




    include $tpl . 'footer.php';
}


?>
