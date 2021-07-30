@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Tambah Data Album</h3>
    <form action="{{ url('/album') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">NAMA</label>
            <input type="text" name="album_nama" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
    </form>
</div>

@endsection