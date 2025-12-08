<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // BASIC SECURITY
        $response->headers->set('Strict-Transport-Security', 'max-age=63072000; includeSubDomains; preload');
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-Frame-Options', 'DENY');
        $response->headers->set('Permissions-Policy', 'geolocation=(), microphone=(), camera=()');

        // ============================
        //     CONTENT SECURITY POLICY
        // ============================
        // 👉 CSP Paling Sederhana & Tidak Memblokir Asset Apapun
        $response->headers->set(
            'Content-Security-Policy',
            "default-src * 'self' data: blob: 'unsafe-inline' 'unsafe-eval';"
        );

        return $response;
    }
}
