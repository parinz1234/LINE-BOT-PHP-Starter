<?php
$access_token = 'o2vIj5fWJZSpVBzhwbpZuVSF9J50g1QTInfhDZMVQxCmcdLu8uobeHsoKmlmDNzDV67CFAxA9szYJ9Czn+RulSUnLlo0CVKcOiAkj30K6DwPnGJbhc36nw8Cc6OOz0jvb/L9bvhfks0N94WrcR62mgdB04t89/1O/w1cDnyilFU=';
$channel_secret = '67cb08f294253a10921b1acf17cb3598';

define("LINE_MESSAGING_API_CHANNEL_SECRET", $channel_secret);
define("LINE_MESSAGING_API_CHANNEL_TOKEN", $access_token);

require __DIR__."/vendor/autoload.php";

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient(LINE_MESSAGING_API_CHANNEL_TOKEN);
$bot = new \LINE\LINEBot($httpClient,['channelSecret' => LINE_MESSAGING_API_CHANNEL_SECRET]);
// $signature = $_SERVER["HTTP_".\LINE\LINEBot\Constant\HTTPHeader::LINE_SIGNATURE];
// $body = file_get_contents("php://input");

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->pushMessage('<to>', $textMessageBuilder);

// $events = $bot->parseEventRequest($body, $signature);
//
// foreach ($events as $event) {
//     if ($event instanceof \LINE\LINEBot\Event\MessageEvent\TextMessage) {
//         $reply_token = $event->getReplyToken();
//         $text = $event->getText();
// 		if($text =='หิวข้าว'){
// 			$bot->replyText($reply_token, "ก็ไปกินดิ๊");
// 		}
// 		else{
// 			//reply same message
// 			$bot->replyText($reply_token, $text);
// 		}
//     }
// 	//reply same sticker
// 	else if($event instanceof \LINE\LINEBot\Event\MessageEvent\StickerMessage){
// 		$reply_token = $event->getReplyToken();
// 		$package_id = $event->getPackageId();
// 		$sticker_id = $event->getStickerId();
// 		$StickerMessageBuilder = new \LINE\LINEBot\MessageBuilder\StickerMessageBuilder($package_id, $sticker_id);
// 		$bot->replyMessage($reply_token, $StickerMessageBuilder);
// 	}
// }

echo "OK";
