<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact=Contact::orderBy('id','desc')->get();
        return view('backend.pages.contact.index',compact('contact'));
    }

    public function showSingleData(contact $id)
    {
        $showContact =Contact::find($id);
        return view('backend.pages.contact.show',compact('showContact'));
    }

    public function Delete($id)
    {
        $data =Contact::find($id);
        $data->delete();
        session()->flash('error','Messege Deleted successfully !!');
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $request->validate([
            'name' => 'required|max:150',
            'email' => 'required|max:150',
            'subject' => 'required|max:150',
            'message' => 'required|max:150'
        ],
        [
            'name.required' => 'Name is required',
            'email.required' => 'Enter a valid Email',
            'subject.required' => 'Subject is requried',
            'message.required' => 'Message is required'
        ]
    
    
    );
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        if ($contact->save()) {
            session()->flash('success','Message send successfully !!');
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
