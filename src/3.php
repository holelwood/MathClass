<?php
class MathClass {
    public function calculate($a, $b) {
        if ($a === 0 || $b === 0) {
            return "Cannot divide by zero.";
        }
        return $a / $b;
    }
}