<?php
/*
Template Name: Contact
*/

get_header(); ?>

<div class="wrapper">
<div class="contact-container">

<h1 class="page-header"><?php the_title(); ?></h1>

<div class="contact-info">
<p><?php the_field('about_mctc_contact'); ?></p>

<p class="telephone">Phone: <?php the_field('phone_number'); ?></p>

<?php if( have_rows('contact_person') ):
    while ( have_rows('contact_person') ) : the_row(); ?>
 
<p class="contact-name"><?php the_sub_field('contact_name'); ?></p>
<p class="contact-position"><?php the_sub_field('contact_position'); ?></p>

    <?php endwhile;
else :
endif; ?>
</div><!-- contact-info -->


<div class="contact-form">
<?php echo do_shortcode( '[contact-form-7 id="156" title="Contact Form"]' ); ?>
</div>


</div><!-- contact-container -->
</div><!-- wrapper -->

<?php get_footer(); ?>