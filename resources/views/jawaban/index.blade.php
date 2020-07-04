@extends('index')

@section('content')
    <div class="container">
        <h1>Tabel Jawaban</h1>
        <a href="/jawaban/create" class="m-2 p-2 btn btn-sm btn-info">Jawab</a>
        <table class="table">
            <thead>
            <tr>
                <th>No</th>
                <th>Isi Pertanyaan</th>
                <th>Jawaban</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>{{ $jawaban->pertanyaan }} </td>
                    <td>{{ $jawaban->jawaban }} </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection