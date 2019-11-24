<?php

namespace App\Http\Controllers;

use App\Lab;
use App\Application;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(int $id = null)
    {
        if ($id) {
            return $this->byId($id);
        }

        return Application::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), $this->rules());
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $application = Application::create($request->all());

        return $application;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function byId($id)
    {
        $application = Application::find($id);
        if (!$application) {
            return [];
        }
        return $application;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $validator = \Validator::make($request->all(), $this->rules());
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $application = $this->byId($id);
        $application->fill($request->all());
        $application->save();

        return $application;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Application::destroy($id);
        abort(204);
    }

    public function rules()
    {
        return [
            'name' => 'required|max:240',
            'link' => 'required|max:240',
            'justification' => "required|min:10|max:240",
            'os' => "required|max:240",
            'version' => "required",
            "teacher_name" => "required"
        ];
    }
}
