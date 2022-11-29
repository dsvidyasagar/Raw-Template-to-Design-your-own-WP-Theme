<?php
/**
 * Template Name: Landing 
 * Template Post Type: post, page
 * Dattaraj Theme
 * Vidyasagar Academy, www.vsa.edu.in
 */

get_header(); ?>
<main class="wrap">
  <section class="content-area article-landing">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article-landing">
        <header>
          <h2><?php the_title(); ?></h2>
          Author: <?php the_author(); ?>
        </header>
       <?php the_content(); ?>
      </article>
<?php endwhile; else : ?>
      <article>
        <p>Sorry, no post was found!</p>
      </article>
<?php endif; ?>
  </section>
</main>