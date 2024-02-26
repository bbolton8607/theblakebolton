<?php

// Creates the Menus
function gymfitness_menus() {
    register_nav_menus( array(
        'main-menu' => 'Main Menu'
    ) );
}
add_action('init', 'gymfitness_menus' ); 

// Stylesheets and JS Files
function blakebolton_files() {
    // CSS FILES
    // Main Stylesheet
    wp_enqueue_style('blakebolton_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('blakebolton_extra_styles', get_theme_file_uri('/build/index.css'));

    // Google font
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Nunito&display=swap', array(), '1.0.0' );
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap', array(), '1.0.0' );

    // SPLIDE
    wp_enqueue_style('splide-css', get_theme_file_uri() . '/css/splide.min.css', array(), '2.4.20' );

    //FONTAWESOME
    wp_enqueue_style('fontawesome', get_theme_file_uri() . '/css/fontawesome.scss', array(), '5.15.4' );

    // JS FILES
    // SCRIPTS.JS
    wp_enqueue_script('scripts', get_theme_file_uri() . '/build/index.js', array('jquery'), '1.0.0', true );


    wp_localize_script('scripts', 'scriptsData', array(
        'root_url' => get_site_url(),
        'nonce' => wp_create_nonce('wp_rest')
      ));

}
add_action('wp_enqueue_scripts', 'blakebolton_files');

// Enable Feature images and other stuff
function blakebolton_setup() {

    // Register new image size
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('box', 400, 375, true);
    add_image_size('mediumSize', 700, 400, true );
    add_image_size('blog', 966, 644, true);
    add_image_size('portfolio', 400, 200, true);
    add_image_size('testimonials', 60, 60, true);

    // Add featured image
    add_theme_support('post-thumbnails');

    // SEO Titles
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'blakebolton_setup'); // When the theme is activated and ready!

/** CONTACT FORM FUNCTION */
function submit_contact_form() {
    session_start();
    if ( ! isset( $_POST['contact_form_nonce'] ) || ! wp_verify_nonce( $_POST['contact_form_nonce'], 'submit_contact_form' ) ) {
        wp_die( 'Sorry, your nonce did not verify.' );
    }

    $name = sanitize_text_field( $_POST['name'] );
    $email = sanitize_email( $_POST['email'] );
    $message = sanitize_textarea_field( $_POST['message'] );

    $errors = array();

    if ( empty( $name ) ) {
        $errors[] = "Name is required";
    }

    if ( empty( $email ) ) {
        $errors[] = "Email is required";
    } elseif ( ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        $errors[] = "Invalid email format";
    }

    if ( empty( $message ) ) {
        $errors[] = "Message is required";
    }

    if (empty($errors)) {
        $to = "bbolton8607@gmail.com";
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\nMessage: $message";

        mail($to, $subject, $body);

        $_SESSION['status'] = 'Thank you! Your form has been submitted!';
        header("Location: /");
        exit;
    } else {
        foreach ($errors as $error) {
            echo "$error<br>";
        }
    }
}
add_action( 'admin_post_nopriv_submit_contact_form', 'submit_contact_form' );
add_action( 'admin_post_submit_contact_form', 'submit_contact_form' );

/** SECTION HEADER FUNCTION */

function section_header($title) {
    $title_array = explode(" ", $title);

    $all_but_last = array_slice($title_array, 0, -1);
    $first_element = implode(' ', $all_but_last);

    $last_index = count($title_array) - 1;
    $last_element = $title_array[$last_index];

    $output = "<span>" . $first_element . "</span><span class=\"primary-red\"> " . $last_element . "</span>";

    echo $output;
}

