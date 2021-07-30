@extends('layouts.app')

@section('content')

<div class="container"> 

    <h3>
        Daftar Track
        <a href="{{ url('/track/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
    </h3>

    <table class="table table-bordered"> 
        <tr>
            <th>NAMA</th> 
        </tr>
        @foreach($rows as $row)
            <tr>
                <td>{{ $row->track_nama }}</td>
            </tr>
        @endforeach
    </table>
</div>

@endsection