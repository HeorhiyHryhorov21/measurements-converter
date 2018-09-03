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

	echo $result;

}