<?php

namespace App\Livewire\Home;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Terendgoogle extends Component
{

    public $trends = [];

    public $url;
    public $progress = 0;
    public $isDownloading = false;
    public $error;

    protected $rules = [
        'url' => 'required|url',
    ];





    public function mount()
    {
        // مسیر فایل JSON
        $filePath = base_path('keywords/trends_data.json');

        // بررسی وجود فایل
        if (File::exists($filePath)) {
            // خواندن و تبدیل JSON به آرایه
            $jsonData = json_decode(file_get_contents($filePath), true);
            $this->trends = $jsonData['rows'] ?? []; // استخراج داده‌ها
        }
    }

    public function download()
    {
        $this->validate();
        $this->resetError();
        $this->isDownloading = true;

        try {
            if (str_contains($this->url, 'youtube.com')) {
                $this->downloadYoutubeVideo();
            } elseif (str_contains($this->url, 'instagram.com')) {
                $this->downloadInstagramVideo();
            } else {
                throw new \Exception('لینک نامعتبر است');
            }
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
            $this->isDownloading = false;
        }
    }

    private function downloadYoutubeVideo()
    {
        $yt = new YoutubeDl(new SymfonyProcessBuilder());
        $yt->setOptions([
            'output' => storage_path('app/public/%(title)s.%(ext)s'),
            'format' => 'bestvideo+bestaudio/best',
        ]);

        $yt->setBinPath('C:/ffmpeg/bin/yt-dlp.exe'); // مسیر دقیق yt-dlp
        $yt->setDownloadPath(storage_path('app/public')); // 🔴 این خط رو حذف کن

        $collection = $yt->download($this->url);

        foreach ($collection->getVideos() as $video) {
            if ($video->getError()) {
                throw new \Exception($video->getError());
            }
        }

        $this->progress = 100;
        $this->isDownloading = false;
    }


    private function downloadInstagramVideo()
    {
        $response = Http::get("https://www.instagram.com/p/{$this->extractInstagramId()}/?__a=1");
        $videoUrl = $response->json('graphql.shortcode_media.video_url');

        if (!$videoUrl) {
            throw new \Exception('ویدیو پیدا نشد');
        }

        $contents = file_get_contents($videoUrl);
        $filename = 'instagram_' . time() . '.mp4';
        Storage::disk('public')->put($filename, $contents);

        $this->progress = 100;
        $this->isDownloading = false;
    }

    private function extractInstagramId()
    {
        preg_match('/\/p\/([a-zA-Z0-9_-]+)\//', $this->url, $matches);
        return $matches[1] ?? null;
    }

    private function resetError()
    {
        $this->error = null;
    }




    public function render()
    {
        return view('livewire.home.terendgoogle');
    }
}
