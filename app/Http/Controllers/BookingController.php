<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingCode;

class BookingController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string',
            'lokasi' => 'required|string',
            'durasi' => 'required|string',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'hari' => 'required|string', // manual input
            'request_tambahan' => 'nullable|string',
        ]);

        // Generate kode unik
        do {
            $bookingCode = rand(10000, 99999);
        } while (BookingCode::where('code', $bookingCode)->exists());

        BookingCode::create([
            'code' => $bookingCode
        ]);

        // Format tanggal & jam
        $tanggalJam = date('d-m-Y', strtotime($data['tanggal'])) . ',' . $data['jam'];

        // Format pesan WhatsApp
        $message  = "*Booking Room Kia Admin2*\n";
        $message .= "*Tanggapan* #{$bookingCode}\n";
        $message .= "*Nama Pemesan Kamar  :* {$data['nama']}\n";
        $message .= "*Lokasi :* {$data['lokasi']}\n";
        $message .= "*Durasi menginap :* {$data['durasi']}\n";
        $message .= "*Tanggal dan Jam Kedatangan :* {$tanggalJam}\n";
        $message .= "*Hari :* {$data['hari']}\n";

        if (!empty($data['request_tambahan'])) {
            $message .= "*Request Tambahan :* {$data['request_tambahan']}\n";
        }

        $encoded = urlencode($message);

        return redirect("https://wa.me/6289531710777?text={$encoded}");
    }
}
