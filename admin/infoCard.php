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


    ?>


    <div class="container">

        <div class="row" id="hid">

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

                <button class="btn bsend">
                    Send
                </button>





            </div>

            <div class="col s12 m4 l2"></div>

        </div>



        <div class="row">
            <p>test fade</p>
            <div class="input-field col s6">
                <input placeholder="Password" id="kkk" type="text"  class="validate">
            </div>
        </div>

    </div>










    <?php




    include $tpl . 'footer.php';
}


?>