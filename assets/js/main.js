$(document).ready(function(){
	$('.menu li:has(ul)').click(function(e){
		e.preventDefault();

		if ($(this).hasClass('active')){
			$(this).removeClass('active');
			$(this).children('ul').slideUp();
		}else {
			$('.menu li ul').slideUp();
			$('.menu li').removeClass('active');
			$(this).addClass('active');
			$(this).children('ul').slideDown();
		}
	});

	$('.btn_menu_mobile').click(function(){
		$('.container_nav .menu').slideToggle();
		$('.container_nav').css({'height' : '30px'});
	})

	$(window).resize(function(){
		if($(document).width() > 450) {
			$('.container_nav .menu').css({'display' : 'block'});
			$('.container_nav').css({'height' : '100vh'});
		}

		if($(document).width() < 450) {
			$('.container_nav .menu').css({'display' : 'none'});
			$('.menu li ul').slideUp();
			$('.menu li ul').removeClass('active');
		}
	});

	$('.menu li ul li a').click(function(){
		window.location.href = $(this).attr("href");
	});
});