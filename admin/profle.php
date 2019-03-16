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

$Result = $Request->SELECT("*")->FROM("user")->WHERE("ID = ".$id)->result();
 
        
if(isset($_POST["UP"]))
{
 $Up = new u();
 
 $result=$Up -> UPDATE("user") ->SET("infoID = ? ") -> WHERE("ID=$id") -> result("9999");


}



    ?>


    <div class="container">

        <div class="row">

            <div class="col s12 m4 l2"></div>

            <div class="z-depth-2 center col s12 m4 l8" id="log">

                <img class="circle responsive-img" src="layout/img/me.jpg" height="70px" width="70px">
                <h5 class="center">Mohamad Kamaran Hiader</h5>
                <h6 class="center">----------</h6>
                <div class="row">
                    <h6 class="left" style="padding-left: 30px;">infoID:<?php foreach ($Result as $key => $value) 
echo $value["infoID"]; ?></h6>
                    <h6 class="right" style="padding-right: 30px; ">Password:<?php foreach ($Result as $key => $value)  echo $value["password"]; ?></h6>
                </div>
                <div class="row">
                    <h6 class="left" style="padding-left: 30px;">Class:7</h6>
                    <h6 class="right" style="padding-right: 30px; ">Section:B</h6>
                </div>
                <div class="row">
                    <h6 class="center">Phone Number:<?php foreach ($Result as $key => $value)  echo $value["Pn"] ;?></h6>
                </div>
                <div class="row">
                 <a href="profle.php?id=<?php echo $Id  ?> ">   <button class="btn-small" name="update">  <i class="material-icons">edit</i></button></a>
                    <button class="btn-small"><i class="material-icons">delete</i></button>
                    <button class="btn-small waves-effect waves-light pulse"><i class="material-icons">notifications</i> </button>
                </div>






            </div>

            <div class="col s12 m4 l2"></div>
        </div>
    </div>


<?php  ?>

 <div class="row">

                <div class="col s12 m4 l2"></div>

                <div class="z-depth-2 col s12 m4 l8" id="log">

                    <h4 class="center">Student Info</h4>


                        <form method="POST" action="profle.php?do=<?php echo $id ?>"  class="center col s12" id="frm">

                            <div class="row">

                                <div class="input-field col s6">
          <input placeholder="First Name" id="first_name" type="text" class="validate" value="<?php foreach ($Result as $key => $value) 
echo $value['fn'];?> " name='FN'>
                                </div>
                                <div class="input-field col s6">
                                    <input placeholder="Last Name" id="last_name" type="text" value="<?php foreach ($Result as $key => $value) 
echo $value['ln'];?>" class="validate" name="LN">
                                </div>

                            </div>

                            <div class="row">

                                <div class="input-field col s12">
                                    <input placeholder="Phone Number" type="tel" value="<?php foreach ($Result as $key => $value) 
echo $value['Pn'];?>" class="validate" name="PN">
                                </div>
                            </div>

                            <div class="row">

                                <div class="input-field col s6">
                                    <input placeholder="ID" id="sid" value="<?php foreach ($Result as $key => $value) 
echo $value['infoID'];?>" type="text" class="validate" name="id">
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="Password" value="<?php foreach ($Result as $key => $value) 
echo $value['password'];?>" id="spass" type="text"  class="validate" name="pass">
                                </div>

                            </div>

                            <div class="row">

                                <div class="input-field col s6">
                                    <select>
                                        <option value="" disabled selected>Choose Class</option>
                                        <option value="1">7</option>
                                        <option value="2">8</option>
                                        <option value="3">9</option>
                                        <option value="3">10</option>
                                        <option value="3">11</option>
                                        <option value="3">12</option>
                                    </select>
                                    <label></label>
                                </div>

                                <div class="input-field col s6">
                                    <select>
                                        <option value="" disabled selected>Choose Section</option>
                                        <option value="1">A</option>
                                        <option value="2">B</option>
                                        <option value="3">C</option>
                                    </select>

                                </div>

                            </div>

                            <br>

                          <input  name="UP" type="submit" id="bt2" class="btn-small" value="Update">

                        </form>


                </div>
                <div class="col s12 m4 l2"></div>
            </div>




    <?php


    include $tpl . "footer.php";

    }
    
    else
        {

            header("Location:index.php");

        }




?>

