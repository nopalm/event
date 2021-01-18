@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-content">
        <h5 class="card-title">Tambah data</h5>
        <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action=" {{route('jadwal.store')}}" method="POST">
            @csrf
            <label for="name">Judul jadwal</label> 
            <input class="form-control" placeholder="judul" type="text" name="juduljadwal" id="name" />
            <label for="name">Tanggal jadwal</label> 
            <input class="form-control" placeholder="tanggal" type="text" name="tanggaljadwal" id="name" />
            <label for="desc">Deskripsi jadwal</label> 
            <div class="input-field col s12">
                    <textarea id="textarea2" name="deskripsijadwal" class="materialize-textarea"
                        data-length="1000"></textarea>
                </div>
             <!-- <input id="avatar"  name="gambar" type="file" class="form-control"> <br> -->
             <input class="btn btn-primary" type="submit" value="Save"/>
        </form>
    </div>
</div>
@endsection
