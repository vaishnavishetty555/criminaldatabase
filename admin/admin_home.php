<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/home.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
	</script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>

<?php include("../db/db.php");?>
		<section id="general_section" style="margin-bottom: 200px;">
			<h3>All General Cases</h3>
			<table class="table table-bordered">
				<thead class="bg-dark text-white">
					<tr>
						<th>S.no</th>
						<th>Case name</th>
						<th>Accused name</th>
						<th>Case description</th>

						<th>Court</th>
						<th>status</th>
                        <th>Action</th>
					</tr>
				</thead>
				<tbody class="bg-white">
<?php
session_start();
$sql="SELECT `case_id`,`case_name`,`accused_name`,`description`,`court_id`,`status` FROM `case_detail` 
WHERE `section_id`=1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$count=1;
	while($row = $result->fetch_assoc()) {
echo '	<tr>
<td>'.$count.'</td>
<td>'.$row['case_name'].'</td>
<td>'.$row['accused_name'].'</td>
<td>'.$row['description'].'</td>
<td>'.$row['court_id'].'</td>
<td>'.$row['status'].'</td>
<td><a href="editcase.php?id='.$row['case_id'].'">Edit</a></td>
</tr>';
$count++;
	}
}else{
	echo "<tr><td></td><td></td><td><h4>No case available</h4></td><td></td><td></td><td></td></tr>";
}
?>
				
				</tbody>

			</table>
			
		</section>
<section id="traffic_section" style="margin-bottom: 200px;">
			<h3>All Traffic Cases</h3>
			<table class="table table-bordered">
				<thead class="bg-dark text-white">
					<tr>
						<th>S.no</th>
						<th>Case name</th>
						<th>Accused name</th>
						<th>Case description</th>

						<th>Court</th>
						<th>status</th>
						<th>Action</th>

					</tr>
				</thead>
				<tbody class="bg-white">
<?php

$sql="SELECT `case_id`,`case_name`,`accused_name`,`description`,`court_id`,`status` FROM `case_detail` 
WHERE  `section_id`=2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$count=1;
	while($row = $result->fetch_assoc()) {
echo '	<tr>
<td>'.$count.'</td>
<td>'.$row['case_name'].'</td>
<td>'.$row['accused_name'].'</td>
<td>'.$row['description'].'</td>
<td>'.$row['court_id'].'</td>
<td>'.$row['status'].'</td>
<td><a href="editcase.php?id='.$row['case_id'].'">Edit</a></td>
</tr>';
$count++;
	}
}else{
	echo "<tr><td></td><td></td><td><h4>No case available</h4></td><td></td><td></td><td></td></tr>";
}
?>
				
				</tbody>

			</table>
		</section>
</body>
</html>