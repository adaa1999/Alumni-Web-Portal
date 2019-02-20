 <?php
 include 'main_header.php';
 ?>
<?php
   
    if(isset($_GET['submit1'])){
        
         $choice=$_GET['updt'];
         
         
         ?>
         <form action="update2.php"  method="get" style=";padding:10px">
             first_name:    <input type="text" class="form_control " name="name" placeholder=" first_name" required><br><br>
             Batch:     <input type="text" class="form_control " name="batch" placeholder=" batch eg 2017-2018" required> <br><br>
                     Email:    <input type="text" class="form_control" name="email" placeholder="email" required> <br><br><?Php
        
        for($x=0;$x<=6;$x++){
           
             if(!empty($choice[$x])){
                
           
                
                 if(strcmp($choice[$x],"phone_no")==0){?>
                     Phone_no:   <input type="text" class="form_control " name="phoneno" placeholder=" phone_no" required><br><br>    <?php                  
                 }
                  if(strcmp($choice[$x],"current_working_place")==0){
                      ?>
                     Current_working_place_and_position:<br><br><input type="text" class="form_control" name="current" placeholder="current_working place" required> <br><br>
                      <?php
                  }
                   if(strcmp($choice[$x],"higher_stuidies")==0){
                       ?>
                        Higher_studies_if_any:<br><br>   <textarea name=" Higher_studies_if_any"  cols="100"> </textarea><br><br><?php
                       
                   }
                    if(strcmp($choice[$x],"research")==0){
                        ?>
                       Research_work_if_any:<br><br>   <textarea name=" Research_work_if_any"  cols="100"> </textarea><br><br><?php
                        
                    }
                     if(strcmp($choice[$x],"periodical")==0){
                         ?>
                         Periodicals_if_any: <br><br>   <textarea name=" Periodicals_if_any"  cols="100"> </textarea><br><br><?php
                        
                     }
                      if(strcmp($choice[$x],"other_specialisation")==0){
                          ?>
                          Other_specilaisation:<br><br>  <textarea name=" Other_specilaisation"  cols="100"> </textarea><br><br><?php
                           
                      }
             }

          }
          ?>
                           <input type="submit" name="submit">
        </form><?php
          }
      ?>
  