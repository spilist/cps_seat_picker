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

function resetAll() {
	$('.btn-primary').button('reset');
	$('.resettable').addClass('none');	
}

function generate() {
	$('.btn-primary').button('loading');
	var num_seats = 0;
	$.each($('.btn.active'), function() {
		num_seats += parseFloat(this.value);
	});
	if (num_students > num_seats) {
		resetAll();
		$('#generate-status-error').removeClass('none');
		$('#info-too-few-seats').removeClass('none');
	}
	resetAll();	
	$('#generate-status-success').removeClass('none');
}

$.each($('#4th-floor .btn-mini'), function() {
	if(this.value == 4) {
		this.click();
	}
});

/*
!function ($) {

  "use strict"; // jshint ;_;

}(window.jQuery);
*/