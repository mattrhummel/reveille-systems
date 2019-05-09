<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
*  Template Name: About
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
<header class="header-content col-sm-12 pb-3">
<span class="text-uppercase subheader">
<?php the_field('about_page_subheader');  ?>
</span>
<?php the_title('<h1 class="h1 font-weight-bold my-3">', '</h1>', 'reveille-systems'); ?>
</header>

<div class="col-sm-12 col-lg-9">
<div class="entry-content pr-5">
<!--page entry content-->
<?php the_content(); ?>

</div>
</div>

<aside class="col-sm-12 col-md-3">

</aside>
</div>
</div>
</section>
<section class="pb-md-5 why-choose-section">

<div class="container">
<div class="row">

<div class="col-sm-12 col-md-12 col-lg-12">

<span class="text-uppercase subheader"><?php the_field('why_choose_subheader'); ?></span>
<h3 class="h3 font-weight-bold mb-3"><?php the_field('why_choose_main_heading'); ?></h1>

<div class="why-choose-slider owl-carousel owl-theme">
<?php
// check if the repeater field has rows of data
if( have_rows('why_choose_reveille') ):
// loop through the rows of data
while ( have_rows('why_choose_reveille') ) : the_row();
?>
<div class="item">
<div class="container-fluid">
	<div class="row d-flex">
		<div class="col-sm-12 col-md-6 why-choose-left-col p-md-0 m-md-0 ">
			<h3 class="h3 why-foreground-text align-self-center"><?php the_sub_field('why_choose_reason'); ?></h3>
			<span class="why-background-text  align-self-center"><?php the_sub_field('why_choose_reason'); ?></span>
		</div>
		<div class="col-sm-12 col-md-6 why-choose-right-col text-white p-md-0 m-md-0 d-flex justify-content-center align-content-between">
			<ul class="list-unstyled reasons p-4 justify-content-center align-self-center">
				<?php
				// check if the repeater field has rows of data
				if( have_rows('why_choose_reasons') ):
				// loop through the rows of data
				while ( have_rows('why_choose_reasons') ) : the_row();
				?>
				
				<li>
					<?php the_sub_field('reason_item'); ?>
				</li>
				
				
				<?php  endwhile;
				else :
				// no rows found
				endif;
				?>
				
				
			</ul>
		</div>
	</div>
</div>
</div><!--.item-->
<?php  endwhile;
else :
// no rows found
endif;
?>

</div><!--.slider-->
</div>
</div>
</div>
</section>
<!--experience,meet our team section-->
<section class="pt-sm-2 pt-md-5 our-team-section m-b-75">
<div class="container">
<div class="row">
<div class="col-sm-12 col-lg-10">
<span class="text-uppercase subheader"><?php the_field('meet_our_team_subheader'); ?></span>
<h1 class="h1 my-4"><?php the_field('meet_our_team_main_heading'); ?></h1>
<div class="pr-5"><?php the_field('meet_our_team_text'); ?></div>
</div>
</div>
<div class="container-fluid px-md-0">
<div class="row mt-3 team-boxes">
<div class="col-sm-12 d-md-flex px-0">
	<?php
	$args = array(
	
	'post_type' => 'team_members',
	'post_status' => 'publish',
	'posts_per_page' => 3,
	
	);
	$loop = new WP_Query( $args );
	
	while ( $loop->have_posts() ) : $loop->the_post();
	?>
	
	<div class="col-sm-12 col-md-4">
		<a href="<?php echo the_permalink(); ?>">
			<div class="card text-center">
				<div class="card-body">
					<div class="text-center p-4">
						<?php $image = get_field('team_member_image');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>"  height="180" width="180" class="rounded-circle"  alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
					</div>
					<span class="h7 text-capitalize"><?php the_field('team_member_title'); ?></span>
					<h6 class="h6"><?php the_title(); ?></h6>
				</div>
			</div>
		</a>
	</div>
	<?php
					endwhile;
				wp_reset_postdata();
	?>
	
	
	<div>
	</div>
</div>
</div>
</div>
</div>
</section>

<!--our customers section, who we serve-->
<section class="pb-sm-3 pb-md-4 our-customers-section">

<div class="container">
<div class="row">
<div class="col-sm-12 col-md-10 mb-4">
<span class="text-uppercase subheader"><?php the_field('our_customers_subheader'); ?></span>
<h1 class="h1 my-4"><?php the_field('our_customers_main_heading'); ?></h1>
<div><?php the_field('our_customers_text'); ?></div>

</div>
</div>
</div>


<div class="markets">
	<div class="container">
		<div class="row">

			<div class="col-sm-12 markets-content">

				<div class="row">

					<span class="text-uppercase subheader pl-1 pt-2 markets-heading"><?php the_field('our_customers_slider_subheader'); ?></span>


					<div class="markets-background"></div>

					<div class="markets-slider owl-carousel owl-theme">


					<?php
					// check if the repeater field has rows of data
					if( have_rows('our_customers_slider') ):
					// loop through the rows of data
					while ( have_rows('our_customers_slider') ) : the_row();
					?>

					<div class="item">

						<div class="container">
						<div class="row markets-slide-content">
							<div class="col-sm-12 col-md-6 markets-image">
							<?php $image = get_sub_field('customers_item_image');
							if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>"  height="550" width="550" alt="<?php echo $image['alt']; ?>" />
							<?php endif; ?>
							</div>
							<div class="col-sm-12 col-md-6 px-lg-5 markets-textbox">
							<h3 class="h3 mb-3 text-capitalize"><?php the_sub_field('customers_item_main_heading'); ?></h3>
							<div class="pb-md-4 pr-md-4"><?php the_sub_field('customers_item_text'); ?></div>
							</div>
						</div>
					</div>

					</div>

					<?php  endwhile;
					else :
					// no rows found
					endif;
					?>

					</div>

			</div><!--.slider-->
		</div>
		</div>
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