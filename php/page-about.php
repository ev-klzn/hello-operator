<?php
/*
Template Name: About
 */
?>
<?php
get_header()
?>
<main class="page">
			<section class="page__hero page__hero--about  hero">
				<div class="hero__container">
					<div class="hero__body">
						<!-- hero__body--top -->
						<div class="block-header">
							<h1 data-watch data-watch-once class="block-header__label labbel">
								<?php
the_field('about_label')
?>
							</h1>
							<div data-watch data-watch-once class="block-header__title">
								<h2 class="title"><?php
the_field('about_title')
?>
									</h2>
							</div>
							<div data-watch data-watch-once class="block-header__text block-header__text--margin text">
								<?php
the_field('about_text')
?>

								</div>
								<div data-watch
                  data-watch-once
                  class="block-header__text block-header__text--color text"><?php
the_field('about_color_text')
?>
							</div>
							<div data-watch data-watch-once class="block-header__actions">


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
        $link2 = '/contact-nl/'; // посилання для нідерландської
        $button_text2 = 'Contact';
    }
}
?>


						<a href="<?php echo esc_url($link2); ?>" data-ripple class="button">
	<?php echo esc_html($button_text2); ?>
							</a>

									</a>
							</div>
						</div>
					</div>
					<div class="hero__content hero__content--top">
						<img data-watch data-watch-once class="hero__image hero__image--about ibg ibg--top" src="<?php
the_field('about_image')
?>
" alt="Jannes Callebaut photo" />
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
