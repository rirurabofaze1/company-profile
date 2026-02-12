@extends('layouts.app')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-16">

    {{-- SLIDER GAMBAR UTAMA --}}
    <div class="mb-12">
    <div class="swiper mySwiper rounded-2xl overflow-hidden shadow-xl">
        <div class="swiper-wrapper">

            @foreach ($room->images as $img)
                <div class="swiper-slide">
                    <img src="{{ asset('storage/' . $img->image_path) }}"
                         class="w-full h-[450px] object-cover">
                </div>
            @endforeach

        </div>

        <div class="swiper-button-next text-pink-500"></div>
        <div class="swiper-button-prev text-pink-500"></div>
        <div class="swiper-pagination"></div>
    </div>
    </div>


    <div class="grid md:grid-cols-3 gap-10">

        {{-- DESKRIPSI --}}
        <div class="md:col-span-2">
            <h1 class="text-4xl font-bold mb-6">
                <span class="text-pink-500">{{ $room->name }}</span>
            </h1>

            <h2 class="text-xl font-semibold mb-3 text-white border-b border-pink-500 pb-2">
                Tentang Kamar
            </h2>

            <p class="text-zinc-300 leading-relaxed">
                {{ $room->description }}
            </p>

            <a href="/rooms"
               class="inline-block mt-10 bg-pink-500 hover:bg-pink-600 text-white font-semibold px-6 py-3 rounded-lg transition">
                ← Kembali ke Daftar Kamar
            </a>
        </div>

        {{-- INFO BOX --}}
        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-6 shadow-lg h-fit">
    <h3 class="text-lg font-semibold text-pink-400 mb-4">Informasi Singkat</h3>

    <ul class="space-y-2 text-zinc-300 text-sm">
        @foreach(explode("\n", $room->features) as $feature)
            @if(trim($feature))
                <li>✔ {{ $feature }}</li>
            @endif
        @endforeach
    </ul>
</div>

</section>

{{-- INIT SWIPER --}}
<script>
document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 1,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});
</script>
@endsection
