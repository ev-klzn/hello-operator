<!doctype html>
<!-- <html lang="en"> -->
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

<!-- <title><?php bloginfo('name');
echo " | ";
bloginfo('description'); ?></title> -->

<title><?php bloginfo('name');
?></title>

	<!-- <meta charset="UTF-8"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
<?php
wp_head();
?>
</head>

<body>
	<div class="wrapper">
		<header data-lp class="header">
			<div class="header__container">
				<a href="<?php echo get_home_url(); ?>" class="header__logo">
					<img class="header__logo-img ibg ibg--contain" src="<?php echo bloginfo('template_url'); ?>/img/logo.svg" alt="logo" />
				</a>
				<div class="header__menu menu">

					<nav class="menu__body">
<?php

if (function_exists('pll_current_language')) {
    $lang = pll_current_language(); // отримуємо поточну мову
    $menu_name = '$main';

    if ($lang == 'nl') {
        $menu_name = 'mainnl';
    }
}

wp_nav_menu([
    'menu' => $menu_name,
    'container' => false,
    'menu_class' => 'menu__list',
    'echo' => true,
    'fallback_cb' => 'wp_page_menu',
    'items_wrap' => '<ul class="menu__list">%3$s</ul>',
    'depth' => 1,
    'walker' => '',
]);
?>
					</nav>
				</div>
				<button aria-label="icon menu" type="button" class="icon-menu">
					<span></span>
				</button>
			</div>
		</header>