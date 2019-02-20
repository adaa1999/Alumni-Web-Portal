<?php
if(isset($_POST['email_data'])){
    require 'PHPMailer-master';
    $output='';
    foreach ($_POST['email_data'] as $row){
        $mail=new PHPMailer;
        $mail->IsSMTP();
        $mail->Host="smtpout.secureserver.net";
        $mail->Port='80';
        $mail->SMTPAuth=TRUE;
        $mail->Username='xxxxxx';
        $mail->Password='xxxxxx';
        $mail->SMTPSecure='';
        $mail->From="upadhyayyogita5@gmail.com";
        
             $mail->FromName="NIT RAIPUR" ;  
             $mail->AddAddress($row['email'], $row['name']);
             $mail->WordWrap=50;
             $mail->IsHTML(true);
             $mail->Subject=" INVITATION for Registration as a alumni in nitrr alumni web portal";
             $mail->Body='<p>please fill the form <a hef="http://localhost/alumni_final/index.php"> register</a></p>';
             $mail->AltBody='';
                     $result=$mail->Send();
                     if($result['code']=='400'){
                         
                         $output.= html_entity_decode($result['full_error']);
                     }
        
    }
  if($output=='') {
      echo 'ok';
  }else{
      echo $output;
  } 
    
}
?>