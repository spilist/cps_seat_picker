$(".btn-mini").click(function() {
	if (this.value == '3') {
		var name = '#' + this.id.split("-")[0] + '-seat4';
		$(name).addClass("hidden");
		var name = '#' + this.id.split("-")[0] + '-seat5';
		$(name).addClass("hidden");
	} else if (this.value == '4') {
		var name = '#' + this.id.split("-")[0] + '-seat4';
		$(name).removeClass("hidden");
		var name = '#' + this.id.split("-")[0] + '-seat5';
		$(name).addClass("hidden");
	} else {
		var name = '#' + this.id.split("-")[0] + '-seat4';
		$(name).removeClass("hidden");
		var name = '#' + this.id.split("-")[0] + '-seat5';
		$(name).removeClass("hidden");
	}
});

function generate() {	
	var num_seats = 0;
	for (var i = 0; i < 4; ++i) {
		num_seats += parseFloat($('.btn.active')[i].value);
	}
	alert(num_students);
	alert(num_seats);
}

/*
!function ($) {

  "use strict"; // jshint ;_;

}(window.jQuery);
*/