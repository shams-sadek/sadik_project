<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Role;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Input;
use Laracasts\Flash\Flash;

class UserRoleController extends Controller
{

    public function __construct()
    {
        /* *
         *-------------------------------------------------------
         * Datepicker Default Date (custom.js file)
         *-------------------------------------------------------
         */

        \JavaScript::put([
            'minDate' => '2016/03/04'
        ]);
    }

    public function index(Request $request)
    {

//        $users = User::with(['roles'])->select( [ 'id', 'name', 'email'] )->get();


        if($request->ajax()){

            $users = User::with(['roles'])->select( [ 'id', 'name', 'email'] )->get();

            return Datatables::of($users)
                ->addColumn('Roles', function($item){

                    $roles = '';

                    foreach($item->roles as $role){
                        $roles .= $role->label . ', ';
                    }

                    return $roles;
                })
                ->addColumn('Operations', function($item){
                    $form = ' ' . link_to('user-role/'. $item->id .'/edit', $title = "Edit", $attributes = [ 'class' => 'btn btn-primary btn-xs glyphicon glyphicon-edit' ], $secure = null);
                    return $form;
                })
                ->removeColumn('roles')
//                ->removeColumn('id')
                ->make();
        }


        return view('user_role.list');
    }

    public function create()
    {
        $userLists = User::lists('name', 'id');
        $userRoles = Role::lists('label', 'id');

        return view('user_role.create', compact('userLists','userRoles') );
    }

    public function store()
    {

        $user = User::findOrFail( Input::get('user_id') );


        /* *
         * -------------------------------------------------------
         * Save Many To Many Relationship Data
         * -------------------------------------------------------
         */

        $user->roles()->sync( Input::get('role_id') );



        /* *
         * --------------------------------------------------------
         * Flash Message After Successfully Saved
         * --------------------------------------------------------
         */
        Flash::success('Successfully Created Role.');


        return redirect('user-role');
    }

    public function edit($id)
    {
        $info = User::findOrFail($id);

        $userLists = User::lists('name', 'id');
        $userRoles = Role::lists('label', 'id');

        return view('user_role.edit', compact( 'info', 'userLists','userRoles') );
    }

    public function update($id)
    {
//        return Input::get('role_id');

        $user = User::findOrFail($id);

        $user->update( Input::all() );

        $user->roles()->sync( Input::get('role_id') );

        return redirect('user-role');
    }
}
