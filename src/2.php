<?php

class MathClass {
    public static function add($a, $b) {
        return $a + $b;
    }

    public static function subtract($a, $b) {
        return $a - $b;
    }

    public static function multiply($a, $b) {
        return $a * $b;
    }

    public static function divide($a, $b) {
        if ($b == 0) {
            throw new \Exception("Cannot divide by zero");
        }
        return $a / $b;
    }
}