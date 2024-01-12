<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
// use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;
// use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function show(Request $request)
    {
        return view('index');
    }

    public function About(Request $request)
    {
        return view('about');
    }

    public function guarder(Request $request)
    {
        return view('guarder');
    }

    public function service(Request $request)
    {
        return view('service');
    }

    public function contact(Request $request)
    {
        return view('contact');
    }

    public function contactMailSend(Request $request){

        // dd($request->all());
        Mail::to('susana@example.com')->send(new ContactMail($request));
        return redirect('/contact');
        //  -> with ('messageSend' , 'Your message has been
        // sent! Thank you for your interest.');
        }


    public function getSession(){
        // get session
        return session('testSession');
    }


    public function createSession(){
        // create session
        session()->put('testSession','The First Laravel Session');
        return 'session is start ' . session('testSession');

        //delete session
        //session()->forget('testSession');
        // return "the delete session is ".session('testSession');



    }


    public function deleteAllSession(){
        // delete all session
        session()->flush();
        return "all session deleted";

    }

    public function flashSession(){
        //Used to create a session that can be used for one time only
        session()->flash('testFlash',"This is the Flash Message");
        return session('testFlash');
    }





}
