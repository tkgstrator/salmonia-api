<?php
header('Content-Type: application/json; charset=UTF-8');

$response = array(
    "x_product_version" => "1.12.0",
    "api_version" => "20210819"
);

echo (json_encode($response, JSON_PRETTY_PRINT));
