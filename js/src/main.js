// check for ios device
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	$('body').addClass('if-mobile');
    $('.facebook').remove();
    $(document).on('touchstart', 'main', function(){
		$('nav ul').slideUp()
	})
}
// if-ie
if(navigator.userAgent.match(/Trident\/7\./)) {
    $('body').addClass('if-ie');
    $('.facebook').mouseover(function(){
    	$(this).css('right', 0);
    })
    .mouseleave(function(){
    	$(this).css('right', '-300px');
    })
}
//if edge
if(/Edge\/\d./i.test(navigator.userAgent)){
    $('body').addClass('if-edge');
    $('.facebook').mouseover(function(){
    	$(this).css('right', 0);
    })
    .mouseleave(function(){
    	$(this).css('right', '-300px');
    })
}

$(function(){
	if( $('.sticky').length ) {
	    var sticky = $('.sticky');
	    var sticky_height = sticky.outerHeight();
	    var sticky_st = sticky.offset().top;

	    $(window).resize(function() {
	            $('header').next().css({ 'margin-top': 0 });
	            sticky.removeClass('navbar-fixed-top');
	            sticky_height = sticky.outerHeight();
	            sticky_st = sticky.offset().top;
	    })
	    $(window).scroll(function() {
	            var win_st = $(window).scrollTop();

	            if(win_st > sticky_st){
	                $('header').next().css({ 'margin-top': sticky_height });
	                sticky.addClass('navbar-fixed-top');
	            }else{
	                $('header').next().css({ 'margin-top': 0 });
	                sticky.removeClass('navbar-fixed-top');
	            }
	    })
	}
	$('#nav-toggle').click(function(){
	    $('nav ul').toggle()
	})


	var toTop = $(".click-to-top");
    var offset = 200;
    $(window).scroll(function() {
        if ($(this).scrollTop() > offset) {
            toTop.fadeIn(400);
        } else {
            toTop.fadeOut(400);
        }
    });
    toTop.click(function(event) {
        event.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 600);
        return false;
    })

    //loading end
    $('.loading').fadeOut(400,function(){
		$(this).remove()
	})
	    
})

//開新分頁
function externalLinks() {
    if (!document.getElementsByTagName) return;
    var anchors = document.getElementsByTagName("a");
    for (var i=0; i<anchors.length; i++) {
        var anchor = anchors[i];
        if (anchor.getAttribute("href") &&
        anchor.getAttribute("rel") == "external")
            anchor.target = "_blank";
    }
}
window.onload = externalLinks;











//swiper

	// var ww = $(window).outerWidth(),pv = '';
	// if($('.swiper-slide').length > 2){
	// 	if (ww > 991) pv = 3;
	// 	if (ww > 767 && ww <= 991) pv = 2;
	// 	if (ww <= 767) pv = 1;
	// 	var swiper = new Swiper('.swiper-container', {
	// 		pagination: '.swiper-pagination',
	// 		slidesPerView: pv,
	// 		paginationClickable: true,
	// 		spaceBetween: 10,
	// 		slideToClickedSlide:false,
	// 		    // autoplay: 5000,
	// 		    // nextButton: '.swiper-button-next',
	// 		    // prevButton: '.swiper-button-prev',
	// 		loop: false
	// 		    // loopedSlides:2
	// 	});
	// 	$(window).resize(function() {
	// 		var ww = $(window).outerWidth()
	// 		if (ww > 991) swiper.params.slidesPerView = 3;
	// 		if (ww > 767 && ww <= 991) swiper.params.slidesPerView = 2;
	// 		if (ww <= 767) swiper.params.slidesPerView = 1;
	// 		swiper.update()
	// 	})
	// }
	// else if($('.swiper-slide').length = 2){
	// 	if (ww > 767) pv = 2;
	// 	if (ww <= 767) pv = 1;
	// 	var swiper = new Swiper('.swiper-container', {
	// 		pagination: '.swiper-pagination',
	// 		slidesPerView: pv,
	// 		paginationClickable: true,
	// 		spaceBetween: 10,
	// 		slideToClickedSlide:false,
	// 		    // autoplay: 5000,
	// 		    // nextButton: '.swiper-button-next',
	// 		    // prevButton: '.swiper-button-prev',
	// 		loop: false
	// 		    // loopedSlides:2
	// 	});
	// 	$(window).resize(function() {
	// 		var ww = $(window).outerWidth()
	// 		if (ww > 767) swiper.params.slidesPerView = 2;
	// 		if (ww <= 767) swiper.params.slidesPerView = 1;
	// 		swiper.update()
	// 	})
	// }
	// else if($('.swiper-slide').length <= 1){
	// 	 $('.swiper-slide-active').removeClass()
	// 	 $('.swiper-pagination').remove()
	// }