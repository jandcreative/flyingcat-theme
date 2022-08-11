	
<?php get_header(); ?>


	<div id="page-wrapper">

		<section class="red_single"><div class="content_single"><div class="content"><h1><?php the_title();?></h1></div></div></section>


		<section class="post">
			<?php while(have_posts()): the_post(); ?>		
			
			
		 		<div class="cabecera"><?php the_post_thumbnail(); ?></div>

		
			<p class="entry-meta">
				<span class="label">#</span><?php the_category(', ','flyingcat' ); ?></br>
				<strong><?php _e('by','flyingcat');?></strong>
				<?php echo get_avatar( get_the_author_meta('ID'), 80, '', get_the_author() ); ?>
				<strong><?php the_author(); ?></strong> - <span><?php the_time(get_option('date_format')); ?></span>
		 	</p>

		 


			<div class="content">
				<?php the_content();?>

				<div class="share">		

					<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ae6228c9d55fc1c"></script>-->
										
					<div class="addthis_inline_share_toolbox_ldz1_gcfl">
						<span class="compartir">Share:</span>
					</div> 

					<?php if(has_tag()): ?>
					<span class="meta-tags"><?php the_tags('',', ',''); ?></span>
					<?php endif; ?>

				</div>
			</div>


			 
			<div class="navigation">
			
				<div class="previous">
						<?php if(get_previous_post_link()): ?>
						<span><?php _e('Previous post','flyingcat'); ?></span>
						<?php previous_post_link(); ?>
						<?php endif;  ?>
				</div>
											
				<div class="next">
						<?php if(get_next_post_link()): ?>
						<span><?php _e('Next post','flyingcat'); ?></span>
						<?php next_post_link(); ?>
						<?php endif;  ?>
				</div>
			</div>


					
			<!-- .navigation -->

			<?php 
				if(comments_open() || get_comments_number()){
				comments_template();
				}
			?>


			<?php endwhile; ?>


		</section>

		

	</div>
	
	<?php get_footer(); ?>

	<!--<script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>-->

</body>
</html>
		