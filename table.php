<?php
ini_set("display_errors", "1");
include_once ('./db.php');
?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Picture</th>
			<th>Floor</th>
			<th>Program</th>
			<th>Research Group</th>
		</tr>	
	</thead>
	<tbody>
		<?php
		$sql = "SELECT * FROM `students`";
		$result = mysql_query($sql);
		$index = 1;
		while ($row = mysql_fetch_array($result)) {			
			echo 
			'<tr>
				<td>'.$index++.'</td>
				<td>'.$row['name'].'</td>
				<td><img class="img-rounded" src="'.$row['pic_url'].'"></td>
				<td>'.$row['floor'].'</td>
				<td>'.$row['program'].'</td>
				<td>'.$row['research_group'].'</td>
			</tr>';
		}
		?>
	</tbody>
</table>

