<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\License;

class CheckLicense
{
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();

        if (!$user) {
            return redirect('/login_user');
        }

        // ✅ فحص تلقائي: تعطيل كل ترخيص منتهٍ لهذا المستخدم
        License::where('user_id', $user->id)
            ->where('status', true)
            ->whereNotNull('end_date')
            ->whereDate('end_date', '<', now())
            ->update(['status' => false]);

        return $next($request);
    }
}