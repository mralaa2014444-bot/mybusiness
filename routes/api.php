<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\License;

Route::post('/check-license', function (Request $request) {

    $license = License::where(
        'license_key',
        $request->license_key
    )->first();

    if (!$license) {
        return response()->json([
            'valid' => false,
            'message' => 'License key not found'
        ]);
    }

    if (!$license->status) {
        return response()->json([
            'valid' => false,
            'message' => 'License disabled'
        ]);
    }

    if (
        $license->end_date &&
        \Carbon\Carbon::parse($license->end_date)->isPast()
    ) {
        return response()->json([
            'valid' => false,
            'message' => 'License expired'
        ]);
    }

    return response()->json([
        'valid' => true,
        'message' => 'License valid',
        'type' => $license->type
    ]);
});