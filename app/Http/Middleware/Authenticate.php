<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request): ?string
    {
        // Buat semua request yang tidak autentikasi mengembalikan JSON langsung
        if (! $request->expectsJson()) {
            // HAPUS return route('login');
            abort(response()->json(['message' => 'Unauthenticated.'], 401));
        }

        abort(response()->json(['message' => 'Unauthenticated.'], 401));
    }
}