<?php
	$fname = $_POST['firstName'];
	$sname = $_POST['lastName'];
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
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$sql = "INSERT INTO TRIAL_USERS (firstName, lastName, email, password)
		VALUES ('$fname', '$sname', '$email', '$password')";
		if ($conn->query($sql) === TRUE) {
		//Your code
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
		}
	?>
