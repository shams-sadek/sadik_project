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
        $image = Session::get('img');

        $modal = ( Session::get('modal') == null ? false : true );

        return view('image.upload', compact('image', 'modal') );
    }


    public function store()
    {

            $image = Input::file('photo');

            $image_name = $image->getClientOriginalName();

            $image->move('images/categories', $image_name);

            $image_final = 'images/categories/' . $image_name;


            /* Intervention */
            $int_image = Image::make($image_final);

            $int_image->resize( 640, 360, function ($constraint) {
                $constraint->aspectRatio();
            });


            $int_image->crop( intval(Input::get('w')), intval(Input::get('h')), intval(Input::get('x')), intval(Input::get('y')) );
//            $int_image->fit(1600);

            $int_image->save($image_final);


        return redirect('image');
    }

    public function cropImage()
    {
        Session::forget('modal');

        $img = Session::get('img');

        $img = Input::get('src');

        $int_image = Image::make($img);

        $int_image->crop( intval(Input::get('w')), intval(Input::get('h')), intval(Input::get('x')), intval(Input::get('y')) );

        $int_image->fit(300);

        $int_image->save($img);

        return redirect('image');

//        return 'yes';
//        dd(Input::all());
    }

    public function show()
    {
        return 'Show';
    }

}
