<?php

namespace Core\Controllers;

class ErrorController
{
    public function notFound()
    {
        view('errors/404', [
            'title' => 'Page Not Found',
        ], VIEW_PATH_CORE);
    }
}
