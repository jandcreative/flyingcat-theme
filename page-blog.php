<?php 
/* Template Name: Page Blog */ 
/* Template Post Type: post, page, product */
?>

<?php get_header('nohome'); ?>


	<div id="page-wrapper">

		

		<section class="header-nohome">

			<div class="container">

				<h1><?php the_field('title_blog_page');?></h1>
				<?php the_field('text_blog_page');?>				

			</div>

		</section>

			<div class="blog-list">

                    <?php 
            			query_posts(array(
            				"showposts" => 6,
            				'order'     => 'DESC',
            				'orderby'   => 'date',
            				'post_type' => array('post','posts')
            		));?>

					<?php if(have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>

		 		<article class="post">
		 			<a href="<?php the_permalink(); ?>">
		 			<div class="box-image">
		 				<div class="overlay-mask"></div>
		 				<?php the_post_thumbnail(); ?>
		 			</div>

		 			<div class="box-post">
						<h3><?php the_title();?></h3>
						<?php the_excerpt();?>
		 			</div>
		 			</a>
		 		</article>


		 	        <?php endwhile; ?>
			
					<?php endif; ?>


			</div>
			
				<!--<div class="paginacion">
 							
 							<?php echo paginate_links();?>

				 </div>-->
			
	</div>


	
	<?php get_footer(); ?>

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
 	<script src="<?php get_stylesheet_directory_uri(); ?>/js/accordion.js" type="text/javascript"></script>
	<script type="text/javascript">

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('#header-nav').addClass('background');
                  $('.lines').addClass('color');
            }
            else {
                  $('#header-nav').removeClass('background');
                  $('.lines').removeClass('color');
            }
      })

      var mediaquery = window.matchMedia("(max-width: 980px)");
        if (mediaquery.matches) {
            $('#header-nav').addClass('background');
        } 
        else {
            $('#header-nav').addClass('background');
        // mediaquery no es 600
      }

  </script>

</body>
</html>
		