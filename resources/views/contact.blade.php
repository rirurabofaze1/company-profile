@extends('layouts.app')

@section('content')
<section class="py-20 px-6">
    <div class="max-w-4xl mx-auto text-center">

        {{-- TITLE --}}
        <h1 class="text-4xl md:text-5xl font-bold mb-6 text-white">
            Hubungi <span class="text-pink-500">Kami</span>
        </h1>

        <p class="text-zinc-400 mb-14">
            Untuk reservasi, pertanyaan, atau informasi lebih lanjut, silakan hubungi kami melalui kontak berikut.
        </p>

        {{-- CONTACT CARDS --}}
        <div class="grid md:grid-cols-3 gap-8">

            {{-- WHATSAPP --}}
            <div class="bg-zinc-900 border border-zinc-800 rounded-xl p-8 hover:border-pink-500/40 transition shadow-lg shadow-black/30">
                <div class="text-3xl mb-4 text-green-400">💬</div>
                <h3 class="text-lg font-semibold text-white mb-2">WhatsApp</h3>
                <p class="text-zinc-400 mb-4">0895 3171 0777</p>
                <a href="https://wa.me/6289531710777" target="_blank"
                   class="inline-block text-sm px-4 py-2 rounded-lg bg-pink-600 hover:bg-pink-500 text-white font-semibold transition">
                    Chat Sekarang
                </a>
            </div>

            {{-- INSTAGRAM --}}
            <div class="bg-zinc-900 border border-zinc-800 rounded-xl p-8 hover:border-pink-500/40 transition shadow-lg shadow-black/30">
                <div class="text-3xl mb-4 text-pink-500">📸</div>
                <h3 class="text-lg font-semibold text-white mb-2">Instagram</h3>
                <p class="text-zinc-400 mb-4">@kiaservicedapartmen</p>
                <a href="https://instagram.com/kiaservicedapartmen" target="_blank"
                   class="inline-block text-sm px-4 py-2 rounded-lg bg-pink-600 hover:bg-pink-500 text-white font-semibold transition">
                    Kunjungi Profil
                </a>
            </div>

            {{-- LOCATION --}}
            <div class="bg-zinc-900 border border-zinc-800 rounded-xl p-8 hover:border-pink-500/40 transition shadow-lg shadow-black/30">
                <div class="text-3xl mb-4 text-pink-400">📍</div>
                <h3 class="text-lg font-semibold text-white mb-2">Lokasi</h3>
                <p class="text-zinc-400 mb-4 leading-relaxed">
                    Apartement Grand Sentraland,<br>
                    Ruko A1 Tower Pink
                </p>
                <a href="https://maps.app.goo.gl/UH3jiU26jsP7kgjs8" target="_blank"
                   class="inline-block text-sm px-4 py-2 rounded-lg border border-pink-500 text-pink-400 hover:bg-pink-500 hover:text-black font-semibold transition">
                    Buka di Maps
                </a>
            </div>

        </div>

    </div>
</section>
@endsection
