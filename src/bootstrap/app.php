<?php

use Core\Library\App;

$app = App::create()
    ->withEnvironmentVariables()
    ->withErrorPage()
    ->withContainer();
