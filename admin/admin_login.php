<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Login and Registration Form</title>
   <link rel="stylesheet" href="../css/home.css">
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
<div class="bg">

<div class="wrapper">
    <div class="form-inner">
        <h2 style="font-style:italic; font-size:30px;">Admin Login</h2>
            <form action="admin_login_action.php" method = "get" class="login">
               <div class="field">
                  <input type="email" pattern=".{1,}" name="adminemail" placeholder="Email Address" required>
               </div>
               <div class="field">
                  <input type="password" pattern=".{1,}" name="adminpass" placeholder="Password" required>
               </div>

               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" value="Login">
               </div>
</form>
</div>
</div>
</div>
</body>
</html>