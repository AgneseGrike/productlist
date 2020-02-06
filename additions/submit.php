<?php

if(isset($_POST["submit"]))
{            
    if(isset($_POST["selectAll"]))
    {   
        $deleteProduct = new dbDelete();
        $deleteProduct->truncate();
        header("Refresh:0");
    }
    else {      
        $checkedProducts = $_POST["selectOne"];                
        while (list ($key, $val) = @each ($checkedProducts))
        {
            $deleteProduct = new dbDelete();
            $deleteProduct->delete($key);
        }
        header("Refresh:0");
    }
}


 // Error throwing
 $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

 if(strpos($fullUrl, "signup=empty") == true)
 {
     echo "<p class='error'>All fields are required!</p>";
     return;
 }

 if(strpos($fullUrl, "signup=error") == true)
 {
     echo "<p class='error'>Error</p>";
     return;
 }

 if(strpos($fullUrl, "signup=SKUerror") == true)
 {
     echo "<p class='error'>SKU must be unique!</p>";
     return;
 }

 if(strpos($fullUrl, "signup=success") == true)
 {
     echo "<p class='success'>Product has been added!</p>";
     return;
 }        