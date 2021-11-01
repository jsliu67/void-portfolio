<?php 
  get_header();
  require get_template_directory() . '/inc/section_vars.php';
?>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Justin Liu</title>
    <meta name="Justin Liu" content="Justin Liu">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<!-- <?php echo get_theme_mod($index_hero_img)?> -->
<body>
    <div class="hero" id="hero_box">
        <div id="hero_img" style="background: url(<?php echo get_theme_mod($index_hero_img)?>); background-repeat: no-repeat;
        background-size: cover;" class="top-section"></div>
        <!-- <img id="hero_img" src="data/justin_picture3.jpg" alt="Hero Picture"></img> -->
        <div id="hero_text">Hello! I’m Justin and I'm a sohpomore at UMich College of 
            Engineering majoring in Computer Science. </div>
    </div>

    <h2 class="headers" id="about">About Me</h2>
        <p id="aboutme_text">Some of my hobbies include drawing, exercising and making games. I’m currently a part of
            VOID tech consulting and MedLaunch at the University.
        </p>
    <h2 class="headers" id="projects">Projects</h2>
        <div class="project1">
            <div class="project1left">
                <p id="p1name">Two Player Tetris</p>
                <hr id="projectLine" size="7" width="90%" color="grey">  
                <p id="p1paragraph">A way to play the game Tetris as a team. Players cooperate on the same board and work to stay alive for as long as possible. Made with PyGame.</p>
                <p id="p1link"><a href=https://github.com/Jello15659/2PTetris>See more about this project</a></p>
            </div>
            <div class="project1right">
                <!-- <img src="2ptetris.png" alt="P1picture"></img> -->
                <div id="p1_picture" style="background: url(<?php echo get_theme_mod($index_project_img1)?>); background-repeat: no-repeat;
                background-size: cover;" class="top-section"></div>
            </div>
        </div>
        <!-- <div class="project2">
            <div class="project2left">
                <p id="p2name">Run Away From Your GPA</p>
                <hr id="projectLine" size="7" width="90%" color="grey">  
                <p id="p2paragraph">A fun little one level 2D platformer featuring my principal, the high school, the police station, and Taco Bell</p>
                <p id="p2link"><a href=https://github.com/Jello15659/RAFYGPA>See more about this project</a></p>
            </div>
            <div class="project2right">
                <img id="p2picture" src="data/tetrisclip.gif" alt="P2picture"></img>
            </div>
        </div> -->
    <h2 class="headers" id="experience">Experience</h2>
        <ul class="experience_list">
            <li class="exp1">
                <!-- <img id="exp1pic" src="data/exp1.png" alt="exp1pic"></img> -->
                <div id="exp1pic" style="background: url(<?php echo get_theme_mod($index_experience_img1)?>); background-repeat: no-repeat;
                background-size: cover;" class="top-section"></div>
                <p id="exp1text">Research assistant for the Michigan Intelligent Programming Lab. Currently running experiments for the optimization of SQL queries using program synthesis</p>
            </li>
            <li class="exp2">
                <!-- <img id="exp2pic" src="data/exp2.png" alt="exp2pic"></img> -->
                <div id="exp2pic" style="background: url(<?php echo get_theme_mod($index_experience_img2)?>); background-repeat: no-repeat;
                background-size: cover;" class="top-section"></div>
                <p id="exp2text">Data engineering intern at Atomic. Setup infrastructure and workflow orchestration with AWS and Prefect; Automated data ingestion with Python and SQL</p>
            </li>
            <li class="exp3">
                <!-- <img id="exp3pic" src="data/exp3.png" alt="exp3pic"></img> -->
                <div id="exp3pic" style="background: url(<?php echo get_theme_mod($index_experience_img3)?>); background-repeat: no-repeat;
                background-size: cover;" class="top-section"></div>
                <p id="exp3text">Taught an 8-week introductory course on Pygame (extension of the coding language Python) to children of ages 11-12</p>
            </li>
        </ul>
    <!-- <h2 class="headers" id="contact">Contact Me</h2>
        <p id="contactinfo">Email: jsliu@umich.edu</p> -->
    <p id="contactinfo">Email me at jsliu@umich.edu</p>

</body>
</html>

<?php get_footer(); ?>