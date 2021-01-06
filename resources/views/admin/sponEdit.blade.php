@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-content">
            <h3>Edit data</h3>
            <div class="divider"></div>
            <br>
            <h4 class="card-title">Judul spon</h4>
            <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action=" {{route('sponsor.update', ['id'=>$spon->id])}}" method="POST">   
            @csrf   
            <input type="hidden" value="PUT" name="_method">  
            
            <label for="name">Name</label>   
              <input  value="{{$spon->judulspon}}" class="form-control"  placeholder="Judul" type="text" name="judulspon" id="name"/>   
                <br>
              
                Current avatar: <br>     
                @if($spon->gambarspon)       
                <img src="{{asset('storage/'.$spon->gambarspon)}}" width="120px" />
                       <br>
                @else        
                No avatar     
                @endif     <br>     
                <input id="avatar" name="gambarspon" type="file" class="form-control"> <br>
                 <small  class="text-muted">Kosongkan jika tidak ingin mengubah foto</small> <br>
                 <input  class="btn btn-primary" type="submit"  value="Save"/> 
                 <button onclick="window.history.go(-1)" class="btn btn-primary" > Cancel </button>
        </form>
    </div>
</div>
</div>
@endsection
