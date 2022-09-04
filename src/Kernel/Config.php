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
    protected array $items = [];

    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function __set($name, $value)
    {
        $this->items[$name] = $value;
    }

    public function __get($name)
    {
        return $this->items[$name];
    }

    public function offsetExists($offset)
    {
    }

    public function offsetGet($offset)
    {
        return $this->items[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->items[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->items[$offset]);
    }

    public function __invoke($key)
    {
        return $this->items[$key];
    }

    public function all(): array
    {
        return $this->items;
    }

    public function has(string $key): bool
    {
        if (isset($this->items[$key])) {
            return true;
        }
        return false;
    }

    public function set(string $key, mixed $value = null): void
    {
        $this->items[$key] = $value;
    }

    public function get(array|string $key, mixed $default = null): array
    {
        $data = array();
        if (is_string($key)) {
            $data[$key] = $this->items[$key];
        } elseif (is_array($key)) {
            foreach ($key as $item) {
                $data[$item] = $this->items[$item];
            }
        }
        return $data;
    }
}
