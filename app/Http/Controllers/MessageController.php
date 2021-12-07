<?php

namespace App\Http\Controllers;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller {
    
    public function store(){

    $message = request()->validate([
        'company' => 'required',
        'name'=> 'required',
        'email' => 'required|email',
        'telephone' => 'required|numeric',
        'category' => 'required',
        'content' => 'required|min:10'
    ]);
    
    Mail::to('beto.hernandez23@outlook.com')->queue(new MessageReceived($message));

    return back()->with('status','Solicutud de cotización enviada, te responderemos a la brevedad .');

    }
}
