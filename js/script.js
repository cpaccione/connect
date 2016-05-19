// Document, get ready...set...GO!!! WordPress safe jQuery wrapper.

jQuery(document).ready(function($) {


	// Add bootstrap's 'img-responsive' class to all images

    $('img').addClass('img-responsive');

    // Bootstrap drop-down on hover

    $('.navbar [data-toggle="dropdown"]').bootstrapDropdownHover({
        
    });

    // Smooth Scroll

 //    $('a[href^="#"]').on('click',function (e) {
	//     e.preventDefault();

	//     var target = this.hash;
	//     var $target = $(target);

	//     $('html, body').stop().animate({
	//         'scrollTop': $target.offset().top
	//     }, 900, 'swing', function () {
	//         window.location.hash = target;
	//     });
	// });

 $(function() {
  $('ul#menu-main-menu > li > a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });

  // (function(){
  //   window.scrollTo(0, 0);
  //   var scrollHref = location.href.substring(location.href.lastIndexOf('#'),location.href.length);

  //   for (var i = document.getElementsByTagName("a").length - 1; i >= 0; i--) {
  //       if (document.getElementsByTagName("a")[i].getAttribute("href") == scrollHref) {
  //           var target = document.getElementsByTagName("a")[i].offsetTop;
  //           $('html, body').animate({
  //                   scrollTop: target
  //           }, 1000);
  //       };
  //   };

    //    smoothScroll.init();
    // $("a").click(function() {
    //   var regExp = new RegExp(/\/\/.+?(\/.+?)\#/);
    //   if ( window.location.hash && window.location.pathname != regExp.exec(this.href)[1]) {
    //     window.location.href = this.href;
    //   }
    // });

// 	$('html,body').animate({
//   scrollTop: $(window.location.hash).offset().top
// });


	// ;(function (window, document, undefined) {

 //    'use strict';

    // Cut the mustard
    // var supports = 'querySelector' in document && 'addEventListener' in window;
    // if ( !supports ) return;

    // Get all anchors
    // var anchors = document.querySelectorAll( '[href*="#"]' );

    // Add smooth scroll to all anchors
    // for ( var i = 0, len = anchors.length; i < len; i++ ) {
    //     var url = new RegExp( window.location.hostname + window.location.pathname );
    //     if ( !url.test( anchors[i].href ) ) continue;
    //     anchors[i].setAttribute( 'data-scroll', true );
    // }

    // Initial smooth scroll (add your attributes as desired)
    // smoothScroll.init();
    

// })(window, document);


	// Accordion

	$(function() {
		var icons = {
			header: "ui-icon-plus",
			activeHeader: "ui-icon-minus"
		};
    $( "#accordion" ).accordion({
    	collapsible: true,
    	active: false,
    	heightStyle: "content",
    	icons: icons
    });
});

});

 });



