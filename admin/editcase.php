<html>

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
				<h2 style="font-style:italic; font-size:30px;">Edit Record</h2>
				<form action="editcase_action.php" method="get" class="login">
                    <div class="field mb-3">
                        <input type="hidden" name="caseid" value="<?php echo $_GET['id'] ?>"/>
                        <label for="courtid">Court</label>
						<select required name="courtid" class="form-control mb-2" placeholder="courtid">
                            <?php
                            include("../db/db.php");
                            $sql="SELECT * FROM `court`";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $count=1;
                                while($row = $result->fetch_assoc()) {
                                    echo "<option value='".$row['court_id']."'>".$row['location']."</option>";
                                }

                            }
                            ?>
                            </select>
					</div>
                    <div class="field">
                    <label for="status">Status</label>
                        <select name="status" id="status"  class="form-control"required >
                            <option value="1">True</option>
                            <option value="0">False</option>

                        </select>
					</div>

					<div class="field btn">
						<div class="btn-layer"></div>
						<input type="submit" value="Submit">
					</div>


				</form>
			</div>
		</div>


	</div>



</body>





</html>