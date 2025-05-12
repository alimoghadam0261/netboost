<?php

namespace App\Livewire\Home;

use Livewire\Component;
use Illuminate\Support\Facades\File;

class Proxy extends Component
{
    public $proxies = [];

    public function mount()
    {
        $filePath = base_path('keywords/proxy.json');

        if (File::exists($filePath)) {
            $jsonData = json_decode(File::get($filePath), true);
            $this->proxies = $jsonData['proxies'] ?? [];
        }
    }

    public function render()
    {
        return view('livewire.home.proxy');
    }
}
