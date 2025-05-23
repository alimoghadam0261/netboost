<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Tempaltestory;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Cache;

class Templateinsta extends Component
{
    use WithPagination;
    public string $title = 'تم کاور|template';
    public string $description="تم و کاورهای رایگان برای استفاده در شبکه های اجتماعی|Free themes and covers for use on social networks";

    public $selectedImage = null;

    public function selectImage($image)
    {
        $this->selectedImage = $image;
    }

    public function closeModal()
    {
        $this->selectedImage = null;
    }

    public function download($filePath)
    {
        $path = storage_path('app/public/' . $filePath);

        if (file_exists($path)) {
            return response()->download($path);
        }

        abort(404);
    }

    public function render()
    {
        // دریافت شماره صفحه از درخواست (در صورت نبود صفحه، پیش‌فرض 1)
        $page = request()->query('page', 1);

        // کلید کش شامل دسته‌بندی و شماره صفحه
        $imagesCacheKey = 'templateinsta_images_page_' . $page;

        // تلاش برای گرفتن داده‌ها از کش
        $images = Cache::remember($imagesCacheKey, now()->addMinutes(30), function () {
            return Tempaltestory::latest()->paginate(32);
        });

        $count = Tempaltestory::count();

        return view('livewire.home.templateinsta', compact('images', 'count'))
            ->layout('components.layouts.app', [
                'title' => $this->title,
                'description' => $this->description,
            ]);

    }
}
