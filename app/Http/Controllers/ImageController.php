<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{

    public function index()
    {
        return view('image.upload');
    }


    public function store()
    {

        $file = Input::file('photo');

        $file_name = $file->getClientOriginalName();

        $img = Image::make($file);

        $img->resize( 360, 360, function ($constraint) {
                $constraint->aspectRatio();
            });

        $img->crop( intval(Input::get('w')), intval(Input::get('h')), intval(Input::get('x')), intval(Input::get('y')) );

        $img->save('images/categories/' . $file_name);


        return redirect('image');
    }


    public function show()
    {
        return 'Show';
    }

}
