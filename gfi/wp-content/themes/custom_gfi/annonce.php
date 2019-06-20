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
    <div class = annonce_page_container>
    <div class = "top_desc_container">
      <div class = "dots_top">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
      <div class = "annonce_page_title"><?php the_title(); ?></div>
      <?php $ville = get_post_meta(get_the_ID(), '_ville', true);
      if( $ville ){?>
        <div class = "annonce_page_ville"><?php echo $ville ?></div>
      <?php } ?>
      <div class="annonce_page_line"></div>
      <?php $superficie = get_post_meta(get_the_ID(), '_superficie', true);
      if( $superficie ){?>
        <div class = "annonce_page_superficie"><?php echo $superficie ?> m<sup>2</sup></div>
      <?php } ?>
      <div class="annonce_page_price"><?php echo $product->get_price_html(); ?></div>
      <div class = "dots_bottom">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
    </div>
    <div class = "slide_container">
    <?php for($i = 0, $j = count($images_ids); $i < $j;$i++ ){
    ?>
    <div class="slide_img_wrapper">
    <img src="<?php echo wp_get_attachment_image_url($images_ids[$i], 'full');?>" class = "slide_img">
    </div>
    <?php } ?>
    </div>
    <div class = "preview_container">
    <?php for($i = 0, $j = count($images_ids); $i < $j;$i++ ){
      ?>
      <div class="slide_preview_wrapper" onclick="showSlide(<?php echo $i ?>)">
        <img src="<?php echo wp_get_attachment_image_url($images_ids[$i]);?>" class = "slide_preview">
      </div>
    <?php } ?>
    </div>
  </div>
  <?php endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
    ?>
  </div>
<script>
var slideIndex = 0;
showSlide(slideIndex);
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
