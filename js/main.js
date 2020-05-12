/* Disable global scroll above some DIV */
$(document).ready(function () {
	$('.scroll-only-this').bind('mousewheel DOMMouseScroll', function (e) {
		var e0 = e.originalEvent,
			delta = e0.wheelDelta || -e0.detail;
		this.scrollTop += ( delta < 0 ? 1 : -1 ) * 30;
		e.preventDefault();
	});
});
/* //Disable global scroll above some DIV */


$(document).ready(function() {
	$().UItoTop({ easingType: 'easeOutQuart' });
});

$(document).ready(function(){
	$('#toTop').hover(function(){
		$('#toTop').animate({"margin-bottom":"7px"}, 'fast');
	},
	function(){
		$('#toTop').animate({"margin-bottom":"0px"}, 'fast');
	});
});


$(window).on('load', function() {
	$('.rolstavni').animate({height:'330px'},2000, function(){
		$( ".slogan" ).fadeIn( "slow", function() {
			// Animation complete
		});
		$( ".slogan-email" ).fadeIn( "slow", function() {
			// Animation complete
		});
		$( ".slogan-phone" ).fadeIn( "slow", function() {
			// Animation complete
		});
	});
});


// Плавный скролл на якоря
$(document).ready(function() {
	$('a[href^="#"]').click(function(){
		var target = $(this).attr('href');
		$('html, body').animate({scrollTop: $(target).offset().top}, 1500);
		return false;
	});
});