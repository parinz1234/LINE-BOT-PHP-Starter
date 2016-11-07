<?php 
$access_token = 'o2vIj5fWJZSpVBzhwbpZuVSF9J50g1QTInfhDZMVQxCmcdLu8uobeHsoKmlmDNzDV67CFAxA9szYJ9Czn+RulSUnLlo0CVKcOiAkj30K6DwPnGJbhc36nw8Cc6OOz0jvb/L9bvhfks0N94WrcR62mgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
$curl_close($ch);

echo $result;

