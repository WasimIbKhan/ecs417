<?php 
    session_start();
    include("config.php");
    
	$title = $_POST['title'];
    $bodyText = $_POST['bodyText'];
    $dateTime = date("Y-m-d H:i:s", strtotime($_POST['dateTime']));

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $sql = "INSERT INTO POSTS (title, bodyText, dateTime)
        VALUES ('$title', '$bodyText', '$dateTime')";
		if ($conn->query($sql) === TRUE) {
            header('Location: viewBlog.php');
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
            
        
	}
?> 
