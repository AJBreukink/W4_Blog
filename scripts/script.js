//read more button functions, toggle class
$(".dropdown").click(function(){
      // Holds the product ID of the clicked element
      var buttonId = $(this).data('target');
      var self = $(this).parent();

    self.toggleClass("grid-item-fullwidth");
      $(buttonId).toggle();

      $('#grid').isotope('layout');
      console.log($(self).position());

      $('body, html').animate(
        { scrollTop: $(self).offset().top  });
});


//category sorting
jQuery(function ($) {

  //if user navigates with #hash to post toggle display and scroll to comments
      
      var path =  window.location.hash;
      //check if #hash value present
          if (path) {

          $(path).toggleClass("grid-item-fullwidth");

          var position2 = $(path).children(".content:first").next("button").offset();

            $(path).animate({
                  scrollTop: position2.top - 200
              }, 'slow');
        }

    $('#grid').isotope({
      // set itemSelector so .grid-sizer is not used in layout
      itemSelector: '.grid-item',
      masonry: {
        columnWidth: 100
      }
    })
    // filter items on button click
    $('.filter-button-group').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    $('#grid').isotope({ filter: filterValue });
    });




  });
