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
<div class="page-wrapper">
	<div class="gradient-underlay">
		<img class="watermark" src="<?php echo get_template_directory_uri(); ?>/img/r-watermark.png?>" alt="watermark" />
	</div>
	<header class="container breadcrumb">
		<nav>
			<ol class="breadcrumb pl-0">
				<li class="breadcrumb-item text-lowercase"><a href="#" class="text-muted text-light"><i class="fa fa-chevron-left  text-muted" aria-hidden="true"></i>
				Return to home</a></li>
				<li class="breadcrumb-item active font-weight-bold text-lowercase" aria-current="page">About us</li>
			</ol>
		</nav>
	</header>
	
	<main id="content" class="site-content" role="main">
		<!--page header-->
		<section class="pb-5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 pb-3">
						<span class="text-uppercase subheader">What we do</span>
						<h1 class="h1 font-weight-bold">About our company</h1>
					</div>
					<div class="col-sm-12 col-md-9">
						<div class="entry-content pr-5">
							<!--page entry content-->
							<p>Reveille Systems, Inc. (pronounced rev-uh-lee) is a small business founded in 2010 and headquartered in Fredericksburg, VA. We specialize in information technology (IT) and management consulting services to both government and commercial clients. Reveille is defined as "a signal to rise or awaken", which is represented in our mission statement - "rising to serve your technology needs". Our management team brings a wealth of knowledge, expertise, and credentials to every engagement. With more than 60 years of combined IT Outsourcing and IT Service Management experience, your business will receive premier service, increased reliability, and decreased costs - a winning combination!</p>
							
						</div>
					</div>
					
					<!--sidebar if needed-->
					<aside class="col-sm-12 col-md-3">
						
					</aside>
				</div>
			</div>
		</section>
		<!--start custom field sections-->
		<!--why choose reveille section-->
		<section class="pb-md-5 why-choose-section">
			
			<div class="container">
				<div class="row">
					
					<div class="col-sm-12 col-md-10">
						
						<span class="text-uppercase subheader">Subheader here</span>
						<h1 class="h3 fontweight-bold">Why Choose Reveille?</h1>
						
						<div class="why-choose-slider owl-carousel owl-theme">
							<div class="item">
								<div class="container-fluid">
									<div class="row">
										<div class="col-sm-12 col-md-6 why-choose-left-col p-md-0 m-md-0">
											<h3 class="h3 why-foreground-text">Experience</h3>
											<span class="why-background-text">Experience</span>
										</div>
										<div class="col-sm-12 col-md-6 why-choose-right-col text-white  p-md-0 m-md-0">
											<ul class="list-unstyled reasons p-4 justify-content-center align-content-between">
												<li>
													80+ years of combined management and leadership experience delivering management and technical solutions
												</li>
												<li >
													Our team holds degrees in business and computer information systems, providing both the insight and ability to solve complex technology challenges
												</li>
												<li >
													Certifications from CompTIA, Microsoft, Project Management Institute (PMI)
												</li>
												<li >
													Information Technology Information Library (ITIL), and (ISC)2
												</li>
											</ul>
										</div>
									</div>
								</div>
								</div><!--.item-->
								<div class="item">
									<div class="container-fluid">
										<div class="row">
											<div class="col-sm-12 col-md-6 why-choose-left-col p-md-0 m-md-0">
												<h3 class="h3 why-foreground-text">Experience</h3>
												<span class="why-background-text">Experience</span>
											</div>
											<div class="col-sm-12 col-md-6 why-choose-right-col text-white  p-md-0 m-md-0">
												<ul class="list-unstyled reasons p-4 justify-content-center align-content-between">
													<li>
														80+ years of combined management and leadership experience delivering management and technical solutions
													</li>
													<li >
														Our team holds degrees in business and computer information systems, providing both the insight and ability to solve complex technology challenges
													</li>
													<li >
														Certifications from CompTIA, Microsoft, Project Management Institute (PMI)
													</li>
													<li >
														Information Technology Information Library (ITIL), and (ISC)2
													</li>
												</ul>
											</div>
										</div>
										</div><!--.item-->
									</div>
									</div><!--.slider-->
								</div>
							</div>
						</div>
					</section>
					<!--experience,meet our team section-->
					<section class="pt-sm-2 pt-md-5 pd-b-100 our-team-section">
						<div class="container">
							<div class="row">
								<div class="col-sm-12 col-md-10">
									<span class="text-uppercase subheader">experiance and expertise</span>
									<h1 class="h1">Meet Our Team</h1>
									<p class="pr-5">Reveille Systems has assembled a leadership team that combines industry expertise in technology, management, and training solutions with market expertise across both government and commercial client organizations. This balance of experience provides clients with a depth and breadth of experience ensuring each engagement achieves maximum results.</p>
								</div>
							</div>
							<div class="container-fluid px-md-0">
								<div class="row mt-3 team-boxes">
									<div class="col-sm-12 col-md-11 d-md-flex px-0">
										<div class="ccol-sm-12 col-md-4">
											<a href="#">
												<div class="card text-center">
													<div class="card-body">
														<div class="text-center p-4">
															<img src="https://image-placeholder.com/images/actual-size/160x160.png" class="rounded-circle" alt="..." height="180" width="180">
														</div>
														<span class="h7 text-capitalize">President & CEO</span>
														<h6 class="h6">Tyler Newton, Jr.</h6>
													</div>
												</div>
											</a>
										</div>
										
										<div class=" col-sm-12 col-md-4">
											<a href="#">
												<div class="card text-center">
													<div class="card-body">
														<div class="text-center p-4">
															<img src="https://image-placeholder.com/images/actual-size/160x160.png" class="rounded-circle" alt="..." height="180" width="180">
														</div>
														<span class="h7 text-capitalize">president & ceo</span>
														<h6 class="h6">VP & CTO</h6>
													</div>
												</div>
											</a>
										</div>
										
										<div class="col-sm-12 col-md-4">
											<a href="#">
												<div class="card text-center">
													<div class="card-body">
														<div class="text-center  p-4">
															<img src="https://image-placeholder.com/images/actual-size/160x160.png" class="rounded-circle" alt="..." height="180" width="180">
														</div>
														<span class="h7  text-capitalize">vp & cto</span>
														<h6 class="h6">Gary Black</h6>
													</div>
												</div>
											</a>
										</div>
										
										<div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!--our customers section, who we serve-->
					<section class="pb-sm-3 pb-md-5 our-customers-section">
						<div class="container">
							<div class="row">
								<div class="col-sm-12 col-md-10 mb-4">
									<span class="text-uppercase subheader">our customers</span>
									<h1 class="h1">Who We Serve</h1>
									<p>Reveille Systems provides IT services and solutions to a broad range of businesses, government agencies, and non-profit organizations. Our management and solution delivery teams bring a diverse knowledgebase and years of experience to each engagement. This level of experience and expertise gives us unique insight into our client's business goals and technology requirements. No matter what type of business you own, let Reveille Systems rise to serve your technology needs!</p>
									
									
								</div>
							</div>
						</div>
						<div class="markets">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 col-md-6">
										<div class="row">
											<div class="col-sm-12 col-md-11 box-image">
												<img src="<?php echo get_template_directory_uri(); ?>/img/about-placeholder.png" height="550" width="550" alt="about placeholder" />
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-md-11 offset-sm-0 offset-md-1 box-background">
							
										<div class="col-sm-12 col-md-6 box-text float-right mr-md-4">

											<span class="text-uppercase subheader pl-1 pt-2">our markets</span>
											
											<div class="markets-slider owl-carousel owl-theme">

												<div class="item">
													
													<h4 class="h4 text-capitalize">Financial Sector</h4>
													<p class="pb-md-5 pr-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum venenatis, erat vitae porta ornare, libero nulla rutrum metus, in rutrum lectus enim vel velit. Duis ex mi, posuere quis ligula ut, maximus accumsan arcu. Curabitur hendrerit odio eget fringilla dictum.</p>
													
												</div>

												<div class="item">
												
													<h4 class="h4 text-capitalize">Financial Sector</h4>
													<p class="pb-md-5 pr-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum venenatis, erat vitae porta ornare, libero nulla rutrum metus, in rutrum lectus enim vel velit. Duis ex mi, posuere quis ligula ut, maximus accumsan arcu. Curabitur hendrerit odio eget fringilla dictum.</p>
													
												</div>

												<div class="item">
													
													<h4 class="h4 text-capitalize">Financial Sector</h4>
													<p class="pb-md-5 pr-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum venenatis, erat vitae porta ornare, libero nulla rutrum metus, in rutrum lectus enim vel velit. Duis ex mi, posuere quis ligula ut, maximus accumsan arcu. Curabitur hendrerit odio eget fringilla dictum.</p>
													
												</div>												
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</section>
					
					<!--page contact callto section-->
					<section class="get-started">
						<div class="container">
							<div class="row">
								<div class="col-sm-12 col-md-10">
									<span class="text-uppercase text-primary subheader">what we do</span>
									<h2 class="h2 text-capitalize">let's get started</h2>
									<p class="pt-3 pb-3">If you want the benefits of maximizing your financial investment and increasing organizational performance, then give us a call and let our team rise to serve your technology needs!</p>
									<a href="#" type="button" class="btn callto-button font-weight-bold text-lowercase">let's get started<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</section>
					</main><!-- #content -->
				</div>
				<!--end page loop-->
				<?php endwhile; // End of the loop.
				?>
				<?php
				get_footer();