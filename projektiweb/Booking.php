<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Booking.css">
    <title>Video-2</title>
</head>


<body class="main_bg">
    <div class = "navbar">
        <img src ="images/Buslogo3.png" class="logo" style="width:200px;height:200px";>
            <nav>
                <ul>
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="placesToVisit.html">Places to visit</a></li>
               
                    
                </ul>
            </nav> 
        </div> 
        <?php 
$fname    = "";
$email    = "";
$Pnr    = "";
$dtime   = "";
$sdate    = "";
$phone    = "";


$db = mysqli_connect('localhost', 'root', '', 'projektiweb');


if (isset($_POST['ticket_form'])) {
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $Pnr = mysqli_real_escape_string($db, $_POST['Pnr']);
    $dtime = mysqli_real_escape_string($db, $_POST['dtime']);
    $sdate = mysqli_real_escape_string($db, $_POST['sdate']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);



    $query = "INSERT INTO ticket (fname, email, Pnr, dtime, sdate, phone) 
              VALUES('$fname', '$email', '$Pnr', '$dtime', '$sdate', '$phone')";
    mysqli_query($db, $query);
  $_SESSION['fname'] = $fname;
  $_SESSION['success'] = "Ticketa juar eshte rezervuar";
  header('location: Home.php');
    
}

  ?>
    <div class="form">
        <div class="form-text">
            <h1><span><img src="images/art-1.png" alt=""></span>Book Now <span><img src="images/art-1.png" alt=""></span></h1>
            <p>Book today for the experience of a life-time.</p>
        </div>
        <div class="main-form">
  <form method="post" action="Booking.php">
        <div>
      <label for="fname" >Emri i plote</label>
      <input type="text" id="fname" name="fname" class="label" placeholder="Emri.." >
      </div>

      <div> 
      <label for="lname">EMAIL</label>
      <input type="text" id="email" name="email"  class="label" placeholder="email..">
      </div>

      <div>
      <label for="subject">Numri i personave</label>
      <input type="number" id="Pnr" name="pnr" class="label2" placeholder="Shkruaj.." >
      </div>

      <div>
      <label for="subject">Depart time</label>
      <input type="text" id="dtime"  name="dtime" class="label2" placeholder="Shkruaj.." >
      </div>

      <div>
      <label for="subject">set date</label>
      <input type="date" id="sdate" name="sdate" class="label" placeholder="Shkruaj.." ></textarea>
      </div>

      <div>
      <label for="subject">phone</label>
      <input type="number" id="phone" name="phone" class="label" placeholder="Shkruaj.." >
      </div>
      <input type="submit" value="Submit" name="ticket_form">
      <div class="input-group">




            </form>
        </div>
    </div>
</body>

</html>