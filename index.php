<?php
	$rootPath = '';
	$pageTitle = '';
	$pageKeywords = '';
	$pageDescription = '';
?>
<?php include $rootPath.'php/config.php';?>
<?php include $rootPath.'template/head.php';?>
<body class="body">
	<div class="page">
		<div class="sidebar">
			<div class="sidebar-inner">
				<ul class="menu">
					<li class="ml1">
						<a href="#css">
							CSS
						</a>
					</li>
					<li class="ml2">
						<a href="#css-reset">
							CSS Reset
						</a>
					</li>
					<li class="ml2">
						<a href="#css-placeholder">
							Placeholder
						</a>
					</li>
					<li class="ml2">
						<a href="#css-borderbox">
							Border-box
						</a>
					</li>
					<li class="ml2">
						<a href="#css-userselecnone">
							User-select:none
						</a>
					</li>
					<li class="ml2">
						<a href="#css-crossbtn">
							Крестик
						</a>
					</li>
					<li class="ml2">
						<a href="#css-cover">
							CSS cover (img, video, iframe)
						</a>
					</li>
					<li class="ml2">
						<a href="#css-preloader">
							Прелоадер
						</a>
					</li>
					<li class="ml2">
						<a href="#css-checkbox">
							checkbox
						</a>
					</li>
					<div class="menu-div"></div>
					<li class="ml1">
						<a href="#js">
							Javascript
						</a>
					</li>
					<li class="ml2">
						<a href="#js-matches">
							jQuery .matches
						</a>
					</li>
					<li class="ml2">
						<a href="#js-htmltouch">
							HTML touch/no-touch
						</a>
					</li>
					<div class="menu-div"></div>
					<li class="ml2">
						<a href="#js-menu">
							Меню
						</a>
					</li>
					<li class="ml2">
						<a href="#js-menutoggle">
							menu-toggle
						</a>
					</li>
					<div class="menu-div"></div>
					<li class="ml2">
						<a href="#js-vhfix">
							vh fix
						</a>
					</li>
					<li class="ml2">
						<a href="#js-scrollto">
							scrollTo
						</a>
					</li>
					<div class="menu-div"></div>
					<li class="ml2">
						<a href="#js-imgopacity">
							img opacity
						</a>
					</li>
					<li class="ml2">
						<a href="#js-placeholder">
							Плавающий placeholder
						</a>
					</li>
					<li class="ml2">
						<a href="#js-tabs">
							Tabs
						</a>
					</li>
					<li class="ml2">
						<a href="#js-accordion">
							Accordion
						</a>
					</li>
					<li class="ml2">
						<a href="#js-sendform">
							Send form
						</a>
					</li>
					<li class="ml2">
						<a href="#js-clearform">
							Очистка формы
						</a>
					</li>
					<li class="ml2">
						<a href="#js-popups">
							Попапы
						</a>
					</li>
					<li class="ml2">
						<a href="#js-collapse">
							Collapse
						</a>
					</li>
					<li class="ml2">
						<a href="#js-init">
							INIT()
						</a>
					</li>
					<div class="menu-div"></div>
					<li class="ml2">
						<a href="#js-scrollbarwidth">
							scrollbarWidth
						</a>
					</li>
					<li class="ml2">
						<a href="#js-scrolllock">
							scrollLock
						</a>
					</li>
					<div class="menu-div"></div>
					<li class="ml2">
						<a href="#js-waypoints">
							Scroll Waypoints
						</a>
					</li>
					<li class="ml2">
						<a href="#js-animate">
							scroll animate
						</a>
					</li>
					<li class="ml2">
						<a href="#js-ytvideo">
							YouTube video play
						</a>
					</li>
					<li class="ml2">
						<a href="#js-formvalidator">
							formValidator
						</a>
					</li>
					<div class="menu-div"></div>
					<li class="ml1">
						<a href="#js-plugins">
							Плагины
						</a>
					</li>
					<li class="ml2">
						<a href="#js-jquery">
							jQuery
						</a>
					</li>
					<li class="ml2">
						<a href="#js-swiper">
							Swiper
						</a>
					</li>
					<li class="ml3">
						<a href="#js-swiper-parallax">
							Swiper Parallax
						</a>
					</li>
					<li class="ml2">
						<a href="#js-fancybox">
							Fancybox
						</a>
					</li>
					<li class="ml2">
						<a href="#js-formstyler">
							Form Styler
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="page-content">
			<div class="section">
				<div class="section-inner">
					<h2 id="css">
						<a href="#css">CSS</a>
					</h2>
					<h3 id="css-reset">
						<a href="#css-reset">CSS Reset</a>
					</h3>
					<pre class="language-css">
						<code class="language-css">
							/* Eric Meyer's Reset CSS v2.0 */
							html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {margin:0; padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;} article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {display:block;} body {line-height:1;} ol, ul {list-style:none;} blockquote, q {quotes:none;} blockquote:before, blockquote:after, q:before, q:after {content:''; content:none;} table {border-collapse:collapse;border-spacing:0;} input,textarea {outline:none;width:100%;} input, optgroup, select, textarea, button {display:block;font-family:inherit;border-radius:0;border:none;-webkit-box-shadow:none;box-shadow:none;background:none;}
							/* Eric Meyer's Reset CSS v2.0 end */
						</code>
					</pre>
					<h3 id="css-placeholder">
						<a href="#css-placeholder">Placeholder</a>
					</h3>
					<pre class="language-css">
						<code class="language-css">
							input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
								opacity:1;
								text-align:inherit;
								color:#76767A;
							}
							input::-moz-placeholder, 
							textarea::-moz-placeholder {
								opacity:1;
								text-align:inherit;
								color:#76767A;
							}
							textarea::-webkit-input-placeholder {
								text-align:inherit!important;
								opacity:1;
								color:#76767A;
							}
							textarea::-moz-placeholder {
								text-align:inherit!important;
								opacity:1;
								color:#76767A;
							}
							input::-webkit-input-placeholder,
							textarea::-webkit-input-placeholder,
							input::-moz-placeholder,
							textarea::-moz-placeholder {
								opacity:1;
								color:#76767A;
							}
							input:focus::-webkit-input-placeholder,
							textarea:focus::-webkit-input-placeholder {
								opacity:1;
							}
							input:focus::-moz-placeholder, textarea:focus::-moz-placeholder {
								opacity:1;
							}
						</code>
					</pre>
					<h3 id="css-borderbox">
						<a href="#css-borderbox">Border-box</a>
					</h3>
					<pre class="language-css">
						<code class="language-css">
							*,
							*:before,
							*:after {
								-webkit-box-sizing:border-box;
								-ms-box-sizing:border-box;
								-o-box-sizing:border-box;
								box-sizing:border-box;
							}
						</code>
					</pre>
					<h3 id="css-userselecnone">
						<a href="#css-userselecnone">User-select:none</a>
					</h3>
					<pre class="language-css">
						<code class="language-css">
							{
								-webkit-touch-callout:none;
								-webkit-user-select:none;
								-moz-user-select:none;
								-ms-user-select:none;
								-o-user-select:none;
								user-select:none;
							}
						</code>
					</pre><h3 id="css-crossbtn">
						<a href="#css-crossbtn">Крестик</a>
					</h3>
					<pre class="language-css">
						<code class="language-css">
							.cross-btn {
								position:relative;
								z-index:3;
								width:22px;
								height:22px;
								cursor:pointer;
								-webkit-transition:opacity .4s;
								transition:opacity .4s;
							}

							.cross-btn:before,
							.cross-btn:after {
								display:block;
								position:absolute;
								content:'';
								width:100%;
								height:2px;
								left:0;
								top:10px;
								background:#000;
							}

							.cross-btn:before {
								-webkit-transform:rotate(45deg);
								transform:rotate(45deg);
							}

							.cross-btn:after {
								-webkit-transform:rotate(-45deg);
								transform:rotate(-45deg);
							}
						</code>
					</pre><h3 id="css-cover">
						<a href="#css-cover">CSS cover (img, video, iframe)</a>
					</h3>
					<pre class="language-css">
						<code class="language-css">
							.container {
								position:absolute;
								left:0;
								top:0;
								right:0;
								bottom:0;
								overflow:hidden;
							}

							.container video {
								position:absolute;
								left:51%;
								top:51%;
								-webkit-transform:translate(-50%,-50%);
								transform:translate(-50%,-50%);
								min-width:102%;
								min-height:102%;
								width:auto;
								height:auto;
								overflow:hidden;
							}
						</code>
					</pre><h3 id="css-preloader">
						<a href="#css-preloader">Прелоадер</a>
					</h3>
					<pre class="language-css">
						<code class="language-css">
							/* Прелоадер */

							.preloader {
								position:fixed;
								left:0;
								top:0;
								width:100%;
								height:100%;
								z-index:99;
								background:#fff;
								display:none;
							}

							.preloader-inner {
								position:absolute;
								width:100%;
								left:0;
								top:50%;
								-webkit-transform:translate(0,-50%);
								transform:translate(0,-50%);
							}

							.preloader-spinner {
								border-radius:100%;
								border:5px solid #e3e3e3;
								border-top-color:#11cdf7;
								width:60px;
								height:60px;
								margin:0 auto 20px auto;
								-webkit-animation:spin 1s infinite linear;
								animation:spin 1s infinite linear;
								position:relative;
							}

							.preloader-text {
								text-align:center;
								font-size:20px;
								line-height:20px;
								font-weight:700;
								text-transform:uppercase;
								color:#e3e3e3;
							}

							@-webkit-keyframes spin {
								100% {
									-webkit-transform: rotate(360deg);
									transform: rotate(360deg);
								}
							}

							@keyframes spin {
								100% {
									-webkit-transform: rotate(360deg);
									transform: rotate(360deg);
								}
							}

							/* Прелоадер - конец */
						</code>
					</pre>
					<h3 id="css-checkbox">
						<a href="#css-checkbox">checkbox</a>
					</h3>
					<p>
						css
					</p>
					<pre class="language-css">
						<code class="language-css">
							.ui-check {
								position:relative;
								padding:0 0 0 50px;
								display:block;
								height:auto;
								min-height:16px;
								cursor:default;

								-webkit-touch-callout:none;
								-webkit-user-select:none;
								-moz-user-select:none;
								-ms-user-select:none;
								-o-user-select:none;
								user-select:none;
							}

							.ui-check input {
								display:none;
								position:absolute;
								opacity:0;
								visibility:hidden;
								width:0;
								height:0;
								left:-99999px;
								top:-99999px;
							}

							.ui-check-text {
								display:block;
								text-align:left;
								font-size:16px;
								line-height:24px;
								font-weight:400;
							}

							.ui-check-text a {
								color:#3351ad;
							}

							html.no-touch .ui-check-text a:hover {
								color:#2b3846;
							}

							.ui-check-icon {
								display:block;
								position:absolute;
								left:0;
								top:50%;
								margin-top:-15px;
								width:30px;
								height:30px;
								background:#fff;
								border:#cdd2d6 solid 2px;
								border-radius:5px;
								overflow:hidden;
								-webkit-transition:border .4s;
								transition:border .4s;
							}

							.ui-check-icon:after {
								content:'';
								width:7px;
								height:12px;
								position:absolute;
								left:50%;
								top:50%;
								border-right:#3351ad solid 3px;
								border-bottom:#3351ad solid 3px;
								margin:-8px 0 0 -3px;
								-webkit-transform:rotate(45deg);
								transform:rotate(45deg);
								opacity:0;
								-webkit-transition:opacity .4s;
								transition:opacity .4s;
							}

							.ui-check:hover .ui-check-icon {
								border-color:#3351ad;
							}

							.ui-check input:checked ~ .ui-check-icon:after {
								opacity:1;
							}
						</code>
					</pre>
					<p>
						html
					</p>
					<pre class="language-html">
						<code class="language-html">
							&lt;label class="ui-check">
								&lt;input type="checkbox" />
								&lt;span class="ui-check-icon"></span>
								&lt;span class="ui-check-text">
									Я ознакомлен(а) с &lt;a href="javascript:void(0);" target="_blank">порядком приема&lt;/a> и рассмотрения обращений граждан в адрес управляющих компаний города Новосибирска в электронном виде и даю свое согласие на обработку персональных данных в соответствии с &lt;a href="javascript:void(0);" target="_blank">политикой конфиденциальности УК&lt;/a>
								&lt;/span>
							&lt;/label>
						</code>
					</pre>
					<h2 id="js">
						<a href="#js">Javascript</a>
					</h2>
					<h3 id="js-matches">
						<a href="#js-matches">jQuery .matches</a>
					</h3>
					<pre class="language-js">
						<code class="language-js">
							if (window.matchMedia('(min-width:1251px)').matches) {}
						</code>
					</pre>
					<h3 id="js-htmltouch">
						<a href="#js-htmltouch">HTML touch/no-touch</a>
					</h3>
					<pre class="language-js">
						<code class="language-js">
							if ('ontouchstart' in document.documentElement) {
								$('html').addClass('touch');
							} else {
								$('html').addClass('no-touch');
							}
						</code>
					</pre>
					<h3 id="js-menu">
						<a href="#js-menu">Меню</a>
					</h3>
					<pre class="language-js">
						<code class="language-js">
							// МОБИЛЬНОЕ МЕНЮ
							var menuOpened = false;
							// Открытие меню
							function menuOpen() {
								popupOpenedPos = $(window).scrollTop();

								$('body').addClass('body--menu-opened');
								scrollLock(scrollFixedEl);

								menuOpened = true;
							}
							// Закрытие меню
							function menuClose() {
								$('body').removeClass('body--menu-opened');
								scrollLock(scrollFixedEl, 'unlock');

								if (device.ios()) {
									$(window).scrollTop(popupOpenedPos);
								}

								menuOpened = false;
							}
						</code>
					</pre>
					<h3 id="js-menutoggle">
						<a href="#js-menutoggle">menu-toggle</a>
					</h3>
					<pre class="language-js">
						<code class="language-js">
							// Клик на бургер
							$(document).on('click','.menu-toggle',function() {
								if (!menuOpened) {
									menuOpen();
								} else {
									menuClose();
								}
							});
						</code>
					</pre>
					<h3 id="js-vhfix">
						<a href="#js-vhfix">vh fix</a>
					</h3>
					<pre class="language-js">
						<code class="language-js">
							// vh fix
							function vhFix() {
								$('body').append('&lt;div class="vh-fix" style="position:fixed;width:1px;left:-9999px;top:0;bottom:0;pointer-events:none;opacity:0;visibility:hidden;" />');

								var vh = $('.vh-fix').height() * 0.01;
								document.documentElement.style.setProperty('--vh',vh+'px');

								$('.vh-fix').remove();
							}
						</code>
					</pre>
					<h3 id="js-scrollto">
						<a href="#js-scrollto">scrollTo</a>
					</h3>
					<pre class="language-js">
						<code class="language-js">
							// Прокрутка к элементу
							$(document).on('click','.scrollTo',function(e) {
								e.preventDefault();
								var target = $(this).attr('data-scrollto-link');
								if (target) {
									var targetPos = $('[data-scrollto-target="'+target+'"]').not($(this)).offset().top - scrollOffset;
									$('html, body').animate({scrollTop:targetPos},500);
								}
							});
						</code>
					</pre>
					<h3 id="js-imgopacity">
						<a href="#js-imgopacity">IMG opacity</a>
					</h3>
					<pre class="language-js">
						<code class="language-js">
							/*! lazy-загрузка изображений */
							function imgInit() {
								$('img[data-src]').each(function() {
									var img = $(this);
									img.attr('src',img.attr('data-src'));
									img.on('load', function() {
										img.removeAttr('data-src');
									});
								});
							}
						</code>
					</pre>
					<h3 id="js-placeholder">
						<a href="#js-placeholder">Плавающий placeholder</a>
					</h3>
					<pre class="language-js">
						<code class="language-js">
							/*! "Плавающий" placeholder */
							function inputInit(label) {
								var input = label.find('input, textarea'),
									field = label.closest('.ui-form-field');

								// фокус на инпуте/тексэйрии
								input.on('focus',function() {
									label.addClass('active focused');
								}).on('focusout blur change keyup input', function() {
									var value = $(this).val();
									if (value === '') {
										if (!input.is(':focus')) {
											label.removeClass('active');
										}
									} else {
										label.addClass('active');
										field.removeClass('ui-form-field--error');
									}
								}).on('focusout',function() {
									label.removeClass('focused');
								});

								input.trigger('change');
									
								label.data('init',true);
							}
						</code>
					</pre>
					<h3 id="js-tabs">
						<a href="#js-tabs">Tabs</a>
					</h3>
					<pre class="language-js">
						<code class="language-js">
							/*! Табы */
							function tabsInit(tabs) {
								//$('.ui-tab-content').hide();
								
								if (tabs.find('.ui-tab.active').length < 1 || tabs.find('.ui-tab.active').length > 1) {
									tabs.find('.ui-tab').removeClass('active');
									tabs.find('.ui-tab:first-child').addClass('active');
								}
								var activeTab = tabs.find('.ui-tab.active');
								var activeTabContent = activeTab.find('.ui-tab-link').attr('data-tab');
								$('.ui-tab-content[data-tab="'+activeTabContent+'"]').show();

								tabs.find('.ui-tab-link').on('click',function() {
									var link = $(this);
									if (!link.closest('.ui-tab').hasClass('active')) {
										var tabId = link.attr('data-tab');

										link.closest('.ui-tabs').find('.ui-tab').removeClass('active');
										link.closest('.ui-tab').addClass('active');

										$('.ui-tab-content[data-tab="'+tabId+'"]').closest('.ui-tab-container').find('.ui-tab-content').removeClass('active');
										$('.ui-tab-content[data-tab="'+tabId+'"]').addClass('active');
									}
								});

								tabs.data('init',true);
							}
						</code>
					</pre>
					<h3 id="js-accordion">
						<a href="#js-accordion">Accordion</a>
					</h3>
					<pre class="language-js">
						<code class="language-js">
							/*! Аккордионы */
							function accordionInit(acc) {
								var items = acc.find('.ui-accordion-item'),
									triggers = acc.find('.ui-accordion-trigger'),
									panels = acc.find('.ui-accordion-panel'),
									initialized = false,
									collapsable = true,
									connected = false,
									itemF;

								// если запрещено закрывать все пункты
								if (acc.hasClass('not-collapsable')) {
									collapsable = false;
								}

								// если есть связанные блоки
								if (acc.attr('data-acc')) {
									connected = true;
								}

								// раскрываем изначальный активный пункт
								if (!acc.hasClass('collapsed')) {
									if (!acc.find('.ui-accordion-item.active').length || acc.find('.ui-accordion-item.active').length > 1) {
										itemF = items.first();
									} else {
										itemF = acc.find('.ui-accordion-item.active');
									}

									itemAction(itemF, 'open');
								}

								// открытие/закрытие пункта
								function itemAction(item, action) {
									var slideSpeed = animDuration;

									if (!initialized) {
										slideSpeed = 0;
									}

									if (action == 'open') {
										if (initialized) {
											panels.hide();
											var itemPos = item.offset().top - scrollOffset - 30;
											acc.find('.ui-accordion-item.active').find('.ui-accordion-panel').show();
											setTimeout(function() {
												$('html, body').animate({scrollTop:itemPos},animDuration);
											},30);
										}

										setTimeout(function() {
											items.removeClass('active');
											item.addClass('active');

											panels.slideUp(slideSpeed);
											item.find('.ui-accordion-panel').slideDown(slideSpeed);
										},30);

										if (connected) {
											var accID = acc.attr('data-acc'),
												itemID = item.attr('data-acc-item'),
												accCon = $('[data-acc-con="'+accID+'"]'),
												accConItems = accCon.find('[data-acc-con-item]');

											accConItems.removeClass('active');
											accCon.find('[data-acc-con-item="'+itemID+'"]').addClass('active');
										}
									} else {
										item.removeClass('active');
										panels.slideUp(slideSpeed);
									}

									if (!initialized) {
										initialized = true;
									}
								}

								// при клике на триггер
								triggers.on('click',function() {
									var item = $(this).closest('.ui-accordion-item');

									if (!item.hasClass('active')) {
										itemAction(item, 'open');
									} else {
										if (collapsable) {
											itemAction(item, 'close');
										}
									}
								});

								acc.data('init',true);
							}
						</code>
					</pre>
					<h3 id="js-sendform">
						<a href="#js-sendform">Send form</a>
					</h3>
					<pre class="language-js">
						<code class="language-js">
							/*! Отправка данных из формы */
							function formInit(form) {
								// добавляем текст ошибок для полей
								form.find('.ui-form-field--required').each(function() {
									$(this).append('<div class="ui-form-errors"><p class="ui-form-errors__item ui-form-errors__item--required">Обязательное поле</p></div>');
								});

								// добавляем * для всех обязательных полей
								form.find('.ui-form-field--required').each(function() {
									$(this).find('.ui-input-placeholder').append(' *');
								});

								// проверяем заполнение
								form.on('submit',function(e) {
									e.preventDefault();

									var formType = form.attr('data-form-type'),
										valid = formValidator(form.get(0));

									// если прошли проверку
									if (valid) {
										var formData = new FormData(form.get(0)),
											thxPopup = form.attr('data-thxpopup') || 'thx';
										if (!formTitle || formTitle == '') {
											formTitle = 'Заявка';
										}
										formData.append('formTitle', formTitle);
										formData.append('formType', formType);
										$.ajax({
											type: 'POST',
											url: rootPath+'php/send.php',
											dataType: 'json',
											processData: false,
											contentType: false,
											data: formData,
											success: function() {
												thx(thxPopup);
												clearForm(form);
											},
											error: function(data) {
												console.log(data);
											}
										});
									}
									// если не прошли
									else {
										form.find('.ui-form-field--error').first().find('input, textarea').focus();
									}
								});

								form.data('init',true);
							}
						</code>
					</pre>
					<h3 id="js-clearform">
						<a href="#js-sendform">Очистка формы</a>
					</h3>
					<pre class="language-js">
						<code class="language-js">
							/*! Очистка формы */
							function clearForm(form) {
								form.find('.ui-form-field--error').removeClass('.ui-form-field--error');

								form.find('.ui-form-field').find('input, textarea').val('').trigger('change');
							}
						</code>
					</pre>
					<h3 id="js-popups">
						<a href="#js-popups">Попапы</a>
					</h3>
					<p>
						popups
					</p>
					<pre class="language-js">
						<code class="language-js">
							/*! Попапы */
								/*! Открытие попапа */
								function popup(id, form, h1, h2, btn) {
									if ($('#'+id).length) {
										popupOpenedPos = $(window).scrollTop();

										$('.popups-overlay').addClass('active');

										$('body').addClass('body--popup-opened');
										scrollLock(scrollFixedEl);

										$('.popup').removeClass('active');
										var popup = $('.popup#'+id);

										if (id == 'request') {
											var defH1 = 'Оставить заявку',
												defH2 = 'Оставьте заявку, и&nbsp;наш специалист свяжется с&nbsp;вами в&nbsp;ближайшее время',
												defBtn = 'Оставить заявку';

											if (h1) {
												popup.find('.popup-title__head').html(h1);
											} else {
												popup.find('.popup-title__head').html(defH1);
											}

											if (h2) {
												popup.find('.popup-title__subtitle').html(h2);
											} else {
												popup.find('.popup-title__subtitle').html(defH2);
											}

											if (btn) {
												popup.find('.ui-btn--sendform').html(btn);
											} else {
												popup.find('.ui-btn--sendform').html(defBtn);
											}

											if (form) {
												formTitle = form;
											}
										}

										popup.scrollTop(0).addClass('active');
										popupOpened = true;
									}
								}

								/*! Открытие попапа с видео */
								function videoPopup(id, videoUrl) {
									if ($('#'+id).length) {
										popupOpenedPos = $(window).scrollTop();

										$('.popups-overlay').addClass('active');

										$('body').addClass('body--popup-opened');
										scrollLock(scrollFixedEl);

										$('.popup').removeClass('active');
										var popup = $('.popup#'+id);
										popup.find('.popup-video').html('&lt;iframe src="'+videoUrl+'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>&lt;/iframe>');
										popup.scrollTop(0).addClass('active');
										popupOpened = true;
									}
								}
								
								/*! Закрытие попапов */
								function popupClose() {
									$('.popups-overlay').removeClass('active');
									$('.popup').removeClass('active');

									$('body').removeClass('body--popup-opened');

									setTimeout(function() {
										scrollLock(scrollFixedEl,'unlock');
									},animDuration);

									if (device.ios()) {
										$(window).scrollTop(popupOpenedPos);
									}
									$('.popup-video').html('');

									$('.popup .send-form').each(function() {
										clearForm($(this));
									});

									popupOpened = false;
								}

								/*! Попап "Спасибо за заявку" */
								function thx(thx) {
									$('.popup').removeClass('active');
									if (!thx) {
										thx = 'thx';
									}
									popup(thx);

									$('.popup .send-form').each(function() {
										clearForm($(this));
									});

								}
						</code>
					</pre>
					<p>
						init
					</p>
					<pre class="language-js">
						<code class="language-js">
							/*! Попапы */
							function popupsInit(popup) {
								popup.find('.popup-close-container')
									.prepend('&lt;div class="cross-btn popup-close noselect" />');

								popup.data('init',true);
							}
						</code>
					</pre>
					<p>
						triggers
					</p>
					<pre class="language-js">
						<code class="language-js">
							// Открытие попапа
							$(document).on('click','[data-popup-open]',function() {
								popup($(this).attr('data-popup-open'));
							});

							// Закрытие попапа при клике на крестик
							$(document).on('click','.popup-close',function() {
								popupClose();
							});

							// Закрытие попапа при клике на фон
							$(document).on('click','.popup',function(e) {
								if (!$(e.target).closest('.popup-content').length) {
									popupClose();
									e.stopPropagation();
								}
							});

							// Закрытие попапа по нажатию на Esc
							$(document).on('keypress',function(e) {
								if (popupOpened) {
									if (e.which == 27) {
										popupClose();
									}
								}
							});
						</code>
					</pre>
					<p>
						html
					</p>
					<pre class="language-html">
						<code class="language-html">
							&lt;div class="popup popup--request" id="callback">
								&lt;div class="popup-wrapper">
									&lt;div class="popup-content popup-close-container popup-content--request">
										&lt;div class="popup-inner">
											&lt;div class="popup-title">
												&lt;div class="popup-title__head">
													Заказать звонок
												&lt;/div>
												&lt;div class="popup-title__subtitle">
													Оставьте заявку, и&nbsp;наш специалист свяжется с&nbsp;вами в&nbsp;ближайшее время
												&lt;/div>
											&lt;/div>
											&lt;div class="popup-form">
												&lt;form class="form send-form" data-form-type="callback" data-thxpopup="thx">
													&lt;div class="ui-form-field ui-form-field--required" data-field-type="text">
														&lt;label class="ui-input">
															&lt;span class="ui-input-placeholder">Ваше имя&lt;/span>
															&lt;input type="text" name="name" />
														&lt;/label>
													&lt;/div>
													&lt;div class="ui-form-field ui-form-field--required" data-field-type="phone">
														&lt;label class="ui-input">
															&lt;span class="ui-input-placeholder">Ваш телефон&lt;/span>
															&lt;input type="number" name="phone" />
														&lt;/label>
													&lt;/div>
													&lt;div class="ui-form-field ui-form-field--btn">
														&lt;button class="ui-btn ui-btn--1">
															Заказать звонок
														&lt;/button>
													&lt;/div>
												&lt;/form>
											&lt;/div>
										&lt;/div>
									&lt;/div>
								&lt;/div>
							&lt;/div>
						</code>
					</pre>
					<h3 id="js-collapse">
						<a href="#js-swiper">Collapse</a>
					</h3>
					<pre class="language-js">
						<code class="language-js">
							/*! Разворачивание блоков */
							function collapseInit(coll) {
								var collPrefix = 'ui-collapse',
									hidd = coll.find('.'+collPrefix+'-hidden'),
									trig = coll.find('.'+collPrefix+'-trigger'),
									trigText = trig.find('.'+collPrefix+'-trigger-text'),
									closedText = trig.attr('data-closed-text'),
									openedText = trig.attr('data-opened-text');

								trigText.text(closedText);

								trig.on('click',function() {
									if (!coll.hasClass('active')) {
										coll.addClass('active');
										hidd.slideDown(400);
										trigText.text(openedText);
									} else {
										//var collPos = coll.offset().top - scrollOffset - 30;
										//$('html, body').animate({scrollTop:collPos},500);
										coll.removeClass('active');
										hidd.slideUp(400);
										trigText.text(closedText);
									}
								});
							}
						</code>
					</pre>
					<h3 id="js-init">
						<a href="#js-init">INIT()</a>
					</h3>
					<pre class="language-js">
						<code class="language-js">
							/*! Инициализация */
							function init() {
								// lazy-загрузка изображений
								imgInit();

								// Табы
								$('.ui-tabs').each(function() {
									if ($(this).data('init') !== true) {
										tabsInit($(this));
									}
								});

								// Аккордионы
								$('.ui-accordion').each(function() {
									if ($(this).data('init') !== true) {
										accordionInit($(this));
									}
								});

								// Попапы
								$('.popup').each(function() {
									if ($(this).data('init') !== true) {
										popupsInit($(this));
									}
								});

								// Инпуты
								$('.ui-input').each(function() {
									if ($(this).data('init') !== true) {
										inputInit($(this));
									}
								});

								// Формы
								$('.send-form').each(function() {
									if ($(this).data('init') !== true) {
										formInit($(this));
									}
								});

								// Разворачивание блоков
								$('.ui-collapse').each(function() {
									if ($(this).data('init') !== true) {
										collapseInit($(this));
									}
								});
							}
						</code>
					</pre>
					<h3 id="js-scrollbarwidth">
						<a href="#js-scrollbarwidth">scrollbarWidth</a>
					</h3>
					<pre class="language-js">
						<code class="language-js">
							// Определенение ширины скроллбара браузера
							var scrollBarWidth = 0;
							function scrollbarWidth() { 
								var div = $('&lt;div style="width:50px;height:50px;overflow:hidden;position:absolute;top:-200px;left:-200px;">&lt;div style="height:100px;">&lt;/div>');
								$('body').append(div);
								var w1 = $('div', div).innerWidth();
								div.css('overflow-y', 'scroll');
								var w2 = $('div', div).innerWidth();
								$(div).remove();
								return (w1 - w2);
							}
							function defineBarWidth() {
								var bodyHeight = parseInt($('.page').height());

								if (bodyHeight > winHeight) {
									scrollBarWidth = scrollbarWidth();
								} else {
									scrollBarWidth = 0;
								}
							}
						</code>
					</pre>
					<h3 id="js-scrolllock">
						<a href="#js-scrolllock">scrollLock</a>
					</h3>
					<pre class="language-js">
						<code class="language-js">
							// Блокировка прокрутки
							function scrollLock(el,type) {
								if (type == 'unlock') {
									$('body').removeClass('body--fixed');
									el.css({
										'padding-right':''
									});
								} else {
									$('body').addClass('body--fixed');
									el.css({
										'padding-right':scrollBarWidth
									});
								}
							}
						</code>
					</pre>
					<h3 id="js-waypoints">
						<a href="#js-waypoints">Scroll Waypoints</a>
					</h3>
					<p>
						plugin
					</p>
					<pre class="language-js">
						<code class="language-js">
							/*! jQuery Simple Waypoint 1.0.0 by github.com/thecheg/ */
							(function($){
								jQuery.fn.simpleWaypoint = function(options) {
									options = $.extend({
										position: 0,
										onDown: function() {},
										onUp: function() {}
									}, options);

									var element = $(this),
										position = 0;

									if (typeof options.position == 'function') {
										position = options.position.call(this);
									} else {
										position = options.position;
									}

									$(window).on('resize',function() {
										if (typeof options.position == 'function') {
											position = options.position.call(this);
										} else {
											position = options.position;
										}
									});

									var activate = function(){
										$(window).on('scroll',function() {
											if ($(window).scrollTop() > position) {
												if (typeof options.onDown == 'function') {
													options.onDown.call(this);
												}
											} else {
												if (typeof options.onUp == 'function') {
													options.onUp.call(this);
												}
											}
										});
									}
									return this.each(activate);
								};
							})(jQuery);
						</code>
					</pre>
					<p>
						init
					</p>
					<pre class="language-js">
						<code class="language-js">
							$('body').simpleWaypoint({
								position: 1,
								onDown: function() {
									$('body').addClass('body--scrolled');
								},
								onUp: function() {
									$('body').removeClass('body--scrolled');
								}
							});
						</code>
					</pre>
					<h3 id="js-animate">
						<a href="#js-animate">Scroll Animate</a>
					</h3>
					<pre class="language-js">
						<code class="language-js">
						// Анимация при скролле
						$('.scroll-animate').each(function () {
							var block = $(this);
							$(window).on('scroll',function() {
								if (pageLoaded) {
									var top = block.offset().top;
									var bottom = block.height()+top;
									top = top - $(window).height();
									var scroll_top = $(this).scrollTop() - (winHeight * 0.33);
									setTimeout(function(){
										if ((scroll_top > top) && (scroll_top < bottom)) {
											if (!block.hasClass('animate-in')) {
												block.addClass('animate-in');
												block.trigger('animateIn');
											}
										}
									}, 300);
								}
							});
						});
						</code>
					</pre>
					<h3 id="js-ytvideo">
						<a href="#js-swiper">YouTube video play</a>
					</h3>
					<pre class="language-js">
						<code class="language-js">
							// Воспроизведение видео
							$(document).on('click', '.video-play', function() {
								var video = $(this).closest('.video'),
									videoFr = video.find('.video-frame'),
									videoUrl = video.attr('data-video');

								if (videoUrl && videoUrl !== '') {
									videoFr.html('&lt;iframe src="'+videoUrl+'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>&lt;/iframe>');
									video.addClass('playing');
								}
							});
						</code>
					</pre>
					<h3 id="js-formvalidator">
						<a href="#js-formvalidator">formValidator</a>
					</h3>
					<pre class="language-js">
						<code class="language-js">
							// Валидатор формы
							function formValidator(form) {
								var $form = $(form),
									errorClass = 'ui-form-field--error',
									errorText = '',
									valid = true;

								if ($form.find('.ui-form-field--required').length) {
									$form.find('.ui-form-field--required').each(function() {
										var field = $(this),
											fieldType = field.attr('data-field-type'),
											fieldVal;

										if (field.find('input').length) {
											fieldVal = field.find('input').val();
										} else {
											fieldVal = field.find('textarea').val();
										}

										field.find('.form-errors__item--type').remove();
										if (!fieldVal) {
											field.addClass(errorClass);
											field.find('.ui-form-errors__item--type').remove();
											field.find('.ui-form-errors__item--required').show();
											valid = false;
										} else {
											field.removeClass(errorClass);
											field.find('.ui-form-errors__item--required').hide();

											if (fieldType == 'email') {
												errorText = 'Неверный формат e-mail';
												if(!/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/.test(fieldVal)) {
													field.find('.ui-form-errors').append('&lt;p class="ui-form-errors__item--type">'+errorText+'&lt;/p>');
													field.addClass(errorClass);
													valid = false;
												} else {
													field.find('.ui-form-errors_item--type').remove();
													field.removeClass(errorClass);
												}
											}

											if (fieldType == 'phone') {
												errorText = 'Неверный формат телефона';
												if(/[^0-9\+ ()\-]/.test(fieldVal)) {
													$(this).find('.ui-form-errors').append('&lt;p class="ui-form-errors__item--type">'+errorText+'&lt;/p>');
													field.addClass(errorClass);
													valid = false;
												} else {
													field.find('.ui-form-errors__item--type').remove();
													field.removeClass(errorClass);
												}
											}
										}
									});
								}

								return valid;
							}
						</code>
					</pre>
					<h2 id="js-plugins">
						<a href="#js-plugins">Plugins</a>
					</h2>
					<h3 id="js-jquery">
						<a href="#js-jquery">jQuery</a>
					</h3>
					<p>
						<a href="https://jquery.com/download/" target="_blank">jQuery @last</a>
					</p>
					<h3 id="js-swiper">
						<a href="#js-swiper">Swiper</a>
					</h3>
					<p>
						links
					</p>
					<p>
						<a href="https://unpkg.com/swiper/" target="_blank">Swiper @last</a>
					</p>
					<p>
						init
					</p>
					<pre class="language-js">
						<code class="language-js">
							// Слайдер
							$('.projects-block').each(function() {
								var block = $(this),
									slider = block.find('.projects-slider');

								var sliderS = new Swiper(slider, {
									slidesPerView: 'auto',
									loop: false,
									speed: 500,
									spaceBetween: 20,
									grabCursor: true,
									init: true,
									freeMode: false,
									mousewheel: false,
									navigation: {
										nextEl: block.find('.slider-nav-item--next'),
										prevEl: block.find('.slider-nav-item--prev'),
									},
									pagination: {
										el: block.find('.slider-pages'),
										clickable: true,
										renderBullet: function(index, className) {
										return '&lt;div class="slider-page ' + className + '">&lt;/div>';
											}
									},
									breakpoints: {
										1: {
											spaceBetween: 16,
											slidesPerView: 'auto'
										},
										801: {
											slidesPerView: 3,
											spaceBetween: 24,
										},
										1001: {
											slidesPerView: 3,
											spaceBetween: 30
										}
									}
								});
							});
						</code>
					</pre>
					<h3 id="js-swiper-parallax">
						<a href="#js-swiper-parallax">Swiper Parallax</a>
					</h3>
					<p>
					<pre class="language-js">
						<code class="language-js">
							// Настройки слайдеров
							var interleaveOffset = 0.5,
								parOpts = {
									slidesPerView: 1,
									loop: true,
									speed: 1000,
									spaceBetween: 0,
									grabCursor: true,
									init: true,
									freeMode: false,
									loopAdditionalSlides: 10,
									mousewheel: false
								},
								parOptsOn = {
									progress: function() {
										var swiper = this;
										for (var i = 0; i < swiper.slides.length; i++) {
											var slideProgress = swiper.slides[i].progress,
												innerOffset = swiper.width * interleaveOffset,
												innerTranslate = slideProgress * innerOffset;

											swiper.slides[i].querySelector('.slide-bg').style.transform = 'translateX(' + innerTranslate + 'px)';
										}
									},
									touchStart: function() {
										var swiper = this;
										for (var i = 0; i < swiper.slides.length; i++) {
											swiper.slides[i].style.transition = "";
										}
									},
									setTransition: function(speed) {
										var swiper = this;
										for (var i = 0; i < swiper.slides.length; i++) {
											swiper.slides[i].style.transition = speed + 'ms';
											swiper.slides[i].querySelector('.slide-bg').style.transition = speed + 'ms, opacity .5s';
										}
									}
								};

							// Слайдер в первом экране
							$('.intro').each(function() {
								var block = $(this),
									slider = block.find('.intro-slider'),
									opts = JSON.parse(JSON.stringify(parOpts));

								opts.navigation = {
									nextEl: block.find('.slider-nav-item--next'),
									prevEl: block.find('.slider-nav-item--prev')
								};

								opts.on = parOptsOn;

								var sliderS = new Swiper(slider, opts);
							});
						</code>
					</pre>
					<h3 id="js-fancybox">
						<a href="#js-fancybox">Fancybox</a>
					</h3>
					<p>
						links
					</p>
					<p>
						<a href="https://cdnjs.com/libraries/fancybox" target="_blank">Fancybox @last</a>
					</p>
					<p>
						init
					</p>
					<pre class="language-js">
						<code class="language-js">
							// Галереи
							$('[data-fancybox]').fancybox({
								loop: true,
								beforeShow: function() {
									scrollFixedEl.css('padding-right',scrollBarWidth);
								}, 
								afterClose: function() {
									scrollFixedEl.css('padding-right','');
								}
							});
						</code>
					</pre>
					<h3 id="js-formstyler">
						<a href="#js-formstyler">Form styler</a>
					</h3>
					<p>
						links
					</p>
					<p>
						<a href="https://dimox.name/jquery-form-styler/" target="_blank">Form styler @last</a>
					</p>
				</div>
			</div>
		</div>
	</div>
<?php include $rootPath.'template/foot.php';?>
</body>
</html>