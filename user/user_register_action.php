<html>

<head>
	
</head>

<body>



	

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
		
	echo "<script>alert('User registered Successfully');
	window.location.href='/criminaldatabase/index.php'</script>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

	?>

</body>





</html>