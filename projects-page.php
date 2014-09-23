<?php
/*
Template Name: Projects
*/

get_header(); ?>
<div class="wrapper">

<h1 class="page-header"><?php the_title(); ?></h1>

<div class="project-map">Map</div>

<div class="project-list-container">


<ul class="project-list">
<h2>MCTC</h2>
<?php
$args = array(
'post_type' => 'projects',
'tax_query' => array(
	'relation' => 'AND',
	array(
		'taxonomy' => 'project_category',
		'field'    => 'slug',
		'terms'    => 'mctc'
	),
	array(
		'taxonomy' => 'project_status',
		'field'    => 'slug',
		'terms'    => 'active'
	)
)
);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>

<li>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
</li>

<?php endwhile; ?>
</ul><!-- project-list -->



<ul class="project-list">
<h2>City</h2>
<?php
$args = array(
'post_type' => 'projects',
'tax_query' => array(
	'relation' => 'AND',
	array(
		'taxonomy' => 'project_category',
		'field'    => 'slug',
		'terms'    => 'city'
	),
	array(
		'taxonomy' => 'project_status',
		'field'    => 'slug',
		'terms'    => 'active'
	)
)
);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>

<li>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
</li>

<?php endwhile; ?>
</ul><!-- project-list -->



<ul class="project-list">
<h2>County</h2>
<?php
$args = array(
'post_type' => 'projects',
'tax_query' => array(
	'relation' => 'AND',
	array(
		'taxonomy' => 'project_category',
		'field'    => 'slug',
		'terms'    => 'county'
	),
	array(
		'taxonomy' => 'project_status',
		'field'    => 'slug',
		'terms'    => 'active'
	)
)
);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>

<li>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
</li>

<?php endwhile; ?>
</ul><!-- project-list -->



<ul class="project-list">
<h2>State</h2>
<?php
$args = array(
'post_type' => 'projects',
'tax_query' => array(
	'relation' => 'AND',
	array(
		'taxonomy' => 'project_category',
		'field'    => 'slug',
		'terms'    => 'state'
	),
	array(
		'taxonomy' => 'project_status',
		'field'    => 'slug',
		'terms'    => 'active'
	)
)
);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>

<li>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
</li>

<?php endwhile; ?>
</ul><!-- project-list -->

<div class="group"></div>

<ul class="project-list">
<h2>Federal</h2>
<?php
$args = array(
'post_type' => 'projects',
'tax_query' => array(
	'relation' => 'AND',
	array(
		'taxonomy' => 'project_category',
		'field'    => 'slug',
		'terms'    => 'federal'
	),
	array(
		'taxonomy' => 'project_status',
		'field'    => 'slug',
		'terms'    => 'active'
	)
)
);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>

<li>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
</li>

<?php endwhile; ?>
</ul><!-- project-list -->


</div><!-- project-list-container -->

<div class="project-archive-nav">
<a href="/?page_id=94">Past Projects ></a>
</div>

</div><!-- wrapper -->
<?php get_footer(); ?>