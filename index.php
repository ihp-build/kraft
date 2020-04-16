<?php
	global $page_title;
	$page_title = "продажа, установка";
	include_once("./header.php");
?>

<div class="kraft-container">
	<div class="wrapper">


		<div class="owl-carousel owl-theme">

		  <div class="item">
		  	<div class="slider_item slider_item_1">
		  		<div class="slider-overlay"></div>
		  		<a href="#" title="Секционные ворота"><h1>Секционные ворота</h1></a>
		  	</div>
		  </div>

		  <div class="item">
		  	<div class="slider_item slider_item_2">
		  		<div class="slider-overlay"></div>
		  		<a href="#" title="Роллетные системы"><h1>Роллетные системы</h1></a>
		  	</div>
		  </div>

		  <div class="item">
		  	<div class="slider_item slider_item_3">
		  		<div class="slider-overlay"></div>
		  		<a href="#" title="Въездные ворота"><h1>Въездные ворота</h1></a>
		  	</div>
		  </div>
		 
		</div>


	</div>
</div>

<?php
	include_once("./footer.php");
?>

<script>
	$(document).ready(function(){
 		$('.owl-carousel').owlCarousel({
		    loop:true,
		    margin:10,
		    nav:true,

		    autoplay:true,
			autoplayTimeout:10000,
			autoplayHoverPause:true,

			animateOut: 'fadeOut',

		    responsiveClass:true,
		    responsive:{
		        0:{
		            items:1,
		        },
		        600:{
		            items:1,
		        },
		        1000:{
		            items:1,		            
		        }
		    }
		});


 		$('.owl-carousel').mouseenter(function(){
 			$('.owl-nav').fadeIn( "slow", function() {
			// Animation complete
			});
 		});

 		$('.owl-carousel').mouseleave(function(){
 			$('.owl-nav').fadeOut( "slow", function() {
			// Animation complete
			});
 		});
	});
</script>