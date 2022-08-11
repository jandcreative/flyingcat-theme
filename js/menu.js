jQuery(document).ready(function( $ ) {

	$('#hamburguer').click(function(){

		if( $('#hamburguer').attr('class') == 'mobile' ){

			$('#hamburguer').addClass('close-hamburguer');
			$('.full-menu').css({'right':'0'});

		}else{
			$('#hamburguer').removeClass('close-hamburguer');
			$('.full-menu').css({'right':'-75%'});
		}


	});

	$('#menu-item-3739').click(function(){

		if( $('#menu-item-3739').attr('class') == 'menu-item-has-children' ){
			$('#menu-item-3739').addClass('open');

		}else{
			$('#menu-item-3739').removeClass('open');
		}


	});

	$('#menu-item-3739').click(function(e){		
		//e.preventDefault();
		if ( null != e.target.nextElementSibling ){
			e.preventDefault();
			$('#menu-item-3739').toggleClass('toggle-menu');	
			$('#menu-item-3739 a').toggleClass('no-active');			
			return false;
		} 
		return;
	});
	
	$('#menu-item-1580').click(function(){

		if( $('#menu-item-1580').attr('class') == 'menu-item-has-children' ){
			$('#menu-item-1580').addClass('open');

		}else{
			$('#menu-item-1580').removeClass('open');
		}


	});

	$('#menu-item-1580').click(function(e){		
		//e.preventDefault();
		if ( null != e.target.nextElementSibling ){
			e.preventDefault();
			$('#menu-item-1580').toggleClass('toggle-menu');	
			$('#menu-item-1580 a').toggleClass('no-active');			
			return false;
		} 
		return;
	});




});