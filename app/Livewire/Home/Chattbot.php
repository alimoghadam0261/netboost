<?php

namespace App\Livewire\Home;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Chattbot extends Component
{

 public string $message = '';
    public array $chat = [];

    public function send()
    {
        if (trim($this->message) === '') return;

        $userMessage = $this->message;
        $this->chat[] = ['from' => 'user', 'text' => $userMessage];
        $this->message = '';

        $response = Http::post('https://test.ariyabodmenu.ir/workflow/chatbot', [
            'message' => $userMessage,
        ]);

        $botReply = $response->json('output') ?? 'پاسخی دریافت نشد.';

        $this->chat[] = ['from' => 'bot', 'text' => $botReply];
    }



    public function render()
    {
        return view('livewire.home.chattbot');
    }
}
