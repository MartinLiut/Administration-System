<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create() {
    	return 1;
    	return view('auth.login');
    }

    public function store() {
    	return 'hola';
    }
}
