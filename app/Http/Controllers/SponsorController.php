<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Sponsor;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spon = Sponsor::all();
        return view('admin.spon',['spon' => $spon]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sponAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $spon = new Sponsor;
        $spon->judulspon = $request->get('judulspon');

        if($request->file('gambarspon')){
        $file = $request->file('gambarspon')->store('imagespon', 'public');  
        $spon->gambarspon = $file; 
        } else{
            $spon->gambarspon = "";
        }

        $spon->save();
        return redirect('/sponsor');
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
        $spon = Sponsor::findOrFail($id);
        return view('admin.sponEdit', ['spon' => $spon]);
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
            'gambarspon'  => 'required|max:307200'
        ]);
         $spon = Sponsor::findOrFail($id);
         $spon->judulspon = $request->get('judulspon');
         if($request->file('gambarspon')){     
             if($spon->gambarspon && file_exists(storage_path('app/public/' . $spon->gambarspon))){         
             \Storage::delete('public/'.$spon->gambarspon);     
        }    
         $file = $request->file('gambarspon')->store('imagespon', 'public');     
         $spon->gambarspon = $file; 
        }  
         $spon->save();
         return redirect('/sponsor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $spon = Sponsor::findOrFail($id); 
        $spon->delete();
        return redirect('/sponsor');
        
    }
}
