<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitor
{
    public function handle(Request $request, Closure $next): Response
    {
        // Jalankan halaman
        $response = $next($request);

        if (
            !$request->is('admin/*') &&
            !$request->is('login') &&
            !$request->is('register') &&
            !$request->ajax()
        ) {

            $tanggal = now()->toDateString();

            $sessionId = $request->hasSession()
                ? $request->session()->getId()
                : null;

            $sudahAda = Visitor::where('tanggal', $tanggal)
                ->where('session_id', $sessionId)
                ->exists();

            if (!$sudahAda) {

                Visitor::create([
                    'tanggal'    => $tanggal,
                    'session_id' => $sessionId,
                    'ip_address' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                    'url'        => $request->fullUrl(),
                ]);

            }
        }

        return $response;
    }
}