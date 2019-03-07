<?php



namespace App\Http\Controllers\Admin;



use App\Category;

use App\Subcategory;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;



class AdminCategoriesController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {



        $categories = Category::all();
        $main  =  Category::whereNull('parent_id')->get();

//        dd($main);

        return view('admin.categories.index', ['categories'=> $categories,'mains'=> $main]);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        //

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {
        $request->validate([

            'name' => 'required',
            'name_ru' => 'required',
            'url' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',

        ]);

        $inputs = $request->all();

        if ($file = $request->file('image')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images/categories/', $name);


            $inputs['image'] = $name;
        }

        $inputs['url'] = str_slug($request->input('url')).time();



        Category::create($inputs);



        $request->session()->flash('alert-success', 'Կատեգորիան ավելացվել է');



        return redirect()->route('admin.categories.index');

    }





//    public function storeSubcategory(Request $request)

//    {

//        Subcategory::create($request->all());

//        return redirect()->route('admin.categories.index');

//    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        //

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        $category = Category::findOrFail($id);
        if(!$category){
            return redirect()->back();
        }

        $main  =  Category::whereNull('parent_id')->get();
        $categories = Category::all();


        return view('admin.categories.edit', ['category'=> $category, 'categories'=> $categories, 'mains'=>$main]);

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)

    {
        $request->validate([

            'name' => 'required',
            'name_ru' => 'required',
            'name_en' => 'required',
            'name_ka' => 'required',


        ]);

        $inputs = $request->except('image');
        if ($file = $request->file('image')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images/categories/', $name);


            $inputs['image'] = $name;
        }


        Category::findOrFail($id)->update($inputs);



        $request->session()->flash('alert-success', 'Category was successful edited!');

        return redirect()->route('admin.categories.index');

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id, Request $request)

    {

        Category::findOrFail($id)->delete();



        $request->session()->flash('alert-success', 'Category was successful deleted!');

        return redirect()->route('admin.categories.index');

    }

}

