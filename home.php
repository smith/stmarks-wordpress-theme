<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

query_posts('category=featured&posts_per_page=3');

get_header(); ?>
<div class="logo"><img src="/wp-content/uploads/2011/01/bulb_stars.png" alt="Welcome" /></div>
<h1><?php bloginfo('name'); ?></h1>
<?php dynamic_sidebar('Home'); ?>
<div id="content">
    <?php while ( have_posts() ) : the_post(); ?>
        <span class="o">
            <span <?php post_class('i'); ?> >
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </span><!-- end o -->
        </span><!-- end i -->
    <?php endwhile; ?>
</div><!-- end content -->
<?php get_footer(); ?>
