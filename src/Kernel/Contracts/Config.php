<?php
/**
 * This file is part of szwtdl/easypay
 * @link     https://www.szwtdl.cn
 * @contact  szpengjian@gmail.com
 * @license  https://github.com/szwtdl/easypay/blob/master/LICENSE
 */
namespace EasyPay\Kernel\Contracts;

use ArrayAccess;

interface Config extends ArrayAccess
{
    /**
     * @return array<string,mixed>
     */
    public function all(): array;

    /**
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool;

    /**
     * @param string $key
     * @param mixed|null $value
     * @return void
     */
    public function set(string $key, mixed $value = null): void;

    /**
     * @param array<string>|string $key
     */
    public function get(array|string $key, mixed $default = null): array;
}
