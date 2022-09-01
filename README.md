# pay

### 一款针对`海外虚拟`产品，`定制需求`的支付方式

```php
   use Szwtdl\Pay\Pay;
   $config = [
        'client_id' => 'stripe_client_id',
        'client_key' => 'stripe_client_key',
        'return_url' => 'https://www.xxx.com',
        'cancel_url' => 'https://www.xxx.com',
        'mode' => 'test'
    ];
    $result = Pay::stripe($config)->pay([
        'title' => 'product title',
        'total' => '100.00'
    ]);
    print_r($result);
```