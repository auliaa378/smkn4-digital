<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'SMKN 4 Bogor Digital') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-white">

    {{-- Navbar hanya untuk halaman USER --}}
    @if (!request()->is('admin/*'))
    @include('layouts.navigation')
@endif

    <!-- Content -->
    <main>
        @yield('content')

        @if (!request()->is('admin/*'))

<footer class="bg-[#173F7A] mt-16">

    {{-- ================= BAGIAN ATAS ================= --}}
    <div class="max-w-7xl mx-auto px-8 py-10">

        <div class="grid grid-cols-2 gap-10 items-center">

            {{-- ================= KIRI ================= --}}
            <div>

                <div class="flex items-center gap-3">

                    <img
                        src="{{ asset('images/logo.jpg') }}"
                        class="w-12 h-12 rounded-full"
                    >

                    <div>

                        <h2 class="text-white font-bold text-xl">
                            SMKN 4 BOGOR
                        </h2>

                        <p class="text-blue-100 text-sm mt-1 leading-5">
                            Membentuk generasi unggul berkarakter,<br>
                            dan siap menghadapi dunia kerja.
                        </p>

                    </div>

                </div>

            </div>


            {{-- ================= IKUTI KAMI ================= --}}
            <div class="ml-10">

                <h3 class="text-white font-semibold mb-5">
                    Ikuti Kami
                </h3>

                <div class="flex items-center gap-5 text-white text-2xl">

                    <!-- Facebook -->
                    <a href="https://web.facebook.com/p/SMK-NEGERI-4-KOTA-BOGOR-100054636630766/?locale=id_ID&_rdc=1&_rdr#"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="hover:text-blue-300 transition">
                        <i class="fa-brands fa-facebook"></i>
                    </a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/smkn4kotabogor?utm_source=ig_web_button_share_sheet&igsi=ZDNlZDc0MzIxNw=="
                       target="_blank"
                       rel="noopener noreferrer"
                       class="hover:text-blue-300 transition">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <!-- YouTube -->
                    <a href="https://www.youtube.com/@smknegeri4bogor905"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="hover:text-blue-300 transition">
                        <i class="fa-brands fa-youtube"></i>
                    </a>

                    <!-- Email -->
                    <a href="mailto:smkn4@smkn4bogor.sch.id"
                       class="hover:text-blue-300 transition">
                        <i class="fa-regular fa-envelope"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>


    {{-- ================= GARIS ================= --}}
    <hr class="border-blue-300/40">


    {{-- ================= BAGIAN BAWAH ================= --}}
    <div class="max-w-7xl mx-auto px-8 py-4">

        <div class="flex items-center text-blue-100 text-sm">

            {{-- Copyright --}}
            <div class="w-1/2">
                <p>
                    Copyright © 2026 SMKN 4 Bogor
                </p>
            </div>


            {{-- Garis Tengah --}}
            <div class="h-5 border-l border-blue-300/50"></div>


            {{-- Designed By --}}
            <div class="w-1/2 text-center">
                <p>
                    Designed by Aulia Juliana
                </p>
            </div>

        </div>

    </div>

</footer>

@endif
    </main>

</body>

</html>