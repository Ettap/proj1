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

<?php
  if(isset($_POST['Seek'])){
  if(isset($_GET['go'])){
  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){
   $name=$_POST['name'];
   $sqlseeker="SELECT userID, username, description FROM users WHERE  username LIKE '%" . $name . "%' OR description LIKE '%" . $name  ."%'";

      $result=mysqli_query($link, $sqlseeker);

   while($rowseek=mysqli_fetch_array($result)){
	          $username  =$rowseek['username'];
	          $description=$rowseek['description'];
	          $userID=$rowseek['userID'];

            echo "<ul>\n";
	  echo "<li>" . "Found the following: " . "<a  href=\"search.php?id=$userID\">"   .$username . " who desceribe themselves: " . $description .  "</a></li>\n";
	  echo "</ul>";
  }
  }
}
}
  else{
  echo  "<p>Please enter a search query</p>";
  }
 ?>

</body>
</html>
