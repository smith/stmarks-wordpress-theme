<?php
/**
 * The main template file.
 */
?>
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<article <?php post_class() ?>>
  <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  <h2 class="byline">by <span class="author"><?php the_author(); ?></span> &ndash; <?php the_date('M j'); ?></h2>
  <?php the_content(); ?>
 </article>
<?php endwhile; ?>
<?php get_footer(); ?>
