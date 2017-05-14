jQuery(document).ready(function($) {
	$('.button-search').click(function(){
		$('.search').slideToggle(250);
	});

	$('.nav li.parent').hover(function(){
		if ($(this).find('ul').length) {
			$('.nav').addClass('active');
		}
	},function(){
		if ($(this).find('ul').length) {
			$('.nav').removeClass('active');
		}
	});

	$(".hit__slider .owl-carousel").owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		smartSpeed: 500,
		items:1
	});

	$(".series__left .owl-carousel").owlCarousel({
		loop:false,
		margin:0,
		nav:true,
		smartSpeed: 500,
		items:3,
		vertical:true
	});

	$(".series__right .owl-carousel").owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		smartSpeed: 500,
		items:1
	});

	$('.video__more').click(function(){
		$('.video').removeClass('active');
		$('.hit').addClass('active');
		return false;
	});

	$('.hit__more').click(function(){
		$('.hit').removeClass('active');
		$('.video').addClass('active');
		return false;
	});

	$('.series__mini').click(function(){
		$('.series__mini').removeClass('active');
		$(this).addClass('active');
		$('.series__slider').removeClass('active');
		$('.series__slider').eq($(this).data('eq')).addClass('active');
	});

	$(".deals .owl-carousel").owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		smartSpeed: 500,
		items:1
	});

	$(".service__managers .owl-carousel").owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		smartSpeed: 500,
		items:1
	});

	$("#range-slider").ionRangeSlider({
		min: 0,
		max: 5000,
		from: 1000,
		hide_min_max: true,
		prefix: 'до ',
		postfix: ' руб.'
	});

	$('.good__gallery a').magnificPopup({
		gallery: {
			enabled: true
		},
		fixedContentPos: true,
		tClose: 'Закрыть',
		callbacks: {
			elementParse: function(item) {
				if(item.el.context.className == 'good__video') {
					item.type = 'iframe';
				} else {
					item.type = 'image';
				}
			}
		}
	});

	$('.scrollbar-inner').scrollbar();

	$('.count__input').change(function() {
		var v = parseInt(+$(this).val(), 10);

		if (v < 0 || isNaN(v)) {
			$(this).val(0);
		} else {
			$(this).val(v);
		}
	});

	$('.minus').click(function(){
		var v = +$(this).parent().siblings('input').val();

		if (v > 0) {
			$(this).parent().siblings('input').val(v-1);
		}

		v = +$(this).parent().siblings('input').val()

		if( v < 1 ) {
			$(this).parent().siblings('input').removeClass('active');
		}
	});

	$('.plus').click(function(){
		var v = +$(this).parent().siblings('input').val();

		$(this).parent().siblings('input').val(v+1);

		v = +$(this).parent().siblings('input').val()

		if( v > 0 ) {
			$(this).parent().siblings('input').addClass('active');
		}
	});

	$('.open-popup').magnificPopup({
		type:'inline',
		fixedContentPos: true,
		tClose: 'Закрыть'
	});

	$('.filter-view a').click(function(){
		//$('.filter').toggleClass('active');
		$(this).toggleClass('active');
		$('.filter__block').slideToggle(250);
		return false;
	});

/*	$('.categories__item').hover(function(){
		$('.categories').addClass('active');
	},function(){
		$('.categories').removeClass('active');
	});*/

	/*
	 *
	 * SLOW SCROLL
	 *
	*/
	/*$('.nav a[href^="#"]').click(function(){
		if(document.getElementById($(this).attr('href').substr(1)) != null) {
			$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top - 218}, 500);
		}
		return false;
	});*/

	/*
	 *
	 * OPEN POPUP
	 *
	*/
	/*$('.open-popup-link').magnificPopup({
		type:'inline',
		fixedContentPos: true,
		tClose: 'Закрыть'
	});*/

	/*
	 *
	 * IMAGE GALLERY
	 *
	*/
	/*$('.works-items a').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		},
		fixedContentPos: true,
		tClose: 'Закрыть'
	});*/

	/*
	 *
	 * CAROUSEL SLIDER
	 *
	*/
	/*$(".owl-carousel").owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		smartSpeed: 500,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:3
			}
		}
	});*/

	/*
	 *
	 * PHONE MASK
	 *
	*/
	/*$('input[name="phone"]').mask("+7(999) 999-9999");*/

	/*
	 *
	 * FORM VALIDATION AND AJAX
	 *
	*/
	/*jQuery.validator.addMethod("ruschars", function(value, element) {
		return /[а-яА-ЯёЁ]+/.test(value);
	}, "Поле должно содержать только русские символы.");

	$.validator.addMethod("notDefaultText", function (value, element) {
		if (value == $(element).attr('placeholder')) {
			return false;
		} else {
			return true;
		}
	});

	var valid = {
		rules: {
			name: {
				required: true,
				minlength: 2,
				ruschars: true,
				notDefaultText: true
			},
			phone: {
				required: true,
				minlength: 16,
				maxlength: 16,
				notDefaultText: true
			}
		},
		errorElement: 'div',
		submitHandler: function(form) {
				$.post(
					"mail.php",
					{
						'Заголовок': $(form).find('input[name="title"]').val(),
						'Имя': $(form).find('input[name="name"]').val(),
						'Телефон': $(form).find('input[name="phone"]').val(),
						'Источник перехода': $(form).find('input[name="utm_source"]').val(),
						'Тип трафика': $(form).find('input[name="utm_medium"]').val(),
						'Название рекламной кампании': $(form).find('input[name="utm_campaign"]').val(),
						'Дополнительная информация': $(form).find('input[name="utm_content"]').val(),
						'Ключевая фраза': $(form).find('input[name="utm_term"]').val()
					}
				);

				$('input[type="text"], textarea').val('');

				$.magnificPopup.open({
					items: {
						src: '#modal-thanks',
						type: 'inline',
					}
				});
		},
		errorPlacement: function(error, element) {
			element.addClass('error');
		},
		success: function(label, element) {}
	};

	$("form").each(function (i) {
		$(this).validate(valid);
	});*/
});