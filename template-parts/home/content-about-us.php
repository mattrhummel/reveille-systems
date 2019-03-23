<!--about us-->
<section class="about-us pt-lg-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-6">
				<div class="row">
					<div class="col-sm-12 col-lg-11 box-image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about-placeholder.png" height="550" width="550" alt="about placeholder" />
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-11 offset-lg-1 box-background ">
				<div class="col-sm-12 col-lg-5">
				</div>
				<div class="col-sm-12 col-lg-7 box-text float-right p-lg-5 mt-sm-3">
					<span class="text-uppercase text-primary subheader"><?php the_field('about_us_subheading'); ?></span>
					<h4 class="h4 text-capitalize"><?php the_field('about_us_main_heading'); ?></h4>
					<div class="pr-lg-3"><?php the_field('about_us_description'); ?></div>
					<div class="calltos">
						<a href="<?php the_field('about_us_callto_1_url'); ?>" class="btn callto-button font-weight-bold text-capitalize package-button"><?php the_field('about_us_callto_1_text'); ?><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						<a href="<?php the_field('about_us_callto_2_url'); ?>" class="btn callto-button font-weight-bold text-capitalize package-button"><?php the_field('about_us_callto_2_text'); ?><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-10 offset-md-1 col-lg-9 offset-lg-1 p-sm-0 pt-sm-4 pt-lg-5 m-b-75 ">
				<div class="col-sm-12 col-lg-6 p-0">
				</div>
				<div class="col-sm-12 col-lg-6 social-icons float-right p-sm-0">
					<ul class="p-sm-0 m-sm-0  pl-md-0  pl-lg-5">
						<li class="text-primary font-weight-bold"><?php _e('@','reveille-systems'); the_field('facebook_id', 'option'); ?></li>
						<li ><a href="<?php echo esc_html('https://www.facebook.com/', 'reveille-systems'); the_field('facebook_id', 'option'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li ><a href="<?php echo  esc_html('https://www.twitter.com/', 'reveille-systems'); the_field('twitter_id', 'option'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li ><a href="<?php echo  esc_html('https://www.instagram.com/', 'reveille-systems'); the_field('instagram_id', 'option'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li ><a href="<?php echo  esc_html('https://www.linkedin.com/company/', 'reveille-systems'); the_field('linkedin_url', 'option'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</section><!--.aboutus-->
