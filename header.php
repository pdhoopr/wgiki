<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WGIki
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <?php $page_division = getPageDivision(); ?>

  <div id="page" class="<?php echo $page_division; ?> hfeed site">

    <header id="masthead" class="site-header clearfix" role="banner">

      <?php get_template_part('template-parts/content_wgiki', 'side-nav'); ?>

    </header><!-- #masthead -->

    <div id="content" class="site-content">
