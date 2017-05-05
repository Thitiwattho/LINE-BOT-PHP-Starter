<?php
$access_token = 'cBwkqiioZ+5rC+bHK73Ws4Yzucu4VJq1Xgb47sYdGtISKBkKHftMS04U9ZtRPmbg7+jFgac22pU1/mAC7DV4jDZZPhlv3ZGBR/bn8i4jCEslTgWSn1GAectYYEzuUNr4+WRAL+wHoVIh6JqaxdgtxgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
