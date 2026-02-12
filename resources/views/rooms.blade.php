@extends('layouts.app')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-16">

    <div class="text-center mb-14">
        <h1 class="text-4xl md:text-5xl font-bold">
            Tipe <span class="text-pink-500">Kamar</span>
        </h1>
        <p class="text-zinc-400 mt-3">Pilih unit terbaik untuk kebutuhan menginap Anda</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($rooms as $room)
            <div class="bg-zinc-900 border border-zinc-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-pink-500/10 transition">

                {{-- Gambar --}}
                <img src="{{ asset('storage/' . $room->image) }}"
                     alt="{{ $room->name }}"
                     class="w-full h-64 object-cover">

                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-2 text-white">
                        {{ $room->name }}
                    </h2>

                    <p class="text-zinc-400 mb-5">
                        {{ $room->description }}
                    </p>

                    <a href="/rooms/{{ $room->slug }}"
                       class="inline-block bg-pink-500 hover:bg-pink-600 text-white font-semibold px-5 py-2 rounded-lg transition">
                        Lihat Detail
                    </a>
                </div>
            </div>
        @endforeach
    </div>

</section>
@endsection
