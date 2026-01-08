<?php
/*
Plugin Name: Simple Custom Post Plugin
Description: Adds a custom post type called Projects.
Version: 1.0
Author: Sarang Patil
*/

if (!defined('ABSPATH')) {
    exit;
}

function scpp_register_projects_post_type() {

    $args = array(
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Project'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor'),
        'has_archive' => true,
    );

    register_post_type('project', $args);
}

add_action('init', 'scpp_register_projects_post_type');
