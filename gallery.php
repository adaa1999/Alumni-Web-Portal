<!DOCTYPE html>
<?php
include 'main_header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Anaheim);

*{
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
    box-sizing: border-box;
}
*:before,
*:after{
    box-sizing: border-box;
}
html,
body{
    min-height: 100%;
}

h1{
    text-align: center;
    display: table;
    margin: 5% auto 0;
    text-transform: uppercase;
    font-family: 'Anaheim', sans-serif;
    font-size: 4em;
    font-weight: 400;
    text-shadow: 0 1px white, 0 2px black;
}
.container{
    margin: 4% auto;
    width: 210px;
    height: 140px;
    position: relative;
    perspective: 1000px;
}
#carousel{
    width: 100%;
    height: 100%;
    position: absolute;
    transform-style: preserve-3d;
    animation: rotation 20s infinite linear;
}
#carousel:hover{
    animation-play-state: paused;
}
#carousel figure{
    display: block;
    position: absolute;
    width: 300px;
    height: 200px;
    left: 10px;
    top: 10px;
    background: black;
    overflow: hidden;
    border: solid 5px black;
}
#carousel figure:nth-child(1){transform: rotateY(0deg) translateZ(450px);}
#carousel figure:nth-child(2) { transform: rotateY(40deg) translateZ(450px);}
#carousel figure:nth-child(3) { transform: rotateY(80deg) translateZ(450px);}
#carousel figure:nth-child(4) { transform: rotateY(120deg) translateZ(450px);}
#carousel figure:nth-child(5) { transform: rotateY(160deg) translateZ(450px);}
#carousel figure:nth-child(6) {transform: rotateY(200deg) translateZ(450px);}
#carousel figure:nth-child(7) { transform: rotateY(240deg) translateZ(450px);}
#carousel figure:nth-child(8) { transform: rotateY(280deg) translateZ(450px);}
#carousel figure:nth-child(9) { transform: rotateY(320deg) translateZ(450px);}


img{
    -webkit-filter: grayscale(1);
    cursor: pointer;
    transition: all .5s ease;
}
img:hover{
    -webkit-filter: grayscale(0);
  transform: scale(1.2,1.2);
}

@keyframes rotation{
    from{
        transform: rotateY(0deg);
    }
    to{
        transform: rotateY(360deg);
    }
}
</style>
<body background="download (3).jpg">
    <div class="container-fluid row" style="color: white;background-color: maroon; font-size: 4em;text-align: center;height: 25%;padding-top:3%;font-family: serif"> <h>GALLERY</h1></div>
       
       
        <br><br>
<h1>Biotechnology</h1>
  <div class="container">
        <div id="carousel">
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="B.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="C.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="D.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
        </div>
    </div>

<br><br><br><br><br><br>
<h1>Computer Science and Engineering</h1>

<br>
  <div class="container">
        <div id="carousel">
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="B.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="C.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="D.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
        </div>
    </div>

<br><br><br><br><br><br>
<h1>Mechanical</h1>

<br>
  <div class="container">
        <div id="carousel">
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="B.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="C.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="D.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
        </div>
    </div>

<br><br><br><br><br><br>
<h1>Information Technology</h1>

<br>
  <div class="container">
        <div id="carousel">
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="B.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="C.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="D.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
        </div>
    </div>

<br><br><br><br><br><br>
<h1>Electrical</h1>

<br>
  <div class="container">
        <div id="carousel">
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="B.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="C.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="D.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
            <figure><img height="100%" width="100%" src="A.jpg" alt=""></figure>
        </div>
    </div>

<br><br><br><br><br><br>
<br><br><br><br><br><br>
</body>
</html>









