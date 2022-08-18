<?php
header('Content-Type: application/json');
// $data = json_decode(json_encode($_POST['data']));
// $response['data'] = print_r($data);

$response['method'] = 'POST';
echo json_encode($response);
