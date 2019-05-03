<?php

session_start();

if(isset($_SESSION['infoID']))
{
    $pagetitle = "Dashboard";
      include "init.php";

echo "test";
    ?>

    <div class="row">
        <div class="s12 center">
            <h4>Welcome to Admin Panel</h4>
        </div>
    </div>

    <div class="row">

        <div class="col s12 m3">

            <ul id="slide-out" class="sidenav">
                <li><div class="user-view">
                        <div class="background">
                            <img class="responsive-image" src="layout/img/bg.jpeg">
                        </div>
                        <a href="#user"><img class="circle" src="layout/img/me.jpg"></a>
                        <a href="#name"><span class="white-text name">Mohamad Kamaran</span></a>
                        <a href="#email"><span class="white-text email">M.00129@gmail.com</span></a>
                    </div></li>
                <li><a href="#!"><i class="material-icons">photo_camera</i>Change Photo</a></li>
                <li><a href="#!"><i class="material-icons">edit</i>Change Name</a></li>
                <li><a href="#!"><i class="material-icons">mail</i>Change Mail</a></li>
                <li><div class="divider"></div></li>
                <li><a class="subheader">Settings</a></li>
                <li><a class="waves-effect" href="#!">Themes</a></li>
                <li><a class="waves-effect" href="#!">Language</a></li>
                <li><a class="waves-effect" href="#!">Backup</a></li>
            </ul>

            <div class="center card-panel white">


                <a href="#" data-target="slide-out" class="sidenav-trigger">
                    <img class="circle responsive-img" src="layout/img/me.jpg" height="70px" width="70px">
                </a>

                <p>
                    <a href="#" data-target="slide-out" class="sidenav-trigger">
                        Manager Account
                    </a>
                </p>
            </div>

        </div>

        <div class="col s12 m3">
            <ul id="slide-out2" class="sidenav">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <img class="responsive-image" src="layout/img/bg.jpeg">
                        </div>

                        <a href="#name"><span class="white-text name">Student Management</span></a>
                        <a href="#email"><span class="white-text email">244 Student</span></a>
                    </div>
                </li>
                <li><a href="User.php"><i class="material-icons">person_add</i>Add Student</a></li>
                <li><a href="infoCard.php"><i class="material-icons">lock</i>Info Card</a></li>
                <li><div class="divider"></div></li>
                <li><a class="subheader">Settings</a></li>
                <li><a class="dropdown-trigger  waves-effect" data-target='dropdown1' href="#!">Marks Sheet<i class="material-icons">
                            keyboard_arrow_down
                        </i>
                    </a></li>
                <li><a class="waves-effect" href="#!">Notification</a></li>
                <li><a class="waves-effect" href="#!">Messages</a></li>
            </ul>

            <!-- Dropdown Structure -->
            <ul id='dropdown1' class='dropdown-content'>
                <li><a href="marks.php">Create Marks</a></li>
                <li class="divider" tabindex="-1"></li>
                <li><a href="#!"><i class="material-icons">send</i>Send Marks</a></li>
                <li><a href="#!"><i class="material-icons">cloud</i>Send via SMS</a></li>
            </ul>

            <div class="center card-panel white">
                <a href="#" data-target="slide-out2" class="sidenav-trigger">
                    <img class="circle responsive-img" src="layout/img/student.png" height="70px" width="70px">
                </a>

                <p>
                    <a href="#" data-target="slide-out2" class="sidenav-trigger">
                        Student Management
                    </a>
                </p>
            </div>
        </div>

        <div class="col s12 m3">
            <ul id="slide-out3" class="sidenav">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <img class="responsive-image" src="layout/img/bg.jpeg">
                        </div>

                        <a href="#name"><span class="white-text name">Teacher Management</span></a>
                        <a href="#email"><span class="white-text email">45 Teachers</span></a>
                    </div>
                </li>
                <li><a href="#!"><i class="material-icons">person_add</i>Add Teacher</a></li>
                <li><a href="#!"><i class="material-icons">lock</i>Info Card</a></li>
                <li><div class="divider"></div></li>
                <li><a class="subheader">Settings</a></li>
                <li><a class="waves-effect" href="#!">Class</a></li>
                <li><a class="waves-effect" href="#!">Notifications</a></li>
                <li><a class="waves-effect" href="#!">Messages</a></li>
            </ul>
            <div class="center card-panel white">
                <a href="#" data-target="slide-out3" class="sidenav-trigger">
                    <img class="circle responsive-img" src="layout/img/teacher.png" height="70px" width="70px">
                </a>

                <p>
                    <a href="#" data-target="slide-out3" class="sidenav-trigger">
                        Teacher Management
                    </a>
                </p>
            </div>
        </div>


        <div class="col s12 m3">
            <ul id="slide-out4" class="sidenav">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <img class="responsive-image" src="layout/img/bg.jpeg">
                        </div>

                        <a href="#name"><span class="white-text name">Parent Management</span></a>
                        <a href="#email"><span class="white-text email">122 Parents</span></a>
                    </div>
                </li>
                <li><a href="#!"><i class="material-icons">person_add</i>Add Parent</a></li>
                <li><a href="#!"><i class="material-icons">lock</i>Info Card</a></li>
                <li><div class="divider"></div></li>
                <li><a class="subheader">Settings</a></li>
                <li><a class="waves-effect" href="#!">Send Marks</a></li>
                <li><a class="waves-effect" href="#!">Payment Invoices</a></li>
                <li><a class="waves-effect" href="#!">Class Routine</a></li>
                <li><a class="waves-effect" href="#!">Messages</a></li>
            </ul>
            <div class="center card-panel white">
                <a href="#" data-target="slide-out4" class="sidenav-trigger">
                    <img class="circle responsive-img" src="layout/img/parent.png" height="70px" width="70px">
                </a>

                <p>
                    <a href="#" data-target="slide-out4" class="sidenav-trigger">
                        Parent Management
                    </a>

                </p>
            </div>
        </div>



        </div>

    </div>





     <?php



    include $tpl . "footer.php";
}

else
{
    header("Location: index.php");
    exit();
}


?>
