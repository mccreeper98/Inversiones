function navEnElTop() {
	$(document).ready(function(){
		var altura = $('#nav').offset().top;		
		$(window).on('scroll', function(){
			if ( $(window).scrollTop() > altura ){
				$('#nav').addClass('navbar-fixed');
			} else {
				$('#nav').removeClass('navbar-fixed');
			}
		});

		$(window).on('scroll', function(){
			if ( $(window).scrollTop() > altura ){
				$('nav').addClass('navTop');
			} else {
				$('nav').removeClass('navTop');
			}
		});
		
		$(window).on('scroll', function(){
			if ( $(window).scrollTop() > altura ){
				$('#logo').removeClass('logo');
				$('#logo').addClass('logoTop');
			} else {
				$('#logo').removeClass('logoTop');
				$('#logo').addClass('logo');
			}
		});

	});
}