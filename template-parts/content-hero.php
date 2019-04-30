<!--slider-->
<section class="hero">
	<div class="owl-1 owl-carousel">
		<?php
		// check if the repeater field has rows of data
		if( have_rows('slider') ):
		// loop through the rows of data
		while ( have_rows('slider') ) : the_row();
		?>
		<div class="item">
			<div class="hero-slider">
				<div class="container-fluid pt-md-2">
					<div class="row">
						<div class="col-sm-10 col-md-6 box-text">
							<div class="h1 hero-letter"><?php the_sub_field('slide_letter'); ?></div>
							<div class="slider-text p-sm-2 pl-md-4">
								<span class="text-uppercase subheader"><?php the_sub_field('slide_subheader'); ?></span>
								<h1 class="h1"><?php the_sub_field('slide_main_heading'); ?></h1>
								<div class="row">
									<div class="col-md-4">
										<p><?php the_sub_field('slide_text'); ?></p>
										<a href="<?php the_sub_field('slide_callto_url') ?>" class="btn h6 callto-button font-weight-bold"><?php the_sub_field('slide_callto_text'); ?> <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 box-background p-0">
							<div class="gradient-overlay"></div>
							<?php $image = get_sub_field('slide_image');
							if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" height="800" width="800" alt="<?php echo $image['alt']; ?>" />
							<?php endif; ?>
							
							<div class="box-image">
								<div class="gradient-overlay"></div>
								<?php $image = get_sub_field('slide_image');
								if( !empty($image) ): ?>
								<img src="<?php echo $image['url']; ?>" height="450" width="450" alt="<?php echo $image['alt']; ?>" />

								<?php endif; ?>
								
							</div>
						</div>
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
	<div class="scroll-to-continue">
		<a href="#what-we-do">
			<img src="<?php echo get_template_directory_uri();?>/img/scroll-mouse.png" height="46" width="26" alt="scroll to mouse icon" /><?php _e('scroll to continue...', 'reveille-systems'); ?>
		</a>
	</div>
	<div class="social-icons d-none d-md-block">
		<ul class="list-unstyled">
			<li ><a href="<?php echo esc_html('https://www.facebook.com/', 'reveille-systems'); echo the_field('facebook_id', 'option'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li ><a href="<?php echo  esc_html('https://www.twitter.com/', 'reveille-systems'); echo the_field('twitter_id', 'option'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<li ><a href="<?php echo  esc_html('https://www.instagram.com/', 'reveille-systems'); echo the_field('instagram_id', 'option'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			<li ><a href="<?php echo  esc_html('https://www.linkedin.com/in/', 'reveille-systems'); echo the_field('facebook_id', 'option'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
		</ul>
	</div>
	<div class="reveille-icon">
		<a href="/about/"><img src="<?php echo get_template_directory_uri(); ?>/img/reveille-icon.png" /></a>
	</div>
	<div class="divider  d-none d-md-block"></div>
	</section><!--.hero-->