<?php
/*
Template Name: Links
*/

get_header(); ?>
<div class="wrapper">

<h1 class="page-header"><?php the_title(); ?></h1>

<div class="links-wrapper">

<?php
// check if the repeater field has rows of data
if( have_rows('new_link') ):
 	// loop through the rows of data
    while ( have_rows('new_link') ) : the_row(); ?>
 
    	<div class="link">

        <p><?php the_sub_field('link_text'); ?></p>
        <p class="link-address"><a href="<?php the_sub_field('link_address'); ?>"><?php the_sub_field('link_address'); ?></a></p>

	</div>

    <?php endwhile;
else :
    // no rows found
endif;
?>

</div><!-- links-wrapper -->

</div><!-- wrapper -->
<?php get_footer(); ?>



