<section class="get-started">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-10">
				<span class="text-uppercase subheader"><?php the_field('get_started_subheader', 'option'); ?></span>
				<h2 class="h2 text-capitalize"><?php the_field('get_started_main_heading', 'option') ?></h2>
				<p class="pt-3 pb-3"><?php the_field('get_started_description', 'option') ?></p>
				<a href="<?php the_field('get_started_callto_url', 'option'); ?>" class="btn callto-button font-weight-bold text-lowercase"><?php the_field('get_started_callto_text', 'option') ?><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</section>