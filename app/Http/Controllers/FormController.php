<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormController extends Controller
{

    function form1() {

        return view('form1');
    }

    function form1_date(Request $request) {

        $name = $request->name;
        $date = $request->date;

        return view('form1_date',compact('name','date'));
    }

    function form2() {

        return view('forms.form2');
    }

    function form2_data(Request $request) {
        dd($request -> all());
    }

    function form3() {
        return view('forms.form3');
    }

    function form3_data(Request $request) {
        // now()->subYears(18)
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'dob' => 'required|before:-18 years',
            'gender' => 'required',
            'education_level' => 'required',
            'hobbies' => 'required',
            'bio' => ['required'],
        ], [
            'name.required' => 'الحقل مطلووووووب'
        ]);

        dd($request->all());
    }


    function form4() {
        return view('forms.form4');
    }

    function form4_data(Request $request) {
        $request->validate([
            'name' => 'required',
            'image' => ['required']
        ]);

        // dd($request->all());
        // mkdir()
        // $img_name = rand().time(). $request->file('image')->getClientOriginalName();
          $time_now = date(' Y - m - d H : i : s ' ) ;



        $folder_name = date ('Y' ) . '/' . date ('m' ) ;

        foreach ( $request -> image as $img ) {

            $ex = $img -> getClientOriginalExtension () ;

            $img_name = rand () . rand () . time() . '.' . $ex ;

            $img -> move ( public_path ('images/' . $folder_name ), $img_name );

        }
    }
}
