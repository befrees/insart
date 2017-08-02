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

	headerMenuLink.on('click', function(event) {
		event.preventDefault();

		var btnBlockNumber = $(this).attr('data-number');

		block.each(function() {
			var blockNumber = $(this).attr('data-block'); 

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
	});
});