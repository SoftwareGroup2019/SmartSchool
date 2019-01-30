<?php
session_start();
$nonavbar = '';
if(isset($_SESSION['infoID']))
{
    header('Location: dashboard.php');
}

$pagetitle = "Login Page";
include "init.php";



if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id = $_POST['id'];
    $pass = $_POST['pass'];
  
  $stmt = $conn->prepare("SELECT infoID,password FROM user WHERE infoID = ? AND password = ? AND role = 0");
    $stmt->execute(array($id,$pass));
    $count = $stmt->rowCount();

     if($count > 0 ){
      
       echo  $_SESSION['infoID'] = $id;
         header('Location: dashboard.php');
         exit();
      
         
     }
  
}


?>


<!--    Start of Container-->
   <div class="container">
    

       
<!--       Start of Login Card (InfoCard) -->
       <div class="row">
           
<!--       taking two colom for large size -->
    <div class="col s12 m4 l2"></div>
           
           
<!-- taking 8 colom for login card          -->
    <div class="z-depth-2 center col s12 m4 l8" id="log">
        
           <h4 id="demo"></h4>

        
<!--   Start of Form     -->
         <form class="col s12" onsubmit="Validate()" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
             
<!--   Start of login card row    -->
      <div class="row">
          
<!--   Start of ID Field       -->
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" data-length="6" name="id">
          <label for="icon_prefix">ID</label>
        </div>
<!--  End of ID field        -->
          
<!-- Start of Password Field         -->
        <div class="input-field col s12">
          <i class="material-icons prefix">lock</i>
          <input id="icon_telephone" type="password" class="validate" data-length="9" name="pass">
          <label for="icon_telephone">Password</label>
        </div>
<!--   End of Password Field          -->
          
<!--  Check Box Colom        -->
          <div class="col s12">
            <p>
      <label>
        <input id="indeterminate-checkbox" type="checkbox" />
        <span>Remember Me</span>
      </label>
    </p>
          </div>
<!--   End of CheckBox colom       -->
          
      </div>
<!--  End of Login Card Row           -->
             
             

               <!--  Start of Send Button of Login page      -->
        <button class="btn waves-effect waves-light pulse" name="action" id="bt" >
            Submit
       <i class="material-icons right">send</i>
       </button>
            
     </form>
<!-- End of Form       -->
        
        
      
<!-- End of Send Button of Login page         -->

           
           
           </div>
<!-- End of 8 colom for login card  -->
           
           
           
<!--  2 colom for large size         -->
    <div class="col s12 m4 l2"></div>
       
       
       </div>
<!--       End of Login Card (InfoCard) -->
       
       
 <!--         Start of TypeWriter-->
          <div class="row">
       
           <div class="col s12 center">
           
               <h5 id="ghost"></h5>
           
           </div>
       
       </div>
<!--       End of typewriter-->
       
    
    </div>
<!--    End of Container-->
  

    





<?php

include $tpl . "footer.php";

?>