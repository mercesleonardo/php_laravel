<?php

namespace Core\Library;

use Core\Exceptions\ViewNotFoundException;
use League\Plates\Engine;

class Layout
{
    public static function render(string $view, array $data = [], string $viewPath = VIEW_PATH)
    {
        if (!file_exists($viewPath . '/' . $view . '.php')) {
            throw new ViewNotFoundException("View not found: $view");
        }

        $templates = new Engine($viewPath);

        echo $templates->render($view, $data);
    }
}
