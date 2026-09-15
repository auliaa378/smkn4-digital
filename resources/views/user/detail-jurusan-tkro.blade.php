@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-6 lg:px-10 py-8">

    <div class="text-xs text-gray-500 mb-5">

    <a href="/" class="hover:text-[#173F7A]">
        Beranda
    </a>

    <span class="mx-1">›</span>

    <span>
        TKRO
    </span>

</div>


    <!-- HERO -->
    <div class="relative h-[300px] md:h-[360px] rounded-2xl overflow-hidden shadow-md mb-8">

        <img
            src="{{ asset('images/fototkro.jpeg') }}"
            alt="Jurusan TKRO"
            class="w-full h-full object-cover"
        >

        <div class="absolute inset-0 bg-[#173F7A]/55"></div>

        <div class="absolute inset-0 flex items-center px-8 lg:px-12">

            <div class="text-white">

                <p class="text-sm uppercase tracking-wider mb-2">
                    Jurusan
                </p>

                <h1 class="text-4xl md:text-5xl font-bold">
                    TKRO
                </h1>

                <p class="mt-3 text-base md:text-lg">
                    Teknik Kendaraan Ringan Otomotif
                </p>

            </div>

        </div>

    </div>


    <!-- TENTANG -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-7 mb-8">

        <div class="flex justify-between gap-8">

            <div class="flex-1">

                <h2 class="text-xl font-bold text-[#173F7A] mb-3">
                    Tentang Jurusan TKRO
                </h2>

                <p class="text-sm text-gray-600 leading-relaxed">
                    Teknik Kendaraan Ringan Otomotif (TKRO) merupakan jurusan
                    yang mempelajari perawatan, perbaikan, dan teknologi
                    kendaraan ringan khususnya kendaraan roda empat.
                </p>

                <p class="text-sm text-gray-600 leading-relaxed mt-3">
                    Siswa dibekali kemampuan melakukan pemeriksaan,
                    perawatan mesin, sistem kelistrikan, sistem pemindah
                    tenaga, serta berbagai teknologi kendaraan modern.
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
                          d="M3 13l2-5h14l2 5"/>

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M5 13v5h2v-2h10v2h2v-5"/>

                    <circle cx="7"
                            cy="16"
                            r="1.5"/>

                    <circle cx="17"
                            cy="16"
                            r="1.5"/>

                </svg>

            </div>

        </div>

    </div>


    <!-- PROSPEK -->
    <div class="mb-8">

        <h2 class="text-xl font-bold text-[#173F7A] mb-4">
            Prospek Kerja
        </h2>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-5">

            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-5 text-center">

                <div class="w-12 h-12 mx-auto rounded-full bg-blue-50 flex items-center justify-center text-xl">
                    🔧
                </div>

                <h3 class="font-bold text-[#173F7A] mt-4">
                    Service Advisor
                </h3>

                <p class="text-xs text-gray-500 mt-2">
                    Melayani pelanggan dan memberikan konsultasi bidang otomotif.
                </p>

            </div>


            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-5 text-center">

                <div class="w-12 h-12 mx-auto rounded-full bg-blue-50 flex items-center justify-center text-xl">
                    ⚙️
                </div>

                <h3 class="font-bold text-[#173F7A] mt-4">
                    Mekanik Otomotif
                </h3>

                <p class="text-xs text-gray-500 mt-2">
                    Melakukan perawatan dan perbaikan kendaraan ringan.
                </p>

            </div>


            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-5 text-center">

                <div class="w-12 h-12 mx-auto rounded-full bg-blue-50 flex items-center justify-center text-xl">
                    🚗
                </div>

                <h3 class="font-bold text-[#173F7A] mt-4">
                    Teknisi Kendaraan
                </h3>

                <p class="text-xs text-gray-500 mt-2">
                    Menangani sistem dan teknologi kendaraan.
                </p>

            </div>


            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-5 text-center">

                <div class="w-12 h-12 mx-auto rounded-full bg-blue-50 flex items-center justify-center text-xl">
                    🛠️
                </div>

                <h3 class="font-bold text-[#173F7A] mt-4">
                    Teknisi Manufaktur
                </h3>

                <p class="text-xs text-gray-500 mt-2">
                    Mempelajari dan menangani proses produksi otomotif.
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
                    src="{{ asset('images/bengkel-tkro.jpeg') }}"
                    alt="Bengkel Otomotif"
                    class="w-full h-[250px] object-cover"
                >

                <div class="p-7 flex flex-col justify-center">

                    <h3 class="text-lg font-bold text-[#173F7A]">
                        Bengkel Otomotif
                    </h3>

                    <p class="text-sm text-gray-600 leading-relaxed mt-3">
                        Dilengkapi peralatan servis dan kendaraan praktik
                        untuk mendukung pembelajaran otomotif secara langsung.
                    </p>

                    <div class="grid grid-cols-3 gap-3 mt-5">

                        <div class="text-center text-xs text-gray-500">
                            🚗
                            <p class="mt-1">Unit Kendaraan</p>
                        </div>

                        <div class="text-center text-xs text-gray-500">
                            🔧
                            <p class="mt-1">Tools</p>
                        </div>

                        <div class="text-center text-xs text-gray-500">
                            ⚙️
                            <p class="mt-1">Gear Lengkap</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection