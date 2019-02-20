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
<style>
    input[type=checkbox]{
      color: black;  
        
    }
    
    
</style>

  
    </head>
    <body background="download (3).jpg">
          <div class="container-fluid row" style="color: white;background-color: maroon; font-size: 4em;text-align: center;height: 25%;padding-top:1%;font-family: serif"> <h1>UPDATE </h1></div>
         <br><br><br>
         
           <div class="container">
            <div class="row">
                <div class="col-xs-12 " style="border:3px solid maroon; background-color:white" id="form">
                    <form action="update.php" method="get" style="padding:10px">
                        <br>
                        <div class="checkbox">
                            <h3>what u want to update</h3>  <br>
                           
                           
                            <input type="checkbox" name="updt[1]" value="phone_no">phone_no<br>
                            <input type="checkbox" name="updt[2]" value="current_working_place">current_working_place<br>
                              <input type="checkbox" name="updt[3]" value="higher_stuidies">higher_studies<br>
                            <input type="checkbox" name="updt[4]" value="research">research<br>
                            <input type="checkbox" name="updt[5]" value="periodical">periodical<br>
                               <input type="checkbox" name="updt[6]" value="other_specialisation">other_specialisation<br>
                        </div>
                       
                       
                     
                                              
                          <button type="submit" name="submit1" class="btn btn-primary btn-block" >Submit</button><br>
        </form>
                </div>
            </div>
        </div>
        
        
        
    </body>
    
    
    <br><br>
    <?php
    include 'footer.php';
    ?>