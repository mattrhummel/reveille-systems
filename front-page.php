<?php
/**
* The template for displaying all pages
*
* This is the template that displays the home page.
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package reveille-systems
*
*/
get_header();
?>
<?php
while ( have_posts() ) :
the_post();  ?>
<?php endwhile; // End of the loop.
?>

	<?php get_template_part( 'template-parts/home/content', 'hero' );?>

		
		<?php get_template_part( 'template-parts/home/content', 'services' );?>
		<?php get_template_part( 'template-parts/home/content', 'service-plans' );?>
		

		<!--packages section-->
		<section class="packages-section">
			   <div class="gradient-underlay-home d-sm-none d-md-block">
						<img class="watermark" src="<?php echo get_template_directory_uri(); ?>/img/r-watermark.png" alt="watermark">
					</div>
			<?php get_template_part( 'template-parts/home/content', 'packages' );?>
			<?php get_template_part( 'template-parts/home/content', 'case-studies' );?>
		</section>

		<?php get_template_part( 'template-parts/home/content', 'about-us' );?>


<section class="get-started m-b-75">
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

<?php
get_footer();