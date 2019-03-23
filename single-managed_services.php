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

<div class="page-wrapper-services">
	
	<div class="gradient-underlay">
		<img class="watermark" src="<?php echo get_template_directory_uri(); ?>/img/r-watermark.png?>" alt="watermark">
	</div>

	<?php reveille_systems_breadcrumbs(); ?>

	<main id="content" class="site-content" role="main">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!--page header-->
		<section class="py-lg-5">
			<div class="container pb-5">
				<div class="row">

				<header class="header-content col-sm-12 col-md-8 pb-3">
				<span class="text-uppercase subheader">
				 <?php _e('our services','reveille-systems'); ?>
				</span>
			   <?php the_title('<h1 class="h1 font-weight-bold">', '</h1>', 'reveille-systems'); ?>
			    </header>

					<div class="entry-content col-sm-12 col-md-10 col-lg-9">

						<div class="pr-5">
							<!--page entry content-->
							<?php the_content(); ?>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-10  pt-3 pb-2">
						<div class="video-container bg-primary h-25 d-block">
							<!--page video-->
							video container
							
						</div>
					</div>
					
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-5 description-columns mr-lg-5 mb-sm-3">
						<span class="text-uppercase subheader"><?php the_field('description_column_1_subheader'); ?></span>
						<h2 class="h4 text-secondary"><?php the_field('description_column_1_main_heading'); ?></h2>
						<p><?php the_field('description_column_1_description'); ?></p>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-5 description-columns mb-sm-4">
						<span class="text-uppercase subheader"><?php the_field('description_column_2_subheader'); ?></span>
						<h2 class="h4 text-secondary"><?php the_field('description_column_2_main_heading'); ?></h2>
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
							<div class="row d-flex">
								<div class="col-sm-12 col-md-6 col-lg-4 pl-md-0">
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
								<div class="col-sm-12 col-md-6 col-lg-4 pl-md-0">
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
								<div class="col-sm-12 col-md-12 col-lg-4 pl-md-0 d-flex justify-content-center align-content-between">
									<a href="<?php the_field('primary_callto_url','option'); ?>" class="btn callto-button font-weight-bold text-lowercase justify-content-center align-self-center"><?php the_field('primary_callto_text','option'); ?><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="services-included service-reason pb-3">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-5">
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
	</article>
		</main><!-- #content -->
	</div>
	<?php 	endwhile; // End of the loop.
	?>
	<?php
	get_footer();