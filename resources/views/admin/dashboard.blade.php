@extends('layouts.app')

@section('content')

@php
    use App\Models\Artikel;
    use App\Models\Galeri;


    $totalArtikel = Artikel::count();
    $totalGaleri = Galeri::count();
    $totalPengguna = \App\Models\User::count();

    $aktivitas = Artikel::latest('created_at')
        ->take(5)
        ->get()
        ->map(function ($item) {
            return [
                'jenis' => 'Artikel',
                'judul' => $item->judul ?? 'Artikel Baru',
                'tanggal' => $item->created_at,
            ];
        });
@endphp


<div class="min-h-screen bg-[#f4f5f7]">

    <div class="flex min-h-screen">


        {{-- =====================================================
            SIDEBAR
        ====================================================== --}}

        <aside
            id="sidebar"
            class="w-[270px] bg-[#173F7A] text-white
                   flex-shrink-0 hidden lg:flex flex-col
                   transition-all duration-300 ease-in-out"
        >

            {{-- LOGO --}}
            <div class="px-6 py-7">

                <div class="flex items-center gap-4">

                    <div
                        class="w-16 h-16 bg-[#FFF4D6]
                               rounded-full flex items-center
                               justify-center overflow-hidden
                               flex-shrink-0"
                    >

                        <img
        src="{{ asset('images/logo.jpeg') }}"
        alt="SMKN 4 Bogor"
        class="w-10 h-10 rounded-full object-cover"
    >

                    </div>

                    <div class="sidebar-text">

                        <h1 class="font-bold text-[17px] leading-tight">
                            SMKN 4
                        </h1>

                        <p class="font-bold text-[17px] leading-tight">
                            BOGOR DIGITAL
                        </p>

                    </div>

                </div>

            </div>


            {{-- MENU UTAMA --}}
            <nav class="px-4 space-y-2">

                {{-- DASHBOARD --}}
                <a
                    href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-4 px-4 py-3.5
                           rounded-lg bg-[#2868C7]
                           text-white font-semibold
                           sidebar-link"
                >

                    <svg
                        class="w-6 h-6 flex-shrink-0"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                    >

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h4v-6h4v6h4a1 1 0 001-1V10"
                        />

                    </svg>

                    <span class="sidebar-text">
                        Dashboard
                    </span>

                </a>


                {{-- ARTIKEL --}}
                <a
                    href="{{ route('admin.artikel.index') }}"
                    class="flex items-center gap-4 px-4 py-3.5
                           rounded-lg hover:bg-white/10
                           transition font-semibold sidebar-link"
                >

                    <svg
                        class="w-6 h-6 flex-shrink-0"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                    >

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 4h12a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2z"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8 8h8M8 12h8M8 16h5"
                        />

                    </svg>

                    <span class="sidebar-text">
                        Informasi / Artikel
                    </span>

                </a>


                {{-- GALERI --}}
                <a
                    href="{{ route('admin.galeri.index') }}"
                    class="flex items-center gap-4 px-4 py-3.5
                           rounded-lg hover:bg-white/10
                           transition font-semibold sidebar-link"
                >

                    <svg
                        class="w-6 h-6 flex-shrink-0"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                    >

                        <rect
                            x="3"
                            y="4"
                            width="18"
                            height="16"
                            rx="2"
                        />

                        <circle
                            cx="8.5"
                            cy="9"
                            r="1.5"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M21 15l-5-5L5 20"
                        />

                    </svg>

                    <span class="sidebar-text">
                        Galeri
                    </span>

                </a>

            </nav>


            {{-- GARIS PEMISAH --}}
            <div
                class="border-t border-white/20
                       mx-4 my-6 sidebar-divider"
            ></div>


            {{-- MENU BAWAH --}}
            <nav class="px-4 space-y-2">

                {{-- PENGGUNA --}}
                <a
                    href="{{ route('admin.pengguna.index') }}"
                    class="flex items-center gap-4 px-4 py-3.5
                           rounded-lg hover:bg-white/10
                           transition font-semibold sidebar-link"
                >

                    <svg
                        class="w-6 h-6 flex-shrink-0"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                    >

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"
                        />

                        <circle
                            cx="9"
                            cy="7"
                            r="4"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"
                        />

                    </svg>

                    <span class="sidebar-text">
                        Pengguna
                    </span>

                </a>


                {{-- LOGOUT --}}
                <a
                    href="{{ route('admin.keluar') }}"
                    class="flex items-center gap-4 px-4 py-3.5
                           rounded-lg hover:bg-white/10
                           font-semibold sidebar-link"
                >

                    <svg
                        class="w-6 h-6 flex-shrink-0"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                    >

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10 17l5-5-5-5M15 12H3"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M21 19V5a2 2 0 00-2-2h-6"
                        />

                    </svg>

                    <span class="sidebar-text">
                        Keluar
                    </span>

                </a>

            </nav>

        </aside>



        {{-- =====================================================
            BAGIAN KANAN
        ====================================================== --}}

        <main class="flex-1 min-w-0 bg-[#f4f5f7]">


            {{-- =================================================
                TOPBAR
            ================================================== --}}

            <header
                class="relative h-[72px] bg-white border-b border-gray-200
                       px-6 lg:px-8 flex items-center justify-between"
            >

                {{-- KIRI --}}
                <div class="flex items-center gap-4 flex-shrink-0">

                    {{-- GARIS 3 DIHAPUS --}}

                    <h2 class="text-xl font-bold text-gray-900">
                        Dashboard
                    </h2>

                </div>


                {{-- KANAN --}}
                <div class="flex items-center gap-5 flex-shrink-0">

                    {{-- SEARCH --}}
                    <div class="relative hidden md:block">

                    </div>


                    {{-- PROFILE --}}
                    <div class="flex items-center gap-3 flex-shrink-0">

                        <div
                            class="w-9 h-9 rounded-full
                                   bg-[#173F7A] text-white
                                   flex items-center justify-center
                                   font-bold text-sm"
                        >
                            A
                        </div>

                        <div class="hidden sm:block">

                            <p class="text-sm font-bold text-gray-800">
                                Admin
                            </p>

                            <p class="text-[10px] text-gray-400">
                                Super Admin
                            </p>

                        </div>

                    </div>

                </div>

            </header>


            {{-- =================================================
                CONTENT
            ================================================== --}}

            <div class="p-6 lg:p-8">


                {{-- WELCOME --}}
                <div class="mb-6">

                    <h1
                        class="text-2xl lg:text-[26px]
                               font-bold text-gray-900"
                    >
                        Selamat Datang, Admin!
                    </h1>

                    <p class="text-xs text-gray-500 mt-1">
                        Kelola informasi website SMKN 4 Bogor Digital dengan mudah.
                    </p>

                </div>


                {{-- =================================================
                    3 STATISTIC CARD
                ================================================== --}}

                <div
                    class="grid grid-cols-1 sm:grid-cols-2
                           xl:grid-cols-3 gap-4 mb-8"
                >


                    {{-- PENGGUNA --}}
                    <div
                        class="bg-white rounded-xl
                               border border-gray-200
                               shadow-sm p-4"
                    >

                        <div class="flex items-center gap-4">

                            <div
                                class="w-12 h-12 rounded-xl
                                       bg-blue-100
                                       flex items-center
                                       justify-center"
                            >

                                <svg
                                    class="w-6 h-6 text-blue-600"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                >

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"
                                    />

                                    <circle
                                        cx="9"
                                        cy="7"
                                        r="4"
                                    />

                                </svg>

                            </div>

                            <div>

                                <p
                                    class="text-2xl font-bold
                                           text-gray-900"
                                >
                                    {{ $totalPengguna }}
                                </p>

                                <p class="text-[10px] text-gray-500">
                                    Total Pengguna
                                </p>

                            </div>

                        </div>

                        <a
                            href="{{ route('admin.pengguna.index') }}"
                            class="inline-block mt-4
                                   text-[11px] text-blue-600
                                   font-medium"
                        >
                            Lihat Detail →
                        </a>

                    </div>



                    {{-- ARTIKEL --}}
                    <div
                        class="bg-white rounded-xl
                               border border-gray-200
                               shadow-sm p-4"
                    >

                        <div class="flex items-center gap-4">

                            <div
                                class="w-12 h-12 rounded-xl
                                       bg-green-100
                                       flex items-center
                                       justify-center"
                            >

                                <svg
                                    class="w-6 h-6 text-green-600"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                >

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M6 4h12a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2z"
                                    />

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M8 8h8M8 12h8M8 16h5"
                                    />

                                </svg>

                            </div>

                            <div>

                                <p
                                    class="text-2xl font-bold
                                           text-gray-900"
                                >
                                    {{ $totalArtikel }}
                                </p>

                                <p class="text-[10px] text-gray-500">
                                    Total Artikel
                                </p>

                            </div>

                        </div>

                        <a
                            href="{{ route('admin.artikel.index') }}"
                            class="inline-block mt-4
                                   text-[11px] text-blue-600
                                   font-medium"
                        >
                            Lihat Detail →
                        </a>

                    </div>



                    {{-- GALERI --}}
                    <div
                        class="bg-white rounded-xl
                               border border-gray-200
                               shadow-sm p-4"
                    >

                        <div class="flex items-center gap-4">

                            <div
                                class="w-12 h-12 rounded-xl
                                       bg-purple-100
                                       flex items-center
                                       justify-center"
                            >

                                <svg
                                    class="w-6 h-6 text-purple-600"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                >

                                    <rect
                                        x="3"
                                        y="4"
                                        width="18"
                                        height="16"
                                        rx="2"
                                    />

                                    <circle
                                        cx="8.5"
                                        cy="9"
                                        r="1.5"
                                    />

                                    <path
                                        d="M21 15l-5-5L5 20"
                                    />

                                </svg>

                            </div>

                            <div>

                                <p
                                    class="text-2xl font-bold
                                           text-gray-900"
                                >
                                    {{ $totalGaleri }}
                                </p>

                                <p class="text-[10px] text-gray-500">
                                    Total Galeri
                                </p>

                            </div>

                        </div>

                        <a
                            href="{{ route('admin.galeri.index') }}"
                            class="inline-block mt-4
                                   text-[11px] text-blue-600
                                   font-medium"
                        >
                            Lihat Detail →
                        </a>

                    </div>

                </div>



                {{-- =================================================
                    BAGIAN BAWAH
                ================================================== --}}

                <div
                    class="grid grid-cols-1
                           gap-5"
                >


                    {{-- =================================================
                        AKTIVITAS TERBARU
                        HANYA ARTIKEL
                    ================================================== --}}

                    <div
                        class="bg-white rounded-xl
                               border border-gray-200
                               shadow-sm overflow-hidden"
                    >

                        <div
                            class="px-5 py-4
                                   border-b border-gray-100"
                        >

                            <h2
                                class="text-base font-bold
                                       text-gray-900"
                            >
                                Aktivitas Terbaru
                            </h2>

                            <p class="text-[10px] text-gray-400 mt-1">
                                Artikel yang baru ditambahkan
                            </p>

                        </div>


                        @forelse ($aktivitas as $item)

                            <div
                                class="px-5 py-3
                                       border-b border-gray-100
                                       flex items-center
                                       justify-between"
                            >

                                <div
                                    class="flex items-center
                                           gap-3 min-w-0"
                                >

                                    {{-- ICON ARTIKEL --}}
                                    <div
                                        class="w-8 h-8 rounded-full
                                               bg-green-100
                                               flex items-center
                                               justify-center
                                               flex-shrink-0"
                                    >

                                        <svg
                                            class="w-4 h-4 text-green-600"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24"
                                        >

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M6 4h12a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2z"
                                            />

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M8 8h8M8 12h8M8 16h5"
                                            />

                                        </svg>

                                    </div>


                                    {{-- INFORMASI ARTIKEL --}}
                                    <div class="min-w-0">

                                        <p
                                            class="text-[10px]
                                                   text-gray-700
                                                   leading-tight
                                                   truncate"
                                        >

                                            Artikel Baru
                                            "{{ $item['judul'] }}"
                                            ditambahkan

                                        </p>

                                        <p
                                            class="text-[9px]
                                                   text-gray-400
                                                   mt-1"
                                        >

                                            {{ $item['tanggal']->diffForHumans() }}

                                        </p>

                                    </div>

                                </div>


                                {{-- JAM --}}
                                <span
                                    class="text-[9px]
                                           text-gray-400
                                           flex-shrink-0
                                           ml-3"
                                >

                                    {{ $item['tanggal']->format('H:i') }}

                                </span>

                            </div>

                        @empty

                            <div
                                class="px-5 py-10
                                       text-center
                                       text-sm
                                       text-gray-400"
                            >

                                Belum ada artikel terbaru.

                            </div>

                        @endforelse


                        {{-- TOMBOL --}}
                        <div class="p-4">

                            <a
                                href="{{ route('admin.artikel.index') }}"
                                class="inline-flex items-center
                                       px-3 py-2
                                       border border-gray-200
                                       rounded-md
                                       text-[10px]
                                       text-blue-600
                                       hover:bg-blue-50"
                            >

                                Lihat Semua Artikel →

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </main>

    </div>

</div>

@endsection