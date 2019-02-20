
<?php  session_start(); ?>

<?php
      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
         header("Location: index.php?message='you need to login first'");
           
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


  <style>
      #form{
          color: blue;
      }
      input[type=text] {
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
}
textArea{
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
}
  </style>
    </head>
    <body  background="download (3).jpg">
         <div class="container-fluid row" style="color: white;background-color: maroon; font-size: 4em;text-align: center;height: 25%;padding-top:1%;padding-bottom: 1%;font-family: serif"> <h1>REGISTER </h1></div>
         <br><br><br>
         
         <div class="container" style="text-align: center;border:3px solid blue">
            <div class="row">
                <div class="col-xs-12 " style="border:3px solid blue; content-align: center; background-color:white" id="form">
                    <form action="receive.php" method="post" style=";padding:10px">
                        <br>
                        first_name:    <input type="text" class="form_control " name="f_name" placeholder=" first_name" required>  last_name:   <input type="text" class="form_control" name="l_name" placeholder=" last_name" required><br><br>
                        Batch:     <input type="text" class="form_control " name="batch" placeholder=" batch eg 2017-2018" required> Branch:     <input type="text" class="form_control " name="branch" placeholder=" batch eg 2017-2018" required><br><br>
                         Email:    <input type="text" class="form_control" name="email" placeholder="email" required>  Phone_no:   <input type="text" class="form_control " name="phoneno" placeholder=" phone_no" required><br><br>                      
                         Current_working_place_and_position:<br><br>  <textarea name="Current_working_place_and_position" cols="100"> </textarea><br><br>
                        Higher_studies_if_any:<br><br>   <textarea name=" Higher_studies_if_any"  cols="100"> </textarea><br><br>
                        Research_work_if_any:<br><br>   <textarea name=" Research_work_if_any"  cols="100"> </textarea><br><br>
                        Periodicals_if_any: <br><br>   <textarea name=" Periodicals_if_any"  cols="100"> </textarea><br><br>
                       Linkedin_profile_link:<br><br>  <textarea name="Linkedin_profile_link"  cols="100"> </textarea><br><br>
                        Other_specilaisation:<br><br>  <textarea name=" Other_specilaisation"  cols="100"> </textarea><br><br>
                       
                       
                     
                                              
                        <button type="submit" name="submit1" class="btn btn-primary btn-block" >submit</button><br>
        </form>
                </div>
            </div>
        </div>
        
    </body>
</html>
