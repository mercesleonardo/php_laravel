<?php

use Core\Library\App;
use Core\Templates\Plates;

$app = App::create()
    ->withEnvironmentVariables()
    ->withTemplateEngine(Plates::class)
    ->withErrorPage()
    ->withContainer();
