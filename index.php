<?php
include("functions.php");
include('db_connect.php');
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
    <h1>Find sexy singles in your area</h1>
  	<!-- body code goes here -->
	  <nav>
      <a href="login_page.php">Login page</a><br>
      <a href="sign_up_page.php">signup page WIP here</a><br>
	  </nav>

    <div id="convert">
      <p>Currency converter</p>
      <form  method="post" action="index.php?currency"  id="convertme">
              <input  type="number" name="value">
              <label for="currencyFrom">From Currency</label></br>
    					<select name="currencyFrom">
    <option>AED</option>
    <option>AFN</option>
    <option>ALL</option>
    <option>AMD</option>
    <option>ANG</option>
    <option>AOA</option>
    <option>ARS</option>
    <option>AUD</option>
    <option>AWG</option>
    <option>AZN</option>
    <option>BAM</option>
    <option>BBD</option>
    <option>BDT</option>
    <option>BGN</option>
    <option>BHD</option>
    <option>BIF</option>
    <option>BMD</option>
    <option>BND</option>
    <option>BOB</option>
    <option>BRL</option>
    <option>BSD</option>
    <option>BTC</option>
    <option>BTN</option>
    <option>BWP</option>
    <option>BYN</option>
    <option>BZD</option>
    <option>CAD</option>
    <option>CDF</option>
    <option>CHF</option>
    <option>CLF</option>
    <option>CLP</option>
    <option>CNH</option>
    <option>CNY</option>
    <option>COP</option>
    <option>CRC</option>
    <option>CUC</option>
    <option>CUP</option>
    <option>CVE</option>
    <option>CZK</option>
    <option>DJF</option>
    <option>DKK</option>
    <option>DOP</option>
    <option>DZD</option>
    <option>EGP</option>
    <option>ERN</option>
    <option>ETB</option>
    <option>EUR</option>
    <option>FJD</option>
    <option>FKP</option>
    <option>GBP</option>
    <option>GEL</option>
    <option>GGP</option>
    <option>GHS</option>
    <option>GIP</option>
    <option>GMD</option>
    <option>GNF</option>
    <option>GTQ</option>
    <option>GYD</option>
    <option>HKD</option>
    <option>HNL</option>
    <option>HRK</option>
    <option>HTG</option>
    <option>HUF</option>
    <option>IDR</option>
    <option>ILS</option>
    <option>IMP</option>
    <option>INR</option>
    <option>IQD</option>
    <option>IRR</option>
    <option>ISK</option>
    <option>JEP</option>
    <option>JMD</option>
    <option>JOD</option>
    <option>JPY</option>
    <option>KES</option>
    <option>KGS</option>
    <option>KHR</option>
    <option>KMF</option>
    <option>KPW</option>
    <option>KRW</option>
    <option>KWD</option>
    <option>KYD</option>
    <option>KZT</option>
    <option>LAK</option>
    <option>LBP</option>
    <option>LKR</option>
    <option>LRD</option>
    <option>LSL</option>
    <option>LYD</option>
    <option>MAD</option>
    <option>MDL</option>
    <option>MGA</option>
    <option>MKD</option>
    <option>MMK</option>
    <option>MNT</option>
    <option>MOP</option>
    <option>MRO</option>
    <option>MRU</option>
    <option>MUR</option>
    <option>MVR</option>
    <option>MWK</option>
    <option>MXN</option>
    <option>MYR</option>
    <option>MZN</option>
    <option>NAD</option>
    <option>NGN</option>
    <option>NIO</option>
    <option>NOK</option>
    <option>NPR</option>
    <option>NZD</option>
    <option>OMR</option>
    <option>PAB</option>
    <option>PEN</option>
    <option>PGK</option>
    <option>PHP</option>
    <option>PKR</option>
    <option>PLN</option>
    <option>PYG</option>
    <option>QAR</option>
    <option>RON</option>
    <option>RSD</option>
    <option>RUB</option>
    <option>RWF</option>
    <option>SAR</option>
    <option>SBD</option>
    <option>SCR</option>
    <option>SDG</option>
    <option>SEK</option>
    <option>SGD</option>
    <option>SHP</option>
    <option>SLL</option>
    <option>SOS</option>
    <option>SRD</option>
    <option>SSP</option>
    <option>STD</option>
    <option>STN</option>
    <option>SVC</option>
    <option>SYP</option>
    <option>SZL</option>
    <option>THB</option>
    <option>TJS</option>
    <option>TMT</option>
    <option>TND</option>
    <option>TOP</option>
    <option>TRY</option>
    <option>TTD</option>
    <option>TWD</option>
    <option>TZS</option>
    <option>UAH</option>
    <option>UGX</option>
    <option>USD</option>
    <option>UYU</option>
    <option>UZS</option>
    <option>VEF</option>
    <option>VND</option>
    <option>VUV</option>
    <option>WST</option>
    <option>XAF</option>
    <option>XAG</option>
    <option>XAU</option>
    <option>XCD</option>
    <option>XDR</option>
    <option>XOF</option>
    <option>XPD</option>
    <option>XPF</option>
    <option>XPT</option>
    <option>YER</option>
    <option>ZAR</option>
    <option>ZMW</option>
    <option>ZWL</option>
    					</select> </br>

              <label for="currencyTo">To Currency</label></br>
    					<select name="currencyTo">
    <option>AED</option>
    <option>AFN</option>
    <option>ALL</option>
    <option>AMD</option>
    <option>ANG</option>
    <option>AOA</option>
    <option>ARS</option>
    <option>AUD</option>
    <option>AWG</option>
    <option>AZN</option>
    <option>BAM</option>
    <option>BBD</option>
    <option>BDT</option>
    <option>BGN</option>
    <option>BHD</option>
    <option>BIF</option>
    <option>BMD</option>
    <option>BND</option>
    <option>BOB</option>
    <option>BRL</option>
    <option>BSD</option>
    <option>BTC</option>
    <option>BTN</option>
    <option>BWP</option>
    <option>BYN</option>
    <option>BZD</option>
    <option>CAD</option>
    <option>CDF</option>
    <option>CHF</option>
    <option>CLF</option>
    <option>CLP</option>
    <option>CNH</option>
    <option>CNY</option>
    <option>COP</option>
    <option>CRC</option>
    <option>CUC</option>
    <option>CUP</option>
    <option>CVE</option>
    <option>CZK</option>
    <option>DJF</option>
    <option>DKK</option>
    <option>DOP</option>
    <option>DZD</option>
    <option>EGP</option>
    <option>ERN</option>
    <option>ETB</option>
    <option>EUR</option>
    <option>FJD</option>
    <option>FKP</option>
    <option>GBP</option>
    <option>GEL</option>
    <option>GGP</option>
    <option>GHS</option>
    <option>GIP</option>
    <option>GMD</option>
    <option>GNF</option>
    <option>GTQ</option>
    <option>GYD</option>
    <option>HKD</option>
    <option>HNL</option>
    <option>HRK</option>
    <option>HTG</option>
    <option>HUF</option>
    <option>IDR</option>
    <option>ILS</option>
    <option>IMP</option>
    <option>INR</option>
    <option>IQD</option>
    <option>IRR</option>
    <option>ISK</option>
    <option>JEP</option>
    <option>JMD</option>
    <option>JOD</option>
    <option>JPY</option>
    <option>KES</option>
    <option>KGS</option>
    <option>KHR</option>
    <option>KMF</option>
    <option>KPW</option>
    <option>KRW</option>
    <option>KWD</option>
    <option>KYD</option>
    <option>KZT</option>
    <option>LAK</option>
    <option>LBP</option>
    <option>LKR</option>
    <option>LRD</option>
    <option>LSL</option>
    <option>LYD</option>
    <option>MAD</option>
    <option>MDL</option>
    <option>MGA</option>
    <option>MKD</option>
    <option>MMK</option>
    <option>MNT</option>
    <option>MOP</option>
    <option>MRO</option>
    <option>MRU</option>
    <option>MUR</option>
    <option>MVR</option>
    <option>MWK</option>
    <option>MXN</option>
    <option>MYR</option>
    <option>MZN</option>
    <option>NAD</option>
    <option>NGN</option>
    <option>NIO</option>
    <option>NOK</option>
    <option>NPR</option>
    <option>NZD</option>
    <option>OMR</option>
    <option>PAB</option>
    <option>PEN</option>
    <option>PGK</option>
    <option>PHP</option>
    <option>PKR</option>
    <option>PLN</option>
    <option>PYG</option>
    <option>QAR</option>
    <option>RON</option>
    <option>RSD</option>
    <option>RUB</option>
    <option>RWF</option>
    <option>SAR</option>
    <option>SBD</option>
    <option>SCR</option>
    <option>SDG</option>
    <option>SEK</option>
    <option>SGD</option>
    <option>SHP</option>
    <option>SLL</option>
    <option>SOS</option>
    <option>SRD</option>
    <option>SSP</option>
    <option>STD</option>
    <option>STN</option>
    <option>SVC</option>
    <option>SYP</option>
    <option>SZL</option>
    <option>THB</option>
    <option>TJS</option>
    <option>TMT</option>
    <option>TND</option>
    <option>TOP</option>
    <option>TRY</option>
    <option>TTD</option>
    <option>TWD</option>
    <option>TZS</option>
    <option>UAH</option>
    <option>UGX</option>
    <option>USD</option>
    <option>UYU</option>
    <option>UZS</option>
    <option>VEF</option>
    <option>VND</option>
    <option>VUV</option>
    <option>WST</option>
    <option>XAF</option>
    <option>XAG</option>
    <option>XAU</option>
    <option>XCD</option>
    <option>XDR</option>
    <option>XOF</option>
    <option>XPD</option>
    <option>XPF</option>
    <option>XPT</option>
    <option>YER</option>
    <option>ZAR</option>
    <option>ZMW</option>
    <option>ZWL</option>
    					</select> </br>
              <input  type="submit" name="ConvertThis" value="Convert">
      </form>
      <?php
      if(isset($_POST['currency'])){
        echo "<a href='https://openexchangerates.org/api/convert/19999.95/GBP/EUR?app_id=YOUR_APP_ID'>";
      }
      ?>

</div>


  <?php
$q_users = "SELECT * FROM users WHERE userID";
$r_people = mysqli_query($link, $q_users);
$results_per_page = 20;


//idea: if specific id is not set, display several profiles
if(!isset($_GET['page'])){
  foreach(['id'] as $valueidk){
    echo "<p>Neither ID nor Page is set! Displaying all:</p>";

    while($rowi = mysqli_fetch_array($r_people))
    {
        echo $rowi['username'];
      ?>
      <p><a href="info.php?id=<?php echo $rowi['userID'];?>" title="info">Read more</a></p>
      <?php

}

}}

if (isset($_GET["page"])) {
$page  = $_GET["page"];
//if (!isset($_GET["page"]) ) {
//$page=1;

$start_from = ($page-1) * $results_per_page;
$sqlyyy = "SELECT * FROM users LIMIT $results_per_page OFFSET $start_from";
$rs_result = mysqli_query($link, $sqlyyy);

$sqlooo = "SELECT COUNT(userID) AS total FROM users";
$result = mysqli_query($link, $sqlooo);
//$rowl = $result->fetch_assoc();
$total_pages = ceil($rowl["total"] / $results_per_page);

 while($row > 0) {
 //while($rowi = query($rs_result)) {
?>
            <div class="profileListing col-5">
            <p><?php echo $row["username"]; ?></p>
            <p><?php echo $row["description"]; ?></p>
            <p><?php echo $row["age"]; ?></p>
            <p><?php echo $row["email"]; ?></p>
            <p><?php echo $row["income"]; ?></p>
            <p><a href='info.php?id=<?php echo $row['userID'];?>' title='info'>Link</a></p>
            </div>
<?php

}
//gives the table of users a page system
$sqlooo = "SELECT COUNT(userID) AS total FROM users";
$result = $link->query($sqlooo);
//$rowl = $result->fetch_assoc();
$total_pages = ceil($rowl["total"] / $results_per_page);
echo "<p>Page: </p>";
for ($i=1; $i<$total_pages; $i++) {
   echo "<a href='info.php?page=".$i."'>".$i.', '."</a> ";
};
//};
?>
</table>

	</div>
	  <footer></footer>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-4.0.0.js"></script>
  </body>
</html>
