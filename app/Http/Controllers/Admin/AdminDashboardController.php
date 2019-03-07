<?php



namespace App\Http\Controllers\Admin;





use App\Order;


use App\User;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;


class AdminDashboardController extends Controller

{



    public function index()

    {

        $orders_count = Order::all()->count();

        $users_count = User::all()->count();



//        $categories_count = Category::all()->count();

        return view('admin.index', [
//            'categories_count'=>$categories_count,
            'users_count'=>$users_count,
            'orders_count'=> $orders_count]);

    }
    public function settings(Request $request){
        $model = Setting::find(1);
        if ($request->isMethod('post')){

            $request->validate([
                'email' => 'required',
                'phone' => 'required',
                'description' => 'required',
                'description_ru' => 'required',
                'address_hy' => 'required',
                'address_ru' => 'required',
                'days_hy' => 'required',
                'days_ru' => 'required',
                'hours' => 'required',


            ]);
//            dd($request->all());

            $inputs = $request->all();
            if ($file = $request->file('logo')){
                $name = 'logo' . $file->getClientOriginalName();
                $file->move('images/', $name);


                $inputs['logo'] = $name;
            }

            $model->update($inputs);
            $request->session()->flash('alert-success', 'Կարգավորումները պահպանվել էն');



            return redirect()->route('admin.settings');
        }
        return view('admin.settings',['model'=>$model]);
    }

}

