$(".btn-mini").click(function() {
	var prefix = '#' + this.id.split("-")[0] + '-seat';
	var name4 = prefix + '4';
	var name5 = prefix + '5';	
	
	if (this.value == '3') {
		$(name4).addClass("hidden");
		$(name5).addClass("hidden");
	} else if (this.value == '4') {
		$(name4).removeClass("hidden");
		$(name5).addClass("hidden");		
	} else {
		$(name4).removeClass("hidden");
		$(name5).removeClass("hidden");
	}
});

$.each($('#4th-floor .btn-mini'), function() {
	if(this.value == 4) {
		this.click();
	}
});

Array.prototype.shuffle = function() {
	var s = [];
	while (this.length) {
		s.push(this.splice(Math.random() * this.length, 1)[0]);
	}
	while (s.length) {
		this.push(s.pop());
	}
	return this;
}

/*
!function ($) {

  "use strict"; // jshint ;_;

}(window.jQuery);
*/