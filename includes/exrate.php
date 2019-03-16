<?php

    $base = $_POST['from'];
    $conv = $_POST['to'];
    $amount = $_POST['amount'];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://free.currencyconverterapi.com/api/v5/convert?q={$base}_{$conv}&compact=ultra");

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $output = curl_exec($ch);
    curl_close($ch);
    $data = explode(':', $output);
    $data = explode(" ", $data[1]);
    $amnt = round($data[0], 2);

    $result = $amnt * $amount;

    echo $result;