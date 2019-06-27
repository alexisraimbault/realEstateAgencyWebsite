<?php
/**
Template name: annonce
 */

get_header();
?>
<div class = "top_wrapper">
  <div class = "nav_bar_container">
    <div class = "logo" onClick="document.location.href='acceuil'"></div>
    <div class="menu">
      <div class = "menu__group"><a class="link" href="agence">Agence</a></div>
      <div class = "menu__group"><a class="link" href="agence#contact">Contact</a></div>
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
    <div class = "annonce_page_container">
      <div class = "top_flex_container">
        <div class = "top_desc_container">
          <?php $ville = get_post_meta(get_the_ID(), '_ville', true);
          if( $ville ){?>
            <div class = "annonce_page_ville"><?php echo $ville ?></div>
          <?php } ?>
          <div class = "annonce_page_title"><?php the_title(); ?></div>
          <div class="annonce_page_line"></div>
          <div class = "horiz_container">
          <?php $superficie = get_post_meta(get_the_ID(), '_superficie', true);
          if( $superficie ){?>
            <div class = "annonce_page_superficie"><?php echo $superficie ?> m<sup>2</sup></div>
          <?php } ?>
          <div class="annonce_page_price"><?php echo $product->get_price_html(); ?></div>
        </div>
        <div class = "rdv">
          <div class = "rdv_title">prendre rendez-vous</div>
          <div class = "rdv_line"></div>
          <div class = "rdv_agence">GFI conseil</div>
          <div class = "rdv_mess" onClick="document.location.href='agence#contact'">
            <div class = "rdv_mess_logo"></div>
            <div class = "rdv_mess_contact">NOUS CONTACTER</div>
          </div>
          <div class = "rdv_tel" >
            <div class = "rdv_tel_logo"></div>
            <div class = "rdv_tel_num">01 48 59 84 84</div>
          </div>
        </div>
      </div>
        <div class = "gallery_container">
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
      </div>
      <div class = "annonce_page_flex_container">
      <?php $description = get_post_meta(get_the_ID(), '_description', true);
      if( $description ){?>
          <div class = "annonce_page_description_container">
            <div class = "annonce_page_description_title">description</div>
            <div class = "annonce_page_description_line"></div>
            <div class = "annonce_page_description"><?php echo $description ?></div>
        </div>
        <?php } ?>
        <div class = "annonce_page_car_container">
          <div class = "annonce_page_car_title">caractéristiques</div>
          <div class = "annonce_page_car_line"></div>
        </div>
      </div>
  <?php endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
    ?>
  </div>
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
