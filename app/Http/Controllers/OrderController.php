<?php

namespace App\Http\Controllers;

use App\Order;
use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request;
use App\Mail\OrderAlertMail;
use Illuminate\Support\Facades\Mail;

class OrderController extends BaseController
{
    
    public function __construct()
    {
       $this->middleware('auth', ['except' => ['store']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Order::all();

        return view('order/index',compact('item'));
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
    public function store(OrderRequest $request)
    {
        
        if (isset($request->functions)){
            $functions = implode(", ",$request->functions);
        }else{
            $functions = " ";
        }


        if (isset($request->side_services)){
        $side_services = implode(", ",$request->side_services);
        }else{
            $side_services = " ";
        }

        if (isset($request->additional_services)){
            $additional_services = implode(", ",$request->additional_services);
        }else{
            $additional_services = " ";
        }


        Order::create([

            'name'=>$request->name,
            'mail'=>$request->mail,
            'phone'=>$request->phone,
            'company_name'=>$request->company_name,
            'business'=>$request->business,
            'design'=>$request->design,
            'type'=>$request->type,
            'functions'=>$functions,
            'side_services'=>$side_services,
            'lang'=>$request->lang,
            'other'=>$request->other,
            'sections'=>$request->sections,
            'navigation'=>$request->navigation,
            'information_blocks'=>$request->information_blocks,
            'desires'=>$request->desires,
            'conten'=>$request->conten,
            'additional_services'=> $additional_services,


        ]);

        // Mail::to("info@wave-it.ru ")->send(new OrderAlertMail($request->only('name','mail','phone')));
        return redirect()->back()->with('message', 'Պատվերը Ընդունված Է, Մեր Աշխատակիցը Կզանգահարի Ձեզ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $item = Order::find($id);
        $item->delete();

        return redirect()->back()->with('message', 'Պատվերը Հեռացված Է');
    }
}
