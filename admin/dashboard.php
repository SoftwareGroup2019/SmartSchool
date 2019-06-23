<?php

session_start();

if(isset($_SESSION['infoID']))
{
    $pagetitle = "Dashboard";
      include "init.php";

      $stmt = $conn->prepare(" SELECT * FROM `student`");
      $stmt->execute();
      $Result = $stmt->fetchAll();
      $c = $stmt->rowCount();




    ?>

    <div class="row">
        <div class="s12 center">
            <h4>بەخێربێن بۆ پەڕەی بەڕێوبردن</h4>
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
                        <a href="#name"><span class="white-text name">محمد کامەران</span></a>
                        <a href="#email"><span class="white-text name">بەرێوبەری گشتی</span></a>
                    </div></li>
                <li><a href="#!"><i class="material-icons">photo_camera</i>گۆڕینی وێنە</a></li>
                <li><a href="#!"><i class="material-icons">edit</i>گۆرینی ناو</a></li>

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
                        ئەکاونتی بەڕێوبەڕ
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

                        <a href="#name"><span class="white-text name">بەرێوربردنی قوتابیان</span></a>
                        <a href="#email"><span class="white-text email">قوتابی <?php echo $c;?></span></a>
                    </div>
                </li>
                <li><a href="User.php"><i class="material-icons">person_add</i>زیادکردنی قوتابی</a></li>
                <li><a href="infoCard.php"><i class="material-icons">lock</i>کارتی چوونەژوورەوە</a></li>
                <li><div class="divider"></div></li>
                <li><a class="subheader">Settings</a></li>
                <li><a href="marks.php"><i class="material-icons">add</i>زیادکردنی نمرە</a></li>
                  <li><a href="#!"><i class="material-icons">send</i>ناردنەوەی نمرە</a></li>
                <li><a class="waves-effect" href="#!">Notification</a></li>
                <li><a class="waves-effect" href="#!">Messages</a></li>
            </ul>

            <div class="center card-panel white">
                <a href="#" data-target="slide-out2" class="sidenav-trigger">
                    <img class="circle responsive-img" src="layout/img/student.png" height="70px" width="70px">
                </a>

                <p>
                    <a href="#" data-target="slide-out2" class="sidenav-trigger">
                        قوتابیان
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

                        <a href="#name"><span class="white-text name">بەرێوربردنی مامۆستایان</span></a>
                        <a href="#email"><span class="white-text email">45 مامۆستا</span></a>
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
                        مامۆستایان
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

                        <a href="#name"><span class="white-text name">بەرێوربردنی دایک و باوک</span></a>
                        <a href="#email"><span class="white-text email">122 دایک و باوک</span></a>
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
                        دایک و باوک
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
