@extends('layouts.admin')

@section('content')

<div class="flex min-h-screen">

    {{-- SIDEBAR --}}
    <aside
        id="sidebar"
        class="w-[270px] bg-[#173F7A] text-white flex-shrink-0
               hidden lg:flex flex-col
               transition-all duration-300 ease-in-out">

        {{-- LOGO --}}
        <div class="px-6 py-7">

            <div class="flex items-center gap-4">

                <div class="w-16 h-16 bg-[#FFF4D6] rounded-full
                            flex items-center justify-center overflow-hidden">

                    <img
        src="{{ asset('images/logo.jpeg') }}"
        alt="SMKN 4 Bogor"
        class="w-10 h-10 rounded-full object-cover"
    >

                </div>

                <div>
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

                <svg class="w-6 h-6"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h4v-6h4v6h4a1 1 0 001-1V10"/>

                </svg>

                <span>Dashboard</span>

            </a>


            {{-- ARTIKEL --}}
            <a href="{{ route('admin.artikel.index') }}"
               class="flex items-center gap-4 px-4 py-3.5
                      rounded-lg hover:bg-white/10 font-semibold">

                <svg class="w-6 h-6"
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

                <span>Informasi / Artikel</span>

            </a>


            {{-- GALERI --}}
            <a href="{{ route('admin.galeri.index') }}"
               class="flex items-center gap-4 px-4 py-3.5
                      rounded-lg hover:bg-white/10 font-semibold">

                <svg class="w-6 h-6"
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

                <span>Galeri</span>

            </a>

        </nav>


        <div class="border-t border-white/20 mx-4 my-6"></div>


        {{-- MENU BAWAH --}}
        <nav class="px-4 space-y-2">

            {{-- PENGGUNA AKTIF --}}
            <a href="{{ route('admin.pengguna.index') }}"
               class="flex items-center gap-4 px-4 py-3.5
                      rounded-lg bg-[#2868C7] font-semibold">

                <svg class="w-6 h-6"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/>

                    <circle cx="9"
                            cy="7"
                            r="4"/>

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>

                </svg>

                <span>Pengguna</span>

            </a>


            {{-- KELUAR --}}
            <form method="POST" action="{{ route('logout') }}">

                @csrf

                <button
                    class="w-full flex items-center gap-4 px-4 py-3.5
                           rounded-lg hover:bg-white/10
                           font-semibold text-left">

                    <svg class="w-6 h-6"
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

                    <span>Keluar</span>

                </button>

            </form>

        </nav>

    </aside>


    {{-- CONTENT --}}
    <main class="flex-1 bg-white">

        <div class="px-8 pt-7">

            <a href="{{ route('admin.pengguna.index') }}"
               class="flex items-center gap-2
                      border border-gray-200
                      rounded-md
                      px-4 py-3
                      text-sm
                      font-semibold">

                ← Edit Pengguna

            </a>

            <div class="mt-2 text-[10px] text-gray-400">

                Dashboard / Pengguna / Edit Pengguna

            </div>

        </div>


        <div class="px-8 py-7">

            <form
                action="{{ route('admin.pengguna.update', $pengguna->id) }}"
                method="POST">

                @csrf
                @method('PUT')


                <div class="grid grid-cols-[1fr_330px] gap-8">

                    {{-- INFORMASI AKUN --}}
                    <div>

                        <h2 class="font-bold text-sm mb-5">
                            Informasi Akun
                        </h2>


                        <div class="mb-4">

                            <label class="block text-xs font-semibold mb-2">
                                Nama Lengkap
                            </label>

                            <input
                                type="text"
                                name="name"
                                value="{{ old('name', $pengguna->name) }}"
                                class="w-full border border-gray-200
                                       rounded-md px-4 py-2.5 text-xs"
                                required>

                        </div>


                        <div class="mb-4">

                            <label class="block text-xs font-semibold mb-2">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email', $pengguna->email) }}"
                                class="w-full border border-gray-200
                                       rounded-md px-4 py-2.5 text-xs"
                                required>

                        </div>


                        <div class="mb-4">

                            <label class="block text-xs font-semibold mb-2">
                                Password Baru
                            </label>

                            <input
                                type="password"
                                name="password"
                                placeholder="Kosongkan jika tidak ingin mengubah"
                                class="w-full border border-gray-200
                                       rounded-md px-4 py-2.5 text-xs">

                        </div>


                        <div>

                            <label class="block text-xs font-semibold mb-2">
                                Konfirmasi Password
                            </label>

                            <input
                                type="password"
                                name="password_confirmation"
                                placeholder="Konfirmasi password baru"
                                class="w-full border border-gray-200
                                       rounded-md px-4 py-2.5 text-xs">

                        </div>

                    </div>


                    {{-- DETAIL --}}
                    <div>

                        <div class="border border-gray-200 rounded-md p-5">

                            <h2 class="font-bold text-sm mb-5">
                                Detail Pengguna
                            </h2>


                            <label class="block text-xs font-semibold mb-2">
                                Peran
                            </label>

                            <select
    name="role"
    class="w-full border border-gray-200
           rounded-md px-3 py-2.5 text-xs mb-5">

    <option value="Super Admin"
    {{ old('role', $pengguna->role) == 'Super Admin' ? 'selected' : '' }}>
    Super Admin
</option>

    <option value="Admin"
        {{ old('role', $pengguna->role) == 'Admin' ? 'selected' : '' }}>
        Admin
    </option>

    <option value="User"
        {{ old('role', $pengguna->role) == 'User' ? 'selected' : '' }}>
        User
    </option>

</select>


                            <label class="block text-xs font-semibold mb-3">
                                Status
                            </label>

                            <div class="flex gap-5">

                                <label class="flex items-center gap-2 text-xs">

                                    <input
                                        type="radio"
                                        name="status"
                                        value="Aktif"
                                        {{ old('status', $pengguna->status) == 'Aktif' ? 'checked' : '' }}>

                                    Aktif

                                </label>


                                <label class="flex items-center gap-2 text-xs">

                                    <input
                                        type="radio"
                                        name="status"
                                        value="Nonaktif"
                                        {{ old('status', $pengguna->status) == 'Nonaktif' ? 'checked' : '' }}>

                                    Nonaktif

                                </label>

                            </div>

                        </div>

                    </div>

                </div>


                <div class="flex justify-end gap-3 mt-8">

                    <a
                        href="{{ route('admin.pengguna.index') }}"
                        class="border border-gray-300
                               px-5 py-2 rounded-md
                               text-xs">

                        Batal

                    </a>


                    <button
                        type="submit"
                        class="bg-[#FF8066]
                               text-white
                               px-5 py-2
                               rounded-md
                               text-xs
                               font-semibold">

                        Simpan Perubahan

                    </button>

                </div>

            </form>

        </div>

    </main>

</div>

@endsection