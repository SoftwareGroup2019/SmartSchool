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

            <div class="center card-panel white">
                <a href="Classes/p.php" data-target="slide-out2" class="sidenav-trigger">
                    <img class="circle responsive-img" src="layout/img/exc.png" height="70px" width="70px">
                </a>

                <p>
                    <a href="Classes/p.php" data-target="slide-out2" class="sidenav-trigger">
                          فایلی ئەکسڵ
                    </a>
                </p>
            </div>
        </div>

        <div class="col s12 m3">

            <div class="center card-panel white">
                <a href="marks.php" data-target="slide-out3" class="sidenav-trigger">
                    <img class="circle responsive-img" src="layout/img/sss.png" height="70px" width="70px">
                </a>

                <p>
                    <a href="marks.php" data-target="slide-out3" class="sidenav-trigger">
                        ناردنەوەی نمرە
                    </a>
                </p>
            </div>
        </div>


        <div class="col s12 m3">

            <div class="center card-panel white">
                <a href="#" data-target="slide-out4" class="sidenav-trigger">
                    <img class="circle responsive-img" src="layout/img/parent.png" height="70px" width="70px">
                </a>

                <p>
                    <a href="#" data-target="slide-out4" class="sidenav-trigger">
                           بەخێوکەر
                    </a>

                </p>
            </div>
        </div>



        </div>

        <div class="row">
          <div class="col s12 m3">

              <div class="center card-panel white">
                  <a href="infoCard.php" data-target="slide-out4" class="sidenav-trigger">
                      <img class="circle responsive-img" src="layout/img/kod.png" height="70px" width="70px">
                  </a>

                  <p>
                      <a href="infoCard.php" data-target="slide-out4" class="sidenav-trigger">
                               کۆد
                      </a>

                  </p>
              </div>
          </div>

          <div class="col s12 m3">

              <div class="center card-panel white">
                  <a href="#" data-target="slide-out4" class="sidenav-trigger">
                      <img class="circle responsive-img" src="layout/img/hall.png" height="70px" width="70px">
                  </a>

                  <p>
                      <a href="#" data-target="slide-out4" class="sidenav-trigger">
                          هۆڵی تاقیکردنەوەکان
                      </a>

                  </p>
              </div>
          </div>


          <div class="col s12 m3">

              <div class="center card-panel white">
                  <a href="#" data-target="slide-out4" class="sidenav-trigger">
                      <img class="circle responsive-img" src="layout/img/f.png" height="70px" width="70px">
                  </a>

                  <p>
                      <a href="#" data-target="slide-out4" class="sidenav-trigger">
                             کارتی قوتابی
                      </a>

                  </p>
              </div>
          </div>

          <div class="col s12 m3">

              <div class="center card-panel white">
                  <a href="user.php" data-target="slide-out4" class="sidenav-trigger">
                      <img class="circle responsive-img" src="layout/img/student.png" height="70px" width="70px">
                  </a>

                  <p>
                      <a href="user.php" data-target="slide-out4" class="sidenav-trigger">
                              قوتابیان
                      </a>

                  </p>
              </div>
          </div>

<h1 class="center">under constructions</h1>

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
