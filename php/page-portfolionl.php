<?php
/*
Template Name: Portfolionl
 */
?>
<?php
get_header()
?>

		<main class="page">
			<section class="page__works works">
				<div class="works__container">
					<div class="block-header">
						<h1 data-watch data-watch-once class="block-header__label labbel">
							Werken
						</h1>
						<div data-watch data-watch-once class="block-header__title">
							<h2 class="title">Recente projecten</h2>
						</div>
						<div data-watch data-watch-once class="block-header__text text">
<p>Bekijk een selectie van mijn videoprojecten waarin ik mijn werk laat zien met toonaangevende klanten zoals Proximus Media House, Eleven, PRG en Novid/AllRent.</p>
						</div>
					</div>
					<div class="works__list">
						              <?php

$my_posts = get_posts(array(
    'numberposts' => -1,
    'category_name' => 'portfolio',
    'orderby' => 'date',
    'order' => 'ASC',
    // 'include'     => array(),
    // 'exclude'     => array(),
    // 'meta_key'    => '',
    // 'meta_value'  =>'',
    'post_type' => 'post',
    'suppress_filters' => true,
));

global $post;

foreach ($my_posts as $post) {
    setup_postdata($post);
    ?>
             	<a data-watch data-watch-once data-popup="#<?php the_field('post_number'); ?>" class="works__item" href="#">
							<article class="item-works">
								<div class="item-works__img">
									<img class="item-works__image ibg" src="<?php the_field('portfolio_image'); ?>" alt="<?php the_field('portfolio_alt'); ?>" />
									<img class="item-works__imagehover ibg" src="<?php the_field('portfolio_image_2'); ?>" alt="<?php the_field('portfolio_alt'); ?>" />
								</div>
								<div class="item-works__header">
									<h3 class="item-works__title"><?php the_title(); ?></h3>
									<div class="item-works__link _icon-link"></div>
								</div>
								<div class="item-works__tags">
<?php
$values = get_field('portfolio_tags'); // заміни на назву поля

    if ($values) {
        foreach ($values as $value) {
            echo '<div>' . esc_html($value) . '</div>'; // або інша розмітка
        }
    }
    ?>



								</div>
								<div class="item-works__text text">
									 <?php the_field('portfolio_text'); ?>
								</div>
							</article>
						</a>
              <?php
}

wp_reset_postdata();
?>


					</div>
				</div>
			</section>
		</main>
		<footer class="footer">
			<div class="footer__container">
				<div class="footer__copy">
					<div>
						Power by:
						<a class="footer__link" target="_blank" href="https://webintersol.com/">Web Interface Solutions
						</a>
						© 2025
					</div>
					<div>Alle rechten voorbehouden.</div>
				</div>
			</div>
		</footer>

	</div>
		<?php

$my_posts = get_posts(array(
    'numberposts' => -1,
    'category_name' => 'portfolio',
    'orderby' => 'date',
    'order' => 'ASC',
    // 'include'     => array(),
    // 'exclude'     => array(),
    // 'meta_key'    => '',
    // 'meta_value'  =>'',
    'post_type' => 'post',
    'suppress_filters' => true,
));

global $post;

foreach ($my_posts as $post) {
    setup_postdata($post);
    ?>
         <div id="<?php the_field('post_number'); ?>" aria-hidden="true" class="popup">
			<div class="popup__wrapper">
				<div class="popup__content">
					<div class="popup__header">
						<button data-close type="button" class="popup__close">
							<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.850056" d="M1.73333 1.48883L21.5469 21.0288" stroke="#979797" stroke-linecap="square" />
								<path opacity="0.850056" d="M21.2667 1.48883L1.45309 21.0288" stroke="#979797" stroke-linecap="square" />
							</svg>
						</button>
					</div>
					<div class="popup__text">
						<section class="work">
							<div class="work__cnt">
								<div class="block-header">
									<div data-watch data-watch-once class="block-header__label labbel">
										Werk
									</div>
									<div data-watch data-watch-once class="block-header__title">
										<h1 class="title"><?php the_title(); ?></h1>
									</div>
								</div>
								<div class="work__description">
									<div class="work__header">
										<div class="work__overview">Overzicht</div>
										<div class="work__text text">
										<?php the_field('portfolio_text'); ?>
										</div>
									</div>
									<div class="work__bottom">
										<div class="work__left">
											<div class="work__details">Details</div>
											<div></div>
										</div>
										<div class="work__right">
											<div class="work__service">Diensten</div>
											<div class="work__service-item">
												<?php the_field('portfolio_services'); ?>
											</div>
											<div class="work__date">Datum</div>
											<div class="work__date-item"><?php the_field('portfolio_date'); ?></div>
										</div>
									</div>
								</div>
							</div>

							<!-- <div class="work__img">
								<img data-watch data-watch-once class="work__image ibg" src="<?php the_field('portfolio_image'); ?>" alt="<?php the_field('portfolio_alt'); ?>" />
								<img data-watch data-watch-once class="work__image ibg" src="<?php the_field('portfolio_image_2'); ?>" alt="<?php the_field('portfolio_alt'); ?>" />
								<img data-watch data-watch-once class="work__image ibg" src="<?php the_field('portfolio_image_3'); ?>" alt="<?php the_field('portfolio_alt'); ?>" />
								<img data-watch data-watch-once class="work__image ibg" src="<?php the_field('portfolio_image_4'); ?>" alt="<?php the_field('portfolio_alt'); ?>" />
							</div> -->
							<div class="work__img">
								<?php the_field('add_image'); ?>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
              <?php
}

wp_reset_postdata();
?>

	</div>
<?php
wp_footer();
?>
</body>

</html>
