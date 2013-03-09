$(".btn-mini").click(function() {
	var prefix = '#' + this.id.split("-")[0] + '-seat';
	var postfix_label = '-label';
	var postfix_box = '-box';
	var name4_label = prefix + '4' + postfix_label;
	var name4_box = prefix + '4' + postfix_box;
	var name5_label = prefix + '5' + postfix_label;
	var name5_box = prefix + '5' + postfix_box;
	
	if (this.value == '3') {
		$(name4_label).addClass("hidden");
		$(name4_box).addClass("hidden");
		$(name5_label).addClass("hidden");
		$(name5_box).addClass("hidden");
	} else if (this.value == '4') {
		$(name4_label).removeClass("hidden");
		$(name4_box).removeClass("hidden");
		$(name5_label).addClass("hidden");
		$(name5_box).addClass("hidden");
	} else {
		$(name4_label).removeClass("hidden");
		$(name4_box).removeClass("hidden");
		$(name5_label).removeClass("hidden");
		$(name5_box).removeClass("hidden");
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