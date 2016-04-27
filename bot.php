<?php

$access_token = '205627578:AAEWQRBVx7lHl3O1z5tmoUqDxyM4IBI0ANo';
$api = 'https://api.telegram.org/bot' . $access_token;

$output = json_decode(file_get_contents('php://input'), TRUE);
$chat_id = $output['message']['chat']['id'];
$first_name = $output['message']['chat']['first_name'];
$message = $output['message']['text'];

switch ($message) {
	case '/vk':
		$mes = 'https://vk.com/svideteli_koroleva';
		sendMessage($chat_id,$mes);
		break;
	
	default:
		# code...
		break;
}

?>