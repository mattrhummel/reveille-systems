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
<div class="page-wrapper">
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
				<?php the_field('team_member_title'); ?>

				</span>
				<h1 class="h1 font-weight-bold pb-3"><?php the_title(); ?></h1>

			    </header>

								<div class="entry-content col-sm-12 col-md-9 pr-5">
						
											<?php $image = get_field('team_member_image');
												if( !empty($image) ): ?>
								<img src="<?php echo $image['url']; ?>"  height="180" width="180" class="rounded-circle float-left mr-3"  alt="<?php echo $image['alt']; ?>" />
												<?php endif; ?>
									<?php the_field('team_member_bio'); ?>

					</div>
					
				</div>
			</div>
			
		</article>
		</main><!-- #content -->
	</div>
<?php
endwhile; // End of the loop.
?>
<?php
get_footer();