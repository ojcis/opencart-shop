<?php
const OPENCART_URL = 'http://localhost:8000';
$apiKey = readline('API key: ');
$orderId = readline('Order ID: ');

session_start();
$_COOKIE['PHPSESSID'] = session_id();
session_write_close();

$url = OPENCART_URL."/index.php?route=api/login";
$postBody = ["key=$apiKey"];

$response=getResponse($url, $postBody);
$token = $response->token;
$url = OPENCART_URL.'/index.php?route=api/order/info&token='.$token.'&order_id='.$orderId;
$response = getResponse($url);

//var_dump($response);
echo PHP_EOL;
echo "order id: {$response->order->order_id}".PHP_EOL;
echo "customer name: {$response->order->firstname} {$response->order->lastname}".PHP_EOL;
echo "customer email: {$response->order->email}".PHP_EOL;
echo "order status: {$response->order->order_status}".PHP_EOL;
echo "order price: {$response->order->total} {$response->order->currency_code}".PHP_EOL;
echo "payment method: {$response->order->payment_method}".PHP_EOL;
echo "shipping address:{$response->order->shipping_country}, {$response->order->shipping_zone}, {$response->order->shipping_address_1}, {$response->order->shipping_address_2}, {$response->order->shipping_postcode}".PHP_EOL;

function getResponse(string $url, array $postBody = []){
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => implode('&', $postBody),
        CURLOPT_COOKIE => 'PHPSESSID=' . $_COOKIE['PHPSESSID'] . '; path=/',
        CURLOPT_HTTPHEADER => [
            "cache-control: no-cache",
            "content-type: application/x-www-form-urlencoded",
        ],
    ]);
    $response = curl_exec($curl);
    curl_close($curl);
    return json_decode($response);
}

