@extends('index')

@section('content')
    <div class="container">
        <form action="/pertanyaan" method="POST">
            @csrf
            <div class="form-group">
                <label for="judul">Judul :</label>
                <input type="text" class="form-control" placeholder="Masukkan judul pertanyaan" name="judul">
            </div>
            <div class="form-group">
                <label for="isi">Isi:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Apa yang anda ingin tanyakan ?" name="isi"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection