<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Isc;

class IscController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $isc = Isc::all();
        return view('admin.isc',['isc' => $isc]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.iscAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $isc = new Isc;
        $isc->judulisc = $request->get('judulisc');
        $isc->deskripsiisc = $request->get('deskripsiisc');

        if($request->file('gambarisc')){
        $file = $request->file('gambarisc')->store('imageisc', 'public');  
        $isc->gambarisc = $file; 
        } else{
            $isc->gambarisc = "";
        }

        $isc->save();
        return redirect('/isc');
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
        $isc = Isc::findOrFail($id);
        return view('admin.iscEdit', ['isc' => $isc]);
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
            'gambarisc'  => 'required|max:307200'
        ]);
         $isc = Isc::findOrFail($id);
         $isc->judulisc = $request->get('judulisc');
         $isc->deskripsiisc = $request->get('deskripsiisc');
         if($request->file('gambarisc')){     
             if($isc->gambarisc && file_exists(storage_path('app/public/' . $isc->gambarisc))){         
             \Storage::delete('public/'.$isc->gambarisc);     
        }    
         $file = $request->file('gambarisc')->store('imageisc', 'public');     
         $isc->gambarisc = $file; 
        }  
         $isc->save();
         return redirect('/isc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isc = Isc::findOrFail($id); 
        $isc->delete();
        return redirect('/isc');
        
    }
}
