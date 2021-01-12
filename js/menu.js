$(function(){

	var header = document.getElementById('header');
	var headroom = new Headroom(header);
	headroom.init();


	//Menu Responsive
	// Calculamos el ancho de la pagina
	var ancho = $(window).width(),
		enlaces = $('#enlaces'),
		btnMenu = $('#btn-menu'),
		icono = $('.icono');

		if (ancho < 750) {
			enlaces.hide();
			icono.addClass('fa-bars');
		}

		btnMenu.on('click', function(e){
			enlaces.slideToggle();
			btnMenu.toggleClass('fa-bars');
			btnMenu.toggleClass('fa-times');
		});

		$(window).on('resize', function(){
			if($(this).width() > 750){
				enlaces.show();
				btnMenu.addClass('fa-times');
				btnMenu.removeClass('fa-bars');
			} else {
				enlaces.hide();
				btnMenu.addClass('fa-bars');
				btnMenu.removeClass('fa-times');

			}
		});


});