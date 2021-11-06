<?php 
  get_header();
  require get_template_directory() . '/inc/section_vars.php';
?>

<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <iframe id=resume src="<?php echo get_template_directory_uri(); ?>/data/Resume.pdf" title="Resume" width="100%" height="1200rem">
    </iframe>



    <!-- <script src="scripts.js"></script> -->

</body>
</html>

<?php get_footer(); ?>
