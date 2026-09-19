@extends('layouts.admin')

@section('content')

<div class="flex min-h-screen">

    {{-- SIDEBAR --}}
    <aside id="sidebar"
           class="w-[270px] bg-[#173F7A] text-white flex-shrink-0 hidden lg:flex flex-col transition-all duration-300 overflow-hidden">

        {{-- LOGO --}}
        <div class="px-6 py-7">

            <div class="flex items-center gap-4">

                <div class="w-16 h-16 bg-[#FFF4D6] rounded-full
                            flex items-center justify-center overflow-hidden flex-shrink-0">

                    <img src="{{ asset('images/logo.jpeg') }}"
                         class="w-12 h-12 object-contain">

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


        {{-- MENU ATAS --}}
        <nav class="px-4 space-y-2">

            {{-- DASHBOARD --}}
            <a href="{{ route('admin.dashboard') }}"
               class="flex items-center gap-4 px-4 py-3.5
                      rounded-lg hover:bg-white/10 font-semibold">

                <svg class="w-6 h-6 flex-shrink-0"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h4v-6h4v6h4a1 1 0 001-1V10"/>

                </svg>

                <span class="sidebar-text">Dashboard</span>

            </a>


            {{-- ARTIKEL --}}
            <a href="{{ route('admin.artikel.index') }}"
               class="flex items-center gap-4 px-4 py-3.5
                      rounded-lg hover:bg-white/10 font-semibold">

                <svg class="w-6 h-6 flex-shrink-0"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M6 4h12a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2z"/>

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M8 8h8M8 12h8M8 16h5"/>

                </svg>

                <span class="sidebar-text">Informasi / Artikel</span>

            </a>


            {{-- GALERI --}}
            <a href="{{ route('admin.galeri.index') }}"
               class="flex items-center gap-4 px-4 py-3.5
                      rounded-lg hover:bg-white/10 font-semibold">

                <svg class="w-6 h-6 flex-shrink-0"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     viewBox="0 0 24 24">

                    <rect x="3"
                          y="4"
                          width="18"
                          height="16"
                          rx="2"/>

                    <circle cx="8.5"
                            cy="9"
                            r="1.5"/>

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M21 15l-5-5L5 20"/>

                </svg>

                <span class="sidebar-text">Galeri</span>

            </a>

        </nav>


        {{-- PEMISAH --}}
        <div class="border-t border-white/20 mx-4 my-6"></div>


        {{-- MENU BAWAH --}}
        <nav class="px-4 space-y-2">

            {{-- PENGGUNA --}}
            <a href="{{ route('admin.pengguna.index') }}"
               class="flex items-center gap-4 px-4 py-3.5
                      rounded-lg hover:bg-white/10 font-semibold">

                <svg class="w-6 h-6 flex-shrink-0"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-2 4v2"/>

                    <circle cx="9"
                            cy="7"
                            r="4"/>

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>

                </svg>

                <span class="sidebar-text">Pengguna</span>

            </a>


            {{-- KELUAR --}}
            <a href="{{ route('admin.keluar') }}"
               class="flex items-center gap-4 px-4 py-3.5
                      rounded-lg bg-[#2868C7] font-semibold">

                <svg class="w-6 h-6 flex-shrink-0"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M10 17l5-5-5-5M15 12H3"/>

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M21 19V5a2 2 0 00-2-2h-6"/>

                </svg>

                <span class="sidebar-text">Keluar</span>

            </a>

        </nav>

    </aside>


    {{-- AREA KONTEN --}}
    <main class="flex-1 bg-white min-h-screen">

        {{-- HEADER --}}
        <div class="h-[72px] border-b border-gray-200
                    flex items-center justify-between
                    px-8">

            <div class="flex items-center gap-4">

                <div>

                    <h2 class="font-bold text-lg text-gray-800">
                        Keluar
                    </h2>

                    <p class="text-[10px] text-gray-400">
    <a href="{{ route('admin.dashboard') }}"
       class="hover:text-[#173F7A] transition">
        Dashboard
    </a>

    <span class="mx-1">/</span>

    <span>
        Keluar
    </span>
</p>

                </div>

            </div>


            {{-- ADMIN --}}
            <div class="flex items-center gap-4">

                <div class="w-7 h-7 rounded-full
                            bg-[#173F7A] text-white
                            flex items-center justify-center
                            text-xs font-bold">

                    A

                </div>


                <div class="leading-tight">

                    <p class="text-xs font-semibold text-gray-800">
                        Admin
                    </p>

                    <p class="text-[9px] text-gray-400">
                        Super Admin
                    </p>

                </div>

            </div>

        </div>


        {{-- ISI HALAMAN --}}
        <div class="px-10 py-10">

            {{-- CARD KONFIRMASI --}}
            <div class="max-w-[700px] mx-auto">

                <div class="border border-gray-200
                            rounded-lg
                            shadow-sm
                            bg-white
                            px-12 py-10
                            text-center">

                    {{-- ICON --}}
                    <div class="mx-auto
                                w-20 h-20
                                rounded-full
                                bg-[#DCE8FF]
                                flex items-center justify-center
                                mb-6">

                        <svg class="w-10 h-10 text-[#2868C7]"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2"
                             viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M10 17l5-5-5-5M15 12H3"/>

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M21 19V5a2 2 0 00-2-2h-6"/>

                        </svg>

                    </div>


                    {{-- JUDUL --}}
                    <h1 class="text-xl font-bold text-[#173F7A]">
                        Keluar dari Dashboard?
                    </h1>


                    {{-- DESKRIPSI --}}
                    <p class="text-sm text-gray-500
                              max-w-md mx-auto
                              mt-3 leading-relaxed">

                        Apakah anda yakin ingin keluar dari sistem
                        <br>
                        SMKN 4 Bogor Digital?

                    </p>


                    {{-- BUTTON --}}
                    <div class="flex justify-center gap-5 mt-8">

                        {{-- BATAL --}}
                        <a href="{{ route('admin.dashboard') }}"
                           class="px-8 py-3
                                  rounded-md
                                  bg-[#FF8066]
                                  hover:bg-[#ff7055]
                                  text-white
                                  text-sm
                                  font-semibold
                                  transition">

                            Batal

                        </a>


                        {{-- YA, KELUAR --}}
                        <form method="POST"
                              action="{{ route('logout') }}">

                            @csrf

                            <button
                                type="submit"
                                class="px-8 py-3
                                       rounded-md
                                       bg-[#FF8066]
                                       hover:bg-[#ff7055]
                                       text-white
                                       text-sm
                                       font-semibold
                                       transition">

                                Ya, keluar

                            </button>

                        </form>

                    </div>

                </div>


                {{-- TEKS BAWAH --}}
                <div class="text-center mt-10">

                    <h3 class="font-bold
                               text-lg
                               text-[#173F7A]">

                        KELUAR

                    </h3>

                    <p class="text-xs
                              text-gray-500
                              mt-2
                              leading-relaxed">

                        Konfirmasi sebelum keluar dari dashboard
                        <br>
                        untuk menjaga keamanan akun.

                    </p>

                </div>

            </div>

        </div>

    </main>

</div>

@endsection