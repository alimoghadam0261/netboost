<?php

namespace App\Livewire\Home;

use Livewire\Component;

class About extends Component
{
    public string $title = 'درباره ما |About';
    public string $description = 'اطلاعاتی درباره تیم ما، اهداف و سابقه‌ی فعالیت‌ ما را اینجا بخوانید.Read information about our team, goals, and history here.';
    public function render()
    {
        return view('livewire.home.about')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description,
        ]);

    }
}
