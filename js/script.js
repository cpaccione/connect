// Document, get ready...set...GO!!! WordPress safe jQuery wrapper.

jQuery(document).ready(function($) {


	// Add bootstrap's 'img-responsive' class to all images

  $('img').addClass('img-responsive');

    // Bootstrap drop-down on hover

    // $('.navbar [data-toggle="dropdown"]').bootstrapDropdownHover({
        
    // });

  // Smooth Scroll

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



