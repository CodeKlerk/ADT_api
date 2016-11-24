<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * Retriving the basic information on a patient
     */
    public function index()
    {
        //nextApp,  currentReg
        $patients = Patient::with('patient_status.status', 'visit.regimen', 'appointment')->get();
        $response = ['data' => $patients ];
        return response()->json($response, 200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // create a patient with the general information
        $patient = Patient::create($request->all());

        // check if patient has been created
        if($patient){
            // get created patients's id and merge it to the request array
            $b['patient_id'] = $patient->id; 
        
            $r = $request->all();  
            $a = array_merge($r, $b);

            // call to the multi_model_insert function 
            $this->multi_model_insert([ 'Patient_prophylaxis', 'Patient_tb', 'Patient_drug_allergy', 'Patient_drug_allergy_other', 'Patient_status', 'Patient_illness'] ,$a);

            // response
            $response = [ 'msg' => 'New Patient added', 'patient' => $patient ];
            return response()->json($response, 201);
        }

        $response = [ 'Error' => 'Sorry could not save patient'];

        return response()->json($response, 405);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * Store a newly created resource in multiple models
     *
     * @param  array $models 
     * @param  object $data
     * @return \Illuminate\Http\Response
     */
    public function multi_model_insert(array $models, $data) {
      
        foreach ($models as $model) {
            $model = "\\App\Models\Patients\\".$model;
            $modelclass = new $model;
            $modelclass->create($data);
        }
     
    }

}
