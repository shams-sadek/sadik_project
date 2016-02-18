<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientRequest;
use App\Models\Patient;
use Laracasts\Flash\Flash;

class PatientController extends Controller
{
    public function index()
    {
        return view('patient');
    }

    public function store(PatientRequest $request)
    {

        Patient::create( $request->all() );

        Flash::success('Successfully Created Patient.');

        return redirect('patient');
    }
}
