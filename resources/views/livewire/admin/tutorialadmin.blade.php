<div xmlns:wire="http://www.w3.org/1999/xhtml">
    <h1 class="text-[23px]">ساخت آموزش</h1>
    <br>

{{--    <form wire:submit.prevent="save" class="space-y-6 px-6 bg-white shadow-lg">--}}
        <form wire:submit.prevent="save" class="space-y-6 px-6 bg-white shadow-lg" x-data="{ content: @entangle('content') }">

        <div class="flex flex-col space-y-4">
            <label>عنوان</label>
            <input class="border-2" type="text" placeholder="عنوان آموزش" wire:model="title">
            @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="flex flex-col space-y-4">
            <label>عکس</label>
            <input class="border-2" type="file" wire:model="pic">
            @error('pic') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="flex flex-col space-y-4">
            <label>آدرس ویدیو</label>
            <input class="border-2" type="text" wire:model="video">
            @error('video') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="flex flex-col space-y-4">
            <label>دسته بندی</label>
            <select wire:model="category" class="border-2">
                <option value="" selected>انتخاب کنید</option>
                <option value="سایت">آموزش سایت netboost</option>
                <option value="اینستاگرام">آموزش اینستاگرام</option>
                <option value="تلگرام">آموزش تلگرام</option>
                <option value="یوتوب">آموزش یوتوب</option>
                <option value="فیسبوک">آموزش فیسبوک</option>
                <option value="اپلیکشن">آموزش اپلیکشن های ادیت عکس و فیلم</option>
                <option value="هوش مصنوعی">آموزش هوش مصنوعی</option>

            </select>
            @error('category') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="flex flex-col space-y-4">
            <label>صدا</label>
            <input class="border-2" type="file" wire:model="voice">
            @error('voice') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>


        <div class="flex flex-col space-y-4" wire:ignore id="editor">
            <label>{{$content}}متن</label>
            <textarea name="content" id="content" wire:model.live="content" cols="30" rows="10"></textarea>
            @error('content') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>


        <button class="w-[150px] h-[40px] rounded-md bg-green-300" type="submit">ذخیره</button>
        <br>
    </form>

    @if (session()->has('success') || session()->has('message'))
        <div class="mt-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow-md" role="alert">
            {{ session('success') ?? session('message') }}
        </div>
    @endif

    <br>
        <h1 class="tetx-[20px]"><strong>تعداد : {{$count}}</strong></h1>
    <div class="w-10/12 bg-white shadow-lg grid grid-cols-4 gap-4 p-4 ">
        <br>
        @foreach($tutorialss as $item)
        <div class="w-[250px] h-[250px] rounded-md border-2">
            <img src="{{ asset('storage/' . $item->pic) }}" alt="$item->title" class="w-full h-[150px] mr-[100px]" loading="lazy">
            <h1 class="text-[16px]  mx-[50px]"><strong>{{$item->title}}</strong></h1>
            <hr>
            <button wire:click="delete({{ $item->id }})"
            class="bg-red-500 rounded-md w-[150px] h-[40px] mx-[50px]"
            >حذف</button>
        </div>
        @endforeach

    </div>
    <div class="mt-6 flex justify-center ">
        {{ $tutorialss->links('vendor.pagination.tailwind') }}
    </div>






</div>
{{-- بخش اسکریپت --}}
@push('scripts')
    <script>
        $('#content').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks:{
                onChange:function(contents,$editable){
                    @this.set('content',contents);
                }
            }
        });
    </script>
@endpush
