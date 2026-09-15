@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-6 lg:px-10 py-8">

    <!-- Breadcrumb -->
<div class="text-xs text-gray-500 mb-5">

    <a href="/" class="hover:text-[#173F7A]">
        Beranda
    </a>

    <span class="mx-1">›</span>
    
    <span>
        TJKT
    </span>

</div>


    <!-- HERO -->
    <div class="relative h-[300px] md:h-[360px] rounded-2xl overflow-hidden shadow-md mb-8">

        <img
            src="{{ asset('images/fototjkt.jpeg') }}"
            alt="Jurusan TJKT"
            class="w-full h-full object-cover"
        >

        <div class="absolute inset-0 bg-[#173F7A]/55"></div>

        <div class="absolute inset-0 flex items-center px-8 lg:px-12">

            <div class="text-white">

                <p class="text-sm uppercase tracking-wider mb-2">
                    Jurusan
                </p>

                <h1 class="text-4xl md:text-5xl font-bold">
                    TJKT
                </h1>

                <p class="mt-3 text-base md:text-lg">
                    Teknik Jaringan Komputer dan Telekomunikasi
                </p>

            </div>

        </div>

    </div>


    <!-- TENTANG -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-7 mb-8">

        <div class="flex justify-between gap-8">

            <div class="flex-1">

                <h2 class="text-xl font-bold text-[#173F7A] mb-3">
                    Tentang Jurusan TJKT
                </h2>

                <p class="text-sm text-gray-600 leading-relaxed">
                    Teknik Jaringan Komputer dan Telekomunikasi (TJKT)
                    mempelajari teknologi jaringan komputer, sistem
                    komunikasi, perangkat jaringan, serta teknologi
                    telekomunikasi.
                </p>

                <p class="text-sm text-gray-600 leading-relaxed mt-3">
                    Siswa dibekali kemampuan instalasi, konfigurasi,
                    pemeliharaan jaringan komputer, keamanan jaringan,
                    serta pengelolaan infrastruktur jaringan.
                </p>

            </div>

            <div class="hidden md:flex items-center justify-center w-28">

                <svg class="w-16 h-16 text-[#2563EB]"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="1.5"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M3 7.5A2.5 2.5 0 015.5 5h13A2.5 2.5 0 0121 7.5v9a2.5 2.5 0 01-2.5 2.5h-13A2.5 2.5 0 013 16.5v-9z"/>

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M8 19v2m8-2v2M7 9h10M7 13h4"/>

                </svg>

            </div>

        </div>

    </div>


    <!-- PROSPEK KERJA -->
    <div class="mb-8">

        <h2 class="text-xl font-bold text-[#173F7A] mb-4">
            Prospek Kerja
        </h2>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-5">

            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-5 text-center">

                <div class="w-12 h-12 mx-auto rounded-full bg-blue-50 flex items-center justify-center text-xl">
                    🌐
                </div>

                <h3 class="font-bold text-[#173F7A] mt-4">
                    Network Engineer
                </h3>

                <p class="text-xs text-gray-500 mt-2">
                    Merancang, mengelola dan memelihara jaringan komputer.
                </p>

            </div>


            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-5 text-center">

                <div class="w-12 h-12 mx-auto rounded-full bg-blue-50 flex items-center justify-center text-xl">
                    📡
                </div>

                <h3 class="font-bold text-[#173F7A] mt-4">
                    Network Administrator
                </h3>

                <p class="text-xs text-gray-500 mt-2">
                    Mengelola server, router, switch dan perangkat jaringan.
                </p>

            </div>


            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-5 text-center">

                <div class="w-12 h-12 mx-auto rounded-full bg-blue-50 flex items-center justify-center text-xl">
                    🔒
                </div>

                <h3 class="font-bold text-[#173F7A] mt-4">
                    Network Security
                </h3>

                <p class="text-xs text-gray-500 mt-2">
                    Menjaga keamanan jaringan dan sistem komputer.
                </p>

            </div>


            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-5 text-center">

                <div class="w-12 h-12 mx-auto rounded-full bg-blue-50 flex items-center justify-center text-xl">
                    🌍
                </div>

                <h3 class="font-bold text-[#173F7A] mt-4">
                    Internet Service Technician
                </h3>

                <p class="text-xs text-gray-500 mt-2">
                    Melakukan instalasi dan pemeliharaan jaringan internet.
                </p>

            </div>

        </div>

    </div>


    <!-- FASILITAS -->
    <div>

        <h2 class="text-xl font-bold text-[#173F7A] mb-4">
            Fasilitas Pembelajaran
        </h2>

        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">

            <div class="grid md:grid-cols-2">

                <img
                    src="{{ asset('images/lab-tjkt.jpeg') }}"
                    alt="Laboratorium Jaringan Komputer"
                    class="w-full h-[250px] object-cover"
                >

                <div class="p-7 flex flex-col justify-center">

                    <h3 class="text-lg font-bold text-[#173F7A]">
                        Laboratorium Jaringan Komputer
                    </h3>

                    <p class="text-sm text-gray-600 leading-relaxed mt-3">
                        Dilengkapi perangkat jaringan modern untuk mendukung
                        pembelajaran jaringan komputer dan telekomunikasi.
                    </p>

                    <div class="grid grid-cols-3 gap-3 mt-5">

                        <div class="text-center text-xs text-gray-500">
                            🖥️
                            <p class="mt-1">PC & Server</p>
                        </div>

                        <div class="text-center text-xs text-gray-500">
                            🌐
                            <p class="mt-1">Router Mikrotik</p>
                        </div>

                        <div class="text-center text-xs text-gray-500">
                            🔌
                            <p class="mt-1">Kabel & Switch</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection