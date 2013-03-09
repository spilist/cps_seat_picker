function resetStatus() {
	$('.btn-primary').button('reset');
	$('.resettable').addClass('none');	
}

function getNumStudents() {
	var num_students = 0;
	$.each($('tbody').find('tr'), function() {
		num_students++;
	});
	return num_students;
}

function getNumSeats() {
	var num_seats = 0;
	$.each($('.btn.active'), function() {
		num_seats += parseFloat(this.value);
	});
	return num_seats;
}

function isError() {
	var num_students = getNumStudents();
	var num_seats = getNumSeats();
	if (num_students > num_seats) {
		$('#generate-status-error').removeClass('none');
		$('#info-too-few-seats').removeClass('none');
		var info = "The number of seats("+num_seats+")are less than the number of students("+num_students+").";
		$('#info-too-few-seats').text(info);
		return true; 
	}
	else {
		return false;
	}
}

function getStudentArray() {
	var student_arr = new Array(getNumStudents());
	for (var index = 0; index < student_arr.length; ++index) {
		var sid = "#student" + (index+1);
		student_arr[index] = {
			name: $(sid).find('.name').text(),
			pic_src: $(sid).find('.img-rounded').attr("src")
		}
	}
	return student_arr;
}

function getSeatsArray() {
	var seat_arr = new Array(getNumSeats());
	var index = 0;
	$.each($('.seat-container:not(.hidden)'), function() {
		seat_arr[index] = {
			label: "#"+this.id+"-label",
			box: "#"+this.id+"-box"
		}
		index++;
	});
	return seat_arr;
}

function generate() {
	resetStatus();
	if (isError() == false) {		
		var student_arr_random = getStudentArray().shuffle();
		var seat_arr_random = getSeatsArray().shuffle();
		for (var index = 0; index < student_arr_random.length; ++index) {			
			$(seat_arr_random[index].box).html('<img src="'+student_arr_random[index].pic_src+'"></img>');
			$(seat_arr_random[index].label).text(student_arr_random[index].name);			
		}
		
		var faders = $('.seat-container:not(.hidden), #generate-status').hide();
		var i=0;
		function awesomeFaders() {
			$(faders[i++]).delay(500).fadeIn(100, arguments.callee);			
		};
		awesomeFaders();			
		
		$('#generate-status-success').removeClass('none');		
	}
}