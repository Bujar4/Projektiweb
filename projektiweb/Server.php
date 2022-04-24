<?php
session_start();

$username = "";
$email    = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'projektiweb');

if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  
  if (empty($username)) { array_push($errors, "Ju lutem shtoni nje Username"); }
  if (empty($email)) { array_push($errors, "Ju lutem shtoni nje Email "); }
  if (empty($password_1)) { array_push($errors, "Ju lutem shtoni nje password"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Password-at nuk perputhen");
  }

 
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Ky Username egziston");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Ky email egziston");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: Home.php');
  }
}



if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Ju lutem shtoni username");
    }
    if (empty($password)) {
        array_push($errors, "Ju lutem shtoni password");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
        $results = mysqli_query($db, $query);
    
        if (mysqli_num_rows($results) == 1) { 
          $logged_in_user = mysqli_fetch_assoc($results);
          if ($logged_in_user['user_type'] == 'admin') {
    
            $_SESSION['user'] = $logged_in_user;
            $_SESSION['success']  = "You are now logged in";
            header('location: AdminHome.php');		  
          }else{
            $_SESSION['user'] = $logged_in_user;
            $_SESSION['success']  = "You are now logged in";
    
            header('location: Home.php');
          }
        }
     
        
    } 
    
}

  ?>


  