<div>
    <br>
    <div class="flex">
        <p class="text-gray-300">شما اینجا هستید: </p>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('home')}}">خانه</a>
        <a class="bg-sky-100 bg-text-gray-400 py-1 rounded-md my-2 mx-1 h-[30px] transition-all duration-700 hover:text-white hover:bg-sky-300" wire:navigate href="{{route('about')}}">درباره ما</a>
    </div>
    <br>
<div dir="rtl" class="max-w-5xl mx-auto px-4 bg-white dark:bg-gray-900 text-black dark:text-white">

    <div class="flex flex-col space-y-6 w-full dark:bg-gray-800 h-auto justify-center transform transition-all duration-700 ease-in-out shadow-lg">
        <!-- بخش درباره ما -->
        <div class="flex flex-col md:flex-row justify-between bg-sky-100 p-4">
            <div class="flex justify-center md:justify-start mb-4 md:mb-0">
                <a wire:navigate href="{{route('home')}}">
                    <img src="{{asset('./img/logo2.png')}}" alt="logo-about" loading="lazy" class="mx-auto">
                </a>
            </div>
            <div class="p-2 text-center md:text-right">
                <h1 class="text-[25px]"><strong>درباره ما</strong></h1>
                <br>
                <p>
                    مجموعه آریابد <a href="ariyabodgroup.ir" class="text-blue-600 hover:underline">ariyabodgroup.ir</a> با هدف توسعه و پیشرفت فناوری‌های نرم‌افزاری در کشور، با افتخار سایت
                    NetBoost.ir را به‌صورت رایگان برای شما عزیزان راه‌اندازی کرده است. این پروژه در چهار فاز برنامه‌ریزی شده و هم‌اکنون در مسیر تکمیل فازهای بعدی خود قرار دارد.
                    <br><br>
                    تیم ما متشکل از ۴ برنامه‌نویس و ۳ متخصص شبکه است که با دانش و تجربه‌ی خود، همواره در تلاش برای ارائه‌ی بهترین راهکارهای نرم‌افزاری و شبکه‌ای هستند. NetBoost.ir به‌عنوان یک دستیار حرفه‌ای و همه‌کاره شبکه‌های اجتماعی، تمامی نیازهای شما را در این حوزه برآورده می‌کند.
                    <br><br>
                    📢 برای دریافت آخرین به‌روزرسانی‌ها و ارتباط با ما، از طریق شبکه‌های اجتماعی همراه باشید!
                </p>
            </div>
        </div>
        <br>
        <div class=" bg-sky-200 pr-[30px]">
            <h3 class="text-xl font-bold text-teal-700 mb-3">🍏 نصب در آیفون</h3>
            <ol class="list-decimal list-inside space-y-2 text-gray-700">
                <li>مرورگر <span class="font-semibold">Safari</span> را باز کنید.</li>
                <li>به وب‌اپ NetBoost مراجعه کنید.</li>
                <li>آیکون اشتراک‌گذاری (🔼 در مربع) را لمس کنید.</li>
                <li>گزینه‌ی <span class="font-semibold">"Add to Home Screen"</span> را انتخاب کنید.</li>
                <li>در صفحه‌ی بعد، روی <span class="font-semibold">"Add"</span> بزنید.</li>
            </ol>
            <br>
            <h3 class="text-xl font-bold text-green-700 mb-3">📲 نصب در اندروید</h3>
            <ol class="list-decimal list-inside space-y-2 text-gray-700">
                <li>مرورگر <span class="font-semibold">Chrome</span> را باز کنید.</li>
                <li>به آدرس وب‌اپ NetBoost بروید.</li>
                <li>آیکون ‹⋮› (سه‌نقطه) در گوشه‌ی راست بالا را لمس کنید.</li>
                <li>گزینه‌ی <span class="font-semibold">"افزودن به صفحه اصلی"</span> را انتخاب نمایید.</li>
                <li>در پنجره‌ی بازشده، <span class="font-semibold">"افزودن"</span> را بزنید تا آیکون ظاهر شود.</li>
            </ol>

        </div>

        <!-- بخش پرسش‌های متداول -->
        <div class="w-full space-y-4 p-4 bg-sky-200">
            <h1 class="text-[25px] text-center"><strong>پرسش های متداول</strong></h1>
            <!-- سوال اول -->
            <div x-data="{ open: false }" class="border-b pb-3">
                <button @click="open = !open"
                        class="flex justify-between items-center w-full text-lg font-semibold text-gray-800 py-2">
                    سوال ۱: نحوه استفاده از قسمت های سایت ؟
                    <span x-show="!open">➕</span>
                    <span x-show="open">➖</span>
                </button>
                <p x-show="open" x-transition class="text-gray-600 mt-2">بخشی از سایت به آموزش تعلق گرفته است که شما میتوانید هم نحوه استفاده از تمامی امکانات و هم آموزش و سایت های دیگر را به رایگان استفاده کنید(<a
                    class="text-sky-400"    wire:navigate href="{{route('tutorial')}}">آموزش</a>)</p>
            </div>

            <!-- سوال دوم -->
            <div x-data="{ open: false }" class="border-b pb-3">
                <button @click="open = !open"
                        class="flex justify-between items-center w-full text-lg font-semibold text-gray-800 py-2">
                    سوال ۲: سایت چند وقت یکبار به روز رسانی می شود ؟
                    <span x-show="!open">➕</span>
                    <span x-show="open">➖</span>
                </button>
                <p x-show="open" x-transition class="text-gray-600 mt-2">
                netboost بیش از 25 قسمت متفاوت با موضوعات مختلف دارد بع ضی از قسمت ها در روز 3 بار و بعضی دیگر به دلیل جمع آوری و تولید محتوا چند روز طول می کشد
                </p>
            </div>

            <!-- سوال سوم -->
            <div x-data="{ open: false }" class="border-b pb-3">
                <button @click="open = !open"
                        class="flex justify-between items-center w-full text-lg font-semibold text-gray-800 py-2">
                    سوال ۳: منبع مالی netboost؟
                    <span x-show="!open">➕</span>
                    <span x-show="open">➖</span>
                </button>
                <p x-show="open" x-transition class="text-gray-600 mt-2"> netboost کاملا رایگان عرضه شد با اینکه هزینه های جاری و پنهان بسیار زیادی وجود دارد
                مجموعه تصمیم گرفت که کاملا رایگان عرضه شود منابع به دوشکل اسپانسر و حمایت مالی وجود دارد که کاربران برای ماندگاری و به روز رسانی های مناسب به مجموعه کمک مالی میکنند
                </p>
            </div>

            <!-- سوال چهارم -->
            <div x-data="{ open: false }" class="border-b pb-3">
                <button @click="open = !open"
                        class="flex justify-between items-center w-full text-lg font-semibold text-gray-800 py-2">
                    سوال ۴:آیا امکان همکاری وجود دارد ؟
                    <span x-show="!open">➕</span>
                    <span x-show="open">➖</span>
                </button>
                <p x-show="open" x-transition class="text-gray-600 mt-2">
                    بله. مجموعه ariyabodgroup هم در پروژه netboost و هم در پروژههای قبلی و بعدی حاضر به همکاری می باشد لازم به ذکر است این پروژه به دلیل رایگان بودنش همکارها به صورت افتخاری می باشد
                </p>

            </div>

            <!-- سوال پنجم -->
            <div x-data="{ open: false }" class="border-b pb-3">
                <button @click="open = !open"
                        class="flex justify-between items-center w-full text-lg font-semibold text-gray-800 py-2">
                    سوال ۵: چگونه ثبت‌نام کنم؟
                    <span x-show="!open">➕</span>
                    <span x-show="open">➖</span>
                </button>
                <p x-show="open" x-transition class="text-gray-600 mt-2">برای ثبت‌نام، به صفحه عضویت بروید و اطلاعات خود را وارد کنید.</p>
            </div>
        </div>

        <!-- بخش اسپانسر سایت -->
        <div class="p-4 bg-sky-300">
            <h1 class="text-[25px] text-center"><strong>اسپانسر سایت</strong></h1>
            <br>
            <p class="text-justify">
                مایلیم توجه شما را به فرصتی ویژه برای اسپانسری سایت به مدت یک سال با مبلغ ۵۹ میلیون تومان جلب کنیم. این اسپانسری علاوه بر حمایت مالی، نقش مهمی در پشتیبانی از پیشرفت و رایگان‌سازی نرم‌افزارها نیز ایفا می‌کند.
                <br>
                در تمامی صفحات سایت، لوگوی برند شما به نمایش گذاشته خواهد شد و همچنین یک صفحه اختصاصی برای معرفی و توضیحات برند شما در نظر گرفته شده است.
                <br>
                چنانچه تمایل به بهره‌مندی از این فرصت منحصر به فرد دارید، خواهشمندیم از طریق راه‌های ارتباطی زیر با ما در تماس باشید.
            </p>
        </div>

        <!-- بخش حمایت از ما -->
        <div class="p-4 bg-sky-400 shadow-lg rounded-[15px]">
            <h1 class="text-[25px] text-center"><strong>حمایت از ما</strong></h1>
            <br>
            <p class="text-justify">
                اگر از خدمات ما رضایت دارید و تمایل دارید به پیشرفت این پروژه کمک کنید، حمایت‌های شما (Donate) به ما انگیزه و امکان توسعه‌ی بیشتر را می‌دهد. با کمک‌های شما، می‌توانیم امکانات بیشتری را به NetBoost اضافه کنیم و خدمات بهتری ارائه دهیم.

                <br>
                🔗 راه‌های حمایت از ما در سایت درج شده است. هر مقدار حمایت شما، قدمی برای آینده‌ی بهتر نرم‌افزارهای ایرانی خواهد بود.
                <br>
                با سپاس از همراهی شما! 🙌💙
            </p>
            <br>
            <div class="flex justify-center">
                <button id="btn-donate"
                        class="bg-gray-100 transition-all duration-500 hover:bg-gray-300 text-black hover:text-white rounded-md w-full max-w-xs py-2">
                    <i class="fa-solid fa-donate"></i> حمایت از ما
                </button>
            </div>
            <div class="w-full max-w-md bg-blue-200 rounded-md p-5 fixed bottom-4 left-1/2 transform -translate-x-1/2 hidden"
                 id="page-donate">
                <div class="flex flex-col md:flex-row justify-around items-center">
                    <div class="w-full md:w-7/12">
                        <h1 class="text-[25px]">حمایت مالی</h1>
                        <br>
                        <p>
                            به دلیل رایگان بودن تمامی امکانات سایت ترجیح بر آن شد که از درگاه‌های اینترنتی در این سایت استفاده نشود؛ لذا برای حمایت مالی از این سایت می‌توانید به شماره کارت بلو بانک سامان حمایت خود را انجام دهید. با تشکر
                        </p>
                    </div>
                    <div class="mt-4 md:mt-0">
                        <img src="{{asset('./img/defult/webp/blu.webp')}}" alt="blu" loading="lazy" class="w-40">
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    </div>

    <script>
        var btnDonate = document.getElementById('btn-donate');
        var pageDonate = document.getElementById('page-donate');
        btnDonate.addEventListener('click', () => {
            if (pageDonate.style.display === "none" || pageDonate.style.display === "") {
                pageDonate.style.display = "block";
            } else {
                pageDonate.style.display = "none";
            }
        });
    </script>
</div>
</div>
