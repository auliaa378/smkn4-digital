@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<div class="max-w-7xl mx-auto px-8 py-10">

    <div class="grid grid-cols-2 gap-10 items-center">

        <!-- TEKS KIRI -->
        <div>

            <h1 class="text-4xl font-bold leading-tight text-[#173F7A]">
                SMKN 4
                <span class="block text-[#4A79FF]">
                    Bogor Digital
                </span>
            </h1>

            <h2 class="text-xl font-semibold text-gray-800 mt-5 leading-relaxed">
                Berkompeten, Berkarakter,<br>
                Siap Menghadapi Dunia Digital
            </h2>

            <p class="text-gray-600 leading-relaxed mt-4 max-w-xl">
                Selamat datang di website resmi SMKN 4 Bogor Digital. 
                Website ini hadir sebagai sarana informasi mengenai sekolah, program keahlian, kegiatan, 
                serta berbagai prestasi yang telah diraih. Kami berharap website ini dapat 
                memberikan informasi yang bermanfaat bagi siswa, orang tua, maupun masyarakat.
            </p>

            <a href="/profil"
                class="inline-flex items-center gap-2
                       mt-7
                       bg-[#4A79FF]
                       hover:bg-blue-600
                       text-white
                       px-6 py-3
                       rounded-lg
                       font-medium
                       transition">

                Selengkapnya →

            </a>

        </div>


        <!-- FOTO SEKOLAH KANAN -->
        <div class="relative flex justify-end">

            <div class="overflow-hidden rounded-[80px_20px_80px_20px]
                        shadow-lg
                        w-full
                        h-[380px]">

                <img
                    src="{{ asset('images/hero.jpg') }}"
                    alt="SMKN 4 Bogor"
                    class="w-full h-full object-cover">

            </div>

        </div>

    </div>

</div>

{{-- ================= STATISTIK SEKOLAH ================= --}}

<section class="max-w-7xl mx-auto px-8 py-6">

    <div class="mb-5">

        <h2 class="text-2xl font-bold text-[#173F7A]">
            Statistik Sekolah
        </h2>

        <div class="w-9 h-[3px] bg-[#4A79FF] rounded mt-1"></div>

    </div>


    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">


        {{-- PROGRAM KEAHLIAN --}}
        <div class="bg-white
                    rounded-lg
                    shadow-md
                    px-5 py-4
                    flex items-center
                    gap-5
                    min-h-[68px]
                    hover:shadow-lg
                    transition">

            <div class="flex-shrink-0">

                <svg class="w-10 h-10 text-[#2463C5]"
                     fill="currentColor"
                     viewBox="0 0 24 24">

                    <path d="M4 20h16v2H4z"/>
                    <path d="M6 4h9v16H6z"/>
                    <path d="M15 9h3v11h-3z"/>
                    <path d="M8 7h4v2H8z"/>
                    <path d="M8 11h4v2H8z"/>
                    <path d="M8 15h4v2H8z"/>

                </svg>

            </div>


            <div>

                <h3 class="text-xl font-bold text-[#173F7A] leading-none">
                    4
                </h3>

                <p class="text-[10px] text-gray-600 mt-1">
                    Program Keahlian
                </p>

            </div>

        </div>


        {{-- SISWA --}}
        <div class="bg-white
                    rounded-lg
                    shadow-md
                    px-5 py-4
                    flex items-center
                    gap-5
                    min-h-[68px]
                    hover:shadow-lg
                    transition">

            <div class="flex-shrink-0">

                <svg class="w-10 h-10 text-[#2463C5]"
                     fill="currentColor"
                     viewBox="0 0 24 24">

                    <path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                    <path d="M16 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                    <path d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>

                    <path d="M2 19c0-2.5 2-4 5-4s5 1.5 5 4v2H2v-2Z"/>
                    <path d="M12 19c0-2.5 2-4 5-4s5 1.5 5 4v2h-10v-2Z"/>

                </svg>

            </div>


            <div>

                <h3 class="text-xl font-bold text-[#173F7A] leading-none">
                    1.079+
                </h3>

                <p class="text-[10px] text-gray-600 mt-1">
                    Siswa Aktif
                </p>

            </div>

        </div>


        {{-- GURU --}}
        <div class="bg-white
                    rounded-lg
                    shadow-md
                    px-5 py-4
                    flex items-center
                    gap-5
                    min-h-[68px]
                    hover:shadow-lg
                    transition">

            <div class="flex-shrink-0">

                <svg class="w-11 h-11 text-[#2463C5]"
                     fill="currentColor"
                     viewBox="0 0 24 24">

                    <path d="M12 2 2 8l10 6 8-4.8V15h2V8L12 2Z"/>

                    <path d="M6 12v5c0 2 2.7 4 6 4s6-2 6-4v-5l-6 3.5L6 12Z"/>

                </svg>

            </div>


            <div>

                <h3 class="text-xl font-bold text-[#173F7A] leading-none">
                    56+
                </h3>

                <p class="text-[10px] text-gray-600 mt-1">
                    Guru & Staf
                </p>

            </div>

        </div>


        {{-- PRESTASI --}}
        <div class="bg-white
                    rounded-lg
                    shadow-md
                    px-5 py-4
                    flex items-center
                    gap-5
                    min-h-[68px]
                    hover:shadow-lg
                    transition">

            <div class="flex-shrink-0">

                <svg class="w-10 h-10 text-[#2463C5]"
                     fill="currentColor"
                     viewBox="0 0 24 24">

                    <path d="M7 3h10v3h3v3c0 2.8-2 5.1-4.7 5.8
                             A4.99 4.99 0 0 1 13 17.7V20h4v2H7v-2h4v-2.3
                             a4.99 4.99 0 0 1-2.3-2.9C6 14.1 4 11.8 4 9V6h3V3Zm-1 5
                             v1c0 1.5 1 2.8 2.4 3.6A6.9 6.9 0 0 1 6 8Zm12 0
                             a6.9 6.9 0 0 1-2.4 4.6C17 11.8 18 10.5 18 9V8h0Z"/>

                </svg>

            </div>


            <div>

                <h3 class="text-xl font-bold text-[#173F7A] leading-none">
                    100+
                </h3>

                <p class="text-[10px] text-gray-600 mt-1">
                    Prestasi
                </p>

            </div>

        </div>

    </div>

</section>



{{-- ========================================================= --}}
{{-- JURUSAN --}}
{{-- ========================================================= --}}

<section id="jurusan" class="max-w-7xl mx-auto px-8 py-8">

    <div class="flex justify-between items-end mb-6">

        <div>

            <h2 class="text-2xl font-bold text-[#173F7A]">
                Jurusan
            </h2>

            <div class="w-14 h-1 bg-[#4A79FF] rounded mt-2"></div>

        </div>

    </div>


    {{-- CARD JURUSAN --}}
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">


        {{-- ================= PPLG ================= --}}
        <div class="bg-white
                    border border-gray-200
                    rounded-xl
                    shadow-md
                    w-full
                    min-h-[338px]
                    px-6 py-8
                    flex flex-col
                    items-center
                    justify-center
                    text-center
                    hover:shadow-lg
                    transition">

            <img
    src="{{ asset('images/pplg.png') }}"
    class="w-[120px] h-[120px]
           object-contain
           mb-5">

<h3 class="font-bold
           text-lg
           text-[#173F7A]">

    PPLG

</h3>

<p class="text-base
          text-gray-700
          mt-3
          leading-6">

    Pengembangan Perangkat<br>
    Lunak dan Gim

</p>

<a
    href="{{ route('detail.pplg') }}"
    class="mt-4 inline-block bg-[#173F7A] hover:bg-blue-800 text-white text-xs font-medium px-4 py-2 rounded transition"
>
    Selengkapnya →
</a>

        </div>


        {{-- ================= TJKT ================= --}}
        <div class="bg-white
                    border border-gray-200
                    rounded-xl
                    shadow-md
                    w-full
                    min-h-[338px]
                    px-6 py-8
                    flex flex-col
                    items-center
                    justify-center
                    text-center
                    hover:shadow-lg
                    transition">

            <img
                src="{{ asset('images/tjkt.png') }}"
                class="w-[120px] h-[120px]
                       object-contain
                       mb-5">

            <h3 class="font-bold
                       text-lg
                       text-[#173F7A]">

                TJKT

            </h3>

            <p class="text-base
                      text-gray-700
                      mt-3
                      leading-6">

                Teknik Jaringan Komputer<br>
                dan Telekomunikasi

            </p>

            <a
    href="{{ route('detail.tjkt') }}"
    class="mt-4 inline-block bg-[#173F7A] hover:bg-blue-800 text-white text-xs font-medium px-4 py-2 rounded transition"
>
    Selengkapnya →
</a>

        </div>


        {{-- ================= TPFL ================= --}}
        <div class="bg-white
                    border border-gray-200
                    rounded-xl
                    shadow-md
                    w-full
                    min-h-[338px]
                    px-6 py-8
                    flex flex-col
                    items-center
                    justify-center
                    text-center
                    hover:shadow-lg
                    transition">

            <img
                src="{{ asset('images/tpfl.png') }}"
                class="w-[120px] h-[120px]
                       object-contain
                       mb-5">

            <h3 class="font-bold
                       text-lg
                       text-[#173F7A]">

                TPFL

            </h3>

            <p class="text-base
                      text-gray-700
                      mt-3
                      leading-6">

                Teknik Pengelasan dan<br>
                Fabrikasi Logam

            </p>

           <a
    href="{{ route('detail.tpfl') }}"
    class="mt-4 inline-block bg-[#173F7A] hover:bg-blue-800 text-white text-xs font-medium px-4 py-2 rounded transition"
>
    Selengkapnya →
</a>

        </div>


        {{-- ================= TKRO ================= --}}
        <div class="bg-white
                    border border-gray-200
                    rounded-xl
                    shadow-md
                    w-full
                    min-h-[338px]
                    px-6 py-8
                    flex flex-col
                    items-center
                    justify-center
                    text-center
                    hover:shadow-lg
                    transition">

            <img
                src="{{ asset('images/tkro.png') }}"
                class="w-[120px] h-[120px]
                       object-contain
                       mb-5">

            <h3 class="font-bold
                       text-lg
                       text-[#173F7A]">

                TKRO

            </h3>

            <p class="text-base
                      text-gray-700
                      mt-3
                      leading-6">

                Teknik Kendaraan Ringan<br>
                Otomotif

            </p>

            <a
    href="{{ route('detail.tkro') }}"
    class="mt-4 inline-block bg-[#173F7A] hover:bg-blue-800 text-white text-xs font-medium px-4 py-2 rounded transition"
>
    Selengkapnya →
</a>

        </div>

    </div>

</section>



{{-- ========================================================= --}}
{{-- ARTIKEL TERBARU --}}
{{-- ========================================================= --}}

<section class="max-w-7xl mx-auto px-8 py-8">

    <div class="flex justify-between items-end mb-6">

        <div>

            <h2 class="text-2xl font-bold text-[#173F7A]">
                Artikel Terbaru
            </h2>

            <div class="w-14 h-1 bg-[#4A79FF] rounded mt-2"></div>

        </div>

        <a href="/artikel"
           class="text-blue-600 text-sm font-medium hover:underline">

            Lihat Semua →

        </a>

    </div>


    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        @forelse ($artikels as $artikel)

            {{-- CARD ARTIKEL --}}
            <div
                class="bg-white rounded-xl overflow-hidden shadow-sm
                       border border-gray-100
                       hover:shadow-md transition
                       flex flex-col"
            >

                {{-- FOTO ARTIKEL --}}
                @if ($artikel->gambar)

                    <img
                        src="{{ asset('storage/' . $artikel->gambar) }}"
                        alt="{{ $artikel->judul }}"
                        class="w-full h-52 object-cover"
                    >

                @else

                    <div
                        class="w-full h-52 bg-gray-200
                               flex items-center justify-center
                               text-gray-400"
                    >

                        Tidak ada gambar

                    </div>

                @endif


                {{-- ISI CARD --}}
                <div class="p-5 flex flex-col flex-1">

                    {{-- KATEGORI + TANGGAL --}}
                    <div class="flex items-center justify-between mb-3">

                        <span
                            class="bg-[#FF8066]
                                   text-white
                                   text-xs
                                   px-3 py-1
                                   rounded-full"
                        >

                            {{ $artikel->kategori }}

                        </span>

                        <span class="text-xs text-gray-400">

                            {{ \Carbon\Carbon::parse($artikel->tanggal)->translatedFormat('d F Y') }}

                        </span>

                    </div>


                    {{-- JUDUL --}}
                    <h3
                        class="font-bold text-lg
                               text-gray-800
                               leading-snug"
                    >

                        {{ $artikel->judul }}

                    </h3>


                    {{-- DESKRIPSI --}}
                    <p
                        class="text-sm
                               text-gray-500
                               leading-relaxed
                               mt-3"
                    >

                        {{ Str::limit($artikel->deskripsi, 100) }}

                    </p>


                    {{-- DETAIL --}}
                    <div class="mt-auto pt-5">

                        <a
                            href="{{ route('detail.artikel', $artikel->id) }}"
                            class="inline-block
                                   text-[#173F7A]
                                   text-sm
                                   font-semibold
                                   hover:text-[#FF8066]
                                   transition"
                        >

                            Baca Selengkapnya →

                        </a>

                    </div>

                </div>

            </div>

        @empty

            <div class="md:col-span-3 text-center py-10">

                <p class="text-gray-400">
                    Belum ada artikel.
                </p>

            </div>

        @endforelse

    </div>

</section>


{{-- ========================================================= --}}
{{-- GALERI KEGIATAN --}}
{{-- ========================================================= --}}

<section class="max-w-7xl mx-auto px-8 py-8">

    <div class="flex justify-between items-end mb-6">

        <div>

            <h2 class="text-2xl font-bold text-[#173F7A]">
                Galeri Kegiatan
            </h2>

            <div class="w-14 h-1 bg-[#4A79FF] rounded mt-2"></div>

        </div>

        <a href="/galeri"
           class="text-blue-600 text-sm font-medium hover:underline">

            Lihat Semua →

        </a>

    </div>


    <div class="grid grid-cols-2 md:grid-cols-4 gap-5">

    @forelse ($galeris as $galeri)

        <div class="group relative overflow-hidden rounded-xl">

            {{-- FOTO GALERI --}}
           @if ($galeri->foto)

    <img
        src="{{ asset('images/galeri/' . $galeri->foto) }}"
        alt="{{ $galeri->judul }}"
        class="w-full h-56 object-cover
               group-hover:scale-105
               transition duration-300"
    >

@else

    <div class="w-full h-56 bg-gray-200
                flex items-center justify-center
                text-gray-400">

        Tidak ada gambar

    </div>

@endif


            {{-- OVERLAY --}}
            <div class="absolute inset-0
                        bg-gradient-to-t
                        from-black/70
                        via-black/20
                        to-transparent
                        flex items-end">

                <div class="p-4 text-white">

                    <h3 class="font-semibold text-base">
                        {{ $galeri->judul }}
                    </h3>

                    @if ($galeri->kategori)

                        <p class="text-xs text-white/80 mt-1">
                            {{ $galeri->kategori }}
                        </p>

                    @endif

                </div>

            </div>

        </div>

    @empty

        <div class="col-span-2 md:col-span-4
                    text-center py-10">

            <p class="text-gray-400">
                Belum ada galeri.
            </p>

        </div>

    @endforelse

</div>

</section>


<!-- ================= KONTAK ================= -->

<section id="hubungi-kami" class="pt-12 pb-20">

    <div class="max-w-[1400px] mx-auto px-8">

        {{-- BOX KONTAK --}}
        <div class="bg-[#F1F1F1]
                    rounded-2xl
                    px-14
                    py-10">

            <div class="grid grid-cols-2 gap-14 items-center">

                {{-- ================= KIRI ================= --}}
                <div>

                    <h2 class="text-3xl font-bold text-[#173F7A]">
                        Hubungi Kami
                    </h2>

                    <div class="w-14 h-1
                                bg-[#4A79FF]
                                rounded
                                mt-2
                                mb-7">
                    </div>

                    <div class="space-y-6 text-gray-700">

                        {{-- ALAMAT --}}
                        <div class="flex items-start gap-5">

                            <div class="w-7 flex justify-center pt-1">
                                <i class="fa-solid fa-location-dot text-[#173F7A] text-xl"></i>
                            </div>

                            <p class="text-sm leading-6">
                                Jl. Raya Tajur, Kp. Buntar RT.02/RW.08,
                                Kel. Muara Sari, Kec. Bogor Selatan,
                                RT.03/RW.08
                            </p>

                        </div>


                        {{-- TELEPON --}}
                        <div class="flex items-center gap-5">

                            <div class="w-7 flex justify-center">
                                <i class="fa-solid fa-phone text-[#173F7A] text-lg"></i>
                            </div>

                            <p class="text-sm">
                                082260168886
                            </p>

                        </div>


                        {{-- EMAIL --}}
                        <div class="flex items-center gap-5">

                            <div class="w-7 flex justify-center">
                                <i class="fa-regular fa-envelope text-[#173F7A] text-xl"></i>
                            </div>

                            <p class="text-sm underline">
                                smkn4@smkn4bogor.sch.id
                            </p>

                        </div>


                        {{-- JAM --}}
                        <div class="flex items-start gap-5">

                            <div class="w-7 flex justify-center pt-1">
                                <i class="fa-regular fa-clock text-[#173F7A] text-xl"></i>
                            </div>

                            <p class="text-sm leading-6">
                                Senin - Jumat<br>
                                07:00 - 17:00 WIB
                            </p>

                        </div>

                    </div>

                </div>


                {{-- ================= GOOGLE MAP ================= --}}
                <div>

                    <iframe
                        class="rounded-xl
                               w-full
                               h-64
                               shadow-sm"
                        src="https://www.google.com/maps?q=SMKN+4+Bogor&output=embed"
                        loading="lazy">
                    </iframe>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection