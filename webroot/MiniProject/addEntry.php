<html></html>

<?php 
session_start ();
if(!isset($_SESSION["login"]))
	header("location:login.html");


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Blog</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link rel="alternate stylesheet" type="text/css" href="reset.css">
        <script type="text/javascript" src="addEntry.js"></script>  
    </head>

    <body id="blog">
        <section class="form_blog">
            <h2>Add Blog</h2>
            <form class="blogbox" autocomplete="off" id="blogForm" method="POST" action="addPost.php" onsubmit="onSubmit();">
                <input name="title" placeholder="title" type="text" id="title" required></input>
                <textarea name="bodyText" maxlength="500" form="blogForm" id="bodyText" required></textarea>
                <input name="dateTime" id="dateAndTime" type="datetime-local" class="left">
                <div>
                    <input id="blog" class="left" type="submit" value="Post" />
                    <input id="blog" class="right" value="Clear" onclick="eraseText();"/>
                </div>
            </form> 
          </section>
    </body>
</html>
