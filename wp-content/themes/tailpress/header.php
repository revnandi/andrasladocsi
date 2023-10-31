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

			<div class="fixed top-0 left-0 flex items-center justify-between w-full px-1">
				<div>
					<?php if (has_custom_logo()) { ?>
						<?php the_custom_logo(); ?>
					<?php } else { ?>
						<a href="<?php echo get_bloginfo('url'); ?>" class="text-lg font-display">
							<h1><?php echo get_bloginfo('name'); ?></h1>
						</a>

					<?php } ?>
				</div>
			</div>
		</header>

		<div id="content" class="flex-grow mt-14 site-content">

			<?php do_action('tailpress_content_start'); ?>

			<main>