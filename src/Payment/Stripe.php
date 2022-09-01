<?php

namespace Szwtdl\Pay\Payment;

class Stripe
{
    protected $options = [
        'client_id' => 'client_id',
        'client_key' => 'client_key',
        'return_url' => '',
        'cancel_url' => '',
        'currency' => 'usd',
        'mode' => 'test' // test or live
    ];

    public function __construct($options)
    {
        $this->options = array_merge($this->options, $options);
        return $this;
    }

    public function pay(array $data)
    {
        return $this->options;
    }
}