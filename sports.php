<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>PLAYSTATION 5</title>
    <link rel = "stylesheet" href="style_sports.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="cls">
    <div class = "logo">
        <img src = "././img/l.jpg" width="80" height="70" ></img>
    </div>

    <nav role="navigation">
    <ul class="nav">
        <li><a href = "home.php"><i class="fa fa-home"></i> Home</a></li>
    
           
    
        <li>
            <a href = "#">
                <i class="fa fa-gamepad"></i> Games <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
            </a>
        
            <ul class = "dropdown">
                <li><a href = "action.php">Action</a></li>           
                <li><a href = "sports.php">Sports</a></li>
            </ul>
        </li>
        
        <li><a href = "login.php"><i class="fa fa-user"></i> Login</a></li>
    </ul>
    </nav>
</div>
<br>

<script> 
var myVideo = document.getElementById("video1"); 

function playpaused() { 
  if (myVideo.paused) 
    myVideo.play(); 
  else 
    myVideo.pause(); 
} 

</script> 

<div class = "scris">
        The best sports games for  Sony PS5
</div> 

<div class="fifa">
    <br><br>
    <h2>EA Sports Fifa 21</h2>

    <img src = "././img/rm.jpg" width="50%" height="70%" align ="right" ></img>

    <video id="video1"  width="40%" height="70%" align= "left">
        <source src="././img/fifa_trailer.mp4" type="video/mp4">
  
    </video>
    <br>
    <br>
    <br>
    <button class="play"  onclick="playpaused()">Play/Pause Trailer</button>
    <button class="y" onclick="window.open('https://altex.ro/fifa-21-ps5/cpd/JOCPS5FIFA21/?gclid=CjwKCAjwy42FBhB2EiwAJY0yQg0ArreC9kL-V_X46U-gLfMXNNpPH4XBqc4gZFz4aPtMb-scv6EXghoCY3sQAvD_BwE')">Buy now</button>  
</div>


<script> 
var myVideo = document.getElementById("video1"); 

function playpaused() { 
  if (myVideo.paused) 
    myVideo.play(); 
  else 
    myVideo.pause(); 
} 
</script> 

<br><br><br>
<hr size = "8"  width= "90%" align = "center" color = "black">
<br><br><br>

<div class = "nba">
    
    <h2>NBA 2k21</h2>

    <img src = "././img/nba.jpg" width="50%" height="70%" align ="right" ></img>
     <video id="video2"  width="40%" height="70%" align= "left">
        <source src="././img/nba_trailer.mp4" type="video/mp4">
    </video>
    <br>
    <br>
    <br>
    <button class="play"  onclick="playpause()">Play/Pause Trailer</button>
    <button class="y" onclick="window.open('https://altex.ro/fifa-21-ps5/cpd/JOCPS5FIFA21/?gclid=CjwKCAjwy42FBhB2EiwAJY0yQg0ArreC9kL-V_X46U-gLfMXNNpPH4XBqc4gZFz4aPtMb-scv6EXghoCY3sQAvD_BwE')">Buy now</button> 
    
    

</div>

<script> 
var myVideo1 = document.getElementById("video2"); 

function playpause() { 
  if (myVideo1.paused) 
    myVideo1.play(); 
  else 
    myVideo1.pause(); 
} 
</script> 

<div class="social">
    <h3>Find us on:</h3>
    <br>
    <a href = "https://www.facebook.com/playstation" target = " _blank"><img src = "././img/fb.jpg" ></a></img>
    <a href = "https://www.instagram.com/playstation" target = " _blank"><img src = "././img/insta.jpg" ></a></img>
</div>



</body>
</html>