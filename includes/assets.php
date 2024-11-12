<?php

function myNEV_assets(){
    wp_enqueue_style('myNEV', get_template_directory_uri() . '/css/style.css', microtime());
}

add_action('wp_enqueue_scripts','myNEV_assets');