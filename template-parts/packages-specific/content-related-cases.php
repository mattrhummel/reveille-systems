		<section class="related-case-studies mt-5 m-t-75">
			<div class="container">
				<div class="row">
<!-- Related Case Studies Section -->
					<div class="col col-md-12">
						<span class="text-uppercase section-subheader"><?php the_field('similar_case_studies_sub_heading', 'option'); ?></span>
						<h2 class="h2 text-capitalize mb-5"><?php the_field('similar_case_studies_main_heading','option'); ?></h2>
											
						<div class="row">

							<?php
							if ( is_single('package-a') ) {
							
							$args = array(
							'post_type' => 'case_studies',
							'orderby'   => 'title',
							'order' => 'ASC',
							'tax_query' => array(
							array(
							'taxonomy' => 'related_package',
							'field' => 'slug',
							'terms' => 'related-package-a'
							)
							)
							);
							}
							if ( is_single('package-b') ) {
							
							$args = array(
							'post_type' => 'case_studies',
							'orderby'   => 'title',
							'order' => 'ASC',
							'tax_query' => array(
							array(
							'taxonomy' => 'related_package',
							'field' => 'slug',
							'terms' => 'related-package-b'
							)
							)
							);
							}
							if ( is_single('package-c') ) {
							
							$args = array(
							'post_type' => 'case_studies',
							'orderby'   => 'title',
							'order' => 'ASC',
							'tax_query' => array(
							array(
							'taxonomy' => 'related_package',
							'field' => 'slug',
							'terms' => 'related-package-c'
							)
							)
							);
							}
							//$query = new WP_Query( $args ); // this line is useless in your code
							
							// The Query
							$the_query = new WP_Query( $args );
							
							// The Loop
							if ( $the_query->have_posts() ) {
							while ( $the_query->have_posts() ) {
							$the_query->the_post(); ?>
							<div class="col col-sm-12 col-md-6 cases">
								
								<a href="<?php echo esc_url( get_permalink() ); ?>">
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
								</a>
							</div>
							<?php }
							} else {
							// no posts found
							}
							/* Restore original Post Data */
							wp_reset_postdata();?>							
						</div>
						
					</div>
				</div>
			</div>
		</section>