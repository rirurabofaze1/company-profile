@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-16 px-6 text-white">
    <h1 class="text-3xl font-bold mb-8 text-pink-500">Edit Room</h1>

    <form action="{{ route('admin.rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        {{-- ROOM NAME --}}
        <div>
            <label class="block mb-2 font-semibold">Room Name</label>
            <input type="text" name="name" value="{{ $room->name }}" required
                   class="w-full px-4 py-3 rounded-lg bg-zinc-800 border border-zinc-700 focus:border-pink-500 focus:outline-none">
        </div>

        {{-- DESCRIPTION --}}
        <div>
            <label class="block mb-2 font-semibold">Description</label>
            <textarea name="description" rows="4" required
                      class="w-full px-4 py-3 rounded-lg bg-zinc-800 border border-zinc-700 focus:border-pink-500 focus:outline-none">{{ $room->description }}</textarea>
        </div>

        {{-- FITUR --}}
        <div>
            <label class="block mb-2 font-semibold">Fitur (pisahkan dengan ENTER)</label>
            <textarea name="features" rows="4"
                      class="w-full px-4 py-3 rounded-lg bg-zinc-800 border border-zinc-700 focus:border-pink-500 focus:outline-none">{{ $room->features }}</textarea>
        </div>

        {{-- CURRENT IMAGE --}}
        <div>
            <label class="block mb-2 font-semibold">Gambar Utama Saat Ini</label>
            <img src="{{ asset('storage/' . $room->image) }}" class="w-48 rounded-lg mb-3">
        </div>

        {{-- CHANGE MAIN IMAGE --}}
        <div>
            <label class="block mb-2 font-semibold">Ganti Gambar Utama</label>

            <label class="flex items-center justify-center w-full px-4 py-4 bg-zinc-800 border border-pink-500/40 rounded-lg cursor-pointer hover:bg-zinc-700 transition">
                <span class="text-pink-400 font-medium">Klik untuk pilih gambar baru</span>
                <input type="file" name="image" class="hidden">
            </label>
        </div>

        {{-- ADD GALLERY IMAGES --}}
        <div>
            <label class="block mb-2 font-semibold">Tambah Gallery Baru</label>

            <label class="flex items-center justify-center w-full px-4 py-4 bg-zinc-800 border border-pink-500/40 rounded-lg cursor-pointer hover:bg-zinc-700 transition">
                <span class="text-pink-400 font-medium">Klik untuk pilih beberapa gambar</span>
                <input type="file" name="gallery[]" multiple class="hidden">
            </label>
        </div>

        <button type="submit"
                class="bg-pink-600 hover:bg-pink-700 px-6 py-3 rounded-lg font-semibold transition">
            Update Room
        </button>
    </form>
</div>
@endsection
