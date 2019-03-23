
					<div class="container m-b-75">
						<div class="row pt-md-4 pt-lg-5">
							<div class="col-sm-12 col-lg-10 p-sm-4">
								<div class="row bg-white shadow package-boxes">
									<div class="col-sm-12 col-md-4 col-lg-4 py-md-4 py-3 px-4">
										<span class="subheader text-uppercase text-primary"><?php the_field('package_a_subheader'); ?></span>
										<h3 class="h3 py-3"><?php the_field('package_a_main_heading'); ?></h3>
										<?php the_field('package_a_text'); ?>
										<div class="package-callto">
											<a href="<?php the_field('package_a_callto_url'); ?>" class="btn callto-button font-weight-bold text-capitalize package-button"><?php the_field('package_a_callto_text'); ?><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
										</div>
									</div>
									<div class="col-sm-12 col-md-4 col-lg-4 py-4 px-4 light-accent">
										<span class="subheader text-uppercase text-primary"><?php the_field('package_b_subheader'); ?></span>
										<h3 class="h3 py-3"><?php the_field('package_b_main_heading'); ?></h3>
										<?php the_field('package_b_text'); ?>

										<div class="package-callto">
											<a href="<?php the_field('package_b_callto_url'); ?>" class="btn callto-button font-weight-bold text-capitalize package-button"><?php the_field('package_b_callto_text'); ?><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
										</div>
									</div>
									<div class="col-sm-12 col-md-4 col-lg-4 py-4 px-4 ">
										<span class="subheader text-uppercase text-primary"><?php the_field('package_c_subheader'); ?></span>
										<h3 class="h3 py-3"><?php the_field('package_c_main_heading'); ?></h3>
										<?php the_field('package_c_text'); ?>
										<div class="package-callto">
											<a href="<?php the_field('package_c_callto_url'); ?>" class="btn callto-button font-weight-bold text-capitalize package-button"><?php the_field('package_c_callto_text'); ?><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						</div><!--.packagessection-->