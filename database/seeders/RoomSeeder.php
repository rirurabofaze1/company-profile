<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;
use App\Models\RoomImage;

class RoomSeeder extends Seeder
{
    public function run(): void
    {
        // ======================
        // ROOM 1
        // ======================
        $room1 = Room::create([
            'name' => '1 Bed Room',
            'slug' => '1br',
            'image' => 'rooms/room1.jpg',
            'description' => 'Unit nyaman untuk pasangan atau solo traveler'
        ]);

        foreach (['room1.jpg','room1-1.jpg','room1-2.jpg','room1-3.jpg'] as $img) {
            RoomImage::create([
                'room_id' => $room1->id,
                'image_path' => 'rooms/' . $img
            ]);
        }

        // ======================
        // ROOM 2
        // ======================
        $room2 = Room::create([
            'name' => '2 Bed Room',
            'slug' => '2br',
            'image' => 'rooms/room2.jpg',
            'description' => 'Unit luas cocok untuk keluarga'
        ]);

        foreach (['room2.jpg','room2-1.jpg','room2-2.jpg','room2-3.jpg'] as $img) {
            RoomImage::create([
                'room_id' => $room2->id,
                'image_path' => 'rooms/' . $img
            ]);
        }
    }
}
