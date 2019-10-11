<?php

session_start();

require_once 'token.php';

//credentials are hardcorded for the demonstration purpose.  Do not hardcode, get it from the database
const username = 'admin';
const password = 'admin123';

if (isset($_POST['username']) && isset($_POST['password'])) //when form submitted
{
  if ($_POST['username'] === username && $_POST['password'] === password)
  {
    $_SESSION['username'] = $_POST['username']; //write username to server storage
    setcookie("session", session_id());
    Token::generate_token(session_id());
    header('Location: ./counter.php'); //redirect to main
  }
  else
  {
    echo "<script>alert('Check username and password');</script>";
    echo "<noscript>Check username and password</noscript>";
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="styles.css">


    <title>Assignment 1</title>
  </head>
  <body>
    <div class="box">
      <h2>Login</h2>
      <form method="post">
        <h3> Username </h3>
            <input type="text" name="username" placeholder="Type Your Username"><br>
        <h3> Password </h3>
            <input type="password" name="password" placeholder="Type Your Password"><br>

            <input type="Submit" value="Login">
        
      </form>
    
    </div>

    

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>