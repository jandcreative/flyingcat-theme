<?php get_header(); ?>


	<div id="page-wrapper">


	<div class="v-header">
    	<div class="fullscreen-video-wrap">
	     <video autoplay muted loop id="myVideo">
	  			<source src="<?php the_field('video_buddy_background');?>" type="video/mp4">
		</video>
    	</div>
    	<div class="header-overlay"></div>

    	<section class="header-about-us-page">

			<div class="container">
	 			<span><?php the_field('page_name');?></span>
				<h1><?php the_field('title_page');?></h1>
				<?php the_field('text_page');?>
			</div>

		</section>
 
 		 </div>

 		 <div class="arrow">
				<a href="#about-us-page"><img src="https://flyingcatmarketing.com/wp-content/themes/flyingcat/images/scroll_down_white.svg">
				</a>
		 </div>

	</div>

	<section id="about-us-page" class="about-us-page">

		<div class="container">

			<div class="row-about">
				<div class="box-content">
					<h2><?php the_field('title_first_01');?></h2>
					<?php the_field('text_first_01');?>	
				</div>

				<div class="box-img">
					<img src="<?php the_field('image_first_01');?>	">
				</div>
			</div>

			<div class="row-about second">
				<div class="box-img">
					<img src="<?php the_field('image_second_02');?>">
				</div>

				<div class="box-content">
					<h2><?php the_field('title_second_02');?></h2>
					<?php the_field('text_second_02');?>	
				</div>
			</div>

			<div id="board" class="row-about">
				<div class="box-content">
						<h2><?php the_field('title_third_03');?></h2>
						<?php the_field('text_third_03');?>
					</div>
				<div class="frame-board">
					<?php the_field('text_frameboard_03');?>
				</div>
			</div>
			
			<div class="row-about">
				<div class="box-content">
					<h2><?php the_field('title_fourth_04');?></h2>
					<?php the_field('text_fourth_04');?>
				</div>

				<div class="box-img">
					<img src="<?php the_field('image_fourth_04');?>">
				</div>
			</div>

			<div class="row-about second">
				<div class="box-img">
					<img src="<?php the_field('image_fifth_05');?>">
				</div>

				<div class="box-content">
					<h2><?php the_field('title_fifth_05');?></h2>
					<?php the_field('text_fifth_05');?>
				</div>
			</div>

		</div>
				
		<div class="content">
				<?php the_content();?>

		</div>

	</section>

	<?php get_template_part( 'template-parts/banner')?>

	<?php get_footer(); ?>

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
            $('#header-nav').removeClass('background');
        // mediaquery no es 600
      }

  </script>

</body>
</html>
		