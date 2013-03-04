<?php
ini_set("display_errors", "1");
include_once('./db.php');
include_once('./room_shape.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>CPS Seat Picker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">
  </head>
  <body>
  	<div class="container-fluid">
  		<div class="row-fluid">
  			<div id="left-container" class="span6">
  				<div id="4th-floor">  					
  					<h2>4th floor - East Wing</h2>
  					<div id="4th-floor-top-rooms" class="row-fluid">
  						<?php showRoom(4424, TRUE);?>
  						<?php showRoom(4423);?>
  						<?php showRoom(4422);?>
  					</div>
  					<div class="clearfix"></div>
  					<div id="4th-floor-bottom-rooms" class="rooms-flipped row-fluid">
  						<?php showRoom(4425);?>
  						<?php showRoom(4426, TRUE, 4, TRUE);?>
  						<?php showRoom(4427, TRUE, 4, TRUE);?>
  					</div>
  				</div>
  				<div id="2nd-floor">
  					<h2>2nd floor</h2>
  					<div id="2nd-floor" class="row-fluid">
  						<div class="span2"></div>
  						<div class="2nd-floor-room">
  							<?php showRoom(2201, TRUE, 8);?>	
  						</div>  						
  					</div>
  				</div>		
  			</div>
  			<div id="right-continaer" class="span4">
  				<div id="student-table">
  					<?php include('./table.php');?>
  				</div>
  				<div id="generating-policy">
  					<h2>Generating Policy</h2>
  				</div>
  				<div id="generate-box">
  					<button class="btn btn-large btn-primary" type="button">Generate!</button>
  				</div>
  							
  			</div>
  		</div>
  	</div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>