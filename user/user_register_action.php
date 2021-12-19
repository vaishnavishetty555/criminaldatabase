<html>

<head>
	<style>
		#title {
			background-color: Gray;
			font-size: 24px;
			color: white;
			margin-left: 20px;

		}

		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: Gray;
		}

		li {
			float: right;
		}

		#titlehead {
			float: left;
		}

		li a {
			display: block;
			color: white;
			font-size: 20px;
			text-align: center;
			padding: 16px 20px;
			margin-top: 10px;
			text-decoration: none;
		}

		li a:hover:not(.active) {
			background-color: #cccccc;
			color: black
		}



		#home_img {
			padding-left: 50px;
			padding-bottom: 10px;

		}

		#bottom_posts {

			display: grid;
			grid-template-columns: auto auto auto;
			padding: 10px;

		}

		#img_title {

			display: grid;
			grid-template-columns: auto auto auto;
			padding: 10px;

		}

		#posts {
			padding: 20px;
			font-size: 30px;
			text-align: center;

		}

		#card {
			background-color: #FFFFEF;
			margin: 150px;
			height: 150px;
			border-radius: 5px;
			box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
			text-align: center;
			font-size: 24px;
			padding: 25px;
			margin-left: 200px;
			margin-right: 200px;
		}

		#done {
			background-color: #00b300;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;

		}
	</style>
</head>

<body>



	<?php include("navbar.php"); ?>

	<?php
	include("../db/db.php");

	$fname = filter_input(INPUT_GET, 'fname');
	$lname = filter_input(INPUT_GET, 'lname');
	$email = filter_input(INPUT_GET, 'email');
	$password = filter_input(INPUT_GET, 'password');
	$phoneno = filter_input(INPUT_GET, 'phoneno');




	$sql = "INSERT INTO `user_detail`(`fname`, `lname`, `phoneno`, `email`, `password`) 
		VALUES ('$fname', '$lname','$phoneno', '$email','$password')";


	if ($conn->query($sql) === TRUE) {
		//echo "New record created successfully";
		echo "<div id='card'><p>User registered Successfully !!</p>
    <form action='user_login.php' method='get'><button type='submit' id='done'>Done</button></form></div>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

	?>

</body>





</html>