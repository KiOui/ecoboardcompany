$(document).on('click','.uncheck', function(){
	if (($(this).prop('checked')) == true) {
      $('.uncheck').prop('checked', false);
      $(this).prop('checked', true);
     } 
});

$(document).on('click','.master', function(){
	if (($(this).prop('checked')) == false) {
      $('.uncheck').prop('checked', false);
      $(this).prop('checked', false);
     } 
});