<?php 
include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dating site Project1</title>
	 <!--Desing css all changes made in here -->
	<link href="css/design.css" rel="stylesheet">
    <!-- Bootstrap ignore this -->
	<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
  </head>

	<body>
		<div id="signup" class="border-signup col-6">
			<fieldset>
				<form class="signup">
					<label for="username">Username</label></br>
					<input type="text" name="usernmae" placeholder="Username"></input></br>
					<label for="email">Email</label></br>
					<input type="email" name="email" placeholder="email@example.com"></input></br>
					<label for="postalcode">Postalcode</label></br>
					<input type="number" name="postalcode" placeholder="postalcode"></input></br>
					<label for="password">Password</label></br>
					<input type="password" name="pass" placeholder="password"></input></br>
					<input type="password" name="passCheck" placeholder="password again"></input></br>
				</form>
			</fieldset>
		</div>
	</body>
</html>