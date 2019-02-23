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


	<main id="content" class="site-content" role="main">
		
		<?php get_template_part( 'template-parts/home/content', 'services' );?>
		<?php get_template_part( 'template-parts/home/content', 'service-plans' );?>
		

		<!--packages section-->
		<section class="packages-section">
			<?php get_template_part( 'template-parts/home/content', 'packages' );?>
			<?php get_template_part( 'template-parts/home/content', 'case-studies' );?>
		</section>

		<?php get_template_part( 'template-parts/home/content', 'about-us' );?>
		<?php get_template_part( 'template-parts/content', 'get-started' );
		?>


		
<?php
get_footer();