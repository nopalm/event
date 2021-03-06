@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-content">
            <h3>Edit data</h3>
            <div class="divider"></div>
            <br>
            <h4 class="card-title">Judul osiris</h4>
            <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action=" {{route('osiris.update', ['id'=>$osiris->id])}}" method="POST">   
            @csrf   
            <input type="hidden" value="PUT" name="_method">  
            
            <label for="name">Name</label>   
              <input  value="{{$osiris->judulosiris}}" class="form-control"  placeholder="Judul" type="text" name="judulosiris" id="name"/>   
                <br>
                <label for="name">Deskripsi</label>  
              <div class="input-field col s12">
                    <textarea id="textarea2" name="deskripsiosiris" class="materialize-textarea"
                        data-length="1000">{{$osiris->deskripsiosiris}}</textarea>
                </div>  
                <br>
                Current avatar: <br>     
                @if($osiris->gambarosiris)       
                <img src="{{asset('storage/'.$osiris->gambarosiris)}}" width="120px" />
                       <br>
                @else        
                No avatar     
                @endif     <br>     
                <input id="avatar" name="gambarosiris" type="file" class="form-control"> <br>
                 <small  class="text-muted">Kosongkan jika tidak ingin mengubah foto</small> <br>
                 <input  class="btn btn-primary" type="submit"  value="Save"/> 
                 <button onclick="window.history.go(-1)" class="btn btn-primary" > Cancel </button>
        </form>
    </div>
</div>
</div>
@endsection
