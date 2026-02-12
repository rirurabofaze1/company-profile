@extends('layouts.app')

@section('content')

<section class="relative py-20 px-6 md:px-12">
    <div class="max-w-6xl mx-auto">

        {{-- TITLE --}}
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-white">
                Tentang <span class="text-pink-500">KIA Serviced Apartmen</span>
            </h1>
            <p class="text-zinc-400 mt-4 max-w-2xl mx-auto">
                Hunian modern dengan kenyamanan hotel dan privasi rumah, dirancang untuk pengalaman menginap terbaik.
            </p>
        </div>

        {{-- CONTENT GRID --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">

            {{-- IMAGE --}}
            <div class="relative">
                <div class="absolute -inset-4 bg-pink-500/10 blur-2xl rounded-3xl"></div>
                <img src="{{ asset('images/about.jpg') }}" 
                     alt="KIA Serviced Apartment"
                     class="relative rounded-2xl shadow-2xl border border-zinc-800">
            </div>

            {{-- TEXT --}}
            <div class="space-y-6 text-zinc-300 leading-relaxed text-[15px] md:text-base">

                <p>
                    <span class="text-white font-semibold">KIA Serviced Apartmen</span> dirancang untuk menghadirkan 
                    kenyamanan setara hotel dengan privasi layaknya rumah sendiri. Cocok untuk keluarga, rombongan, 
                    maupun perjalanan bisnis.
                </p>

                <p>
                    Interior modern, fasilitas lengkap, dan suasana tenang menciptakan pengalaman menginap yang 
                    hangat, praktis, dan berkelas di setiap kunjungan Anda.
                </p>

                <p>
                    Berlokasi strategis dekat pusat kota, pusat belanja, dan area bisnis, kami menjadi pilihan ideal 
                    untuk menginap jangka pendek maupun panjang.
                </p>

                <div class="pt-4">
                    <a href="/rooms" class="inline-block bg-pink-500 hover:bg-pink-600 transition px-6 py-3 rounded-lg font-semibold text-white shadow-lg shadow-pink-500/20">
                        Lihat Tipe Kamar
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>

{{-- FEATURES SECTION --}}
<section class="pb-24 px-6 md:px-12">
    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">

        <div class="bg-zinc-900 border border-zinc-800 rounded-xl p-6 text-center hover:border-pink-500/40 transition">
            <h3 class="text-pink-500 font-semibold text-lg mb-2">Lokasi Strategis</h3>
            <p class="text-zinc-400 text-sm">Dekat pusat kota, transportasi, dan fasilitas umum</p>
        </div>

        <div class="bg-zinc-900 border border-zinc-800 rounded-xl p-6 text-center hover:border-pink-500/40 transition">
            <h3 class="text-pink-500 font-semibold text-lg mb-2">Fasilitas Premium</h3>
            <p class="text-zinc-400 text-sm">AC, Smart TV, dapur lengkap, dan WiFi cepat</p>
        </div>

        <div class="bg-zinc-900 border border-zinc-800 rounded-xl p-6 text-center hover:border-pink-500/40 transition">
            <h3 class="text-pink-500 font-semibold text-lg mb-2">Nyaman & Aman</h3>
            <p class="text-zinc-400 text-sm">Lingkungan tenang dengan sistem keamanan 24 jam</p>
        </div>

    </div>
</section>

@endsection
