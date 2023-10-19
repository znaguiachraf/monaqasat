<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        return view('FrontEnd.home');
    }

    // public function page1()
    // {
    //     return view('FrontEnd.login');
    // }


}
