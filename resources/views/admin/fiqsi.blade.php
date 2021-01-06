@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-content">
        <h5 class="card-title">fiqsi</h5>
        <h6 class="card-subtitle">Data fiqsi</h6>
        <a href="{{ route('fiqsi.create')}}">
            <button class="btn green waves-effect waves-light" type="submit">
            <i class="fas fa-plus"></i> Add</button></a>
        <div class="table-responsive">
            <table class="table highlight m-b-20">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Judul Lomba fiqsi</th>
                        <th>Deskripsi lomba fiqsi</th>
                        <th>Logo Lomba fiqsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                @foreach($fiqsi as $p)
                    <tr id="1" class="gradeX">
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->judulfiqsi }}</td>
                        <td>
                        {{ Str::limit($p->deskripsifiqsi, 40)}}</td>
                        <td> @if($p->gambarfiqsi)     
                        <img src="{{asset('storage/'.$p->gambarfiqsi)}}" width="70px"/>  @else      N/A @endif </td>
                        <td>
                            <a href="{{route('fiqsi.edit', ['id'=>$p->id])}}"><button class="btn cyan waves-effect waves-light"
                                    type="submit"><i class="far fa-edit"></i>Edit
                                </button></a> <br>
                            <form action="{{route('fiqsi.destroy', ['id' => $p->id])}}" method="POST" onsubmit="return confirm('Are u sure Delete this item?')">
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
