<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderEmail;
use Illuminate\Support\Facades\Mail;

class OrderMailController extends Controller
{
    public function send(Request $request)
    {
        Mail::to("info@wave-it.ru")->send(new OrderEmail($request->all()));
        return redirect()->back()->with('SendMail', 'Նամակը Ուղղարկված է։ Շնորհակալություն');
    }
}
