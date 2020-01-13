<?php
echo '1';
$tokentlgr = '817866506:AAHtT42ULmBrmXGHYWKsDHsw6RkLD7CrjJw';
$response = array(
        'chat_id' => 407474816,
        'text' => "оставлен комментарий");
$ch = curl_init('https://api.telegram.org/bot'.($tokentlgr).'/sendMessage');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_exec($ch);
curl_close($ch);
