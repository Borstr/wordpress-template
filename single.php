<?php get_header(); ?>

<div class="single">
  <h1 class="single__title">
    <?php the_title(); ?>
  </h1>
  <div class="single__content">
    <?php the_post(); the_content(); ?>
  </div>
  <p class="single__details">
    <span class="single__subtitle">Price</span>: <?php the_field('price'); ?>zł
  </p>
  <p class="single__details">
  <span class="single__subtitle">Players: </span><?php the_field('minimum_people'); ?> to <?php the_field('maximum_people'); ?> people
  </p>
  <p class="single__details">
  <span class="single__subtitle">Difficulty:</span> <?php the_field('difficulty'); ?>/10
  </p>
</div>

<?php get_footer(); ?>