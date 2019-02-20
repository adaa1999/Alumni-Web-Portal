<?php 
include 'main_header.php';
?>

<?php
  $server='localhost';
$user='root';
    $password='';
    $db='testing';
    
    

   $conn= mysqli_connect($server, $user, $password, $db);
    if(!$conn){
        die("connection failed:");
    }
  
  if(isset($_GET['submit'])){
      $f_name=$_GET['name'];
      $batch=$_GET['batch'];
     
  $email=$_GET['email'];
  if(isset($_GET['phoneno']) ? $_GET['phoneno'] : ''){
       $phone_no=$_GET['phoneno'];
      
  }
     
  if(isset($_GET['current']) ?$_GET['current'] : ''){
       $current_working_place=htmlspecialchars($_GET['current']);
  }
 if(isset($_GET['higher_stuidies']) ?$_GET['higher_stuidies'] : ''){
       $higher_studies= htmlspecialchars($_GET['higher_stuidies']);
 }
if(isset($_GET['Research_work_if_any']) ?$_GET['Research_work_if_any'] : ''){
    $research= htmlspecialchars($_GET['Research_work_if_any']);
}
  }
  if(isset($_GET['Periodicals_if_any']) ? $_GET['Periodicals_if_any'] : ''){
       $periodical=htmlspecialchars($_GET['Periodicals_if_any']);
  }
 
  if(isset($_GET[' Other_specilaisation']) ? $_GET[' Other_specilaisation'] : ''){
      $other_specialisation=htmlspecialchars($_GET[' Other_specilaisation']);
  }
  
 
 
  
 
      
      if(strcmp($batch,"2020")==0){
         
                 if(!empty($phone_no)){  
                    
                   $run1= mysqli_query($conn, "UPDATE `twenty` SET phone_no=$phone_no WHERE email='$email'")or die("Error: " . mysqli_error($conn));
                 }          
                 
                  if(!empty($current_working_place)){
                      $run2= mysqli_query($conn, "UPDATE `twenty` SET current_working_place='$current_working_place' WHERE email='$email'")or die("Error: " . mysqli_error($conn)); 
                  }
                   if(!empty($higher_studies)){
                         $run3= mysqli_query($conn, "UPDATE `twenty` SET  higher_stuidies='$higher_studies' WHERE email='$email'")or die("Error: " . mysqli_error($conn)); 
                       
                   }
                    if(!empty( $research)){
                       
                          $run4= mysqli_query($conn, "UPDATE `twenty` SET research='$research' WHERE email='$email'")or die("Error: " . mysqli_error($conn)); 
                    }
                     if(!empty($periodical)){
                        
                          $run5= mysqli_query($conn, "UPDATE `twenty` SET periodical='$periodical' WHERE email='$email'")or die("Error: " . mysqli_error($conn)); 
                     }
                      if(!empty($other_specialisation)){
                       
                            $run6= mysqli_query($conn, "UPDATE `twenty` SET other_specialisation='$other_specialisation' WHERE email='$email'")or die("Error: " . mysqli_error($conn));  
                      }
                      echo "you have updated successfully!";
      
  }
   if(strcmp($batch,"2019")==0){
         
                 if(!empty($phone_no)){  
                    
                   $run1= mysqli_query($conn, "UPDATE `nineteen` SET phone_no=$phone_no WHERE email='$email'")or die("Error: " . mysqli_error($conn));
                 }          
                 
                  if(!empty($current_working_place)){
                      $run2= mysqli_query($conn, "UPDATE `nineteen` SET current_working_place='$current_working_place' WHERE email='$email'")or die("Error: " . mysqli_error($conn)); 
                  }
                   if(!empty($higher_studies)){
                         $run3= mysqli_query($conn, "UPDATE `nineteen` SET  higher_stuidies='$higher_studies' WHERE email='$email'")or die("Error: " . mysqli_error($conn)); 
                       
                   }
                    if(!empty( $research)){
                       
                          $run4= mysqli_query($conn, "UPDATE `nineteen` SET research='$research' WHERE email='$email'")or die("Error: " . mysqli_error($conn)); 
                    }
                     if(!empty($periodical)){
                        
                          $run5= mysqli_query($conn, "UPDATE `nineteen` SET periodical='$periodical' WHERE email='$email'")or die("Error: " . mysqli_error($conn)); 
                     }
                      if(!empty($other_specialisation)){
                       
                            $run6= mysqli_query($conn, "UPDATE `nineteen` SET other_specialisation='$other_specialisation' WHERE email='$email'")or die("Error: " . mysqli_error($conn));  
                      }
                      echo "you have updated successfully!";
      
  }
  
  
  
  
  ?>
  
                       
                        
              
                       