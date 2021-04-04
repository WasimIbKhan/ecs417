<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>WelcomePage</title>

  

</head>

<body>
   <?php 
      session_start ();
      if(!isset($_SESSION["login"]))

         header("Location: exercise7.html"); 
   ?>
   <h1>Complete</h1>
   <a href="logout.php"><h2><b color="red">Logout</b></h2>

</body>
</html>
