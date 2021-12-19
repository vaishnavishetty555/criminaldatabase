<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Login and Registration Form</title>
   <link rel="stylesheet" href="css/home.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
   </script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
   </script>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-light ">
      <a class="navbar-brand" href="#">Criminal Database</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
         aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
            <li class="nav-item active">
               <a class="nav-link" href="#">USER <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="user/admin_login.php">ADMIN</a>
            </li>
            </li>

         </ul>
      </div>
   </nav>
   <div class="wrapper">
      <div class="title-text">
         <div class="title login">
            Login Form
         </div>
         <div class="title signup">
            Signup Form
         </div>
      </div>
      <div class="form-container">
         <div class="slide-controls">
            <input type="radio" name="slide" id="login" checked>
            <input type="radio" name="slide" id="signup">
            <label for="login" class="slide login">Login</label>
            <label for="signup" class="slide signup">Signup</label>
            <div class="slider-tab"></div>
         </div>
         <div class="form-inner">
            <form action="user/user_login_action.php" method = "get" class="login">
               <div class="field">
                  <input type="email" pattern=".{1,}" name="email" placeholder="Email Address" required>
               </div>
               <div class="field">
                  <input type="password" pattern=".{1,}" name="password" placeholder="Password" required>
               </div>

               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" value="Login">
               </div>

               <div class="signup-link">
                  Not a member? <a href="">Signup now</a>
               </div>
            </form>
            <form action="user/user_register_action.php" method="get" class="signup">
               <div class="field">
                  <input type="email" pattern=".{1,}"  name="email" placeholder="Email Address" required>
               </div>
               <div class="field">
                  <input pattern=".{1,}"  name="fname"  type="text" placeholder="Enter First Name" required>
               </div>
               <div class="field">
                  <input type="text" pattern=".{1,}" name="lname" placeholder="Enter Last Name" required>
               </div>
               <div class="field">
                  <input type="password" pattern=".{1,}"  name="password" placeholder="Password" required>
               </div>
			   <div class="field">
                  <input type="text" pattern=".{1,}" required name="phoneno" placeholder=" phone number">
               </div>
               
               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" value="Submit">
               </div>
            </form>
         </div>
      </div>
   </div>
   <script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (() => {
         loginForm.style.marginLeft = "-50%";
         loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (() => {
         loginForm.style.marginLeft = "0%";
         loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (() => {
         signupBtn.click();
         return false;
      });

   </script>

<!-- <body class="bg">
		
	
		
		<ul>
				<li id="titlehead"style="text-decoration: underline;text-decoration-color:white;"><p id="title" style="font-size:30px;">Criminal Info</p></li>
				<li><a href="user/about_us.php">About us</a></li>
				<li><a class="active" href="user/admin_login.php">Admin</a></li>
				<li><a href="user/user_register.php">User register</a></li>
				<li><a href="user/index.php">Home</a></li>
			</ul>
				
			<div id=bottom_posts>
			
				<div id=posts>
					<h2 style="font-size:28px; margin-top:25% "> Criminal Info </h2>
					<div id=img_title>
						<img src="css\imgs\criminalimg.png">
						<p style="font-size:20px;">Easy criminal details management</p>
					</div>
					</div>
				<div id=posts>
					<h2 style="font-size:28px;"> Traffic Crimes</h2>
					<div id=img_title>
						<img src="css\imgs\trafficimg.png">
						<p style="font-size:20px;">This system also manages the crimes related to traffic crimes</p>
					
					</div>
				</div>
				<div id=posts>
					<h2 style="font-size:28px;"> Easy Access to Crime Records </h2>
					<div id=img_title>
						<img src="css\imgs\searchimg.png">
						<p style="font-size:20px;">Any crime records can be accessed in few seconds</p>
					
					</div>
				</div>
				</div>
		</body> -->
		
		
				
</body>

</html>