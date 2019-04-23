(function ($) {
    "use strict";
    // Auto-scroll
    $('#eventos').carousel({
      interval: 0
    });
  
    // Control buttons
    $('.siguiente').click(function () {
      $('.eventos .carousel').carousel('next');
      return false;
    });
    $('.anterior').click(function () {
      $('.eventos .carousel').carousel('prev');
      return false;
    });
  
    // On carousel scroll
    $("#eventos").on("slide.bs.carousel", function (e) {
      var $e = $(e.relatedTarget);
      var idx = $e.index();
      var itemsPerSlide = 3;
      var totalItems = $(".eventos .carousel-item").length;
      if (idx >= totalItems - (itemsPerSlide - 1)) {
        var it = itemsPerSlide -
            (totalItems - idx);
        for (var i = 0; i < it; i++) {
          // append slides to end 
          if (e.direction == "left") {
            $(
              ".eventos .carousel-item").eq(i).appendTo(".eventos .carousel-inner");
          } else {
            $(".eventos .carousel-item").eq(0).appendTo(".eventos .carousel-inner");
          }
        }
      }
    });
  })
  (jQuery);

  $('a.ventanamodal').click(function(event){
    event.preventDefault();
    var content = $('.modal-body');
    content.empty();
    var title = $(this).attr("title");
    $('.modal-title').html(title);      	
    content.html($(this).html());
    $(".modal-profile").modal({show:true});
  });



  ///////////////////////////////////////////////////////////////////
  (function ($) {
    "use strict";
    // Auto-scroll
    $('#actualidad').carousel({
      interval: 0
    });
  
    // Control buttons
    $('.siguiente').click(function () {
      $('.actualidad .carousel').carousel('next');
      return false;
    });
    $('.anterior').click(function () {
      $('.actualidad .carousel').carousel('prev');
      return false;
    });
  
    // On carousel scroll
    $("#actualidad").on("slide.bs.carousel", function (e) {
      var $e = $(e.relatedTarget);
      var idx = $e.index();
      var itemsPerSlide = 3;
      var totalItems = $(".actualidad .carousel-item").length;
      if (idx >= totalItems - (itemsPerSlide - 1)) {
        var it = itemsPerSlide -
            (totalItems - idx);
        for (var i = 0; i < it; i++) {
          // append slides to end 
          if (e.direction == "left") {
            $(
              ".actualidad .carousel-item").eq(i).appendTo(".actualidad .carousel-inner");
          } else {
            $(".actualidad .carousel-item").eq(0).appendTo(".actualidad .carousel-inner");
          }
        }
      }
    });
  })
  (jQuery);