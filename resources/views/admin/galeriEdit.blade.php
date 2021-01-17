@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-content">
            <h3>Edit data</h3>
            <div class="divider"></div>
            <br>
            <h4 class="card-title">Judul galeri</h4>
            <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action=" {{route('galeri.update', ['id'=>$galeri->id])}}" method="POST">   
            @csrf   
            <input type="hidden" value="PUT" name="_method">  
            
            <label for="name">Name</label>   
              <input  value="{{$galeri->judulgaleri}}" class="form-control"  placeholder="Judul" type="text" name="judulgaleri" id="name"/>   
                <br>
                <label for="name">Deskripsi</label>  
              <div class="input-field col s12">
                    <textarea id="textarea2" name="deskripsigaleri" class="materialize-textarea"
                        data-length="1000">{{$galeri->deskripsigaleri}}</textarea>
                </div>  
                <br>
                Current avatar: <br>     
                @if($galeri->gambargaleri)       
                <img src="{{asset('storage/'.$galeri->gambargaleri)}}" width="120px" />
                       <br>
                @else        
                No avatar     
                @endif     <br>     
                <input id="avatar" name="gambargaleri" type="file" class="form-control"> <br>
                 <small  class="text-muted">Kosongkan jika tidak ingin mengubah foto</small> <br>
                 <input  class="btn btn-primary" type="submit"  value="Save"/> 
                 <button onclick="window.history.go(-1)" class="btn btn-primary" > Cancel </button>
        </form>
    </div>
</div>
</div>
@endsection
