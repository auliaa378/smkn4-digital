@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-8 py-8">

    {{-- Breadcrumb --}}
    <div class="text-xs text-gray-500 mb-6">
        <a href="/" class="hover:text-[#173F7A]">
            Beranda
        </a>

        <span class="mx-2">›</span>

        <span>
            Artikel Terbaru
        </span>
    </div>


    {{-- Judul --}}
    <div class="mb-8">

        <h1 class="text-3xl font-bold text-[#173F7A]">
            BERITA DAN INFORMASI
        </h1>

        <div class="w-12 h-[2px] bg-[#FF8066] mt-3"></div>

    </div>


    {{-- Grid Artikel --}}
<div class="grid grid-cols-3 gap-8">

    @forelse ($artikels as $artikel)

        <div class="bg-white
            rounded-lg
            border border-gray-200
            shadow-sm
            hover:shadow-md
            transition
            overflow-hidden
            flex flex-col
            h-full">

    {{-- GAMBAR --}}
    @if ($artikel->gambar)

        <img
            src="{{ asset('storage/' . $artikel->gambar) }}"
            alt="{{ $artikel->judul }}"
            class="w-full h-52 object-cover"
        >

    @else

        <div class="w-full h-52 bg-gray-200
                    flex items-center justify-center
                    text-gray-400">

            Tidak ada gambar

        </div>

    @endif


    {{-- ISI CARD --}}
    <div class="p-5 flex flex-col flex-1">

        {{-- KATEGORI + TANGGAL --}}
        <div class="flex items-center justify-between mb-3">

            <span class="inline-block
                         bg-[#FF8066]
                         text-white
                         text-xs
                         px-2.5
                         py-1
                         rounded-full">

                {{ $artikel->kategori }}

            </span>

            <span class="text-xs text-gray-400">
                {{ \Carbon\Carbon::parse($artikel->tanggal)->translatedFormat('d F Y') }}
            </span>

        </div>


        {{-- JUDUL --}}
        <h2 class="font-bold text-lg
                   text-gray-800
                   leading-snug">

            {{ $artikel->judul }}

        </h2>


        {{-- DESKRIPSI --}}
        <p class="text-gray-500
                  text-sm
                  leading-relaxed
                  mt-3">

            {{ Str::limit($artikel->deskripsi, 120) }}

        </p>


        {{-- DETAIL --}}
        <a
            href="{{ route('detail.artikel', $artikel->id) }}"
            class="inline-block mt-auto pt-4
                   text-[#173F7A]
                   text-sm
                   font-semibold
                   hover:text-[#FF8066]
                   transition">

            Baca Selengkapnya →

        </a>

    </div>

</div>

    @empty

        <div class="col-span-3 text-center py-16">

            <p class="text-gray-400">
                Belum ada artikel.
            </p>

        </div>

    @endforelse

    </div>

</div>

@endsection