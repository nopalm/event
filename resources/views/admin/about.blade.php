@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-content">
            <h3>About us</h3>
            <div class="divider"></div>
            <br>
            @foreach($about as $p)
            <h4 class="card-title">Judul</h4>
            <form enctype="multipart/form-data" method="post" action="{{ route('about.update', $p->id) }}" class="m-t-40">
                @method('PATCH')
                @csrf
                <div class="input-field">
                    <input id="name" type="text" name="judulab" value="{{ $p->judulab }}">
                    <label for="name">Masukkan Judul</label>
                </div>
                <h4 class="card-title">Deskripsi</h4>
                <div class="input-field col s12">
                    <textarea id="textarea2" name="deskripsiab" class="materialize-textarea"
                        data-length="1000">{{ $p->deskripsiab}}</textarea>
                    <label for="textarea2">Deskripsi</label>
                </div> 
                <br>
                <h4 class="card-title">Tema</h4>
                <div class="input-field col s12">
                    <textarea id="textarea2" name="tema" class="materialize-textarea"
                        data-length="1000">{{ $p->tema}}</textarea>
                    <label for="textarea2">Tema</label>
                </div> 
                <br>
                <br>
                <h4 class="card-title">Tanggal</h4>
                <div class="input-field col s12">
                    <textarea id="textarea2" name="tanggal" class="materialize-textarea"
                        data-length="1000">{{ $p->tanggal}}</textarea>
                    <label for="textarea2">Tanggal</label>
                </div> 
                <br>
                <br>
                <h4 class="card-title">Deskripsi footer</h4>
                <div class="input-field col s12">
                    <textarea id="textarea2" name="desc_foot" class="materialize-textarea"
                        data-length="1000">{{ $p->desc_foot}}</textarea>
                    <label for="textarea2">Deskripsi footer</label>
                </div> 
                <br>
                <br>
                <!-- start logo antasena -->
                Logo Antasena: <br>     
                @if($p->gambarab)       
                <img src="{{asset('storage/'.$p->gambarab)}}" width="120px" />
                       <br>
                @else        
                No avatar     
                @endif     <br>     
                <input id="avatar" name="gambarab" type="file" class="form-control"> <br>
                 <small  class="text-muted">Kosongkan jika tidak ingin mengubah foto</small> <br>                
                <div class="divider"></div>
                <!-- end logo  -->

                <!-- start logo antasena -->
                Logo Website: <br>     
                @if($p->logo)       
                <img src="{{asset('storage/'.$p->logo)}}" width="120px" />
                       <br>
                @else        
                No avatar     
                @endif     <br>     
                <input id="avatar" name="logo" type="file" class="form-control"> <br>
                 <small  class="text-muted">Kosongkan jika tidak ingin mengubah foto</small> <br>                
                <div class="divider"></div>
                <!-- end logo  -->

                <!-- start logo antasena -->
                Logo Footer: <br>     
                @if($p->logo_foot)       
                <img src="{{asset('storage/'.$p->logo_foot)}}" width="120px" />
                       <br>
                @else        
                No avatar     
                @endif     <br>     
                <input id="avatar" name="logo_foot" type="file" class="form-control"> <br>
                 <small  class="text-muted">Kosongkan jika tidak ingin mengubah foto</small> <br>                
                <div class="divider"></div>
                <!-- end logo  -->

                <div class="card-content">
                    <!-- <a href="{{ route('about.edit',$p->id)}}">
                                        <button class="btn cyan waves-effect waves-light" type="submit" name="action">Edit
                                        </button></a> -->
                    <button class="btn cyan waves-effect waves-light" type="submit">Save
                    </button>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
