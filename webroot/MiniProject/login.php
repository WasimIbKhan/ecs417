<?php 
    session_start();
    echo $_SERVER['PHP_SELF'];
    $email = $_POST['email'];
	$password = $_POST['password'];

    $dbhost = getenv("MYSQL_SERVICE_HOST");
    $dbport = getenv("MYSQL_SERVICE_PORT");
    $dbuser = getenv("DATABASE_USER");
    $dbpwd = getenv("DATABASE_PASSWORD");
    $dbname = getenv("DATABASE_NAME");
    // Creates connection
    $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
    // Checks connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$sql = mysqli_query($conn,"SELECT email, password FROM USERS WHERE email = '".$email."' AND  password = '".$password."'");


        if(mysqli_num_rows($sql) > 0 )
        { 
            $_SESSION["login"] = "1";
            header('Location: index.php');
        }
        else
        {
            header("location: login.html?err=1");
        }
		$conn->close();
	}
?> 
