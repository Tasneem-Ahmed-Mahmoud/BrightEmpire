<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    
function index(){
    return view('frontend.contact');
}

    public function store(ContactRequest $request)
    {
        $message=Contact::create([
          'name'=>$request->name,
          'message'=>$request->message,
          'subject'=>$request->subject,
          'email'=>$request->email
        ]);

        if($message){
            
            Alert::success('success', 'message send successfully');
        } else {
            Alert::error('error', ' failed');
        }
        return redirect()->back();
    }

}
