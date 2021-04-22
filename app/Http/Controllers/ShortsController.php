<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShortsController extends Controller
{
    //
    public function index(Request $request){
        $longUrl = $request->input('url');
        // dd($request->getContent());
        // dd(uniqid());
        // dd(random_bytes(5));
        // return view('shorts.index');
        $randomBytes = random_bytes(3);
        $short = DB::table('shorts')->where('longUrl', '=', $longUrl)->get();
        if($short ->count() < 1){
            dd(bin2hex($randomBytes));
        }else{
            dd('xxx');
        }
    }
    
    public function shorten($slug){
        // return $slug;
    }
}
