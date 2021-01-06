<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Osiris;

class OsirisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $osiris = Osiris::all();
        return view('admin.osiris',['osiris' => $osiris]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.osirisAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $osiris = new osiris;
        $osiris->judulosiris = $request->get('judulosiris');
        $osiris->deskripsiosiris = $request->get('deskripsiosiris');

        if($request->file('gambarosiris')){
        $file = $request->file('gambarosiris')->store('imageosiris', 'public');  
        $osiris->gambarosiris = $file; 
        } else{
            $osiris->gambarosiris = "";
        }

        $osiris->save();
        return redirect('/osiris');
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
        $osiris = Osiris::findOrFail($id);
        return view('admin.osirisEdit', ['osiris' => $osiris]);
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
            'gambarosiris'  => 'required|max:307200'
        ]);
         $osiris = Osiris::findOrFail($id);
         $osiris->judulosiris = $request->get('judulosiris');
         $osiris->deskripsiosiris = $request->get('deskripsiosiris');
         if($request->file('gambarosiris')){     
             if($osiris->gambarosiris && file_exists(storage_path('app/public/' . $osiris->gambarosiris))){         
             \Storage::delete('public/'.$osiris->gambarosiris);     
        }    
         $file = $request->file('gambarosiris')->store('imageosiris', 'public');     
         $osiris->gambarosiris = $file; 
        }  
         $osiris->save();
         return redirect('/osiris');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $osiris = Osiris::findOrFail($id); 
        $osiris->delete();
        return redirect('/osiris');
        
    }
}
