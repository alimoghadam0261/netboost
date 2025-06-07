<?php


namespace App\Livewire\Home;

use Livewire\Component;

class Keywords extends Component
{
    public string $title = 'کلمات کلیدی|keywords';
    public string $description = "کلمات کلیدی متن های شما برای سئو و هشتگ گذاری به رایگان|Keywords in your texts for SEO and hashtags for free";


    public $text;
    public $keywords = [];

    public function extract()
    {
        $this->keywords = $this->extractKeywords($this->text);
    }

    private function extractKeywords($text)
    {
        // لیست کلمات ممنوعه (stop words) که نمی‌خوای در خروجی باشن
        $stopWords = [
            'و', 'در', 'به', 'از', 'با', 'برای', 'که', 'را', 'این', 'آن', 'یا', 'تا', 'اما',
            'اگر', 'نه', 'هم', 'نیز', 'است', 'بود', 'شد', 'می', 'بر', 'کرد', 'خواهد', 'شود',
            'چه', 'کجا', 'چرا', 'کی', 'چگونه', 'هر', 'همه', 'دیگر', 'هیچ', 'همین', 'آیا',
            'مثل', 'مانند', 'زیرا', 'چون', 'بنابراین', 'یعنی', 'همواره', 'اغلب', 'اکثر', 'بیشتر',
            'کمتر', 'حتی', 'البته', 'دیری', 'سپس', 'بعد', 'قبل', 'اما', 'ولی', 'تا', 'نه',
            'او', 'آن‌ها', 'ما', 'من', 'تو', 'شما', 'ایشان', 'خود', 'خویش', 'ماها', 'شماها',
            'ای', 'اینجا', 'آنجا', 'اینکه', 'آنکه', 'همینکه', 'هرچه', 'هرکه',
            'a', 'an', 'and', 'are', 'as', 'at', 'be', 'but', 'by', 'for', 'if', 'in',
            'into', 'is', 'it', 'no', 'not', 'of', 'on', 'or', 'such', 'that', 'the',
            'their', 'then', 'there', 'these', 'they', 'this', 'to', 'was', 'will', 'with',
            'he', 'she', 'you', 'i', 'we', 'us', 'our', 'his', 'her', 'them', 'my', 'me',
            'from', 'up', 'down', 'out', 'over', 'under', 'again', 'further', 'why', 'how',
            'what', 'which', 'who', 'whom', 'where', 'when', 'all', 'any', 'both', 'each',
            'few', 'more', 'most', 'other', 'some', 'such', 'only', 'own', 'same', 'so',
            'than', 'too', 'very', 'can', 'just', 'should', 'now'
        ];

        // استخراج کلمات با regex
        preg_match_all('/\p{L}+/u', strtolower($text), $matches);
        $words = $matches[0];

        // فیلتر کردن کلمات ممنوعه
        $filteredWords = array_filter($words, function ($word) use ($stopWords) {
            return !in_array($word, $stopWords);
        });

        // شمارش فراوانی کلمات
        $wordCount = array_count_values($filteredWords);
        arsort($wordCount);

        return array_slice($wordCount, 0, 10, true);
    }

    public function render()
    {
        return view('livewire.home.keywords')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description,
        ]);
    }
}
