<?php
/**
 * Template Name: Home
 * The home page template file.
 */
?>
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('home-main') ?>>
    <?php the_content(); ?>
  </article>
<?php endwhile; ?>
<?php query_posts('posts_per_page=3'); ?>
  <section>
    <?php $i = 1; ?>
    <?php $c = ''; ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php // hack for the grid 3 column layout ?>
      <?php if ($i === 1) { $c = 'alpha'; }
            else if ($i === 3) { $c = 'omega'; }
            else { $c = ''; } ?>
      <article <?php post_class('featured grid_3 '.$c) ?>>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <h2 class="byline">by <span class="author"><?php the_author(); ?></span> &ndash; <?php the_date('M j'); ?></h2>
        <?php the_content(); ?>
      </article>
      <?php $i += 1; ?>
    <?php endwhile; ?>
  </section>
  <a class="archive" href="/archives">Older News</a>
<?php get_footer(); ?>
