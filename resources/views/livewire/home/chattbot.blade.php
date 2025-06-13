<div class="w-full max-w-md mx-auto p-4 bg-white rounded-xl shadow-md"
     x-data="{ scrollToBottom() { $nextTick(() => { $refs.chat.scrollTop = $refs.chat.scrollHeight }) }"
     x-init="scrollToBottom()"
     @message-sent.window="scrollToBottom()"
>
    <div class="h-80 overflow-y-auto border rounded p-2 space-y-2" x-ref="chat">
        @foreach ($chat as $msg)
            <div class="p-2 rounded {{ $msg['from'] === 'user' ? 'bg-blue-100 text-right' : 'bg-gray-100 text-left' }}">
                {{ $msg['text'] }}
            </div>
        @endforeach
    </div>

    <div class="mt-4 flex gap-2">
        <input type="text" wire:model="message" wire:keydown.enter="send"
               class="flex-1 border rounded px-3 py-2" placeholder="پیام خود را بنویسید..." />
        <button wire:click="send" class="bg-blue-500 text-white px-4 py-2 rounded">ارسال</button>
    </div>
</div>

