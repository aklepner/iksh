(function ($) {

$(document).ready(function() {
	//sizeContent();
	$("#edit-field-geofield-distance-origin").attr("placeholder", "Search by City or Zip Code");
	$("#edit-title").attr("placeholder", "Search by Name");
});

$(window).resize(sizeContent);

function sizeContent() {
    //var newHeight = $('html').height() - $("#header").height() + "px";
    //lconsole.log(newHeight);
    //$("#openlayers-container-openlayers-map").css("height", newHeight).css("min-height", newHeight);
  
    //$("#openlayers-map").css("height", newHeight);
    //$("svg").css("height", newHeight);
    //var sidebarHeight = $(document).height() + "px";
    //$('.region-sidebar-first').css("height", sidebarHeight);
}

})(jQuery);