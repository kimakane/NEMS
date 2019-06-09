<?php
include("functions.php");
$con = con_init();

if(! $con ){
  echo 'fail connection <br>' ;
}
else{
  echo 'database created' ;
  $dbName = "CREATE DATABASE NEMS" ;
  mysqli_query($con , $dbName);
   }

 mysqli_close($con);
 ?>
