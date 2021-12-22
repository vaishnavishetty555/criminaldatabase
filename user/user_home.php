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
	<nav class="navbar navbar-expand-lg navbar-light " style="width: 100%;">
		<!-- <a class="navbar-brand" href="#">Criminal Database</a> -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">

				<li class="nav-item">
					<button type="button" class="btn btn-light" onclick="location.href='index.php'">
						<h3 style=" cursor: pointer;text-decoration: none; text-align:center;">Logout
					</button>
		</div>

		</li>
		</li>
		</ul>
		</div>
	</nav>
	<div class="container d-flex align-items-center flex-column" style="margin-top: 30px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div><button type="button" class="btn btn-light" onclick="location.href='add_general_case.php'">
							<h3 style="cursor: pointer;text-decoration: none;">Add General Crime Record
						</button></div>
				</div>
				<div class="col-lg-6">
					<div><button type="button" class="btn btn-light" onclick="location.href='add_traffic_case.php'">
							<h3 style=" cursor: pointer;text-decoration: none;">Add Traffic Crime Record
						</button></div>
				</div>
				<div class="container d-flex align-items-center flex-column" style="margin-top: 100px;">
				</div>
			</div>
		</div>

		<section id="general_section" style="margin-bottom: 200px;">
			<h3>All General Cases</h3>
			<div>1.case on the qiew weiwueiweu wjehjwehjwhejwehjwehjw wjehjwhejweh</div>
			<div>1.case on the qiew weiwueiweu wjehjwehjwhejwehjwehjw wjehjwhejweh</div>
			<div>1.case on the qiew weiwueiweu wjehjwehjwhejwehjwehjw wjehjwhejweh</div>
			<div>1.case on the qiew weiwueiweu wjehjwehjwhejwehjwehjw wjehjwhejweh</div>
		</section>
		<section id="traffic_section" style="margin-bottom: 200px;">
			<h3>All Traffic Cases</h3>
			<div>1.case on the qiew weiwueiweu wjehjwehjwhejwehjwehjw wjehjwhejweh</div>
			<div>1.case on the qiew weiwueiweu wjehjwehjwhejwehjwehjw wjehjwhejweh</div>
			<div>1.case on the qiew weiwueiweu wjehjwehjwhejwehjwehjw wjehjwhejweh</div>
			<div>1.case on the qiew weiwueiweu wjehjwehjwhejwehjwehjw wjehjwhejweh</div>
		</section>
		<!--<section id="traffic_section" style="margin-top: 100px;margin-bottom: 200px;">
		<h3>Traffic</h3>
		<div class="container">
			<form action="add_traffic_case_action.php" method="get">-->



		<!--<div class="row">
					<div class="col-25">
						<label for="crimename">Crime Name</label>
					</div>
					<div class="col-75">
						<input type="text" pattern=".{1,}" required name="crimename" placeholder="Crime Name...">
					</div>
				</div>

				<div class="row">
					<div class="col-25">
						<label for="accusedname">Accused Name</label>
					</div>
					<div class="col-75">
						<input type="text" pattern=".{1,}" required name="accusedname" placeholder="Accused Name...">
					</div>
				</div>

				<div class="row">
					<div class="col-25">
						<label for="description">Case description</label>
					</div>
					<div class="col-75">
						<input type="text" pattern=".{1,}" required name="description" placeholder="Description">
					</div>
				</div>

				<div class="row">
					<div class="col-25">
						<label for="date">Case Date</label>
					</div>
					<div class="col-75">
						<input type="date" pattern=".{1,}" required name="casedate" placeholder="Date">
					</div>
				</div>


				<div class="row">
					<input type="submit" style="margin-right:600px; margin-top:10px;" value="Submit">
				</div>
			</form>-->



	</div>
	</section>

</body>

</html>