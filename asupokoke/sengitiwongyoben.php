<?php
header('Content-Type: application/json');

$response = [
    'status' => 'success',
    'message' => 'PHP berhasil jalan di Vercel!',
    'php_version' => phpversion(),
    'time' => date('Y-m-d H:i:s')
];

echo json_encode($response);
