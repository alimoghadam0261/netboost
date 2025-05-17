<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Cta extends Component
{

    public function render()
    {
        $ctasfr = \App\Models\Cta::whereBetween('id', [1, 50])->pluck('content');
        $ctasen = \App\Models\Cta::whereBetween('id', [51, 100])->pluck('content');
        $count = \App\Models\Cta::count();
        return view('livewire.home.cta',compact('ctasen','ctasfr','count'))->title('CTA');
    }
}
