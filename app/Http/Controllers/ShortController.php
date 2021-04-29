<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Short;
use App\Http\Requests\ShortRequest;

class ShortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Short::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShortRequest $request)
    {
        $longUrl = $request->input("longUrl");
        
        $kortikuSlug = Short::where("longUrl", "=", $longUrl)->first();
        if(Short::where("longUrl", "=", $longUrl)->first()){
            return $kortikuSlug;
        }else{
            $slug = self::makeSlug();

            $created = self::createLink($longUrl, $slug);
            if($created == 1){
                return $slug;
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $slug)
    {
        //
        $kortikuLink = Short::where('slug', "=", $slug)->first();
        if($kortikuLink){
            $longUrl = $kortikuLink->longUrl;
            return redirect()->away( $longUrl);
        }else{
            return "does not exitts";
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function makeSlug(){
        $randomBytes = random_bytes(3);
        $slug = bin2hex($randomBytes);
        if(Short::where("slug", "=", $slug)->first()){
            self::makeSlug();
        }else{
            return $slug;
        }
    }

    function createLink(string $link, string $slug){
       $kortikuLink = new Short;
       $kortikuLink->longUrl = $link;
       $kortikuLink->slug = $slug;
       return $kortikuLink->save();
    }
}
