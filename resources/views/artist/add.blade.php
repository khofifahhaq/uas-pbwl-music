@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Tambah Data Artist</h3>
    <form action="{{ url('/artist') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">NAMA</label>
            <input type="text" name="artist_nama" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
    </form>
</div>

@endsection