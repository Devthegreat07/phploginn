<?php 
    include("connection2.php");
    include("signup.php")
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

    <title>Bootstrap demo</title>
  </head>
  <body>
      <div id="form">
            <h1 id="heading">SignUp </h1><br>
            <form name="form" action="signup.php" method="POST">
                <input type="text" id="user" name="user" placeholder="Enter Username" required></br></br>
                <input type="email" id="email" name="email" placeholder="Enter Email" required></br></br>
                <input type="password" id="pass" name="pass" placeholder="Create Password" required></br></br>
                <input type="password" id="cpass" name="cpass" placeholder="Retype Password" required></br></br>
                <input type="submit" id="btn" value="SignUp" name = "submit"/>
            </form>
      </div>
  </body>
</html>
