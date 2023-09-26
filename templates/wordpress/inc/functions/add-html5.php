<?php
add_action( 'after_setup_theme', function() {
  add_theme_support(
    'html5',
    [
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'style',
    'script'
  ] );
} );
?>