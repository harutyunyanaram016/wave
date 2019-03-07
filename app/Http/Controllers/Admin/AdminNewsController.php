<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminNewsController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('admin.posts.index', ['posts' => $posts]);
    }

    public function create(Request $request){
        if($request->isMethod('post')){
            $this->validate($request, [
                'name' => 'required',
                'name_ru' => 'required',
                'description' => 'required',
                'description_ru' => 'required',
                'url' => 'required|image|mimetypes:image/*|max:25000'
            ]);
            $file = $request->file('url');
            $name = time() . $file->getClientOriginalName();
            $file->move('images/posts/', $name);
            $input = $request->all();
            $input['url'] = $name;
            $input['type'] = 'image';
            Post::create($input);
            $request->session()->flash('alert-success', 'Ավելացվել է');
            return redirect()->route('admin.news.index');
        }

        return view('admin.posts.create');
    }



    public function edit(Request $request,$id){
        $post = Post::findOrFail($id);
        if($request->isMethod('post')){
            $this->validate($request, [
                'name' => 'required',
                'name_ru' => 'required',
                'description' => 'required',
                'description_ru' => 'required',
                'url' => 'required|image|mimetypes:image/*|max:25000'
            ]);
            $file = $request->file('image');
            $name = time() . $file->getClientOriginalName();
            $file->move('images/posts/', $name);
            $input = $request->all();
            $input['url'] = $name;
            $input['type'] = 'image';
            $post->update($input);
            $request->session()->flash('alert-success', 'փոփոխվել է');
            return redirect()->route('admin.news.index');
        }
        return view('admin.posts.edit',['post' => $post]);
    }


    public function destroy(Request $request,$id){
        $post = Post::findOrFail($id);
        $post->delete();
        $request->session()->flash('alert-success', 'Ջնջնվել է');
        return redirect()->route('admin.news.index');
    }

}
