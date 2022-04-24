<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="css/form.css" type="text/css" />
</head>

<body>
    <div class = "container">
        <div class = "navbar">
            <img src ="images/Buslogo3.png" class="logo" style="width:200px;height:200px";>
            <nav>
                <ul>
                  <li><a href="Home.php">Home</a></li>
                  <li><a href="placesToVisit.html">Places to visit</a></li>
                   <li><a href="Booking.html">Book Now</a></li>
                  <li><a href="login.html">Login</a></li>
                  <li><a href="register.html">Register</a></li>
                    
                    
                  
              
                    
                 
                </ul>
            </nav> 
        </div> 
	 
  <form method="post" action="login.php">
  
  <h4 class="form_title">Login Page</h4>

<label>
  <input type="text" class="input" name="username" id="userid" placeholder="USERNAME" />

  <div class="line-box">
	<div class="line"></div>
  </div>
</label>
<label>
  <input type="password" class="input" name="password" id="pass" placeholder="password" />



  <div class="line-box">

	<div class="line"></div>
  </div>
</label>
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		 <a href="register.php">kliko ketu per te hapur nje llogari</a>
  	</p>
  </form>
</body>
<script src="js/login.js"></script>
</html>