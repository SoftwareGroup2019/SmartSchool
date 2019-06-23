<?php


session_start();

if(isset($_SESSION['infoID']))
{
    include 'init.php';


    $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';

    if($do == 'Manage'){

       ?>


        <div class="container">
            <div class="row">
                <div class="col s2">
                    <a href="dashboard.php"><i class="material-icons" id="back">keyboard_backspace</i></a>
                </div>
                <div class="col s10">
                    <h4 class="center" style="color: #263238;">زیادکردنی قوتابی</h4>
                </div>
            </div>
            <div class="row">
                 <div class="col s12">
                     <a class="btn btn-small blue darken-1 waves-effect waves-light" href="User.php?do=add">
                         قوتابی زیاد بکە
                         <i class="material-icons right">add</i>
                     </a>
                     <a class="btn btn-small waves-effect waves-light" href="Classes/p.php">
                           فایلی ئەکسڵ
                         <i class="material-icons right">add</i>
                     </a>

                 </div>

            </div>



            <div class="row">
                <div class="col s12">
                    <nav>
                        <div class="nav-wrapper">
                            <form>
                                <div class="input-field">
                                    <input id="search" type="search" placeholder="Search for student" required>
                                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                    <i class="material-icons">close</i>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>



     <div class="row">

     <div class="input-field col s4">
     <select>
       <option value="" disabled selected>Choose your option</option>
       <option value="7">7</option>
       <option value="8">8</option>
       <option value="9">9</option>
       <option value="10">10</option>
       <option value="11">11</option>
       <option value="12">12</option>
     </select>
     <label>Grade</label>
   </div>

   <div class="input-field col s4">
   <select>
     <option value="" disabled selected>Choose your option</option>
     <option value="A">A</option>
     <option value="B">B</option>
     <option value="C">C</option>

   </select>
   <label>Class</label>
 </div>

 <div class="input-field col s4" style="padding-top:10px;">
   <button class="btn waves-effect waves-light" type="submit" name="action" id="pro">Submit
      <i class="material-icons right">send</i>
    </button>
</div>



     </div>

<div class="row" id="spro">





</div>


        </div>






<?php
    }

    elseif ($do == 'add')
    {
      // add page
        ?>
        <div class="container">

            <div class="row" id="scard">

                <div class="col s12 m4 l2"></div>

                <div class="z-depth-2 col s12 m4 l8" id="log">

                    <h4 class="center">زیادکردنی کارت</h4>

                    <div class="row">

                        <div class="input-field col s6">
                            <input placeholder="ID" id="ID" type="text" class="validate" name="id">
                        </div>

                        <div class="input-field col s6" id="IDGEN">
                            <button class="btn bgid">
                                کلیک بکە
                                <i class="material-icons right">loop</i>
                            </button>
                        </div>

                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Password" id="Pass" type="text"  class="validate" name="pass">
                        </div>

                        <div class="input-field col s6" id="PASSGEN">
                            <button class="btn bgpass">
                                کلیک بکە
                                <i class="material-icons right">loop</i>
                            </button>
                        </div>
                    </div>

                    <button class="btn sbsend">
                        بنێرە
                    </button>


                </div>

                <div class="col s12 m4 l2"></div>

            </div>


            <div class="row">

                <div class="col s12 m4 l2"></div>

                <div class="z-depth-2 col s12 m4 l8" id="log">

                    <h4 class="center">زانیاری قوتابی</h4>


                        <form class="center col s12" id="frm">

                            <div class="row">

                                <div class="input-field col s12">
                                    <input placeholder="Name" id="first_name" type="text" class="validate" name="FN">
                                </div>

                            </div>

                            <div class="row">

                                <div class="input-field col s12">
                                    <input placeholder="Phone Number" type="tel" class="validate" name="PN">
                                </div>
                            </div>

                            <div class="row">

                                <div class="input-field col s6">
                                    <input placeholder="ID" id="sid" type="text" class="validate" name="id">
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="Password" id="spass" type="text"  class="validate" name="pass">
                                </div>

                            </div>

                            <div class="row">

                                <div class="input-field col s12">
                                    <input placeholder="Class" type="text" class="validate" name="c">
                                </div>


                            </div>

                            <br>

                          <input type="button" id="bt2" class="btn-small" value="زیاد کردن" name="aa">

                        </form>


                </div>
                <div class="col s12 m4 l2"></div>
            </div>
        </div>


        <?php
    }

    elseif ($do == 'insert'){



            // add data data to database
            $f_n = $_POST['FN'];
            $id = $_POST['id'];
            $pass = $_POST['pass'];
            $p_n = $_POST['PN'];
            $c = $_POST['c'];

            $in = new insert();
            $in->INSERT_INTO("student")->COLUMNS("name,infoID,password,class,Pn")->VALUES("?,?,?,?,?")->result($f_n,$id,$pass,$c,$p_n);

    }

    elseif ($do == 'delete')
    {
        $id = $_POST['delete_id'];
        $Delete = new delete() ;
        $Delete->DELETE_FROM("student")->WHERE("ID = ?")->result("$id");



    }







   include $tpl . 'footer.php';
}


?>
