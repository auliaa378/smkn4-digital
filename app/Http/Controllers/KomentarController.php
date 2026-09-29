<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'rating' => 'required|integer|min:1|max:5',
        'komentar' => 'required|string',
    ]);

    Komentar::create([
        'nama' => $request->nama,
        'rating' => $request->rating,
        'komentar' => $request->komentar,
        'dibaca' => false,
    ]);

    return back()->with(
        'success',
        'Terima kasih! Penilaian dan komentar kamu berhasil dikirim.'
    );
}
}