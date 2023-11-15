<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);

    echo "</pre>";

    die();
};

function urIs($value) {
    return $_SERVER["REQUEST_URI"] === $value;
}

function authorized($bool, $status = Response::FORBIDDEN) {
    if (! $bool) {
        abort($status);
    }
}

function base_path($path) {

    return BASE_PATH . $path;
}

function view($path, $attributes = []) {

    extract($attributes);

    require base_path('views/' . $path);
}
