<?php 

function nev_custom_post(){
    $service_label = array(
        'name'                  => __('Services', 'textdomain'),
        'singular_name'         => __('Service', 'textdomain'),
        'add_new'               => __('Add Service', 'textdomain'),
        'add_new_item'          => __('Add New Service', 'textdomain'),
        'edit_item'             => __('Edit Service', 'textdomain'),
        'all_items'             => __('Service', 'textdomain'),
    );
    $service_args = array(
        'labels'                =>$service_label,
        'public'                =>true,
        'capability_type'       =>'post',
        'show_ui'               =>true,
        'taxonomies'            => array('post_tag','category'),
        'supports'              => array('title','editor','thumbnail','excerpt')
    );
    register_post_type('service', $service_args);


    $tours_label = array(
        'name'                  => __('tours', 'textdomain'),
        'singular_name'         => __('tours', 'textdomain'),
        'add_new'               => __('Add tours', 'textdomain'),
        'add_new_item'          => __('Add New tours', 'textdomain'),
        'edit_item'             => __('Edit tours', 'textdomain'),
        'all_items'             => __('tours', 'textdomain'),
    );
    $tours_args = array(
        'labels'                =>$tours_label,
        'public'                =>true,
        'capability_type'       =>'post',
        'show_ui'               =>true,
        'taxonomies'            => array('post_tag','category'),
        'supports'              => array('title','editor','thumbnail','excerpt')
    );
    register_post_type('tours', $tours_args);
}
add_action('init','nev_custom_post');