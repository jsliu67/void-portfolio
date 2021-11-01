<!-- If you have a navbar or html on the top of every page put it here -->
<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Example Website Title</title>
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <a class="nav-name" href="./index.html">Justin Liu</a>
            <ul class="link">
                <li><a class="nav-link" href="#about">About</a></li>
                <li><a class="nav-link" href="#projects">Projects</a></li>
                <li><a class="nav-link" href="#experience">Experience</a></li>
                <li><a class="nav-link" id="resume_text" href="./resume.html">Resume</a></li>
            </ul>
            <!-- for mobile version only -->
            <button class="hamburger">Menu</button>
        </nav>
    </div>
</body>