<?php get_header();?>

<section class="container d-flex justify-content-between posts">
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
    <article class="card posts__card">
      <div class="card-body">
        <h2 class="card-title"><?php the_title();?></h2>
        <p class="card-text">
          <?php the_excerpt();?>
        </p>
        <a href="<?php the_permalink() ?>" class="btn btn-warning">See more</a>
      </div>
    </article>
  <?php endforeach; wp_reset_postdata(); endif;?>
</section>

<?php get_footer();?>