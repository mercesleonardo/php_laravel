<?php

namespace App\Controllers;

use App\Library\Email;

class ProductController
{
    // public function __construct(private Email $email)
    // {
    // }

    public function show(string $product, Email $email)
    {
        dd($email, $product);
    }
}
