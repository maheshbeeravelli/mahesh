<?php
require 'configuration.php';

$method = $_SERVER['REQUEST_METHOD'];
$request = explode("/", substr(@$_SERVER['PATH_INFO'], 1));

$botName = array_shift($request);
$res = '';
$botJid = '';
$returnMessageTo = '';
if(isset($allBots[$botName])){
	$botObject = new $allBots[$botName]['class'];
	$botJid = $botName;
    switch (strtolower($method)){
		case 'put':
			$returnMessageTo = $userName = $request[1];
            $res = $botObject->subscriptionCreated($userName);
			break;
            
		case 'post':
			$postType = $request[0];
			$postMessage =  file_get_contents("php://input");
			$postXml = new SimpleXMLElement($postMessage);
			$returnMessageTo = $from = $postXml['from'];
			$message =  $postXml->body;
			$res = $botObject->messageReceived($from, $message);
			break;
            
		case 'delete':
			$returnMessageTo = $userName = $request[1];
			$res = $botObject->subscriptionDeleted($userName);
			break;
	}
}
header('Content-type: application/xml');
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?><message from='$botJid' to='$returnMessageTo'><body><![CDATA[$res]]></body></message>";
?>