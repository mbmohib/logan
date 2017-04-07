// For toggle Side Menu
$('#toggle').click(function() {
    $('.ui.sidebar').sidebar('toggle');
})

// Dropdown Initialize
$('.ui.dropdown')
  .dropdown();

// Ratgin Initialize
$('.ui.rating')
  .rating();

// Calendar Initialize
$('#year').calendar({
  type: 'year'
});

$('.date').calendar({
  type: 'date'
});

$(".close_status").click(function(){
  $(".message").hide();
});

$(".view_book").click(function(){
  $('.ui.modal.v_book').modal('show');
});

$(".add_book").click(function(){
  $('.ui.modal.a_book').modal('show');
});

$('.ui.checkbox')
  .checkbox()
;
