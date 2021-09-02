<?php
     $username = 'root';
     $password = '';
     $server = 'localhost';
     $database = 'intern_db';

     $conn = mysqli_connect($server,$username,$password,$database);

     if(!$conn){
         die("Could not connect to database");
     }else{
         echo "Connected to Database";
     }
?>