<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientRequest;
use App\Models\Patient;
use Laracasts\Flash\Flash;
use Carbon\Carbon;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(Request $request)
    {

//        $allPatients  = Patient::all();
//        $allPatients = $allPatients->map(function ($item, $key) {
//            return [
//                $item->name,
//                $item->mobile
//            ];
//        });

//        return $allPatients;


        $patient = Patient::select( [ 'name', 'mobile' ])->get();


        if($request->ajax()){
            return Datatables::of($patient)->make();
        }


//        \JavaScript::put([
//            'allPatients' => $allPatients
//        ]);

        return view('patient');

    }

    public function store(PatientRequest $request)
    {



//        return $request->all();

        Patient::create( $request->all() );

        Flash::success('Successfully Created Patient.');

        return redirect('patient');
    }
}
