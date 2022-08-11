 	
<?php get_header(); ?>


	<div id="page-wrapper">

		<section class="header-services">

			<div class="container">
	 			<span><?php the_field('service_name');?></span>
				<h1><?php the_field('title_service_h');?></h1>
				<p><?php the_field('text_service');?></p>
			</div>

		</section>

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



		<section id="services" class="services">

		<?php if( have_rows('content_services') ):?>

		<?php  while ( have_rows('content_services') ): the_row(); ?>

		<?php if( get_row_layout() == 'row_1' ):

			// Get sub field values.
			$title_right = get_sub_field('title_right');
			$text_right = get_sub_field('text_right');
			$image_left = get_sub_field('image_left'); ?>


			<div class="row-services">

				<div class="box-image">

					<img src="<?php echo $image_left;?>">

				</div>

				<div class="box-text">
					<h2><?php echo $title_right;?></h2>
					<?php echo $text_right;?>
				</div>
			
			</div>

			<?php elseif( get_row_layout() == 'row_2' ): 

			// Get sub field values.
			$title_left = get_sub_field('title_left');
			$text_left = get_sub_field('text_left');
			$image_right = get_sub_field('image_right'); ?>


			<div class="row-services">

				<div class="box-text">
					<h2><?php echo $title_left;?></h2>
					<?php echo $text_left;?>
				</div>


				<div class="box-image">

					<img src="<?php echo $image_right;?>">

				</div>
			
			</div>

			<?php elseif( get_row_layout() == 'row_3' ): 

			// Get sub field values.
			$title_box_01 = get_sub_field('title_box_01');
			$icon_box_01 = get_sub_field('icon_box_01'); 
			$text_box_01 = get_sub_field('text_box_01'); 
			$title_box_02 = get_sub_field('title_box_02');
			$icon_box_02 = get_sub_field('icon_box_02'); 
			$text_box_02 = get_sub_field('text_box_02');
			$title_box_03 = get_sub_field('title_box_03');
			$icon_box_03 = get_sub_field('icon_box_03'); 
			$text_box_03 = get_sub_field('text_box_03');		
			?>
			

			<div class="boxes-services">

				<div class="container-boxes">

					<div class="item-box">
							<h3><?php echo $title_box_01;?></h3>
							<img src="<?php echo $icon_box_01;?>">
							<?php echo $text_box_01;?>
					</div>

					<div class="item-box">
							<h3><?php echo $title_box_02;?></h3>
							<img src="<?php echo $icon_box_02;?>">
							<?php echo $text_box_02;?>
					</div>

					<div class="item-box">
							<h3><?php echo $title_box_03;?></h3>
							<img src="<?php echo $icon_box_03;?>">
							<?php echo $text_box_03;?>
					</div>

				</div>
		
			</div>

		<?php endif;?>
		<?php endwhile;?>
		<?php endif;?>

		</section>

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
		