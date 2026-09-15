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
        PPLG
    </span>

</div>


    <!-- HERO -->
    <div class="relative h-[300px] md:h-[360px] rounded-2xl overflow-hidden shadow-md mb-8">

        <img
            src="{{ asset('images/fotopplg.jpeg') }}"
            alt="Jurusan PPLG"
            class="w-full h-full object-cover"
        >

        <div class="absolute inset-0 bg-[#173F7A]/55"></div>

        <div class="absolute inset-0 flex items-center px-8 lg:px-12">

            <div class="text-white">

                <p class="text-sm uppercase tracking-wider mb-2">
                    Jurusan
                </p>

                <h1 class="text-4xl md:text-5xl font-bold">
                    PPLG
                </h1>

                <p class="mt-3 text-base md:text-lg">
                    Pengembangan Perangkat Lunak dan Gim
                </p>

            </div>

        </div>

    </div>


    <!-- TENTANG JURUSAN -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-7 mb-8">

        <div class="flex justify-between gap-8">

            <div class="flex-1">

                <h2 class="text-xl font-bold text-[#173F7A] mb-3">
                    Tentang Jurusan PPLG
                </h2>

                <p class="text-sm text-gray-600 leading-relaxed">
                    Pengembangan Perangkat Lunak dan Gim (PPLG) adalah jurusan
                    yang mempelajari proses pengembangan perangkat lunak,
                    aplikasi, website, serta gim.
                </p>

                <p class="text-sm text-gray-600 leading-relaxed mt-3">
                    Siswa dibekali kemampuan pemrograman, perancangan
                    antarmuka, pengembangan aplikasi, pengelolaan database,
                    serta teknologi digital yang sesuai dengan kebutuhan
                    dunia industri.
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
                          d="M8.25 9.75l-1.5 1.5
                          1.5 1.5m7.5-3l1.5 1.5
                          -1.5 1.5M14.25 6l-4.5 12"/>

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M3.75 6.75A2.25 2.25 0 016 4.5h12a2.25 2.25 0 012.25 2.25v10.5A2.25 2.25 0 0118 19.5H6a2.25 2.25 0 01-2.25-2.25V6.75z"/>

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

            <!-- 1 -->
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-5 text-center">

                <div class="w-12 h-12 mx-auto rounded-full bg-blue-50 flex items-center justify-center">

                    <span class="text-xl text-blue-600">&lt;/&gt;</span>

                </div>

                <h3 class="font-bold text-[#173F7A] mt-4">
                    Web Developer
                </h3>

                <p class="text-xs text-gray-500 mt-2 leading-relaxed">
                    Mengembangkan website dan aplikasi berbasis web.
                </p>

            </div>

            <!-- 2 -->
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-5 text-center">

                <div class="w-12 h-12 mx-auto rounded-full bg-blue-50 flex items-center justify-center">

                    <span class="text-xl text-blue-600">▣</span>

                </div>

                <h3 class="font-bold text-[#173F7A] mt-4">
                    Mobile Developer
                </h3>

                <p class="text-xs text-gray-500 mt-2 leading-relaxed">
                    Membuat aplikasi mobile Android maupun platform lainnya.
                </p>

            </div>

            <!-- 3 -->
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-5 text-center">

                <div class="w-12 h-12 mx-auto rounded-full bg-blue-50 flex items-center justify-center">

                    <span class="text-xl text-blue-600">✦</span>

                </div>

                <h3 class="font-bold text-[#173F7A] mt-4">
                    UI/UX Designer
                </h3>

                <p class="text-xs text-gray-500 mt-2 leading-relaxed">
                    Merancang tampilan dan pengalaman pengguna aplikasi.
                </p>

            </div>

            <!-- 4 -->
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-5 text-center">

                <div class="w-12 h-12 mx-auto rounded-full bg-blue-50 flex items-center justify-center">

                    <span class="text-xl text-blue-600">🎮</span>

                </div>

                <h3 class="font-bold text-[#173F7A] mt-4">
                    Game Developer
                </h3>

                <p class="text-xs text-gray-500 mt-2 leading-relaxed">
                    Mengembangkan permainan digital dan gim interaktif.
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
                    src="{{ asset('images/lab-pplg.jpeg') }}"
                    alt="Laboratorium Komputer PPLG"
                    class="w-full h-[250px] object-cover"
                >

                <div class="p-7 flex flex-col justify-center">

                    <h3 class="text-lg font-bold text-[#173F7A]">
                        Laboratorium Komputer
                    </h3>

                    <p class="text-sm text-gray-600 leading-relaxed mt-3">
                        Laboratorium komputer dilengkapi perangkat yang
                        mendukung proses pembelajaran pemrograman,
                        desain, pengembangan aplikasi, dan pembuatan gim.
                    </p>

                    <div class="grid grid-cols-3 gap-3 mt-5">

                        <div class="text-center text-xs text-gray-500">
                            💻
                            <p class="mt-1">PC High Spec</p>
                        </div>

                        <div class="text-center text-xs text-gray-500">
                            🌐
                            <p class="mt-1">Internet Cepat</p>
                        </div>

                        <div class="text-center text-xs text-gray-500">
                            ⚙️
                            <p class="mt-1">Perangkat Lengkap</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection