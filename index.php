<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Currency coverter</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div class="wrapper">
		<form action="index.php" method="GET">
			<h3>Select base currency</h3>
			<select name="base">
				<option>USD</option>
				<option>EUR</option>
				<option>UAH</option>
				<option>RUB</option>
			</select>
			<br>
			<h3>Select convert currency</h3> 
			<select name="conv">
				<option>USD</option>
				<option>EUR</option>
				<option>UAH</option>
				<option>RUB</option>
			</select>
			<br>
			<h3>Enter Amount</h3>
			<input type="text" name="amount" required>
			<br>
			<button type="submit" name="submit">Convert</button>
		</form>
	
	</div>
</body>
</html>


<?php

//Form validation
if (isset($_GET['submit'])) {
	$base = $_GET['base'];
	$conv = $_GET['conv'];
	$amount = $_GET['amount'];

	
	$ch = curl_init(); 

        // set url 
	curl_setopt($ch, CURLOPT_URL, "https://free.currencyconverterapi.com/api/v5/convert?q={$base}_{$conv}&compact=ultra"); 

        //return the transfer as a string 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
	$output = curl_exec($ch);
        // close curl resource to free up system resources 
	curl_close($ch); 
	$data = explode(':', $output);
	$data = explode(" ", $data[1]);
	$amnt = round($data[0], 2);
	
	$result = $amnt * $amount;

	if($result) {

	
} ?>

<div class="result"> 
	<h3><?php echo $result.' '.$conv; ?></h3>
</div>
<?php } ?>