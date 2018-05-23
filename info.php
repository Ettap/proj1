<?php
//this site opens when user clicks something to show posts/profiles
include("functions.php");
 ?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Dating site Project1 profiles page</title>
 	 <!--Desing css all changes made in here -->
 	<link href="css/design.css" rel="stylesheet">
     <!-- Bootstrap ignore this -->
 	<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
    <link href="">
   </head>

 	<body>
        
<div id="profilesDisplay">
  <p>Search for users</p>
  <form  method="post" action="search.php?go"  id="searchform">
  	      <input  type="text" name="name">
  	      <input  type="submit" name="Seek" value="Search">
  </form>

<?php


echo "<p><a href='index.php' title='main'>Main</a></p>";

//trying to make id link to specific profile page
//success!!!
$id = ( isset( $_GET['id'] ) && is_numeric( $_GET['id'] ) ) ? intval( $_GET['id'] ) : 0;
if ( $id != 0) {
$select_users = "SELECT * FROM users WHERE userID = '$id'";
$these_people = mysqli_query($link, $select_users);

($rowii = mysqli_fetch_array($these_people));

  echo $rowii['username'];
  echo "<p>Fill up with more stuff</p>";
  echo "<br>";

  //APIs go here

  //echo "<p><a href=info.php?id='$id' title='info'>Next profile</a></p>";
  ?>
  <p><a href="info.php?id=<?php echo $rowii['userID']+1;?>" title="info">Next</a></p>
  <p><a href="info.php?id=<?php echo $rowii['userID']-1;?>" title="info">Previous</a></p>

<?php
}
//this seems to be the wrong way to do this...
//PLAN: link userID to info.php?id="userID",
//$thispagenumber = $rowi['userID'];
//$thisisavariable = 1;
//$nextpagenumber = $thispagenumber + $thisisavariable;
//
//<p><a href="info.php?id="<?php echo $nextpagenumber;" title='info'">Next profile</a></p>
//
//echo "<p><a href='index.php' title='back'>Back</a></p>";

  // ["userID"];
  //echo $thispagenumber;

//}

?>

</div>

  </body>
  </html>
