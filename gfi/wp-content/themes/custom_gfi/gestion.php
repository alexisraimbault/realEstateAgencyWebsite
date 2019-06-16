<?php
/**
Template name: gestion
 */

get_header();
?>
<div class = "top_wrapper">
  <div class = "nav_bar_container">
    <div class = "logo"></div>
    <div class="menu">
      <div class = "menu__group"><a class="link" href="#">Agence</a></div>
      <div class = "menu__group"><a class="link" href="#">Contact</a></div>
      <div class = "menu__group"><a class="link" href="#">Estimation</a></div>
    </div>
    <div class="hamburger">
      <span class="line"></span>
      <span class="line"></span>
      <span class="line"></span>
    </div>
  </div>
  <div class="mobile_menu">
    <div class = "mobile_menu__group"><a class="link" href="#">Agence</a></div>
    <div class = "mobile_menu__group"><a class="link" href="#">Contact</a></div>
    <div class = "mobile_menu__group"><a class="link" href="#">Estimation</a></div>
  </div>
</div>
<div class = "bg_images" id = "index">
  <?php
  $args = array(
            'post_type' => 'product',
            'posts_per_page' =>12,
            'product_cat' =>  'vente_maison',
          );
  $loop = new WP_Query( $args ); if ( $loop->have_posts() ) {
    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
    <div class="dvThumb col-xs-4 col-sm-3 col-md-3 profiler-select profiler<?php echo the_title(); ?>" data-profile="<?php echo $loop->post->ID; ?>">
        <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($loop->post->ID)); ?>
        <?php if($featured_image) { ?>
        <img src="<?php $featured_image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
        <?php } ?>
        <p><?php the_title(); ?></p>
        <span class="price"><?php echo $product->get_price_html(); ?></span>
    </div>
  <?php endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
    ?>
</div>



<?php
get_footer();
