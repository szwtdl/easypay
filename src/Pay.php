<?php

namespace Szwtdl\Pay;

class Pay
{
    public static function __callStatic($name, $arguments)
    {
        $className = "\\Szwtdl\\Pay\\Payment\\" . ucwords($name);
        if (!class_exists($className)) {
            throw new \Exception("Error:" . $className);
        }
        return new $className($arguments[0]);
    }
}