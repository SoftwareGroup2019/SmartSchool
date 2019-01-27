<?php


// This function is for Title of the page in the browser
function pagetitle()
{
    
    global $pagetitle;
    
    if(isset($pagetitle))
    {
        
        echo $pagetitle;
        
    }
    
    else
    {
        echo "Defualt";
    }
    
    
}
// End of Title Function



?>