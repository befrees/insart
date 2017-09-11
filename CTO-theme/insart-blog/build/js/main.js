


document.addEventListener('DOMContentLoaded', function () {
	$('.header-blue').height($('body').height()-16);
	var longShadow = (function longShadow(element){
	var shadow = [],
	 rgb1 = [18,7,125],
	 rgb2 = [22, 10, 140],
	 l = 120,
	 r1=rgb2[0]-rgb1[0], // разница значений каналов
	 r2=rgb2[1]-rgb1[1],
	 r3=rgb2[2]-rgb1[2],
	 d1 = l/(r1+1), // диапазон шага
	 d2 = l/(r2+1),
	 d3 = l/(r3+1),
	 d0 = [d1, d2, d3],
	 s1 = l/d1, // кол-во шагов
	 s2 = l/d2,
	 s3 = l/d3;
	 console.log(d0);

	var _rgb_ = [rgb1[0], rgb1[1], rgb1[2]];
	for(i=1, _rgb1 = rgb1[0], _rgb2 = rgb1[1], _rgb3=rgb1[2]; i< l; i++){ // перебираем пикселы

		var rgbi = [];
		rgbi[i] = [];
		var fl=[];
		fl[i] = [];

		for(k=0;k<3;k++){  // перебираем 3 канала
			rgbi[i][k] = null;
			fl[i][k] = 0;

			for (var m = 0, mp=0; m <= (l+(d0[k]*2)); m+=d0[k], mp++) {  // перебираем шаги для изменения цвета в канале

				if(i >= m && i <= m+d0[k]) {

					rgbi[i][k] = rgb1[k]+mp;
				}
				}
			
		} // перебираем 3 канала
		
		shadow.push('rgb('+rgbi[i].join(',')+') '+i+'px '+ i +'px');
		delete rgbi;
	} // перебираем 100

	// 22, 10, 140
	shadowText = shadow.join(', ');

	// console.log(shadowText); 
	$('.long-shadow').css('box-shadow', shadowText);

		return longShadow;
	}('.long-shadow'))

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
			console.log(_btn_isset);
			console.log(news_length);
			btn.trigger('blur');
		}, 'html');
	})

	/// ajax menu
	$('body').on('click', '.ajax-cat-link', function(e){
		if(!$('body').hasClass('home')) return true;
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


function in_array(needle, haystack, strict) { // Checks if a value exists in an array
    //

    var found = false,
        key,
        strict = !!strict;

    for (key in haystack) {
        if ((strict && haystack[key] === needle) || (!strict && haystack[key] == needle)) {
            found = true;
            break;
        }
    }

    return found;
}
function array_chunk( input, size ) {	// Split an array into chunks
	// 
	// +   original by: Carlos R. L. Rodrigues

	for(var x, i = 0, c = -1, l = input.length, n = []; i < l; i++){
		(x = i % size) ? n[c][x] = input[i] : n[++c] = [input[i]];
	}

	return n;
}

