<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* Template Name: Contact
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package reveille-systems
*/
get_header();
?>
<?php
while ( have_posts() ) :
the_post();  ?>
<!--page breadcrumbs-->
<div class="page-wrapper-contact pb-5">
	<div class="gradient-underlay">
		<img class="watermark" src="<?php echo get_template_directory_uri(); ?>/img/r-watermark.png?>" alt="watermark">
	</div>
	<?php reveille_systems_breadcrumbs(); ?>
	<!--page header-->
	<main id="content" class="site-content" role="main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<section class="pd-b-100">
				<div class="container">
					<div class="row">

				<header class="header-content col-sm-12 col-md-8 pb-3">
				<span class="text-uppercase subheader">
				 <?php the_field('contact_page_subheader');  ?>
				</span>
			   <?php the_title('<h1 class="h1 font-weight-bold">', '</h1>', 'reveille-systems'); ?>
			    </header>

						<div class="entry-content col-sm-12 col-md-9">
							<div class="pr-5">

								<?php the_content();?>
								<?php echo do_shortcode("[wpforms id='240']"); ?>

							</div>

						</div>
					</div>
				</div>
			</section>
			</article>
		</main><!-- #content -->
		</div>
		<?php endwhile; // End of the loop.
		get_footer();
