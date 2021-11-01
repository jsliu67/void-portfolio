<?php

function register_primary_menu() {
  register_nav_menu( 'primary', 'Primary Menu' );
 }
add_action( 'after_setup_theme', 'register_primary_menu' );

/*
*
* Walker for the main menu 
*
*/
function add_arrow( $output, $item, $depth, $args ){
  //Only add class to 'top level' items on the 'primary' menu.
  if('primary' == $args->theme_location && $depth === 0 ){
      if (in_array("menu-item-has-children", $item->classes)) {
          $new_output = '<div class="sub-wrap">' . 
                          $output . 
                        '<i class="nav-icon fas fa-chevron-down down-icon" aria-hidden="true"></i></div>';
          return $new_output;
      }
  }
  return $output;
}
add_filter( 'walker_nav_menu_start_el', 'add_arrow',10,4);

// Example of how to use a repeatable box

function example_repeatable_customizer($wp_customize) {
  require 'section_vars.php';  
  require_once 'controller.php';  
  
  $wp_customize->add_section($example_section, array(
    'title' => 'Example Repeaters',
  ));
  
  $wp_customize->add_setting(
    $example_repeater,
    array(
        'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
        'transport' => 'refresh',
    ) );

  $wp_customize->add_control(
      new Onepress_Customize_Repeatable_Control(
          $wp_customize,
          $example_repeater,
          array(
              'label' 		=> esc_html__('Example Q & A Repeater'),
              'description'   => '',
              'section'       => $example_section,
              'live_title_id' => 'some_quote',
              'title_format'  => esc_html__('[live_title]'), // [live_title]
              'max_item'      => 10, // Maximum item can add
              'limited_msg' 	=> wp_kses_post( __( 'Max items added' ) ),
              'fields'    => array(
                  'some_quote'  => array(
                      'title' => esc_html__('Text'),
                      'type'  =>'text',
                  ),
                  'some_image' => array(
                    'title' => esc_html__('Image'),
                    'type'  =>'media',
                ),
              ),
          )
      )
  );
}
add_action( 'customize_register', 'example_repeatable_customizer' );

function home_customizer($wp_customize) {
  require 'section_vars.php';
  $wp_customize->add_section($home_section, array(
    'title' => 'Testing Home Page',
  ));

  $wp_customize->add_setting($home_top_vid, array(
    'default' => 'https://www.youtube.com/embed/A0Wyx-OOX4A',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control($home_top_vid, array(
    'label' => 'Top Video Embed',
    'section' => $home_section,
  ));

  $wp_customize->add_setting($home_top_img);
  $wp_customize->add_control( new WP_Customize_Image_Control( 
      $wp_customize, 
      $home_top_img, 
      array(
          'label' => 'Top Image',
          'section' => $home_section
      )
  ));
  // Top Desc
  $wp_customize->add_setting($home_top_desc);
  $wp_customize->add_control($home_top_desc, array(
      'label' => 'Top Description',
      'section' => $home_section,
      'type' => 'textarea'
  ));
}
add_action( 'customize_register', 'home_customizer' );


// Fares section
function index_customizer($wp_customize) {
  require 'section_vars.php';
  $wp_customize->add_panel($index_panel,
  array(
     'title' => ( 'Index' ),
     'description' => esc_html__( 'Adjust index sections.' ), // Include html tags such as 
     'priority' => 160, // Not typically needed. Default is 160
     'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
     'theme_supports' => '', // Rarely needed
     'active_callback' => '', // Rarely needed
  ));
  // List of sections
  $wp_customize->add_section($index_top, array(
    'title' => 'Top',
    'panel' => $index_panel,
  ));
  $wp_customize->add_section($index_projects, array(
    'title' => 'Projects',
    'panel' => $index_panel,
  ));
  $wp_customize->add_section($index_experience, array(
    'title' => 'Experience',
    'panel' => $index_panel,
  ));
  // Top section
  $wp_customize->add_setting($index_hero_img, array(
    'default' => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'esc_url_raw'
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $index_hero_img,
    array(
    'label' => __( 'Top Image' ),
    'description' => esc_html__( 'Main image of the home page' ),
    'section' => $index_top,
    'button_labels' => array( // Optional.
        'select' => __( 'Select Image' ),
        'change' => __( 'Change Image' ),
        'remove' => __( 'Remove' ),
        'default' => __( 'Default' ),
        'placeholder' => __( 'No image selected' ),
        'frame_title' => __( 'Select Image' ),
        'frame_button' => __( 'Choose Image' ),
    )
  )));
  // Projects
  $wp_customize->add_setting($index_project_img1, array(
    'default' => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'esc_url_raw'
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $index_project_img1,
    array(
    'label' => __( 'Projects Image #1' ),
    'description' => esc_html__( 'Project experience 1' ),
    'section' => $index_projects,
    'button_labels' => array( // Optional.
        'select' => __( 'Select Image' ),
        'change' => __( 'Change Image' ),
        'remove' => __( 'Remove' ),
        'default' => __( 'Default' ),
        'placeholder' => __( 'No image selected' ),
        'frame_title' => __( 'Select Image' ),
        'frame_button' => __( 'Choose Image' ),
    )
  )));
  // Experience
  $wp_customize->add_setting($index_experience_img1, array(
    'default' => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'esc_url_raw'
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $index_experience_img1,
    array(
    'label' => __( 'Experience Image #1' ),
    'description' => esc_html__( 'Experience 1' ),
    'section' => $index_experience,
    'button_labels' => array( // Optional.
        'select' => __( 'Select Image' ),
        'change' => __( 'Change Image' ),
        'remove' => __( 'Remove' ),
        'default' => __( 'Default' ),
        'placeholder' => __( 'No image selected' ),
        'frame_title' => __( 'Select Image' ),
        'frame_button' => __( 'Choose Image' ),
    )
  )));
  $wp_customize->add_setting($index_experience_img2, array(
    'default' => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'esc_url_raw'
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $index_experience_img2,
    array(
    'label' => __( 'Experience Image #2' ),
    'description' => esc_html__( 'Experience 2' ),
    'section' => $index_experience,
    'button_labels' => array( // Optional.
        'select' => __( 'Select Image' ),
        'change' => __( 'Change Image' ),
        'remove' => __( 'Remove' ),
        'default' => __( 'Default' ),
        'placeholder' => __( 'No image selected' ),
        'frame_title' => __( 'Select Image' ),
        'frame_button' => __( 'Choose Image' ),
    )
  )));
  $wp_customize->add_setting($index_experience_img3, array(
    'default' => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'esc_url_raw'
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $index_experience_img3,
    array(
    'label' => __( 'Experience Image #3' ),
    'description' => esc_html__( 'Experience 3' ),
    'section' => $index_experience,
    'button_labels' => array( // Optional.
        'select' => __( 'Select Image' ),
        'change' => __( 'Change Image' ),
        'remove' => __( 'Remove' ),
        'default' => __( 'Default' ),
        'placeholder' => __( 'No image selected' ),
        'frame_title' => __( 'Select Image' ),
        'frame_button' => __( 'Choose Image' ),
    )
  )));
}
add_action( 'customize_register', 'index_customizer' );