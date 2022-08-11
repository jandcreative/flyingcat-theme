 	
<?php get_header(); ?>


	<div id="page-wrapper">

		

		<section class="header-nohome">

			<div class="container">

				<h1>
					<?php if(is_category()): ?>
					<?php endif; ?>
					# <?php single_cat_title(); ?>
				</h1>			

			</div>

		</section>

			<div class="blog-list">

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
		