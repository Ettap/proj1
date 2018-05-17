<?php
include("functions.php");
?>

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

    <p><a href='index.php' title='main'>Main</a></p>

		<div id="login" class="border-signup col-6">
			<fieldset>



          <?php
if(!isset($_SESSION['user'])){?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<fieldset>
    <legend>Login</legend>
    <label for="username">Username</label>
    <input type="username" name="username" id="username" required>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>

    <input type="submit" name="login" value="Logga in!">
    </fieldset>
</form>
<?php } else { ?>


	<fieldset>
    <legend>Logout</legend>
    <div class="button3">
    <ul>
    <li><a href="index.php?logout=yes">Logga ut</a></li>
    </ul>
    </div>
    </fieldset>
<?php } ?>
    </fieldset>
</form>
</div>
</body>
</html>
