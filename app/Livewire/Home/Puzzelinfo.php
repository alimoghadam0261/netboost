<?php

namespace App\Livewire\Home;

use App\Models\Puzzel;
use Livewire\Component;

class Puzzelinfo extends Component
{
    public $question = '';
    public $answer = '';


    public function submit()
    {
        // گرفتن ردیف به صورت رندم
        $puzzel = Puzzel::inRandomOrder()->first();

        // تنظیم داده‌ها برای نمایش
        $this->question = $puzzel->question;
        $this->answer = $puzzel->answer;

    }




    public function render()
    {
        return view('livewire.home.puzzelinfo')->title('معما|omen');
    }
}
