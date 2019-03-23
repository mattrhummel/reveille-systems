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
while ( have_posts() ) : the_post();  ?>
<!--page breadcrumbs-->
<div class="page-wrapper-about">
	<div class="gradient-underlay">
		<img class="watermark" src="<?php echo get_template_directory_uri(); ?>/img/r-watermark.png?>" alt="watermark" />
	</div>
	<?php reveille_systems_breadcrumbs(); ?>
	<main id="content" class="site-content" role="main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<!--page header-->
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
							
						</aside>
					</div>
				</div>
			</section>

					
					<?php get_template_part( 'template-parts/content', 'get-started' );
					?>
				</article>
				</main><!-- #content -->
			</div>
			<!--end page loop-->
			<?php endwhile; // End of the loop.
			?>
			<?php
			get_footer();