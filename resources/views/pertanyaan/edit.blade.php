@extends('index')

@section('content')
    <div class="container">
        <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="judul">Judul :</label>
                <input type="text" class="form-control" value="{{ $pertanyaan->judul }}" placeholder="Masukkan judul pertanyaan" name="judul">
            </div>
            <div class="form-group">
                <label for="isi">Isi:</label>
                <textarea class="form-control" rows="3" placeholder="Apa yang anda ingin tanyakan ?" name="isi">{{ $pertanyaan->isi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection