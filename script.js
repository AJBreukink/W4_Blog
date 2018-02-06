$(".dropdown").click(function(){
      // Holds the product ID of the clicked element
      var buttonId = $(this).data('target');
      var self = $(this).parent();

   self.toggleClass("grid-item-fullwidth");
      $(buttonId).toggle();


      $('#grid').isotope('layout');
});

jQuery(function ($) {

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
