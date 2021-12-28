<html>
	
	
	<body>
		
	
		

<?php
		include("../db/db.php");
		
		$email = filter_input(INPUT_GET,'email');
		$password = filter_input(INPUT_GET,'password');
		
		$sql = "SELECT * FROM user_detail WHERE email='$email' AND password='$password'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			session_start();
			$_SESSION["useremail"]=$email;
			header("Location:user_home.php");	
            
		}
		
		
		 else {
			 echo "<script>alert('Invalid username/password');
			 window.location.href='/criminaldatabase/index.php'</script>";
			// echo "<div id='card'><p>Invalid Id or Password!!!</p><p>Try again with valid Id and Password</p>
			// <form action='user_login.php' method='get'><button type='submit' id='done'>Done</button></form></div>";
		
		}
?>
		
</body>
	
	
	


</html>