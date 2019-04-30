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
<div class="page-wrapper-packages-specific">
	
	<div class="gradient-underlay">
		<img class="watermark" src="<?php echo get_template_directory_uri(); ?>/img/r-watermark.png?>" alt="watermark">
	</div>
	
	<?php reveille_systems_breadcrumbs(); ?>
	
	<main id="content" class="site-content" role="main">
		<article class="pd-b-100 entry-content">
			
			<div class="container">
				<div class="row">
					<header class="header-content col-sm-12 col-md-10 pb-3">
						<span class="text-uppercase subheader">
							<?php _e('managed services', 'reveille-systems'); ?>
						</span>
						<h1 class="h1 font-weight-bold pb-3"><?php the_title(); ?></h1>
					</header>
					<div class="entry-content col-sm-12 col-md-9 pr-5">
						<div class="pr-5">
							<?php the_field('package_description'); ?>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-10  pt-3 pb-2">

						<div class="video-container bg-primary h-25 d-block">
							<?php $image = get_field('package_featured_image');
							if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<?php endif; ?>
						</div>

					</div>
				</div>
			</div>
			
			<?php get_template_part( 'template-parts/packages-specific/content', 'details-table' );?>
			<?php get_template_part( 'template-parts/packages-specific/content', 'package-details-boxes' );?>
			<?php get_template_part( 'template-parts/packages-specific/content', 'related-cases' );?>
			
			<?php get_template_part( 'template-parts/content', 'get-started' ); ?>
			
		</article>
		</main><!-- #content -->
	</div>
	<?php
	endwhile; // End of the loop.
	?>
	<?php
	get_footer();