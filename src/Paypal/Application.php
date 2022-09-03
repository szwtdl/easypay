<?php
/**
 * This file is part of szwtdl/easypay
 * @link     https://www.szwtdl.cn
 * @contact  szpengjian@gmail.com
 * @license  https://github.com/szwtdl/easypay/blob/master/LICENSE
 */
namespace EasyPay\Paypal;

use EasyPay\Kernel\Contracts\Payment;

class Application implements Payment
{
    public function pay($data)
    {
        // TODO: Implement pay() method.
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
