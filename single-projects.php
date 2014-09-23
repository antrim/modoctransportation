<?php
/**
 * The template for displaying project posts.
 *
 * @package mctc
 */

get_header(); ?>

<div class="wrapper">
<div class="project-wrapper">

<h1 class="project-title"><?php the_title(); ?></h1>

<div class="project-copy">
<?php while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; // end of the loop. ?>
</div>


<figure class="single-images-container">

<?php
if( have_rows('single_images_repeater') ):
    while ( have_rows('single_images_repeater') ) : the_row(); ?>


<?php if( get_sub_field('image_section_header') ): ?>
	<h2><?php the_sub_field('image_section_header'); ?></h2>
<?php endif; ?>


<div class="single-image">

<?php
$attachment_id = get_sub_field('single_image');
$medium_image = wp_get_attachment_image_src( $attachment_id, "medium" );
$full_image = wp_get_attachment_image_src( $attachment_id, "full" );
?>
<a href="<?php echo $full_image[0]; ?>"><img src="<?php echo $medium_image[0]; ?>" /></a>

<?php if( get_sub_field('single_caption') ): ?>
	<figcaption><?php the_sub_field('single_caption'); ?></a></figcaption>
<?php endif; ?>

</div>

    <?php endwhile;
else :
endif;
?>

</figure><!-- single-images-project -->


</div><!-- project-wrapper -->

<footer class="project-archive-nav"><a href="/?page_id=10">See all projects ></a></footer>


</div><!-- wrapper -->

<?php get_footer(); ?>