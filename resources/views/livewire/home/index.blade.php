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




    <div id="chatbot" style="display: none">
    <livewire:chat-bot />
   </div>
    <div class="w-full flex flex-col items-center justify-center mt-4">
        <button
            class="bg-pink-300 w-[250px] h-[50px] p-2 rounded-md transition-all duration-500 hover:bg-pink-600"
            id="btn-chatbot">چت با هوش مصنوعی رایگان</button>
        <p class="text-[12px] my-2 text-gray-600 text-center max-w-xs sm:max-w-md md:max-w-lg">
            هوش مصنوعی در مراحل اولیه می‌باشد. و زبان فارسی را به درستی پشتیبانی نمی کند.
        </p>
    </div>


    <br><br>
    <!-- بخش بالایی: گرید کارت‌ها -->
    <div class="flex flex-wrap w-full bg-sky-200 dark:bg-gray-800 h-auto justify-center transform transition-all duration-700 ease-in-out shadow-lg">
        <!-- ترند های ایران -->
        <div class="w-[180px] h-[200px] mr-5 mb-5 border-red-200    rounded-md   hover:scale-[1.02] transition-all duration-300 dark:border-gray-600">
            <a wire:navigate href="{{ route('terendgoogle') }}">
                <img  loading="eager" fetchpriority="high" width="180"  height="200" src="{{ asset('./img/defult/webp/Keyword Research 3D Model.webp') }}" alt="trend google"   class="transition-all duration-300">
                <p class="p-hook-index text-black dark:text-white text-center">ترند های ایران</p>
            </a>
        </div>

        <!-- ویدیو های قلاب -->
        <div class="w-[180px] h-[200px] mr-5 mb-5 border-red-200    rounded-md   hover:scale-[1.02] transition-all duration-300 dark:border-gray-600">
            <a wire:navigate href="{{ route('hook') }}">
                <img  loading="eager" fetchpriority="high" width="180"  height="200" src="{{ asset('./img/defult/webp/Video Call.webp') }}" alt="videohook"   class="transition-all duration-300"  loading="eager"
                     fetchpriority="high">
                <p class="p-hook-index text-black dark:text-white text-center">ویدیو های قلاب</p>
            </a>
        </div>

        <!-- موزیک های ترند -->
        <div class="w-[180px] h-[200px] mr-5 mb-5 border-red-200    rounded-md   hover:scale-[1.02] transition-all duration-300 dark:border-gray-600">
            <a wire:navigate href="{{route('music')}}">
                <img  loading="eager" fetchpriority="high" width="180"  height="200" src="{{ asset('./img/defult/webp/Music Player.webp') }}" alt="music"   class="transition-all duration-300"  >
                <p class="p-hook-index1 text-black dark:text-white text-center">موزیک های ترند</p>
            </a>
        </div>

        <!-- سایت های کمکی -->
        <div class="w-[180px] h-[200px] mr-5 mb-5 border-red-200    rounded-md   hover:scale-[1.02] transition-all duration-300 dark:border-gray-600">
            <a wire:navigate href="{{route('helpsite')}}">
                <img  loading="eager" fetchpriority="high" width="180"  height="200" src="{{ asset('./img/defult/webp/sitess.webp') }}" alt="helpsite"   class="transition-all duration-300">
                <p class="p-hook-index text-black dark:text-white text-center">سایت های کمکی</p>
            </a>
        </div>

        <!-- تم و کاور -->
        <div class="w-[180px] h-[200px] mr-5 mb-5 border-red-200    rounded-md   hover:scale-[1.02] transition-all duration-300 dark:border-gray-600">
            <a wire:navigate href="{{ route('templateinsta') }}">
                <img  loading="eager" fetchpriority="high" width="180"  height="200" src="{{ asset('./img/defult/webp/Search Web Template.webp') }}" alt="themeCover"   class="transition-all duration-300">
                <p class="p-hook-index text-black dark:text-white text-center">تم و کاور</p>
            </a>
        </div>

        <!-- تولید محتوا -->
        <div class="w-[180px] h-[200px] mr-5 mb-5 border-red-200    rounded-md   hover:scale-[1.02] transition-all duration-300 dark:border-gray-600">
            <a wire:navigate href="{{ route('contentproduct') }}">
                <img  loading="eager" fetchpriority="high" width="160"  height="200" src="{{ asset('./img/defult/webp/Content Management 3D Model.webp') }}" alt="Content Management"   class="transition-all duration-300">
                <p class="p-hook-index1 text-black dark:text-white text-center">تولید محتوا</p>
            </a>
        </div>
    </div>

    <br>
    <br>
    <!-- متن تایپ‌رایتر -->
    <div class="typewriter">
        <div>
            <h1 class="max-w-xl mx-auto py-10 text-[16px] text-black dark:text-white px-4 sm:px-6 typewriter-text text-center">
                <strong>تمامی امکانات سایت برای شما عزیزان رایگان می باشد</strong>
            </h1>
        </div>
    </div>

    <br>
    <br>
    <!-- بخش معرفی -->
    <div
        class="notification-index
         w-full h-[500px] bg-cover bg-no-repeat"
        style="background-image: url('/img/defult/webp/girlnotification.webp')"
    >
        <br>
        <h2 class="text-[35px] mx-4 sm:mx-10 md:mx-20 lg:mx-[200px]">معرفی</h2>
        <br>
        <p class="text-[18px] w-full sm:w-12/12 lg:w-4/12 lg:mx-[130px] sm:p-5 bg-white bg-opacity-30 sm:bg-opacity-50 about-index">
            مجموعه آریابد تیمی از برنامه نویس های جوان و مستعد می باشد که اپلیکشن و سایت های متفاوت را اجرا کرده است و netboost گامی برای پیشرفت کاربران فضای مجازی به صورت رایگان می باشد.
            برای اطلاعات بیشتر و ارتباط با ما به قسمت
            <a class="text-sky-600" wire:navigate href="{{route('about')}}">درباره ما</a>
            مراجعه فرمایید.
        </p>
    </div>
    <br>
    <br>
    <!-- بخش نمونه امکانات سایت -->
    <div class="w-full">
        <h2 class="text-[25px] mx-4 sm:mx-10 md:mx-20 lg:mx-[400px] text-center">
            نمونه ای از امکانات سایت <strong>netboost</strong>
        </h2>
        <br>
        <br>
        <br>
        <div class="flex flex-col lg:flex-row items-center justify-center">
            <div class="circle-index mb-4 lg:mb-0"></div>
            <div class="mb-4 lg:mb-0">
                <ul class="space-y-2">
                    <li class="mx-[-30px]  transition-all duration-300 text-sky-900 hover:text-sky-600 list-none">
                        <a wire:navigate href="{{route('terendgoogle')}}">ترند های گوگل</a>
                    </li>

                    <li class="mx-[-10px] sm:mx-0 transition-all duration-300 text-sky-900 hover:text-sky-600 list-none">
                        <a wire:navigate href="{{route('youtube')}}">دانلود فیلم از شبکه های اجتماعی</a>
                    </li>

                    <li class="mx-[10px]  transition-all duration-300 text-sky-900 hover:text-sky-600 list-none">
                        <a wire:navigate href="{{route('contentproduct')}}">محتوا سازی</a>
                    </li>

                    <li class="mx-[-10px] sm:mx-0 transition-all duration-300 text-sky-900 hover:text-sky-600 list-none">
                        <a wire:navigate href="{{route('hook')}}">ویدیو های هوک</a>
                    </li>

                    <li class="mx-[-30px]  transition-all duration-300 text-sky-900 hover:text-sky-600 list-none">
                        <a wire:navigate href="{{route('linkexchange')}}">تبادل لینک</a>
                    </li>

                </ul>
            </div>
            <div dir="ltr" class="w-full lg:w-[40%] bg-sky-100 tetx-gray-800 rounded-[15px] text-center mx-4">
                <p class="p-2">
                    در این سایت بیش از 30 قسمت مختلف برای شما عزیزان مهیا شده است که شما با هر سلیقه‌ای بتوانید نیاز خود را برآورده کنید.
                    تمامی قسمت‌ها روزانه در حال آپدیت و به‌روز رسانی می‌باشند تا شما بتوانید بهترین خروجی را برای خود به دست آورید.
                    سعی شده که آموزش کار با تمامی قسمت‌ها در بخش
                    <a wire:navigate class="text-blue-600" href="{{route('tutorial')}}">آموزش</a>
                    قرار بگیرد.
                </p>
            </div>
        </div>
    </div>
    <br>
   <div class="aiagent max-w-5xl mx-auto px-4 bg-white dark:bg-gray-900 text-black dark:text-white">
        <div class="flex flex-col lg:flex-row items-center justify-center">
            <img src="{{asset('./img/defult/webp/telegramaiagent.webp')}}" width="300" height="300" alt="aiagent telegram" loading="lazy" class="img-ai-agent" />
            <p>
                امروز که کاربران به دنبال تجارب سریع، جذاب و مفید در ویدیو و سایتها هستند، نداشتن یک دستیار شبکه‌های اجتماعی هوشمند، به معنای از دست رفتن فرصت‌های طلایی است. با این راهکار کم‌هزینه، می‌توانید در افزایش تعامل و رشد فالوئر هدفمند پیشتاز باشید، بدون آنکه هزینه‌های سنگین استخدام نیروی انسانی یا خرید ابزارهای گران‌قیمت را متحمل شوید. اکنون زمان آن است که با این دستیار هوش مصنوعی، گامی بزرگ در مسیر دیجیتال مارکتینگ و برگشت سرمایه‌تان بردارید!
            </p>
        </div>
        <br>
        <div class="flex flex-col lg:flex-row items-center justify-center">
            <p>
                شما برای داشتن یک دستیار همه کاره از سرچ و تحقیق موضوع خاص فیلتر کردن مطالب بهینه سازی و فارسی سازیو در نهایت پست کردن درشبکه
                های اجتماعی یک قدم فاصله دارید و با سفارش دستیار هوشمند در کمیت و کیفیت از تمامی رقبای خود یک قدم جلوتر خواهید بود
            </p>
            <img src="{{asset('./img/defult/webp/whatsappaiagent.webp')}}" width="300" height="300" alt="aiagent telegram" loading="lazy" class="img-ai-agent" />
        </div>
    </div>
    <br>
    <!-- بخش اهداف آینده -->
    <div class="future-index
         w-full h-[500px]  bg-cover bg-no-repeat"
         style="background-image: url('/img/defult/webp/bgbg.webp')"
    >
        <br>
        <h2 class="text-[35px] mx-4 sm:mx-10 md:mx-20 lg:mx-[200px] ">اهداف آینده NetBoost</h2>
        <br>
        <p class="text-[18px] mx-4 sm:mx-10 md:mx-20 lg:mx-[100px] about-index text-justify">
            NetBoost در تلاش است تا در آینده، یک هوش مصنوعی اختصاصی برای مدیریت و دستیار شبکه‌های اجتماعی ایجاد کند.
            در این مسیر، دو چالش اساسی وجود دارد: برنامه‌نویسی و تأمین بودجه.
            خوشبختانه، با تکیه بر دانش و توانمندی جوانان عزیز و مهندسین کامپیوتر، چالش برنامه‌نویسی برطرف شده است.
            اکنون تنها گام باقی‌مانده، تأمین بودجه برای راه‌اندازی و تکمیل این پروژه می‌باشد.
            با حمایت و همراهی شما، این هدف به واقعیت تبدیل خواهد شد. 🚀✨
        </p>
    </div>
    <script>
        const chatbot = document.querySelector('#chatbot');
        const BtnChatbot = document.querySelector('#btn-chatbot');
        BtnChatbot.addEventListener('click',()=>{
        if(chatbot.style.display==='none'){
            chatbot.style.display='block'
        }
        else { chatbot.style.display='none'}
        })
    </script>
</div>
