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
                    <h4 class="center" style="color: #263238; font-family: ">Add Student</h4>
                </div>
            </div>
            <div class="row">
                 <div class="col s12">
                     <a class="btn waves-effect waves-light" href="User.php?do=add">
                         New Student
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
                <div class="col s12">
                    <?php
                    $Request= new query();
                    $Result = $Request->SELECT("*")->FROM("user")->WHERE("role = 1")->result();
                    ?>
                    <table class="responsive-table striped">
                        <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                       <?php

                       foreach ($Result as $row)
                       {
                           ?>

                           <tr id="delete<?php echo $row['ID'];?>">

                           <td> <?php echo $row['fn']; ?>  </td>
                           <td> <?php echo $row['ln']; ?>  </td>
                               <td> </td>

                           <td>
                            <a href='profle.php?do=<?php echo $row['ID'];?>' class='btn-small tooltipped' data-position="right" data-tooltip="Profile">
                                  <i class="material-icons">person</i>
                                </a>
                               </td>

                            <td> <a href='profle.php' class='btn-small tooltipped' data-position="right" data-tooltip="Mark">
                                  <i class="material-icons">assignment</i>
                                </a>
                               </td>

                            <td> <button onclick='deletbtn(<?php echo $row['ID'];?>)' class='btn-small tooltipped' data-position="right" data-tooltip="Delete">
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

                    <h4 class="center">infoCard</h4>

                    <div class="row">

                        <div class="input-field col s6">
                            <input placeholder="ID" id="ID" type="text" class="validate" name="id">
                        </div>

                        <div class="input-field col s6" id="IDGEN">
                            <button class="btn bgid">
                                Generate
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
                                Generate
                                <i class="material-icons right">loop</i>
                            </button>
                        </div>
                    </div>

                    <button class="btn sbsend">
                        Send
                    </button>


                </div>

                <div class="col s12 m4 l2"></div>

            </div>


            <div class="row">

                <div class="col s12 m4 l2"></div>

                <div class="z-depth-2 col s12 m4 l8" id="log">

                    <h4 class="center">Student Info</h4>


                        <form class="center col s12" id="frm">

                            <div class="row">

                                <div class="input-field col s6">
                                    <input placeholder="First Name" id="first_name" type="text" class="validate" name="FN">
                                </div>
                                <div class="input-field col s6">
                                    <input placeholder="Last Name" id="last_name" type="text" class="validate" name="LN">
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

                          <input type="button" id="bt2" class="btn-small" value="Submit">

                        </form>


                </div>
                <div class="col s12 m4 l2"></div>
            </div>
        </div>


        <?php
    }

    elseif ($do == 'insert')
    {
        // add data data to database
               $f_n = $_POST['FN'];
               $l_n = $_POST['LN'];
               $id = $_POST['id'];
               $pass = $_POST['pass'];
               $p_n = $_POST['PN'];

               $in = new insert();
               $in->INSERT_INTO("user")->COLUMNS("infoID,password,role,fn,ln,Pn")->VALUES("?,?,?,?,?,?")->result($id, $pass, 1, $f_n, $l_n, $p_n);


    }

    elseif ($do == 'delete')
    {
        $id = $_POST['delete_id'];
        $Delete = new delete() ;
        $Delete->DELETE_FROM("user")->WHERE("ID = ?")->result("$id");



    }


    
    

    
    
   include $tpl . 'footer.php';
}


?>