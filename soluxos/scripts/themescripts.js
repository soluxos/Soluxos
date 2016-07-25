// JavaScript Document

var $j = jQuery.noConflict();

// Carousel

$j(document).ready(function(){
  $j('#carousel').bxSlider({
  	auto:true,
	mode:'fade',
	useCSS:false
  });
});

$j(document).ready(function(){
    $j('.bx-slider').bxSlider({
    	auto:true,
	  	mode:'fade',
	  	useCSS:false,
		controls:false,
    });
});

// Mobile navigation

$j(document).ready(function(){
  $j(".tcon.tcon-menu--xcross").click(function () {
      $j(".overlay-menu").fadeToggle("visible");
      $j("body").toggleClass("overflow");
      $j(".grid").toggleClass("grid-hide");
    });
  $j(".tcon.tcon-menu--xcross.tcon-transform").click(function () {
      $j(".overlay-menu").removeClass("visible");
      $j("body").toggleClass("overflow");
      $j(".grid").toggleClass("grid-hide");
    });
});

// Page scroll

$j(document).ready(function(){
	$j('a.scroll, li.scroll a').bind('click',function(event){
		var $anchor = $j(this);
		$j('html, body').stop().animate({
			scrollTop: $j($anchor.attr('href')).offset().top
		}, 1000);
		event.preventDefault();
	});
});

// Hero dynamic height - set the ids and classes of the boxes, you can offset the size by changing / removing - 200

$j(document).ready(function() {
	var heightcheck = $j(window).height();
	var heroheight = (heightcheck);
	$j(function(){
		$j('.hero') .css({'height': (heroheight)+'px'});
		$j('.bar-holder') .css({'top': (heroheight)+'px'});
		$j('.bx-wrapper') .css({'height': (heroheight)+'px'});
		$j('.bx-controls-direction') .css({'bottom': (heroheight / 2 )+'px'});
	});
});

$j(window).resize(function() {
	var heightcheck = $j(window).height();
	var heroheight = (heightcheck);
	$j(function(){
		$j('.hero') .css({'height': (heroheight)+'px'});
		$j('.bar-holder') .css({'top': (heroheight)+'px'});
		$j('.bx-wrapper') .css({'height': (heroheight)+'px'});
		$j('.bx-controls-direction') .css({'bottom': (heroheight / 2 )+'px'});
	});
});

// Wow for loading in content on scroll

$j(document).ready(function(){
	  wow = new WOW(
	  {
	  boxClass:     'wow',      // default
	  animateClass: 'animated', // default
	  offset:       100,          // default
	  mobile:       false,       // default
	  live:         true        // default
	}
	);
	wow.init();
});

// Transformicons

$j(document).ready(function(){
	transformicons.add('.tcon');
});

// Home hero animation timings

var intervalID = window.setInterval(myCallback, 12000);

function myCallback() {

  setTimeout(function(){$j( ".grid.home .one" ).addClass('active');},100);
  setTimeout(function(){$j( ".grid.home .one" ).removeClass('active');},700);
  setTimeout(function(){$j( ".grid.home .two" ).addClass('active');},200);
  setTimeout(function(){$j( ".grid.home .two" ).removeClass('active');},800);
  setTimeout(function(){$j( ".grid.home .three" ).addClass('active');},300);
  setTimeout(function(){$j( ".grid.home .three" ).removeClass('active');},900);
  setTimeout(function(){$j( ".grid.home .four" ).addClass('active');},400);
  setTimeout(function(){$j( ".grid.home .four" ).removeClass('active');},1000);
  setTimeout(function(){$j( ".grid.home .five" ).addClass('active');},500);
  setTimeout(function(){$j( ".grid.home .five" ).removeClass('active');},1100);
  setTimeout(function(){$j( ".grid.home .six" ).addClass('active');},600);
  setTimeout(function(){$j( ".grid.home .six" ).removeClass('active');},1200);
  setTimeout(function(){$j( ".grid.home .seven" ).addClass('active');},700);
  setTimeout(function(){$j( ".grid.home .seven" ).removeClass('active');},1300);
  setTimeout(function(){$j( ".grid.home .eight" ).addClass('active');},800);
  setTimeout(function(){$j( ".grid.home .eight" ).removeClass('active');},1400);
  setTimeout(function(){$j( ".grid.home .nine" ).addClass('active');},900);
  setTimeout(function(){$j( ".grid.home .nine" ).removeClass('active');},1500);
  setTimeout(function(){$j( ".grid.home .thirteen" ).addClass('active');},1000);
  setTimeout(function(){$j( ".grid.home .thirteen" ).removeClass('active');},1600);
  setTimeout(function(){$j( ".grid.home .fourteen" ).addClass('active');},1100);
  setTimeout(function(){$j( ".grid.home .fourteen" ).removeClass('active');},1700);
  setTimeout(function(){$j( ".grid.home .fifteen" ).addClass('active');},1200);
  setTimeout(function(){$j( ".grid.home .fifteen" ).removeClass('active');},1800);
  setTimeout(function(){$j( ".grid.home .sixteen" ).addClass('active');},1300);
  setTimeout(function(){$j( ".grid.home .sixteen" ).removeClass('active');},1900);
  setTimeout(function(){$j( ".grid.home .seventeen" ).addClass('active');},1400);
  setTimeout(function(){$j( ".grid.home .seventeen" ).removeClass('active');},2000);
  setTimeout(function(){$j( ".grid.home .eighteen" ).addClass('active');},1500);
  setTimeout(function(){$j( ".grid.home .eighteen" ).removeClass('active');},2100);

  setTimeout(function(){$j( ".grid.about .one" ).addClass('active');},100);
  setTimeout(function(){$j( ".grid.about .one" ).removeClass('active');},700);
  setTimeout(function(){$j( ".grid.about .two" ).addClass('active');},200);
  setTimeout(function(){$j( ".grid.about .two" ).removeClass('active');},800);
  setTimeout(function(){$j( ".grid.about .three" ).addClass('active');},300);
  setTimeout(function(){$j( ".grid.about .three" ).removeClass('active');},900);
  setTimeout(function(){$j( ".grid.about .four" ).addClass('active');},400);
  setTimeout(function(){$j( ".grid.about .four" ).removeClass('active');},1000);
  setTimeout(function(){$j( ".grid.about .five" ).addClass('active');},500);
  setTimeout(function(){$j( ".grid.about .five" ).removeClass('active');},1100);
  setTimeout(function(){$j( ".grid.about .six" ).addClass('active');},600);
  setTimeout(function(){$j( ".grid.about .six" ).removeClass('active');},1200);
  setTimeout(function(){$j( ".grid.about .seven" ).addClass('active');},700);
  setTimeout(function(){$j( ".grid.about .seven" ).removeClass('active');},1300);
  setTimeout(function(){$j( ".grid.about .eight" ).addClass('active');},800);
  setTimeout(function(){$j( ".grid.about .eight" ).removeClass('active');},1400);
  setTimeout(function(){$j( ".grid.about .nine" ).addClass('active');},900);
  setTimeout(function(){$j( ".grid.about .nine" ).removeClass('active');},1500);
  setTimeout(function(){$j( ".grid.about .ten" ).addClass('active');},1000);
  setTimeout(function(){$j( ".grid.about .ten" ).removeClass('active');},1600);
  setTimeout(function(){$j( ".grid.about .eleven" ).addClass('active');},1100);
  setTimeout(function(){$j( ".grid.about .eleven" ).removeClass('active');},1700);
  setTimeout(function(){$j( ".grid.about .twelve" ).addClass('active');},1200);
  setTimeout(function(){$j( ".grid.about .twelve" ).removeClass('active');},1800);
  setTimeout(function(){$j( ".grid.about .thirteen" ).addClass('active');},1300);
  setTimeout(function(){$j( ".grid.about .thirteen" ).removeClass('active');},1900);
  setTimeout(function(){$j( ".grid.about .fourteen" ).addClass('active');},1400);
  setTimeout(function(){$j( ".grid.about .fourteen" ).removeClass('active');},2000);
  setTimeout(function(){$j( ".grid.about .fifteen" ).addClass('active');},1500);
  setTimeout(function(){$j( ".grid.about .fifteen" ).removeClass('active');},2100);
  setTimeout(function(){$j( ".grid.about .sixteen" ).addClass('active');},1600);
  setTimeout(function(){$j( ".grid.about .sixteen" ).removeClass('active');},2200);
  setTimeout(function(){$j( ".grid.about .seventeen" ).addClass('active');},1700);
  setTimeout(function(){$j( ".grid.about .seventeen" ).removeClass('active');},2300);
  setTimeout(function(){$j( ".grid.about .eighteen" ).addClass('active');},1800);
  setTimeout(function(){$j( ".grid.about .eighteen" ).removeClass('active');},2400);

  setTimeout(function(){$j( ".grid.skills .one" ).addClass('active');},100);
  setTimeout(function(){$j( ".grid.skills .one" ).removeClass('active');},700);
  setTimeout(function(){$j( ".grid.skills .two" ).addClass('active');},200);
  setTimeout(function(){$j( ".grid.skills .two" ).removeClass('active');},800);
  setTimeout(function(){$j( ".grid.skills .three" ).addClass('active');},300);
  setTimeout(function(){$j( ".grid.skills .three" ).removeClass('active');},900);
  setTimeout(function(){$j( ".grid.skills .seven" ).addClass('active');},400);
  setTimeout(function(){$j( ".grid.skills .seven" ).removeClass('active');},1000);
  setTimeout(function(){$j( ".grid.skills .eight" ).addClass('active');},500);
  setTimeout(function(){$j( ".grid.skills .eight" ).removeClass('active');},1100);
  setTimeout(function(){$j( ".grid.skills .thirteen" ).addClass('active');},600);
  setTimeout(function(){$j( ".grid.skills .thirteen" ).removeClass('active');},1200);
  setTimeout(function(){$j( ".grid.skills .fourteen" ).addClass('active');},700);
  setTimeout(function(){$j( ".grid.skills .fourteen" ).removeClass('active');},1300);
  setTimeout(function(){$j( ".grid.skills .fifteen" ).addClass('active');},800);
  setTimeout(function(){$j( ".grid.skills .fifteen" ).removeClass('active');},1400);
  setTimeout(function(){$j( ".grid.skills .sixteen" ).addClass('active');},900);
  setTimeout(function(){$j( ".grid.skills .sixteen" ).removeClass('active');},1500);
  setTimeout(function(){$j( ".grid.skills .seventeen" ).addClass('active');},1000);
  setTimeout(function(){$j( ".grid.skills .seventeen" ).removeClass('active');},1600);
  setTimeout(function(){$j( ".grid.skills .eighteen" ).addClass('active');},1100);
  setTimeout(function(){$j( ".grid.skills .eighteen" ).removeClass('active');},1700);

}

$j(document).ready(function(){
	 setTimeout(function(){$j( ".grid.home .one" ).addClass('active');},100);
	 setTimeout(function(){$j( ".grid.home .one" ).removeClass('active');},700);
	 setTimeout(function(){$j( ".grid.home .two" ).addClass('active');},200);
	 setTimeout(function(){$j( ".grid.home .two" ).removeClass('active');},800);
	 setTimeout(function(){$j( ".grid.home .three" ).addClass('active');},300);
	 setTimeout(function(){$j( ".grid.home .three" ).removeClass('active');},900);
	 setTimeout(function(){$j( ".grid.home .four" ).addClass('active');},400);
	 setTimeout(function(){$j( ".grid.home .four" ).removeClass('active');},1000);
	 setTimeout(function(){$j( ".grid.home .five" ).addClass('active');},500);
	 setTimeout(function(){$j( ".grid.home .five" ).removeClass('active');},1100);
	 setTimeout(function(){$j( ".grid.home .six" ).addClass('active');},600);
	 setTimeout(function(){$j( ".grid.home .six" ).removeClass('active');},1200);

	 setTimeout(function(){$j( ".grid.home .seven" ).addClass('active');},700);
	 setTimeout(function(){$j( ".grid.home .seven" ).removeClass('active');},1300);
	 setTimeout(function(){$j( ".grid.home .eight" ).addClass('active');},800);
	 setTimeout(function(){$j( ".grid.home .eight" ).removeClass('active');},1400);
	 setTimeout(function(){$j( ".grid.home .nine" ).addClass('active');},900);
	 setTimeout(function(){$j( ".grid.home .nine" ).removeClass('active');},1500);

	 setTimeout(function(){$j( ".grid.home .thirteen" ).addClass('active');},1000);
	 setTimeout(function(){$j( ".grid.home .thirteen" ).removeClass('active');},1600);
	 setTimeout(function(){$j( ".grid.home .fourteen" ).addClass('active');},1100);
	 setTimeout(function(){$j( ".grid.home .fourteen" ).removeClass('active');},1700);
	 setTimeout(function(){$j( ".grid.home .fifteen" ).addClass('active');},1200);
	 setTimeout(function(){$j( ".grid.home .fifteen" ).removeClass('active');},1800);
	 setTimeout(function(){$j( ".grid.home .sixteen" ).addClass('active');},1300);
	 setTimeout(function(){$j( ".grid.home .sixteen" ).removeClass('active');},1900);
	 setTimeout(function(){$j( ".grid.home .seventeen" ).addClass('active');},1400);
	 setTimeout(function(){$j( ".grid.home .seventeen" ).removeClass('active');},2000);
	 setTimeout(function(){$j( ".grid.home .eighteen" ).addClass('active');},1500);
	 setTimeout(function(){$j( ".grid.home .eighteen" ).removeClass('active');},2100);
});

$j(document).ready(function(){
	 setTimeout(function(){$j( ".grid.about .one" ).addClass('active');},100);
	 setTimeout(function(){$j( ".grid.about .one" ).removeClass('active');},700);
	 setTimeout(function(){$j( ".grid.about .two" ).addClass('active');},200);
	 setTimeout(function(){$j( ".grid.about .two" ).removeClass('active');},800);
	 setTimeout(function(){$j( ".grid.about .three" ).addClass('active');},300);
	 setTimeout(function(){$j( ".grid.about .three" ).removeClass('active');},900);
	 setTimeout(function(){$j( ".grid.about .four" ).addClass('active');},400);
	 setTimeout(function(){$j( ".grid.about .four" ).removeClass('active');},1000);
	 setTimeout(function(){$j( ".grid.about .five" ).addClass('active');},500);
	 setTimeout(function(){$j( ".grid.about .five" ).removeClass('active');},1100);
	 setTimeout(function(){$j( ".grid.about .six" ).addClass('active');},600);
	 setTimeout(function(){$j( ".grid.about .six" ).removeClass('active');},1200);

	 setTimeout(function(){$j( ".grid.about .seven" ).addClass('active');},700);
	 setTimeout(function(){$j( ".grid.about .seven" ).removeClass('active');},1300);
	 setTimeout(function(){$j( ".grid.about .eight" ).addClass('active');},800);
	 setTimeout(function(){$j( ".grid.about .eight" ).removeClass('active');},1400);
	 setTimeout(function(){$j( ".grid.about .nine" ).addClass('active');},900);
	 setTimeout(function(){$j( ".grid.about .nine" ).removeClass('active');},1500);
	 setTimeout(function(){$j( ".grid.about .ten" ).addClass('active');},1000);
	 setTimeout(function(){$j( ".grid.about .ten" ).removeClass('active');},1600);
	 setTimeout(function(){$j( ".grid.about .eleven" ).addClass('active');},1100);
	 setTimeout(function(){$j( ".grid.about .eleven" ).removeClass('active');},1700);
	 setTimeout(function(){$j( ".grid.about .twelve" ).addClass('active');},1200);
	 setTimeout(function(){$j( ".grid.about .twelve" ).removeClass('active');},1800);

	 setTimeout(function(){$j( ".grid.about .thirteen" ).addClass('active');},1300);
	 setTimeout(function(){$j( ".grid.about .thirteen" ).removeClass('active');},1900);
	 setTimeout(function(){$j( ".grid.about .fourteen" ).addClass('active');},1400);
	 setTimeout(function(){$j( ".grid.about .fourteen" ).removeClass('active');},2000);
	 setTimeout(function(){$j( ".grid.about .fifteen" ).addClass('active');},1500);
	 setTimeout(function(){$j( ".grid.about .fifteen" ).removeClass('active');},2100);
	 setTimeout(function(){$j( ".grid.about .sixteen" ).addClass('active');},1600);
	 setTimeout(function(){$j( ".grid.about .sixteen" ).removeClass('active');},2200);
	 setTimeout(function(){$j( ".grid.about .seventeen" ).addClass('active');},1700);
	 setTimeout(function(){$j( ".grid.about .seventeen" ).removeClass('active');},2300);
	 setTimeout(function(){$j( ".grid.about .eighteen" ).addClass('active');},1800);
	 setTimeout(function(){$j( ".grid.about .eighteen" ).removeClass('active');},2400);
});

$j(document).ready(function(){
	setTimeout(function(){$j( ".grid.skills .one" ).addClass('active');},100);
	setTimeout(function(){$j( ".grid.skills .one" ).removeClass('active');},700);
	setTimeout(function(){$j( ".grid.skills .two" ).addClass('active');},200);
	setTimeout(function(){$j( ".grid.skills .two" ).removeClass('active');},800);
	setTimeout(function(){$j( ".grid.skills .three" ).addClass('active');},300);
	setTimeout(function(){$j( ".grid.skills .three" ).removeClass('active');},900);
	setTimeout(function(){$j( ".grid.skills .seven" ).addClass('active');},400);
	setTimeout(function(){$j( ".grid.skills .seven" ).removeClass('active');},1000);
	setTimeout(function(){$j( ".grid.skills .eight" ).addClass('active');},500);
	setTimeout(function(){$j( ".grid.skills .eight" ).removeClass('active');},1100);
	setTimeout(function(){$j( ".grid.skills .thirteen" ).addClass('active');},600);
	setTimeout(function(){$j( ".grid.skills .thirteen" ).removeClass('active');},1200);
	setTimeout(function(){$j( ".grid.skills .fourteen" ).addClass('active');},700);
	setTimeout(function(){$j( ".grid.skills .fourteen" ).removeClass('active');},1300);
	setTimeout(function(){$j( ".grid.skills .fifteen" ).addClass('active');},800);
	setTimeout(function(){$j( ".grid.skills .fifteen" ).removeClass('active');},1400);
	setTimeout(function(){$j( ".grid.skills .sixteen" ).addClass('active');},900);
	setTimeout(function(){$j( ".grid.skills .sixteen" ).removeClass('active');},1500);
	setTimeout(function(){$j( ".grid.skills .seventeen" ).addClass('active');},1000);
	setTimeout(function(){$j( ".grid.skills .seventeen" ).removeClass('active');},1600);
	setTimeout(function(){$j( ".grid.skills .eighteen" ).addClass('active');},1100);
	setTimeout(function(){$j( ".grid.skills .eighteen" ).removeClass('active');},1700);
});