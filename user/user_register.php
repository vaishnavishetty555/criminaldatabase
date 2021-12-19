<html>
	<head>
		<style>
			.bg{
			background-image:url("imgs/officer.jpg");
			height:1000px;
			background-position:center;
			background-repeat:no-repeat;
			background-size:cover;
			opacity:0.8;
		   }
		   
			#title{
				background-color:transparent;
				font-size:24px;
				color:white;
				margin-left:20px;
				
				}
				
			ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: transparent;
			}
			
			li {
				float: right;
			}
			
			#titlehead{
				float: left;
			}

			li a {
				display: block;
				color: white;
				font-size:20px;
				text-align: center;
				padding: 16px 20px;
				margin-top:10px;
				text-decoration: none;
			}

			li a:hover:not(.active) {
				background-color: #00004d;
				color:white;
			}

			
			
			* {
				box-sizing: border-box;
			}

			input[type=text], select, textarea,input[type=password],input[type=email],input[type=number],input[type=date] {
				margin-right:400px;
				text-align:center;
				width: 40%;
				padding: 12px;
				border: 1px solid #ccc;
				border-radius: 4px;
				resize: vertical;
			}

			label {
				font-size:18px;
				margin-left:450px;
				padding: 12px 12px 12px 0;
				display: inline-block;
			}

			input[type=submit] {
				background-color: #00b300;
				color: white;
				padding: 12px 20px;
				border: none;
				border-radius: 4px;
				cursor: pointer;
				float: right;
			}

			input[type=submit]:hover {
				background-color: #4dff4d;
			}

			.container {
			    
				border-radius: 5px;
				background-color: transparent;
				padding: 20px;
			}
			
			.cont{
				background-position:center;
				 background: rgb(0, 0, 0); 
				background: rgba(0, 0, 0, 0.5); 
				color: #f1f1f1;
				
			}
			

			.col-25 {
				float: left;
				width: 50%;
				margin-top: 6px;
			}

			.col-75 {
				float: left;
				width: 50%;
				margin-top: 6px;
			}

			/* Clear floats after the columns */
			.row:after {
				content: "";
				display: table;
				clear: both;
			}

			/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
			@media screen and (max-width: 600px) {
				.col-25, .col-75, input[type=submit] {
					width: 100%;
					margin-top: 0;
				}
			}
			
			
		</style>
	</head>
	
	<body>
		
		<div class="bg">
		<div class="cont">
<?php		include("navbar.php");?>		
		
		
		<h2 style="font-style:italic; font-size:30px;padding-left:30px;">User register</h2>
		
		<div style="text-align:center;"> <img src="imgs\policeimg.png">  </div>
		
		<div class="container">
			<form action="user_register_action.php" method = "get">
				
				<div class="row">
					<div class="col-25">
						<label for="fname">First Nme</label>
					</div>
					<div class="col-75">
						<input type="text" pattern=".{1,}" required name="fname" placeholder="First Name">
					</div>
				</div>
				
				<div class="row">
					<div class="col-25">
						<label for="lname">Last Name</label>
					</div>
					<div class="col-75">
						<input type="text" pattern=".{1,}" required name="lname" placeholder="Last Name">
					</div>
				</div>
				

                <div class="row">
					<div class="col-25">
						<label for="email">Email</label>
					</div>
					<div class="col-75">
						<input type="email" pattern=".{1,}" required name="email" placeholder="Email">
					</div>
				</div>

				<div class="row">
					<div class="col-25">
						<label for="password">Password</label>
					</div>
					<div class="col-75">
						<input type="password" pattern=".{1,}" required name="password" placeholder=" password...">
					</div>
				</div>
			
				
				<div class="row">
					<div class="col-25">
						<label for="phoneno">Phone Number</label>
					</div>
					<div class="col-75">
						<input type="text" pattern=".{1,}" required name="phoneno" placeholder=" phone no...">
					</div>
				</div>
				
			
				
			
				<div class="row">
					<input type="submit" style="margin-right:600px; margin-top:10px;" value="Submit">
				</div>
			</form>
			
			
			
		</div>
		
		</div>
		</div>
		
	</body>
	
	
	


</html>