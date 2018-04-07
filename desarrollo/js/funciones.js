(function($) {
  "use strict"; // Start of use strict
  // Configure tooltips for collapsed side navigation
  $('.navbar-sidenav [data-toggle="tooltip"]').tooltip({
    template: '<div class="tooltip navbar-sidenav-tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
  })

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .navbar-sidenav, body.fixed-nav .sidenav-toggler, body.fixed-nav .navbar-collapse').on('mousewheel DOMMouseScroll', function(e) {
    var e0 = e.originalEvent,
      delta = e0.wheelDelta || -e0.detail;
    this.scrollTop += (delta < 0 ? 1 : -1) * 30;
    e.preventDefault();
  });
  // Configure tooltips globally
  $('[data-toggle="tooltip"]').tooltip();
  
  //Carousel
  $('.carousel').carousel({
    pause: false
  });

})(jQuery); // End of use strict

function searchUsername(value,link)
{
    $.ajax({
      type: "POST",
      url: link,
      data: {username:value},
      success: function(result){alert(result)},
      dataType: 'HTML'
    });
}

