<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package mctc
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
  <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
  <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
<![endif]-->

<link href='http://fonts.googleapis.com/css?family=Fira+Sans:300,400,500' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body>
<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'mctc' ); ?></a>

<header id="masthead" class="site-header" role="banner">

<div class="wrapper">

<div class="logo"><a href="<?php echo home_url(); ?>"><img src="/wp-content/uploads/2014/07/mctc-logo1.png" /></a></div>

<div class="search-box">
<?php display_search_box($display_results_option); ?>
</div>

<nav id="site-navigation" class="main-navigation" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
</nav>




</div><!-- wrapper -->

</header>