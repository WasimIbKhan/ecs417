<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>Blog</title>
   <link rel="stylesheet" type="text/css" href="stylesheet.css">
   <link rel="alternate stylesheet" type="text/css" href="reset.css">
</head>
<?php
    session_start();
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
    $sql = mysqli_query($conn,"SELECT dateAndTime, date, title, bodyText  FROM POSTS");
    while($result = $sql->fetchArray(SQLITE3_ASSOC)) {
        echo '<aside>'. $result['dateAndTime'].'</aside>' ."\n";
        echo '<h1>'. $result['title'].'</h1>' ."\n";
        echo '<p>'. $result['bodyText'].'</p>' ."\n";
        echo "<hr>" ."\n"; 
    } 
    $conn->close();
	
    echo "<aside>2nd April 2021, 22:33 UTC</aside>";
    echo "<h1>The wondererful world of web programming</h1>"; 
    echo "<p>I enjoy developing web applications using HTML, CSS, Javascript, PHP and SQLite</p>";
    echo "<hr>"
    echo "<aside>2nd April 2021, 22:33 UTC</aside>";
    echo "<h1>The wondererful world of web programming</h1>";
    echo "<p>I enjoy developing web applications using HTML, CSS, Javascript, PHP and SQLite</p>";
    echo "<hr>"
    ?>
</html>
