<?php

namespace App\Utility;

class AssertUtil
{
    public static function isTrue(bool $expression, string $errorMessage): void {
        if($expression != true) {
            throw new \Exception($errorMessage);
        }
    }

    public static function notNull($variable, string $errorMessage) {
        static::isTrue(isset($variable) && $variable != null, $errorMessage);
    }

    public static function notBlank($variable, string $errorMessage) {
        static::notNull($variable, $errorMessage);
        static::isTrue("string" === gettype($variable), $errorMessage);
        static::isTrue("" != $variable, $errorMessage);
    }

    public static function areArraysEqual(array $a1, array $a2, string $errorMessage): void {
        static::notNull($a1, '$a1 is null variable');
        static::notNull($a2, '$a2 is null variable');
        static::assertTrue($a1 === $a2, $errorMessage);
    }
}