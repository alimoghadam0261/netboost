<?php

namespace App\Livewire\Home;

use App\Models\Faal;
use Livewire\Component;

class Omen extends Component
{
    public $Poem = '';
    public $Interpretation = '';
    public function faal()
    {
        // گرفتن ردیف به صورت رندم
        $omen = Faal::inRandomOrder()->first();

        // تنظیم داده‌ها برای نمایش
        $this->Poem = $omen->Poem;
        $this->Interpretation = $omen->Interpretation;

    }
    public function render()
    {
        return view('livewire.home.omen');
    }
}
