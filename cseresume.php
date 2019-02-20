
<?php 
include 'experience_header.php'?>'




<div class="col-xs-4 col-lg-offset-2" id="v2">
    <form action="upload_file.php" method="post" enctype="multipart/form-data">
        <label for="file-upload" class="custom-file-upload" style="box-shadow: 10px 10px grey;">
    Upload your file here
    <br><br>
<input type="file" name="file" size="10000" id="file" >

<br />

<input type="submit" value="upload" name="submit" id="submit">
        </label>
</form>
</div>
<br><br><br>
<?php
if(!empty($_GET['message'])) {
    $message = $_GET['message'];
 if(strcmp($message,"'you need to login first'")==0){
        ?>
    <script>window.alert("you need to login first");</script>
    <?php

}
}
    ?>
<!----------resume display start---------------------------------->
<br><br><br><br>

<div class="row">
     <div class="container" >
<div class="col-xs-4">
   
     <button class="btn btn-default btn-lg"><a href="yogita_upadhyay_resume1.pdf" style="font-size: 2em">resume1    <span class="glyphicon glyphicon-download"></span></a></button><br><br>
     <button class="btn btn-default btn-lg"><a href="yogita_upadhyay_resume1.pdf" style="font-size: 2em">resume4    <span class="glyphicon glyphicon-download"></span></a></button><br><br>
     <button class="btn btn-default btn-lg"><a href="yogita_upadhyay_resume1.pdf" style="font-size: 2em">resume7    <span class="glyphicon glyphicon-download"></span></a></button><br><br>
     
    </div>
<div class="col-xs-4">
    
        <button class="btn btn-default btn-lg"><a href="yogita_upadhyay_resume1.pdf" style="font-size: 2em">resume2    <span class="glyphicon glyphicon-download"></span></a></button><br><br>
     <button class="btn btn-default btn-lg"><a href="yogita_upadhyay_resume1.pdf" style="font-size: 2em">resume5    <span class="glyphicon glyphicon-download"></span></a></button><br><br>
     <button class="btn btn-default btn-lg"><a href="yogita_upadhyay_resume1.pdf" style="font-size: 2em">resume8    <span class="glyphicon glyphicon-download"></span></a></button><br><br>
     <button class="btn btn-default btn-lg"><a href="yogita_upadhyay_resume1.pdf" style="font-size: 2em">resume10   <span class="glyphicon glyphicon-download"></span></a></button><br><br>
    
           
</div>
    <div class="col-xs-4">
   
        <button class="btn btn-default btn-lg"><a href="yogita_upadhyay_resume1.pdf" style="font-size: 2em">resume3    <span class="glyphicon glyphicon-download"></span></a></button><br><br>
     <button class="btn btn-default btn-lg"><a href="yogita_upadhyay_resume1.pdf" style="font-size: 2em">resume6    <span class="glyphicon glyphicon-download"></span></a></button><br><br>
     <button class="btn btn-default btn-lg"><a href="yogita_upadhyay_resume1.pdf" style="font-size: 2em">resume9   <span class="glyphicon glyphicon-download"></span></a></button><br><br>
     <button class="btn btn-default btn-lg"><a href="yogita_upadhyay_resume1.pdf" style="font-size: 2em">resume11    <span class="glyphicon glyphicon-download"></span></a></button><br><br>
  
    </div>

   
     </div>
</div>
    


