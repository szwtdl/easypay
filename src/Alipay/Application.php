<?php
/**
 * This file is part of szwtdl/easypay
 * @link     https://www.szwtdl.cn
 * @contact  szpengjian@gmail.com
 * @license  https://github.com/szwtdl/easypay/blob/master/LICENSE
 */

namespace EasyPay\Alipay;

use EasyPay\Kernel\Contracts\Payment;

class Application implements Payment
{
    public function pay(array $data)
    {
        // TODO: Implement pay() method.
    }

    public function notify(array $data)
    {
        // TODO: Implement notify() method.
    }

    public function verify()
    {
        // TODO: Implement verify() method.
    }

    public function refund(array $data)
    {
        // TODO: Implement refund() method.
    }

    public function query(array $data)
    {
        // TODO: Implement query() method.
    }
}
