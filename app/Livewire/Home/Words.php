<?php

namespace App\Livewire\Home;

use Livewire\Component;
use Livewire\WithPagination;

class Words extends Component
{
    use WithPagination;
    public function render()
    {
        $wodOfHuman = \App\Models\Word::paginate(30);
        $count = \App\Models\Word::count();


        return view('livewire.home.words',compact('wodOfHuman','count'))->title('سخنان|words');
    }
}
