@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-content">
            <h3>Contact us</h3>
            <div class="divider"></div>
            <br>
            @foreach($kontak as $p)
            <form method="post" action="{{ route('kontak.update', $p->id) }}" class="m-t-40">
                @method('PATCH')
                @csrf
                <h4 class="card-title">Email</h4>
                <div class="input-field">
                    <input id="name" type="text" name="email" value="{{ $p->email }}">
                    <label for="name">Input Email</label>
                </div>
                <h4 class="card-title">Phone</h4>
                <div class="input-field">
                    <input id="name" type="text" name="phone" value="{{ $p->phone }}">
                    <label for="name">Input Phone Number</label>
                </div>

                <h4 class="card-title">Phone ISC</h4>
                <div class="input-field">
                    <input id="name" type="text" name="phone_isc" value="{{ $p->phone_isc }}">
                    <label for="name">Input Phone Number</label>
                </div>

                <h4 class="card-title">Phone FIQSI</h4>
                <div class="input-field">
                    <input id="name" type="text" name="phone_fiqsi" value="{{ $p->phone_fiqsi }}">
                    <label for="name">Input Phone Number</label>
                </div>

                <h4 class="card-title">Phone OSIRIS</h4>
                <div class="input-field">
                    <input id="name" type="text" name="phone_osiris" value="{{ $p->phone_osiris }}">
                    <label for="name">Input Phone Number</label>
                </div>
                
                <h4 class="card-title">Alamat</h4>
                <div class="input-field">
                    <input id="name" type="text" name="alamat" value="{{ $p->alamat }}">
                    <label for="name">Input Alamat</label>
                </div>
                <h4 class="card-title">WhatsApp</h4>
                <div class="input-field">
                    <input id="name" type="text" name="wa" value="{{ $p->wa }}">
                    <label for="name">Input WhatsApp</label>
                </div>
                <h4 class="card-title">Instagram</h4>
                <div class="input-field">
                    <input id="name" type="text" name="ig" value="{{ $p->ig }}">
                    <label for="name">Input Instagram</label>
                </div>
                <!-- <h4 class="card-title">Embed</h4>
                <label>Add Src</label>
                <div class="input-field">
                
                    <input id="name" type="text" name="embed" value="{{ $p->embed }}">
                    <label for="name">Embed maps</label>
                </div> -->
                <div class="divider"></div>
                <div class="card-content">
                    <button class="btn cyan waves-effect waves-light" type="submit">Save
                    </button>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
