<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Galeri;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::all();
        return view('admin.galeri',['galeri' => $galeri]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galeriAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $galeri = new Galeri;
        $galeri->judulgaleri = $request->get('judulgaleri');
        $galeri->deskripsigaleri = $request->get('deskripsigaleri');

        if($request->file('gambargaleri')){
        $file = $request->file('gambargaleri')->store('imagegaleri', 'public');  
        $galeri->gambargaleri = $file; 
        } else{
            $galeri->gambargaleri = "";
        }

        $galeri->save();
        return redirect('/galeri');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeriEdit', ['galeri' => $galeri]);
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
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'gambargaleri'  => 'required|max:307200'
        ]);
         $galeri = Galeri::findOrFail($id);
         $galeri->judulgaleri = $request->get('judulgaleri');
         $galeri->deskripsigaleri = $request->get('deskripsigaleri');
         if($request->file('gambargaleri')){     
             if($galeri->gambargaleri && file_exists(storage_path('app/public/' . $galeri->gambargaleri))){         
             \Storage::delete('public/'.$galeri->gambargaleri);     
        }    
         $file = $request->file('gambargaleri')->store('imagegaleri', 'public');     
         $galeri->gambargaleri = $file; 
        }  
         $galeri->save();
         return redirect('/galeri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id); 
        $galeri->delete();
        return redirect('/galeri');
        
    }
}
