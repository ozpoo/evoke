<?php get_header(); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<main role="main">

			<section class="hero">
				<h1 data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="600"><?php echo get_field("hero_header"); ?></h1>
			</section>

			<section class="form flex" data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="800">
				<div class="left">
					<?php echo do_shortcode('[contact-form-7 id="90" title="Contact Form"]'); ?>
				</div>
				<div class="right">
					<h2 class="gold cap" data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">Don't be shy</h2>
					<div class="callout">
						<p><?php echo get_field("call_out"); ?></p>
					</div>
				</div>
			</section>

		</main>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>
