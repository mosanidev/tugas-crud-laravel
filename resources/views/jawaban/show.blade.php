@extends('index')

@section('content')
    <div class="container p-3">
        <p>Isi Pertanyaan : </p>
        <p class="ml-2 font-weight-light">{{ $jawaban->pertanyaan }}</p>
        <p>Jawaban : </p>
        <p class="ml-2 font-weight-light">{{ $jawaban->jawaban }} </p>  
        <p>Tanggal dibuat : </p>
        <p class="ml-2 font-weight-light">{{ $jawaban->tanggal_dibuat }} </p>   
        <p>Tanggal diperbarui : </p>
        <p class="ml-2 font-weight-light">{{ $jawaban->tanggal_diperbarui }} </p>       
    </div>
@endsection