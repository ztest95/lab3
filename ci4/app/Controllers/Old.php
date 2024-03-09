<?php

namespace App\Controllers;

class Old extends BaseController
{
    public function index(): string
    {
        return view('old/index.php');
    }
}
