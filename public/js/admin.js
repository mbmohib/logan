//---------- For toggle Side Menu---------------
$('#toggle').click(function() {
    $('.ui.sidebar').sidebar('toggle');
})



//---------- Ratgin Initialize--------------
$('.ui.rating')
  .rating();

// ---------------Popup Modal---------------
$('.ui.modal').modal({
  observeChanges:true
});

$(".view_book").click(function(){
  $('.ui.modal.v_book').modal('show');
});

$(".add_book").click(function(){
  $('.ui.modal.a_book').modal({
      autofocus: false,
  }).modal('show');
});


//--------- Dropdown Initialize------------
$('.ui.dropdown')
  .dropdown();


//-------------- Calendar Initialize---------
$('#year').calendar({
  type: 'year'
});

$('.date').calendar({
  type: 'date'
});


//-------- Flash and Error message hide----------
$(".close_status").click(function(){
  $(".message").hide();
});

//--------- Checkbox Initialize----------------
$('.ui.checkbox')
  .checkbox()
;
