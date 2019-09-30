<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        return view('index', ['title' => 'Página Inicial']);
    }

    public function request(Request $request) {
        return view('requestSoftware');
    }

    public function createLab(Request $request) {

    }

    public function createSoftware(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:240',
            'link' => 'required|max:240',
            'justification' => "required|min:10|max:240",
            'os' => "required|max:240",
            'lab1' => "required",
            'lab2' => "required",
            'lab3' => "required",
            'lab4' => "required",
            'lab5' => "required",
            'lab6' => "required",
            'lab7' => "required",
            'lab8' => "required",
            'lab9' => "required",
            'lab10' => "required",
            'lab11' => "required",
            'lab12' => "required",
            'lab13' => "required",
            'lab14' => "required",
            'lab15' => "required",
            'lab16' => "required"
        ]);

        dd($validatedData);

        foreach ($validatedData as $key => $value) {
            if (strpos($key, 'lab') !== false) {
                $labs[] = $value;
            }
        }

        $labs = join('|', $labs);
        Application::create([
            $validatedData
        ]);
    }
}
