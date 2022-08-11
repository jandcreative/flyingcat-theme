<?php get_header(); ?>
		<section class="main-error">

			<div class="container-error">

				<div class="cat">
					<img src="<?php the_field('buddy_cry', 'options');?>">		
				</div>


				<div id="not-found-header">
					<h1><?php the_field('title_404', 'options');?></h1>
				
					<?php the_field('text_404', 'options');?>

					<!--<div class="link_error">
						<a href="<?php echo esc_url( home_url() ); ?>"><i class="fas fa-arrow-left"></i> <?php the_field('title_goback', 'options');?></a>
					</div>-->
				</div>
			</div>	

		</section>
			
		</section><!-- #main -->
	<?php get_footer(); ?>