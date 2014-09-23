<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package mctc
 */
?>

<footer class="site-footer" role="contentinfo">
<div class="wrapper">
<nav class="footer-nav" role="navigation">

<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
<?php wp_nav_menu( array( 'theme_location' => 'footer-secondary' ) ); ?>
<?php wp_nav_menu( array( 'theme_location' => 'footer-tertiary' ) ); ?>

</nav>
</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
