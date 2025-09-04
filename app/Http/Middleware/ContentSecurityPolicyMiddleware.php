<?php
// app/Http/Middleware/ContentSecurityPolicyMiddleware.php

namespace App\Http\Middleware;

use Closure;

class ContentSecurityPolicyMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $csp = "default-src 'self'; "
            . "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://connect.facebook.net https://widget.kominfo.go.id https://widget.komdigi.go.id https://website-widgets.pages.dev http://kotabogor.go.id https://kotabogor.go.id  https://www.googletagmanager.com https://cdn.jsdelivr.net; "
            . "style-src 'self' 'unsafe-inline' 'unsafe-eval' https://fonts.googleapis.com http://kotabogor.go.id https://kotabogor.go.id https://cdn.jsdelivr.net; "
            . "img-src 'self' data: https: https://adm.kotabogor.go.id http://adm.kotabogor.go.id http://kotabogor.go.id https://kotabogor.go.id; "
            . "font-src 'self' https://fonts.gstatic.com data:; "
            . "connect-src 'self' https://widget.komdigi.go.id https://www.google-analytics.com https://web.animemusic.us; "
            . "frame-src https://www.facebook.com https://ispu.menlhk.go.id http://www.google.com https://adm.kotabogor.go.id; "
            . "object-src 'none';";

        $response->headers->set('Content-Security-Policy', $csp);

        return $response;
    }
}
