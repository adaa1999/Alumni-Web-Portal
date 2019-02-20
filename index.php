<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand" href="index.php" style="color:white;font-family: serif;font-size: 2em">NITRR ALUMNI WEB PORTAL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       <li><a href="interveiw_experiences.php" style="color:white;font-family: serif;font-size: 1.2em">Mentorship</a></li>
       <li><a href="guest_house.php" style="color:white;font-family: serif;font-size: 1.2em">Services</a></li>
              <li><a href="gallery.php" style="color:white;font-family: serif;font-size: 1.2em">Gallery</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white;font-family: serif;font-size: 1.2em">Publications <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="annual_report.php">Annual Report</a></li>
              <li><a href="media.php">Media Coverage</a></li>
              <li><a href="periodicals.php">Periodicals</a></li>
          </ul>
        </li>
        
       
      </ul>
        <form style="opacity: 1" class="navbar-form navbar-left" action="search.php" method="post">
              <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for Alumni" style="background:white" name="search">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit" name="search_submit">
                    <i class="glyphicon glyphicon-search"></i>
                  </button>
                </div>
              </div>
            </form>
       <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white;font-family: serif;font-size: 1.2em"> <span class="glyphicon glyphicon-user"></span> <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="mail.php"> <span class="glyphicon glyphicon-user"></span> Admin</a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModa2"> <span class="glyphicon glyphicon-log-in"></span> login</a></li>
              <li><a href="form.php"> <span class="glyphicon glyphicon-user"></span>  Register(only for alumni)</a></li>
              <li><a href="front_update.php"> <span class="glyphicon glyphicon-user"></span>update your profile(only for alumni) </a></li>
              <li><a href="logout.php"> <span class="glyphicon glyphicon-log-in"></span> logout</a></li>
           
          </ul>
        </li>
            
              
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><img src="signup.jpg">Sign Up</h4>
      </div>
      <div class="modal-body">
          <form action="signup_receive.php" method="post" >
                                <div class="modal-body">

                    <input  type="text" placeholder="userName" name="username" required class="form-control"><br></br>
                    <input  type="password" placeholder="password" name="password" minlength="6" maxlength="9"  class="form-control" required><br></br>
                    <input  type="email" placeholder="email_id" name="email"  class="form-control" required><br></br>
               
            </div>
            <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-primary btn-block" >Sign up</button><br>
                <button type="button" class="btn btn-default" data-dismiss="modal" >close</button>
                 </div>
            </form>
      </div>
     
    </div>

  </div>
</div>
 



<!--lognin modal-->
<div id="myModa2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><img src="signup.jpg">login</h4>
      </div>
      <div class="modal-body">
         <form action="login_receive.php" method="post" >
                                <div class="modal-body">

                    <input  type="text" placeholder="userName" name="username" required class="form-control"><br></br>
                    <input  type="password" placeholder="password" name="password" minlength="6" maxlength="9"  class="form-control" required><br></br>
                   
               
            </div>
            <div class="modal-footer">
                <button type="submit" name="submit1" class="btn btn-primary btn-block" >Login</button><br>
                <button type="button" class="btn btn-default" data-dismiss="modal" >close</button>
                 </div>
            </form>
      </div>
     
    </div>

  </div>
</div>
              
            
               <li><a href="#contact" style="color:white;font-family: serif;font-size: 1.2em">Contact</a></li>
            </ul>
        
        
    </div>
  </div>
</nav>
   <?php
if(!empty($_GET['message'])) {
    $message = $_GET['message'];
    
  if(strcmp($message,"'you need to login first'")==0){
        ?>
    <script>window.alert("you need to login first");</script>
    <?php
    }else if(strcmp($message,"'you have successfully login'")==0){
        ?>
    
        <script>window.alert("you have successfully login");</script>
        <?php
    }
    else if(strcmp($message,"'you have already logedin'")==0){
        ?>
    
        <script>window.alert("you have already logedin");</script>
        <?php  
}  else if(strcmp($message,"'Logout Successfully '")==0){
    ?>
        <script>window.alert("Logout Successfully ");</script>
        <?php
}
}
   ?>
 
       
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
           <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img  src="Picture1.jpg" alt="1ST" style="width:100%;" height="40%">
          </div>
    
          <div class="item">
            <img src="Picture3.jpg" alt="2ND" style="width:100%;" height="40%">
          </div>

          <div class="item">
            <img src="Picture2.jpg" alt="2ND" style="width:100%;" height="40%">
          </div>
        
          <div class="item">
            <img height=40% src="Picture4.jpg" alt="3RD" style="width:100%;">
          </div>
        </div>
    
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      

       <div class="bgimg-1">
        <div>
          <img  class="img-circle" align="left" style="padding: 50px; margin-bottom: 100px; max-height: 25%; max-width: 25%" src="p.jpg">
          <br><br>
          <h2  class="textwp" align="left"><font color=#000066 style="background-color: #b3b3ff; font-family: TimesNewRoman" ><strong>Dr A M Rawani <br><h3 align="right"><font color="white"> Director, NIT Raipur</font></h3></strong></font></h2>
          <br><br><br><br>
          <p style="padding: 20px; font-family: TimesNewRoman" color:#ff0000;><font size="4px" color="white"> Dr. Rawani is a Professor in Mechanical Engineering and joined as Director of National Institute of Technology Raipur on 27th Oct 2017. He has received his M.Tech. in Industrial Engineering and Management from I.I.T. Kharagpur and Ph.D. in Strategic Management from I.I.T. Delhi. He has about 35 years of teaching/research and administrative experience of educational institutes. Prior to his joining as Director, he has shouldered many senior level administrative positions including Dean (Academic), Dean (Administration), Dean (Research & Consultancy), Dean (Faculty Welfare) and Head of department at NIT Raipur.</font></p>

        </div>
        <div>
          <img  class="img-circle" align="right" style="padding: 50px; margin-bottom: 100px; max-height: 25%; max-width: 25%" src="Prof.Pdiwan.jpg">
          <br><br>
          <h2  class="textwp1" text-align="right"><font color=#000066 style="background-color: #b3b3ff; font-family: TimesNewRoman" ><strong>Dr. Prabhat Diwan <br><h3 align="right"><font color="white"> Dean, Students’ Welfare</font></h3></strong></font></h2><br><br><br>
          
          <br>
          <p style="padding: 20px; font-family: TimesNewRoman"><font size="4px" color="white">
            Dean Students Welfare office covers all the facets of students’ life at NIT Raipur and work towards the welfare and well-being of the student community in the campus. It does so by organizing welfare activities from time to time and look into the other aspects of student welfare. It coordinates various activities through different committees and clubs like Cultural Committee, Literary Committee, Technical committee, Sports Committee, E-Cell, Click Club, Raaga, Sahyog, Go-Green Club. 
            It also coordinates with the matters of Hostel Warden Office and also look after scholarships given to the students and student’s Discipline, inside and outside the campus.<br><br><br><br>
          </p>
        </div>
      <div class="caption">

            <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">
              
            </span>
          </div>
        </div>
<div style="position:relative;">
<div style="color: #777;background-color:white;text-align:center;padding:5px 8px;text-align: justify;">
  <div style="position:relative;">
  <div style="color:#ddd;background-color:#fff;text-align:center;padding:5px 8px;text-align: justify; ">
      
    <div class="row">
      <div style=" background-image: url(images2.jfif);background-size: contain; overflow:scroll; border-color: white; border-width:20px; border-style: solid;color: white;font-family: serif;"class="column" >
        <h2><center>EVENTS</center></h2>
          <marquee behavior="scroll" direction="up"><h3 style="color:yellow"><hr><center> 4 Mar 2015</center><hr></h3>
          Obituary-Prof .M L Verma(1966/Mechanical Engg)
        
          <h3 style="color:yellow"><hr><center style="line-height: 1px"></center>29 May 2017<hr></h3>
           Ratulations Alumni Achievement-Mr Santosh Sharma
         
          <h3 style="color:yellow"><hr><center style="line-height: 1px"></center>16 Sep 2016<hr></h3>
         Congratulations! Alumni Achievements - Mr. Salil Rai Shrivastava (1985/Civil)
         
          <h3 style="color:yellow" ><hr><center style="line-height: 1px">14 Jul 2015</center><hr></h3>
        Congratulations - Alumni Achievements (Ajay Ghade)
         
         <h3 style="color:yellow"><hr><center style="line-height: 1px">09 May 2014</center><hr></h3>
          Shri Gauri Shankar Agrawal - A Distinguished Alumnus In Public Office
         </marquee>
        </div>
      <div class="column" style=" background-image: url(images2.jfif);background-size: contain; overflow:scroll; border-color: white; border-width:20px; border-style: solid;color: white;font-family: serif;">
        <h2><center>LATEST NEWS</center></h2>
        <marquee behavior="scroll" direction="up"><h3 style="color:yellow"><hr><center> 4 Mar 2015</center><hr></h3>
          Obituary-Prof .M L Verma(1966/Mechanical Engg)
        
          <h3 style="color:yellow"><hr><center style="line-height: 1px"></center>29 May 2017<hr></h3>
           Ratulations Alumni Achievement-Mr Santosh Sharma
         
          <h3 style="color:yellow"><hr><center style="line-height: 1px"></center>16 Sep 2016<hr></h3>
         Congratulations! Alumni Achievements - Mr. Salil Rai Shrivastava (1985/Civil)
         
          <h3 style="color:yellow" ><hr><center style="line-height: 1px">14 Jul 2015</center><hr></h3>
        Congratulations - Alumni Achievements (Ajay Ghade)
         
         <h3 style="color:yellow"><hr><center style="line-height: 1px">09 May 2014</center><hr></h3>
          Shri Gauri Shankar Agrawal - A Distinguished Alumnus In Public Office
         </marquee>
        
      </div>
       <div class="column" style=" background-image: url(images2.jfif);background-size: contain; overflow:scroll; border-color: white; border-width:20px; border-style: solid;color: white;font-family: serif;">
        <h2><center>ACHIEVEMENT</center></h2>
         <marquee behavior="scroll" direction="up"><h3 style="color:yellow"><hr><center> 4 Mar 2015</center><hr></h3>
          Obituary-Prof .M L Verma(1966/Mechanical Engg)
        
          <h3 style="color:yellow"><hr><center style="line-height: 1px"></center>29 May 2017<hr></h3>
           Ratulations Alumni Achievement-Mr Santosh Sharma
         
          <h3 style="color:yellow"><hr><center style="line-height: 1px"></center>16 Sep 2016<hr></h3>
         Congratulations! Alumni Achievements - Mr. Salil Rai Shrivastava (1985/Civil)
         
          <h3 style="color:yellow" ><hr><center style="line-height: 1px">14 Jul 2015</center><hr></h3>
        Congratulations - Alumni Achievements (Ajay Ghade)
         
         <h3 style="color:yellow"><hr><center style="line-height: 1px">09 May 2014</center><hr></h3>
          Shri Gauri Shankar Agrawal - A Distinguished Alumnus In Public Office
         </marquee>
      </div>
    </div>
  </div>
</div>
</div>

</div>



<div class="bgimg-3" id="contact">
    <div class="caption">
        <span class="border" style="background-color:transparent;font-size:25px;color:#ffffcc3 ;opacity: 1;font-family: serif;text-shadow: 2px 2px #FF0000;"><h1><b>The best
                    way a mentor can prepare another leader is to expose him or her to other great people.</b></h1></span>
    </div>
</div>
<div>
<div style="position:relative;">
  <div style="color:#ddd; background-color:#282E34; text-align:center; padding:5%; padding-bottom: 0px; text-align: justify;">
    <div class="row">
      <div class="column1" style="background-color:#282E34;">
        <h2>ALUMNI WEB PORTAL</h2>
        <img style="height: 80%; width: 50%;" src="logo.png">
        
      </div>
      
      <div align="right" class="column1" style="background-color:#282E34;">
        <p align="centre">
          Alumni Association of GEC-NIT Raipur<br>
          National Institute of Technology, Raipur<br>
          G.E. Road, Raipur<br>
          Chhatisgarh - 492010<br>
          India <br>
          secretary@gecnitrralumni.org <br>
          +91 771 225 3819 
        </p>
      </div>
      </div>
    
<hr>
<div style="background-color: #4d4d4d; padding-bottom: 0px;">
  <h4><center> Follow Us on </center></h4><center>
  <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-google"></a>
  <a href="#" class="fa fa-linkedin"></a>
  <a href="#" class="fa fa-youtube"></a>
  <a href="#" class="fa fa-instagram"></a></center></div>

</div>
</div>
</div>

</body>
</html>