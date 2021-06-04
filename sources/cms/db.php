<?php
    $mysqli = new mysqli("localhost", "root", "", "mystore");
    if($mysqli){
    //  echo "database cofigured" ;
    }
    else{
      echo"you have no connection with database";
    }

?>
