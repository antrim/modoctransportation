<?php
/*
Template Name: Plans & Reports
*/

get_header(); ?>
<div class="wrapper">

<h1 class="page-header"><?php the_title(); ?></h1>

<div class="project-list-container">

<ul class="plansreports-list">
<h2>MCTC</h2>
<?php
$args = array(
'post_type' => 'plansreports',
'tax_query' => array(
    array(
        'taxonomy' => 'plansreports_cat',
        'field' => 'slug',
        'terms' => 'mctc'
    )
),
);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>

<li>
<h3><?php the_title(); ?></h3>

<p class="plansreports-description"><?php the_field('planreport_description'); ?></p>

<?php if( get_field('planreport_upload_file') ): ?>
	<p class="plansreports-link"><a href="<?php the_field('planreport_upload_file'); ?>"><?php the_field('planreport_file_caption'); ?></a></p>
<?php endif; ?>

<?php if( get_field('planreport_link_to_website') ): ?>
	<p class="plansreports-link"><a href="<?php the_field('planreport_link_to_website'); ?>">Link</a></p>
<?php endif; ?>
</li>

<?php endwhile; ?>
</ul><!-- project-list -->



<ul class="plansreports-list">
<h2>State</h2>
<?php
$args = array(
'post_type' => 'plansreports',
'tax_query' => array(
    array(
        'taxonomy' => 'plansreports_cat',
        'field' => 'slug',
        'terms' => 'state'
    )
),
);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>

<li>
<h3><?php the_title(); ?></h3>

<p class="plansreports-description"><?php the_field('planreport_description'); ?></p>

<?php if( get_field('planreport_upload_file') ): ?>
	<p class="plansreports-link"><a href="<?php the_field('planreport_upload_file'); ?>"><?php the_field('planreport_file_caption'); ?></a></p>
<?php endif; ?>

<?php if( get_field('planreport_link_to_website') ): ?>
<p class="plansreports-link"><a href="<?php the_field('planreport_link_to_website'); ?>">Link</a></p>
<?php endif; ?>
</li>

<?php endwhile; ?>
</ul><!-- project-list -->



</div><!-- project-list-container -->


<?php while ( have_posts() ) : the_post(); ?>

<div class="plansreports-more-info"><?php the_field('more_info_plansreports'); ?></div>

<?php endwhile; // end of the loop. ?>


<div class="plansreports-disclaimer">
<p>Some Documents are unavailable at this time. Please contact the MCTC office for a copy or reference for the specific Report or Plan.</p>
</div>



</div><!-- wrapper -->
<?php get_footer(); ?>