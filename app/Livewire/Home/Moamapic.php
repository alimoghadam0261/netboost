<?php

namespace App\Livewire\Home;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Cache;

class Moamapic extends Component
{
    use WithPagination;

    public function render()
    {
        // دریافت شماره صفحه از درخواست (در صورت نبود صفحه، پیش‌فرض 1)
        $page = request()->query('page', 1);

        // کلید کش شامل دسته‌بندی و شماره صفحه
        $moamaCacheKey = 'moamapic_images_page_' . $page;

        // تلاش برای گرفتن داده‌ها از کش
        $moama = Cache::remember($moamaCacheKey, now()->addMinutes(30), function () {
            return \App\Models\Moamapic::paginate(30);
        });

        $count = \App\Models\Moamapic::count();

        return view('livewire.home.moamapic', compact('moama', 'count'))->title('معما تصویری|pic omen');
    }
}
