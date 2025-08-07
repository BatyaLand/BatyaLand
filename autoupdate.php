<?php
$current_version = "2.0"; // Текущая версия программы
$program_file = "DMLoader.exe"; // Имя EXE-файла программы

// Если запросили версию
if (isset($_GET['action']) && $_GET['action'] == 'version') {
    header('Content-Type: application/json');
    echo json_encode(['version' => $current_version]);
    exit;
}

// Если запросили файл программы
if (isset($_GET['action']) && $_GET['action'] == 'download') {
    if (file_exists($program_file)) {
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($program_file).'"');
        header('Content-Length: ' . filesize($program_file));
        readfile($program_file);
        exit;
    } else {
        http_response_code(404);
        echo "File not found";
        exit;
    }
}

// Показываем версию
echo "Авто обновления DMLoader. Последняя версия: " . $current_version;
?>