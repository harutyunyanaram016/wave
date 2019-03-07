<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class StaticPageController extends Controller
{
    public function index(){
        $data = DB::table('static_pages')->get();
        return view('admin.staticPages.index',['pages'=>$data]);
    }
    public function create_view(){
        return view('admin.staticPages.create');
    }
    public function create(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'title_en' => 'required',
            'title_ru' => 'required',
            'title_ka' => 'required',
            'content' => 'required',
            'content_en' => 'required',
            'content_ru' => 'required',
            'content_ka' => 'required',
        ]);
        $image = '';
        if ($file = $request->file('image')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images/posts/', $name);


            $image = $name;
        }
        $url = str_slug($request->input('title_en'));

        DB::table('static_pages')->insert(
            [
                'url' => $url,
                'image' => $image,
                'title' => $request->input('title'),
                'title_en' => $request->input('title_en'),
                'title_ru' => $request->input('title_ru'),
                'title_ka' => $request->input('title_ka'),
                'content' => $request->input('content'),
                'content_en' => $request->input('content_en'),
                'content_ru' => $request->input('content_ru'),
                'content_ka' => $request->input('content_ka'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );
        $request->session()->flash('alert-success', 'Page was successful added!');
        return redirect()->route('admin.static.pages.list');
    }
    public function delete($id)

    {
        DB::table('static_pages')->where('id', $id)->delete();
        return back();

    }
    public function edit_view($id){
        $page = DB::table('static_pages')->where('id', $id)->get()->first();
        return view('admin.staticPages.edit',['page'=>$page]);
    }
    public function edit(Request $request,$id){
        $this->validate($request, [
            'title' => 'required',
            'title_en' => 'required',
            'title_ru' => 'required',
            'title_ka' => 'required',
            'content' => 'required',
            'content_en' => 'required',
            'content_ru' => 'required',
            'content_ka' => 'required',
        ]);
        $image = '';
        if ($file = $request->file('image')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images/posts/', $name);


            $image = $name;
        }
        $url = str_slug($request->input('title_en'));
        DB::table('static_pages')
            ->where('id',$id)
            ->update([
                'url' => $url,
                'image' => $image,
                'title' => $request->input('title'),
                'title_en' => $request->input('title_en'),
                'title_ru' => $request->input('title_ru'),
                'title_ka' => $request->input('title_ka'),
                'content' => $request->input('content'),
                'content_en' => $request->input('content_en'),
                'content_ru' => $request->input('content_ru'),
                'content_ka' => $request->input('content_ka'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        return redirect()->route('admin.static.pages.list');

    }
}

