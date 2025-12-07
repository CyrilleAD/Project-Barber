<?php

namespace App\Http\Controllers;

abstract class Controller
{
    // Creons un controller
    public function index()
    {
        return view('welcome');
    }
}
