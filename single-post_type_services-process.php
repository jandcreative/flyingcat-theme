 	
<?php get_header(); ?>


	<div id="page-wrapper">

		<section class="header-services">

			<div class="container">
	 			<span><?php the_field('service_name');?></span>
				<h1><?php the_field('title_service_h');?></h1>
				<p><?php the_field('text_service');?></p>
			</div>

		</section>


		<?php if( have_rows('phases') ):?>
		<?php  while ( have_rows('phases') ): the_row(); ?>
		<?php if( get_row_layout() == 'phase_1' ):

					// Get sub field values.
					$title_section = get_sub_field('title_section');
					$phase_name = get_sub_field('phase_name');
					$title_phase = get_sub_field('title_phase');
					$text_phase = get_sub_field('text_phase');
					$html_frameboard = get_sub_field('html_frameboard');
					$img_phase = get_sub_field('img_phase');

				?>

				<section class="phase">
						<h2><?php echo $title_section;?></h2>

					<div class="row-phase">

						<div class="box-text">
							<span><?php echo $phase_name;?></span>
							<h3><?php echo $title_phase;?></h3>
							<?php echo $text_phase;?>
							<div class="frame-board">
								<?php echo $html_frameboard;?>	
							</div>
						</div>

						<div class="box-image">
							<img src="<?php echo $img_phase;?>">
						</div>
					</div>

				</section>

				<?php elseif( get_row_layout() == 'phase_standard_no_initial' ): 
					// Get sub field values.
					$phase_name_no_initial = get_sub_field('phase_name_no_initial');
					$title_phase_no_initial = get_sub_field('title_phase_no_initial');
					$text_phase_no_initial = get_sub_field('text_phase_no_initial');
					$html_frameboard_no_initial = get_sub_field('html_frameboard_no_initial');
					$img_phase_no_initial = get_sub_field('img_phase_no_initial');

				?>

				<section class="phase white">

					<div class="row-phase">

						<div class="box-text">
							<span><?php echo $phase_name_no_initial;?></span>
							<h3><?php echo $title_phase_no_initial;?></h3>
							<?php echo $text_phase_no_initial;?>
							<div class="frame-board">
								<?php echo $html_frameboard_no_initial;?>	
							</div>
						</div>

						<div class="box-image">
							<img src="<?php echo $img_phase_no_initial;?>">
						</div>
					</div>

				</section>

				<?php elseif( get_row_layout() == 'phase_standard_no_initial_reverse' ): 
					// Get sub field values.
					$phase_name_no_initial_reverse = get_sub_field('phase_name_no_initial_reverse');
					$title_phase_no_initial_reverse = get_sub_field('title_phase_no_initial_reverse');
					$text_phase_no_initial_reverse = get_sub_field('text_phase_no_initial_reverse');
					$html_frameboard_no_initial_reverse = get_sub_field('html_frameboard_no_initial_reverse');
					$img_phase_no_initial_reverse = get_sub_field('img_phase_no_initial_reverse');

				?>

				<section class="phase reverse">

					<div class="row-phase">

						<div class="box-image">
							<img src="<?php echo $img_phase_no_initial_reverse;?>">
						</div>

						<div class="box-text">
							<span><?php echo $phase_name_no_initial_reverse;?></span>
							<h3><?php echo $title_phase_no_initial_reverse;?></h3>
							<?php echo $text_phase_no_initial_reverse;?>
							<div class="frame-board">
								<?php echo $html_frameboard_no_initial_reverse;?>	
							</div>
						</div>

						
					</div>

				</section>

				<?php elseif( get_row_layout() == 'phase_img_txt' ): 
					// Get sub field values.
					$phase_name_full = get_sub_field('phase_name_full');
					$title_phase_full = get_sub_field('title_phase_full');
					$text_phase_full = get_sub_field('text_phase_full');
					$html_frameboard_full = get_sub_field('html_frameboard_full');
					$title_right_full = get_sub_field('title_right_full');
					$text_right_full = get_sub_field('text_right_full');
					$image_left_full = get_sub_field('image_left_full');
				?>

				<section class="phase full">

					<div class="row-phase">

						<div class="box-text">
							<span><?php echo $phase_name_full;?></span>
							<h3><?php echo $title_phase_full;?></h3>
							<?php echo $text_phase_full;?>
							
						</div>

						<div class="box-image">
							<div class="frame-board">
									<?php echo $html_frameboard_full?>	
							</div>
						</div>

					</div>


					<div class="row-phase content">
						<div class="box-image">
							<img src="<?php echo $image_left_full;?>">
						</div>

						<div class="box-text">
							<h3><?php echo $title_right_full;?></h3>
							<?php echo $text_right_full;?>
						</div>
					</div>

				</section>


				<?php elseif( get_row_layout() == 'row_txt_img' ): 

				// Get sub field values.
				$title_left = get_sub_field('title_left');
				$text_left = get_sub_field('text_left');
				$image_right = get_sub_field('image_right'); ?>


				<div class="row-phase content framework">

					<div class="box-text">
						<h3><?php echo $title_left;?></h3>
						<?php echo $text_left;?>
					</div>

					<div class="box-image">
					<!-- 	<img src="<?php echo $image_right;?>"> -->
					</div>

				</div>
			
		<?php endif;?>
		<?php endwhile;?>
		<?php endif;?>

		<?php if( have_rows('full_sections') ):?>

		<?php  while ( have_rows('full_sections') ): the_row(); ?>

		<?php if( get_row_layout() == 'testimonial' ):

			// Get sub field values.
			$title_testimonial = get_sub_field('title_testimonial');
			$position_avatar = get_sub_field('position_avatar');
			$name_avatar = get_sub_field('name_avatar'); 
			$img_avatar = get_sub_field('img_avatar');
			$text_testimonial = get_sub_field('text_testimonial');
			?>
			
				<section class="testimonials">

						<div class="item-testimonial">

								<h3><?php echo $title_testimonial;?></h3>

								<div class="container-testimonial">
									<div class="info_profile">
										<div class="avatar">
											<img src="<?php echo $img_avatar;?>">
										</div>
										<span class="name"><?php echo $name_avatar;?></span>
										<span class="position"><?php echo $position_avatar;?></span>
									</div>

									<div class="text">

										<?php echo $text_testimonial;?>
									</div>
								</div>
						</div>

				</section>


				<?php elseif( get_row_layout() == 'red' ): 

				// Get sub field values.
				$title_red = get_sub_field('title_red');
				$text_red = get_sub_field('text_red');
				?>

				<section class="red">

					<div class="content_services">
						

						<div class="content">
							<h2><?php echo $title_red;?></h2>
							<?php echo $text_red;?>	
						</div>

					</div>

				</section>

		<?php endif;?>
		<?php endwhile;?>
		<?php endif;?>

		<?php if( have_rows('banner_sections') ):?>

		<?php  while ( have_rows('banner_sections') ): the_row(); ?>

		<?php if( get_row_layout() == 'banner_1' ):

		// Get sub field values.
		$title_banner = get_sub_field('title_banner');
		$text_banner = get_sub_field('text_banner'); 
		$button_banner = get_sub_field('button_banner'); 
		$link_banner = get_sub_field('link_banner');
		$image_banner = get_sub_field('image_banner');
		?>


		<section class="block-client grey">

			<div class="container-client">

				<div class="content">

					<h2><?php echo $title_banner;?></h2>
				
					<?php echo $text_banner;?>
					
					<button>
						<a href="<?php echo $link_banner;?>"><?php echo $button_banner;?></a>
					</button>

				</div>

				<div class="image">

					<img src="<?php echo $image_banner;?>">

				</div>

			</div>

		</section>


	    <?php elseif( get_row_layout() == 'banner_2' ): 

		// Get sub field values.
		$title_banner_02 = get_sub_field('title_banner_02');
		$text_banner_02 = get_sub_field('text_banner_02'); 
		$button_banner_02 = get_sub_field('button_banner_02'); 
		$link_banner_02 = get_sub_field('link_banner_02');
		?>	


		<section id="banner" class="banner">

			<div class="hero-contact">

				<div class="container-contact">

					<h3><?php echo $title_banner_02;?></h3>
					<?php echo $text_banner_02;?>

					<button><a href="<?php echo $link_banner_02;?>" target="_blank"><?php echo $button_banner_02;?></a></button>
				</div>
					
			</div>

		</section>
		
		<?php endif;?>
		<?php endwhile;?>
		<?php endif;?>


	</div>
	
	<?php get_footer(); ?>

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
		