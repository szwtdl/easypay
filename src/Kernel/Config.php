<?php
/**
 * This file is part of szwtdl/easypay
 * @link     https://www.szwtdl.cn
 * @contact  szpengjian@gmail.com
 * @license  https://github.com/szwtdl/easypay/blob/master/LICENSE
 */
namespace EasyPay\Kernel;

use ArrayAccess;
use EasyPay\Kernel\Contracts\Config as ConfigInterface;

class Config implements ArrayAccess, ConfigInterface
{
    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }

    public function all(): array
    {
        // TODO: Implement all() method.
    }

    public function has(string $key): bool
    {
        // TODO: Implement has() method.
    }

    public function set(string $key, mixed $value = null): void
    {
        // TODO: Implement set() method.
    }

    public function get(array|string $key, mixed $default = null): array
    {
        // TODO: Implement get() method.
    }
}
