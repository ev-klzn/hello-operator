<?php
/*
Template Name: Products
 */
?>
<?php
get_header()
?>
		<main class="page">
			<section class="page__rental rental">
				<div class="rental__container">
					<div class="block-header">
						<h1 data-watch data-watch-once class="block-header__label labbel">
Products catalog



						</h1>
						<div data-watch data-watch-once class="block-header__title">
							<h2 class="title">
							Rental Equipment

</h2>
						</div>
						<div data-watch data-watch-once class="block-header__text text">
							<p><!-- Browse our selection of high-quality equipment available for
                  short- or long-term rental — perfect for events, production,
                  and broadcast needs. --></p>
						</div>
					</div>
					<ul class="rental__list">
						<?php

$my_posts = get_posts(array(
    'numberposts' => -1,
    'category_name' => 'products',
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
<!--  -->
						<li data-watch data-watch-once class="rental__item item-rental">
							<div class="item-rental__header">
								<div>
									<img data-watch data-watch-once src="<?php
the_field('product_image_1')
    ?>
" alt="<?php
the_field('product_1_alt')
    ?>
" />
									<img data-watch data-watch-once src="<?php
the_field('product_image_2')
    ?>
" alt="<?php
the_field('product_2_alt')
    ?>
" />
								</div>
								<h2 data-watch data-watch-once data-watch-threshold="0.2" class="item-rental__title">
									<?php the_title(); ?>
								</h2>
							</div>
							<div class="item-rental__body">
								<div class="item-rental__label">Description</div>
								<div class="item-rental">
									<div class="item-rental__content">
										<div class="item-rental__text item-rental__text--margin text">
									<?php
the_field('product_text')
    ?>

							</div>

										<div data-showmore>
											<div data-showmore-content="1">
												<div class="item-rental__text text">
													<?php
the_field('product_text_2')
    ?>

												</div>
											</div>
											<div class="item-rental__sm">
												<button hidden data-showmore-button type="button" class="item-rental__more">
													<span>Show details</span><span>Hide details</span>
												</button>
											</div>
											<a data-watch data-watch-once data-watch-threshold="0.2" target="_blank" href="<?php
the_field('product_site')
    ?>
" class="item-rental__actions">
												<span class="item-rental__link">
													Read full description on product website
												</span>
												<span class="item-rental__icon _icon-link"></span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div data-watch data-watch-once data-watch-threshold="0.2" class="item-rental__rental">
								<button >
									<!-- Calendly link widget begin -->
									<link href="https://assets.calendly.com/assets/external/widget.css?_v=20250419091127" rel="stylesheet" />
									<script src="https://assets.calendly.com/assets/external/widget.js?_v=20250419091127" type="text/javascript" async></script>
									<a class="button" href="" onclick="Calendly.initPopupWidget({url: '<?php
the_field('product_reserve')
    ?>
'});return false;">Reserve Equipment</a>
									<!-- Calendly link widget end -->


								</button>
							</div>
						</li>
              <?php
}

wp_reset_postdata();
?>


					</ul>
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
					<div>All rights reserved.</div>
				</div>
			</div>
		</footer>

	</div>
<?php
wp_footer();
?>

</body>

</html>
<!--  -->
