jQuery(document).ready(function($) {

	//shortcut to run all the material commands from https://github.com/FezVrasta/bootstrap-material-design
	$.material.init();

	/* Side Nav Toggles */
    jQuery(".sideNavSection").unbind('click').click(function(e){
		e.preventDefault();
		if (jQuery(this).hasClass("openItem")) {
			jQuery(".openItem").next(".sideMenuSlide").stop(true,true).slideToggle();
			jQuery(".openItem").removeClass("openItem");
		} else {
			jQuery(".openItem").next(".sideMenuSlide").stop(true,true).slideToggle();
			jQuery(".openItem").removeClass("openItem");
			jQuery(this).addClass("openItem");
			jQuery(this).next(".sideMenuSlide").stop(true,true).slideToggle();
		}
    });

	$('#carousel').carousel({
	  interval: 200000
	})


	//Twitter//
	jQuery(".peggyanne").tweet({
		username: "peggyanne",
		avatar_size: 68,
		count: 1,
		loading_text: "loading tweets..."
    });

});

