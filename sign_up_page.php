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
					<input type="text" name="usernmae" placeholder="Username" required></br>
					<label for="email">Email</label></br>
					<input type="email" name="email" placeholder="email@example.com" required></br>
					<label for="postalcode">Postalcode</label></br>
					<input type="number" name="postalcode" placeholder="postalcode" required></br>
					<label for="password">Password</label></br>
					<input type="password" name="passwordS" placeholder="password" required></br>
					<input type="password" name="confirm_passwordS" placeholder="password again" required></br>
                    <input type="submit" name="signup" value="Signup" onClick="validatePassword">
				</form>
			</fieldset>
<script>
var password = document.getElementById("passwordS") , confirm_password = document.getElementById("confirm_passwordS");
function checkUser(){

    if(username.value != <?php mysqli_query('SELECT FROM users WHERE $name') ?>){
       username.setCustomValidity('Username is taken!');
       }else{
       username.setCustomValidity('');   
       }
}
function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
<?php
if(isset($_POST['signup'])){
	$name = $_POST['username'];
    $email = $_POST['email'];
    $password1 = $_POST[password_hash(passwordS)];
    
$q_user_insert= "INSERT INTO `datingsait`.`users` 
(`id`, `name`, `email`, `password` , `img_desc`, `price`, `prod_group`
, `link`)
 VALUES 
(NULL, '$name', '$email', '$passwordS', '$img_desc1', '$prod_price1', '$group1', '$link2')";
			 //echo $q_user_insert;
$r_user_insert = mysqli_query($link, $q_user_insert);
	
	if(!$r_user_insert){
		echo "<p>The insert failed <br>" .
		mysqli_error($link). "</p>";
	} else {
		echo "<p>A new user has ben added!</p>";	
	}
}
?>
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

		</div>
	</body>
</html>