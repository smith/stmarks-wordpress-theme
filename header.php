<!doctype html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr-1.6.min.js"></script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="container">
<?php if ( is_home() ): ?>
    <header>
        <h1><?php bloginfo('name'); ?></h1>
    </header>
<?php endif; ?>
    <div id="main" role="main">
<?php if ( ! is_home() ): ?>
    <?php get_sidebar(); ?>
<?php endif; ?>
