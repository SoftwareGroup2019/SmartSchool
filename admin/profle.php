<?php

/**
 * Created by PhpStorm.
 * User: M-PC
 * Date: 3/8/2019
 * Time: 1:05 AM
 */

$Result =0 ;
session_start();
if (isset($_SESSION['infoID']))
{

    include "init.php";




$id = $_GET['do'];

$Request= new query();

$Result = $Request->SELECT("*")->FROM("student")->WHERE("ID = ".$id)->result();

 foreach ($Result as $value) {
   // code...
   $name = $value['name'];
   $infoid = $value['infoID'];
   $pass = $value['password'];
   $class = $value['class'];
   $pn = $value['Pn'];

 }





    ?>


    <div class="container">

        <div class="row" id="pro">

            <div class="col s12 m4 l2"></div>

            <div class="z-depth-2 center col s12 m4 l8" id="log">


                <img class="circle responsive-img" src="layout/img/me.jpg" height="70px" width="70px">
                <h5 class="center"><?php echo $name;?></h5>
                <h6 class="center">----------</h6>
                <div class="row">
                    <h6 class="left" style="padding-left: 30px;">infoID:<?php echo $infoid; ?></h6>
                    <h6 class="right" style="padding-right: 30px; ">Password:<?php echo $pass; ?></h6>
                </div>
                <div class="row">
                    <h6 class="left" style="padding-left: 30px;">Class:<?php echo $class;?></h6>

                </div>
                <div class="row">
                    <h6 class="center">Phone Number:<?php echo $pn;?></h6>
                </div>
                <div class="row">
                    <button class="btn btn-small" name="update" id="show">  <i class="material-icons">edit</i></button>
                    <button class="btn-small"><i class="material-icons">delete</i></button>
                    <button class="btn-small waves-effect waves-light pulse"><i class="material-icons">notifications</i> </button>
                    <a href="infoCard.php">Back</a>
                </div>






            </div>

            <div class="col s12 m4 l2"></div>
        </div>


    </div>




 <div class="row" id="hid">

                <div class="col s12 m4 l2"></div>

                <div class="z-depth-2 col s12 m4 l8" id="log">

                    <h4 class="center">Edit Students</h4>


                        <form method="post" action="profle.php?do=<?php echo $id; ?>"  class="center col s12" id="frm">

                          <div class="row">

                              <div class="input-field col s12">
                                  <input placeholder="Name" id="first_name" type="text" class="validate" name="name" value="<?php echo $name; ?>">
                              </div>

                          </div>

                            <div class="row">

                                <div class="input-field col s12">
                                    <input placeholder="Phone Number" type="tel" value="<?php echo $pn; ?>" class="validate" name="PN">
                                </div>
                            </div>

                            <div class="row">

                                <div class="input-field col s6">
                                    <input placeholder="ID" id="sid" value="<?php echo $infoid;?>" type="text" class="validate" name="id">
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="Password" value="<?php echo $pass;?>" id="spass" type="text"  class="validate" name="pass">
                                </div>

                            </div>

                            <div class="row">

                                <div class="input-field col s12">
                                    <input placeholder="Class" type="text" class="validate" name="c" value="<?php echo $class; ?>">
                                </div>


                            </div>



                          <input  name="UP" type="submit" id="be" class="btn-small" value="Update">

                        </form>


                </div>
                <div class="col s12 m4 l2"></div>
            </div>




    <?php

 if (isset($_POST['UP'])) {
   // code...
   $id = $_GET['do'];
 $name = $_POST['name'];
  $infoid = $_POST['id'];
 $pass = $_POST['pass'];
  $class = $_POST['c'];
echo  $pn = $_POST['PN'];

    $Up = new upset();
   // $result=$Up->UPDATE("student")->SET("name=?")->WHERE("ID = " . $id)->result($name);
$result=$Up->UPDATE("student")->SET("name=?")->WHERE("ID = ?")->result($name,$id);
   echo "TRue";


 }



    include $tpl . "footer.php";

    }

    else
        {

            header("Location:index.php");

        }




?>
