<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TrendGoogleController extends Controller
{
    /**
     * این متد را n8n (یا هر کلاینت دیگری) صدا می‌زند تا لیست ترندها را به صورت JSON بگیرد.
     */
    public function index(Request $request)
    {
        // مسیر فایل JSON که در کامپوننت Livewire به آن مراجعه شده:
        $filePath = base_path('keywords/trends_data.json');

        // اگر فایل وجود نداشت، خطایی بدهیم:
        if (! File::exists($filePath)) {
            return response()->json([
                'success' => false,
                'message' => 'فایل ترندها پیدا نشد.',
            ], 404);
        }

        // خواندن محتویات فایل و تبدیل از JSON به آرایه
        $rawJson = file_get_contents($filePath);
        $decoded = json_decode($rawJson, true);

        // اگر ساختار فایل با انتظارات ما متفاوت باشد، خطا بدهیم
        if (! is_array($decoded) || ! array_key_exists('rows', $decoded)) {
            return response()->json([
                'success' => false,
                'message' => 'ساختار فایل JSON اشتباه است.',
            ], 500);
        }

        // آرایهٔ ترندها در کلید 'rows' ذخیره شده (همان چیزی که در کامپوننت Livewire برای $trends استفاده می‌شد)
        $trends = $decoded['rows'];

        // در نهایت پاسخ را برگردانیم
        return response()->json([
            'success' => true,
            'data'    => $trends,
        ]);
    }
}
