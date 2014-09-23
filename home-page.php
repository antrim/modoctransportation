<?php
/*
Template Name: Home
*/

get_header(); ?>


<div class="home-banner-container">
<div class="home-banner">
<div class="welcome">
<h1><?php the_field('banner_title'); ?></h1>
<p><?php the_field('banner_copy'); ?></p>
</div>
<img src="<?php the_field('banner_image'); ?>" />
</div>
</div>
</div>

<div class="wrapper">


<div class="recent-updates">
<h1>Recent Updates</h1>

<?php
$args = array(
'post_type' => array ('projects', 'plansreports', 'minutes' ),
'tax_query' => array(
    array(
        'taxonomy' => 'featured',
        'field' => 'slug',
        'terms' => 'yes'
    )
),
'posts_per_page' => 2
);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>

<div class="update">

<div class="update-more">
<?php if ( 'projects' == get_post_type() ) { ?>
<h3><?php echo get_the_date('n-j-Y'); ?></h3>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<h4><a href="/?page_id=10">More Projects ></a></h4>
<?php } ?>

<?php if ( 'plansreports' == get_post_type() ) { ?>
<h3><?php echo get_the_date('n-j-Y'); ?></h3>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<h4><a href="/?page_id=12">More Plans & Reports ></a></h4>
<?php } ?>

<?php if ( 'minutes' == get_post_type() ) { ?>
<h3><?php echo get_the_date('n-j-Y'); ?></h3>
<h2><a href="/?page_id=14">New Meeting Posted</a></h2>
<h4><a href="/?page_id=14">More Minutes ></a></h4>
<?php } ?>
</div><!-- update-more -->

</div><!-- update -->

<?php endwhile; ?>

</div><!-- recent-updates -->

</div><!-- wrapper -->



<div class="home-bottom">
<?php while ( have_posts() ) : the_post(); ?>

<div class="wrapper">

<div class="home-bottom-left">
<?php the_field('about_modoc_county'); ?>
</div>

<div class="home-bottom-right">
<img class="sage-stage-logo" src="<?php the_field('sage_stage_logo'); ?>" />
<?php the_field('about_sage_stage'); ?>
</div>

<?php endwhile; ?>
</div>


</div><!-- wrapper -->



<?php get_footer(); ?>