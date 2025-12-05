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

        // --- BASIC SECURITY HEADERS ---
        $response->headers->set('Strict-Transport-Security', 'max-age=63072000; includeSubDomains; preload');
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-Frame-Options', 'DENY');
        $response->headers->set('Permissions-Policy', 'geolocation=(), microphone=(), camera=()');

        // --- CONTENT SECURITY POLICY ---
        $response->headers->set(
            'Content-Security-Policy',
            "default-src 'self'; " .

                // Images (logo, CDN, GAnalytics, Tawk.to)
                "img-src 'self' data: https: blob:; " .

                // Scripts allowed
                "script-src 'self' " .
                "https://www.googletagmanager.com " .
                "https://www.google-analytics.com " .
                "https://embed.tawk.to " .
                "'unsafe-inline' 'unsafe-eval'; " .

                // Styles
                "style-src 'self' https://fonts.googleapis.com 'unsafe-inline'; " .

                // Fonts
                "font-src 'self' https://fonts.gstatic.com data:; " .

                // AJAX / fetch
                "connect-src 'self' https://www.google-analytics.com https://tawk.to https://embed.tawk.to; " .

                // Frames (Tawk.to chat widget)
                "frame-src https://embed.tawk.to https://tawk.to; " .

                // Media
                "media-src 'self' https: data:; " .

                // Allow GTM/GSC
                "object-src 'none'; " .
                "base-uri 'self'; "
        );

        return $response;
    }
}
