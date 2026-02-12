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
        <div class="mt-14 max-w-3xl mx-auto">
            <div class="relative bg-gradient-to-r from-pink-600/20 via-fuchsia-600/10 to-transparent border border-pink-500/30 rounded-2xl p-6 md:p-8 backdrop-blur shadow-lg shadow-pink-500/10">

                <div class="absolute -inset-px rounded-2xl bg-pink-500/10 blur-xl opacity-40 pointer-events-none"></div>

                <div class="relative flex flex-col md:flex-row items-center gap-6 text-center md:text-left">

                    <div class="flex-shrink-0 w-14 h-14 rounded-xl bg-pink-600/20 flex items-center justify-center text-pink-500 text-2xl shadow-md shadow-pink-500/20">
                        📍
                    </div>

                    <div class="mt-10 bg-gradient-to-r from-pink-600/20 to-purple-600/20 p-6 rounded-2xl text-center max-w-2xl mx-auto">
                         <h2 class="text-lg sm:text-2xl font-bold text-pink-400 mb-2">
                        📍 Reservasi & Ambil Kunci
                         </h2>
                     <p class="text-sm sm:text-base text-gray-300">
                           Kia Serviced Apartmen Ruko A1 depan parkir motor Tower Pink, pojok kanan dari lobby
                     </p>
                    </div>


                </div>
            </div>
        </div>

        {{-- CTA BUTTONS --}}
        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/rooms" class="px-6 py-3 bg-pink-600 hover:bg-pink-700 rounded-xl font-semibold text-white text-center">
                Lihat Tipe Kamar
            </a>
            <a href="https://wa.me/6289531710777" target="_blank"
            class="px-6 py-3 border border-green-500 text-green-400 hover:bg-green-500 hover:text-black rounded-xl font-semibold text-center">
                Chat via WhatsApp
            </a>
        </div>


    </div>
</section>
@endsection
