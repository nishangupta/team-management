<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return auth()->user();
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
