<?php

namespace App\Http\Controllers;

use App\Application;
use App\Lab;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LabsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(int $id = null)
    {
        $lab = Lab::findOrNew($id);
        if ($lab->exists) {
            return $lab->load('applications');
        }

        return Lab::with('applications')->get();
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

        $lab = Lab::create($request->all());

        return $lab;
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

        $lab = Lab::findOrNew($id);
        if (!$lab->exists) {
            return response()->json(['message' => 'Lab not found'], 404);
        }
        $lab->fill($request->all());
        $lab->save();

        return $lab;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Lab::destroy($id);
        abort(204);
    }

    public function installApplication(Request $request)
    {
        $validator = \Validator::make($request->all(), $this->instalationRules());
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $application = Application::findOrNew($request->get('application_id'));

        if (!$application->exists) {
            return response()->json(['message' => 'Application not found'], 404);
        }

        $lab = Lab::findOrNew($request->get('lab_id'));
        if (!$lab->exists) {
            return response()->json(['message' => 'Lab not found'], 404);
        }

        $haveApplication = Lab::doesLabHaveApplication($request->get('lab_id'), $request->get('application_id'));
        if (!$haveApplication) {
            $lab->applications()->attach($application, ['licence_expiration_date' => $request->get('licence_expiration_date', Carbon::now())]);
        }

        return $lab->load('applications');
    }

    public function rules()
    {
        return [
            'qnt_computers' => 'required|integer|max:255',
            'name' => 'required|string',
        ];
    }

    public function instalationRules()
    {
        return [
            'lab_id' => 'required|integer',
            'application_id' => 'required|integer',
            'licence_expiration_date' => 'date'
        ];
    }
}
