@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-8 py-10">

    {{-- ================= BREADCRUMB ================= --}}
    <div class="text-sm text-gray-500 mb-8">

        <a href="/" class="hover:text-[#173F7A]">
            Beranda
        </a>

        <span class="mx-2">›</span>

        <span>Profil</span>

    </div>


    {{-- ================= PROFIL SEKOLAH ================= --}}
    <div class="grid grid-cols-5 gap-10 items-start mb-10">

        {{-- Teks Profil --}}
        <div class="col-span-3">

            <h1 class="text-4xl font-bold text-[#173F7A]">
                PROFIL SEKOLAH
            </h1>

            <div class="w-14 h-[3px] bg-[#FF8066] mt-3 mb-7"></div>


            <div class="space-y-5">

                <p class="text-base text-gray-600 leading-7">
                    SMKN 4 Bogor merupakan sekolah menengah kejuruan
                    yang berkomitmen untuk mencetak lulusan yang
                    kompeten, profesional, berkarakter, dan siap
                    menghadapi dunia kerja maupun melanjutkan
                    pendidikan ke jenjang yang lebih tinggi.
                </p>

                <p class="text-base text-gray-600 leading-7">
                    Melalui proses pembelajaran yang aktif, lingkungan
                    belajar yang nyaman, serta didukung tenaga pendidik
                    yang profesional, SMKN 4 Bogor terus berupaya
                    meningkatkan kualitas pendidikan bagi setiap siswa.
                </p>

                <p class="text-base text-gray-600 leading-7">
                    Kami juga terus mengembangkan potensi siswa melalui
                    kegiatan akademik maupun nonakademik untuk membentuk
                    generasi yang unggul, kreatif, mandiri, dan siap
                    menghadapi perkembangan zaman.
                </p>

            </div>

        </div>


        {{-- Foto --}}
        <div class="col-span-2">

            <img
                src="{{ asset('images/profil.jpeg') }}"
                alt="Foto Kelompok SMKN 4 Bogor"
                class="w-full h-[300px] object-cover rounded-xl shadow-md"
            >

        </div>

    </div>


    {{-- ================= VISI ================= --}}
<div class="bg-[#AFC8F7]
            border-2 border-blue-500
            rounded-lg
            px-7
            py-6
            mb-7">

    <div class="flex gap-5 items-start">

        {{-- ICON VISI --}}
        <div class="flex-shrink-0 mt-1">

            <svg
                class="w-10 h-10 text-[#173F7A]"
                fill="none"
                stroke="currentColor"
                stroke-width="1.5"
                viewBox="0 0 24 24">

                {{-- lingkaran target --}}
                <circle cx="12" cy="12" r="8.5"/>

                {{-- lingkaran tengah --}}
                <circle cx="12" cy="12" r="4"/>

                {{-- garis target --}}
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 3.5V7M12 17V20.5M3.5 12H7M17 12H20.5"/>

                {{-- panah kanan atas --}}
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15 9L20 4M17 4H20V7"/>

            </svg>

        </div>


        <div>

            <h2 class="text-2xl font-bold text-[#173F7A] mb-1">
                Visi
            </h2>

            <p class="text-sm text-gray-800 leading-6">
                Menjadi sekolah menengah kejuruan yang unggul
                dalam mutu pendidikan, berkarakter, inovatif serta mampu
                mencetak lulusan yang kompeten dan siap bersaing
                di dunia kerja maupun dunia industri.
            </p>

        </div>

    </div>

</div>


{{-- ================= MISI ================= --}}
<div class="bg-white
            border border-gray-300
            rounded-lg
            px-7
            py-7
            mb-8
            shadow-md">

    <h2 class="text-2xl font-bold text-[#17233C] mb-6">
        Misi
    </h2>


    <div class="space-y-4">


        {{-- MISI 1 --}}
        <div class="flex gap-4 items-start">

            <svg
                class="w-5 h-5 text-[#173F7A] flex-shrink-0 mt-0.5"
                fill="none"
                stroke="currentColor"
                stroke-width="1.5"
                viewBox="0 0 24 24">

                <circle cx="12" cy="12" r="9"/>

                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m8 12 2.5 2.5L16 9"/>

            </svg>

            <p class="text-sm text-gray-600 leading-6">
                Menyelenggarakan pendidikan yang berkualitas
                sesuai perkembangan ilmu pengetahuan dan teknologi.
            </p>

        </div>


        {{-- MISI 2 --}}
        <div class="flex gap-4 items-start">

            <svg
                class="w-5 h-5 text-[#173F7A] flex-shrink-0 mt-0.5"
                fill="none"
                stroke="currentColor"
                stroke-width="1.5"
                viewBox="0 0 24 24">

                <circle cx="12" cy="12" r="9"/>

                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m8 12 2.5 2.5L16 9"/>

            </svg>

            <p class="text-sm text-gray-600 leading-6">
                Meningkatkan kompetensi siswa yang aktif,
                kreatif, tangguh, dan berkarakter.
            </p>

        </div>


        {{-- MISI 3 --}}
        <div class="flex gap-4 items-start">

            <svg
                class="w-5 h-5 text-[#173F7A] flex-shrink-0 mt-0.5"
                fill="none"
                stroke="currentColor"
                stroke-width="1.5"
                viewBox="0 0 24 24">

                <circle cx="12" cy="12" r="9"/>

                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m8 12 2.5 2.5L16 9"/>

            </svg>

            <p class="text-sm text-gray-600 leading-6">
                Mengembangkan keterampilan siswa agar siap
                menghadapi dunia kerja maupun pendidikan lanjutan.
            </p>

        </div>


        {{-- MISI 4 --}}
        <div class="flex gap-4 items-start">

            <svg
                class="w-5 h-5 text-[#173F7A] flex-shrink-0 mt-0.5"
                fill="none"
                stroke="currentColor"
                stroke-width="1.5"
                viewBox="0 0 24 24">

                <circle cx="12" cy="12" r="9"/>

                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m8 12 2.5 2.5L16 9"/>

            </svg>

            <p class="text-sm text-gray-600 leading-6">
                Menjalin kerja sama dengan dunia usaha dan
                dunia industri untuk meningkatkan kualitas lulusan.
            </p>

        </div>


        {{-- MISI 5 --}}
        <div class="flex gap-4 items-start">

            <svg
                class="w-5 h-5 text-[#173F7A] flex-shrink-0 mt-0.5"
                fill="none"
                stroke="currentColor"
                stroke-width="1.5"
                viewBox="0 0 24 24">

                <circle cx="12" cy="12" r="9"/>

                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m8 12 2.5 2.5L16 9"/>

            </svg>

            <p class="text-sm text-gray-600 leading-6">
                Mendorong budaya belajar, berinovasi,
                dan berprestasi bagi seluruh warga sekolah.
            </p>

        </div>

    </div>

</div>

</div>

@endsection