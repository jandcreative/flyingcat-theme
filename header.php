<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link href="<?php echo esc_url(get_stylesheet_directory_uri();"?>/css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    	<script>$(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html, body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });</script>
		<?php wp_head(); ?>
	</head>

	<body id="top" <?php body_class(); ?>>

	<div class="full-menu">
		<?php wp_nav_menu( array(
			'theme_location'  => 'primary',
			'container'       => 'nav',
			'container_id'      =>'enlace',
			) );
		?>
	</div>

	<div id="hamburguer" class="mobile">
		<div class="lines line-top"></div>
		<div class="lines line-mid"></div>
		<div class="lines line-bottom"></div>
	</div>
	
	<header id="header">

		<div id="header-nav">


			<a href="<?php echo esc_url( home_url() ); ?>">
			
				<div class="logo"></div>

			</a>

			<div class="desktop-menu">
				<?php wp_nav_menu( array(
		            'theme_location'  => 'primary',
		            'container'       => 'nav',
		            'container id'    => 'nav',
		            ) );
		        ?>
			</div>

		</div>
    </header>


