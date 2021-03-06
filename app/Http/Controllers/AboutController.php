<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view('admin.about',['about' => $about]);
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
        $about = About::find($id);
        return view('admin.aboutEdit',compact('about'));
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
         $about = About::findOrFail($id);
         $about->judulab = $request->get('judulab');
         $about->deskripsiab = $request->get('deskripsiab');
         $about->tema = $request->get('tema');
         $about->tanggal = $request->get('tanggal');
         $about->desc_foot = $request->get('desc_foot');
         if($request->file('gambarab')){     
             if($about->gambarab && file_exists(storage_path('app/public/' . $about->gambarab))){         
             \Storage::delete('public/'.$about->gambarab);     
        }    
         $file = $request->file('gambarab')->store('imageab', 'public');     
         $about->gambarab = $file; 
        }
        if($request->file('logo')){     
            if($about->gambarab && file_exists(storage_path('app/public/' . $about->logo))){         
            \Storage::delete('public/'.$about->logo);     
       }    
        $file = $request->file('logo')->store('logo', 'public');     
        $about->logo = $file; 
       }
       
        if($request->file('logo_foot')){     
            if($about->gambarab && file_exists(storage_path('app/public/' . $about->logo_foot))){         
            \Storage::delete('public/'.$about->logo_foot);     
       }    
        $file = $request->file('logo_foot')->store('logo_foot', 'public');     
        $about->logo_foot = $file; 
       }

         $about->save();
         return redirect('/about');
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
