<?php 
  get_header();
  require get_template_directory() . '/inc/section_vars.php';
?>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Resume</title>
    <meta name="Justin Liu" content="Justin Liu">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar">
        <a class="nav-name" href="./index.html">Justin Liu</a>
        <ul class="link">
            <li><a class="nav-link" href="index.html#about">About</a></li>
            <li><a class="nav-link" href="index.html#projects">Projects</a></li>
            <li><a class="nav-link" href="index.html#experience">Experience</a></li>
            <!-- <li><a class="nav-link" href="#contact">Contact</a></li> -->
            <li><a class="nav-link" id="resume_text" href="./resume.html">Resume</a></li>
        </ul>
        <!-- for mobile version only -->
        <button class="hamburger">Menu</button>
    </nav>

    <iframe id=resume src="data/Resume.pdf" title="Resume" width="100%" height="1200rem">
    </iframe>



    <!-- <script src="scripts.js"></script> -->

</body>
</html>

<?php get_footer(); ?>
