# EasyPay

#### 一款针对`海外虚拟`产品，`定制需求`的支付方式
[![Test Status](https://github.com/szwtdl/easypay/workflows/Test/badge.svg)](https://github.com/szwtdl/easypay/actions)
[![Lint Status](https://github.com/szwtdl/easypay/workflows/Lint/badge.svg)](https://github.com/szwtdl/easypay/actions)
[![Latest Stable Version](https://poser.pugx.org/szwtdl/easypay/v/stable.svg)](https://packagist.org/packages/szwtdl/easypay)
[![Latest Unstable Version](https://poser.pugx.org/szwtdl/easypay/v/unstable.svg)](https://packagist.org/packages/szwtdl/easypay)
[![Total Downloads](https://poser.pugx.org/szwtdl/easypay/downloads)](https://packagist.org/packages/szwtdl/easypay)
[![License](https://poser.pugx.org/szwtdl/easypay/license)](https://packagist.org/packages/szwtdl/easypay)

### 安装

```bash
composer require szwtdl/easypay:v1.0.0 -vvv
```

### 配置

```php 
use EasyPay\Factory;

$config = [
    'client_id' => 'stripe_client_id',
    'client_key' => 'stripe_client_key',
    'return_url' => 'https://www.xxx.com',
    'cancel_url' => 'https://www.xxx.com',
    'mode' => 'test'
];
```

### 发起支付

```php 
$result = Factory::stripe($options)->pay([
    'title' => '黄金会员',
    'total' => '100.00'
]);
print_r($result);
```

### 同步通知

```php 
$result = Factory::stripe($options)->verify();
print_r($result);
```

### 异步通知

```php 
$result = Factory::stripe($options)->notify([
    'title' => '黄金会员',
    'total' => '100.00'
]);
print_r($result);
```

### 订单查询

```php 
$result = Factory::stripe($options)->query([
    'title' => '黄金会员',
    'total' => '100.00'
]);
print_r($result);
```

### 发起退款

```php 
$result = Factory::stripe($options)->refund([
    'title' => '黄金会员',
    'total' => '100.00'
]);
print_r($result);
```
