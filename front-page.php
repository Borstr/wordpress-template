<?php get_header();?>

<section class="frontPage">
  <?php 
    $posts = get_posts(array(
      'post_type' => 'post',
      'meta_query' => array(array(
        'key' => 'type',
        'value' => 'room'
      ))
    ));
    if($posts) : foreach($posts as $post) : setup_postdata($post);
  ?>
    <a href="<?php the_permalink($post); ?>" class="frontPage__room">
      <div class="frontPage__imageContainer">
        <img class="frontPage__image" src="<?php the_field('image'); ?>" alt="pyramid">
      </div>
      <h2 class="frontPage__title"><?php the_title();?></h2>
      <p class="frontPage__description">
        <?php the_field('short_description'); ?>
      </p>
  </a>
  <?php endforeach; wp_reset_postdata(); endif;?>
</section>

<?php get_footer();?>