<?php 
/* Template Name: Content - Landing Pages */ 
/* Template Post Type: post, page, product */
?>
	
<?php get_header(); ?>


	<div id="page-wrapper">


		<section class="post">
			<?php while(have_posts()): the_post(); ?>		
			
			
		 	<h1><?php the_title();?></h1>

			<div class="content">
				<?php the_content();?>

			</div>

			<?php endwhile; ?>


		</section>


	</div>

	<?php get_footer(); ?>
	
</body>
</html>
		