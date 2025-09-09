<?php

namespace Core\Library;

use Core\Exceptions\ClassNotFoundException;
use Core\Interfaces\TemplateInterface;

class Layout
{
    public static function render(string $view, array $data = [], string $viewPath = VIEW_PATH)
    {
        $template = resolve('engine');

        if (!class_exists($template)) {
            throw new ClassNotFoundException('Template ' . $template::class . ' not found.');
        }

        $template = new $template();

        if (!$template instanceof TemplateInterface) {
            throw new ClassNotFoundException('Template ' . $template::class . ' must implement TemplateInterface');
        }

        return $template->render($view, $data, $viewPath);
    }
}
