<?php
      $server='localhost';
$user='root';
    $password='';
    $db='testing';

   $con= mysqli_connect($server, $user, $password, $db)or die("Error: " . mysqli_error($conn));
    if(!$con){
        die("connection failed:");
    }
    
    if(isset($_POST['submit'])){
         
     echo $_FILES['image']['name'];
        if(isset($_POST['file'])){
              $file1= addslashes(file_get_contents($_FILES['image']['tmp_name']));
             $run= mysqli_query($con, "INSERT INTO resume( name)VALUES('$file1')")or die("Error: " . mysqli_error($con));
        }
       
        
        
    }
    
    
    
    ?>