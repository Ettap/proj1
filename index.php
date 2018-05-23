<?php
include( "functions.php" );
include( 'db_connect.php' );
session_start();
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
	<header></header>
	<div id="login" class="border-signup col-6">
		<fieldset>



			<?php
			if ( !isset( $_SESSION[ 'user' ] ) ) {
				?>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<fieldset>
					<legend>Login</legend>
					<label for="username">Username</label></br>
					<input type="username" name="username" id="username" required></br>
					<label for="password">Password</label></br>
					<input type="password" name="password" id="password" required>

					<input type="submit" name="login" value="Logga in!">
				</fieldset>
			</form>
			<?php } else { ?>


			<fieldset>
				<legend>Logout</legend>
				<div class="button3">
					<ul>
						<li><a href="index.php?logout=yes">Logga ut</a>
						</li>
					</ul>
				</div>
			</fieldset>
			<?php } ?>
		</fieldset>
		</form>
	</div>
	<div id="content">
		<h1>Find sexy singles in your area</h1>
		<!-- body code goes here -->
		<nav>
			<a href="login_page.php">Login page</a><br>
			<a href="sign_up_page.php">signup page WIP here</a><br>
			<a href="info.php" title='info'>View list of all profiles here</a><br>
			<a href='info.php?page=1' title='info'>View table of profiles (better ui)</a>
		</nav>
		<div class="col-3">

			<?php

			if ( isset( $_GET[ 'login' ] ) ) {
				include( "login_page.php" );
			} else {
				?>

			<fieldset>

				<div id="listingsAll">
					<legend>Users</legend>
					<?php
					$q_users = "SELECT * FROM users";

					$r_people = mysqli_query( $link, $q_users );

					while ( $row = mysqli_fetch_array( $r_people ) ) {
						?>
					<div class="listings col-5">
						<h4>
							<?php echo $row['username'];?> </h4>
						<p>
							<?php echo $row['description']; ?>
						</p>
						<p><a href="info.php?id=<?php echo $row['userID'];?>" title="info">Read more</a>
						</p>

					</div>
					<?php
					}
					};
					?>

				</div>
			</fieldset>
		</div>
	</div>
	<footer></footer>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-4.0.0.js"></script>
</body>
</html>