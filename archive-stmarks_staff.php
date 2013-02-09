<?php
/**
 * Template Name: Staff Archive Template
 */
get_header(); ?>
<h1><?php _e( 'Meet the Friendlest Church Staff Around' ); ?></h1>
<?php while ( have_posts() ) : the_post(); ?>
  <?php $position = get_post_meta( $post->ID, 'Position', 'single' ); ?>
  <article <?php post_class( 'vcard' ) ?>>
    <?php the_post_thumbnail(); ?>
    <h1 class="fn"><?php the_title(); ?></h1>
    <?php if ( $position ): ?>
      <h2><?php echo $position; ?></h2>
    <?php endif; ?>
  </article>
<?php endwhile; ?>
<?php get_footer(); ?>
