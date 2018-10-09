<?php get_header(); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<main role="main">
			<section class="hero">
				<h1 data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="800"><?php echo get_field("hero_header"); ?></h1>

				<figure class="one" data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="600">
					<?php $thumb = get_field("hero_image_01"); ?>
					<img
						alt=""
						src="<?php echo wp_get_attachment_image_src($thumb, 'w0l')[0]; ?>"
						sizes="auto"
						data-srcset="<?php echo wp_get_attachment_image_srcset($thumb, 'w01'); ?>"
						class="lazyload" />
				</figure>
			</section>

			<section class="life">
				<h2 class="cap gold" data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">About Barbara Glass</h2>
				<h3 data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">Barbara Glass brings extensive life experience to her role as Life Strategist.</h3>
				<p class="teaser" data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">
					<button class="about-toggle">Read more</button> about Barbara's unique life experience.
				</p>
				<div class="toggle">
					<?php echo get_field('about_text'); ?>
				</div>
			</section>

			<section class="path">
				<figure class="frame" data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">
					<?php $img = get_field('path_image'); ?>
					<?php $img_src = wp_get_attachment_image_src($img, 'w0l')[0]; ?>
					<?php $img_srcset = wp_get_attachment_image_srcset($img, 'w02'); ?>
					<?php $img_alt = get_post_meta( $img, '_wp_attachment_image_alt', true); ?>
					<?php $img_caption = wp_get_attachment_caption( $img ); ?>
					<img
						alt="<?php echo $img_alt; ?>"
						sizes="auto"
						src="<?php echo esc_url($img_src); ?>"
						data-srcset="<?php echo esc_attr($img_srcset); ?>"
						class="lazyload"/>
				</figure>
			</section>

			<h2 class="main" data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0"><?php echo get_field("callout_text"); ?></h2>

			<section class="experiences">
				<div class="flex">
					<div class="healthcare">
						<h2 class="cap gold" data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">Healthcare</h2>
						<?php $count = 1; ?>
						<?php if( have_rows('healthcare') ): ?>
						<?php while ( have_rows('healthcare') ) : the_row(); ?>

							<div class="panel<?php if($count++ > 3) { echo ' toggle'; } ?>">
								<div data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">
									<figure>
										<?php $img = get_sub_field('image'); ?>
										<?php $img_src = wp_get_attachment_image_src($img, 'w0l')[0]; ?>
										<?php $img_srcset = wp_get_attachment_image_srcset($img, 'w02'); ?>
										<?php $img_alt = get_post_meta( $img, '_wp_attachment_image_alt', true); ?>
										<?php $img_caption = wp_get_attachment_caption( $img ); ?>
										<img
											alt="<?php echo $img_alt; ?>"
											sizes="auto"
											src="<?php echo esc_url($img_src); ?>"
											data-srcset="<?php echo esc_attr($img_srcset); ?>"
											class="lazyload"/>
									</figure>
									<p>
										<span class="title"><?php the_sub_field('title'); ?></span>
										<span class="description"><?php the_sub_field('description'); ?></span>
									</p>
								</div>
							</div>

						<?php endwhile; endif; ?>
						<p><button class="hc-toggle">More Helathcare +</button></p>
					</div>
					<div class="additional-study">
						<h2 class="cap gold" data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">Additional Study</h2>
						<?php if( have_rows('additional_study') ): ?>
						<?php while ( have_rows('additional_study') ) : the_row(); ?>

							<div class="panel"  data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">
								<figure>
									<?php $img = get_sub_field('image'); ?>
									<?php $img_src = wp_get_attachment_image_src($img, 'w0l')[0]; ?>
									<?php $img_srcset = wp_get_attachment_image_srcset($img, 'w02'); ?>
									<?php $img_alt = get_post_meta( $img, '_wp_attachment_image_alt', true); ?>
									<?php $img_caption = wp_get_attachment_caption( $img ); ?>
									<img
										alt="<?php echo $img_alt; ?>"
										sizes="auto"
										src="<?php echo esc_url($img_src); ?>"
										data-srcset="<?php echo esc_attr($img_srcset); ?>"
										class="lazyload"/>
								</figure>
								<p>
									<span class="title"><?php the_sub_field('title'); ?></span>
									<span class="description"><?php the_sub_field('description'); ?></span>
								</p>
							</div>

						<?php endwhile; endif; ?>
					</div>
					<div class="philanthropy">
						<h2 class="cap gold" data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">Giving Back</h2>
						<?php if( have_rows('philanthropy') ): ?>
						<?php while ( have_rows('philanthropy') ) : the_row(); ?>

							<div class="panel" data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">
								<figure>
									<?php $img = get_sub_field('image'); ?>
									<?php $img_src = wp_get_attachment_image_src($img, 'w0l')[0]; ?>
									<?php $img_srcset = wp_get_attachment_image_srcset($img, 'w02'); ?>
									<?php $img_alt = get_post_meta( $img, '_wp_attachment_image_alt', true); ?>
									<?php $img_caption = wp_get_attachment_caption( $img ); ?>
									<img
										alt="<?php echo $img_alt; ?>"
										sizes="auto"
										src="<?php echo esc_url($img_src); ?>"
										data-srcset="<?php echo esc_attr($img_srcset); ?>"
										class="lazyload"/>
								</figure>
								<p>
									<span class="title"><?php the_sub_field('title'); ?></span>
									<span class="description"><?php the_sub_field('description'); ?></span>
								</p>
							</div>

						<?php endwhile; endif; ?>
					</div>
			</section>
		</main>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>
