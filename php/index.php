    <?php
get_header()
?>

		<main class="page">
			<section class="page__hero hero">
				<div class="hero__container">
					<div class="hero__content">
						<img data-watch data-watch-once class="hero__image ibg" src="
						<?php
the_field('main_image')
?>
"alt="work photo" />

					</div>
					<div class="hero__body">
						<div class="block-header">
							<h1 data-watch data-watch-once class="block-header__label labbel">

<?php
the_field('main_label')
?>
							</h1>
							<div data-watch data-watch-once class="block-header__title">
								<h2 class="title">

									<?php
the_field('main_title')
?>


								</h2>
							</div>
							<div data-watch data-watch-once class="block-header__text text">
								<?php echo get_field('main_text'); ?>
							</div>

							<div data-watch data-watch-once class="block-header__actions">
<?php
// визначаємо посилання за замовчуванням
$link = '#';

// перевіряємо активну мову
if (function_exists('pll_current_language')) {
    $lang = pll_current_language(); // отримуємо код поточної мови

    if ($lang == 'en') {
        $link = '/about/'; // посилання для англійської
        $button_text = 'Learn more';

    } elseif ($lang == 'nl') {
        $link = '/over/'; // посилання для нідерландської
        $button_text = 'Meer leren'; // текст нідерландською

    }
}
?>

<?php
// визначаємо посилання за замовчуванням
$link2 = '#';

// перевіряємо активну мову
if (function_exists('pll_current_language')) {
    $lang = pll_current_language(); // отримуємо код поточної мови

    if ($lang == 'en') {
        $link2 = '/contact/'; // посилання для англійської
        $button_text2 = 'Get in touch';

    } elseif ($lang == 'nl') {
        $link2 = '/contact/'; // посилання для нідерландської
        $button_text2 = 'Contact';
    }
}
?>

								<a href="<?php echo esc_url($link); ?>" data-ripple class="button">
									<?php echo esc_html($button_text); ?>
								</a>
						<a href="<?php echo esc_url($link2); ?>" data-ripple class="button button--transp">
	<?php echo esc_html($button_text2); ?>
							</a>

							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer></footer>
	</div>
<?php
wp_footer();
?>
</body>

</html>
