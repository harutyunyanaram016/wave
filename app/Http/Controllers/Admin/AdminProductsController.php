<?php



namespace App\Http\Controllers\Admin;



use App\Category;

use App\Creator;
use App\Http\Requests\PhotosRequest;

use App\Photo;

use App\Product;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;



class AdminProductsController extends Controller

{

















    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $products = Product::all();



        return view('admin.products.index', ['products' => $products]);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $categories = Category::whereNull('parent_id')->get();

        $creators = Creator::all();

        return view('admin.products.create', ['categories'=>$categories,'creators'=>$creators]);

    }

    public function deleteImage(Request $request){
        if($request->has('id')){
            $id = $request->get('id');
            $photo = Photo::findOrFail($id);
            $photo ->delete();
            return response()->json(['message' => 'yes']);
        }
        return response()->json(['message' => 'no']);
    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $this->validate($request, [
            'images' => 'required',
            'brand' => 'required',
            'category_id' => 'required',
            'creator_id' => 'required',
            'subcategory_id' => 'required',

        ]);

        $input = $request->all();
        $input['url'] = str_slug($request->input('url')).time();
        $product = Product::create($input);
        if ($request->get('images')){
            foreach ($request->get('images') as $item)
                $photo = Photo::create(['file'=> $item,'product_id'=>$product->id]);
        }
        return redirect()->route('admin.products.index');





    }

    public function  upload(Request $request){
        $this->validate($request, [
            'file' => 'required|image|mimetypes:image/*|max:6000'
        ]);
        $name = '';
        if ($file = $request->file('file')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images/product/', $name);

            $inputs = $request->all();
            $inputs['image'] = $name;
        }

        $url = $name;
        return response()->json(['uri' => $url]);
    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function xhrGetSubcategories($id)

    {

        $subcategories = Category::where('parent_id','=', $id)->select('id', 'name')->get();

        header('Content-Type: application/json');

        echo json_encode($subcategories);

    }

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

        $product = Product::findOrFail($id);

        $categories = Category::whereNull('parent_id')->get();
        $creators = Creator::all();


        return view('admin.products.edit', ['categories'=>$categories, 'product'=>$product,'creators'=>$creators]);

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
        $this->validate($request, [
            'images' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',

        ]);


        $product = Product::findOrFail($id);

        $input = $request->all();




        Photo::where('product_id',$id)->delete();



        //photo






        $product->update($input);
        if ($request->get('images')){
            foreach ($request->get('images') as $item)
                $photo = Photo::create(['file'=> $item,'product_id'=>$product->id]);
        }




        return redirect()->route('admin.products.index')->with('id', $id);

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        $product = Product::findOrFail($id);



//        unlink(public_path(). $icon->file);



//        $photo->delete();
//
//        $icon->delete();
        Photo::where('product_id',$id)->delete();
        $product->delete();





        return redirect()->route('admin.products.index');

    }

}

