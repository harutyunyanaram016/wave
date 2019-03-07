<?php

namespace App\Http\Controllers\Admin;

use App\Image;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminSliderController extends Controller
{
    public function index(){

        $slider  =  Slider::find(1);

        return view('admin.slides.index', ['model'=> $slider,]);

    }

    public function edit(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'name_ru' => 'required',
            'description' => 'required',
            'description_ru' => 'required',
        ]);
        $input = $request->all();
        $slider  =  Slider::find(1);
        $slider->update($input);
        return redirect()->back();
    }

    public function upload(Request $request){

        $this->validate($request, [
            'image' => 'required|image|mimetypes:image/*|max:25000'
        ]);
        $file = $request->file('image');
        $name = time() . $file->getClientOriginalName();
        $file->move('images/slider/', $name);
        Image::create(['slider_id'=>1,'image'=>$name]);

        return redirect()->back();




    }

    public function delete(Request $request){
        if($request->has('id')){
            $id = $request->get('id');
            $photo = Image::findOrFail($id);
            $photo ->delete();
            return response()->json(['message' => 'yes']);
        }
        return response()->json(['message' => 'no']);
    }

}
