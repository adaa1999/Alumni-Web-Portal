 <?php
      $server='localhost';
$user='root';
    $password='';
    $db='testing';

   $con= mysqli_connect($server, $user, $password, $db);
    if(!$con){
        die("connection failed:");
    }

 
if(isset($_POST['submit'])){
    echo "hello";
    $name=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $run1= mysqli_query($con,"SELECT email ,name from users");
    $k=0;$e=0;
       while($row= mysqli_fetch_array($run1)){
           if(strcmp($email,$row['email'])==0){
               
             $e=$e+1;  
             if(strcmp($email,$row['email'])==0&&strcmp($name,$row['name'])==0){
        $k=$k+1;
       break;
    }
           }
    
}
$m=0;
 $run2= mysqli_query($con,"SELECT email ,name from mail_2020")or die("Error: " . mysqli_error($con));
 
while($row1= mysqli_fetch_array($run2)){
   
    if(strcmp($name, $row1['name'])==0&&strcmp($email, $row1['email'])==0){
       
        $m=$m+1;
        break;
    }
    
}
$run3= mysqli_query($con,"SELECT email ,name from mail_2019")or die("Error: " . mysqli_error($con));
 
while($row3= mysqli_fetch_array($run3)){
    if(strcmp($name, $row1['name'])==0&&strcmp($email, $row3['email'])==0){
       
        $m=$m+1;
        break;
    }
    
}
if($m==0){
    
     header("Location: index.php ?message='you are not a authorised user'");
}else if($k==0&&$e==0&&$m!=0){
    $run= mysqli_query($con,"INSERT INTO users( name, email,password)VALUES('$name', '$email','$password')");
    echo "you have successfully signup";
   }else if($e==1&&$k==1) {
       header("Location: index.php ?message='username && email already taken'");
   }else{
       header("Location: index.php ?message='email already taken'");
   }
}
        ?>