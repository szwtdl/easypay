<?php
/**
 * This file is part of szwtdl/easypay
 * @link     https://www.szwtdl.cn
 * @contact  szpengjian@gmail.com
 * @license  https://github.com/szwtdl/easypay/blob/master/LICENSE
 */

namespace EasyPay\Kernel\Contracts;

interface Payment
{
    public function pay(array $data);

    public function notify(array $data);

    public function verify();

    public function refund(array $data);

    public function query(array $data);
}
