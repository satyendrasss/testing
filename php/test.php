<?php
echo "Hello This is the first program to commit on github";
echo date('Y-m-d');

/* HOW TO USE CURL IN PHP */
$url_name = "https://google.com";
$ch_session = curl_init();
curl_setopt($ch_session, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch_session, CURLOPT_URL, $url);
$result_url = curl_exec($ch_session);
echo $result_url;


/* GENERATE UNIQUE NUMBER*/
$digits = 10;
echo $uniq_card_number = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);10;

?>