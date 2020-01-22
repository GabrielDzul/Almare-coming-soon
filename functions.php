<?php

function almare_actions() {
  // CSS enqueue
  // wp_enqueue_style( 'application', almare_get_asset_url( '/css/style.css' ), [],
  // filemtime( get_template_directory() . '/css/style.css' ) );

  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], null, true );
  wp_enqueue_script( 'vegas', get_template_directory_uri() . '/assets/js/vegas.min.js', [], null, true );
  wp_enqueue_script( 'countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', [], null, true );
  wp_enqueue_script( 'jq-validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', [], null, true );
  wp_enqueue_script( 'jq-easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', [], null, true );
  wp_enqueue_script( 'jq-form', get_template_directory_uri() . '/assets/js/jquery.form.min.js', [], null, true );
  wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', [], null, true );
  wp_enqueue_script( 'YTPlayer', get_template_directory_uri() . '/assets/js/jquery.mb.YTPlayer.min.js', [], null, true );
  wp_enqueue_script( 'granim', get_template_directory_uri() . '/assets/js/granim.min.js', [], null, true );
  
   //Get the admin-ajax url
		wp_localize_script( 'main', 'theme', array(
			'template_URI' 	 => get_template_directory_uri()
    ));

}

add_action( 'wp_enqueue_scripts', 'almare_actions' );


//require_once __DIR__ . '/includes/helpers.php';