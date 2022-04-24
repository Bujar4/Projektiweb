<?php include('server.php') ?>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register</title>
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
                      <li><a href="login.php">Login</a></li>
                      <li><a href="register.php">Register</a></li>
                    </ul>
                </nav> 
            </div> 
	
  <form method="post" action="register.php">
  
  <h4 class="form_title">Registration Page</h4>
    <label>
      <input type="text" class="input" name="email" id="emailId" placeholder="EMAIL" value="<?php echo $email; ?>" />
      <div class="line-box">

        <div class="line"></div>
      </div>
    </label>
    <label>
      <input type="text" class="input" name="username" id="userId" placeholder="USERNAME" value="<?php echo $username; ?>"/>

      <div class="line-box">
        <div class="line"></div>
      </div>
    </label>
    <label>
      <input type="password" class="input" name="password_1" id="pass1" placeholder="PASSWORD" />

      <div class="line-box">

        <div class="line"></div>

      </div>
    </label>
    <label>

      <input type="password" class="input" name="password_2" id="pass2" placeholder="CONFIRM PASSWORD" />

      <div class="line-box">

        <div class="line"></div>
      </div>
    </label>
  	  <button type="submit" class="btn" name="reg_user">Register</button>
		<p>
  		 <a href="login.php">Kliko ketu nese ke nje llogari</a>
  	</p>
  	</div>
  	
  </form>
</body>
<script src="js/register.js"></script>
</html>