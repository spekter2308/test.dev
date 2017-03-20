<?php

$token = '303613257:AAESVLxLGGYoAsIbCJMHN9Nu87mOGiHIeeU';

$chatId = 161119242;
$text = 'Привіт Мастер';

$parameters = [
		'chat_id' => $chatId,
		'text' => $text,
		];
		
$url = 'https://api.telegram.org/bot' . $token . '/sendMessage?'
		. http_build_query($parameters);
		
		file_get_contents($url);


//phpinfo();

?>