@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-12 text-white">

    <div class="flex justify-between mb-6">
        <h1 class="text-3xl font-bold">Admin - Rooms</h1>
        <a href="/admin/rooms/create" class="bg-pink-500 px-4 py-2 rounded-lg">+ Add Room</a>
    </div>

    @foreach($rooms as $room)
        <div class="bg-zinc-900 p-4 rounded-lg mb-4 flex justify-between items-center">
            <div>
                <p class="font-semibold">{{ $room->name }}</p>
                <p class="text-sm text-zinc-400">{{ $room->slug }}</p>
            </div>

            <div class="flex gap-3">
                <a href="/admin/rooms/{{ $room->id }}/edit" class="text-blue-400">Edit</a>

                <form action="/admin/rooms/{{ $room->id }}" method="POST"
                    onsubmit="return confirm('Yakin mau hapus kamar ini? Semua gambar gallery juga akan terhapus.')">
                @csrf
                @method('DELETE')
                <button class="text-red-400">Delete</button>
                </form>

            </div>
        </div>
    @endforeach

</div>
@endsection
