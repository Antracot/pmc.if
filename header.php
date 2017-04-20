<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tora
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
    <style>
        ::-webkit-scrollbar-thumb{
            border: 10px solid LightSlateGrey;
        }
        ::-webkit-scrollbar-track{
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
        }
        ::-webkit-scrollbar{
            width: 10px;
            background-color: #F5F5F5;
        }


    </style>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="preloader">
	<div class="preloader-inner"></div>
</div>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tora' ); ?></a>
	<?php do_action('tora_header_bar'); ?>

	<?php do_action('tora_header_image'); ?>

	<div id="content" class="site-content">
	<?php if ( !is_page_template('page-templates/page_builder.php') ) : ?>
		<div class="container">
	<?php else : ?>
		<div class="fullwidth">
	<?php endif; ?>
	<!-- <a href="#services" class="mause"><img src="http://pmc.ua/wp-content/uploads/2016/11/mause.png"></a> -->
	<!-- <script type="text/javascript" src="wp-content/themes/tora/js/jquery-3.1.1.min.js"></script> -->
<!-- 	<script type="text/javascript">
		$(document).ready(function(){
 			console.log(jQuery.fn.jquery);
		});
	</script> -->