@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-[#f4f5f7]">

    <div class="p-6 lg:p-8">

        {{-- HEADER --}}
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">
                Komentar Pengunjung
            </h1>

            <p class="text-sm text-gray-500 mt-1">
                Lihat penilaian dan komentar dari pengunjung website.
            </p>
        </div>


        {{-- NOTIFIKASI BERHASIL --}}
        @if (session('success'))

            <div class="mb-5 bg-green-50 border border-green-200
                        text-green-700 px-4 py-3 rounded-xl text-sm">

                {{ session('success') }}

            </div>

        @endif


        {{-- DAFTAR KOMENTAR --}}
        <div class="space-y-4">

            @forelse ($komentars as $komentar)

                <div class="bg-white border border-gray-200
                            rounded-xl shadow-sm p-5">

                    {{-- NAMA + TANGGAL --}}
                    <div class="flex items-start justify-between gap-4">

                        <div>

                            <h3 class="font-semibold text-gray-800">
                                {{ $komentar->nama }}
                            </h3>

                            {{-- RATING --}}
                            <div class="flex items-center mt-1">

                                @for ($i = 1; $i <= 5; $i++)

                                    @if ($i <= $komentar->rating)

                                        <span class="text-yellow-400 text-lg">
                                            ★
                                        </span>

                                    @else

                                        <span class="text-gray-300 text-lg">
                                            ★
                                        </span>

                                    @endif

                                @endfor

                            </div>

                        </div>


                        {{-- TANGGAL --}}
                        <span class="text-xs text-gray-400">
                            {{ $komentar->created_at->format('d/m/Y') }}
                        </span>

                    </div>


                    {{-- KOMENTAR + TOMBOL HAPUS --}}
                    <div class="mt-4 flex items-start justify-between gap-5">

                        <p class="text-sm text-gray-600 leading-relaxed flex-1">
                            {{ $komentar->komentar }}
                        </p>


                        {{-- HAPUS --}}
                        <form
                            action="{{ route('admin.pesan.destroy', $komentar->id) }}"
                            method="POST"
                            onsubmit="return confirm('Yakin ingin menghapus komentar ini?')"
                        >

                            @csrf

                            @method('DELETE')

                            <button
                                type="submit"
                                class="text-sm text-red-500
                                       hover:text-red-700
                                       font-medium
                                       transition
                                       whitespace-nowrap"
                            >
                                Hapus
                            </button>

                        </form>

                    </div>

                </div>

            @empty

                <div class="bg-white border border-gray-200
                            rounded-xl p-10 text-center">

                    <p class="text-sm text-gray-400">
                        Belum ada komentar dari pengunjung.
                    </p>

                </div>

            @endforelse

        </div>

    </div>

</div>

@endsection