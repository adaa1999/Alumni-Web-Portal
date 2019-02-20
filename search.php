<?php  session_start(); ?>
<?php
      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
         header("Location: index.php ?message='you need to login first'");
            
       }

     ?>
<?php
include 'main_header.php';
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body background="download (3).jpg">
    <div class="container-fluid row" style="color: white;background-color: maroon; font-size: 4em;text-align: center;height: 25%;padding-top:1%;padding-bottom: 1%;font-family: serif"> <h1> SEARCH RESULT  </h1></div>
    <br><br><br>
    
    <div class="container-fluid" style="background-color: white">
             <table  class="table table-striped table-bordered table-hover table-condensed">
            <thead>
              <th>first_name</th>
            <th>last_name</th>
            <th>batch</th>
            <th>branch</th>
            <th>email</th>
            <th>phone_no</th>
            <th>current working position</th>
               <th>higher studies </th>
             <th>research</th>
              <th>periodicals</th>
               <th>other specialisation</th>
            </thead>
       
            <!-- name LIKE '%$_POST[search]%'"-->
            <tbody>
           
               
<?php
$server='localhost';
$user='root';
    $password='';
    $db='testing';

   $conn= mysqli_connect($server, $user, $password, $db);
    if(!$conn){
        die("connection failed:");
    }

if(isset($_POST['search_submit'])){
   $higherstudies= $_POST['search'];
    $research=$_POST['search'];
    $periodical=$_POST['search'];
    if(strcmp($higherstudies,"higher studies")==0){
         $sql = "SELECT * FROM `twenty` WHERE higher_stuidies !='null' or higher_stuidies !='none'";
        
    }else if(strcmp( $research,"research")==0){
         $sql = "SELECT * FROM `twenty` WHERE research!='null' or research!='none'";
    }else if(strcmp( $periodical,"periodical")==0){
         $sql = "SELECT * FROM `twenty` WHERE periodical !='null'or periodical !='none' ";
        
    }else{
         $sql = "SELECT * FROM `twenty` WHERE f_name LIKE '%$_POST[search]%' "
            . " or "
                       . " batch LIKE '%$_POST[search]%'or "

            . " branch LIKE '%$_POST[search]%'or "
            . " current_working_place LIKE '%$_POST[search]%' or"
            . "  higher_stuidies LIKE '%$_POST[search]%' or"
            . "  research LIKE '%$_POST[search]%' or "
            . " periodical LIKE '%$_POST[search]%' or"
            . "  other_specialisation LIKE '%$_POST[search]%' ";
   
    }
    
    
   
           
    $result= mysqli_query($conn,$sql)or die("Error: " . mysqli_error($conn));
    
    while($row = mysqli_fetch_array ($result ,  MYSQLI_BOTH  )){
        
        echo'<tr>
       
    <td>'.$row['f_name'].'</td>
    <td>'.$row['l_name'].'</td>
        <td>'.$row['batch'].'</td>
            <td>'.$row['branch'].'</td>
                <td>'.$row['email'].'</td>
                    <td>'.$row['phone_no'].'</td>
                        <td>'.$row['current_working_place'].'</td>
                            <td>'.$row['higher_stuidies'].'</td>
                                <td>'.$row['research'].'</td>
                                    <td>'.$row['periodical'].'</td>
                                         <td>'.$row['other_specialisation'].'</td>
                                             
            </tr>';
    echo"<br>";
        
    }

//2019 batch?>
           
            <?php
   
if(strcmp($higherstudies,"higher studies")==0){
         $sql = "SELECT * FROM `nineteen` WHERE higher_stuidies !='null' or higher_stuidies !='none'";
        
    }else if(strcmp( $research,"research")==0){
         $sql = "SELECT * FROM `nineteen` WHERE research != 'null' or research!='none'";
    }else if(strcmp( $periodical,"periodical")==0){
         $sql = "SELECT * FROM `nineteen` WHERE periodical !='null' or periodical !='none' ";
    }else{
         $sql = "SELECT * FROM `nineteen` WHERE f_name LIKE '%$_POST[search]%' "
            . " or "
            . " batch LIKE '%$_POST[search]%'or "
            . " branch LIKE '%$_POST[search]%'or "
            . " current_working_place LIKE '%$_POST[search]%' or"
            . "  higher_stuidies LIKE '%$_POST[search]%' or"
            . "  research LIKE '%$_POST[search]%' or "
            . " periodical LIKE '%$_POST[search]%' or"
            . "  other_specialisation LIKE '%$_POST[search]%' ";
   
    }
      $result= mysqli_query($conn,$sql)or die("Error: " . mysqli_error($conn));
    
    while($row = mysqli_fetch_array ($result ,  MYSQLI_BOTH  )){
        
        echo'<tr>
         <td>'.$row['f_name'].'</td>
    <td>'.$row['l_name'].'</td>
        <td>'.$row['batch'].'</td>
            <td>'.$row['branch'].'</td>
                <td>'.$row['email'].'</td>
                    <td>'.$row['phone_no'].'</td>
                        <td>'.$row['current_working_place'].'</td>
                            <td>'.$row['higher_stuidies'].'</td>
                                <td>'.$row['research'].'</td>
                                    <td>'.$row['periodical'].'</td>
                                         <td>'.$row['other_specialisation'].'</td>
                                             
            </tr>';
    
        
    }
}
?>
    </tbody>
    </div>
   
             </body>
             </html>
 