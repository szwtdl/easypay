<?php

namespace Szwtdl\Pay\Payment;

class AsiaBill
{
    protected $options = [

    ];

    public function __construct($options)
    {
        $this->options = array_merge($this->options, $options);
    }
}