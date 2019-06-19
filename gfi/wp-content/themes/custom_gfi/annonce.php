<?php
/**
Template name: annonce
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
<div class = "bg_images " id = "index">
  <?php
  $id = $_GET['id'];
  $args = array(
    'post_type' => 'product',
    'posts_per_page' => 1,
    'post__in'=> array($id),
  );
  $loop = new WP_Query( $args ); if ( $loop->have_posts() ) {
    while ( $loop->have_posts() ) : $loop->the_post(); global $product;
    $images_ids = $product-> get_gallery_image_ids();?>
    <div class = "slide_container">
    <?php for($i = 0, $j = count($images_ids); $i < $j;$i++ ){
    ?>
    <div class="slide_img_wrapper">
    <img src="<?php echo wp_get_attachment_image_url($images_ids[$i], 'full');?>" class = "slide_img">
    </div>
    <?php } ?>
    <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($loop->post->ID)); ?>
    <?php if($featured_image) { ?>
    <div class="slide_img_wrapper">
    <img src="<?php echo get_the_post_thumbnail_url($loop->post->ID); ?>" class="slide_img">
    </div>
    <?php }?>
    </div>
    <div class = "preview_container">
    <?php for($i = 0, $j = count($images_ids); $i < $j;$i++ ){
      ?>
      <div class="slide_preview_wrapper" onclick="showSlide(<?php echo $i ?>)">
        <img src="<?php echo wp_get_attachment_image_url($images_ids[$i]);?>" class = "slide_preview">
      </div>
    <?php } ?>
    <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($loop->post->ID), 'thumbnail'); ?>
    <?php if($featured_image) { ?>
      <div class="slide_preview_wrapper" onclick="showSlide(<?php echo count($images_ids) ?>)">
        <img src="<?php echo get_the_post_thumbnail_url($loop->post->ID); ?>" class="slide_preview">
      </div>
    <?php }?>
    </div>
  <?php endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
    ?>
  </div>
<script>
var slideIndex = 1;
function showSlide(n) {
  slideIndex = n
  var i;
  var slides = document.getElementsByClassName("slide_img_wrapper");
  var prev = document.getElementsByClassName("slide_preview_wrapper");
  if (n >= slides.length) {slideIndex = 1}
  if (n < 0) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < prev.length; i++) {
      prev[i].className = prev[i].className.replace(" active", "");
  }
  slides[slideIndex].style.display = "block";
  prev[slideIndex].className += " active";
}
</script>


<?php
get_footer();
?>
