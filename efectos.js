$(document).ready(function(){
	$('header .fadeA .menu .links').each(function(index, elemento){
		$(this).css({
			'margin-top': '-300px'
		});

		$(this).animate({
			'margin-top': '0'
		}, 2000 + (index * 500));
	});
	var Contacto = $('#Contacto').offset().top;
	var Portafolio = $('#Portafolio').offset().top;
	var Redes = $('#Redes').offset().top;

	$('#btn-Contacto').on('click', function(e){
		e.preventDefault();
		
		$('html, body').animate({
			scrollTop: Contacto }, 700);
	});
	$('#btn-Portafolio').on('click', function(e){
		e.preventDefault();
		
		$('html, body').animate({
			scrollTop: Portafolio }, 700);
	});
	$('#btn-Redes').on('click', function(e){
		e.preventDefault();
		
		$('html, body').animate({
			scrollTop: Redes }, 700);
	});
	$('#btn-Servicio').on('click', function(e){
		e.preventDefault();
		
		$('html, body').animate({
			scrollTop: Contacto }, 700);
	});

});