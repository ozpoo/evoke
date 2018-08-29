<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title>
			<?php wp_title(''); ?>
		</title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/fav.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/icon.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="format-detection" content="telephone=no">
		<meta name="keywords" content="PR, Public, Public Relations, Seattle, Washingtion, WA, SEA, Good, Media, Press">

		<meta property="og:title" content="<?php bloginfo('name'); ?>">
		<meta property="og:description" content="<?php bloginfo('description'); ?>">
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/share.jpg">
		<meta property="og:url" content="<?php echo home_url($wp->request); ?>">
		<meta name="twitter:card" content="summary_large_image">

		<?php wp_head(); ?>

		<script>
			document.createElement( "picture" );
		</script>

	</head>
	<body>

		<section class="intro show">
			<svg version="1.1"
				 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
				 x="0px" y="0px" width="200px" height="200px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;"
				 xml:space="preserve">
				<path class="st2" d="M135.5,111.9c-5.3-5.3-11.6-9.3-18.6-11.9c7-2.6,13.3-6.6,18.6-11.9c9.4-9.4,14.8-22,15.3-35.6l0.1-3.6
					l-3.6,0.1c-13.6,0.5-26.2,5.9-35.6,15.3c-5.3,5.3-9.3,11.6-11.9,18.6c-2.6-7-6.6-13.3-11.9-18.6c-9.4-9.4-22-14.8-35.6-15.3
					l-3.6-0.1l0.1,3.6c0.5,13.6,5.9,26.2,15.3,35.6c5.3,5.3,11.6,9.3,18.6,11.9c-7,2.6-13.3,6.6-18.6,11.9c-9.4,9.4-14.8,22-15.3,35.6
					l-0.1,3.6l3.6-0.1c13.6-0.5,26.2-5.9,35.6-15.3c5.3-5.3,9.3-11.6,11.9-18.6c2.6,7,6.6,13.3,11.9,18.6c9.4,9.4,22,14.8,35.6,15.3
					l3.6,0.1l-0.1-3.6C150.3,134,144.9,121.3,135.5,111.9z M83.1,131c-7.3,7.3-16.9,11.9-27.4,13c1.2-10.4,5.7-20.1,13-27.4
					c7.3-7.3,16.9-11.9,27.4-13C95,114.1,90.4,123.7,83.1,131z M68.8,83.3C61.5,76,56.9,66.4,55.7,56c10.4,1.2,20.1,5.7,27.4,13
					c7.3,7.3,11.9,16.9,13,27.4C85.7,95.2,76.1,90.7,68.8,83.3z M116.4,69c7.3-7.3,16.9-11.9,27.4-13c-1.2,10.4-5.7,20.1-13,27.4
					c-7.3,7.3-16.9,11.9-27.4,13C104.6,85.9,109.1,76.3,116.4,69z M116.4,131c-7.3-7.3-11.9-16.9-13-27.4c10.5,1.2,20.1,5.7,27.4,13
					c7.3,7.3,11.9,16.9,13,27.4C133.4,142.9,123.8,138.3,116.4,131z"/>
				<path class="st2" d="M40.3,40.5c1.6-1.6,1.6-4.3,0-5.9c-1.6-1.6-4.3-1.6-5.9,0c-1.6,1.6-1.6,4.3,0,5.9C36,42.1,38.7,42.1,40.3,40.5
					z"/>
				<path class="st2" d="M159.3,159.5c-1.6,1.6-1.6,4.3,0,5.9s4.3,1.6,5.9,0c1.6-1.6,1.6-4.3,0-5.9
					C163.6,157.9,160.9,157.9,159.3,159.5z"/>
				<path class="st2" d="M165.2,40.5c1.6-1.6,1.6-4.3,0-5.9c-1.6-1.6-4.3-1.6-5.9,0c-1.6,1.6-1.6,4.3,0,5.9
					C160.9,42.1,163.6,42.1,165.2,40.5z"/>
				<path class="st2" d="M34.4,159.5c-1.6,1.6-1.6,4.3,0,5.9c1.6,1.6,4.3,1.6,5.9,0c1.6-1.6,1.6-4.3,0-5.9
					C38.7,157.9,36,157.9,34.4,159.5z"/>
				<path class="st2" d="M100,59.8l2.4-2.5c7.4-7.6,11.4-17.3,11.4-27.4c0-10.1-4-19.9-11.4-27.4L100,0l-2.4,2.5
					C90.3,10,86.2,19.8,86.2,29.9s4,19.9,11.4,27.4L100,59.8z M100,9.9c4.6,5.8,7.1,12.8,7.1,20c0,7.2-2.5,14.2-7.1,20
					c-4.6-5.8-7.1-12.8-7.1-20S95.4,15.7,100,9.9z"/>
				<path class="st2" d="M100,140.2l-2.4,2.5c-7.4,7.6-11.4,17.3-11.4,27.4c0,10.1,4,19.9,11.4,27.4l2.4,2.5l2.4-2.5
					c7.4-7.6,11.4-17.3,11.4-27.4s-4-19.9-11.4-27.4L100,140.2z M100,190.1c-4.6-5.8-7.1-12.8-7.1-20c0-7.2,2.5-14.2,7.1-20
					c4.6,5.8,7.1,12.8,7.1,20S104.6,184.3,100,190.1z"/>
				<path class="st2" d="M59.8,100l-2.5-2.4C49.8,90.2,40,86.2,29.9,86.2c-10.1,0-19.9,4-27.4,11.4L0,100l2.5,2.4
					c7.6,7.4,17.3,11.4,27.4,11.4c10.1,0,19.9-4,27.4-11.4L59.8,100z M29.9,107.1c-7.2,0-14.2-2.5-20-7.1c5.8-4.6,12.8-7.1,20-7.1
					c7.2,0,14.2,2.5,20,7.1C44.1,104.6,37.1,107.1,29.9,107.1z"/>
				<path class="st2" d="M197.5,97.6c-7.6-7.4-17.3-11.4-27.4-11.4c-10.1,0-19.9,4-27.4,11.4l-2.5,2.4l2.5,2.4
					c7.6,7.4,17.3,11.4,27.4,11.4c10.1,0,19.9-4,27.4-11.4l2.5-2.4L197.5,97.6z M170.1,107.1c-7.2,0-14.2-2.5-20-7.1
					c5.8-4.6,12.8-7.1,20-7.1s14.2,2.5,20,7.1C184.3,104.6,177.3,107.1,170.1,107.1z"/>
			</svg>
		 </section>

		<section class="loader">Loading...</section>
		<section class="modal-promotion"></section>

		<section id="page" class="site-content">
			<div id="site-content-wrap" <?php body_class(); ?>>
				<header class="header sticky">
					<div class="logo">
						<p>
							<a href="<?php echo site_url('/', 'http'); ?>">
								<svg version="1.1"
									 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
									 x="0px" y="0px" width="150px" height="39.7px" viewBox="0 0 150 39.7" style="enable-background:new 0 0 150 39.7;"
									 xml:space="preserve">
								<polygon class="st0" points="57,10.7 45.1,35.2 45,35.2 33,10.7 29.5,10.7 43.5,38.9 46.5,38.9 60.5,10.7 	"/>
								<path class="st0" d="M14.9,9.9C6.7,9.9,0,16.5,0,24.8C0,33,6.7,39.7,14.9,39.7c5.3,0,9.9-2.8,12.6-6.9h-4c-2.1,2.3-5.2,3.7-8.5,3.7
									C9,36.5,4.1,32.1,3.3,26.4l26.4,0c0.1-0.5,0.1-1.1,0.1-1.6C29.8,16.5,23.2,9.9,14.9,9.9z M3.3,23.2C4.1,17.5,9,13.1,14.9,13.1
									c5.9,0,10.8,4.4,11.6,10.1H3.3z"/>
								<path class="st0" d="M150,24.8c0-8.2-6.7-14.9-14.9-14.9s-14.9,6.7-14.9,14.9c0,8.2,6.7,14.9,14.9,14.9c5.3,0,9.9-2.8,12.6-6.9h-4
									c-2.1,2.3-5.2,3.7-8.5,3.7c-5.9,0-10.8-4.4-11.6-10.1l26.4,0C150,25.8,150,25.3,150,24.8z M123.5,23.2c0.8-5.7,5.7-10.1,11.6-10.1
									s10.8,4.4,11.6,10.1H123.5z"/>
								<polygon class="st0" points="120.3,10.7 115.3,10.7 98.3,25 98.2,25 98.2,0 95,0 95,38.9 98.2,38.9 98.2,29.2 104.2,24.1
									104.3,24.1 116.7,38.9 121,38.9 106.7,22.1 	"/>
								<path class="st0" d="M75.1,9.9c-8.2,0-14.9,6.7-14.9,14.9c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9
									C90.1,16.5,83.4,9.9,75.1,9.9z M75.1,36.5c-6.5,0-11.7-5.3-11.7-11.7s5.3-11.7,11.7-11.7c6.5,0,11.7,5.3,11.7,11.7
									S81.6,36.5,75.1,36.5z"/>
								</svg>
							</a>
						</p>
					</div>
					<nav class="menu-main">
						<ul>
							<li><button class="menu-toggle cap">Menu</button></li>
						</ul>
					</nav>
				</header>
