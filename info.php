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
   </head>

 	<body>
<div id="profilesDisplay">


<?php

$q_users = "SELECT * FROM users WHERE userID";
$r_people = mysqli_query($link, $q_users);
$results_per_page = 20;

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

//idea: if specific id is not set, display several profiles
elseif(!isset($_GET['id']) && !isset($_GET['page'])){
  foreach(['id'] as $valueidk){
    echo "<p>Neither ID nor Page is set! Displaying all:</p>";

    while($rowi = mysqli_fetch_array($r_people))
    {
      echo $rowi['username'];
      ?>
      <p><a href="info.php?id=<?php echo $rowi['userID'];?>" title="info">Read more</a></p>
      <?php


//trying to make table with limited number of results of profiles


}

}}



if (isset($_GET["page"])) {
$page  = $_GET["page"];
//if (!isset($_GET["page"]) && !isset($_GET["id"])) {
//$page=1;

$start_from = ($page-1) * $results_per_page;
$sqlyyy = "SELECT * FROM users LIMIT $results_per_page OFFSET $start_from";
$rs_result = $link->query($sqlyyy);

$sqlooo = "SELECT COUNT(userID) AS total FROM users";
$result = $link->query($sqlooo);
$rowl = $result->fetch_assoc();
$total_pages = ceil($rowl["total"] / $results_per_page);

?>
<table border="1" cellpadding="4">
<tr>
    <td bgcolor="#CCCCCC"><strong>Name</strong></td>
    <td bgcolor="#CCCCCC"><strong>Description</strong></td>
    <td bgcolor="#CCCCCC"><strong>Age</strong></td>
    <td bgcolor="#CCCCCC"><strong>Email</strong></td>
    <td bgcolor="#CCCCCC"><strong>Income</strong></td>
    <td bgcolor="#CCCCCC"><strong>Profile</strong></td>
</tr>
<?php
 while($row = $rs_result->fetch_assoc()) {
 //while($rowi = query($rs_result)) {
?>
            <tr>

            <td><?php echo $row["username"]; ?></td>
            <td><?php echo $row["description"]; ?></td>
            <td><?php echo $row["age"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["income"]; ?></td>
            <td><a href='info.php?id=<?php echo $row['userID'];?>' title='info'>Link</a></td>
            </tr>
<?php

}
//gives the table of users a page system
$sqlooo = "SELECT COUNT(userID) AS total FROM users";
$result = $link->query($sqlooo);
$rowl = $result->fetch_assoc();
$total_pages = ceil($rowl["total"] / $results_per_page);
echo "<p>Page: </p>";
for ($i=1; $i<=$total_pages; $i++) {
   echo "<a href='info.php?page=".$i."'>".$i.', '."</a> ";
};
};
?>
</table>
<?php






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
<script>

</script>




  </body>
  </html>
