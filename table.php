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
			if ($row['status']=='1') {
				echo 
				'<tr id="student'.$index.'">
					<td>'.$index++.'</td>
					<td class="name">'.$row['name'].'</td>
					<td><img class="img-rounded" src="img/profiles'.$row['pic_url'].'"></td>
					<td class="floor">'.$row['floor'].'</td>
					<td class="program">'.$row['program'].'</td>
					<td class="research_group">'.$row['research_group'].'</td>
				</tr>';	
			}			
		}
		?>
	</tbody>
</table>
<script>
	var num_students = <?php echo $index-1 ?>;
</script>
