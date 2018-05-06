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
	$password = password_hash($password);
	
	//checks if password and username match database
	$q_select = "SELECT username, password FROM datingSite 
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

//Logout, delete session

if(isset($_GET['logout'])){
	if($_GET['logout']=='yes'){
		unset($_SESSION['user']);
		$msg = "you have been logged out!";
	}
}
?>