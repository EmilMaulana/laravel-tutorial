@extends('layout')

@section('title', 'Formulir Kontak')

@section('content')
    <div class="max-w-lg mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold text-gray-700 mb-6">Formulir Kontak</h2>

        @if(session('success'))
            <div class="mb-4 p-4 bg-green-200 text-green-800 rounded-md">
                {{ session('success') }}
            </div>
        @endif

        
        <form action="/form" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md
                    focus:ring-blue-500 focus:border-blue-500">
                @error('name')
                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md 
                    focus:ring-blue-500 focus:border-blue-500">
                @error('email')
                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">
                    Pesan:
                </label>
                <textarea id="message" name="message" required
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md 
                    focus:ring-blue-500 focus:border-blue-500">{{ old('message') }}
                </textarea>
                @error('message')
                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit"
                class="w-full py-2 px-4 bg-blue-500 text-white font-semibold rounded-md 
                hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                Kirim
            </button>
        </form>
    </div>
@endsection
