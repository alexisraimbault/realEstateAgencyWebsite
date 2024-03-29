<div class="annonces_list row">
<?php
$category = $_GET['cat'];
$args = array(
          'post_type' => 'product',
          'posts_per_page' =>12,
          'product_cat' =>  $category,
        );
$loop = new WP_Query( $args ); if ( $loop->have_posts() ) {
  while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
  <div class="annonce col-xs-12 col-sm-6 col-md-4">
      <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($loop->post->ID)); ?>
      <?php if($featured_image) { ?>
      <div class = "annonce_img_wrapper">
      <img src="<?php echo get_the_post_thumbnail_url($loop->post->ID); ?>" class="annonce_img">
      </div>
      <?php } ?>
      <div class = "annonce_details">
      <div class = "annonce_title"><?php the_title(); ?></div>
      <?php $ville = get_post_meta(get_the_ID(), '_ville', true);
      if( $ville ){?>
        <div class = "annonce_ville"><?php echo $ville ?></div>
      <?php } ?>
      <?php $description = get_post_meta(get_the_ID(), '_description', true);
      if( $description ){?>
        <div class = "annonce_description"><?php echo $description ?></div>
      <?php } ?>
      <?php $superficie = get_post_meta(get_the_ID(), '_superficie', true);
      if( $superficie ){?>
        <div class = "annonce_superficie"><?php echo $superficie ?> m2</div>
      <?php } ?>
      <?php $nb_pieces = get_post_meta(get_the_ID(), '_nb_pieces', true);
      if( $nb_pieces ){?>
        <div class = "annonce_pieces"><?php echo $nb_pieces ?> pieces</div>
      <?php } ?>
      <?php $nb_chambres = get_post_meta(get_the_ID(), '_nb_chambres', true);
      if( $nb_chambres ){?>
        <div class = "annonce_chambres"><?php echo $nb_chambres ?> chambres</div>
      <?php } ?>
      <div class="annonce_price"><?php echo $product->get_price_html(); ?></div>
    </div>
</div>
<?php endwhile;
  } else {
    echo __( 'No products found' );
  }
  wp_reset_postdata();
  ?>
</div>
