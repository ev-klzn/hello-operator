<?php
/*
Template Name: Contact
 */
?>
<?php
get_header()
?>
		<main class="page">
			<section class="page__hero hero">
				<div class="hero__container">
					<div class="hero__body">
						<div class="block-header">
							<h1 data-watch data-watch-once class="block-header__label labbel">
								<?php
the_field('contact_label')
?>

							</h1>
							<div data-watch data-watch-once class="block-header__title">
								<h2 class="title"><?php
the_field('contact_title')
?>
</h2>
							</div>
							<div data-watch data-watch-once class="social">
								<a class="social__link _icon-phone" href="tel:
									<?php the_field('phone_link')?>"><?php the_field('phone')?>
								</a>
								<a class="social__link _icon-email" href="mailto:<?php the_field('email')?>">
									<?php the_field('email')?>
								</a>
								<a target="_blank" class="social__link _icon-in" href="<?php
the_field('linkedin_link')?>"><?php the_field('linkedin')?>
								</a>
							</div>
						</div>
					</div>
					<div class="hero__content">
						<img data-watch data-watch-once class="hero__image ibg ibg--top" src="<?php
the_field('contact_image')
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