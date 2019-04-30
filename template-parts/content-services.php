<!--managed services section-->
<section class="px-5 py-5 managed-services">
	<div class="row mb-lg-4">
		<div class="col-sm-12">
			<div class="row mb-lg-4">
				<div class="col-sm-12 col-md-5 col-lg-5 pr-md-4 pl-md-0">
					<span class="text-primary text-uppercase subheader pl-0" id="what-we-do"><?php the_field('ms_subheader_text'); ?></span>
					<h4 class="h4 font-weight-bold" id="what-we-do"><?php the_field('ms_main_heading_text'); ?></h4>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 col-md-10">
			<div class="row">
				<div class="col-sm-12 col-md-6 p-sm-0 pt-lg-2 pb-lg-2 pr-md-3">
					<div class="pb-5">
						<p class="font-weight-normal pr-md-5"><?php the_field('ms_description_text'); ?></p>
						<a href="<?php the_field('ms_callto_url'); ?>" class="btn h6 callto-button font-weight-bold"><?php the_field('ms_callto_text'); ?> <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					</div>
					<a href="<?php echo the_field('ms_left_card_1_url')?>" class="mt-md-5">
						<div class="card mb-md-4">
							<div class="gradient-overlay"></div>
							<?php $image = get_field('ms_left_card_1_image');
							if( !empty($image) ): ?>
							<img class="card-img-top shadow" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<?php endif; ?>
							<div class="card-img-overlay px-3">
								<div class="card-text">
									<h4 class="h7 text-white text-uppercase"><?php the_field('ms_left_card_1_subheader'); ?></h4>
									<h6 class="h6 text-white"><?php the_field('ms_left_card_1_main_heading_text'); ?></h6>
								</div>
								<div class="card-button">
									<span class="callto-button-light font-weight-bold text-capitalize p-0"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
								</div>
							</div>
						</div>
					</a>
					<a href="<?php echo the_field('ms_left_card_2_url')?>">
						<div class="card mb-md-2">
							<div class="gradient-overlay"></div>
							<?php $image = get_field('ms_left_card_2_image');
							if( !empty($image) ): ?>
							<img class="card-img-top shadow" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<?php endif; ?>
							<div class="card-img-overlay px-3">
								<div class="card-text">
									<h4 class="h7 text-white text-uppercase"><?php the_field('ms_left_card_2_subheader'); ?></h4>
									<h6 class="h6 text-white"><?php the_field('ms_left_card_2_main_heading_text'); ?></h6>
								</div>
								<div class="card-button">
									<span class="callto-button-light font-weight-bold text-capitalize p-0"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-12 col-md-6  p-sm-0  p-md-2">
					<a href="<?php echo the_field('ms_right_card_1_url')?>">
						<div class="card mb-md-4">
							<div class="gradient-overlay"></div>
							<?php $image = get_field('ms_right_card_1_image');
							if( !empty($image) ): ?>
							<img class="card-img-top shadow" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<?php endif; ?>
							<div class="card-img-overlay px-3">
								<div class="card-text">
									<h4 class="h7 text-white text-uppercase"><?php the_field('ms_right_card_1_subheader'); ?></h4>
									<h6 class="h6 text-white"><?php the_field('ms_right_card_1_main_heading_text'); ?></h6>
								</div>
								<div class="card-button">
									<span class="callto-button-light font-weight-bold text-capitalize p-0"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
								</div>
							</div>
						</div>
					</a>
					<a href="<?php echo the_field('ms_right_card_2_url')?>">
						<div class="card mb-4">
							<div class="gradient-overlay"></div>
							<?php $image = get_field('ms_right_card_2_image');
							if( !empty($image) ): ?>
							<img class="card-img-top shadow" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<?php endif; ?>
							<div class="card-img-overlay px-3">
								<div class="card-text">
									<h4 class="h7 text-white text-uppercase"><?php the_field('ms_right_card_2_subheader'); ?></h4>
									<h6 class="h6 text-white"><?php the_field('ms_right_card_2_main_heading_text'); ?></h6>
								</div>
								<div class="card-button">
									<span class="callto-button-light font-weight-bold text-capitalize p-0"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
								</div>
							</div>
						</div>
					</a>
					<a href="<?php echo the_field('ms_callto_box_url')?>" class="get-started-button">
						<div class="card mb-4 shadow">
							<?php $image = get_field('ms_callto_box_img');
							if( !empty($image) ): ?>
							<img class="card-img-top" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<?php endif; ?>
							<div class="card-img-overlay px-3">
								<div class="card-text">
									<h4 class="h7 text-uppercase"><?php the_field('ms_callto_box_subheader'); ?></h4>
									<h6 class="h6 text-capitalize"><?php the_field('ms_callto_box_main_heading'); ?></h6>
								</div>
								<div class="card-button">
									<span class="h5 p-0"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	</section><!--.managed-services-->