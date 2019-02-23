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
<div class="page-wrapper cases">
	<div class="gradient-underlay-cases">
		<img class="watermark" src="<?php echo get_template_directory_uri(); ?>/img/r-watermark.png?>" alt="watermark">
	</div>


	<!--page header-->
	<section class="cases-intro">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 pb-3">
					<span class="h2 text-primary text-uppercase subheading">what we do</span>
					<h1 class="h1 font-weight-bold"><?php the_title(); ?></h1>
						<?php the_content();?>
					</div>
				
				<!--sidebar if needed-->
				<aside class="col-sm-12 col-md-4 sidebar">
					<a href="#" type="button" class="btn h6 callto-button font-weight-bold float-right">let's get started<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</aside>
			</div>
		</div>
	</section>
	<section class="case-study-description">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-10">
					<span class="text-uppercase subheader">Subheader here</span>
					<h2 class="h3">Case Study Description</h2>
					<div class="container-fluid">
						<div class="row case-description">
							<div class="gradient-overlay"></div>
							<div class="col-sm-12 col-md-6 case-study-left-col p-0">
								
								<img src="<?php echo get_template_directory_uri(); ?>/img/service-image-placeholder.jpg" alt="">
							</div>
							<div class="col-sm-12 col-md-6 case-study-right-col bg-primary text-white text-center mx-auto d-flex-block justify-center-center align-items-center p-5">
								
								<h3 class="h3 text-uppercase pb-3 pt-5"><img src="<?php echo get_template_directory_uri(); ?>/img/case-study-icons.png" alt="case study icon" height="31" width="31" class="mr-2" /><span>objective</span></h3>
								<p>SA was faced with a number of information technology (IT) challenges including a growing workforce and volume of data transactions. These challenges required technology insertions to increase employee productivity and efficiency throughout the office environment.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="solutions-section my-5">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col col-md-8">
					<h3 class="h3 text-uppercase text-center text-primary"><img src="<?php echo get_template_directory_uri(); ?>/img/check-gear.png" alt="check gear icon" height="31" width="31" class="mr-2" /><span>solutions</span></h3>
					<p class="text-center">SA was faced with a number of information technology (IT) challenges including a growing workforce and volume of data transactions. These challenges required technology insertions to increase employee productivity and efficiency throughout the office environment.</p>
				</div>
			</div>
			<div class="row justify-content-md-center solutions-menu my-5">
				
				<div class="col col-md-4 solutions-box mx-auto d-flex-block justify-center-center align-items-center px-5 py-3">
					<div class="circle-number"><span>1</span></div>
					<p class="p-4">Planning, design, and acquisition of all IT solutions required for transitioning the firm from a workgroup network to a fully-integrated Windows Active Directory and server-based network including implementation of file & printing servers, MS Exchange, and Symantec Endpoint Protection</p>
				</div>
				
				<div class="col col-md-4 solutions-box mx-auto d-flex-block justify-center-center align-items-center px-5 py-3">
					<div class="circle-number"><span>2</span></div>
					<p class="p-4">Planning, design, and migration of the phone system; analog system with Verizon to a hosted VoIP system through Apptix including vendor coordination, configuration changes to current IT infrastructure, and deployment of new handsets</p>
				</div>
				
				<div class="col col-md-4 solutions-box mx-auto d-flex-block justify-center-center align-items-center px-5 py-3">
					<div class="circle-number"><span>3</span></div>
					<p class="p-4">Assisted the firm with vendor research for centralized printing, scanning, and faxing solution; provided cost analysis and risk/benefit support to decision makers; resulting solution decreased production costs and increased workflow efficiency in the office</p>
				</div>
			</div>
		</div>
	</section>
	<!--page contact callto section-->
	<section class="get-started">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-10">
					<span class="text-uppercase subheader">what we do</span>
					<h2 class="h2 text-capitalize">let's get started</h2>
					<p class="pt-3 pb-3">If you want the benefits of maximizing your financial investment and increasing organizational performance, then give us a call and let our team rise to serve your technology needs!</p>
					<a href="#" type="button" class="btn callto-button font-weight-bold text-lowercase">let's get started<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</section>
</div>


<?php 	endwhile; // End of the loop.
		?>
<?php
get_footer();
