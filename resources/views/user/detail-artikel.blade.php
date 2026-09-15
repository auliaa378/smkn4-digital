@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto px-6 py-10">

    {{-- Breadcrumb --}}
    <div class="text-sm text-gray-400 mb-6">

        <a href="{{ route('artikel') }}"
           class="hover:text-[#173F7A]">

            Artikel

        </a>

        <span class="mx-2">›</span>

        <span class="text-gray-600">
            Detail Artikel
        </span>

    </div>


    {{-- KATEGORI --}}
    <span class="inline-block
                 bg-[#FF8066]
                 text-white
                 text-xs
                 px-3 py-1
                 rounded-full">

        {{ $artikel->kategori }}

    </span>


    {{-- JUDUL --}}
    <h1 class="text-3xl font-bold text-[#173F7A] mt-4">

        {{ $artikel->judul }}

    </h1>


    {{-- TANGGAL --}}
    <p class="text-sm text-gray-400 mt-2">

        {{ \Carbon\Carbon::parse($artikel->tanggal)->translatedFormat('d F Y') }}

    </p>


    {{-- GAMBAR --}}
@if ($artikel->gambar)

    <img
        src="{{ asset('storage/' . $artikel->gambar) }}"
        alt="{{ $artikel->judul }}"
        class="w-full h-[450px] object-cover
               rounded-xl mt-8"
    >

@endif


    {{-- DESKRIPSI --}}
<div class="mt-8 text-gray-700
            leading-relaxed
            whitespace-pre-line">

    {{ $artikel->deskripsi }}

</div>


    {{-- KEMBALI --}}
    <a
        href="{{ route('artikel') }}"
        class="inline-block mt-8
               text-[#173F7A]
               font-semibold
               hover:text-[#FF8066]">

        ← Kembali ke Artikel

    </a>

</div>

@endsection