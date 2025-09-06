<?php

function view($view, $data = []) {
    dd('View ' . $view . ' loaded with data: ' . json_encode($data));
}