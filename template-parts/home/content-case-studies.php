<!--case studies-->
<div class="case-studies">
	<div class="container pb-md-3">
		<div class="row">
			<div class="col-sm-12 col-md-9 col-lg-10">
				<span class="h2 text-primary subheader"><?php the_field('case_studies_subheader'); ?></span>
				<h2 class="h1 font-weight-bold"><?php the_field('case_studies_main_heading'); ?></h2>
				<div class="font-weight-normal pr-lg-5 w-75"><?php the_field('case_studies_description'); ?></div>
				<a href="<?php the_field('case_studies_callto_url'); ?>" class="btn h6 callto-button font-weight-bold"><?php the_field('case_studies_callto_text'); ?><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row case-slider mb-md-5">
			<div class="col-sm-12 col-lg-11 offset-lg-1 pr-lg-0">
				<div class="owl-2 owl-carousel owl-theme pt-lg-4">
					<?php
					$args = array(
					'post_type' => 'case_studies',
					'post_status' => 'publish',
					'posts_per_page' => -1,
					
					);
					$loop = new WP_Query( $args );
					
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
					<a href="<?php echo esc_url( get_permalink() ); ?>">
						<div class="item">
							<div class="card shadow">
								<div class="gradient-overlay"></div>
							
							<?php $image = get_field('home_slider_image');
							if( !empty($image) ): ?>
							<img class="card-img-top" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="575" height="300" />
							<?php endif; ?>	

				
								<div class="card-img-overlay px-3">
									<div class="card-text">
										<h4 class="h7 text-uppercase text-white"><?php the_field('case_study_description_sub_header'); ?></h4>
										<h6 class="h6 text-capitalize text-white"><?php the_title(); ?></h6>
									</div>
									<div class="card-button">
										<span class="btn h6 callto-button-light font-weight-bold text-capitalize p-0"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
									</div>
								</div>
							</div>
						</div>
					</a>
					<?php
						endwhile;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</div>
	</div><!--.casestudies-->