<footer>

	<div class="footer-nav">



		<div class="links">


			<div class="logo-footer text-center">

				<img src="<?php the_field('logo_flyingcatmarketing_white', 'options'); ?>">

			</div>

			<div class="text-center">

				<?php dynamic_sidebar('wa_footer_1'); ?>

			</div>

			<div class="text-center">

				<?php dynamic_sidebar('wa_footer_2'); ?>

			</div>

			<div class="text-center">

				<?php dynamic_sidebar('wa_footer_3'); ?>

			</div>

			<div class="text-center">

				<?php dynamic_sidebar('wa_footer_4'); ?>


				<div class="social">
					<?php while (have_rows('social_icons', 'options')) : the_row(); ?>

						<a href="<?php the_sub_field('link'); ?>" target="_blank"><i class="fab fa-<?php the_sub_field('social_media'); ?>"></i></a>

					<?php endwhile; ?>

				</div>

				<div class="client">
					<img src="<?php the_sub_field('logo'); ?>">
				</div>

			</div>

		</div>

	</div>

	<div class="button-footer">
		<a href="#top">
			<img src="https://flyingcatmarketing.com/wp-content/themes/flyingcat/images/arrow_white.svg">
		</a>
	</div>

</footer>

<?php wp_footer() ?>