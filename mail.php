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
    }?>
    
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
    <div class="container-fluid row" style="color: white;background-color: maroon; font-size: 4em;text-align: center;height: 25%;padding-top:1%;padding-bottom: 1%;font-family: serif"> <h1> ADMIN  </h1></div>
    <br><br><br>
  
    <div class="container" style="background-color: white">
        <h3 style="text-decoration: underline;color: green;font-family: serif"><b>BATCH 2020</b></h3>
             <table  class="table table-striped table-bordered table-hover table-responsive table-condensed">
            <thead>
         <th>first_name</th>
           <th>email</th>
           <th>select</th>
            <th>action</th>
            </thead>
                  <tbody>
                <?php
   $run= mysqli_query($conn, "SELECT * FROM mail_2020");
   $count=0;
    while($row= mysqli_fetch_array($run)){
        {
        $count=$count+1;
        echo'<tr>
        <td>'.$row['name'].'</td>
      <td>'.$row['email'].'</td>
           <td><input type="checkbox"  name="single_select" class="single_select"
             data-email="'.$row['email'].'"data-name="'.$row['name'].'"></td>
 <td><button type="button" class=" btn btn-info btn-xs email_button" name="email"
 id="'.$count.'"  data-email="'.$row['email'].'"  data-name="'.$row['name'].'"  data-action="single">send mail</button></td>

                       </tr>';
    
        
    }
        
    }
    
    
    ?>
                      <tr>
                          <td colspan="3"></td>
                          <td><button type="button" class=" btn btn-info btn-ms btn-block email_button" name="email"
                                      id="bulk_email"  data-email="'.$row['email'].'"  data-name="'.$row['name'].'"  data-action="bulk">send all</button></td>
                      </tr>          
            </tbody>
             </table>
    </div>
    
    <script>
    $(document).ready(function(){
        $('.email_button').click(function(){
            $(this).attr('disable','disable');
           var id = $(this).attr("id");
           varaction=$(this).data("action");
           var email_data=[];
           if(action=='single'){
               email_data.push({
                   email=$(this).data("email"),
                   name=$(this).data("name")
               });
           }else{
               $('.single_select.').each(function{
                   if($(this).prop("checked")==true){
                       email_data.push({
                            email=$(this).data("email"),
                   name=$(this).data("name")
                       }); 
                   }
                   
               });
           }
           $.ajax({
               url:"send_mail.php",
               method="POST",
               data={email_data:email_data},
               beforeSend:function(){
                   $('#'+id).html(sending.....);
                    $('#'+id).addClass('btn-danger');
               },
               success:function(data){
                   if(data=='ok'){
                         $('#'+id).text('success');
                          $('#'+id).removeClass('btn-danger');
                           $('#'+id).removeClass('btn-success');
                            $('#'+id).addClass('btn-success');
                   }
                   else{
                        $('#'+id).text(data);
                   }
                    $('#'+id).attr('disable' ,false);
               }
           });
            
        });
        
    });
    
    
    </script>