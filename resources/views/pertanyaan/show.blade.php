@extends('index')

@section('content')
    <div class="container p-3">
        <p>Judul Pertanyaan : </p>
        <p class="ml-2 font-weight-light">{{ $pertanyaan->judul }}</p>
        <p>Isi pertanyaan : </p>
        <p class="ml-2 font-weight-light">{{ $pertanyaan->isi }} </p>  
        <p>Tanggal dibuat : </p>
        <p class="ml-2 font-weight-light">{{ $pertanyaan->tanggal_dibuat }} </p>   
        <p>Tanggal diperbarui : </p>
        <p class="ml-2 font-weight-light">{{ $pertanyaan->tanggal_diperbarui }} </p>            
    </div>
@endsection