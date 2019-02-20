<?php
$server='localhost';
$user='root';
    $password='';
    $db='register';

   $con= mysqli_connect($server, $user, $password, $db);
    if(!$con){
        die("connection failed:");
    }
?>