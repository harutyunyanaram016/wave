<?php

namespace App\Http\Controllers\Admin;

use App\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
class AdminPartnerController extends Controller
{
    public function index(){
        $partners = Partner::all();
        return view('admin.partners.index', [ 'partners'=> $partners]);
    }



    public function store(Request $request)

    {

        $request->validate([

            'name' => 'required',
            'name_ru' => 'required',
            'name_en' => 'required',
            'name_ka' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|required|max:10000',

        ]);


        $inputs = $request->all();
        if ($file = $request->file('image')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images/partners/', $name);


            $inputs['image'] = $name;
        }
        $inputs["image"] = $name;
        Partner::create($inputs);



        $request->session()->flash('alert-success', 'Partner was successful added!');



        return redirect()->route('admin.partners.index');

    }
}
