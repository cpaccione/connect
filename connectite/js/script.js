// Document, get ready...set...GO!!! WordPress safe jQuery wrapper.

jQuery(document).ready(function($) {


	// Add bootstrap's 'img-responsive' class to all images

    $('img').addClass('img-responsive');

    // Bootstrap drop-down on hover

    $('.navbar [data-toggle="dropdown"]').bootstrapDropdownHover({
        
    });

    // Smooth Scroll

    $('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});


});



