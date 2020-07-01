<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('latihan1.register');
    }

    public function register(Request $request){
        $fullname = $request->firstname . ' ' . $request->lastname;
        return view('latihan1.welcome', compact('fullname'));
    }
}
