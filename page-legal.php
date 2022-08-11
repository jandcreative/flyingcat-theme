<?php 
/* Template Name: Content - Legal */ 
/* Template Post Type: post, page, product */
?>	

<?php get_header(); ?>


	<div id="page-wrapper">

		<?php while(have_posts()): the_post(); ?>

	    <section id="legal" class="legal">


		    <div class="container">
				<h1 class="entry-title">
					<?php the_title();?>	
				</h1>
					
					
				<div class="content">
				<?php the_content();?>					
				</div>

			</div>

		</section>

		<?php endwhile; ?>

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
		