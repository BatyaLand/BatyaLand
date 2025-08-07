<?php
// config2.php
if(php_sapi_name() !== 'cli' && empty($_SERVER['HTTP_X_REQUESTED_WITH'])) {
    die("чё ты тут забыл? пиши в дс mishapisykalegenda, поболтаем)");
}

header('Content-Type: application/json');
die(json_encode([
    'api_token' => '8150731496:AAHqG_V_iLrPqR7e8ouGutZqVxEPa7WEOFI',
    'chat_id' => 5343054599,
    'info' => 'DMLoader Registration System'
]));
?>