<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // التأكد من تسجيل الدخول
        if (!auth()->check()) {
            return redirect('/login_admin');
        }

        // التأكد أن المستخدم Admin
        if (auth()->user()->role !== 'admin') {
            abort(403, 'غير مصرح لك بالدخول إلى لوحة الإدارة');
        }



return $next($request);
    }
}