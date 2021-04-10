<?php
    session_start();
    include("config.php");
    echo $comment = $_POST['comment'];
    $username = $_SESSION["username"];
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $sql = "INSERT INTO COMMENTS (username, comment)
        VALUES ('$username', '$comment')";
		if ($conn->query($sql) === TRUE) {
            header('Location: viewBlog.php');
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
            
        
	}
   

?>