<?php



require "vendor/autoload.php";

$access_token = 'idai47uZiXLMRDHP8k8ApP+2xYV1qr6YdWQXmg+iu3poloWHuFPM4cpVxa6Ill//E4pP/4jCjyg1mHkvPeTt4jR1oA4puznCraePEUfZAXKjFla4hCOQlF2yDUQ32CT2iNmXYCjozdCGZ2D81FaECwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '9fbe1c51d2036ea563158fd809c16697';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







