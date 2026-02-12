@extends('layouts.app')

@section('content')

<style>
/* ===== HERO GLOW ANIMATION (INLINE AGAR PASTI JALAN) ===== */
.hero-glow {
    position: absolute;
    inset: -40px;
    background: radial-gradient(circle, rgba(236,72,153,0.45) 0%, rgba(236,72,153,0.25) 35%, transparent 70%);
    filter: blur(70px);
    opacity: 0;
    animation: glowFade 2s ease-out forwards, glowPulse 6s ease-in-out infinite 2s;
    z-index: 0;
}

@keyframes glowFade {
    from { opacity: 0; transform: scale(0.7); }
    to { opacity: 0.8; transform: scale(1.1); }
}

@keyframes glowPulse {
    0%, 100% { opacity: 0.7; transform: scale(1.1); }
    50% { opacity: 1; transform: scale(1.15); }
}
</style>

<section class="min-h-screen flex items-center justify-center text-center px-6">
    <div class="max-w-5xl mx-auto">

        {{-- ===== LOGO / HERO TITLE ===== --}}
        <div class="relative inline-block mt-6 mb-4">
            <div class="hero-glow rounded-full"></div>

            <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold text-center glow-fade">
                KIA <span class="text-pink-500">SERVICED APARTMEN</span>
            </h1>

        </div>

        {{-- SUBTITLE --}}
        <p class="mt-4 text-sm sm:text-lg text-gray-300 max-w-2xl mx-auto text-center">
            Hunian nyaman dengan fasilitas premium untuk keluarga, rombongan, dan perjalanan bisnis.
        </p>


        {{-- RESERVASI & LOKASI --}}
     <div class="mt-10 relative max-w-2xl mx-auto">

    <div class="absolute -inset-1 bg-gradient-to-r from-pink-600 via-fuchsia-600 to-purple-600 rounded-3xl blur-xl opacity-30"></div>

    <div class="relative bg-black/40 backdrop-blur-xl border border-pink-500/20 rounded-3xl p-8 shadow-2xl">

        <h2 class="text-xl sm:text-2xl font-bold text-pink-400 mb-2 text-center">
            📍 Reservasi & Ambil Kunci
        </h2>

        <p class="text-gray-400 text-sm mb-8 text-center">
            Kia Serviced Apartmen Ruko A1 depan parkir motor Tower Pink, pojok kanan dari lobby
        </p>

        <form method="POST" 
              action="{{ route('booking.wa') }}" 
              autocomplete="off"
              class="space-y-5">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <input name="nama" required placeholder="Nama Pemesan"
                    class="premium-input">

                <select name="lokasi" required class="premium-input">
                    <option value="" disabled selected>Pilih Lokasi</option>
                    <option>Apartment Grand Sentraland</option>
                    <option>Apartment Mahogany</option>
                    <option>Rukos Columbus</option>
                </select>

                <select name="durasi" required class="premium-input">
                    <option value="" disabled selected>Durasi Menginap</option>
                    <option>Transit/Short time</option>
                    <option>Fullday</option>
                </select>

                <input type="date" name="tanggal" required
                    class="premium-input"
                    min="{{ date('Y-m-d') }}"
                    onfocus="this.showPicker()">

                <input type="time" name="jam" required
                    class="premium-input"
                    onfocus="this.showPicker()">

                <input name="hari" required placeholder="Hari (Senin)"
                    class="premium-input">

                <input name="request_tambahan"
                    placeholder="Request Tambahan"
                    class="premium-input md:col-span-2">

            </div>

           <div class="text-center mt-6">
                <button type="submit"
                    class="px-10 py-3 rounded-xl font-semibold text-black 
                           bg-gradient-to-r from-green-400 to-emerald-500 
                           hover:from-green-500 hover:to-emerald-600 
                           transition-all duration-300 shadow-lg shadow-green-500/20">
                    Kirim Booking via WhatsApp
                </button>
            </div>

        </form>

    </div>
</div>

        {{-- CTA BUTTONS --}}
        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/rooms" class="px-6 py-3 bg-pink-600 hover:bg-pink-700 rounded-xl font-semibold text-white text-center">
                Lihat Tipe Kamar
            </a>
        </div>


    </div>
</section>
@endsection
