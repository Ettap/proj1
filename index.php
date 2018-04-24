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
	  <header></header>
	<div id="content">
  	<!-- body code goes here -->
	  <nav>
		haefögihasödfghaösdg
	  </nav>
	<div class="col-3">
		<fieldset>
			<div class=' produktcontainer white'>
				<?php
					$q_products = "SELECT * FROM users WHERE username";

					$r_products = mysqli_query($link, $q_products);

					while($row = mysqli_fetch_array($r_products)) {
				?>
					<img src="bilder/products/<?php echo $row['img_url']; ?>"alt="<?php echo $row['img_desc'];?>" width="220px" height="110px">
					<h3><?php echo $row['name'];?> </h3>
					<h3> <?php echo $row['price'] . "€";?> </h3>
					<p><a href="info.php?id=<?php echo $row['id'];?>" title="info">Read more</a></p>
				<?php	
				}
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