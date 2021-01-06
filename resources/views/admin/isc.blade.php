@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-content">
        <h5 class="card-title">isc</h5>
        <h6 class="card-subtitle">Data isc</h6>
        <a href="{{ route('isc.create')}}">
            <button class="btn green waves-effect waves-light" type="submit">
            <i class="fas fa-plus"></i> Add</button></a>
        <div class="table-responsive">
            <table class="table highlight m-b-20">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Judul Lomba isc</th>
                        <th>Deskripsi lomba isc</th>
                        <th>Logo Lomba isc</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                @foreach($isc as $p)
                    <tr id="1" class="gradeX">
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->judulisc }}</td>
                        <td>
                        {{ Str::limit($p->deskripsiisc, 40)}}</td>
                        <td> @if($p->gambarisc)     
                        <img src="{{asset('storage/'.$p->gambarisc)}}" width="70px"/>  @else      N/A @endif </td>
                        <td>
                            <a href="{{route('isc.edit', ['id'=>$p->id])}}"><button class="btn cyan waves-effect waves-light"
                                    type="submit"><i class="far fa-edit"></i>Edit
                                </button></a> <br>
                            <form action="{{route('isc.destroy', ['id' => $p->id])}}" method="POST" onsubmit="return confirm('Are u sure Delete this item?')">
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
