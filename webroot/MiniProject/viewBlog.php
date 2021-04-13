<!DOCTYPE html>
<?php 
session_start ();
if(!isset($_SESSION["login"]))
	header("location:login.html");


?>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>Blog</title>
   <link rel="stylesheet" type="text/css" href="stylesheet.css">
   <link rel="alternate stylesheet" type="text/css" href="reset.css">

</head>
<body id="viewBlog">
<?php
    function sortByDate($t1, $t2){
        $datetime1 = strtotime($t1[2]);
        $datetime2 = strtotime($t2[2]);
        return $datetime1 - $datetime2;
    }
    include("config.php");
    $sql = "SELECT ID, title, bodyText, dateTime  FROM POSTS";
    $result = $conn->query($sql);

   $posts = array();

   while($row = $result->fetch_assoc())
        $posts[$row['ID']] = array($row['title'], $row['bodyText'], $row['dateTime']);
    $keys = array();
    while($element = current($posts)) {
        array_push($keys,key($posts));
        next($posts);
    }   
    usort($posts, 'sortByDate');
    ?>

    <div class="dropdown">
        <button class="dropbtn">Select Months</button>
        <div class="dropdown-content">
        <form id="selectMonth" method="post">
        <input name="month" id="monthSelected" type="hidden" value="ToBeChanged">
            <a href="javascript: submitform('January');">January</a>
            <a href="javascript: submitform('Febuary');">Febuary</a>
            <a href="javascript: submitform('March');">March</a>
            <a href="javascript: submitform('April');">April</a>
            <a href="javascript: submitform('May');">May</a>
            <a href="javascript: submitform('June');">June</a>
            <a href="javascript: submitform('July');">July</a>
            <a href="javascript: submitform('August');">August</a>
            <a href="javascript: submitform('September');">September</a>
            <a href="javascript: submitform('October');">October</a>
            <a href="javascript: submitform('November');">November</a>
            <a href="javascript: submitform('December');">December</a>
        </form>
        </div>
    </div>
    <button id="addEntryBtn"><a href="addEntry.php">Add Entry</a></button>
    <Br>
    <Br>
    <Br>
    <Br>
    <script>
        const submitform = (month) => {
            document.getElementById("monthSelected").setAttribute('value',month);
            document.forms["selectMonth"].submit();
        }
     
    </script>
    <?php foreach($posts as $i => $post) : ?>
        <?php if(!isset($_POST["month"])) : ?>
            <aside><?php echo $post[2] ?></aside>
            <?php if($_SESSION["username"] == 'Admin') : ?>
                <form  method="POST" action="deleteEntry.php">
                    <input name="ID" type="hidden" formmethod="post" formaction="deleteEntry.php" value="<?php echo $keys[$i] ?>"/>
                    <input type="submit" class="deleteItem" value="Delete"></input>
                </form>
            <?php endif; ?>
            <h1><?php echo$post[0]?></h1>
            <p><?php echo$post[1] ?></p>
            <hr>
        <?php elseif($_POST["month"] == date("F", strtotime($post[2]))) : ?>
            <aside><?php date("jS F Y, g:i \U\T\C",strtotime($post[2])); ?></aside>
            <?php if($_SESSION["username"] == 'Admin') : ?>
                <form  method="POST" action="deleteEntry.php">
                    <input name="ID" type="hidden" formmethod="post" formaction="deleteEntry.php" value="<?php echo $keys[$i] ?>"/>
                    <input type="submit" class="deleteItem" value="Delete"></input>
                </form>
            <?php endif; ?>
            <h1><?php echo$post[0]?></h1>
            <p><?php echo$post[1] ?></p>
            <hr>
        <?php endif; ?>
    <?php endforeach; ?>
    <h1 id="comments">Comments</h1>
    <form class="comments" autocomplete="off" id="commentsForm" method="POST" action="addComments.php">
        <textarea name="comment" id="commentTextArea" maxlength="500" form="commentsForm"></textarea>
        <input id="commentBtn" type="submit" formmethod="post" formaction="addComments.php" value="Comment" />
    </form> 
    <Br>
    <hr>
    <div id="commentSection">
        <?php
             include("config.php");
             $sql = "SELECT ID,username, comment FROM COMMENTS";
             $result = $conn->query($sql);
             ?>

             <?php while($row = $result->fetch_assoc()) : ?>
                    <?php if($_SESSION["username"] == 'Admin') : ?>
                        <form  method="POST" action="deleteComment.php">
                            <input name="ID" type="hidden" formmethod="post" formaction="deleteComment.php" value="<?php echo $row['ID'] ?>"/>
                            <input type="submit" class="deleteItem" value="Delete"></input>
                        </form>
                    <?php endif; ?>
                <h3><?php echo $row['username']; ?></h1>
                <p><?php echo $row['comment']; ?></p>
                <Br>
            
            <?php endwhile; ?>
        
    </div>
</body>

 
</html>
