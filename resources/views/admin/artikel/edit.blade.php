@extends('layouts.admin')

@section('content')

<div class="flex min-h-screen">

    <aside class="w-[270px] bg-[#173F7A] text-white flex-shrink-0 hidden lg:flex flex-col">

        {{-- LOGO --}}
        <div class="px-6 py-7">

            <div class="flex items-center gap-4">

                <div class="w-16 h-16 bg-[#FFF4D6] rounded-full
                            flex items-center justify-center overflow-hidden">

                    <img
                        src="{{ asset('images/logo.jpeg') }}"
                        class="w-12 h-12 object-contain"
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


        {{-- MENU --}}
        <nav class="px-4 space-y-2">

            {{-- DASHBOARD --}}
            <a
                href="{{ route('admin.dashboard') }}"
                class="flex items-center gap-4 px-4 py-3.5
                       rounded-lg hover:bg-white/10 font-semibold"
            >

                <svg
                    class="w-6 h-6"
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

                <span>Dashboard</span>

            </a>


            {{-- ARTIKEL AKTIF --}}
            <a
                href="{{ route('admin.artikel.index') }}"
                class="flex items-center gap-4 px-4 py-3.5
                       rounded-lg bg-[#2868C7] font-semibold"
            >

                <svg
                    class="w-6 h-6"
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

                <span>Informasi / Artikel</span>

            </a>


            {{-- GALERI --}}
            <a
                href="{{ route('admin.galeri.index') }}"
                class="flex items-center gap-4 px-4 py-3.5
                       rounded-lg hover:bg-white/10 font-semibold"
            >

                <svg
                    class="w-6 h-6"
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

                <span>Galeri</span>

            </a>

        </nav>


        <div class="border-t border-white/20 mx-4 my-6"></div>


        {{-- MENU BAWAH --}}
        <nav class="px-4 space-y-2">

            {{-- PENGGUNA --}}
            <a
                href="{{ route('admin.pengguna.index') }}"
                class="flex items-center gap-4 px-4 py-3.5
                       rounded-lg hover:bg-white/10 font-semibold"
            >

                <svg
                    class="w-6 h-6"
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

                <span>Pengguna</span>

            </a>


            {{-- KELUAR --}}
            <form
                method="POST"
                action="{{ route('logout') }}"
            >

                @csrf

                <button
                    type="submit"
                    class="w-full flex items-center gap-4 px-4 py-3.5
                           rounded-lg hover:bg-white/10
                           font-semibold text-left"
                >

                    <svg
                        class="w-6 h-6"
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

                    <span>Keluar</span>

                </button>

            </form>

        </nav>

    </aside>

    <main class="flex-1 min-w-0 bg-[#F8FAFC]">

        <div class="px-8 py-8">

            {{-- HEADER --}}
            <div class="mb-7">

                {{-- BREADCRUMB --}}
                <div class="flex items-center gap-2 text-xs text-gray-400 mb-3">

                    <a
                        href="{{ route('admin.dashboard') }}"
                        class="hover:text-[#173F7A] transition"
                    >
                        Dashboard
                    </a>

                    <span>/</span>

                    <a
                        href="{{ route('admin.artikel.index') }}"
                        class="hover:text-[#173F7A] transition"
                    >
                        Artikel
                    </a>

                    <span>/</span>

                    <span class="text-gray-500">
                        Edit Artikel
                    </span>

                </div>

            </div>


            {{-- FORM --}}
            <form
                action="{{ route('admin.artikel.update', $artikel->id) }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf
                @method('PUT')


                <div class="bg-white border border-gray-200 rounded-xl p-7">

                    <div class="grid grid-cols-1 lg:grid-cols-[minmax(0,1fr)_240px] gap-8">

                        <div>

                            {{-- JUDUL --}}
                            <div class="mb-5">

                                <label
                                    class="block text-sm font-semibold text-gray-900 mb-2"
                                >
                                    Judul
                                </label>

                                <input
                                    type="text"
                                    name="judul"
                                    value="{{ old('judul', $artikel->judul) }}"
                                    placeholder="Tulis Judul Artikel..."
                                    class="w-full h-12 px-4
                                           border border-gray-300
                                           rounded-md
                                           text-sm
                                           focus:outline-none
                                           focus:ring-2
                                           focus:ring-blue-500
                                           focus:border-blue-500"
                                >

                                @error('judul')
                                    <p class="text-xs text-red-500 mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>


                            {{-- KATEGORI --}}
                            <div class="mb-5">

                                <label
                                    class="block text-sm font-semibold text-gray-900 mb-2"
                                >
                                    Kategori
                                </label>

                                <select
                                    name="kategori"
                                    class="w-full h-12 px-4
                                           border border-gray-300
                                           rounded-md
                                           text-sm text-gray-600
                                           focus:outline-none
                                           focus:ring-2
                                           focus:ring-blue-500
                                           focus:border-blue-500"
                                >

                                    <option value="">
                                        Pilih Kategori
                                    </option>

                                    <option
                                        value="Prestasi"
                                        {{ old('kategori', $artikel->kategori) == 'Prestasi' ? 'selected' : '' }}
                                    >
                                        Prestasi
                                    </option>

                                    <option
                                        value="Berita"
                                        {{ old('kategori', $artikel->kategori) == 'Berita' ? 'selected' : '' }}
                                    >
                                        Berita
                                    </option>

                                    <option
                                        value="Kegiatan"
                                        {{ old('kategori', $artikel->kategori) == 'Kegiatan' ? 'selected' : '' }}
                                    >
                                        Kegiatan
                                    </option>

                                </select>

                            </div>


                            {{-- TANGGAL --}}
                            <div class="mb-5">

                                <label
                                    class="block text-sm font-semibold text-gray-900 mb-2"
                                >
                                    Tanggal
                                </label>

                                <input
                                    type="date"
                                    name="tanggal"
                                    value="{{ old('tanggal', $artikel->tanggal) }}"
                                    class="w-full h-12 px-4
                                           border border-gray-300
                                           rounded-md
                                           text-sm
                                           focus:outline-none
                                           focus:ring-2
                                           focus:ring-blue-500
                                           focus:border-blue-500"
                                >

                            </div>


                            {{-- DESKRIPSI --}}
                            <div>

                                <label
                                    class="block text-sm font-semibold text-gray-900 mb-2"
                                >
                                    Deskripsi
                                </label>

                                <textarea
                                    name="deskripsi"
                                    rows="10"
                                    placeholder="Tulis deskripsi artikel disini..."
                                    class="w-full px-4 py-4
                                           border border-gray-300
                                           rounded-md
                                           text-sm
                                           resize-none
                                           focus:outline-none
                                           focus:ring-2
                                           focus:ring-blue-500
                                           focus:border-blue-500"
                                >{{ old('deskripsi', $artikel->deskripsi) }}</textarea>

                            </div>

                        </div>

                        <div>

                            <label
                                class="block text-sm font-semibold text-gray-900 mb-2"
                            >
                                Gambar Utama
                            </label>


                            {{-- GAMBAR LAMA --}}
                            @if($artikel->gambar)

                                <div class="mb-4">

                                    <img
                                        src="{{ asset('storage/artikel/' . $artikel->gambar) }}"
                                        class="w-full h-[150px]
                                               object-cover
                                               rounded-md
                                               border border-gray-300"
                                    >

                                    <p class="text-[10px] text-gray-400 mt-2">
                                        Gambar saat ini
                                    </p>

                                </div>

                            @endif


                            {{-- UPLOAD GAMBAR BARU --}}
                            <label
                                for="gambar"
                                class="h-[150px]
                                       border border-dashed border-gray-300
                                       rounded-md
                                       flex flex-col
                                       items-center
                                       justify-center
                                       cursor-pointer
                                       hover:bg-gray-50
                                       transition"
                            >

                                <svg
                                    class="w-9 h-9 text-gray-400 mb-2"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    viewBox="0 0 24 24"
                                >

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M6 3h9l4 4v14H6a2 2 0 01-2-2V5a2 2 0 012-2z"
                                    />

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M14 3v5h5"
                                    />

                                </svg>

                                <span class="text-xs text-gray-500 text-center px-3">
                                    Klik untuk mengganti gambar
                                </span>

                            </label>


                            <input
                                id="gambar"
                                type="file"
                                name="gambar"
                                accept="image/png,image/jpeg,image/jpg"
                                class="hidden"
                            >


                            <p class="text-[10px] text-gray-400 mt-2">
                                Format: JPG, PNG, JPEG
                            </p>

                        </div>

                    </div>

                    <div class="flex justify-end gap-3 mt-8 pt-6 border-t border-gray-100">

                        <a
                            href="{{ route('admin.artikel.index') }}"
                            class="px-6 py-2.5
                                   border border-gray-300
                                   rounded-md
                                   text-sm
                                   text-gray-700
                                   hover:bg-gray-50
                                   transition"
                        >
                            Batal
                        </a>

                        <button
                            type="submit"
                            class="px-7 py-2.5
                                   bg-[#FF8066]
                                   hover:bg-[#ff7055]
                                   text-white
                                   rounded-md
                                   text-sm
                                   font-semibold
                                   transition"
                        >
                            Simpan Perubahan
                        </button>

                    </div>

                </div>

            </form>

        </div>

    </main>

</div>

@endsection