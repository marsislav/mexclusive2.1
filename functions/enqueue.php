<?php
function mexclusive2_scripts() {
wp_register_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' );


wp_enqueue_style( 'bootstrap' );

wp_register_style( 'owl', get_template_directory_uri() . '/assets/css/owl.carousel.css' );
wp_enqueue_style( 'owl' );


wp_register_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css ' );
wp_enqueue_style( 'magnific-popup' );

wp_register_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css ' );
wp_enqueue_style( 'animate' );


wp_register_style( 'meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.min.css ' );
wp_enqueue_style( 'meanmenu' );
/*
wp_register_style( 'fontAwesome', get_template_directory_uri() . '/assets/css/fa.css' );
wp_enqueue_style( 'fontAwesome' );*/

wp_register_style( 'mexclusive2_style', get_template_directory_uri() . '/assets/css/all.min.css' );

wp_enqueue_style( 'mexclusive2_style' );


wp_register_style( 'mexclusive2_main_css', get_template_directory_uri() . '/assets/css/main.css' );


wp_enqueue_style( 'mexclusive2_main_css' );


wp_register_style( 'mexclusive2_responsive', get_template_directory_uri() . '/assets/css/responsive.css' );


wp_enqueue_style( 'mexclusive2_responsive' );

// Scripts

wp_enqueue_script( 'jquery' );

wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.bundle.min.js', array( 'jquery' ), false, true );





wp_enqueue_script( 'bootstrap' );

wp_register_script( 'countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.js', array( 'jquery' ), false, true );





wp_enqueue_script( 'countdown' );


wp_register_script( 'isotope', get_template_directory_uri() . '/assets/js/jquery.isotope-3.0.6.min.js', array( 'jquery' ), false, true );





wp_enqueue_script( 'isotope' );


wp_register_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.js', array( 'jquery' ), false, true );





wp_enqueue_script( 'waypoints' );


wp_register_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), false, true );





wp_enqueue_script( 'owl-carousel' );


wp_register_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), false, true );





wp_enqueue_script( 'magnific-popup' );



wp_register_script( 'mean-menu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.min.js', array( 'jquery' ), false, true );





wp_enqueue_script( 'mean-menu' );


wp_register_script( 'sticker', get_template_directory_uri() . '/assets/js/sticker.js', array(), false, true );





wp_enqueue_script( 'sticker' );


wp_register_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), false, true );





wp_enqueue_script( 'main' );

/*

if ( is_home() ) {
wp_register_script( 'mexclusive2_slider', get_template_directory_uri() . '/assets/js/slider.js', array( 'jquery' ), false, true );
wp_enqueue_script( 'mexclusive2_slider' );
}
wp_enqueue_script( 'mexclusive2-js' );
}*/
}
add_action( 'wp_enqueue_scripts', 'mexclusive2_scripts' );