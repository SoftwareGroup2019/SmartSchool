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


            <!-- Modal Structure -->
            <div id="modal1" class="modal">
                <div class="center modal-content">
                    <h4>Enter Phone Number</h4>
                    <div class="row">
                        <div class="col s4">

                        </div>
                        <div class="col s4">
                            <input placeholder="PhoneNum" id="phone" type="text" class="validate" name="">
                        </div>
                        <div class="col s4">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col s4">

                        </div>
                        <div class="col s4">
                            <button class="btn btn-small" value="1">1</button>
                            <button class="btn btn-small" value="2">2</button>
                            <button class="btn btn-small" value="3">3</button>
                        </div>
                        <div class="col s4">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col s4">

                        </div>
                        <div class="col s4">
                            <button class="btn btn-small" value="4">4</button>
                            <button class="btn btn-small" value="5">5</button>
                            <button class="btn btn-small" value="6">6</button>
                        </div>
                        <div class="col s4">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col s4">

                        </div>
                        <div class="col s4">
                            <button class="btn btn-small" value="7">7</button>
                            <button class="btn btn-small" value="8">8</button>
                            <button class="btn btn-small" value="9">9</button>
                        </div>
                        <div class="col s4">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col s4">

                        </div>
                        <div class="col s4">
                            <button class="btn btn-small" value="0">0</button>
                        </div>
                        <div class="col s4">

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
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
                    <p>Data goes here</p>
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
            <div class="row">

                <div class="col s12 m4 l2"></div>

                <div class="z-depth-2 col s12 m4 l8" id="log">

                    <h4 class="center">Student Info</h4>


                        <form class="center col s12">

                            <div class="row">

                                <div class="input-field col s6">
                                    <input placeholder="First Name" id="first_name" type="text" class="validate" name="">
                                </div>
                                <div class="input-field col s6">
                                    <input placeholder="Last Name" id="last_name" type="text" class="validate">
                                </div>

                            </div>

                            <div class="row">

                                <div class="input-field col s6">
                                    <input placeholder="ID" id="ID" type="text" class="validate" name="">
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
                                    <input placeholder="Password" id="Pass" type="text"  class="validate">
                                </div>

                                <div class="input-field col s6" id="PASSGEN">
                                    <button class="btn bgpass">
                                        Generate
                                        <i class="material-icons right">loop</i>
                                    </button>
                                </div>
                            </div>

                            <div class="row">

                                <div class="input-field col s12">
                                    <input placeholder="Phone Number" id="first_name" type="tel" class="validate" name="">
                                </div>
                            </div>

                            <div class="row">

                                <div class="input-field col s6">
                                    <select>
                                        <option value="" disabled selected>Choose Class</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                    <label></label>
                                </div>

                                <div class="input-field col s6">
                                    <select>
                                        <option value="" disabled selected>Choose Section</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                    <label></label>
                                </div>

                            </div>

                            <br>
                            <!--  Start of Send Button of Login page      -->
                            <button class="btn waves-effect waves-light pulse" name="action" id="bt" >
                                Submit
                                <i class="material-icons right">send</i>
                            </button>
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

    }


    
    

    
    
   include $tpl . 'footer.php';
}


?>