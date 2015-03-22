(function ($) {
  
$( document ).ready(function() {
  $(".prod-link").parent().parent().mouseover(function() {
  	$(".prod-container").hide();
  	$(this).parent().parent().next().show()
  });
  
  $(".prod-link").click(function() {
  	return false;
  });
  
});  


})(jQuery);