(function($){
  $(function(){

  	var l_client = (window.innerWidth);
	var h_client = (window.innerHeight);

	$(document).ready(function(){
		$('#masthead').css('height', h_client);
		$('.scrollspy').scrollSpy();
	});

    $('.button-collapse').sideNav();
    $('select').material_select();

  }); // end of document ready
})(jQuery); // end of jQuery name space