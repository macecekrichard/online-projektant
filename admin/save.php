<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    http_response_code(403);
    exit('Nepovolený přístup.');
}

$data = [
    'heroTitle' => $_POST['heroTitle'],
    'heroText' => $_POST['heroText'],
    'ctaButton' => $_POST['ctaButton']
];

file_put_contents('../content/homepage.json', json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
header('Location: index.php');
exit;
