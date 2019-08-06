<?php
/**
 * Created by PhpStorm.
 * User: M-ENG
 * Date: 4/16/2019
 * Time: 12:51 AM
 */


session_start();
if (isset($_SESSION['infoID'])){

    $pagetitle = "Marks";
    include "init.php";

    $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';

    if ($do == 'Manage') {

        ?>

        <h4 class="center">Marks Dashboard</h4>

        <div class="container">

            <div class="row">

                <div class="col s6">
                    <a href="marks.php?do=addmark">Add Marks</a>
                </div>

                <div class="col s6">

                    <a href="Classes/p.php">Use Excel</a>

                </div>


            </div>


            <h1 class="center">under constructions</h1>
        </div>


        <?php

    }

    elseif ($do == 'addmark'){

        $stmt1 = $conn->prepare(" SELECT * FROM `lesson`");
        $stmt1->execute();
        $Result1 = $stmt1->fetchAll();



        ?>
        <div class="container">

        <form method="post" action="marks.php?do=classub">

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

            <select name="cc3">

                <?php

                foreach ($Result1 as $row){

                    ?>

                    <option><?php echo $row['lec']; ?></option>




                    <?php
                }



                ?>


            </select>


            <button type="submit" name="submit">Submit</button>


        </form>


        </div>



<?php


    }

    if ($do == 'classub') {

        if (isset($_POST['submit'])) {

            $c = $_POST['cc'].$_POST['cc2'];
            $stmt = $conn->prepare(" SELECT * FROM `student` WHERE class = '$c' AND 10_ev1_c1=0 ");
            $stmt->execute();
            $Result = $stmt->fetchAll();
            echo "<h4 class='center'>$c</h4>";


               ?>
               <div class="container">
                <table class="responsive-table">

                    <thead>

                    <tr>
                         <th>ID</th>
                        <th>Student Name</th>
                        <th>First Course</th>
                        <th>Second Course</th>

                    </tr>

                    </thead>

                    <tbody>

                    <?php
                    foreach ($Result as $row){

                        ?>

                        <tr>
                            <td><?php echo $row['ID']?></td>
                            <td><?php echo $row['name']?></td>
                            <td>
                                <a href="#modal1" class="waves-effect waves-light btn-small modal-trigger">
                                    <i class="material-icons">add</i>
                                </a>
                            </td>
                            <td>
                                <a href="#" class="btn-small">
                                    <i class="material-icons">add</i>
                                </a>
                            </td>

                        </tr>




                        <?php
                    }

                    ?>
                    </tbody>





                </table>


                   <!-- Modal Structure -->
                   <div id="modal1" class="modal">
                       <div class="modal-content">
                           <h4>First Course</h4>
                           <p>Enter Student Marks</p>

                           <div class="row">
                               <form class="col s12">
                                   <div class="row">
                                       <div class="input-field col s4">
                                           <input placeholder="10" id="ev1" type="text" class="validate">
                                           <label for="ev1">Evaluation1</label>
                                       </div>
                                       <div class="input-field col s4">
                                           <input placeholder="20" id="mon" type="text" class="validate">
                                           <label for="mon">Monthly</label>
                                       </div>
                                       <div class="input-field col s4">
                                           <input placeholder="10" id="ev2" type="text" class="validate">
                                           <label for="ev2">Evaluation2</label>
                                       </div>

                                   </div>
                                   <div class="row">

                                       <div class="input-field col s6">
                                           <input placeholder="60" id="final" type="text" class="validate">
                                           <label for="">Final</label>
                                       </div>
                                       <div class="input-field col s6">
                                           <input placeholder="100" id="avg" type="text" class="validate">
                                           <label for="avg">avg</label>
                                       </div>

                                   </div>
                               </form>
                           </div>



                       </div>
                       <div class="modal-footer">
                           <a href="#!" class="modal-close waves-effect waves-green btn-flat">Save</a>
                       </div>
                   </div>

               </div>

              <?php



        }
    }




    include $tpl . "footer.php";

}

else{

    header("Location:index.php");
    exit();

}
