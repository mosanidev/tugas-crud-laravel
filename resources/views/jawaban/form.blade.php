@extends('index')

@section('content')
    {{dd($jawaban)}}
    <div class="container">
        <form action="/pertanyaan" method="POST">
            @csrf
            <div class="form-group">
                <label for="pertanyaan">Pertanyaan</label>
                <select class="form-control" id="pertanyaan">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            <div class="form-group">
                <label for="jawaban">Jawaban :</label>
                <input type="text" class="form-control" placeholder="Masukkan jawaban" name="jawaban">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection