<?php
/**
 * Template Name: Ministries
 */
?>
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<article <?php post_class() ?>>
  <?php the_content(); ?>
  <?php $ms = get_posts(array('post_type'   => 'stmarks_ministries',
                              'post_status' => 'publish')); ?>
  <ul class="ministries">
  <?php foreach( $ms as $post ) : setup_postdata( $post ); ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><p><?php the_excerpt(); ?></p></li>
  <?php endforeach; ?>
  </ul>
 </article>
<?php endwhile; ?>
<?php get_footer(); ?>
