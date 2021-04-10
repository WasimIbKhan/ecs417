<?php
// Start the session
session_start();
if(!isset($_SESSION["login"]))

         header("location: login.html"); 
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to My Homepage - Wasim Khan</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="alternate stylesheet" type="text/css" href="reset.css">
  </head>
  <body>
    <nav class ="TopNav">
      <a href="#About_Myself" class="name"><b>Wasim Khan</b></a>
      <a href="my_CV.html">Experience</a>
      <a href="#Education">Education</a>
      <a href="#skills">Skills</a>
      <a href="#Portfolio">Portfolio</a>
      <a href="#Contact">Contact</a>
      <a href="viewBlog.php">Blog</a>
      <a href="logout.php">Logout</a>
    </nav>
    <div id="container">
      <div id="main">
        <div>
          <h2 id="About_Myself">About Me</h2>
          <article>
            <aside>
              <p>
                My name is Wasim Khan. I am a Computer Science and Management Student at Queen Marys University
                I like reading and playing football. 
              </p>
            </aside>
            <figure>
              <img src="WasimKhan.jpg" width="400" height="300" id="wasimPicture"/>
              <figcaption>Wasim Khan</figcaption>
            </figure>
          </article>
        </div>
        <div id="Education">
          <section>
            <hr></hr>
            <h2 id="Education">Education and Qualifications</h2>
            <p><b>2011-2019</b> Central Foundation Boys School</p> 
            <p><b>2019-2021</b> Queen Marys University Of London </p>
          </section>
          <section>
            <hr></hr>
              <h2 id="Experience">Experience</h2>
              <h3><b>Tutor</b></h3>
              <p>I have been a tutor for childrens 6 to 14 for 4 years</p>
              <h3><b>Java Developer</b></h3>
              <p>I've made games with java of different types as well as apps</p>
              <h3><b>React Native Developer</b></h3>
              <p>I made an app using react native</p>
          </section>
          <section>
            <hr></hr>
            <hgroup>
              <h2 id="Portfolio">Portfolio</h2> 
              <h3><b>Games</b></h3>
              <a href="https://github.com/WasimIbKhan/My-Java-Games/tree/main/AdventureGame">Adventure Game</a>
            </hgroup> 
          </section>
          <hr></hr>
          <footer id="Contact">
            <h4>Contacts</h4>
            <p>Wasim Khan: <a>07551399658</a></p>
            <a href="mailto:hege@example.com">hege@example.com</a></p>
          </footer>
        </div>
      </div>
      <div id="left-side-bar">
          <div id="ResearchInterest">
            <p><b>Research Interests</b></p>
            <p>Fundementals Of Web Technology</p>
            <p>Macro Economics</p>
            <p>Psychology Of Individuation and Personas</p>
          </div>
          <div id="links">
            <p><a href="my_CV.html">CV</a></p>
            <p><a href="#skills">Skills</a></p>
            <p><a href="#My_Hobbies">Hobbies</a></p>
            <p><a href="#Links">Link</a></p>
          </div>
          <div id="skills">
            <p id="skillsTitle" class="greenTitle"><b>Top 3 Skills</b></p>
            <div class="listContainer">
              <div class="floatRight"><p>React Native</p></div>
              <div class="floatLeft"><img src="first.png"/></div>
              <div class="floatRight"><p>Java</p></div>
              <div class="floatLeft"><img src="second.png"/></div>
              <div class="floatRight"><p>HTML</p></div>
              <div class="floatLeft"><img src="third.png"/></div>
            </div>
          </div>
      </div>
      <div id="right-side-bar">
        <div id="hobbies">
          <h2 id="My_Hobbies"  class="greenTitle">Hobbies</h2>
          <div class="listContainer">
            <ul>
              <li>Reading literature, adventure, history, fantasy, classic books, manga and other medias</li>
              <li>Software Design</li>
              <li>Researching Human nature</li>
            </ul>
          </div>
        </div>
        <div id="Top5Movies">
          <h2 id="TOP5" class="greenTitle">My Top 5 Movies</h2>
          <div class="listContainer">
            <ul>
              <li>The Pianist</li>
              <li>Howls Moving Castle</li>
              <li>Schider's List</li>
              <li>The Dark Knight</li>
              <li>Princess Mononoke</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
   
  </body>
</html>
