@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-8 py-10">

    {{-- ================= BREADCRUMB ================= --}}
    <div class="text-sm text-gray-500 mb-8">

        <a href="/" class="hover:text-[#173F7A]">
            Beranda
        </a>

        <span class="mx-2">›</span>

        <span>Galeri</span>

    </div>


    {{-- ================= JUDUL ================= --}}
    <div class="mb-8">

        <h1 class="text-4xl font-bold text-[#173F7A]">
            GALERI KEGIATAN
        </h1>

        <div class="w-14 h-[3px] bg-[#FF8066] mt-3"></div>

    </div>


{{-- ================= FILTER KATEGORI ================= --}}
<div class="flex items-center justify-center gap-3 mb-10">

    {{-- SEMUA --}}
    <a href="/galeri"
       class="px-5 py-2
              text-sm
              font-medium
              rounded-md
              transition
              {{ !request('kategori')
                    ? 'bg-[#4D82E8] text-white'
                    : 'border border-gray-300 text-gray-600 hover:bg-[#4D82E8] hover:text-white'
              }}">

        Semua

    </a>


    {{-- KEGIATAN --}}
    <a href="/galeri?kategori=kegiatan"
       class="px-5 py-2
              text-sm
              font-medium
              rounded-md
              transition
              {{ request('kategori') == 'kegiatan'
                    ? 'bg-[#4D82E8] text-white'
                    : 'border border-gray-300 text-gray-600 hover:bg-[#4D82E8] hover:text-white'
              }}">

        Kegiatan

    </a>


    {{-- PRESTASI --}}
    <a href="/galeri?kategori=prestasi"
       class="px-5 py-2
              text-sm
              font-medium
              rounded-md
              transition
              {{ request('kategori') == 'prestasi'
                    ? 'bg-[#4D82E8] text-white'
                    : 'border border-gray-300 text-gray-600 hover:bg-[#4D82E8] hover:text-white'
              }}">

        Prestasi

    </a>


    {{-- FASILITAS --}}
    <a href="/galeri?kategori=fasilitas"
       class="px-5 py-2
              text-sm
              font-medium
              rounded-md
              transition
              {{ request('kategori') == 'fasilitas'
                    ? 'bg-[#4D82E8] text-white'
                    : 'border border-gray-300 text-gray-600 hover:bg-[#4D82E8] hover:text-white'
              }}">

        Fasilitas

    </a>

</div>


    {{-- ================= GRID GALERI ================= --}}
<div class="grid grid-cols-3 gap-8">

    @forelse($galeris as $galeri)

        <div class="group overflow-hidden rounded-xl shadow-md bg-white">

            <img
                src="{{ asset('images/galeri/' . $galeri->foto) }}"
                alt="{{ $galeri->judul }}"
                class="w-full h-[260px]
                       object-cover
                       group-hover:scale-105
                       transition duration-300"
            >

            <div class="p-4">

                <span class="text-xs text-[#4D82E8] font-medium">
                    {{ $galeri->kategori }}
                </span>

                <h2 class="font-bold text-gray-800 mt-1">
                    {{ $galeri->judul }}
                </h2>

            </div>

        </div>

    @empty

        <div class="col-span-3 text-center py-16 text-gray-400">

            Belum ada galeri yang tersedia.

        </div>

    @endforelse

</div>

</div>

@endsection