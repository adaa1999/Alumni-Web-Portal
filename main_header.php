<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body  background="download (3).jpg">
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
              <li><a href="mail.php" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-user"></span> Admin</a></li>
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
                <button type="submit" value="submit1" class="btn btn-primary btn-block" >Sign up</button><br>
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