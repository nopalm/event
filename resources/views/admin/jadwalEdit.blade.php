@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-content">
            <h3>Edit data</h3>
            <div class="divider"></div>
            <br>
            <h4 class="card-title">Judul jadwal</h4>
            <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action=" {{route('jadwal.update', ['id'=>$jadwal->id])}}" method="POST">   
            @csrf   
            <input type="hidden" value="PUT" name="_method">  
            
            <label for="name">Judul</label>   
              <input  value="{{$jadwal->juduljadwal}}" class="form-control"  placeholder="Judul" type="text" name="juduljadwal" id="name"/>   
                <br>
                <label for="name">Tanggal </label>   
              <input  value="{{$jadwal->tanggaljadwal}}" class="form-control"  placeholder="Judul" type="text" name="tanggaljadwal" id="name"/>   
                <br>
                <label for="name">Deskripsi</label>  
              <div class="input-field col s12">
                    <textarea id="textarea2" name="deskripsijadwal" class="materialize-textarea"
                        data-length="1000">{{$jadwal->deskripsijadwal}}</textarea>
                </div>  
                <br>
                 <input  class="btn btn-primary" type="submit"  value="Save"/> 
                 <button onclick="window.history.go(-1)" class="btn btn-primary" > Cancel </button>
        </form>
    </div>
</div>
</div>
@endsection
