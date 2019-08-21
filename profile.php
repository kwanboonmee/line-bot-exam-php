<?php


$access_token = 'wtyUe8xUcuWtZVxUDYKGi8nKnEU6aHjwuW/Ij/fHoiXc6WGiNfk5PWgdEzXBYBZ1E4pP/4jCjyg1mHkvPeTt4jR1oA4puznCraePEUfZAXIIAt0AkI9l9XO8yut0Y2nqz9Sw29wgpuX+R677Dbn5qgdB04t89/1O/w1cDnyilFU=';

$userId = 'Uaf58a1c60a6c42de63d261e34642e15a';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

