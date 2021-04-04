<?php 
session_start ();



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Blog</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link rel="alternate stylesheet" type="text/css" href="reset.css">
    </head>
    <body id="blog">
        <section class="form_blog">
            <h2>Add Blog</h2>
            <form class="blogbox" autocomplete="off" id="blogForm" method="POST" action="addPost.php">
                <input name="title" placeholder="title" type="text" id="title" required></input>
                <textarea name="bodyText" maxlength="500" form="blogForm"></textarea>
                <input id="blog" class="left" type="submit" value="Post" />
                <input id="blog" class="right" value="Close"/>
            </form> 
          </section>
    </body>
</html>
