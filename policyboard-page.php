<?php
/*
Template Name: Policy Board
*/

get_header(); ?>

<div class="wrapper">

<h1 class="page-header"><?php the_title(); ?></h1>

<div class="policyboard-container">

<div class="about-board">
<p><?php the_field('about_the_board'); ?></p>
<a href="<?php the_field('board_pdf_file'); ?>"><?php the_field('board_pdf_text'); ?></a>
</div>

<a href="<?php the_field('board_pdf_file'); ?>"><img class="board" src="<?php the_field('board_image'); ?>" /></a>

</div><!-- policyboard-container -->



<div class="meetings-container">

<h1 class="page-header">Meetings</h1>

<div class="about-meetings">
<p><?php the_field('about_the_meetings'); ?></p>
</div>


<div class="table">
    <div class="table-head">
        <div class="column" data-label="Meeting Date">Date</div>
        <div class="column" data-label="Agenda Files">Agenda</div>
        <div class="column" data-label="Minutes Files">Minutes</div>
    </div>

<?php
$args = array(
'post_type' => 'meetings',
'posts_per_page' => 6
);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <div class="row">
        <div class="column" data-label="Meeting Date"><?php the_field('date_of_meeting'); ?></div>
        <div class="column" data-label="Agenda Files">
<?php if( have_rows('agenda_files') ):
    while ( have_rows('agenda_files') ) : the_row(); ?>
 
        <a href="<?php the_sub_field('agenda_file_upload'); ?>"><?php the_sub_field('agenda_file_text'); ?></a>

    <?php endwhile;
else :
endif; ?>
        </div>
        <div class="column" data-label="Minutes Files"><a href="<?php the_field('minutes_file_upload'); ?>"><?php the_field('minutes_file_text'); ?></a></div>
   </div>


<?php endwhile; ?>

</div><!-- table -->

</div><!-- meetings-container -->


<div class="project-archive-nav">
<a href="/?page_id=150">All Meetings ></a>
</div>


</div><!-- wrapper -->

<?php get_footer(); ?>