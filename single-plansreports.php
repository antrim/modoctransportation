<?php
/**
 * The template for displaying plans & reports posts.
 *
 * @package mctc
 */

get_header(); ?>
<div class="wrapper">

<h1 class="page-header"><?php the_title(); ?></h1>

<div class="project-list-container">

<ul class="plansreports-list">
<li>
<p class="plansreports-description"><?php the_field('planreport_description'); ?></p>

<?php if( get_field('planreport_upload_file') ): ?>
	<p class="plansreports-link"><a href="<?php the_field('planreport_upload_file'); ?>"><?php the_field('planreport_file_caption'); ?></a></p>
<?php endif; ?>

<?php if( get_field('planreport_link_to_website') ): ?>
<p class="plansreports-link"><a href="<?php the_field('planreport_link_to_website'); ?>">Link</a></p>
<?php endif; ?>
</li>

</ul><!-- project-list -->


</div><!-- project-list-container -->


<div class="plansreports-disclaimer">
<p>Some Documents are unavailable at this time. Please contact the MCTC office for a copy or reference for the specific Report or Plan.</p>
</div>


<div class="project-archive-nav">
<a href="/?page_id=12">All Plans & Reports ></a>
</div>



</div><!-- wrapper -->
<?php get_footer(); ?>