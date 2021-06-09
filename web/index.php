<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Record plus.</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="img">
		<?php
			echo "<img src='pic/bg.svg' />";
		?>
		</div>
		<div class="login-content">
			<form action=
			<?php
				echo "login.php";
			?>>
			<?php
				echo "<img src='pic/avatar.svg' />";
			?>
				<h2 class="title">RECORD PLUS.</h2>
            	<input type="submit" class="btn" value="Start">
            </form>
        </div>
    </div>
</body>
</html>
