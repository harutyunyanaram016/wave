<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Todo::all();

        return view('admin/slide/index',compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = Todo::all();
        return view('admin/slide.create',compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file')){
            $path = $request->file('file')->store('images');

//            $url = '/app/'.$path;
        }
        $item = new Todo();
        $item->text = $request->text;
        $item->photo = $path;
        $item->save();

        // redirect

        return redirect('admin/slide');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Todo::find($id);
        return view('admin/slide.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {




        if ($request->hasFile('file')){
            $todo = Todo::find($id);
            $nam = class_basename($todo->photo);
            Storage::delete('images/'.$nam);
            $path = $request->file('file')->store('images');


        }else {
            $todo = Todo::find($id);
            $path = $todo->photo;
        }
        $item = Todo::find($id);
        $item->photo = $path;
        $item->text = $request->text;
        $item->update();
        return redirect()->route('slide.index')
            ->with('success','Slider updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Todo::find($id);
        $item->delete();

        Session::flash('message', 'Successfully deleted the Slide!');
        return redirect()->route('slide.index');
    }
}
