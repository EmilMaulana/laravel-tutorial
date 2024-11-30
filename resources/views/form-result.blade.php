@extends('layout')

@section('title', 'Hasil Pengiriman Formulir')

@section('content')
    <div class="max-w-lg mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Hasil Pengiriman Formulir</h2>
        <p class="text-gray-700"><strong>Nama:</strong> {{ $data['name'] }}</p>
        <p class="text-gray-700"><strong>Email:</strong> {{ $data['email'] }}</p>
        <p class="text-gray-700"><strong>Pesan:</strong> {{ $data['message'] }}</p>
    </div>
@endsection
