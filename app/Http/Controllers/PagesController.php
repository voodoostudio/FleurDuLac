<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Api\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Session;

class PagesController extends Controller
{
    public function getIndex(){
        return view('pages.index');
    }

    public function getRooms(){
        return view('pages.rooms');
    }

    public function getRestaurant(){
        return view('pages.restaurant');
    }

    public function getBarAndTerrace(){
        return view('pages.bar_and_terrace');
    }

    public function getEvents(){
        return view('pages.events');
    }

    public function getContact(){
        return view('pages.contact');
    }

    public function postContact(request $request){

        $this->validate($request, [
            'name' => 'required|min:2',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data = array(
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'bodyMessage' => $request->message
        );
        Mail::send('emails.welcome', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('dipasatdi@gmail.com');
            $message->subject('Message to you');
        });

        Session::flash('success', 'Your email was send!');

        return redirect('/');
    }
}
