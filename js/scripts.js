'use strict';
var animDuration = 500,
	pageLoaded = false;
$(document).ready(function () {
	if ('ontouchstart' in document.documentElement) {
		$('html').addClass('touch');
	} else {
		$('html').addClass('no-touch');
	}
	
	// Инициализация основных компонентов
	init();

	$(window).trigger('resize').trigger('scroll');

	var pageHash = window.location.hash;
	if (pageHash) {
		setTimeout(function () {
			$('html, body').scrollTop($(pageHash).position().top);
		}, 300);
	}
});

$(window).on('load', function () {
	setTimeout(function () {
		$('body').addClass('body--page-loaded');
		pageLoaded = true;
		$(window).trigger('scroll');
	}, 300);
});

/*! Инициализация */
function init() {
	// Табы
	$('.ui-tabs').each(function () {
		if ($(this).data('init') !== true) {
			tabsInit($(this));
		}
	});
}

/*! Табы */
function tabsInit(tabs) {
	var pref = '.ui-tabs',
		prefItem = pref+'__tab',
		prefLink = pref+'__link',
		items = tabs.find(prefItem),
		links = tabs.find(prefLink);

	if (!tabs.find(prefItem+'.active').length || tabs.find(prefItem+'.active').length > 1) {
		items.removeClass('active');
		items.first().addClass('active');
	}
	
	var activeTab = tabs.find(prefItem+'.active'),
		activeTabContent = activeTab.find(prefLink).attr('data-tab');

	$(pref+'-content[data-tab="' + activeTabContent + '"]').show().addClass('active');

	links.on('click', function () {
		var link = $(this),
			item = link.closest(prefItem);
		if (!item.hasClass('active')) {
			var tabId = link.attr('data-tab');

			items.removeClass('active');
			item.addClass('active');

			$(pref+'-content[data-tab="' + tabId + '"]').closest(pref+'-contents').find(pref+'-content').removeClass('active');

			$(pref+'-content[data-tab="' + tabId + '"]').addClass('active');
		}
	});

	tabs.data('init', true);
}