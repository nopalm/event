@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-content">
            <h3>Profile fiqsi</h3>
            <div class="divider"></div>
            <br>
            @foreach($about as $p)
            <h4 class="card-title">Judul</h4>
            <form enctype="multipart/form-data" method="post" action="{{ route('profile_fiqsi.update', $p->id) }}" class="m-t-40">
                @method('PATCH')
                @csrf
                <div class="input-field">
                    <input id="name" type="text" name="nama_prof" value="{{ $p->nama_prof }}">
                    <label for="name">Masukkan Judul</label>
                </div>
                <h4 class="card-title">Deskripsi</h4>
                <div class="input-field col s12">
                    <textarea id="textarea2" name="desc_prof" class="materialize-textarea"
                        data-length="1000">{{ $p->desc_prof}}</textarea>
                    <label for="textarea2">Deskripsi</label>
                </div> 
                <br>
                <h4 class="card-title">Tema</h4>
                <div class="input-field col s12">
                    <textarea id="textarea2" name="tema_prof" class="materialize-textarea"
                        data-length="1000">{{ $p->tema_prof}}</textarea>
                    <label for="textarea2">Tema</label>
                </div> 
                <br>
                Current Image: <br>     
                @if($p->gambar_prof)       
                <img src="{{asset('storage/'.$p->gambar_prof)}}" width="120px" />
                       <br>
                @else        
                No avatar     
                @endif     <br>     
                <input id="avatar" name="gambar_prof" type="file" class="form-control"> <br>
                 <small  class="text-muted">Kosongkan jika tidak ingin mengubah foto</small> <br>                
                <div class="divider"></div>
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
