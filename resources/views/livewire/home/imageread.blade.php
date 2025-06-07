<div dir="rtl" class="bg-white dark:bg-gray-900 text-black dark:text-white" xmlns:livewire=""
     xmlns:wire="http://www.w3.org/1999/xhtml">

    <!-- بنر نصب اپلیکیشن (فقط موبایل) -->
    <div
        x-data="{
    showBanner: false,
    init() {
      const ua = navigator.userAgent;
      const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(ua);
      if (isMobile && !localStorage.getItem('showedNetboostBanner')) {
        this.showBanner = true;
        localStorage.setItem('showedNetboostBanner', 'true');
      }
    }
  }"
        x-init="init()"
        x-show="showBanner"
        x-cloak
        class="fixed top-0 left-0 w-full h-[60px] z-50"
        style="background: linear-gradient(to bottom, #bfdbfe, #ffffff);"
    >
        <div class="h-full flex items-center justify-between px-4">
            <!-- متن و لینک -->
            <a wire:navigate href="{{ route('about') }}"
               class="text-sm sm:text-base font-semibold text-blue-800 hover:underline">
                نصب رایگان اپلیکیشن NetBoost
            </a>

            <!-- دکمه بستن -->
            <button @click="showBanner = false"
                    class="text-gray-600 hover:text-gray-900 text-xl p-1">
                &times;
            </button>
        </div>
    </div>

    <!-- حواست باشه این قطعه را درست زیر تگ <body> بگذاری تا بالاتر از همه عناصر قرار گیرد -->


    <div class="w-full flex flex-col items-center justify-center mt-4 text-center">
        <h1><strong>NetBoost Assistant </strong></h1>
        <p>نت بوست با بیش از 30 آیتم رایگان ،در ساخت و توسعه و مدیریت بهتر شبکه های مجازی به شما کمک می کند</p>
    </div>
    <div id="chatbot" style="display: none">
        <livewire:chat-bot/>
    </div>
    <div>

    </div>
    <div class="w-full flex flex-col items-center justify-center mt-4">
        <div class="flex flex-wrap justify-center gap-2">
            <button
                class="bg-pink-500  text-white w-40 md:w-60 h-10 md:h-12 px-2 md:px-4 py-1 md:py-2 rounded-md text-sm md:text-base transition-all duration-300 hover:bg-pink-600"
                id="btn-chatbot">
<i class="fa fa-message color-white"></i>                چت با هوش مصنوعی
            </button>
            <a href="" id="modalBot">
                <button
                    class="bg-sky-300 text-white w-40 md:w-60 h-10 md:h-12 px-2 md:px-4 py-1 md:py-2 rounded-md text-sm md:text-base transition-all duration-300 hover:bg-sky-600">
<i class="fa fa-robot color-white"></i>                    ربات همه کاره
                </button>
            </a>
        </div>
        <p class="text-xs sm:text-sm text-gray-600 text-center max-w-xs sm:max-w-md md:max-w-lg my-2">
            هوش مصنوعی در مراحل اولیه می‌باشد. و زبان فارسی را به درستی پشتیبانی نمی کند.
        </p>
    </div>




    <!-- متن تایپ‌رایتر -->


<div  class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-8 space-y-1">
    <h2 class="text-[20px] text-gray-700 bg-sky-100 rounded-md text-center py-1 px-1 w-[150px]"><strong>امکانات سایت</strong></h2>
    <div class="rounded-md border border-gray-200 w-[100%] h-auto p-2">
        <div class="flex flex-wrap gap-4 justify-center">

            <a wire:navigator href="{{route('terendgoogle')}}">
                <div class="bg-gradient-to-b from-blue-200
                transition-all duration-200 hover:scale-105
                 to-blue-100 p-4 rounded w-[200px] h-[200px] space-y-3">
                <br>
                <i class="fa-brands fa-google fa-3x block mx-auto"></i>
                <br>
                <p class="text-center">ترند های گوگل</p>
            </div></a>

            <a wire:navigator href="{{route('music')}}">
                <div class="bg-gradient-to-b from-blue-200
                 transition-all duration-200 hover:scale-105
                to-blue-100 p-4 rounded w-[200px] h-[200px] space-y-3">
                    <br>
                    <i class="fa fa-headphones fa-3x block mx-auto"></i>
                    <br>
                    <p class="text-center">دانلود موزیک و افکت صدا</p>
                </div></a>

            <a wire:navigator href="{{route('helpsite')}}">
                <div class="bg-gradient-to-b from-blue-200
                transition-all duration-200 hover:scale-105
                 to-blue-100 p-4 rounded w-[200px] h-[200px] space-y-3">
                    <br>
                    <i class="fa fa-globe-asia fa-3x block mx-auto"></i>
                    <br>
                    <p class="text-center">سایت های کمکی</p>
                </div></a>

            <a wire:navigator href="{{route('hook')}}">
                <div class="bg-gradient-to-b from-blue-200
                transition-all duration-200 hover:scale-105
                 to-blue-100 p-4 rounded w-[200px] h-[200px] space-y-3">
                    <br>
                    <i class="fa fa-video fa-3x block mx-auto"></i>
                    <br>
                    <p class="text-center">ویدیو های قلاب</p>
                </div></a>
            <br>
            <a wire:navigator href="{{route('voice')}}">
                <div class="bg-gradient-to-b from-blue-200
                transition-all duration-200 hover:scale-105
                 to-blue-100 p-4 rounded w-[200px] h-[200px] space-y-3">
                    <br>
                    <i class="fa fa-voicemail fa-3x block mx-auto"></i>
                    <br>
                    <p class="text-center">تبدیل متن به صدا</p>
                </div></a>

            <a wire:navigator href="{{route('templateinsta')}}">
                <div class="bg-gradient-to-b from-blue-200
                transition-all duration-200 hover:scale-105
                 to-blue-100 p-4 rounded w-[200px] h-[200px] space-y-3">
                    <br>
                    <i class="fa fa-paint-brush fa-3x block mx-auto"></i>
                    <br>
                    <p class="text-center">تم ، کاور، گیف</p>
                </div></a>

            <a wire:navigator href="{{route('contentproduct')}}">
                <div class="bg-gradient-to-b from-blue-200
                transition-all duration-200 hover:scale-105
                 to-blue-100 p-4 rounded w-[200px] h-[200px] space-y-3">
                    <br>
                    <i class="fa fa-camera-retro fa-3x block mx-auto"></i>
                    <br>
                    <p class="text-center">تولید محتوا</p>
                </div></a>

    </div>
    </div>
    <br>
    <div class="typewriter">
        <div>
            <h2 class="max-w-xl mx-auto py-10 text-[16px] text-black dark:text-white px-4 sm:px-6 typewriter-text text-center">
                <strong>تمامی امکانات سایت برای شما عزیزان رایگان می باشد</strong>
            </h2>
        </div>
    </div>
</div>

    <script>
        const chatbot = document.querySelector('#chatbot');
        const BtnChatbot = document.querySelector('#btn-chatbot');
        BtnChatbot.addEventListener('click', () => {
            if (chatbot.style.display === 'none') {
                chatbot.style.display = 'block'
            } else {
                chatbot.style.display = 'none'
            }
        })


        const modalBot = document.getElementById('modalBot');
        modalBot.addEventListener('click',()=>{
            alert('ربات در دست ساخت و بهینه سازی می باشد و به زودی به رایگان در اختیار شما عزیزان قرار میگیرد')
        })

    </script>
</div>
