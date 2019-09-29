<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(Request $request) {
        return view('index', ['title' => 'Página Inicial']);
    }

    public function request(Request $request) {
        return view('requestSoftware');
    }

    public function createLab(Request $request) {
        
    }
}
