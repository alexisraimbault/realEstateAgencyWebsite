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
          <div class="slide_preview_wrapper" onmouseover="showSlide(<?php echo $i ?>)">
            <img src="<?php echo wp_get_attachment_image_url($images_ids[$i]);?>" class = "slide_preview">
          </div>
        <?php } ?>
        </div>
      </div>
      </div>
      <div class = "annonce_page_flex_container">
      <?php $tmp = get_post_meta(get_the_ID(), '_description', true);
      if( $tmp ){?>
          <div class = "annonce_page_description_container">
            <div class = "annonce_page_description_title">description</div>
            <div class = "annonce_page_description_line"></div>
            <div class = "annonce_page_description"><?php echo $tmp ?></div>
        </div>
        <?php } ?>
        <div class = "annonce_page_car_container">
          <div class = "annonce_page_car_title">caractéristiques</div>
          <div class = "annonce_page_car_line"></div>
          <div class = "annonce_page_car_elts">
            <?php $tmp = get_post_meta(get_the_ID(), '_superficie', true);
            if( $tmp ){?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">superficie</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> m2</div>
              </div>
            <?php } ?>
            <?php $tmp = get_post_meta(get_the_ID(), '_nb_pieces', true);
            if( $tmp ){?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">pieces</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_chauffage', true);
            if( $tmp ){?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">chauffage</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_cuisine', true);
            if( $tmp ){?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">cuisine</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_nb_chambres', true);
            if( $tmp ){?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">chambres</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_terrain', true);
            if( $tmp ){?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">terrain</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> m2</div>
              </div>
            <?php } ?>
            <?php $tmp = get_post_meta(get_the_ID(), '_nb_sdb', true);
            if( $tmp ){?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">salles de bain</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>
            <?php $tmp = get_post_meta(get_the_ID(), '_nb_toilettes', true);
            if( $tmp ){?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">toilettes</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>
            <?php $tmp = get_post_meta(get_the_ID(), '_toilettes_separees', true);
            if( $tmp != "nc" ){
              if( $tmp == "o" ){
                $tmp = "oui";
              }
              if( $tmp == "n" ){
                $tmp = "non";
              }?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">toilettes séparées</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_type_architecture', true);
            if( $tmp ){?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">architecture</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_cave', true);
            if( $tmp != "nc" ){
              if( $tmp == "o" ){
                $tmp = "oui";
              }
              if( $tmp == "n" ){
                $tmp = "non";
              }?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">cave</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_annee_de_construction', true);
            if( $tmp ){?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">année de construction</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_refait_a_neuf', true);
            echo "<script>console.log( 'Debug Objects: " . $tmp . "' );</script>";
            if( $tmp != "nc" ){
              if( $tmp == "o" ){
                $tmp = "oui";
              }
              if( $tmp == "n" ){
                $tmp = "non";
              }?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">refait à neuf</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_parking', true);
            if( $tmp != "nc" ){
              if( $tmp == "o" ){
                $tmp = "oui";
              }
              if( $tmp == "n" ){
                $tmp = "non";
              }?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">parking</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_nb_boxes', true);
            if( $tmp ){?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">boxes parking</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_nb_etages', true);
            if( $tmp ){?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">étages</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_nb_balcons', true);
            if( $tmp ){?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">balcons</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_surface_balcons', true);
            if( $tmp ){?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">balcons</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> m2</div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_nb_terrasses', true);
            if( $tmp ){?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">terrasses</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_alarme', true);
            if( $tmp != "nc" ){
              if( $tmp == "o" ){
                $tmp = "oui";
              }
              if( $tmp == "n" ){
                $tmp = "non";
              }?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">alarme</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_cable_tv', true);
            if( $tmp != "nc" ){
              if( $tmp == "o" ){
                $tmp = "oui";
              }
              if( $tmp == "n" ){
                $tmp = "non";
              }?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">câble TV</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_piscine', true);
            if( $tmp != "nc" ){
              if( $tmp == "o" ){
                $tmp = "oui";
              }
              if( $tmp == "n" ){
                $tmp = "non";
              }?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">piscine</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_monument_hist', true);
            if( $tmp != "nc" ){
              if( $tmp == "o" ){
                $tmp = "oui";
              }
              if( $tmp == "n" ){
                $tmp = "non";
              }?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">monument historique</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_comble_amenageable', true);
            if( $tmp != "nc" ){
              if( $tmp == "o" ){
                $tmp = "oui";
              }
              if( $tmp == "n" ){
                $tmp = "non";
              }?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">comble aménageable</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_lot_neuf', true);
            if( $tmp != "nc" ){
              if( $tmp == "o" ){
                $tmp = "oui";
              }
              if( $tmp == "n" ){
                $tmp = "non";
              }?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">lot neuf</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_cheminee', true);
            if( $tmp != "nc" ){
              if( $tmp == "o" ){
                $tmp = "oui";
              }
              if( $tmp == "n" ){
                $tmp = "non";
              }?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">cheminée</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_vue', true);
            if( $tmp != "nc" ){
              if( $tmp == "o" ){
                $tmp = "oui";
              }
              if( $tmp == "n" ){
                $tmp = "non";
              }?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">vue</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_entree', true);
            if( $tmp != "nc" ){
              if( $tmp == "o" ){
                $tmp = "oui";
              }
              if( $tmp == "n" ){
                $tmp = "non";
              }?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">entrée</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_parquet', true);
            if( $tmp != "nc" ){
              if( $tmp == "o" ){
                $tmp = "oui";
              }
              if( $tmp == "n" ){
                $tmp = "non";
              }?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">parquet</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_placard', true);
            if( $tmp != "nc" ){
              if( $tmp == "o" ){
                $tmp = "oui";
              }
              if( $tmp == "n" ){
                $tmp = "non";
              }?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">placard</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_vis_a_vis', true);
            if( $tmp != "nc" ){
              if( $tmp == "o" ){
                $tmp = "oui";
              }
              if( $tmp == "n" ){
                $tmp = "non";
              }?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">vis-à-vis</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_calme', true);
            if( $tmp != "nc" ){
              if( $tmp == "o" ){
                $tmp = "oui";
              }
              if( $tmp == "n" ){
                $tmp = "non";
              }?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">calme</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_orientation', true);
            if( $tmp != "nc" ){
              if( $tmp == "n" ){
                $tmp = "Nord";
              }
              if( $tmp == "s" ){
                $tmp = "Sud";
              }
              if( $tmp == "e" ){
                $tmp = "Est";
              }
              if( $tmp == "s" ){
                $tmp = "Ouest";
              }?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">orientation</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_orientation', true);
            if( $tmp != "nc" ){
              if( $tmp == "mont" ){
                $tmp = "Montagne";
              }
              if( $tmp == "mer" ){
                $tmp = "Mer";
              }
              if( $tmp == "camp" ){
                $tmp = "Campagne";
              }
              if( $tmp == "ville" ){
                $tmp = "Ville";
              }?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">orientation</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_carac_dpe', true);
            if( $tmp != "nc" ){
              if( $tmp == "o" ){
                $tmp = "soumis au DPE";
              }
              if( $tmp == "n" ){
                $tmp = "non soumis au DPE";
              }?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">diagnostic de performance énergétiqe</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?> </div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_conso_energetique', true);
            if( $tmp != "nc" ){
              if( $tmp == "A" ){
                $tmp = "moins de 50 ";
              }
              if( $tmp == "B" ){
                $tmp = "entre 51 et 90 ";
              }
              if( $tmp == "C" ){
                $tmp = "entre 91 et 150 ";
              }
              if( $tmp == "D" ){
                $tmp = "entre 151 et 230 ";
              }
              if( $tmp == "E" ){
                $tmp = "entre 231 et 330 ";
              }
              if( $tmp == "F" ){
                $tmp = "entre 331 et 450 ";
              }
              if( $tmp == "G" ){
                $tmp = "plus de 450 ";
              }?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">Consommations énergétiques</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?>kWhEP/m²/an</div>
              </div>
            <?php } ?>

            <?php $tmp = get_post_meta(get_the_ID(), '_gaz_effet_de_serre', true);
            if( $tmp != "nc" ){
              if( $tmp == "A" ){
                $tmp = "moins de 5 ";
              }
              if( $tmp == "B" ){
                $tmp = "entre 6 et 10 ";
              }
              if( $tmp == "C" ){
                $tmp = "entre 11 et 20 ";
              }
              if( $tmp == "D" ){
                $tmp = "entre 21 et 35 ";
              }
              if( $tmp == "E" ){
                $tmp = "entre 36 et 55 ";
              }
              if( $tmp == "F" ){
                $tmp = "entre 56 et 80 ";
              }
              if( $tmp == "G" ){
                $tmp = "plus de 80 ";
              }?>
              <div class = "annonce_page_car_elt">
                <div class = "annonce_page_car_elt_title">Emissions de gaz à effet de serre</div>
                <div class = "annonce_page_car_elt_value"><?php echo $tmp ?>kgeqCO2/m2/an</div>
              </div>
            <?php } ?>

          </div>
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
