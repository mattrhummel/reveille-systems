<!--service plans-->
<section class="service-plans">
	<div class="container">
		<div class="row pd-tb">
			<div class="col-sm-10 col-md-7 pl-md-5">
				<span class="text-white text-uppercase subheader"><?php the_field('service_plans_subheader'); ?></span>
				<h1 class="h1 text-white font-weight-bold"><?php the_field('service_plans_main_heading'); ?></h1>
				<p class="font-weight-normal text-white"><?php the_field('service_plans_description_text'); ?></p>
				<a href="<?php echo the_field('service_plans_callto_url'); ?>" class="btn h6 callto-button-light font-weight-bold text-capitalize p-0"><?php the_field('service_plans_callto_text'); ?><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
	</section><!--.serviceplans-->