<?php  session_start(); ?> 

<?php
$server='localhost';
$user='root';
    $password='';
    $db='testing';

   $conn= mysqli_connect($server, $user, $password, $db);
    if(!$conn){
        die("connection failed:");
    }

if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("Location:index.php"); 
 }

if(isset($_POST['submit1']))   // it checks whether the user clicked login button or not 
{
     $user = $_POST['username'];
     $pass = $_POST['password'];
      $sql = "SELECT password FROM `users` WHERE name LIKE '$user'";
$run = mysqli_query($conn, $sql)or die("Error: " . mysqli_error($conn));
$row= mysqli_fetch_array($run);
      if(strcmp($pass,$row['password'])==0)  // username is  set to "Ank"  and Password   
         {                                   // is 1234 by default     

          $_SESSION['use']=$user;
          $_SESSION['password']=$password;
          echo "you have successfully login";
            
         //  On Successful Login redirects to home.php

        }

        else
        {
            echo "invalid UserName or Password";        
        }
}


?>


