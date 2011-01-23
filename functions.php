<?php

function stmarks_init () {
    register_sidebar(array('before_widget' => '',
                           'after_widget'  => '',
                           'before_title'  => '<span style="display:none;">',
                           'after_title'   => '</span>'));
    register_sidebar(array('name' => 'Home',
                           'before_widget' => '',
                           'after_widget'  => '',
                           'before_title'  => '<span style="display:none;">',
                           'after_title'   => '</span>'));
    add_theme_support('automatic-feed-links');
}

add_action('after_setup_theme', 'stmarks_init');
