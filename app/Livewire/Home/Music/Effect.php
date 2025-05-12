<?php


namespace App\Livewire\Home\Music;

use App\Models\Sound;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Cache;

class Effect extends Component
{
    use WithPagination;

    public function render()
    {
        // دریافت شماره صفحه از درخواست (در صورت نبود صفحه، پیش‌فرض 1)
        $page = request()->query('page', 1);

        // کلید کش شامل دسته‌بندی و شماره صفحه
        $soundsCacheKey = 'sounds_effects_page_' . $page;

        // تلاش برای گرفتن داده‌ها از کش
        $sounds = Cache::remember($soundsCacheKey, now()->addMinutes(30), function () {
            return Sound::where('category', 'soundEffect')->paginate(30);
        });

        return view('livewire.home.music.effect', compact('sounds'));
    }
}
