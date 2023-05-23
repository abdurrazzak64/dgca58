$(function() {
    
    //pagetop
    $('.pageTop').on('click', function () {

        console.log('pageTop test');
        $('html, body').animate({ scrollTop: 0 }, 400);
        return false;
    });

    // alert('test');
    $(window).on('load resize', function() {
        responsive();
    });

    function responsive() {
        
        var $wh = $(window).width();
        var $gnbMenu = $(".gnb_menu");
        var $depth2 = $(".gnb_list .depth2");
        var $depthList = $('.gnb_list > li ');
        var $depthTtl = $('.gnb_list > li >  a');

        $depthList.unbind('mouseover mouseout'); //�대깽�몃��� �쒓굅�섏옄!
        $depthTtl.off('click'); //�대깽�몃��� �쒓굅�섏옄!

        if ($wh <= 1024) { //1024�댄븯 �쇰븣
           
            $("body").removeClass("web").addClass("mobile");
            var toggle = 0;
            $gnbMenu.on("click", function (e) {
                if ($("body").hasClass("mobile")) {
                    console.log('�꾨쾭嫄� �대┃�덉쓣��');
                    if (toggle == 0) {
                        // $(".dim").show();
                        $(".gnb_menu, #gnb").addClass("on");
                        e.preventDefault();
                        return toggle = 1;
        
                    } else if (toggle == 1) {
                        $(".gnb_menu, #gnb").removeClass("on");
                        // $(".dim").hide();
                        return toggle = 0;
                    }
                }
            });
            $depthTtl.on('click', function (e) {
                if ($(this).hasClass('on')) {
                    $(this).next().slideUp();
                    $(this).removeClass('on');
                } else {
                    $depthTtl.next().slideUp();
                    $depthTtl.removeClass('on');
                    $(this).addClass('on').next().slideDown();
                }
            });

        } else if ($wh > 1024) {  //1025 遺���
            
            $depthTtl.off('click'); //�대깽�몃��� �쒓굅�섏옄!
            $("body").removeClass("mobile").addClass("web");
            $depth2.hide()

            $depthList.on({
                mouseover: function() {
                    $(this).find('.depth2').show(); //2�곸뒪 �섏삤湲�
                    $(this).children('.gnb_list > li > a').addClass('txt-blue'); //硫붾돱 �ㅽ��� �됱긽 蹂�寃�
                },
                mouseout: function() {
                    $(this).find('.depth2').hide(); //2�곸뒪 �④린湲�
                    $('.gnb_list > li > a').removeClass('txt-blue'); //硫붾돱 �ㅽ��� �됱긽 �먮났
                }
            });
        }
    }

    //venue
    var tab = $('.shuttle-tab li'); 
    var box = $('.shuttle-tab-con .img-box');

    box.eq(0).addClass('on');  

    tab.each(function(idx, item) {
        $(item).on('click', function(){
            box.removeClass('on').eq(idx).addClass('on');
            tab.removeClass('on').eq(idx).addClass('on');
        });
    });

    //Side Meetings
    var tab2 = $('.meetings .tab-menu li'); 
    var box2 = $('.meetings .tab-details .schedule-wrap');

    box2.eq(0).addClass('on');  

    tab2.each(function(idx, item) {
        $(item).on('click', function(){
            box2.removeClass('on').eq(idx).addClass('on');
            tab2.removeClass('on').eq(idx).addClass('on');
        });
    });

    //side event
    var tab3 = $('.tours .event-tab li'); 
    var box3 = $('.tours .event-tab-con .tours-box');

    box3.eq(0).addClass('on');  

    tab3.each(function(idx, item) {
        $(item).on('click', function(){
            box3.removeClass('on').eq(idx).addClass('on');
            tab3.removeClass('on').eq(idx).addClass('on');
        });
    });

    // �ㅼ�以� �낅젰 �앹뾽 �닿린
	$('.meetings .table-box td > div ').on('click', function () {
		// $('.book-pop').fadeIn();
		// $('.book-pop-wrap .dim').fadeIn();
	});

    // �ㅼ�以� �낅젰 �앹뾽 �リ린
	$('.btn-closed, .dim').on('click', function () {
        console.log('�앹뾽 �リ린');
		$('.book-pop').fadeOut();
		$('.book-pop-wrap .dim').fadeOut();
	});

    // papers
    $('.idx-ttl').on('click', function(){
        $(this).nextAll('.idx-con').toggleClass('on');
        $(this).toggleClass('on');
        console.log('text');
    });
  

	// //pagetop
	// $('.pageTop').on('click', function () {

    //     console.log('pageTop test');
	// 	$('html, body').animate({ scrollTop: 0 }, 400);
	// 	return false;
	// });
    

});