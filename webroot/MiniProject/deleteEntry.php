<?php
    session_start();
    include("config.php");
    echo $ID = $_POST["ID"];   

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $sql = "DELETE FROM POSTS WHERE id='".$ID."'";
		if ($conn->query($sql) === TRUE) {
            header('Location: viewBlog.php');
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();   
	}
?>