<?php 
  get_header();
  require get_template_directory() . '/inc/section_vars.php';
?>
 <script type="text/javascript" src="js/expandable-form.js"></script>

<?php if (get_theme_mod($home_top_img)) { ?>
  <img 
    src="<?php echo get_theme_mod($home_top_img) ?>" 
    alt=""
  >
<?php } ?>

<?php if (get_theme_mod($home_top_desc)) { ?>
  <h4>
    <?php echo get_theme_mod($home_top_desc) ?>
  </h4>
<?php } ?>
<script src="js/expandable-form.js"></script>
<h1 class="firstword">The Front Page</h1>

<div id="descriptive-wrapper">
   <div class="descriptive-button-content-wrapper">
       <button class="descriptive-button">
           Show the content below!
       </button>
       <div class="descriptive-content">
           This is the content we want to show
       </div>
   </div>
   <div class="descriptive-button-content-wrapper">
       <button class="descriptive-button">
           Show the content below!
       </button>
       <div class="descriptive-content">
           This is the content we want to show
       </div>
   </div>
</div>

<?php echo do_shortcode("[forminator_form id='30']") ?>

<!-- Example with default video if $home_top_vid isn't set -->
<iframe 
  class="yt-vid" 
  src="<?php echo get_theme_mod($home_top_vid, 'https://www.youtube.com/embed/A0Wyx-OOX4A'); ?>" 
  frameborder="0" 
  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
</iframe>


<?php get_footer(); ?>
