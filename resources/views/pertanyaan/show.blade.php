@extends('index')

@section('content')

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
            </tr>
        </thead>
        <tbody>      
            <tr>
                <td>1</td>
                <td>{{ $pertanyaan->judul }}</td>
                <td>{{ $pertanyaan->isi }} </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection