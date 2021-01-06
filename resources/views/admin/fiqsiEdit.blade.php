@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-content">
            <h3>Edit data</h3>
            <div class="divider"></div>
            <br>
            <h4 class="card-title">Judul fiqsi</h4>
            <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action=" {{route('fiqsi.update', ['id'=>$fiqsi->id])}}" method="POST">   
            @csrf   
            <input type="hidden" value="PUT" name="_method">  
            
            <label for="name">Name</label>   
              <input  value="{{$fiqsi->judulfiqsi}}" class="form-control"  placeholder="Judul" type="text" name="judulfiqsi" id="name"/>   
                <br>
                <label for="name">Deskripsi</label>  
              <div class="input-field col s12">
                    <textarea id="textarea2" name="deskripsifiqsi" class="materialize-textarea"
                        data-length="1000">{{$fiqsi->deskripsifiqsi}}</textarea>
                </div>  
                <br>
                Current avatar: <br>     
                @if($fiqsi->gambarfiqsi)       
                <img src="{{asset('storage/'.$fiqsi->gambarfiqsi)}}" width="120px" />
                       <br>
                @else        
                No avatar     
                @endif     <br>     
                <input id="avatar" name="gambarfiqsi" type="file" class="form-control"> <br>
                 <small  class="text-muted">Kosongkan jika tidak ingin mengubah foto</small> <br>
                 <input  class="btn btn-primary" type="submit"  value="Save"/> 
                 <button onclick="window.history.go(-1)" class="btn btn-primary" > Cancel </button>
        </form>
    </div>
</div>
</div>
@endsection
