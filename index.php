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
      <a href="info.php" title='info'>View list of all profiles here</a><br>
      <a href='info.php?page=1' title='info'>View table of profiles (better ui)</a>
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
      echo "<a href='https://openexchangerates.org/api/latest.json?app_id=3a43b77ceddc4e609181d29cc0ce35f9'>";
      if(isset($_POST['currency'])){

        echo "<a href='https://openexchangerates.org/api/latest.json?app_id=3a43b77ceddc4e609181d29cc0ce35f9'>";
      }
      ?>

</div>

  <div class="col-3">

    <?php

            if(isset($_GET['login'])){
              include ("login_page.php");
            } else {
    ?>

		<fieldset>
			<div class="listingsAll col-12">
				<?php
					$q_users = "SELECT * FROM users";

					$r_people = mysqli_query($link, $q_users);

					while($row = mysqli_fetch_array($r_people)) {
				?>
                <div class="listings col-5">
					<h4><?php echo $row['username'];?> </h4>
					<p><a href="info.php?id=<?php echo $row['userID'];?>" title="info">Read more</a></p>

                </div>
				<?php
      }};
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
