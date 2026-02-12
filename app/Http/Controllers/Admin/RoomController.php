<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Str;
use App\Models\RoomImage;


class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::latest()->get();
        return view('admin.rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('admin.rooms.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => 'required|image',
        'features' => 'nullable|string',
        'gallery.*' => 'nullable|image'
    ]);

    $imagePath = $request->file('image')->store('rooms', 'public');

    $room = Room::create([
        'name' => $request->name,
        'slug' => Str::slug($request->name),
        'description' => $request->description,
        'image' => $imagePath,
        'features' => $request->features,
    ]);

    // Upload multiple gallery images
    if ($request->hasFile('gallery')) {
        foreach ($request->file('gallery') as $file) {
            $path = $file->store('rooms', 'public');
            RoomImage::create([
                'room_id' => $room->id,
                'image_path' => $path
            ]);
        }
    }

    return redirect('/admin/rooms')->with('success', 'Room created successfully!');
}


    public function edit(Room $room)
    {
        return view('admin.rooms.edit', compact('room'));
    }

    public function update(Request $request, Room $room)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => 'nullable|image',
        'features' => 'nullable|string',
        'gallery.*' => 'nullable|image'
    ]);

    if ($request->hasFile('image')) {
        $room->image = $request->file('image')->store('rooms', 'public');
    }

    $room->update([
        'name' => $request->name,
        'slug' => Str::slug($request->name),
        'description' => $request->description,
        'features' => $request->features,
    ]);

    // Tambah gambar baru ke gallery
    if ($request->hasFile('gallery')) {
        foreach ($request->file('gallery') as $file) {
            $path = $file->store('rooms', 'public');
            RoomImage::create([
                'room_id' => $room->id,
                'image_path' => $path
            ]);
        }
    }

    return redirect('/admin/rooms')->with('success', 'Room updated successfully!');
}


    public function destroy(Room $room)
    {
        $room->delete();
        return back()->with('success', 'Room deleted successfully!');
    }
}
