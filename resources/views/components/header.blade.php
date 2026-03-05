<div 
    x-data="{ showSidebar: false, showSearch: false, isSticky: false }" 
    @scroll.window="isSticky = (window.scrollY > 120)"
>
    <!-- Main Header (Scrolls away) -->
    <header class="bg-white pt-3">
        <!-- Sidebar Drawer Contents -->
        <template x-teleport="body">
            <div>
                <!-- Backdrop -->
                <div 
                    x-show="showSidebar" 
                    x-transition:opacity
                    @click="showSidebar = false"
                    class="fixed inset-0 bg-black/50 z-[60] backdrop-blur-sm"
                    x-cloak
                ></div>

                <!-- Drawer Content -->
                <div 
                    x-show="showSidebar"
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="-translate-x-full"
                    x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in duration-300 transform"
                    x-transition:leave-start="translate-x-0"
                    x-transition:leave-end="-translate-x-full"
                    class="fixed inset-y-0 left-0 w-80 bg-white z-[80] shadow-2xl pt-2 px-6 pb-6 overflow-y-auto"
                    x-cloak
                >
                    <div class="flex justify-end items-center mb-2 pb-2 border-b border-black/5">
                        <button @click="showSidebar = false" class="p-2 hover:bg-slate-100 rounded-full transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        </button>
                    </div>

                    <ul class="space-y-2">
                        <li class="border-b border-gray-400 pb-2"><a href="/" class="block text-lg font-semibold hover:text-rose-600 transition-colors flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            হোম
                        </a></li>
                        <li class="border-b border-gray-400 pb-1"><a href="#" class="block text-xl font-semibold hover:text-rose-600 transition-colors">সর্বশেষ</a></li>
                        <li class="border-b border-gray-400 pb-1"><a href="#" class="block text-xl font-semibold hover:text-rose-600 transition-colors">বিশেষ সংবাদ</a></li>
                        <li class="border-b border-gray-400 pb-1"><a href="#" class="block text-xl font-semibold hover:text-rose-600 transition-colors">জাতীয়</a></li>
                        <li class="border-b border-gray-400 pb-1"><a href="#" class="block text-xl font-semibold hover:text-rose-600 transition-colors">সারাদেশ</a></li>
                        <li class="border-b border-gray-400 pb-1"><a href="#" class="block text-xl font-semibold hover:text-rose-600 transition-colors">রাজনীতি</a></li>
                        <li class="border-b border-gray-400 pb-1"><a href="#" class="block text-xl font-semibold hover:text-rose-600 transition-colors">বিশ্ব সংবাদ</a></li>
                        <li class="border-b border-gray-400 pb-1"><a href="#" class="block text-xl font-semibold hover:text-rose-600 transition-colors">খেলা</a></li>
                        <li class="border-b border-gray-400 pb-1"><a href="#" class="block text-xl font-semibold hover:text-rose-600 transition-colors">বিনোদন</a></li>
                        <li class="border-b border-gray-400 pb-1"><a href="#" class="block text-xl font-semibold hover:text-rose-600 transition-colors">অর্থনীতি</a></li>
                        <li class="border-b border-gray-400 pb-1"><a href="#" class="block text-xl font-semibold hover:text-rose-600 transition-colors">লাইফস্টাইল</a></li>
                        <li class="border-b border-gray-400 pb-1"><a href="#" class="block text-xl font-semibold hover:text-rose-600 transition-colors">টেক</a></li>
                        <li class="border-b border-gray-400 pb-1"><a href="#" class="block text-xl font-semibold hover:text-rose-600 transition-colors">আইন-আদালত</a></li>
                        <li class="border-b border-gray-400 pb-1"><a href="#" class="block text-xl font-semibold hover:text-rose-600 transition-colors">ভিডিও</a></li>
                        <li class="border-b border-gray-400 pb-1"><a href="#" class="block text-xl font-semibold hover:text-rose-600 transition-colors">মতামত</a></li>
                        <li class="border-b border-gray-400 pb-1"><a href="#" class="block text-xl font-semibold hover:text-rose-600 transition-colors">অন্যান্য</a></li>
                    </ul>
                </div>
            </div>
        </template>

        <div class="container pt-2 pb-0 text-center">
            <div class="flex items-center justify-between mb-4">
                <div class="flex-1 text-left hidden lg:block">
                    <div class="flex items-center gap-2">
                        <!-- Menu Icon -->
                        <button @click="showSidebar = true" class="p-2 hover:bg-slate-100 rounded-full transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"></line><line x1="4" x2="20" y1="6" y2="6"></line><line x1="4" x2="20" y1="18" y2="18"></line></svg>
                        </button>

                        <!-- Search Feature -->
                        <div class="flex items-center">
                            <button @click="showSearch = !showSearch" class="p-2 hover:bg-slate-100 rounded-full transition-colors transition-all duration-300">
                                <svg x-show="!showSearch" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                <svg x-show="showSearch" x-cloak xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </button>
                            
                            <div 
                                x-show="showSearch"
                                x-transition:enter="transition ease-out duration-300 transform"
                                x-transition:enter-start="opacity-0 -translate-x-4 scale-95"
                                x-transition:enter-end="opacity-100 translate-x-0 scale-100"
                                x-transition:leave="transition ease-in duration-200 transform"
                                x-transition:leave-start="opacity-100 translate-x-0 scale-100"
                                x-transition:leave-end="opacity-0 -translate-x-4 scale-95"
                                class="ml-2"
                                x-cloak
                            >
                                <input type="text" placeholder="অনুসন্ধান করুন..." class="bg-slate-100 border-0 rounded-full px-4 py-2 text-sm focus:ring-2 focus:ring-rose-500 w-48 md:w-64 outline-none transition-all">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 flex justify-center">
                    <a href="/">
                        <h1 class="text-4xl md:text-6xl font-black tracking-tighter uppercase serif underline decoration-rose-500 underline-offset-8">
                            দ্য <span class="px-2 py-0">ডেইলি</span> নিউজ
                        </h1>
                    </a>
                </div>
                <div class="flex-1 text-right flex justify-end items-center gap-4">
                    @if (Route::has('login'))
                        <nav class="flex gap-4 text-sm font-semibold">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="px-4 py-2 bg-slate-100 rounded-full hover:bg-slate-200 transition-all">ড্যাশবোর্ড</a>
                            @else
                                <a href="{{ route('login') }}" class="hover:text-rose-600 transition-colors">লগ ইন</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="bg-black text-white px-5 py-2 rounded-full hover:bg-rose-600 transition-all shadow-lg hover:shadow-rose-500/25">জয়েন করুন</a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </div>
            </div>

            <!-- Top Utility Bar -->
            <div class="flex justify-between items-center text-slate-700 text-sm uppercase font-bold tracking-widest mb-2 hidden md:flex">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-rose-500"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    @php
                        $en_d = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                        $bn_d = ['রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার', 'শনিবার'];
                        $en_m = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                        $bn_m = ['জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর'];
                        $en_n = range(0, 9);
                        $bn_n = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];

                        $now = now()->startOfDay();
                        $d = str_replace($en_d, $bn_d, $now->format('l'));
                        $m = str_replace($en_m, $bn_m, $now->format('F'));
                        $dn = str_replace($en_n, $bn_n, $now->format('d'));
                        $yn = str_replace($en_n, $bn_n, $now->format('Y'));

                        // Lifelong Accurate Bangabda Converter (Revised)
                        function getLifelongBanglaDate($date) {
                            $y = (int)$date->format('Y');
                            $m = (int)$date->format('m');
                            $d = (int)$date->format('d');

                            $is_leap = ($y % 4 == 0 && ($y % 100 != 0 || $y % 400 == 0));
                            
                            // April 14 is the fixed start of Boishakh 1
                            $new_year = \Carbon\Carbon::create($y, 4, 14)->startOfDay();
                            if ($date->lt($new_year)) {
                                $new_year = \Carbon\Carbon::create($y - 1, 4, 14)->startOfDay();
                            }
                            
                            // Get absolute difference in days
                            $diff = (int)abs($date->diffInDays($new_year));
                            
                            $bn_months = ["বৈশাখ", "জ্যৈষ্ঠ", "আষাঢ়", "শ্রাবণ", "ভাদ্র", "আশ্বিন", "কার্তিক", "অগ্রহায়ণ", "পৌষ", "মাঘ", "ফাল্গুন", "চৈত্র"];
                            $month_days = [31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 30];
                            if ($is_leap) { $month_days[10] = 31; } // Falgun gets 31 days in leap year

                            $bn_day_val = $diff + 1;
                            $bn_m_idx = 0;

                            for ($i = 0; $i < 12; $i++) {
                                if ($bn_day_val <= $month_days[$i]) {
                                    $bn_m_idx = $i;
                                    break;
                                }
                                $bn_day_val -= $month_days[$i];
                            }

                            $bn_year = ($m > 4 || ($m == 4 && $d >= 14)) ? $y - 593 : $y - 594;

                            $bn_digits = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
                            $bn_d_str = str_replace(range(0, 9), $bn_digits, (string)$bn_day_val);
                            $bn_y_str = str_replace(range(0, 9), $bn_digits, (string)$bn_year);
                            
                            return "$bn_d_str {$bn_months[$bn_m_idx]} $bn_y_str";
                        }

                        $bangla_date = getLifelongBanglaDate($now);
                    @endphp
                    <span>{{ $d }}, {{ $dn }} {{ $m }} {{ $yn }}, {{ $bangla_date }} বঙ্গাব্দ</span>
                </div>
                <div class="flex items-center gap-3">
                    <a href="#" class="hover:text-rose-600 transition-colors">ডিজিটাল সংস্করণ</a>
                    <span class="w-px h-3 bg-black"></span>
                    <a href="#" class="hover:text-rose-600 transition-colors">সাবস্ক্রাইব</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Placeholder for Sticky Nav to prevent layout jump -->
    <div x-show="isSticky" class="h-[52px] md:h-[60px]" x-cloak></div>

    <nav 
        class="z-50 bg-white border-b border-slate-200 transition-all duration-300"
        :class="isSticky ? 'fixed top-0 left-0 w-full shadow shadow-black/5 py-1' : 'relative py-2'"
    >
        <div class="container">
            <div 
                class="flex items-center transition-all duration-300"
                :class="isSticky ? 'border-t-2 border-transparent pt-0' : 'border-t-2 border-black pt-1'"
            >
                <!-- Smooth Sliding Sidebar Trigger & Logo Short -->
                <div 
                    class="flex items-center gap-2 overflow-hidden transition-all duration-500 ease-in-out"
                    :class="isSticky ? 'w-20 opacity-100 mr-2' : 'w-0 opacity-0 mr-0'"
                >
                    <button @click="showSidebar = true" class="p-1.5 hover:bg-slate-100 rounded-full transition-all text-black hover:text-rose-600 shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"></line><line x1="4" x2="20" y1="6" y2="6"></line><line x1="4" x2="20" y1="18" y2="18"></line></svg>
                    </button>
                    
                    <a href="/" class="w-8 h-8 flex items-center justify-center bg-white text-rose-600 font-black serif text-xl rounded-full shadow border border-black/5 hover:bg-rose-50 transition-colors shrink-0">
                        D
                    </a>
                </div>

                <div class="flex-1 overflow-x-auto overflow-y-hidden no-scrollbar py-0">
                    <ul class="flex justify-start items-center gap-3 md:gap-5 text-sm md:text-lg font-semibold uppercase whitespace-nowrap pt-1 pb-1">
                        <li><a href="#" class="hover:text-rose-600 border-b-2 border-transparent hover:border-rose-600 pb-1 transition-all">সর্বশেষ</a></li>
                        <li><a href="#" class="hover:text-rose-600 border-b-2 border-transparent hover:border-rose-600 pb-1 transition-all">বিশেষ সংবাদ</a></li>
                        <li><a href="#" class="hover:text-rose-600 border-b-2 border-transparent hover:border-rose-600 pb-1 transition-all">জাতীয়</a></li>
                        <li><a href="#" class="hover:text-rose-600 border-b-2 border-transparent hover:border-rose-600 pb-1 transition-all">সারাদেশ</a></li>
                        <li><a href="#" class="hover:text-rose-600 border-b-2 border-transparent hover:border-rose-600 pb-1 transition-all">রাজনীতি</a></li>
                        <li><a href="#" class="hover:text-rose-600 border-b-2 border-transparent hover:border-rose-600 pb-1 transition-all">বিশ্ব সংবাদ</a></li>
                        <li><a href="#" class="hover:text-rose-600 border-b-2 border-transparent hover:border-rose-600 pb-1 transition-all">খেলা</a></li>
                        <li><a href="#" class="hover:text-rose-600 border-b-2 border-transparent hover:border-rose-600 pb-1 transition-all">বিনোদন</a></li>
                        <li><a href="#" class="hover:text-rose-600 border-b-2 border-transparent hover:border-rose-600 pb-1 transition-all">অর্থনীতি</a></li>
                        <li><a href="#" class="hover:text-rose-600 border-b-2 border-transparent hover:border-rose-600 pb-1 transition-all">লাইফস্টাইল</a></li>
                        <li><a href="#" class="hover:text-rose-600 border-b-2 border-transparent hover:border-rose-600 pb-1 transition-all">টেক</a></li>
                        <li><a href="#" class="hover:text-rose-600 border-b-2 border-transparent hover:border-rose-600 pb-1 transition-all">আইন-আদালত</a></li>
                        <li><a href="#" class="hover:text-rose-600 border-b-2 border-transparent hover:border-rose-600 pb-1 transition-all">ভিডিও</a></li>
                        <li><a href="#" class="hover:text-rose-600 border-b-2 border-transparent hover:border-rose-600 pb-1 transition-all">মতামত</a></li>
                        <li><a href="#" class="hover:text-rose-600 border-b-2 border-transparent hover:border-rose-600 pb-1 transition-all">অন্যান্য</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
