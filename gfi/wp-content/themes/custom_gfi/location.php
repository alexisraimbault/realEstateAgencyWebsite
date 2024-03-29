<?php
/**
Template name: location
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
<div class = "bg_images" id = "index">
  <div class = "dark"></div>
  <div class = "image1l" id = "img1">
    <div id = "img1_filter"></div><div id = "img1_glow"></div>
    <div class="btn btn1 middle"onmouseover="Javascript:highlight(1)" onmouseout="Javascript:unHighlight(1)" onClick="document.location.href='annonces?cat=location_appartement'">
     <a href="#" class="btn">Appartements</a>
   </div>
  </div>
  <div class = "image2l" id = "img2">
    <div id = "img2_filter"></div><div id = "img2_glow"></div>
    <div class="btn btn1 middle"onmouseover="Javascript:highlight(2)" onmouseout="Javascript:unHighlight(2)" onClick="document.location.href='annonces?cat=location_maison'">
     <a href="#" class="btn">Maisons</a>
    </div>
  </div>
  <div class = "image3l" id = "img3">
    <div id = "img3_filter"></div><div id = "img3_glow"></div>
    <div class="btn btn1 middle" onmouseover="Javascript:highlight(3)" onmouseout="Javascript:unHighlight(3)" onClick="document.location.href='annonces?cat=location_parking'">
     <a href="#" class="btn">Parkings</a>
    </div>
  </div>
  <div class = "image4l" id = "img4">
    <div id = "img4_filter"></div><div id = "img4_glow"></div>
    <div class="btn btn1 middle" onmouseover="Javascript:highlight(4)" onmouseout="Javascript:unHighlight(4)" onClick="document.location.href='annonces?cat=location_autres'">
     <a href="#" class="btn">Lofts</a>
    </div>
  </div>
</div>
<script type="text/javascript">
  function highlight(n) {
    switch (n) {
      case 1:
        $('#img2_filter').css({
            opacity:1
        })
        $('#img3_filter').css({
            opacity:1
        })
        $('#img4_filter').css({
            opacity:1
        })
        $('#img1_glow').css({
            opacity:1
        })
        break;
      case 2:
        $('#img1_filter').css({
            opacity:1
        })
        $('#img3_filter').css({
            opacity:1
        })
        $('#img4_filter').css({
            opacity:1
        })
        $('#img2_glow').css({
            opacity:1
        })
        break;
      case 3:
        $('#img1_filter').css({
            opacity:1
        })
        $('#img2_filter').css({
            opacity:1
        })
        $('#img4_filter').css({
            opacity:1
        })
        $('#img3_glow').css({
            opacity:1
        })
        break;
      case 4:
        $('#img1_filter').css({
            opacity:1
        })
        $('#img2_filter').css({
            opacity:1
        })
        $('#img3_filter').css({
            opacity:1
        })
        $('#img4_glow').css({
            opacity:1
        })
        break;
      default :
        break;
    }
  }
  function unHighlight(n) {
    switch (n) {
      case 1:
        $('#img2_filter').css({
            opacity:0
        })
        $('#img3_filter').css({
            opacity:0
        })
        $('#img4_filter').css({
            opacity:0
        })
        $('#img1_glow').css({
            opacity:0
        })
        break;
      case 2:
        $('#img1_filter').css({
            opacity:0
        })
        $('#img3_filter').css({
            opacity:0
        })
        $('#img4_filter').css({
            opacity:0
        })
        $('#img2_glow').css({
            opacity:0
        })
        break;
      case 3:
        $('#img1_filter').css({
            opacity:0
        })
        $('#img2_filter').css({
            opacity:0
        })
        $('#img4_filter').css({
            opacity:0
        })
        $('#img3_glow').css({
            opacity:0
        })
        break;
      case 4:
        $('#img1_filter').css({
            opacity:0
        })
        $('#img2_filter').css({
            opacity:0
        })
        $('#img3_filter').css({
            opacity:0
        })
        $('#img4_glow').css({
            opacity:0
        })
        break;
      default :
        break;
    }
  }
</script>

</div>
<div class = "footer_hide">

<?php
get_footer();
?>
