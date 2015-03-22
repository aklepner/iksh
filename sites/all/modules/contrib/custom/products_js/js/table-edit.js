(function ($) {
  
$( document ).ready(function() {
  $.each($(".kushit-flipped-products .view-grouping-content"), function(i, val) {
  	$(this).find('thead').first().show();
  });
  move_into_table();
});  
 
  
  
var move_into_table = function() {
	$.each($(".kushit-flipped-products caption a"), function(i, val) {
		$(this).parent().next().next().find('th').html(val);
	});
}
  
})(jQuery);