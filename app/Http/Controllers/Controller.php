<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

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

    public function guard(Request $request)
    {
        return view('guard');
    }

    public function service(Request $request)
    {
        return view('service');
    }

    public function contact(Request $request)
    {
        return view('contact');
    }



}
