<?php
function stmarks_init() {
    add_theme_support('automatic-feed-links');
}

add_action('after_setup_theme', 'stmarks_init');
?>
