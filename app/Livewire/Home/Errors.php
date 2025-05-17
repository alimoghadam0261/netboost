<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Errors extends Component
{

    public function render()
    {
        return view('livewire.home.errors')->layouts('layout.app')->title('404');
    }
}
