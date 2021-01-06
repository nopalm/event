<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Fiqsi;

class FiqsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fiqsi = Fiqsi::all();
        return view('admin.fiqsi',['fiqsi' => $fiqsi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fiqsiAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $fiqsi = new Fiqsi;
        $fiqsi->judulfiqsi = $request->get('judulfiqsi');
        $fiqsi->deskripsifiqsi = $request->get('deskripsifiqsi');

        if($request->file('gambarfiqsi')){
        $file = $request->file('gambarfiqsi')->store('imagefiqsi', 'public');  
        $fiqsi->gambarfiqsi = $file; 
        } else{
            $fiqsi->gambarfiqsi = "";
        }

        $fiqsi->save();
        return redirect('/fiqsi');
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
        $fiqsi = Fiqsi::findOrFail($id);
        return view('admin.fiqsiEdit', ['fiqsi' => $fiqsi]);
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
            'gambarfiqsi'  => 'required|max:307200'
        ]);
         $fiqsi = Fiqsi::findOrFail($id);
         $fiqsi->judulfiqsi = $request->get('judulfiqsi');
         $fiqsi->deskripsifiqsi = $request->get('deskripsifiqsi');
         if($request->file('gambarfiqsi')){     
             if($fiqsi->gambarfiqsi && file_exists(storage_path('app/public/' . $fiqsi->gambarfiqsi))){         
             \Storage::delete('public/'.$fiqsi->gambarfiqsi);     
        }    
         $file = $request->file('gambarfiqsi')->store('imagefiqsi', 'public');     
         $fiqsi->gambarfiqsi = $file; 
        }  
         $fiqsi->save();
         return redirect('/fiqsi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fiqsi = Fiqsi::findOrFail($id); 
        $fiqsi->delete();
        return redirect('/fiqsi');
        
    }
}
