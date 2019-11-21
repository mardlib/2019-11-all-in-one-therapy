<?php

namespace App\Http\Controllers;



use App\Patient;
use Kyslik\ColumnSortable\Sortable;

class PatientController extends Controller
{
    use Sortable;
    public function index(){
        return view('patients', array(
            #['patients' => Patient::sortable()->paginate(10)]
            'patients' => Patient::sortable()->paginate(10))
            );
    }
}

#$products = Product::sortable()->paginate(5);
#return view('products',compact('products'));
