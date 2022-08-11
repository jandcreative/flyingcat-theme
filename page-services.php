 	
<?php get_header(); ?>


	<div id="page-wrapper">

		<section class="header-nohome">

			<div class="container">

				<h1><?php the_field('title_our_services');?></h1>

				<p><?php the_field('claim_our_services');?></p>

			</div>

			<div class="buddy">
				<img src="<?php the_field('buddy_our_services');?>">
			</div>

		</section>

		<section id="services" class="services">

			<div class="container-services">

				<?php 
							query_posts(array(
							'post_type' => array( 'post_type_services' ),
							'posts_per_page' => '4',
							'order'     => 'ASC',
							'orderby'   => 'date', 
				));?>

							
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		

					<div class="box-service">

						<a href="<?php the_permalink(); ?>">

						<div class="icon">
							<img src="<?php the_field('icon_service');?>">
							<img class="back" src="<?php the_field('icon_service:hover');?>">
						</div>
						<h2><?php the_field('title_service');?></h2>
						<?php the_field('extract_service');?>

						</a>

					</div>

					<?php endwhile; ?>
				
					<?php else: ?>
					
					<h3>No existe contenido</h3>
					<?php endif; ?>
					<?php wp_reset_query();?>
				
			</div>

		</section>

		<section id="banner" class="banner">

			<div class="hero">
					
			</div>

		</section>


		<section class="question">

		 <div class="ask">

			<span class="plus"><img src="https://flyingcatmarketing.com/wp-content/themes/flyingcat/images/croix.svg"></span>

			<h3><?php the_field('title_banner_flyingcat', 'options');?></h3>

		 </div>

		 <div class="description-ask">

		 	<div class="frame">
		 		<?php the_field('text_banner_flyingcat', 'options');?>
		 	</div>

		 </div>

		</section>

		<?php get_template_part( 'template-parts/brands')?>

	</div>
	
	<?php get_footer(); ?>

	<script src="<?php echo esc_url(get_stylesheet_directory_uri(); ?>/js/accordion.js" type="text/javascript"></script>

<script type="text/javascript">

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('#header-nav').addClass('white');
                   $('.lines').addClass('color');
            }
            else {
                  $('#header-nav').removeClass('white');
                  $('.lines').removeClass('color');
            }
      })

      var mediaquery = window.matchMedia("(max-width: 980px)");
        if (mediaquery.matches) {
            $('#header-nav').addClass('white');
        } 
        else {
            $('#header-nav').removeClass('white');
            
        // mediaquery no es 600
      }



      var mediaquery = window.matchMedia("(max-width: 450px)");
        if (mediaquery.matches) {
            $('.sub-menu').addClass('open');
        } 
        else {
            $('.sub-menu').removeClass('close');
            
        // mediaquery no es 600
      }

  </script>


</body>
</html>
		