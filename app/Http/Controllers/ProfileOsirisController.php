<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProfileOsiris;

class ProfileOsirisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = ProfileOsiris::all();
        return view('admin.profile_osiris',['about' => $about]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = ProfileIsc::find($id);
        return view('admin.profile_iscEdit',compact('about'));
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
         $about = ProfileOsiris::findOrFail($id);
         $about->nama_prof = $request->get('nama_prof');
         $about->desc_prof = $request->get('desc_prof');
         $about->tema_prof = $request->get('tema_prof');
         $about->ig_prof = $request->get('ig_prof');
         $about->g_form = $request->get('g_form');
         $about->tema_maskot = $request->get('tema_maskot');
         $about->berkas = $request->get('berkas');
         $about->text = $request->get('text');
         $about->desc_text = $request->get('desc_text');
         $about->slogan_maskot = $request->get('slogan_maskot');
         if($request->file('gambar_prof')){     
             if($about->gambar_prof && file_exists(storage_path('app/public/' . $about->gambar_prof))){         
             \Storage::delete('public/'.$about->gambar_prof);     
        }    
         $file = $request->file('gambar_prof')->store('imageprofileOsiris', 'public');     
         $about->gambar_prof = $file; 
        }  
        
        if($request->file('maskot')){     
            if($about->maskot && file_exists(storage_path('app/public/' . $about->maskot))){         
            \Storage::delete('public/'.$about->maskot);     
       }    
        $file = $request->file('maskot')->store('maskotprofileIsc', 'public');     
        $about->maskot = $file; 
       } 
         $about->save();
         return redirect('/profile_osiris');
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
}
