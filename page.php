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

<nav class="container breadcrumb">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb pl-0">
			<li class="breadcrumb-item text-lowercase"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-muted text-light"><i class="fa fa-chevron-left  text-muted" aria-hidden="true"></i>
			<?php _e('return to home', 'reveille-systems'); ?></a></li>
			<li class="breadcrumb-item active font-weight-bold text-lowercase" aria-current="page"><?php the_title(); ?></li>
		</ol>
	</nav>
</nav>
<!--page header-->

<main id="content" class="site-content" role="main">

<section class="pd-b-100 entry-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 pb-3">
				<span class="h2 text-primary text-uppercase subheading">let's get started</span>
				<h1 class="h1 font-weight-bold"><?php the_title(); ?></h1>
			</div>
			<div class="col-sm-12 col-md-9">
				<div class="entry-content pr-5">
					
				<?php the_content();?>	

				</div>
			</div>
			
			<!--sidebar if needed-->
			<aside class="col-sm-12 col-md-3">
			<a href="#" type="button" class="btn h6 callto-button font-weight-bold">contact us<i class="fa fa-chevron-right" aria-hidden="true"></i></a>


			</aside>
		</div>
	</div>
</section>

</main><!-- #content -->
</div>

<?php endwhile; // End of the loop.
get_footer();
