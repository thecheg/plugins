'use strict';
var winHeight,
	scrollOffset = 60,
	popupOpened = false,
	popupOpenedPos = 0,
	scrollPos = 0,
	animDuration = 500,
	pageLoaded = false,
	formTitle = '',
	scrollFixedEl = $('body');
$(document).ready(function() {
	if ('ontouchstart' in document.documentElement) {
		$('html').addClass('touch');
	} else {
		$('html').addClass('no-touch');
	}

	winHeight = $(window).height();
	scrollPos = $(window).scrollTop();

	$(window).on('resize',function() {
		winHeight = $(window).height();
		scrollPos = $(window).scrollTop();
	});
	$(window).on('scroll',function() {
		scrollPos = $(window).scrollTop();
	});

	$(window).trigger('resize').trigger('scroll');

	// Прокрутка к элементу
	$('.scrollTo').on('click',function(e) {
		e.preventDefault();
		var target = $(this).attr('data-scrollto-link');
		if (target) {
			var targetPos = $('[data-scrollto-target="'+target+'"]').not($(this)).offset().top - scrollOffset;
			$('html, body').animate({scrollTop:targetPos},500);
		}
	});

	var pageHash = window.location.hash;
	if (pageHash) {
		setTimeout(function() {
		$('html, body').scrollTop($(pageHash).position().top);
		},300);
	}
});
	
$(window).on('load',function() {
	setTimeout(function() {
		$('.preloader').fadeOut(1000,function(){$(this).remove();}); // скрываем прелоадер
		$('body').addClass('body--page-loaded');
		pageLoaded = true;
		$(window).trigger('scroll');
	},300);
});
