<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package reveille-systems
*
* Template Name: Careers
*
*/
get_header();
?>
<?php
while ( have_posts() ) :
the_post();  ?>
<!--page breadcrumbs-->
<div class="page-wrapper pb-5">
	<div class="gradient-underlay">
		<img class="watermark" src="<?php echo get_template_directory_uri(); ?>/img/r-watermark.png?>" alt="watermark">
	</div>
	<?php reveille_systems_breadcrumbs(); ?>
	<main id="content" class="site-content" role="main">
		<article class="entry-content">
			<div class="container">
				<div class="row">

				<header class="header-content col-sm-12 col-md-8 pb-3">
				<span class="text-uppercase subheader">
				 <?php the_field('careers_page_subheader');  ?>
				</span>
			   <?php the_title('<h1 class="h1 font-weight-bold">', '</h1>', 'reveille-systems'); ?>
			    </header>

					<div class="entry-content col-sm-12 col-md-9 pr-5">
						
						<?php the_content();?>
					</div>
					
					<aside class="col-sm-12 col-md-3 sidebar">
						
						<?php dynamic_sidebar('careers-sidebar'); ?>
					</aside>
				</div>
			</div>
			
		</article>
		</main><!-- #content -->
	</div>
	<?php endwhile; // End of the loop.
	get_footer();