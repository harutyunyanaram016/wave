<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Mail\Contact as Cont;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::orderBy('created_at','desc')
        // ->where('rem', 0)
        ->get();
        return view('contact.index')->with('contacts', $contacts);
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
       $this->validate($request, [
           'name' => 'required',
           'email' => 'required|email',
           'message' => 'required',
       ]);
        $token = $request->all();
        
        $email1= new Cont($token);
        Mail::to('arshbabayan@mail.ru')->send($email1);
       
        $contact= new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        
        // dd($contact);

        if ($contact->save()) {
            
        //   return response()->json($contact);
          return redirect(route('index'))->with('success', 'Հաղորդագրությունը ուղարկված է');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contact.show')->with('contact', $contact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);

        if ($contact->delete()) {
          return redirect(action('ContactController@index'))->with('success', 'Հաղորդագրությունը ջնջված է');
        }
    }

    public function rem(Request $request)
    {
        $contact = Contact::findOrFail($request->contact_id);
        $contact->rem = $request->rem;

        if ($contact->save()) {
          return response()->json($contact);
        }
    }

    public function rem_contacts(Request $request)
    {
      $contacts = Contact::orderBy('created_at','desc')
      ->where('rem', 1)
      ->get();
      return view('contact.rem_contacts')->with('contacts', $contacts);
    }
}
