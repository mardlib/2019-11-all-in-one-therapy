<?php

namespace App\Http\Controllers;



use App\Patient;

class PatientController extends Controller
{
    public function index(){
        return view('patients',
            ['patients' => Patient::paginate(10)]
            );
    }
}
