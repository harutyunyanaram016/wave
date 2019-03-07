<?php

namespace App\Http\Controllers\Admin;

use App\Artical;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\AdFile;

class ArticalController extends Controller
{
    public function index(){
        $posts = Artical::all();
        return view('admin.artical.index', ['posts' => $posts]);
    }

    public function create(Request $request){
        if($request->isMethod('post')){
            $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
                'type' => 'required',
                'phone' => 'required',

            ]);


            $input = $request->all();

            $input['user_id'] = Auth::user()->id;

//            dd($input);

            $artical = Artical::create($input);
            if ($request->has('images')){
                foreach ($request->get('images') as $item)
                    $photo = AdFile::create(['name'=> $item,'artical_id'=>$artical->id]);
            }
            $request->session()->flash('alert-success', 'Ad added!');
            return redirect()->route('admin.artical.index');
        }

        return view('admin.artical.create');
    }

    public function edit(Request $request,$id){
        $post = Artical::findOrFail($id);

        if($request->_method == "PATCH"){
            $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
                'type' => 'required',
                'phone' => 'required',

            ]);


            AdFile::where('artical_id',$id)->delete();
            $input = $request->all();
            if ($request->has('images')){
                foreach ($request->get('images') as $item)
                    $photo = AdFile::create(['name'=> $item,'artical_id'=>$id]);
            }
            if(empty($input['status'])){
                $input['status'] = 0;
            }
//            dd($input);

            $post->update($input);
            $request->session()->flash('alert-success', 'Ad edited!');
            return redirect()->route('admin.artical.index');
        }
        return view('admin.artical.edit',['post' => $post]);
    }

    public function destroy($id)

    {

        $ad = Artical::findOrFail($id);

        $ad->delete();
        AdFile::where('artical_id',$id)->delete();


        return redirect()->route('admin.artical.index');

    }

    public function  upload(Request $request){
        $this->validate($request, [
            'file' => 'required|image|mimetypes:image/*|max:6000'
        ]);
        dd(100);
        $name = '';
        if ($file = $request->file('file')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images/artical/', $name);

            $inputs = $request->all();
            $inputs['image'] = $name;
        }

        $url = $name;
        return response()->json(['uri' => $url]);
    }

    public function deleteImage(Request $request){
        if($request->has('id')){
            $id = $request->get('id');
            $photo = AdFile::findOrFail($id);
            $photo ->delete();
            return response()->json(['message' => 'yes']);
        }
        return response()->json(['message' => 'no']);
    }

    public function  statusYes(Request $request){
        $request->validate([
            'id' => 'required|numeric',
        ]);
        $post = Artical::findOrFail($request->get('id'));
        if($post){
            $post->update(array('status'=>1));
            return response()->json(['message' => 'yes']);
        }
        return response()->json(['message' => 'no']);
    }
    public function  statusNo(Request $request){
        $request->validate([
            'id' => 'required|numeric',
        ]);
        $post = Artical::findOrFail($request->get('id'));
        if($post){
            $post->update(array('status'=>0));
            return response()->json(['message' => 'yes']);
        }
        return response()->json(['message' => 'no']);
    }
}
