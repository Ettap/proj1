<?php
include("functions.php");
include('db_connect.php');
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

            if(isset($_GET['login'])){
              include ("login_page.php");
            } else {
    ?>

		<fieldset>
			<div class=' peoplecontainer whitebg'>
				<?php
					$q_users = "SELECT * FROM users";

					$r_people = mysqli_query($link, $q_users);

					while($row = mysqli_fetch_array($r_people)) {
				?>

					<h4><?php echo $row['username'];?> </h4>
					<p><a href="info.php?id=<?php echo $row['id'];?>" title="info">Read more</a></p>
				<?php
      }};
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
