<?php
function showRoom($room, $active=FALSE, $size='small', $flipped=FALSE) {
	if ($active==TRUE) {
		echo 
		'<div id="room-'.$room.'" class="room active-room room-size-'.$size.'">
			<h4 class="room-label">'.$room.'</h4>
			<div id="'.$room.'-radio" class="btn-group" data-toggle="buttons-radio">
				<label class="radio-description"># of members</label>			
				<button type="button" id="'.$room.'-radio-3" class="btn btn-mini" value="3">3</button>
				<button type="button" id="'.$room.'-radio-4" class="btn btn-mini" value="4">4</button>
				<button type="button" id="'.$room.'-radio-5" class="btn btn-mini" value="5">5</button>
			</div>
			<div id="'.$room.'-box" class="room-shape">';
		if ($flipped==FALSE) {
			showSeats($room, 1);
			showSeats($room, 2);
			showSeats($room, 3);
		}
		else {
			showSeats($room, 3);
			showSeats($room, 2);
			showSeats($room, 1);		
		}
		echo
		'	</div>
		</div>';	
	}
	else {
		echo 
		'<div id="room-'.$room.'" class="room inactive-room room-size-'.$size.'">
			<h4 class="room-label">'.$room.'</h4>
			<div class="hidden-radio"></div>
			<div id="'.$room.'-box" class="room-shape"></div>
		</div>';
	}	
}

function showSeats($room, $number) {
	if ($number==1) {
		echo
		'<div class="seats seats-1st clearfix">
			<div id="'.$room.'-seat1" class="seat-container">
				<label id="'.$room.'-seat1-label" class="seat-label">Seat1</label>
				<div id="'.$room.'-seat1-box" class="seat-box"></div>
			</div>
			<div id="'.$room.'-seat2" class="seat-container">
				<label id="'.$room.'-seat2-label" class="seat-label">Seat2</label>
				<div id="'.$room.'-seat2-box" class="seat-box"></div>
			</div>
		</div>';
	}
	else if ($number==2) {
		echo
		'<div class="seats seats-2nd clearfix">
			<div id="'.$room.'-seat3" class="seat-container">
				<label id="'.$room.'-seat3-label" class="seat-label">Seat3</label>
				<div id="'.$room.'-seat3-box" class="seat-box"></div>
			</div>
			<div id="'.$room.'-seat4" class="seat-container">
				<label id="'.$room.'-seat4-label" class="seat-label">Seat4</label>
				<div id="'.$room.'-seat4-box" class="seat-box"></div>
			</div>
		</div>';
	}
	else if ($number==3) {
		echo
		'<div class="seats seats-3rd clearfix">
			<div id="'.$room.'-seat5" class="seat-container">
				<label id="'.$room.'-seat5-label" class="seat-label">Seat5</label>
				<div id="'.$room.'-seat5-box" class="seat-box"></div>
			</div>			
		</div>';
	}
}
?>

