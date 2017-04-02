$('#toggle').click(function() {
    $('.ui.sidebar').sidebar('toggle');
})

$('.ui.dropdown')
  .dropdown();


$('.ui.rating')
  .rating();

  $('#year').calendar({
    type: 'year'
  });

  $('.date').calendar({
    type: 'date'
  });
