<?php
$access_token = 'Udd2sMv6L3vqn42n0Jwg2eTdRJcjHnYfn8+Cxl/5WQ60p6d6MoR3XBsgAmJ5ptcV7o7UVjH0/BXQcnmP2KUKNLiADfWSbAom3a3VWZ7wiTXZb84ae01BV965xeYEueOkKB34/R6xcDgCk6dR13A83wdB04t89/1O/w1cDnyilFU=
';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
