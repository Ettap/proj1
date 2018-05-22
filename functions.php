<?php
session_start();
include('db_connect.php');
//chreate a msg variabel for messages
$msg = "";

//checks if formula has been sent
if(isset($_POST['login'])) {
$username = $_POST['username'];
$password = $_POST['password'];

	if(empty($username)) {
	//if username field is empty
	$msg = "Username is missing!";

	} else if(empty($password)) {
	//if pasword field is empty
	$msg = "Passowrd  is missing!";

	} else {
	//kör login-skript

	//Protects data
	$username = mysqli_real_escape_string($link, $username);
	$password = password_verify($password, PASSWORD_DEFAULT);

	//checks if password and username match database
	$q_select = "SELECT username, password FROM users
				WHERE username='$username'
				AND
				password='$password'
				LIMIT 1";
	$r_select = mysqli_query($link, $q_select);
	$rows = mysqli_num_rows($r_select);
	//$msg = "number of rows: $rows";
	if($rows > 0){
	//Registers the login session
	$_SESSION['user'] = $username;

	//Sends user to index page
	header('Location: index.php');
	} else {
		$msg = "Wrong usewrname or password";
	}

	}

}//end login script

//signup script

if(isset($_POST['insert_new'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password1 = password_hash($_POST['passwordS'], PASSWORD_DEFAULT);
    $postnum = $_POST['postnum'];
    $gender = $_POST['gender1'];
    $seeking = $_POST['gender2'];
    $income = $_POST['income'];
    $age = $_POST['Uage'];
    $currency = $_POST['currency'];


$q_user_insert= "INSERT INTO `users`
(`userID`, `username`, `age`, `gender`, `password`, `email`, `postnum`, `description`, `income`, `currency`, `seeking`)
VALUES
('NULL', '$username', '$age','$gender', '$password1', '$email', '$postnum', '','$income' , '$currency', '$seeking')";


echo $q_user_insert;
$r_user_insert = mysqli_query($link, $q_user_insert);

    if(!$r_user_insert){
        echo "<p>The insert failed <br>" .
        mysqli_error($link). "</p>";
    } else {
        echo "<p>A new user has ben added!</p>";
    }
}//end of signup

  if (isset($_POST['username_check'])) {
  	$username = $_POST['username'];
  	$sql = "SELECT * FROM users WHERE username='$username'";
  	$results = mysqli_query($link, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "taken";	
  	}else{
  	  echo 'not_taken';
  	}
  	exit();
  }
  if (isset($_POST['email_check'])) {
  	$email = $_POST['email'];
  	$sql = "SELECT * FROM users WHERE email='$email'";
  	$results = mysqli_query($link, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "taken";	
  	}else{
  	  echo 'not_taken';
  	}
  	exit();
  }
//Logout, delete session

if(isset($_GET['logout'])){
	if($_GET['logout']=='yes'){
		unset($_SESSION['user']);
		$msg = "you have been logged out!";
	}
}
?>
