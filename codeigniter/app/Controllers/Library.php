<?php

namespace App\Controllers;

class Library extends BaseController
{
    public function index(): string
    {
        return view('library');
    }
}
