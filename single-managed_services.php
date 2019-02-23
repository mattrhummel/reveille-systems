<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package reveille-systems
 */

get_header();
?>

<?php

while ( have_posts() ) :
			the_post();  ?>

		

<div class="page-wrapper">
<div class="gradient-underlay">
	<img class="watermark" src="<?php echo get_template_directory_uri(); ?>/img/r-watermark.png?>" alt="watermark">
</div>

<nav class="container breadcrumb pt-5">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb pl-0">
			<li class="breadcrumb-item text-lowercase"><a href="#" class="text-muted text-light"><i class="fa fa-chevron-left  text-muted" aria-hidden="true"></i>
			Return to home</a></li>
			<li class="breadcrumb-item active font-weight-bold text-lowercase" aria-current="page">About us</li>
		</ol>
	</nav>
</nav>

<main id="content" class="site-content" role="main">

<!--page header-->
<section class="py-5">
	<div class="container pb-5">
		<div class="row">
			<div class="col-sm-12 pb-3">
				<span class="text-uppercase subheader"><?php the_field('services_subheader'); ?></span>
				<?php the_title( '<h1 class="h1 font-weight-bold">', '</h1>', true ); ?>
			</div>
			<div class="col-sm-12 col-md-9">
				<div class="entry-content pr-5">
					<!--page entry content-->
					<?php the_content(); ?>
				</div>
			</div>
			<div class="col-sm-12 col-md-10 py-3">
				<div class="video-container bg-primary h-25 d-block">
					<!--page video-->
					video container
					
				</div>
			</div>
			
		</div>
	</div>
		<div class="container">
		<div class="row">

			<div class="col-sm-12 col-md-5 description-columns">

				<span class="text-uppercase subheader"><?php the_field('description_column_1_subheader'); ?></span>
				<h2 class="h4 text-secondary"><?php the_field('description_column_1_main_heading'); ?></h3>
				<p><?php the_field('description_column_1_description'); ?></p>

			</div>

			<div class="col-sm-12 col-md-5 description-columns">

				<span class="text-uppercase subheader"><?php the_field('description_column_2_subheader'); ?></span>
				<h2 class="h4 text-secondary"><?php the_field('description_column_2_main_heading'); ?></h3>
				<p><?php the_field('description_column_2_description'); ?></p>

			</div>

		</div>
	</div>
</section>
<!--start custom field sections-->
<!--page contact callto section-->
<section class="services-included accent py-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<span class="text-uppercase subheader"><?php the_field('included_services_subheader'); ?></span>
				<h2 class="h4 text-capitalize"><?php the_field('included_services_main_heading'); ?></h2>
				
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 col-md-4 pl-md-0">
						<ul class="list-unstyled">

							<?php 
// check if the repeater field has rows of data
if( have_rows('is_col_1_list') ):

 	// loop through the rows of data
    while ( have_rows('is_col_1_list') ) : the_row();  ?>

       
       <li> <?php 
 		// display a sub field value
       the_sub_field('is_col_1_list_item'); ?> </li>

<?php    

endwhile;

else :

    // no rows found

endif;

?>

								
						</ul>
						</div>
						<div class="col-sm-12 col-md-4 pl-md-0">
							<ul class="list-unstyled">
								
							<?php 
// check if the repeater field has rows of data
if( have_rows('is_col_2_list') ):

 	// loop through the rows of data
    while ( have_rows('is_col_2_list') ) : the_row();  ?>

       
       <li> <?php 
 		// display a sub field value
       the_sub_field('is_col_2_list_item'); ?> </li>

<?php    endwhile;

else :

    // no rows found

endif;

?>
							</ul>
						</div>
						<div class="col-sm-12 col-md-4 pl-md-0">
							<a href="#" type="button" class="btn callto-button font-weight-bold text-lowercase justify-content-center align-content-center">let's get started<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="services-included service-reason py-3 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-5">

				<span class="text-uppercase subheader"><?php the_field('service_reason_subheader'); ?></span>

				<h3 class="h4"><?php the_field('service_reason_main_heading'); ?></h3>
				<p><?php the_field('service_reason_description'); ?></p>

		   </div>
		</div>
    </div>
  </section>
<!--page contact callto section-->

<?php get_template_part( 'template-parts/content', 'get-started' );
 ?>


<!--end page loop-->

</main><!-- #content -->
</div>


<?php 	endwhile; // End of the loop.
		?>
<?php
get_footer();
