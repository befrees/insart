$(document).ready(function() {

    $(document).on("scroll", function(){

    });

    $('.heading-line').on('click', function(e) {
        e.preventDefault();
        var btn = $(this),
            target = btn.data('target');
        $('.row-team').not('.row-team' + target).removeClass('open').find('.container').slideUp(100, function(){
            var pos = $(target).offset().top;
         $('html, body').animate({ scrollTop: pos }, 100);

        });
        $('.row-team' + target).toggleClass('open').find('.container').slideToggle(300);
        
    })

    $('.go-down').on('click', function(e) {
        e.preventDefault();
        var scr = $('#middle').offset().top;
        $('html, body').animate({ scrollTop: scr }, 1000);
    });

    try {
        $('.scrollbar-inner').scrollbar();
        $('select').styler();
    } catch (e) {
        console.log(e);
    }
    /**
     * Menu open
     */
    $('.btn-open-menu').on('click', function(e) {
        e.preventDefault();
        $('#site-header').toggleClass('open');
    });
    /**
     * Gallery show more
     */
    $('.btn-gall-more').on('click', function(e) {
        e.preventDefault();
        var items = $('.gallery-list ._item-gall:hidden');
        for (i = 0; i < 6; i++) {
            $(items[i]).show();
        }
        if (!$('.gallery-list ._item-gall:hidden').length) $(this).hide();
    });

    $('.close-btn').on('click', function(e) {
        e.preventDefault();
        $('.vacancy-item').hide();
        $('.hiring-block').fadeIn(200);
        $('.vacancy-items-popup, .popup').fadeOut(200);
    });
    /**
     * Show vacancy
     */
    $('.open-vacancy').on('click', function(e) {
        e.preventDefault();
        var idShow = $(this).attr('href');
        var block = $('.hiring-container');
        var topPos = block.offset().top;
        $('html, body').animate({scrollTop: topPos})
        console.log(idShow);
        $('.vacancy-item').hide();
        $('.hiring-block, .vacancy-form-popup').fadeOut(200);
        $('.vacancy-items-popup').fadeIn(200);
        $('.vacancy-item' + idShow).fadeIn(200);
    });

    /**
     * Show form vacancy
     */
    try {
        var selectVacancy = 'select.vacancy-select';
        $(selectVacancy).attr('data-placeholder', 'Choose a vacancy').html("<option></option>"); //.html('<option value="">Choose a vacancy</option>');
        if (!!hirings) {
            for (i = 0; i < hirings.length; i++) {
                $(selectVacancy).append('<option value="' + hirings[i] + '">' + hirings[i] + '</option>');
            }
        }
        $('.btn-open-form-vac').on('click', function(e) {
            e.preventDefault();
            var btn = this;
            var vac = $(btn).data('vacancy');
            if (!!vac) {
                $(selectVacancy).find('option[value="' + vac + '"]').prop('selected', true).trigger('change');
            }
            $('.vacancy-items-popup, .vacancy-item').fadeOut(200);
            $('.vacancy-form-popup').fadeIn(200);
            $(selectVacancy).trigger('refresh');
        });
        $(selectVacancy).trigger('refresh');
    } catch (e) {}

    try {
        $('.events-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 4,
            // arrows: true,
            appendArrows: '.events-list',
            infinite: false,
            dots: true,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    } catch (e) {
        console.log(e);
    }
    try {
        $('.slider-clients').slick({
            arrows: true,
            dots: true,
            appendArrows: '.arrows-container',
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: false
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    } catch (e) {}
    try {
        $('.testimonials-slider').slick({
            slidesToShow: 2,
            slidesToScroll: 2,
            appendArrows: '.block-testimonials-container',
            dots: true,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    } catch (e) {}
    try {
        $('.slider-insights').slick({
            slidesToShow: 3,
            appendArrows: '.insights-container',
            slidesToScroll: 3,
            infinite: false,
            arrows: true,
            dots: true,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    } catch (e) {}
    try {
        $('.club_slider').slick({
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
            arrows: false,
            dots: true,
            draggable: false,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                }
            ]
        })
    } catch(e){}
    try {
        $('.case-slider').slick({
            dots: true,
            appendArrows: '#slides-case'
        });
    } catch (e) {}

    /**
     * Hover cheme
     */
    var yellow = '#e06727';
    var grey = '#4b4b4b';
    var grey1 = '#d9d9d9';
    $('.map-jl').on('click', function(e) {
        return false;
    }).hover(
        function(e) {
            var l = +$(this).data('layer');
            switch (l) {
                case 1:
                    addYellow('#l-9', '#l-1');
                    labelHoverIn('.layer-lbl-1');
                    break;
                case 2:
                    addYellow('#l-10', '#l-2');
                    labelHoverIn('.layer-lbl-2');
                    break;
                case 3:
                    addYellow('#l-11', '#l-3');
                    labelHoverIn('.layer-lbl-3');
                    break;
                case 4:
                    addYellow('#l-12', '#l-4');
                    labelHoverIn('.layer-lbl-4');
                    break;
                case 5:
                    addYellow('#l-13', '#l-5');
                    labelHoverIn('.layer-lbl-5');
                    break;
                case 6:
                    addYellow('#l-14', '#l-6');
                    labelHoverIn('.layer-lbl-6');
                    break;
                case 7:
                    addYellow('#l-15', '#l-7');
                    labelHoverIn('.layer-lbl-7');
                    break;
                case 8:
                    addYellow('#l-16', '#l-8');
                    labelHoverIn('.layer-lbl-8');
                    break;
            }
        },
        function(e) {
            var l = $(this).data('layer');
            switch (l) {
                case 1:
                    removeYellow('#l-9', '#l-1');
                    labelHoverOut('.layer-lbl-1');
                    break;
                case 2:
                    removeYellow('#l-10', '#l-2');
                    labelHoverOut('.layer-lbl-2');
                    break;
                case 3:
                    removeYellow('#l-11', '#l-3');
                    labelHoverOut('.layer-lbl-3');
                    break;
                case 4:
                    removeYellow('#l-12', '#l-4');
                    labelHoverOut('.layer-lbl-4');
                    break;
                case 5:
                    removeYellow('#l-13', '#l-5');
                    labelHoverOut('.layer-lbl-5');
                    break;
                case 6:
                    removeYellow('#l-14', '#l-6');
                    labelHoverOut('.layer-lbl-6');
                    break;
                case 7:
                    removeYellow('#l-15', '#l-7');
                    labelHoverOut('.layer-lbl-7');
                    break;
                case 8:
                    removeYellow('#l-16', '#l-8');
                    labelHoverOut('.layer-lbl-8');
                    break;
            }
        });
    $('g[id*=l-]').hover(
        function(e) {
            e.preventDefault();
            var id = this.id;
            switch (id) {
                case 'l-1':
                    console.log('in');
                    addYellow('#l-9', '#l-1');
                    labelHoverIn('.layer-lbl-1');
                    break;
            }
        },
        function(e) {
            e.preventDefault();
            var id = this.id;
            switch (id) {
                case 'l-1':
                    console.log('out');
                    removeYellow('#l-9', '#l-1');
                    labelHoverOut('.layer-lbl-1');
                    break;
            }
        });
    $('.layer-lbl').hover(
        function(e) {
            var l = +$(this).data('layer');
            switch (l) {
                case 1:
                    addYellow('#l-9', '#l-1');
                    break;
                case 2:
                    addYellow('#l-10', '#l-2');
                    break;
                case 3:
                    addYellow('#l-11', '#l-3');
                    break;
                case 4:
                    addYellow('#l-12', '#l-4');
                    break;
                case 5:
                    addYellow('#l-13', '#l-5');
                    break;
                case 6:
                    addYellow('#l-14', '#l-6');
                    break;
                case 7:
                    addYellow('#l-15', '#l-7');
                    break;
                case 8:
                    addYellow('#l-16', '#l-8');
                    break;
            }
        },
        function(e) {
            var l = $(this).data('layer');
            switch (l) {
                case 1:
                    removeYellow('#l-9', '#l-1');
                    break;
                case 2:
                    removeYellow('#l-10', '#l-2');
                    break;
                case 3:
                    removeYellow('#l-11', '#l-3');
                    break;
                case 4:
                    removeYellow('#l-12', '#l-4');
                    break;
                case 5:
                    removeYellow('#l-13', '#l-5');
                    break;
                case 6:
                    removeYellow('#l-14', '#l-6');
                    break;
                case 7:
                    removeYellow('#l-15', '#l-7');
                    break;
                case 8:
                    removeYellow('#l-16', '#l-8');
                    break;
            }
        });

    function addYellow(obj1, obj2) {
        $(obj1 + ', ' + obj2).find('g, rect').addClass('hover').css('fill', yellow);
        $(obj1).css('opacity', '.85');
    }

    function removeYellow(obj1, obj2) {
        $(obj1 + ', ' + obj2).find('g, rect').removeClass('hover').css('fill', grey);
        $(obj1).css({ 'opacity': '.85', 'fill': grey1 }).find('g, rect').css('fill', grey1);
    }

    function labelHoverIn(obj) {
        // $(obj).css('color', yellow);
        $(obj).addClass('hover');
    }

    function labelHoverOut(obj) {
        // $(obj).css('color', grey);
        $(obj).removeClass('hover');
    }
    $('#cc-4 line').css({ 'stroke': yellow });
    $('.svg-cc g').each(function(idx, el) {
        // $(el).attr('class', 'gcc-'+idx);
    });

    $('.tstep, .tstep-area').hover(function(e) {
        var n = $(this).data('stept');
        $('svg#top-work-steps').find('[data-layer="links"] [data-ref="' + n + '"]').attr('class', 'hover');
        $('svg#top-work-steps').find('[data-layer="steps"] [data-name="Step-' + n + '"]').attr('class', 'hover');
        $('.tstep').removeClass('hover');
        $('.tstep[data-stept=' + n + ']').addClass('hover');
    }, function(e) {
        var n = $(this).data('stept');
        $('svg#top-work-steps').find('[data-layer="links"] [data-ref="' + n + '"]').attr('class', '');
        $('svg#top-work-steps').find('[data-layer="steps"] [data-name="Step-' + n + '"]').attr('class', '');
        $('.tstep').removeClass('hover');
    });

    $('.bsteps-area, .tstep-area').on('click', function(e) {
        e.preventDefault();
        return false;
    });
    $('.bsteps-area, .bstep-item').hover(
        function(e) {
            var n = $(this).data('bstep');
            $('#bottom-work-steps').attr('class', 'bstep-' + n);
            $('.caption-bstep-' + n).addClass('hover');
        },
        function(e) {
            $('#bottom-work-steps').attr('class', 'static');
            $('[class*=caption-bstep]').removeClass('hover');
        });
    $('.micro-lbl, .jb-m').hover(
        function(e) {
            var n = $(this).data('step');
            $('.micro-svg').attr('data-show', n);
            $('.micro-lbl').removeClass('hover');
            $('.micro-lbl-' + n).addClass('hover');
        },
        function(e) {
            $('.micro-svg').attr('data-show', '0');
            $('.micro-lbl').removeClass('hover');
        });

    $('.cc-area, .col-cc').hover(
        function(e) {
            var n = $(this).data('cc');
            $('.cc-svg').attr('data-show', n);
            $('.col-cc').removeClass('hover');
            $('.col-cc[data-cc="' + n + '"]').addClass('hover');
        },
        function(e) {
            $('.cc-svg').attr('data-show', '0');
            $('.col-cc').removeClass('hover');
        });

    $(document).on("scroll", onScroll);

    //smoothscroll
    $('.menu-scroll a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        $(document).off("scroll");

        $('.menu-scroll a').each(function() {
            $(this).removeClass('active');
        })
        $(this).addClass('active');

        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top + 2
        }, 500, 'swing', function() {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });

    function animateProc1(){
    	var el = $('.benefis-item-1');
    	if(el.hasClass('active')) return false;
    	var pos = el.offset().top || 0;
    	var scroll = $(document).scrollTop() || $('body').scrollTop();
    	var posEl = pos + el.height() - $(window).height();
    	if(scroll >= posEl){
    		$(el).addClass('active');
    		var proc = +el.data('proc');
			var txt = 0;
			var int1 = setInterval(function(){
				txt +=1;
				el.find('.proc-val').text(txt);
				if(txt == proc) {
					clearInterval(int1);
				}
			}, 80);
    	}
    	  var c4 = el.find('.circle');
		  c4.circleProgress({
		    startAngle: -Math.PI / 4 * 2,
		    // startAngle: -1.5,
		    value: .25,
		    lineCap: 'round',
		    fill: {color: '#ff6600'},
		    emptyFill: '#dadada',
		    size: 172,
		    thickness: 2,
			animation: {
		      duration: 3000,
		      easing: 'linear'
		    }
		  });

		  // Let's emulate dynamic value update
		  // setTimeout(function() { c4.circleProgress('value', 0.7); }, 1000);	
    }

    function animateProc2(){
		var el = $('.benefis-item-2');
		if(el.hasClass('active')) return false;
    	var pos = el.offset().top || 0;
    	var scroll = $(document).scrollTop() || $('body').scrollTop();
    	var posEl = pos + el.height() - $(window).height();
    	if(scroll >= posEl){
    		$(el).addClass('active');
    		var proc = +el.data('proc');
			var txt = 0;
			var int1 = setInterval(function(){
				txt +=1;
				el.find('.proc-val').text(txt);
				if(txt == proc) {
					clearInterval(int1);
				}
			}, 25);
			var c4 = el.find('.circle');
		  c4.circleProgress({
		    startAngle: -Math.PI / 4 * 2,
		    // startAngle: -1.5,
		    value: .75,
		    lineCap: 'round',
		    fill: {color: '#ff6600'},
		    emptyFill: '#dadada',
		    size: 172,
		    thickness: 2,
			animation: {
		      duration: 4000,
		      easing: 'linear'
		    }
		  });
		}
    }

    function animateProc3(){
		var el = $('.benefis-item-3');
    	if(el.hasClass('active')) return false;
    	var pos = el.offset().top || 0;
    	var scroll = $(document).scrollTop() || $('body').scrollTop();
    	var posEl = pos + el.height() - $(window).height();
    	if(scroll >= posEl){
    		$(el).addClass('active');
    		var proc = +el.data('proc');
			var txt = 0;
			var int1 = setInterval(function(){
				txt +=1;
				el.find('.proc-val').text(txt);
				if(txt == proc) {
					clearInterval(int1);
				}
			}, 50);
			var c4 = el.find('.circle');
		  c4.circleProgress({
		    startAngle: -Math.PI / 4 * 2,
		    // startAngle: -1.5,
		    value: .35,
		    lineCap: 'round',
		    fill: {color: '#ff6600'},
		    emptyFill: '#dadada',
		    size: 172,
		    thickness: 2,
			animation: {
		      duration: 3000,
		      easing: 'linear'
		    }
		  });
	    }
	}
    try{
		animateProc1();
		animateProc2();
		animateProc3();
    	} catch(e){}

    $(document).on('scroll', function(e){
    	try{
    		animateProc1();
    		animateProc2();
    		animateProc3();
    	} catch(e){}
    });

///////////////////////////////////////////////

var header = $(".top-line"); // Меню
    var scrollPrev = 0 // Предыдущее значение скролла
    
    $(window).scroll(function() {
        if(!header.hasClass('uk-active')) return false;
        else var stylesHeaer = header.attr('style');
        var scrolled = $(window).scrollTop(); // Высота скролла в px
        var firstScrollUp = false; // Параметр начала сколла вверх
        var firstScrollDown = false; // Параметр начала сколла вниз
        
        // Если скроллим
        if ( scrolled > 0 ) {
            // Если текущее значение скролла > предыдущего, т.е. скроллим вниз
            if ( scrolled > scrollPrev ) {
                firstScrollUp = false; // Обнуляем параметр начала скролла вверх
                // Если меню видно
                if ( scrolled < header.height() + header.offset().top ) {
                    // Если только начали скроллить вниз
                    if ( firstScrollDown === false ) {
                        var topPosition = header.offset().top; // Фиксируем текущую позицию меню
                        header.css({
                            // "top": topPosition + "px"
                            "position": "fixed",
                            "top": "-80px",
                            'left': '0',
                            'right': '0'
                        });
                        firstScrollDown = true;
                    }
                    // Позиционируем меню абсолютно
                    // header.css({
                    //     // "position": "absolute"
                    // });
                // Если меню НЕ видно
                } else {
                    // Позиционируем меню фиксированно вне экрана
                    header.css({
                        "position": "fixed",
                        // "top": "-" + header.height() + "px"
                        'top': '-80px',
                        'left': '0',
                        'right': '0'
                    });
                }
                
            // Если текущее значение скролла < предыдущего, т.е. скроллим вверх
            } else {
                firstScrollDown = false; // Обнуляем параметр начала скролла вниз
                // Если меню не видно
                if ( scrolled > header.offset().top ) {
                    // Если только начали скроллить вверх
                    if ( firstScrollUp === false ) {
                        var topPosition = header.offset().top; // Фиксируем текущую позицию меню
                        header.css({
                            // "top": topPosition + "px"
                            "position": "fixed",
                            "top":  "0px",
                            'left': '0',
                            'right': '0'
                        });
                        firstScrollUp = true;
                    }
                    // Позиционируем меню абсолютно
                    // header.css({
                    //     // "position": "absolute"
                    // });
                } else {
                    // Убираем все стили
                    // header.removeAttr("style");
                }
            }
            // Присваеваем текущее значение скролла предыдущему
            scrollPrev = scrolled;
        }   
    });         

///////////////////////////////////////////////

})


function onScroll(event) {
    var scrollPos = $(document).scrollTop();
    $('.menu-scroll a').each(function(idx, el) {
        var currLink = $(el);
        var refElement = $(currLink.attr("href"));
        if (refElement.offset().top <= scrollPos &&
            refElement.offset().top + refElement.height() > scrollPos) {
            $(el).removeClass("active");
            currLink.addClass("active");
            console.log(currLink.attr("href"), refElement.attr('id'));
        } else {
            currLink.removeClass("active");
        }
    });
}