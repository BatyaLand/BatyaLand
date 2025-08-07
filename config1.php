<?php
header('Content-Type: application/json');

// Простая проверка User-Agent
if (($_SERVER['HTTP_USER_AGENT'] ?? '') !== 'DMLoaderConfigFetcher') {
    die("чё ты тут забыл? пиши в дс mishapisykalegenda, поболтаем)");
}

// Возвращаем конфиг
die(json_encode([
    'telegram_bot_token' => '7988000095:AAGB_rsoDthXaW6mcpxSQndReOPI4d3qpFU',
    'telegram_chat_id' => '5343054599',
    'background_path' => '',
    'video_background_path' => '',
    'status' => 'success'
]));
?>