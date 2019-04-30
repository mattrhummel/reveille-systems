<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
*  Template Name: Packages Archive
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package reveille-systems
*
*/
get_header();
while (have_posts()) : the_post();  ?>

<div class="page-wrapper-packages">

	<div class="gradient-underlay">
		<img class="watermark" src="<?php echo get_template_directory_uri(); ?>/img/r-watermark.png?>" alt="watermark" />
	</div>
	<?php reveille_systems_breadcrumbs(); ?>
	
	<main id="content" class="site-content" role="main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<section class="pb-5">
				<div class="container">
					<div class="row">
						<header class="header-content col-sm-12 col-lg-10 pb-3">
							<span class="text-uppercase subheader">
								<?php the_field('about_page_subheader');  ?>
							</span>
							<?php the_title('<h1 class="h1 font-weight-bold">', '</h1>', 'reveille-systems'); ?>
						</header>
						<div class="col-sm-12 col-md-9">
							<div class="entry-content pr-5">
								<!--page entry content-->
								<?php the_content(); ?>
							</div>
						</div>
						<!--sidebar if needed-->
						<aside class="col-sm-12 col-md-3">
							<?php dynamic_sidebar('careers-sidebar'); ?>
						</aside>
					</div>
				</div>
			</section>
			
			<?php
			$args = array(
			'post_type' => 'reveille_packages',
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'ord'
			);
			$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
			?>
			<section class="package-box-archive py-5 m-t-100">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-lg-6">
							<div class="row">
								<div class="col-sm-12 col-lg-11 box-image">
									
							<?php $image = get_field('package_list_featured_image');
								if( !empty($image) ): ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" height="550" width="550" />
							<?php endif; ?>

								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-md-7 col-lg-10 offset-lg-2 box-background p-0 pt-4">
									<div class="col-sm-12 col-lg-8 offset-lg-5 box-text p-lg-3 mt-sm-3 pr-md-5">
										<span class="text-uppercase text-primary subheader"><?php the_field('package_sub_header'); ?></span>
										<h4 class="h4 text-capitalize"><?php the_title(); ?></h4>
										<div class="col-md-6 col-lg-10 pr-lg-3 pl-0">
											<div class="pr-lg-5">
												<?php the_field('package_description'); ?>
											</div>
										</div>
										<div class="row no-gutters py-md-5 pr-md-5 pb-sm-5">
											<div class="col-sm-6 col-md-6 pr-md-5">
												<div class="col col-sm-7 col-md-7 d-md-inline-block p-0 m-0">
													<p class="text-primary text-md-right p-0 incident-text"><?php the_field('incident_col_1_text'); ?>
													</p>
												</div>
												<div class="col col-sm-3 col-md-3 p-0 d-md-inline-block">
													<span class="text-md-right align-baseline incident-hour"><?php the_field('incident_col_1_hours'); ?></span>
												</div>
											</div>
											<div class="col-sm-5 col-md-5 incident-divider">
												<div class="col col-sm-7 col-md-7 p-0 m-0 d-md-inline-block">
													<p class="text-primary text-md-right incident-text"><?php the_field('incident_col_2_text'); ?>
													</p>
												</div>
												<div class="col col-sm-3 col-md-3 p-0 d-md-inline-block">
													<span class="text-md-right align-baseline incident-hour"><?php the_field('incident_col_2_hours'); ?></span>
												</div>
											</div>
										</div>
									</div>
									<div class="row expanded no-gutter p-0 m-0">
										<div class="col-md-12 bg-primary p-3 package-box-callto">
											<div class="col-sm-12 col-md-12 col-lg-4 offset-lg-8">
												<a href="<?php the_permalink(); ?>" class="btn callto-button font-weight-bold text-lowercase text-md-right"><?php the_field('learn_more_button_text'); ?><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</section><!--.aboutus-->
				
				<?php
					endwhile;
					wp_reset_postdata();
				?>
				

</section>

	  <section class="get-started pd-b-75 m-t-75">
	    <div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-10">
				<span class="text-uppercase subheader"><?php the_field('get_started_subheader', 'option'); ?></span>
				<h2 class="h2 text-capitalize"><?php the_field('get_started_main_heading', 'option') ?></h2>
				<p class="pt-3 pb-3"><?php the_field('get_started_description', 'option') ?></p>
				<a href="<?php the_field('get_started_callto_url', 'option'); ?>" class="btn callto-button font-weight-bold text-lowercase"><?php the_field('get_started_callto_text', 'option') ?><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</section>


			</article>
			</main><!-- #content -->
		</div>
		<!--end page loop-->
		<?php endwhile; // End of the loop.
		?>
		<?php
		get_footer();