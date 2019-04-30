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
<!--page breadcrumbs-->
<div class="page-wrapper cases">
	<div class="gradient-underlay-cases">
		<img class="watermark" src="<?php echo get_template_directory_uri(); ?>/img/r-watermark.png?>" alt="watermark">
	</div>
	<!--page header-->
	<section class="cases-intro">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 pb-3">
					<span class="text-uppercase subheader"><?php the_field('case_study_specific_page_heading', 'option'); ?></span>
					<h1 class="h1 font-weight-bold"><?php the_title(); ?></h1>
					<?php the_content();?>
				</div>
				<aside class="col-sm-12 col-md-4 sidebar">
					<?php get_sidebar(); ?>
				</aside>
			</div>
		</div>
	</section>
	<section class="case-study-description">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<span class="text-uppercase subheader"><?php the_field('case_study_description_sub_header'); ?></span>
					<h2 class="h3"><?php the_field('case_study_description_main_heading'); ?></h2>
					<div class="container-fluid">
						<div class="row case-description">
							<div class="gradient-overlay"></div>
							<div class="col-sm-12 col-md-6 case-study-left-col p-0">
								<?php $image = get_field('case_study_description_image');
								if( !empty($image) ): ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>
							</div>
							<div class="col-sm-12 col-md-6 case-study-right-col bg-primary text-white text-center d-flex justify-content-center align-content-between p-lg-5">
								<div class="justify-content-center align-self-center">
									<h3 class="h3 text-uppercase pb-3 pt-5"><img src="<?php echo get_template_directory_uri(); ?>/img/case-study-icons.png" alt="case study icon" height="31" width="31" class="mr-2" /><span><?php _e('objective', 'reveille-systems'); ?></span></h3>
									<?php the_field('case_study_description'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="solutions-section mt-5">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col col-md-8">
					<h3 class="h3 text-uppercase text-center text-primary"><img src="<?php echo get_template_directory_uri(); ?>/img/check-gear.png" alt="check gear icon" height="31" width="31" class="mr-2" /><span><?php _e('solutions', 'option'); ?></span></h3>
					<div class="text-center"><?php the_field('case_study_solution_description'); ?></div>
				</div>
			</div>
			<div class="row justify-content-md-center solutions-menu my-5">
				<div class="col-sm-12 col-md-12 col-lg-4 solutions-box mx-auto d-flex-block justify-center-center align-items-center px-5 py-3">
					<div class="circle-number"><span><?php _e('1', 'reveille-systems'); ?></span></div>
					<p class="p-4"><?php the_field('case_study_solution_box_1_text'); ?></p>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 solutions-box mx-auto d-flex-block justify-center-center align-items-center px-5 py-3">
					<div class="circle-number"><span><?php _e('2', 'reveille-systems'); ?></span></div>
					<p class="p-4"><?php the_field('case_study_solution_box_2_text'); ?></p>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 solutions-box mx-auto d-flex-block justify-center-center align-items-center px-5 py-3">
					<div class="circle-number"><span><?php _e('3', 'reveille-systems'); ?></span></div>
					<p class="p-4"><?php the_field('case_study_solution_box_3_text'); ?></p>
				</div>
			</div>
		</div>
	</section>
	<?php if( $testimonial_text = get_field('testimonial_text') ) { ?>
	<section class="testimonials mt-5 pd-tb-75">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col col-md-8 text-center ">
					<div class="gradient-underlay-testimonials">
						<img class="watermark" src="<?php echo get_template_directory_uri(); ?>/img/r-watermark.png?>" alt="watermark">
					</div>
					<h3 class="h5 text-uppercase text-primary"><?php the_field('testimonial_sub_heading', 'option'); ?> </h3>
					<h4 class="h3 text-capitalize text-secondary pb-4"><?php the_field('testimonial_main_heading', 'option'); ?></h4>
					<p class="pb-3"><?php the_field('testimonial_text'); ?></p>
					<p class="h5 text-primary text-uppercase"><?php the_field('testimonial_name'); ?></p>
				</div>
			</div>
		</div>
	</section>
	<?php } ?>
	<?php get_template_part( 'template-parts/content', 'get-started' );
	?>
</div>
<?php
endwhile; // End of the loop.
?>
<?php
get_footer();