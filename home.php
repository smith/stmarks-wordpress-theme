<?php
/**
 * Template Name: Home
 * The home page template file.
 */
?>
<?php get_header(); ?>
<?php // Home page content ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('home-main clearfix') ?>>
    <?php the_content(); ?>
  </article>
<?php endwhile; ?>
<?php // Posts ?>
<?php query_posts( 'posts_per_page=10' ) ?>
  <section>
    <?php while ( have_posts() ) : the_post(); ?>
<?php
$from_facebook = get_post_meta(get_the_ID(), 'syndication_source_uri', 'single') === 'http://www.facebook.com/';
?>
      <article <?php post_class() ?>>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <h2 class="byline">by <span class="author"><?php the_author(); ?> <?php if ($from_facebook) { ?>(via <a href="https://www.facebook.com/pages/St-Marks-United-Methodist-Church/124126437656462">facebook</a>)<? } ?></span> &ndash; <?php the_date('F j'); ?></h2>
        <?php the_content(); ?>
        <div class="comments <?php if ($from_facebook) { ?> comments-closed <? } ?>"><?php facebook_comments(); ?></div>
      </article>
    <?php endwhile; ?>
  </section>
  <a class="archive" href="/archives">Older News</a>
<?php get_footer(); ?>