<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function insertContactInfo(Request $request){
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
        $contact->messege = $request->message;
        $contact->save();
        if ($contact->save()) {
            session()->flash('success','Message send successfully !!');
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }
}
