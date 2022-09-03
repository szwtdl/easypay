<?php
/**
 * This file is part of szwtdl/pay
 * @link     https://www.szwtdl.cn
 * @contact  szpengjian@gmail.com
 * @license  https://github.com/szwtdl/pay/blob/master/LICENSE
 */
namespace EasyPay\AsiaBill;

use EasyPay\Kernel\Contracts\Payment;

class Application implements Payment
{
    protected $options = [
        'client_id' => 'client_id',
        'client_key' => 'client_key',
        'return_url' => '',
        'cancel_url' => '',
        'currency' => 'usd',
        'mode' => 'test' // test or live
    ];

    public function __construct(array $options)
    {
        $this->options = array_merge($this->options, $options);
        return $this;
    }

    public function pay($data)
    {
        return $data;
    }

    public function notify($data)
    {
        // TODO: Implement notify() method.
    }

    public function verify()
    {
        // TODO: Implement verify() method.
    }

    public function refund($data)
    {
        // TODO: Implement refund() method.
    }

    public function query($data)
    {
        // TODO: Implement query() method.
    }
}