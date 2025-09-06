<?php

require __DIR__ . '/../bootstrap/app.php';

class HomeController {
    public function index() {
        view('home', ['name' => 'World']);
    }
}

$controller = new HomeController();
$controller->index();