<?php



require "vendor/autoload.php";

$access_token = 'wtyUe8xUcuWtZVxUDYKGi8nKnEU6aHjwuW/Ij/fHoiXc6WGiNfk5PWgdEzXBYBZ1E4pP/4jCjyg1mHkvPeTt4jR1oA4puznCraePEUfZAXIIAt0AkI9l9XO8yut0Y2nqz9Sw29wgpuX+R677Dbn5qgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '9fbe1c51d2036ea563158fd809c16697';

$pushID = 'Uaf58a1c60a6c42de63d261e34642e15a';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('This is broadcasting message from iGroup Thailand, we are open on Monday-Saturday.');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







