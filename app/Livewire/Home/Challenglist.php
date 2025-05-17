<?php


namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Challeng;
use App\Models\Challengcat;

class Challenglist extends Component
{
    public $category;
    public $challengs = [];
    public $categories = [];

    public function mount()
    {
// دریافت لیست دسته‌بندی‌ها
        $this->categories = Challengcat::all();
    }

// وقتی دکمه کلیک شد، چالش‌ها بر اساس دسته‌بندی انتخابی نمایش داده می‌شود
    public function loadChallengs()
    {
        if ($this->category) {
            $this->challengs = Challeng::where('challengcat_id', $this->category)->get();
        } else {
            $this->challengs = [];
        }
    }

    public function render()
    {
        return view('livewire.home.challenglist')->title('چالش ها|chaleng');
    }
}
