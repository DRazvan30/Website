<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>PLAYSTATION 5</title>
    <link rel = "stylesheet" href="style_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="cls">
    <div class = "logo">
        <img src = "" width="0" height="0" ></img>
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

<form action="connect.php" method="post">
  

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <br>
    <input type="text" placeholder="Enter Username" name="username" required>
    <br>
    <label for="psw"><b>Password</b></label>
    <br>
    <input type="password" placeholder="Enter Password" name="password" required>
    <br>
   <input name="send" type="submit" value="Trimite"/>
    
  </div>

  
</form>


</body>
</html>