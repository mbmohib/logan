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

// Popup Modal
$(".view_book").click(function(){
  $('.ui.modal.v_book').modal('show');
});

$(".add_book").click(function(){
  $('.ui.modal.a_book').modal('show');
});
$('.ui.modal').modal({
  observeChanges:true
});

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


$('.ui.checkbox')
  .checkbox()
;
