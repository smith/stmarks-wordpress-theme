<?php
if (!function_exists('stmarks_init')) {
    function stmarks_init() {
        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');

        register_sidebar(array(
            'name' => 'Main',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<span style="display:none;">',
            'after_title' => '</span>'
        ));

        register_sidebar(array(
            'name' => 'Side',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<span style="display:none;">',
            'after_title' => '</span>'
        ));

        register_nav_menu('main', 'Main');

        register_post_type('stmarks_staff', array(
            'labels' => array('name' => __('Staff Members'),
                              'singular_name'      => __('Staff Member'),
                              'add_new_item'       => __('Add New Staff Member'),
                              'edit_item'          => __('Edit Staff Member'),
                              'new_item'           => __('New Staff Member'),
                              'view_item'          => __('View Staff Member'),
                              'search_items'       => __('Search Staff Members'),
                              'not_found'          => __('No Staff Members found'),
                              'not_found_in_trash' => __('No Staff Members found in trash')
                             ),
             'public' => true,
             'show_in_menu' => true,
             'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'custom-fields'),
             'rewrite' => array('slug' => 'staff'),
             'has_archive' => true
        ));

        register_post_type('stmarks_ministries', array(
            'labels' => array('name' => __('Ministries'),
                              'singular_name'      => __('Ministry'),
                              'add_new_item'       => __('Add New Ministry'),
                              'edit_item'          => __('Edit Ministry'),
                              'new_item'           => __('New Ministry'),
                              'view_item'          => __('View Ministry'),
                              'search_items'       => __('Search Ministries'),
                              'not_found'          => __('No Ministries found'),
                              'not_found_in_trash' => __('No Ministries found in trash')
                             ),
             'public' => true,
             'show_in_menu' => true,
             'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'custom-fields'),
             'rewrite' => array('slug' => 'ministries'),
             'has_archive' => true
        ));
    }
}

add_action( 'after_setup_theme', 'stmarks_init' );
?>
