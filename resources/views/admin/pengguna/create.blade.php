@extends('layouts.admin')

@section('content')

    {{-- CONTENT --}}
    <main class="flex-1 bg-white">

{{-- HEADER --}}
<div class="bg-white border border-gray-200 rounded-md px-4 py-2.5 mb-5">

    <div class="flex items-center gap-2">

        {{-- BACK --}}
        <a href="{{ route('admin.pengguna.index') }}"
           class="text-black hover:text-[#173F7A] transition">

            <svg class="w-5 h-5"
                 fill="none"
                 stroke="currentColor"
                 stroke-width="2"
                 viewBox="0 0 24 24">

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19 12H5"/>

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M12 19l-7-7 7-7"/>

            </svg>

        </a>

        <div>

            {{-- JUDUL --}}
            <h1 class="text-sm font-bold text-gray-900">
                Tambah Pengguna
            </h1>

            {{-- BREADCRUMB --}}
            <p class="text-[9px] text-gray-400 mt-0.5">

                <a href="{{ route('admin.dashboard') }}"
                   class="hover:text-[#173F7A] transition">
                    Dashboard
                </a>

                <span class="mx-1">/</span>

                <a href="{{ route('admin.pengguna.index') }}"
                   class="hover:text-[#173F7A] transition">
                    Pengguna
                </a>

                <span class="mx-1">/</span>

                <span>
                    Tambah Pengguna
                </span>

            </p>

        </div>

    </div>

</div>


        {{-- FORM --}}
        <div class="px-8 py-7">

            <form
                action="{{ route('admin.pengguna.store') }}"
                method="POST">

                @csrf

                <div class="grid grid-cols-[1fr_330px] gap-8">


                    {{-- INFORMASI AKUN --}}
                    <div>

                        <h2 class="font-bold text-sm text-gray-800 mb-5">
                            Informasi Akun
                        </h2>


                        {{-- NAMA --}}
                        <div class="mb-4">

                            <label class="block text-xs font-semibold mb-2">
                                Nama Lengkap
                            </label>

                            <input
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                placeholder="Masukkan nama lengkap"
                                class="w-full border border-gray-200
                                       rounded-md px-4 py-2.5
                                       text-xs
                                       focus:outline-none
                                       focus:ring-1
                                       focus:ring-blue-400"
                                required
                            >

                            @error('name')
                                <p class="text-red-500 text-[10px] mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- EMAIL --}}
                        <div class="mb-4">

                            <label class="block text-xs font-semibold mb-2">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Masukkan email"
                                class="w-full border border-gray-200
                                       rounded-md px-4 py-2.5
                                       text-xs
                                       focus:outline-none
                                       focus:ring-1
                                       focus:ring-blue-400"
                                required
                            >

                            @error('email')
                                <p class="text-red-500 text-[10px] mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- PASSWORD --}}
                        <div class="mb-4">

                            <label class="block text-xs font-semibold mb-2">
                                Password
                            </label>

                            <input
                                type="password"
                                name="password"
                                placeholder="Masukkan password"
                                class="w-full border border-gray-200
                                       rounded-md px-4 py-2.5
                                       text-xs
                                       focus:outline-none
                                       focus:ring-1
                                       focus:ring-blue-400"
                                required
                            >

                        </div>


                        {{-- CONFIRM PASSWORD --}}
                        <div>

                            <label class="block text-xs font-semibold mb-2">
                                Konfirmasi Password
                            </label>

                            <input
                                type="password"
                                name="password_confirmation"
                                placeholder="Konfirmasi password"
                                class="w-full border border-gray-200
                                       rounded-md px-4 py-2.5
                                       text-xs
                                       focus:outline-none
                                       focus:ring-1
                                       focus:ring-blue-400"
                                required
                            >

                        </div>

                    </div>


                    {{-- DETAIL PENGGUNA --}}
                    <div>

                        <div class="border border-gray-200 rounded-md p-5">

                            <h2 class="font-bold text-sm text-gray-800 mb-5">
                                Detail Pengguna
                            </h2>


                            {{-- ROLE --}}
                            <label class="block text-xs font-semibold mb-2">
                                Peran
                            </label>

                            <select
                                name="role"
                                class="w-full border border-gray-200
                                       rounded-md px-3 py-2.5
                                       text-xs mb-3">

                                <option value="">
                                    Pilih Peran
                                </option>

                                <option value="Admin"
                                    {{ old('role') == 'Admin' ? 'selected' : '' }}>
                                    Admin
                                </option>

                                <option value="User"
                                    {{ old('role') == 'User' ? 'selected' : '' }}>
                                    User
                                </option>

                            </select>


                            <p class="text-[10px] text-gray-500 mb-5">
                                Tentukan level akses pengguna
                            </p>


                            {{-- STATUS --}}
                            <label class="block text-xs font-semibold mb-3">
                                Status
                            </label>

                            <div class="flex items-center gap-5">

                                <label class="flex items-center gap-2 text-xs">

                                    <input
                                        type="radio"
                                        name="status"
                                        value="Aktif"
                                        checked>

                                    Aktif

                                </label>


                                <label class="flex items-center gap-2 text-xs">

                                    <input
                                        type="radio"
                                        name="status"
                                        value="Nonaktif">

                                    Nonaktif

                                </label>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- BUTTON --}}
                <div class="flex justify-end gap-3 mt-8">

                    <a
                        href="{{ route('admin.pengguna.index') }}"
                        class="border border-gray-300
                               px-5 py-2
                               rounded-md
                               text-xs
                               text-gray-600">

                        Batal

                    </a>


                    <button
                        type="submit"
                        class="bg-[#FF8066]
                               hover:bg-[#ff6f52]
                               text-white
                               px-5 py-2
                               rounded-md
                               text-xs
                               font-semibold">

                        Simpan Pengguna

                    </button>

                </div>

            </form>

        </div>

    </main>

</div>

@endsection