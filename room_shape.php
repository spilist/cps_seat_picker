<?php
function showRoom($number, $active=FALSE, $size=4, $flipped=FALSE){
	if ($active==TRUE) {
		echo 
		'<div id="room-'.$number.'" class="active-room span'.$size.'">
			<h4 class="room-label">'.$number.'</h4>
			<div id="'.$number.'-radio" class="btn-group" data-toggle="buttons-radio">
				<label class="radio-description"># of members</label>			
				<button type="button" id="'.$number.'-radio-3" class="btn btn-mini" value="3">3</button>
				<button type="button" id="'.$number.'-radio-4" class="btn btn-mini" value="4">4</button>
				<button type="button" id="'.$number.'-radio-5" class="btn btn-mini" value="5">5</button>
			</div>
			<div id="'.$number.'-box" class="room-shape">';
		if ($flipped==FALSE) {
			echo
			'	<div class="seats seats-1st clearfix">
					<div id="'.$number.'-seat1" class="seat-box seat-left">Seat1</div>
					<div id="'.$number.'-seat2" class="seat-box seat-right">Seat2</div>				
				</div>
				<div class="seats seats-2nd clearfix">
					<div id="'.$number.'-seat3" class="seat-box seat-left">Seat3</div>
					<div id="'.$number.'-seat4" class="seat-box seat-right">Seat4</div>				
				</div>
				<div class="seats seats-3rd clearfix">
					<div id="'.$number.'-seat5" class="seat-box seat-left">Seat5</div>
				</div>				
			</div>
		</div>';
		}
		else {
			echo
			'	<div class="seats seats-3rd clearfix">
					<div id="'.$number.'-seat5" class="seat-box seat-left">Seat5</div>
				</div>				
				<div class="seats seats-2nd clearfix">
					<div id="'.$number.'-seat3" class="seat-box seat-left">Seat3</div>
					<div id="'.$number.'-seat4" class="seat-box seat-right">Seat4</div>				
				</div>
				<div class="seats seats-1st clearfix">
					<div id="'.$number.'-seat1" class="seat-box seat-left">Seat1</div>
					<div id="'.$number.'-seat2" class="seat-box seat-right">Seat2</div>				
				</div>
			</div>
		</div>';
		}
			
	}
	else {
		echo 
		'<div id="room-'.$number.'" class="inactive-room span'.$size.'">
			<h4 class="room-label">'.$number.'</h4>
			<div class="hidden-radio"></div>
			<div id="'.$number.'-box" class="room-shape"></div>
		</div>';
	}
	
}
?>

