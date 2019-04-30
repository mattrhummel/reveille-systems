		<section class="package-details-boxes mt-5 m-t-75">
			<div class="container">
				<div class="row">
					
					<div class="col col-md-12">
						
					<span class="text-uppercase section-subheader"><?php the_field('managed_services_sub_heading', 'option'); ?></span>
					<h2 class="h2 text-capitalize"><?php the_field('managed_services_main_heading', 'option'); ?></h2>

					<div class="row py-4">

<!-- Package Details Box 1 -->

							<div class="col-sm-12 col-lg-4 package-box">
								<a href="<?php the_field('package_box_1_url'); ?>" class="package-box-content">
									<span class="text-uppercase subheader pb-4"><?php the_field('package_box_1_sub_heading'); ?></span>
									<h3 class="h3 text-capitalize"><?php the_field('package_box_1_main_heading'); ?></h3>
									<div><?php the_field('package_box_1_text'); ?></div>
									<span class="btn callto-button font-weight-bold text-lowercase package-button float-right"><?php the_field('package_box_1_callto_text'); ?><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
								</a>
							</div>

<!-- Package Details Box 2 -->
							
							<div class="col-sm-12 col-lg-4 pb-4 package-box">
								<a href="<?php the_field('package_box_2_url'); ?>" class="package-box-content">
									<span class="text-uppercase subheader pb-4"><?php the_field('package_box_2_sub_heading'); ?></span>
									<h3 class="h3 text-capitalize"><?php the_field('package_box_2_main_heading'); ?></h3>
									<div><?php the_field('package_box_2_text'); ?></div>
									<span class="btn callto-button font-weight-bold text-lowercase package-button float-right"><?php the_field('package_box_1_callto_text'); ?><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
								</a>
							</div>

<!-- Package Details Box -->

							<div class="col-sm-12 col-lg-4 package-box">
							<a href="<?php the_field('get_started_package_box_url', 'option'); ?>" class="package-box-content package-box-callto hvr-bounce-to-right">
								<span class="text-uppercase subheader pb-4"><?php the_field('get_started_package_box_sub_heading', 'option'); ?></span>
								<h3 class="h3 text-capitalize">
									<?php the_field('get_started_package_box_main_heading', 'option'); ?></h3>
								<div>
									<?php the_field('get_started_package_box_text', 'option'); ?>
								</div>
								<span class="btn callto-button font-weight-bold text-lowercase package-button float-right"><?php the_field('get_started_pakcage_box_callto_text', 'option'); ?><i class="fa fa-chevron-right" aria-hidden="true"></i></span>	
							</a>
							</div>

						</div>
						
					</div>
				</div>
			</div>
		</section>