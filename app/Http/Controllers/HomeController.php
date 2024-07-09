<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        
        return view('admin.dashboard', ['active' => 'dashboard']);
    }

    function logout(){
        Auth::logout();
        return redirect('');
    }
}
