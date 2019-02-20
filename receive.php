<?php
      //$server='localhost';
     //$user='root';
    //$password='';
    //$db='testing';

   //$con= mysqli_connect($server, $user, $password, $db)or die("Error: " . mysqli_error($conn));
    //if(!$con){
    //    die("connection failed:");
   // }
      if(isset($_POST['submit1'])){
         $name= strip_tags($_POST['name']);
            $branch= strip_tags($_POST['branch']);
    $ContacNumber= strip_tags($_POST['ContacNumber']);
        $email= strip_tags($_POST['email']);
      $batch= strip_tags($_POST['batch']);
      $date= strip_tags($_POST['date']);
      $time= strip_tags($_POST['time']);
      $department= strip_tags($_POST['department']);
      
       echo $name."  ". $branch."  ".
    $ContacNumber." ". $email."  ". $batch." ".
      $date." ". $time."  ". $department;
 

 
          
          
  ?>
       
       
   


