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
					<!-- <video
						class="lazy-video"
						playsinline autoplay muted loop
						poster="<?php echo get_template_directory_uri(); ?>/assets/video/waves.png"
						data-src-webm="<?php echo get_template_directory_uri(); ?>/assets/video/waves.webm"
						data-src-ogv="<?php echo get_template_directory_uri(); ?>/assets/video/waves.ogv"
						data-src-mp4="<?php echo get_template_directory_uri(); ?>/assets/video/waves.mp4">
					</video> -->
				</figure>
			</section>
			<!-- <section class="hero-logo">
				<p>
					<svg version="1.1"
						 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
						 x="0px" y="0px" width="100px" height="100px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;"
						 xml:space="preserve">
						<path class="st0" d="M67.8,56c-2.7-2.7-5.8-4.7-9.3-6c3.5-1.3,6.7-3.3,9.3-6c4.7-4.7,7.4-11,7.6-17.8l0.1-1.8l-1.8,0.1
							c-6.8,0.2-13.1,2.9-17.8,7.6c-2.7,2.7-4.7,5.8-6,9.3c-1.3-3.5-3.3-6.7-6-9.3c-4.7-4.7-11-7.4-17.8-7.6l-1.8-0.1l0.1,1.8
							C24.6,33,27.3,39.3,32,44c2.7,2.7,5.8,4.7,9.3,6c-3.5,1.3-6.7,3.3-9.3,6c-4.7,4.7-7.4,11-7.6,17.8l-0.1,1.8l1.8-0.1
							c6.8-0.2,13.1-2.9,17.8-7.6c2.7-2.7,4.7-5.8,6-9.3c1.3,3.5,3.3,6.7,6,9.3c4.7,4.7,11,7.4,17.8,7.6l1.8,0.1l-0.1-1.8
							C75.2,67,72.5,60.7,67.8,56z M41.6,65.5c-3.7,3.7-8.5,5.9-13.7,6.5c0.6-5.2,2.9-10,6.5-13.7c3.7-3.7,8.5-5.9,13.7-6.5
							C47.5,57,45.2,61.8,41.6,65.5z M34.4,41.7c-3.7-3.7-5.9-8.5-6.5-13.7c5.2,0.6,10,2.9,13.7,6.5c3.7,3.7,5.9,8.5,6.5,13.7
							C42.9,47.6,38.1,45.3,34.4,41.7z M58.2,34.5c3.7-3.7,8.5-5.9,13.7-6.5c-0.6,5.2-2.9,10-6.5,13.7c-3.7,3.7-8.5,5.9-13.7,6.5
							C52.3,43,54.6,38.2,58.2,34.5z M58.2,65.5c-3.7-3.7-5.9-8.5-6.5-13.7c5.2,0.6,10,2.9,13.7,6.5c3.7,3.7,5.9,8.5,6.5,13.7
							C66.7,71.4,61.9,69.2,58.2,65.5z"/>
						<path class="st0" d="M20.1,20.3c0.8-0.8,0.8-2.1,0-3c-0.8-0.8-2.1-0.8-3,0c-0.8,0.8-0.8,2.1,0,3C18,21.1,19.3,21.1,20.1,20.3z"/>
						<path class="st0" d="M79.6,79.7c-0.8,0.8-0.8,2.1,0,3c0.8,0.8,2.1,0.8,3,0c0.8-0.8,0.8-2.1,0-3C81.8,78.9,80.5,78.9,79.6,79.7z"/>
						<path class="st0" d="M82.6,20.3c0.8-0.8,0.8-2.1,0-3c-0.8-0.8-2.1-0.8-3,0c-0.8,0.8-0.8,2.1,0,3C80.5,21.1,81.8,21.1,82.6,20.3z"/>
						<path class="st0" d="M17.2,79.7c-0.8,0.8-0.8,2.1,0,3c0.8,0.8,2.1,0.8,3,0c0.8-0.8,0.8-2.1,0-3C19.3,78.9,18,78.9,17.2,79.7z"/>
						<path class="st0" d="M50,29.9l1.2-1.2c3.7-3.8,5.7-8.6,5.7-13.7c0-5.1-2-9.9-5.7-13.7L50,0l-1.2,1.2c-3.7,3.8-5.7,8.6-5.7,13.7
							s2,9.9,5.7,13.7L50,29.9z M50,4.9c2.3,2.9,3.6,6.4,3.6,10c0,3.6-1.3,7.1-3.6,10c-2.3-2.9-3.6-6.4-3.6-10C46.4,11.3,47.7,7.8,50,4.9
							z"/>
						<path class="st0" d="M50,70.1l-1.2,1.2c-3.7,3.8-5.7,8.6-5.7,13.7c0,5.1,2,9.9,5.7,13.7L50,100l1.2-1.2c3.7-3.8,5.7-8.6,5.7-13.7
							s-2-9.9-5.7-13.7L50,70.1z M50,95.1c-2.3-2.9-3.6-6.4-3.6-10c0-3.6,1.3-7.1,3.6-10c2.3,2.9,3.6,6.4,3.6,10
							C53.6,88.7,52.3,92.2,50,95.1z"/>
						<path class="st0" d="M29.9,50l-1.2-1.2c-3.8-3.7-8.6-5.7-13.7-5.7c-5.1,0-9.9,2-13.7,5.7L0,50l1.2,1.2c3.8,3.7,8.6,5.7,13.7,5.7
							c5.1,0,9.9-2,13.7-5.7L29.9,50z M14.9,53.6c-3.6,0-7.1-1.3-10-3.6c2.9-2.3,6.4-3.6,10-3.6c3.6,0,7.1,1.3,10,3.6
							C22,52.3,18.5,53.6,14.9,53.6z"/>
						<path class="st0" d="M98.8,48.8c-3.8-3.7-8.6-5.7-13.7-5.7c-5.1,0-9.9,2-13.7,5.7L70.1,50l1.2,1.2c3.8,3.7,8.6,5.7,13.7,5.7
							c5.1,0,9.9-2,13.7-5.7L100,50L98.8,48.8z M85.1,53.6c-3.6,0-7.1-1.3-10-3.6c2.9-2.3,6.4-3.6,10-3.6s7.1,1.3,10,3.6
							C92.2,52.3,88.7,53.6,85.1,53.6z"/>
					</svg>
				 </p>
			</section> -->
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
								<h3><?php the_title(); ?></h3>
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
		</main>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>
