<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kontak;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontak = Kontak::all();
        return view('admin.kontak',['kontak' => $kontak]);
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
        // $kontak = Kontak::find($id);
        // return view('admin.kontak',compact('kontak'));
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
        $this->validate($request,[
            'email' => 'required',
            'phone' => 'required',
            'phone_isc' => 'required',
            'phone_fiqsi' => 'required',
            'phone_osiris' => 'required',
            'alamat' => 'required',
            'wa' => 'required',
            'ig' => 'required'
         ]);
     
         $kontak = Kontak::find($id);
         $kontak->email = $request->email;
         $kontak->phone = $request->phone;
         $kontak->phone_isc = $request->phone_isc;
         $kontak->phone_fiqsi = $request->phone_fiqsi;
         $kontak->phone_osiris = $request->phone_osiris;
         $kontak->alamat = $request->alamat;
         $kontak->wa = $request->wa;
         $kontak->ig = $request->ig;
         $kontak->save();
         return redirect('/kontak');
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
