@extends('index')

@section('content')

<div class="container">
    <h1>Tabel Pertanyaan</h1>
    <a href="/pertanyaan/create" class="m-2 p-2 btn btn-sm btn-info">Create</a>
    <table class="table">
        <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($pertanyaan as $key => $value)
                <tr>
                    <td>{{ $key = $key + 1 }}</td>
                    <td>{{ $value->judul }} </td>
                    <td>{{ $value->isi }} </td>
                    <td>
                        <a href="/pertanyaan/{{$value->id}}" class="mr-2 btn btn-sm btn-info">Show</a>
                        <a href='/pertanyaan/{{$value->id}}/edit' class="mr-2 btn btn-sm btn-success">Edit</a>
                        <form action="/pertanyaan/{{$value->id}}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection