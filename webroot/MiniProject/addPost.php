<?php 
    session_start();
    $date = date('Y-m-d H:i:s');
    $dateAndTime = date('jS F Y, g:i T');
	$title = $_POST['title'];
    $bodyText = $_POST['bodyText'];

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
        $sql = "INSERT INTO POSTS (dateAndTime, date, title, bodyText)
        VALUES ('$dateAndTime ',  '$date', '$title', '$bodyText')";
		if ($conn->query($sql) === TRUE) {
            header('Location: viewBlog.php');
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
            
        
	}
?> 
