<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class Mailcontroller extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $name = $request->name;
        $email = $request->email;
        $about = $request->about;

        $tel = $request->tel;
        $message = $request->message;
        if ($tel == '') {
            $tel = '';
        }
        $ValidationRules = [
            'name' => 'required',
            'email' => 'required',
            'about' => 'required',
            'message' => 'required',
        ];

        $validator = Validator::make($request->all(), $ValidationRules);
        if ($validator->fails()) {
            return redirect(App::getlocale().'/contact')
                ->withErrors($validator)
                ->withInput();
        }

        Mail::to('willems.edouard.pro@gmail.com')->send(new Contact($name, $email, $about, $tel, $message));

        return redirect()->back()->with('succes', 'message de succes');
    }
}
