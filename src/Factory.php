<?php
/**
 * This file is part of szwtdl/easypay
 * @link     https://www.szwtdl.cn
 * @contact  szpengjian@gmail.com
 * @license  https://github.com/szwtdl/easypay/blob/master/LICENSE
 */
namespace EasyPay;

/**
 * @method static paddle(string[] $options)
 * @method static stripe(string[] $options)
 * @method static AsiaBill(string[] $options)
 * @method static paypal(string[] $options)
 * @method static alipay(string[] $options)
 * @method static wechat(string[] $options)
 */
class Factory
{
    public static function make($name, array $config)
    {
        $application = "\\EasyPay\\" . ucwords($name) . "\\Application";
        return new $application($config);
    }

    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}
