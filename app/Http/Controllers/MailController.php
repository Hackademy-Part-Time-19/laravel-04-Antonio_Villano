<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendContacts(Request $request){
        $data = $request->all();

        if ($data['email']==null || $data['description']==null || $data['name']==null) {
            return redirect()->route('contacts')->with('error','i campi inseriti non possono essere vuoti');
        }

        Mail::to('antonio@gmail.com')->send(new ContactMail($data['name'],$data['email'],$data['description']));
        return redirect()->back()->with('success','il form è stato inviato correttamente');

    }
}
