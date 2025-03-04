<?php

function mvh_enqueue_styles() {
    wp_enqueue_style('mvh-style', __DIR__ . '/style.css');
}

add_action('wp-enqueue-scripts', 'mvh_enqueue_styles');