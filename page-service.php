<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
*  Template Name: Service
*
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
<!--page breadcrumbs-->

<div class="page-wrapper">
<div class="gradient-underlay">
	<img class="watermark" src="<?php echo get_template_directory_uri(); ?>/img/r-watermark.png?>" alt="watermark">
</div>

<nav class="container breadcrumb pt-5">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb pl-0">
			<li class="breadcrumb-item text-lowercase"><a href="#" class="text-muted text-light"><i class="fa fa-chevron-left  text-muted" aria-hidden="true"></i>
			Return to home</a></li>
			<li class="breadcrumb-item active font-weight-bold text-lowercase" aria-current="page">About us</li>
		</ol>
	</nav>
</nav>

<main id="content" class="site-content" role="main">

<!--page header-->
<section class="py-5">
	<div class="container pb-5">
		<div class="row">
			<div class="col-sm-12 pb-3">
				<span class="text-uppercase subheader">our services</span>
				<?php the_title( '<h1 class="h1 font-weight-bold">', '</h1>', true ); ?>
			</div>
			<div class="col-sm-12 col-md-9">
				<div class="entry-content pr-5">
					<!--page entry content-->
					<p>Reveille Systems, Inc. (pronounced rev-uh-lee) is a small business founded in 2010 and headquartered in Fredericksburg, VA. We specialize in information technology (IT) and management consulting services to both government and commercial clients. Reveille is defined as "a signal to rise or awaken", which is represented in our mission statement - "rising to serve your technology needs". Our management team brings a wealth of knowledge, expertise, and credentials to every engagement. With more than 60 years of combined IT Outsourcing and IT Service Management experience, your business will receive premier service, increased reliability, and decreased costs - a winning combination!</p>
					
				</div>
			</div>
			<div class="col-sm-12 col-md-10 py-3">
				<div class="video-container bg-primary h-25 d-block">
					<!--page video-->
					video container
					
				</div>
			</div>
			
		</div>
	</div>
		<div class="container">
		<div class="row">

			<div class="col-sm-12 col-md-5 description-columns">

				<span class="text-uppercase subheader">peace of mind</span>
				<h2 class="h4 text-secondary">Develop A Predictable IT Spend</h3>
				<p>Reveille Systems offers scalable flat-fee pricing for Managed IT Services that give you the clarity and consistency for your yearly IT budget. We also serve as a virtual CIO for your business to manage IT investments, perform cost-benefit analysis, and ensure return on investment (ROI) on capital improvements for small business to medium business in Washington DC & Fredericksburg VA areas. With Reveille Systems as your trusted technology partner, you are assured budget forecasting will be predictable and accurate.</p>

			</div>

			<div class="col-sm-12 col-md-5 description-columns">

				<span class="h5 text-primary text-uppercase subheader">smooth workflow</span>
				<h2 class="h4 text-secondary">Reduce Downtime and Lower Costs</h3>
				<p>By outsourcing the management of your company’s IT network with Reveille Systems, you’ll realize increased productivity resulting from improved uptime on your core business IT systems and applications. We also proactively monitor, patch, upgrade, secure and support your network infrastructure to identify and mitigate IT risks leading to fewer and less severe incidents; ultimately minimizing your costs for unplanned and major service interruptions.</p>

		   </div>	

		</div>
	</div>
</section>
<!--start custom field sections-->
<!--page contact callto section-->
<section class="services-included accent py-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<span class="text-uppercase subheader">everything we do</span>
				<h2 class="h4 text-capitalize">services included</h2>
				
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 col-md-4 pl-md-0">
						<ul class="list-unstyled">
								<li>Wide Area Network (WAN)</li>
								<li>Local Area Network (LAN)</li>
								<li>Software – Applications and Operating Systems</li>
								<li>Hardware – Firewalls, Servers, and Workstations</li>
								<li>Authentication, Rights, and Permissions</li>
						</ul>
						</div>
						<div class="col-sm-12 col-md-4 pl-md-0">
							<ul class="list-unstyled">
								<li>Hardware – Wireless Access Points</li>
								<li>Hardware – Wireless Access Points</li>
								<li>Internal and External Communication Solutions</li>
								<li>Trusted and Untrusted Sources</li>
							</ul>
						</div>
						<div class="col-sm-12 col-md-4 pl-md-0">
							<a href="#" type="button" class="btn callto-button font-weight-bold text-lowercase justify-content-center align-content-center">let's get started<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="services-included py-3 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-5">

				<span class="text-uppercase subheader">the bottom line</span>

				<h3 class="h4">Value Pricing</h3>
				<p>Reveille Systems offers customers with scalable pricing options for our IT Managed Services service plans for small business to medium business. Our service plan pricing varies based on the selected service level agreement and size of your business allowing you to choose the right managed service solution for your budget.</p>

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

<!--end page loop-->

</main><!-- #content -->
</div>

<?php endwhile; // End of the loop.
?>
<?php
get_footer();