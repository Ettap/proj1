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
				<form class="signup" method="post" onsubmit="validateUser()">
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
						<input type="number" name="Uage" placeholder="age" required></br>
					<label for="income">Income</label></br>&nbsp;
						<input type="number" name="income" placeholder="income/year" required ></br>
					<label for="currency">Currency</label></br>
					!insert currency here! </br>
					<label>Seeking</label></br>
						 <input type="radio" name="gender2" value="1" class="gender"> Male</br>
						 <input type="radio" name="gender2" value="2" class="gender"> Female</br>
						 <input type="radio" name="gender2" value="3" class="gender"> both</br>
                    <input type="submit" name="insert_new" value="Signup!">
            <script>      
                function validateUser(){
                    console.log("button pressed");
                    var password = document.getElementById("passwordS") , 
                    confirm_password = document.getElementById("confirm_passwordS"),
                    username = document.getElementById("username");
                        console.log("checking user");
                        if(username.value = <?php mysqli_query($link ,'SELECT FROM users WHERE username') ;?>){
                            console.log("username is taken");
                            username.setCustomValidity("Username is taken!");
                           }else{
                               console.log("user ok");
                               username.setCustomValidity('');
                               console.log("checking passwords");
                            if(password.value != confirm_password.value) {
                                confirm_password.setCustomValidity("Passwords Don't Match");
                                console.log("passwords dont match");
                                  } else {
                                    confirm_password.setCustomValidity('');
                                    console.log("password ok. sending to server");
                                      $.ajax({
                                            url: "functions.php",
                                            data: "insert_new",
                                        });
                                  }
                           }

                }

                password.onchange = validateUser();
                confirm_password.onkeyup = validateUser();
            </script>
				</form>
			</fieldset>
		</div>
	</body>
            
</html>