@extends('index')

@section('content')
{{-- {{dd($jawaban)}} --}}
    <div class="container">
        <form action="/jawaban/{{$jawaban->id}}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="pertanyaan">Pertanyaan : </label>
                <p>{{$jawaban->pertanyaan}}</p>
            </div>
            <div class="form-group">
                <label for="jawaban">Jawaban :</label>
                <input type="text" class="form-control" name="jawaban">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection