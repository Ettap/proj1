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
				<form class="signup" method="post">
					<label for="username">Username</label></br>
						<input type="name" name="username" placeholder="Username" required></br>
						<input type="radio" name="gender1" value="1" class="gender"> Male<br>
						<input type="radio" name="gender1" value="2" class="gender"> Female<br>
					<label for="email">Email</label></br>
						<input type="email" name="email" placeholder="email@example.com" required></br>
					<label for="postalcode">Postalcode</label></br>
						<input type="number" name="postnum" placeholder="postalcode" required></br>
					<label for="password">Password</label></br>
						<input type="password" name="passwordS" placeholder="password" required></br>
						<input type="password" name="confirm_passwordS" placeholder="password again" required></br>
					<label for="age">Age</label></br>
						<input type="number" name"age" placeholder="age" required></br>
					<label for="income">Income</label></br>&nbsp;
						<input type="number" name="income" placeholder="income/year" required ></br>
					<label for="currency">Currency</label></br>
					!insert currency here! </br>
					<label>Seeking</label></br>
						 <input type="radio" name="gender2" value="1" class="gender"> Male</br>
						 <input type="radio" name="gender2" value="2" class="gender"> Female</br>
						 <input type="radio" name="gender2" value="3" class="gender"> both</br>


                    <input type="submit" name="insert" value="Signup" onClick="validatePassword">
				</form>
			</fieldset>
<script>
	var password = document.getElementById("passwordS") , 
	confirm_password = document.getElementById("confirm_passwordS");
	function checkUser(){

		if(username.value = <?php mysqli_query('SELECT FROM users WHERE $username') ;?>){
		   username.setCustomValidity("Username is taken!");
		   }else{
		   username.setCustomValidity('');   
		   }
	}
	function validatePassword(){
	  if(passwordS.value != confirm_password.value) {
		confirm_password.setCustomValidity("Passwords Don't Match");
	  } else {
		confirm_password.setCustomValidity('');
		  $.ajax( { })
	  }
	}

	password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;
</script>
<?php
			if(isset($_POST['insert_new'])){
				$username = $_POST['username'];
				$email = $_POST['email'];
				$password1 = password_hash($_POST['passwordS'], PASSWORD_DEFAULT);
				$postnum = $_POST['postnum'];
				$gender = $_POST['gender1.value'];
				$seeking = $_POST['gender2.value'];
				$income = $_POST['income'];
				$age = $_POST['age'];
				
				
			$q_user_insert= "INSERT INTO `datingsite`.`users` 
			(`userID`, `username`, `email`, `password` ,´postnum´ , `pay`, `currency`, `seeking`
			, `gender` , `age`)
			 VALUES 
			(NULL, '$username', '$email', '$password1', '$postnum' ,'$income' , 'NULL' , '$seeking' 
			,'$gender', '$age')";
						 echo $q_user_insert;
			$r_user_insert = mysqli_query($link, $q_user_insert);

				if(!$r_user_insert){
					echo "<p>The insert failed <br>" .
					mysqli_error($link). "</p>";
				} else {
					echo "<p>A new user has ben added!</p>";	
				}
			}
		?>
		</div>
	</body>
</html>