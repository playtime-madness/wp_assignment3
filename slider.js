'use strict';

$(function(){

	var slide_num = 1;
	var $slider = $('#slider');
	var $slideContainer = $('.slides', $slider);
	var $slides = $('.slide', $slider);

	setInterval(function() {
		$('#slider .slides').animate({'margin-left': '-=600px'}, 4000, function() {

		if(++slide_num === $slides.length){
			slide_num = 1;
			$slideContainer.css('margin-left', 0);
		}
	});
	}, 8000);






});