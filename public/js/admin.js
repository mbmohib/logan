/*===================Semantic UI=====================
=====================================================*/

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
// --------- Borrower Search and Add----------------

var content = new Array();
	$.ajax({
		method: 'GET',
    async: false,
		url: 'borrower-ajax',
		dataType: 'json'
	}).done(function(data){
		$.map(data, function(key, value){
      content.push({title : key.name, description : key.mobile});
		});
	});

console.log(content);

$('.ui.search')
  .search({
    source : content,
    searchFields   : [
      'title'
    ],
    searchFullText: false,
	  showNoResults: false
  })
;
/*===================Custom=====================
=================================================*/

//-------- Send Add book form data from modal-------------
$(".borrower_info").find(".add_book").click(function(){
    var borrower_id = $(this).attr("value");
    $(".ui.positive.button").click(function() {
         event.preventDefault();

        var data = $('.add-book-to-borrower').serialize();
        var full_data = data + "&borrower_id=" + borrower_id;

        $.post('/dashboard/borrowers', full_data, function() {
            location.reload();
        });
    });
});
