<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\RoomImage;

class Room extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'image',        // gambar utama (cover)
        'description',
        'features'
    ];

    /**
     * Relasi: Satu kamar punya banyak gambar tambahan
     */
    public function images()
    {
        return $this->hasMany(\App\Models\RoomImage::class);
    }
}
