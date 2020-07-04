@extends('index')

@section('content')
    {{-- {{dd($jawaban->all())}} --}}
    <div class="container">
        <h1>Tabel Jawaban</h1>
        <a href="/jawaban/create" class="m-2 p-2 btn btn-sm btn-info">Jawab baru</a>
        <table class="table">
            <thead>
            <tr>
                <th>No</th>
                <th>Isi Pertanyaan</th>
                <th>Isi Jawaban</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($jawaban as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->pertanyaan }} </td>
                        <td>{{ $value->jawaban }} </td>
                        <td>
                            <a href="/jawaban/{{$value->pertanyaan_id}}" class="btn btn-sm btn-info">Show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection