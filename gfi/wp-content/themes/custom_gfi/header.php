<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage custom_gfi
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
  <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $(".hamburger").click(function(){
            $(".hamburger").toggleClass("is-active");
            $(".mobile_menu").toggleClass("is-active");
            $(".dark").toggleClass("is-active");
        })
        $(".dark").click(function(){
            $(".hamburger").toggleClass("is-active");
            $(".mobile_menu").toggleClass("is-active");
            $(".dark").toggleClass("is-active");
        })
    });
  </script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header>
	</header><!-- #masthead -->

	<div id="content" class="site-content">