@extends('layout')

@section('title', 'Halaman Home')

@section('content')
    <h2>Selamat Datang di Halaman Home</h2>
    <p>Nama: {{ $name }}</p>
    <p>Umur: {{ $age }} tahun</p>
    <p>Pekerjaan: {{ $job }}</p>

    <h3>Hobi</h3>
    <ul>
        @foreach($hobbies as $hobby)
            <li>{{ $hobby }}</li>
        @endforeach
    </ul>
@endsection
