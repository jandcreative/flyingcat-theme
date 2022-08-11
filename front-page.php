
<?php get_header(); ?>


	<div id="page-wrapper">

		<section class="hero_home">

			<div class="container">

				<h1><?php the_field('title_firstslide');?></h1>

				<?php the_field('text_firstslide');?>

				<button><a href="<?php the_field('button_link');?>" target="_blank"><?php the_field('button_text');?></a></button>

			</div>

			<div class="buddy">
				<img src="<?php the_field('buddy_first_slide');?>">				
			</div>

			<div id="animation" class="arrow">
				<a href="#brands"><img src="https://flyingcatmarketing.com/wp-content/themes/flyingcat/images/scroll_down_white.svg"></a>
			</div>

		</section>

		<?php get_template_part( 'template-parts/brands')?>

		<section id="what-we-do" class="what-we-do">

		<div class="container">

				<div class="box">

					<h2><?php the_field('title_secondslide');?></h2>

					<?php the_field('text_secondslide');?>

				</div>
			
				
				<div class="box">

					<h2><?php the_field('title_secondslide_two');?></h2>

					<?php the_field('text_secondslide_two');?>

				</div>

		</div>

		</section>

		<section id="icons" class="icons">

		

	 			<div class="intro">
					<mark><?php the_field('subtitle_service');?></mark>
	 				<h2><?php the_field('title_service_section');?></h2>
					<?php the_field('text_service_section');?>
				 </div>

				
				<div class="container-items">

					<div class="item-service">
						<h3><?php the_field('title_seo_01');?></h3>
						<?php the_field('description_seo');?>
						<ul class="list">
						<?php while ( have_rows('list_features_seo') ) : the_row(); ?>
						<li><i class="fas fa-check"></i><?php the_sub_field('feature_seo');?></li>
						<?php endwhile; ?>

						</ul>
						<button><a href="<?php the_field('button_link_seo');?>"><?php the_field('button_text_seo');?></a></button>
					</div>

					<div class="item-service">
						<h3><?php the_field('title_content_creation');?></h3>
						<?php the_field('description_content_creation');?>
						<ul class="list">
							<?php while ( have_rows('list_content_creation') ) : the_row(); ?>
							<li><i class="fas fa-check"></i><?php the_sub_field('feature_content_creation');?></li>
							<?php endwhile; ?>
						</ul>

						<button><a href="<?php the_field('button_content_creation');?>"><?php the_field('button_text_content_creation');?></a></button>
						
					</div>

					<div class="item-service">
						<h3><?php the_field('title_content_optimization');?></h3>
						<?php the_field('description_content_optimization');?>

						<ul class="list">
							<?php while ( have_rows('list_content_optimization') ) : the_row(); ?>
							<li><i class="fas fa-check"></i><?php the_sub_field('feature_content_optimization');?></li>
							<?php endwhile; ?>
						</ul>
						<button><a href="https://jandcreative-dev.com/flyingcatmarketing/services/content-strategy/"><?php the_field('button_text_content_optimization');?></a></button>
						
					</div>

				</div>

		</section>

		<section class="block-client">

	 		<div class="container-client">

	 			<div class="content">

				 	<h2><?php the_field('title_case_study');?></h2>

					 <?php the_field('text_case_study');?>
				

					<button>
						<a href="<?php the_field('button_link_case_study');?>"><?php the_field('button_case_study');?></a>
					</button>

				 </div>

				 <div class="image">

	 				<img src="<?php the_field('image_case_study');?>">

				 </div>

			 </div>

		</section>


		<section id="aboutus" class="aboutus">

			<div class="grid-container">

				<div class="container-about">

					<div class="box-about">

						<h2><?php the_field('title_about_flying_cat');?></h2>

						<?php the_field('text_about_flying_cat_1');?>

						<button>
							<a href="<?php the_field('button_aboutus_link');?>">
								<?php the_field('button_about_us');?>
							</a>
						</button>	

					</div>

				</div>

				<div class="container-testimonials">

					<div class="owl-carousel owl-reponsive testimonials-carousel">

						<?php while ( have_rows('item_testimonial', 'options') ) : the_row(); ?>

						<div class="item-testimonial">


							<div class="sign_up">
								<img src="https://flyingcatmarketing.com/wp-content/uploads/01.svg">
							</div>

							<h2><?php the_sub_field('title_testimonial', 'options');?></h2>


							<h3><?php the_sub_field('text_testimonial', 'options');?></h3>
	            			

							<div class="info_profile">
								<div class="avatar">
									<img src="<?php the_sub_field('avatar', 'options');?>">
								</div>
							<span class="name"><?php the_sub_field('name', 'options');?></span>
							<span class="position"><?php the_sub_field('position', 'options');?></span>
							</div>

						</div>

						<?php endwhile; ?>	

					</div>

				</div>
				
		    	<div class="buddy_parachuting">
    				<img src="<?php the_field('buddy_fourth_slide');?>	">
    			</div>

			</div>

			
		</section>
		


		<?php get_template_part( 'template-parts/banner')?>



	</div>
	
	<?php get_footer(); ?>
		
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="<?php echo esc_url(get_stylesheet_directory_uri(); ?>/js/buddy_animation.js"></script>
	<script src="<?php echo esc_url(get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="<?php echo esc_url(get_stylesheet_directory_uri(); ?>/js/testimonial.js" type="text/javascript"></script>		

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
		