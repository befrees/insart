document.addEventListener('DOMContentLoaded', function () {
	var btnToggleMenu = $('[data-ui="toggle-menu"]'),
			headerMenuOpenerClass = 'header__menu-open',
			headerMenu = $('.header__menu'),
			container = '.container',
			promo = $('.promo'),
			block = $('[data-block^="block-"]'),
			headerMenuLink =$('.header__menu a'),
			btnToBottom = $('[data-ui="to-bottom"]');

	btnToBottom.on('click', scrollToBottom);

	var content = $('.content'),
			contentOffset = content.offset(),
			contentOffsetTop = contentOffset.top,
			contentOffsetTopH = contentOffsetTop
	
	function scrollToBottom() {
		$('body').animate({scrollTop: contentOffsetTopH}, '700');
	}	

	$(".sidebar__controls #sfbap-form2-email").attr('placeholder', 'Your mail here & Enter');
	$(".footer #sfbap-form2-email").attr('placeholder', 'Your mail here');

	$("#sfbap-form2-email").attr('placeholder', 'Your mail here');

	postBtn = $('.post-btns').find('.btn');

	postBtn.each(function() {
		if($(this).find('a').length == 0) {
			$(this).closest('.post-btns').css('width', '184px');
		}
	})

	btnToggleMenu.on('click', toggleHeaderMenu);

	function toggleHeaderMenu () {
		$(this).closest(container).toggleClass(headerMenuOpenerClass);
	};
/*
	headerMenuLink.on('click', function(event) {
		if($(this).hasClass('click-true')) return true;
		event.preventDefault();

		var btnBlockNumber = $(this).attr('data-number');

		block.each(function(idx, el) {
			var blockNumber = $(this).attr('data-block'); 
			console.log(idx);
			if(btnBlockNumber == blockNumber) {
				promo.hide();
				block.hide().removeClass('block-show');
				$(this).addClass('block-show');
				$(container).removeClass(headerMenuOpenerClass).removeClass('container--has-contact');

				if(btnBlockNumber == 'block-5') {
					$(container).addClass('container--has-contact');

				} else if (btnBlockNumber == 'block-1') {
					promo.show();
				}
			} 
		});
		$(this).closest(container).removeClass(headerMenuOpenerClass);
	});*/

	// Experts toggle
	$('body').on('click', '.open-hidden-block', function(e){
		e.preventDefault();
		var btn = $(this);
		var target = $(btn).data('target');
		$(target).toggleClass('open');
		$(target).slideToggle();
		if($(target).hasClass('open')){
			btn.text(btn.data('open'));
		} else {
			btn.text(btn.data('close'));
		}
	});

	$('body').on('click','._post-load',function(e){
		e.preventDefault();
		var btn = $(this);
		var _count = $('.post-news-item').length;
		var count = _count+3;
		var cat = $(this).data('cat');
		var offset = $(this).data('offset');

		$.get('', {c: cat, offset: _count}, function(d){
			var element = $('.news-home', $.parseHTML(d));
			var news_length = $(element).find('.post-news-item').length;
			var _btn_isset = $(element).next('._post-load').length;
			if(1 <= news_length){
				$('.news-home').append($(element).html());
			} else {
				btn.hide();
			}
			if(!_btn_isset){
				btn.hide();
			}
			// console.log(_btn_isset);
			// console.log(news_length);
			btn.trigger('blur');
		}, 'html');
	});

	/// ajax menu
	$('body').on('click', '.ajax-cat-link', function(e){
		e.preventDefault();
		$('.ajax-cat-link').removeClass('active');
		$(this).addClass('active');
		var pos = $('#main').offset().top - 50;
		$('html, body').animate({scrollTop: pos});
		$(container).removeClass(headerMenuOpenerClass);
		$.get(this.href, '', function(d){
			var m = $('#main', $.parseHTML(d)).html();
			$('#main').html(m);
		},'html');
	});
	
});