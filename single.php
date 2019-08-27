<h2>
  <?php the_title(); ?>
</h2>
<div>
  <?php the_post(); the_content(); ?>
</div>
<p>
  Price: <?php the_field('price'); ?>zł
</p>
<p>
  <?php the_field('minimum_people'); ?> to <?php the_field('maximum_people'); ?> people
</p>
<p>
  Difficulty: <?php the_field('difficulty'); ?>/10
</p>