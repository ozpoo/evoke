<?php get_header(); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<main role="main">
			<section class="hero">
				<h1 data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="800"><?php echo get_field("hero_header"); ?></h1>
				<figure data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="600">
					<?php $thumb = get_field("hero_image"); ?>
					<img
						alt=""
						src="<?php echo wp_get_attachment_image_src($thumb, 'w0l')[0]; ?>"
						sizes="auto"
						data-srcset="<?php echo wp_get_attachment_image_srcset($thumb, 'w01'); ?>"
						class="lazyload" />
				</figure>
			</section>

			<div class="flex">
				<section class="about-home">
					<h2 class="cap gold" data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">About Evoke</h2>
					<h3 data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0"><?php echo get_field("about_evoke"); ?></h3>
				</section>
				<section class="call-out-home">
					<figure data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">
						<?php $thumb = get_field("call_out_image"); ?>
						<img
							alt=""
							src="<?php echo wp_get_attachment_image_src($thumb, 'w0l')[0]; ?>"
							sizes="auto"
							data-srcset="<?php echo wp_get_attachment_image_srcset($thumb, 'w01'); ?>"
							class="lazyload" />
					</figure>

					<h2 data-aos="fade-right" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0"><?php echo get_field("call_out_text"); ?></h2>
				</section>
				<section class="faqs-home">
					<h2 class="cap gold" data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">Evoke Faqs</h2>
					<?php
						$wp_query = new WP_Query();
						$args = array(
							'posts_per_page' => -1,
							'post_type' => 'faqs'
						);
						$wp_query->query($args);
						$count = 1;
					?>
					<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<div class="faq">
							<button class="flex faq-toggle" data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">
								<div class="count">
									<h3><?php echo str_pad($count++, 2, '0', STR_PAD_LEFT); ?></h3>
								</div>
								<div class="image">
									<!-- <figure>
										<p>
											<?php $thumb = get_post_thumbnail_id(); ?>
											<img
												alt=""
												src="<?php echo wp_get_attachment_image_src($thumb, 'w0l')[0]; ?>"
												sizes="auto"
												data-srcset="<?php echo wp_get_attachment_image_srcset($thumb, 'w01'); ?>"
												class="lazyload" />
										</p>
									</figure> -->
								</div>
								<div class="question"><h3><?php the_title(); ?></h3></div>
							</button>
							<div class="content">
								<div class="description">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</section>

				<section class="learn-more-home">
					<h2 class="cap gold" data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">Learn More</h2>
					<p data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0"><?php echo get_field("learn_more_text"); ?></p>
					<figure data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">
						<?php $thumb = get_field("learn_more_image"); ?>
						<a href="<?php echo site_url('/about/', 'http'); ?>">
							<img
							alt=""
							src="<?php echo wp_get_attachment_image_src($thumb, 'w0l')[0]; ?>"
							sizes="auto"
							data-srcset="<?php echo wp_get_attachment_image_srcset($thumb, 'w01'); ?>"
							class="lazyload" />
						</a>
					</figure>
					<p><a href="<?php echo site_url('/about/', 'http'); ?>">Learn more about Evoke</a></p>
				</section>
			</div>

			<section class="testimonials-home">
				<h2 class="cap gold" data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">Testimonials</h2>
				<?php
					$wp_query = new WP_Query();
					$args = array(
						'posts_per_page' => -1,
						'post_type' => 'testimonials'
					);
					$wp_query->query($args);
					$count = 1;
				?>
				<div class="flex">
					<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<div class="testimonial" data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">
							<h5><?php the_title(); ?></h5>
							<p><?php the_excerpt(); ?></p>
							<div class="toggle">
								<small><?php the_content(); ?></small>
							</div>
							<p><button class="testimonial-toggle">Read more</button></p>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</div>
			</section>

		</main>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>
