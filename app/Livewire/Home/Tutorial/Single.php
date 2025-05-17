<?php

namespace App\Livewire\Home\Tutorial;

use App\Models\Tutorials;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Single extends Component
{
public $tutorials;
    public $relatedTutorials;

    public function mount($id)
    {
        $this->tutorials = Tutorials::find($id);

        // گرفتن 5 آموزش آخر از همان دسته‌بندی
        $this->relatedTutorials = Tutorials::where('category', $this->tutorials->category)
            ->where('id', '!=', $this->tutorials->id)  // آموزش فعلی را از نتایج حذف می‌کنیم
            ->latest()
            ->take(5)
            ->get();
    }


    public function render()
    {
        return view('livewire.home.tutorial.single')->title('توضیحات|content');
    }
}
