<?php
$userId = filter_input(INPUT_GET, 'userId', FILTER_SANITIZE_STRING);
$accessToken = filter_input(INPUT_GET, 'accessToken', FILTER_SANITIZE_STRING);

$return = '';

if(!$userId || !$accessToken) {
    $return = 'Missing Parameter';
} else {
    if($userId != 'testUser') {
        $return = 'Invalid User Id';
    }
}

echo json_encode($return);