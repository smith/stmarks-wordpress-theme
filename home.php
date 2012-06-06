<?php
/**
 * Template Name: Home
 * The home page template file.
 */

$featured_category_id = 21;
?>
<?php get_header(); ?>
<?php // Home page content ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('home-main clearfix') ?>>
    <?php the_content(); ?>
  </article>
<?php endwhile; ?>
<?php // Most recent featured post ?>
<?php query_posts('posts_per_page=1&cat=' . $featured_category_id); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('home-featured clearfix') ?>>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <h2 class="byline">by <span class="author"><?php the_author(); ?></span> &ndash; <?php the_date('F j'); ?></h2>
    <?php the_content(); ?>
  </article>
<?php endwhile; ?>
<?php // More posts ?>
<?php query_posts('posts_per_page=3&cat=-' . $featured_category_id); ?>
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
        <h2 class="byline">by <span class="author"><?php the_author(); ?></span> &ndash; <?php the_date('F j'); ?></h2>
        <?php the_excerpt(); ?>
        <a class="more" href="<?php the_permalink(); ?>">Read more&hellip;</a>
      </article>
      <?php $i += 1; ?>
    <?php endwhile; ?>
  </section>
  <a class="archive" href="/archives">Older News</a>
<?php get_footer(); ?>
