<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShortsController extends Controller
{
    //
    public function index(Request $request){
        dd($request->input('url'));
        // dd($request->getContent());
        // dd(uniqid());
        // dd(random_bytes(5));
        // return view('shorts.index');
    }
    
    public function shorten($slug){
        $randomBytes = random_bytes(3);
        dd(bin2hex($randomBytes));
        // return $slug;
    }
}
