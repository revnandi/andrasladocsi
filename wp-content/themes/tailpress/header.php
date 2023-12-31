<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased text-lg leading-[1.155rem]'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="flex flex-col min-h-screen">

		<?php do_action('tailpress_header'); ?>

		<header>
			<?php if (is_front_page()) { ?>
				<div class="fixed top-0 left-0 z-10 flex items-center justify-between w-full px-1 bg-white">
					<div>
						<?php if (has_custom_logo()) { ?>
							<?php the_custom_logo(); ?>
						<?php } else { ?>
							<a href="<?php echo get_bloginfo('url'); ?>" class="text-lg font-display">
								<h1>
									<?php echo get_bloginfo('name'); ?>
								</h1>
							</a>

						<?php } ?>
					</div>
				</div>
			<?php } ?>
		</header>

		<div id="content" class="flex-grow site-content <?php if(is_front_page()){ echo 'mt-14'; } ?>">

			<?php do_action('tailpress_content_start'); ?>

			<main>