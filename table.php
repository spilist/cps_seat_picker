<?php
ini_set("display_errors", "1");
include_once ('./db.php');
?>
<table class="table">
	<tr>
		<td>Name</td>
		<td>Floor</td>
		<td>Program</td>
		<td>Research Group</td>
	</tr>
	<?php
	$sql = "SELECT * FROM `students`";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result)) {
		echo '<tr>';
		echo '<td>' . $row['name'] . '<img width="50px" src="' . $row['pic_url'] . '"></td>';
		echo '<td>' . $row['floor'] . '</td>';
		echo '<td>' . $row['program'] . '</td>';
		echo '<td>' . $row['research_group'] . '</td>';
		echo '</tr>';
	}
	?>
</table>

