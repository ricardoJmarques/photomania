function slideonlyone(thechosenone) {
     $('#menu-content a').removeClass('menu-selected');
	 $('.body-boxes').each(function(index) {
	 	  if ($(this).attr("id") == thechosenone) {
               $(this).slideDown(600);
          }
          else {
               $(this).slideUp(600);
          }
	 });
	 $('#menu-content a').each(function(index) {
	 	  if ($(this).attr("id") == thechosenone) {
		  	  $(this).addClass('menu-selected');
		  }
	 });
}