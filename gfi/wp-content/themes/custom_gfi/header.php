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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
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
