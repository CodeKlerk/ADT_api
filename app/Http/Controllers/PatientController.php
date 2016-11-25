<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients\Patient;
use App\Models\General\Service;
use App\Models\General\Status;
use App\Models\General\Who_stage;
use App\Models\General\Prophylaxis;
use App\Models\General\Illness;
use App\Models\General\Source;
use App\Models\Drugs\Regimen;

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
    public function store(Patients_post $request)
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
            // $this->multi_model_insert([ 'Patient_prophylaxis', 'Patient_tb', 'Patient_drug_allergy', 'Patient_drug_allergy_other', 'Patient_status', 'Patient_illness'] ,$a);

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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * Retriving the type of services
     */
     public function get_service(){
         return response()->json( Service::get(), 200);
     }
     
         /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * Retriving the type of services
     */
     public function get_status(){
         return response()->json( Status::get(), 200);
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * Retriving the type of services
     */
     public function get_who_stage(){
         return response()->json( Who_stage::get(), 200);
     }
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * Retriving the type of prophylaxis
     */
     public function get_prophylaxis(){
         return response()->json( Prophylaxis::get(), 200);
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * Retriving the type of illness
     */
     public function get_illness(){
         return response()->json( Illness::get(), 200);
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * Retriving the type of source
     */
     public function get_source(){
         return response()->json( Source::get(), 200);
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * Retriving the type of Regimen
     */
     public function get_regimen(){
         return response()->json( Regimen::get(), 200);
     }

}
