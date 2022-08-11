$(document).ready(function(){

	$('#animation a').click(function(){

		if( $('#animation').attr('class') == 'arrow' ){
			$('.buddy').css({'bottom':'1300px'});

		}

	});

	$('#animation_parachuting a').click(function(){

		if( $('#animation_parachuting').attr('class') == 'arrow' ){
			$('.buddy_parachuting').css({'bottom':'5600px'});

		}

	});

	$('#animation_icons a').click(function(){

		if( $('#animation_icons').attr('class') == 'arrow' ){
			$('.buddy_portatil').css({'left':'5500px'});

		}

	});
});