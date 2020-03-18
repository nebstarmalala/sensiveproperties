<?php
    $host="localhost";
    $username="root";
    $password="";
    $db="sensiveproperties";

    $dbconnect=mysqli_connect($host,$username,$password,$db);

   /* if($dbconnect){
     echo "connected successfully";
    }else{
     echo "connection failed :".mysqli_error($dbconnect);
    }*/
?>