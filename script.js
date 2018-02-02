
    // $("button").click(function(){
    //     $("p").toggle();
    // });


jQuery(function ($) {

$('#grid').isotope({
  // set itemSelector so .grid-sizer is not used in layout
  itemSelector: '.grid-item',
  percentPosition: true,
  masonry: {
    columnWidth: 50
  }
})
// filter items on button click
$('.filter-button-group').on( 'click', 'button', function() {
var filterValue = $(this).attr('data-filter');
$('#grid').isotope({ filter: filterValue });
});

  });
