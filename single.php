<?php get_header(); ?>

<div class="single">
  <h2 class="single__title">
    <?php the_title(); ?>
  </h2>
  <div class="single__content">
    <?php the_post(); the_content(); ?>
  </div>
  <p class="single__price">
    Price: <?php the_field('price'); ?>zł
  </p>
  <p class="single__people">
    <?php the_field('minimum_people'); ?> to <?php the_field('maximum_people'); ?> people
  </p>
  <p class="single__difficulty">
    Difficulty: <?php the_field('difficulty'); ?>/10
  </p>
</div>

<?php get_footer(); ?>