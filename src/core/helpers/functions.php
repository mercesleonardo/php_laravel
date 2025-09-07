<?php

use Core\Library\Layout;

function view($view, $data = [], $viewPath = VIEW_PATH)
{
    return Layout::render($view, $data, $viewPath);
}
