<?php
require_once __DIR__ . '/vendor/autoload.php';
$config = [
    'client_id' => 'stripe_client_id',
    'client_key' => 'stripe_client_key',
    'return_url' => 'https://www.baidu.cn',
    'cancel_url' => 'https://www.baidu.com',
    'mode' => 'test'
];
$pay = new \Szwtdl\Pay\Pay();
$result = $pay::stripe($config);
echo "<pre>";
print_r($result);


