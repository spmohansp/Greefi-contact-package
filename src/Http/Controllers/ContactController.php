<?php

namespace GreefiTech\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use GreefiTech\Contact\Models\ContactForm;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('Contact::contact');
    }

    public function SaveContact(){
        $this->validate(request(),[
            'name'=>'required',
            'email'=>'required|email',
            'mobile'=>'required|min:10|max:10',
            'address'=>'required',
        ]);
        ContactForm::create(request()->all());
        return back()->with('success',['Monthly Running Entry','Created Successfully']);
    }
}
