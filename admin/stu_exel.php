<?php


session_start();
if (isset($_SESSION['infoID'])){

    $pagetitle = " ";
    include "init.php";


 ?>

 <form action="" method="post" enctype="multipart/form-data">

 <input type="file" name="ecx"/>
 <input type="submit" value="fetch"/>

 </form>


 <?php




    include $tpl . "footer.php";

}

else{

    header("Location:index.php");
    exit();

}




 ?>
