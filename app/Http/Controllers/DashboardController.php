<?php

namespace App\Http\Controllers;

use App\Application;
use App\Lab;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        return view('index', ['title' => 'Página Inicial']);
    }

    public function request(Request $request)
    {
        return view('requestSoftware');
    }

    public function list_softwares(Request $request)
    {

        $lab_num = $request->query('lab', "1");
        if (!is_numeric($lab_num)) {
            return view('listSoftwares')->withErrors("Insira um valor valido");
        }
        $applications = Application::whereHas('labs', function (Builder $query) use ($lab_num) {
            $query->where('id', $lab_num);
        })->get();;

        return view('listSoftwares', ["applications" => $applications]);
    }

    public function aprove_software(Request $request)
    {
        $validatedData = $request->validate([
            'software-id' => 'required|integer',
        ]);

        $app = Application::find($validatedData["software-id"]);

        $app->acceptance_date = now();

        if ($app->save())
            return redirect('/home')->with('status', 'Aplicaçao aprovada!');
        else
            return redirect('/request')->withErrors('Erro inesperado!');
    }

    public function dashboard(Request $request)
    {

        $applications = Application::whereNull('acceptance_date')->get();

        return view('dashboard', ["applications" => $applications]);
    }

    public function createLab(Request $request)
    { }

    public function createSoftware(Request $request)
    {
        $validatedData = $request->validate([
            'software-name' => 'required|max:240',
            'software-url' => 'required|max:240',
            'software-justification' => "required|min:10|max:240",
            'software-os' => "required|max:240",
            'software-version' => "required",
            "teacher_name" => "required"
        ]);

        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'lab') !== false) {
                $labs[] = $key;
            }
        }

        $app = new Application;
        $app->name = $validatedData["software-name"];
        $app->link = $validatedData["software-url"];
        $app->justification = $validatedData["software-justification"];
        $app->os = $validatedData["software-os"];
        $app->labs()->attach($labs);
        $app->version = $validatedData["software-version"];
        $app->teacher_name = $validatedData["teacher_name"];
        if ($app->save())
            return redirect('/request')->with('status', 'Requisicao enviada!');
        else
            return redirect('/request')->withErrors('Erro inesperado!');
    }
}
