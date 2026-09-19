<?php
// BrianShio theme — minimal setup. All CSS/JS is inline in front-page.php for now.
add_action( 'after_setup_theme', function () {
    add_theme_support( 'automatic-feed-links' );
} );
