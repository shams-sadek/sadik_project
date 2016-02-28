<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientRequest;
use App\Models\Patient;
use Illuminate\Support\Facades\Input;
use Laracasts\Flash\Flash;
use Carbon\Carbon;
use Laracasts\Utilities\JavaScript\JavaScriptServiceProvider;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(Request $request)
    {

        if($request->ajax()){

            $patient = Patient::select( [ 'id', 'name', 'mobile', 'date_of_birth' ])->get();

            return Datatables::of($patient)
                ->addColumn('Operations', function($item){
                        $form = \Form::open(['method' => 'DELETE', 'url' => 'patient/' . $item->id, 'class' => 'table-form-inline', 'data-bb' => 'confirm']);
                        $form .= \Form::hidden('id', $item->id);
                        $form .= \Form::button('<i class="glyphicon glyphicon-trash"></i> Delete', ['class' => 'btn btn-danger btn-xs', 'type'=> 'submit']);
                        $form .= \Form::close();

                        $form .= ' ' . link_to('patient/'. $item->id .'/edit', $title = "Edit", $attributes = [ 'class' => 'btn btn-primary btn-xs glyphicon glyphicon-edit' ], $secure = null);

                    return $form;
                })
                ->removeColumn('id')
                ->make();
        }


        return view('patient.list');
    }


    public function create()
    {
        return view('patient.create');
    }

    public function store(PatientRequest $request)
    {

        Patient::create( $request->all() );

        Flash::success('Successfully Created Patient.');

        return redirect('patient');
    }

    public function edit($id)
    {
        $data['info'] = Patient::findOrFail($id);

        return view('patient.edit', $data);
    }

    public function update($id, PatientRequest $request)
    {
        $data = Patient::findOrFail($id);

        $data->update( $request->all() );

        return redirect('patient');
    }



    public function destroy($id)
    {
        $result = Patient::find($id);

        $result->delete();

        return redirect('patient');

//        return redirect()->back();
    }


}
