<?php 
    session_start();
    include("config.php");
    $email = $_POST['email'];
	$password = $_POST['password'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$sql = mysqli_query($conn,"SELECT username, email, password FROM USERS WHERE email = '".$email."' AND  password = '".$password."'");


        if(mysqli_num_rows($sql) > 0 )
        { 
            $_SESSION["login"] = "1";
            $row = mysqli_fetch_assoc($sql);
            $_SESSION["username"] = $row['username'];
            header('Location: index.php');
        }
        else
        {
            header("location: login.html?err=1");
        }
		$conn->close();
	}
?> 
