<?php

namespace App\Http\Controllers;

use App\Application;
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

    public function list_softwares(Request $request) {
        return view('listSoftwares');
    }

    public function createLab(Request $request) {

    }

    public function createSoftware(Request $request) {
        $validatedData = $request->validate([
            'software-name' => 'required|max:240',
            'software-url' => 'required|max:240',
            'software-justification' => "required|min:10|max:240",
            'software-os' => "required|max:240"
        ]);

        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'lab') !== false) {
                $labs[] = $key;
            }
        }

        $labs = join('|', $labs);

        $app = new Application;
        $app->name = $validatedData["software-name"];
        $app->link = $validatedData["software-url"];
        $app->justification = $validatedData["software-justification"];
        $app->os = $validatedData["software-os"];
        $app->labs = $labs;

        return redirect('/request')->with('status', 'Requisicao enviada!');
    }
}
