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
    if($posts) : 
    foreach($posts as $post) : 
    setup_postdata($post);
  ?>
    <article class="frontPage__room">
      <div>
        <h2 class="frontPage__title"><?php the_title();?></h2>
        <p>
          <?php the_excerpt();?>
        </p>
        <a href="<?php the_permalink() ?>" class="btn">See more</a>
      </div>
    </article>
  <?php endforeach; wp_reset_postdata(); endif;?>
</section>

<?php get_footer();?>