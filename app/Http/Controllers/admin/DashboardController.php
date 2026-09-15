<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Galeri;
use App\Models\User;
use App\Models\Visitor;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | TOTAL DATA
        |--------------------------------------------------------------------------
        */

        $totalPengguna = User::count();

        $totalArtikel = Artikel::count();

        $totalGaleri = Galeri::count();


        /*
        |--------------------------------------------------------------------------
        | PENGUNJUNG 30 HARI TERAKHIR
        |--------------------------------------------------------------------------
        */

        $tanggalMulai = Carbon::today()->subDays(29);
        $tanggalAkhir = Carbon::today();

        $visitorData = Visitor::whereBetween(
            'tanggal',
            [
                $tanggalMulai->toDateString(),
                $tanggalAkhir->toDateString()
            ]
        )
        ->orderBy('tanggal')
        ->get();


        /*
        |--------------------------------------------------------------------------
        | TOTAL PENGUNJUNG 30 HARI
        |--------------------------------------------------------------------------
        */

        $totalPengunjung = $visitorData->sum('jumlah');


        /*
        |--------------------------------------------------------------------------
        | PENGUNJUNG HARI INI
        |--------------------------------------------------------------------------
        */

        $pengunjungHariIni = Visitor::where(
            'tanggal',
            Carbon::today()->toDateString()
        )->value('jumlah') ?? 0;


        /*
        |--------------------------------------------------------------------------
        | DATA GRAFIK 30 HARI
        |--------------------------------------------------------------------------
        */

        $grafikPengunjung = [];

        for ($i = 29; $i >= 0; $i--) {

            $tanggal = Carbon::today()->subDays($i);

            $data = $visitorData->firstWhere(
                'tanggal',
                $tanggal->toDateString()
            );

            $grafikPengunjung[] = [
                'tanggal' => $tanggal->format('d M'),
                'jumlah' => $data ? $data->jumlah : 0,
            ];
        }


        /*
        |--------------------------------------------------------------------------
        | AKTIVITAS TERBARU
        |--------------------------------------------------------------------------
        */

        $artikelTerbaru = Artikel::latest()
            ->take(5)
            ->get()
            ->map(function ($artikel) {

                return [
                    'jenis' => 'Artikel',
                    'judul' => $artikel->judul,
                    'tanggal' => $artikel->created_at,
                ];

            });


        $galeriTerbaru = Galeri::latest()
            ->take(5)
            ->get()
            ->map(function ($galeri) {

                return [
                    'jenis' => 'Galeri',
                    'judul' => $galeri->judul,
                    'tanggal' => $galeri->created_at,
                ];

            });


        $aktivitas = $artikelTerbaru
            ->concat($galeriTerbaru)
            ->sortByDesc('tanggal')
            ->take(5);


        return view('admin.dashboard', compact(
            'totalPengguna',
            'totalArtikel',
            'totalGaleri',
            'totalPengunjung',
            'pengunjungHariIni',
            'grafikPengunjung',
            'aktivitas'
        ));
    }
}