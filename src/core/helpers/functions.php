<?php

use Core\Library\{Container, Layout};

function view($view, $data = [], $viewPath = VIEW_PATH)
{
    return Layout::render($view, $data, $viewPath);
}

function bind(string $key, mixed $value): void
{
    Container::bind($key, $value);
}

function resolve(string $key)
{
    return Container::resolve($key);
}
