@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-content">
        <h5 class="card-title">galeri</h5>
        <h6 class="card-subtitle">Data galeri</h6>
        <a href="{{ route('galeri.create')}}">
            <button class="btn green waves-effect waves-light" type="submit">
            <i class="fas fa-plus"></i> Add</button></a>
        <div class="table-responsive">
            <table class="table highlight m-b-20">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Judul Galeri</th>
                        <th>Deskripsi Galeri</th>
                        <th>Gambar Galeri</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                @foreach($galeri as $p)
                    <tr id="1" class="gradeX">
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->judulgaleri }}</td>
                        <td>
                        {{ Str::limit($p->deskripsigaleri, 40)}}</td>
                        <td> @if($p->gambargaleri)     
                        <img src="{{asset('storage/'.$p->gambargaleri)}}" width="70px"/>  @else      N/A @endif </td>
                        <td>
                            <a href="{{route('galeri.edit', ['id'=>$p->id])}}"><button class="btn cyan waves-effect waves-light"
                                    type="submit"><i class="far fa-edit"></i>Edit
                                </button></a> <br>
                            <form action="{{route('galeri.destroy', ['id' => $p->id])}}" method="POST" onsubmit="return confirm('Are u sure Delete this item?')">
                            @csrf 
                             <input type="hidden" value="DELETE" name="_method"> 
                            <button class="btn red waves-effect waves-light" type="submit"><i class="fas fa-trash"></i>Hapus
                            </button>
                        </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                
            </table>
        </div>
    </div>
</div>
@endsection
