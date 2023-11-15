<?php

class Validator {

    public static function string($value, $min = 1, $max = INF) {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($value) {
        // Validator Email -> Validator::email('joe@example.com') is valid
        // Validator Email -> Validator::email('joedsadasdsadasd') is not valid

        return filter_var($value, FILTER_VALIDATE_EMAIL);

    }
}
