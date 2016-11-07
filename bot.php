<?php
$access_token = 'o2vIj5fWJZSpVBzhwbpZuVSF9J50g1QTInfhDZMVQxCmcdLu8uobeHsoKmlmDNzDV67CFAxA9szYJ9Czn+RulSUnLlo0CVKcOiAkj30K6DwPnGJbhc36nw8Cc6OOz0jvb/L9bvhfks0N94WrcR62mgdB04t89/1O/w1cDnyilFU=';
$channel_secret = '67cb08f294253a10921b1acf17cb3598';

define("LINE_MESSAGING_API_CHANNEL_SECRET", $channel_secret);
define("LINE_MESSAGING_API_CHANNEL_TOKEN", $access_token);

require __DIR__."/../vendor/autoload.php";

$bot = new \LINE\LINEBot(
    new \LINE\LINEBot\HTTPClient\CurlHTTPClient(LINE_MESSAGING_API_CHANNEL_TOKEN),
    ['channelSecret' => LINE_MESSAGING_API_CHANNEL_SECRET]
);

$signature = $_SERVER["HTTP_".\LINE\LINEBot\Constant\HTTPHeader::LINE_SIGNATURE];
$body = file_get_contents("php://input");

$events = $bot->parseEventRequest($body, $signature);

foreach ($events as $event) {
    if ($event instanceof \LINE\LINEBot\Event\MessageEvent\TextMessage) {
        $reply_token = $event->getReplyToken();
        $text = $event->getText();
        $bot->replyText($reply_token, $text);
    }
}

echo "OK";
