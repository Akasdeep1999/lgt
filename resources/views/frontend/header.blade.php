<div class="font-poppins text-slate-800 bg-[#fbfdfc] antialiased">

    <!-- Top Info Bar (Green Ambient Header) -->
    <!-- ==================== TOP INFO BAR (MOBILE ICON-ONLY) ==================== -->
    <div
        class="bg-gradient-to-r from-slate-950 via-brand-950 to-slate-950 text-slate-300 text-xs py-2 px-4 border-b border-brand-900/60 font-poppins relative z-50">
        <div class="max-w-7xl mx-auto flex justify-between items-center gap-3">

            <!-- Left: Location & Email (Icon Only on Mobile, Text on sm/md+) -->
            <div class="flex items-center gap-2 sm:gap-4 text-[11px] sm:text-xs">

                <!-- Location Item -->
                <div class="flex items-center gap-2 text-slate-300">
                    <span
                        class="w-7 h-7 sm:w-6 sm:h-6 rounded-md bg-brand-900/70 border border-brand-500/30 flex items-center justify-center text-emerald-400 text-xs sm:text-[11px] shadow-sm"
                        title="Santoshpur, Kolkata 700075">
                        <i class="fa-solid fa-location-dot"></i>
                    </span>
                    <span class="hidden sm:inline">Santoshpur, Kolkata 700075</span>
                </div>

                <!-- Divider (Tablet/Desktop) -->
                <span class="hidden sm:inline text-slate-700">|</span>

                <!-- Email Item -->
                <a href="mailto:letsgotravels20@gmail.com"
                    class="flex items-center gap-2 text-slate-300 hover:text-emerald-400 transition-colors"
                    title="letsgotravels20@gmail.com">
                    <span
                        class="w-7 h-7 sm:w-6 sm:h-6 rounded-md bg-brand-900/70 border border-brand-500/30 flex items-center justify-center text-emerald-400 text-xs sm:text-[11px] shadow-sm">
                        <i class="fa-regular fa-envelope"></i>
                    </span>
                    <span class="hidden md:inline font-medium">letsgotravels20@gmail.com</span>
                </a>

                <!-- Quick Call Icon (Mobile Only) -->
                <a href="tel:03345280335"
                    class="flex sm:hidden items-center justify-center w-7 h-7 rounded-md bg-brand-900/70 border border-brand-500/30 text-emerald-400 text-xs shadow-sm"
                    title="Call 033 45280335">
                    <i class="fa-solid fa-phone"></i>
                </a>
            </div>

            <!-- Right: Business Hours & Square Social Icons -->
            <div class="flex items-center gap-2 sm:gap-3 text-[11px] sm:text-xs">

                <!-- Business Hours -->
                <div
                    class="flex items-center gap-1.5 sm:gap-2 bg-white/5 border border-white/10 px-2 sm:px-3 py-1 rounded-md backdrop-blur-sm">
                    <span
                        class="w-4 h-4 rounded bg-emerald-500/20 border border-emerald-500/40 flex items-center justify-center text-emerald-400 text-[9px]">
                        <i class="fa-regular fa-clock"></i>
                    </span>
                    <span class="text-slate-200 font-medium text-[10px] sm:text-xs">
                        <span class="hidden sm:inline">Mon - Sat: </span><strong class="text-white font-semibold">10:30
                            AM – 6:30 PM</strong>
                    </span>
                </div>

                <!-- Square Social Icons -->
                <div class="hidden md:flex items-center gap-1.5 pl-2 border-l border-slate-800">
                    <a href="#"
                        class="w-6 h-6 rounded-md bg-white/5 border border-white/10 hover:bg-brand-600 hover:border-brand-600 hover:text-white text-slate-400 flex items-center justify-center transition text-[11px] shadow-sm"
                        title="Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#"
                        class="w-6 h-6 rounded-md bg-white/5 border border-white/10 hover:bg-brand-600 hover:border-brand-600 hover:text-white text-slate-400 flex items-center justify-center transition text-[11px] shadow-sm"
                        title="Instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/919933072153" target="_blank"
                        class="w-6 h-6 rounded-md bg-white/5 border border-white/10 hover:bg-emerald-600 hover:border-emerald-600 hover:text-white text-slate-400 flex items-center justify-center transition text-[11px] shadow-sm"
                        title="WhatsApp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>

            </div>

        </div>
    </div>

    <!-- ==================== HEADER & MEGA MENU ==================== -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur border-b border-brand-100 shadow-sm font-poppins">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">

                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('logo.png') }}" alt="Lets go travel logo"
                        class="h-10 sm:h-12 w-auto object-contain">
                </a>

                <nav class="hidden lg:flex items-center space-x-7">
                    <a href="{{ route('home') }}" class="text-sm font-semibold text-brand-600">Home</a>

                    <div class="relative group">
                        <button class="text-sm font-medium hover:text-brand-600 flex items-center gap-1.5 py-6">
                            Upcoming Tours
                            <i class="fa-solid fa-chevron-down text-xs transition-transform group-hover:rotate-180"></i>
                        </button>
                        <div
                            class="hidden group-hover:block absolute top-full left-0 w-56 bg-white border border-brand-100 shadow-xl rounded-2xl py-2">
                            <a href="#"
                                class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-brand-50 hover:text-brand-700 font-medium">Domestic
                                Travels</a>
                            <a href="#"
                                class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-brand-50 hover:text-brand-700 font-medium">International
                                Travels</a>
                        </div>
                    </div>

                    <div class="group static">
                        <button class="text-sm font-medium hover:text-brand-600 flex items-center gap-1.5 py-6">
                            Explore Tour
                            <i class="fa-solid fa-chevron-down text-xs transition-transform group-hover:rotate-180"></i>
                        </button>
                        <div
                            class="hidden group-hover:block absolute left-0 top-full w-full bg-white border-b border-brand-100 shadow-2xl p-8">
                            <div class="max-w-7xl mx-auto grid grid-cols-4 gap-8">
                                <div>
                                    <h4
                                        class="font-montserrat font-bold text-xs uppercase tracking-wider text-brand-700 mb-3">
                                        Asia Highlights</h4>
                                    <ul class="space-y-2.5 text-sm text-slate-600">
                                        <li><a href="{{ route('tours') }}"
                                                class="hover:text-brand-600 flex items-center gap-2"><i
                                                    class="fa-solid fa-arrow-right text-[10px] text-brand-500"></i>
                                                Dubai & UAE Escapes</a></li>
                                        <li><a href="#" class="hover:text-brand-600 flex items-center gap-2"><i
                                                    class="fa-solid fa-arrow-right text-[10px] text-brand-500"></i>
                                                Thailand Island Getaways</a></li>
                                        <li><a href="#" class="hover:text-brand-600 flex items-center gap-2"><i
                                                    class="fa-solid fa-arrow-right text-[10px] text-brand-500"></i> Bali
                                                & Singapore Combo</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <h4
                                        class="font-montserrat font-bold text-xs uppercase tracking-wider text-brand-700 mb-3">
                                        Europe & Beyond</h4>
                                    <ul class="space-y-2.5 text-sm text-slate-600">
                                        <li><a href="#" class="hover:text-brand-600 flex items-center gap-2"><i
                                                    class="fa-solid fa-arrow-right text-[10px] text-brand-500"></i>
                                                Swiss Alps & Paris</a></li>
                                        <li><a href="#" class="hover:text-brand-600 flex items-center gap-2"><i
                                                    class="fa-solid fa-arrow-right text-[10px] text-brand-500"></i>
                                                Italian Renaissance Tour</a></li>
                                        <li><a href="#" class="hover:text-brand-600 flex items-center gap-2"><i
                                                    class="fa-solid fa-arrow-right text-[10px] text-brand-500"></i>
                                                Nordic Lights & Fjords</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <h4
                                        class="font-montserrat font-bold text-xs uppercase tracking-wider text-brand-700 mb-3">
                                        Domestic Specials</h4>
                                    <ul class="space-y-2.5 text-sm text-slate-600">
                                        <li><a href="#" class="hover:text-brand-600 flex items-center gap-2"><i
                                                    class="fa-solid fa-arrow-right text-[10px] text-brand-500"></i>
                                                Kashmir Paradise Valley</a></li>
                                        <li><a href="#" class="hover:text-brand-600 flex items-center gap-2"><i
                                                    class="fa-solid fa-arrow-right text-[10px] text-brand-500"></i>
                                                Kerala Backwater Retreat</a></li>
                                        <li><a href="#" class="hover:text-brand-600 flex items-center gap-2"><i
                                                    class="fa-solid fa-arrow-right text-[10px] text-brand-500"></i>
                                                North East & Darjeeling</a></li>
                                    </ul>
                                </div>
                                <div class="bg-gradient-to-br from-brand-900 to-brand-950 p-5 rounded-2xl text-white">
                                    <span
                                        class="text-[10px] font-bold text-emerald-300 uppercase tracking-widest bg-white/10 px-2 py-0.5 rounded">Featured
                                        Offer</span>
                                    <p class="font-bold text-white text-base mt-2">Dubai Special 5D/4N</p>
                                    <p class="text-xs text-brand-100 mt-1">Direct flights, 4-star stays & desert safari
                                        included.</p>
                                    <a href="#"
                                        class="mt-4 inline-block text-xs font-bold text-emerald-300 hover:text-white transition">Explore
                                        Package &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <button class="text-sm font-medium hover:text-brand-600 flex items-center gap-1.5 py-6">
                            Other Services
                            <i
                                class="fa-solid fa-chevron-down text-xs transition-transform group-hover:rotate-180"></i>
                        </button>
                        <div
                            class="hidden group-hover:block absolute top-full left-0 w-56 bg-white border border-brand-100 shadow-xl rounded-2xl py-2">
                            <a href="#"
                                class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-brand-50 hover:text-brand-700"><i
                                    class="fa-solid fa-car text-brand-600 mr-2 w-4"></i> Car Rental</a>
                            <a href="#"
                                class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-brand-50 hover:text-brand-700"><i
                                    class="fa-solid fa-plane text-brand-600 mr-2 w-4"></i> Flight Booking</a>
                            <a href="#"
                                class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-brand-50 hover:text-brand-700"><i
                                    class="fa-solid fa-hotel text-brand-600 mr-2 w-4"></i> Hotel Booking</a>
                            <a href="#"
                                class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-brand-50 hover:text-brand-700"><i
                                    class="fa-solid fa-passport text-brand-600 mr-2 w-4"></i> Visa Assistance</a>
                            <!-- <a href="#"
                                class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-brand-50 hover:text-brand-700"><i
                                    class="fa-solid fa-compass text-brand-600 mr-2 w-4"></i> Experiences</a> -->
                        </div>
                    </div>

                    <a href="#blog" class="text-sm font-medium hover:text-brand-600 transition">Blog</a>
                    <a href="#contact" class="text-sm font-medium hover:text-brand-600 transition">Contact Us</a>
                </nav>

                <div class="flex items-center gap-2.5 sm:gap-3">

                    <button onclick="openSearchModal()"
                        class="w-10 h-10 rounded-full bg-brand-50 hover:bg-brand-600 text-brand-700 hover:text-white flex items-center justify-center transition shadow-sm"
                        title="Search all tours">
                        <i class="fa-solid fa-magnifying-glass text-sm"></i>
                    </button>

                    <div class="hidden sm:block relative group">
                        <button
                            class="flex items-center gap-2.5 bg-brand-600 hover:bg-brand-700 text-white font-montserrat font-bold text-xs sm:text-sm px-4 py-2.5 rounded-full shadow-lg shadow-brand-600/20 transition">
                            <span
                                class="w-6 h-6 rounded-full bg-white text-brand-700 flex items-center justify-center text-xs">
                                <i class="fa-solid fa-phone"></i>
                            </span>
                            <span>033 45280335</span>
                        </button>

                        <div class="hidden group-hover:block absolute right-0 top-full pt-2 w-80 z-50">
                            <div
                                class="bg-white rounded-2xl shadow-2xl border border-brand-100 p-5 text-left space-y-4">
                                <div class="flex items-start gap-3">
                                    <div class="text-brand-600 mt-1"><i class="fa-solid fa-phone-volume"></i></div>
                                    <div>
                                        <p class="text-xs text-gray-500 font-medium">Head Office Landline</p>
                                        <p class="font-montserrat font-bold text-sm text-slate-900">033 45280335</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="text-brand-600 mt-1"><i class="fa-solid fa-mobile-screen"></i></div>
                                    <div>
                                        <p class="text-xs text-gray-500 font-medium">Direct Support & Bookings</p>
                                        <p class="font-montserrat font-semibold text-xs text-slate-900 mt-0.5">99330
                                            72153 • 89104 79195</p>
                                        <p class="font-montserrat font-semibold text-xs text-slate-900 mt-0.5">82401
                                            18044</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="text-brand-600 mt-1"><i class="fa-solid fa-location-dot"></i></div>
                                    <div>
                                        <p class="text-xs text-gray-500 font-medium">Office Address</p>
                                        <p class="text-xs font-semibold text-slate-900 leading-tight mt-0.5">
                                            C-211, Survey Park, Santoshpur, Kolkata, WB 700075
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="text-brand-600"><i class="fa-regular fa-envelope"></i></div>
                                    <p class="text-xs font-bold text-slate-900 truncate">letsgotravels20@gmail.com</p>
                                </div>
                                <div class="pt-3 border-t border-gray-100">
                                    <a href="tel:03345280335"
                                        class="font-montserrat font-bold text-xs text-brand-600 hover:text-brand-800 flex items-center justify-between transition">
                                        <span>Call Desk Now</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button id="mobileMenuOpenBtn" onclick="toggleMobileMenu()"
                        class="lg:hidden w-10 h-10 rounded-xl bg-slate-900 text-white flex items-center justify-center shadow-md active:scale-95 transition"
                        aria-label="Open Navigation">
                        <i class="fa-solid fa-bars text-base"></i>
                    </button>

                </div>

            </div>
        </div>
    </header>

    <div id="mobileDrawer" class="fixed inset-0 z-[100] pointer-events-none transition-all duration-300">

        <div id="drawerOverlay" onclick="toggleMobileMenu()"
            class="absolute inset-0 bg-slate-950/60 backdrop-blur-sm opacity-0 transition-opacity duration-300 pointer-events-none">
        </div>

        <div id="drawerBody"
            class="absolute top-0 right-0 h-full w-full max-w-xs sm:max-w-sm bg-white shadow-2xl flex flex-col justify-between translate-x-full transition-transform duration-300 ease-out pointer-events-auto overflow-y-auto">

            <div>
                <div class="p-5 border-b border-gray-100 flex items-center justify-between bg-[#fbfdfc]">
                    <img src="{{ asset('logo.png') }}" alt="Lets go travel logo" class="h-8 w-auto">
                    <button onclick="toggleMobileMenu()"
                        class="w-9 h-9 rounded-full bg-slate-100 hover:bg-red-50 hover:text-red-600 text-slate-600 flex items-center justify-center transition">
                        <i class="fa-solid fa-xmark text-sm"></i>
                    </button>
                </div>

                <nav class="p-5 space-y-2">
                    <a href="#" onclick="toggleMobileMenu()"
                        class="flex items-center justify-between px-4 py-3 rounded-2xl bg-brand-50/70 text-brand-700 font-montserrat font-bold text-sm">
                        <span>Home</span>
                        <i class="fa-solid fa-house text-xs"></i>
                    </a>

                    <div class="border border-slate-100 rounded-2xl overflow-hidden">
                        <button onclick="toggleAccordion('accUpcoming', 'iconUpcoming')"
                            class="w-full flex items-center justify-between px-4 py-3 text-slate-800 font-semibold text-sm hover:bg-slate-50 transition">
                            <span class="flex items-center gap-2.5">
                                <i class="fa-regular fa-calendar-check text-brand-600"></i> Upcoming Tours
                            </span>
                            <i id="iconUpcoming"
                                class="fa-solid fa-chevron-down text-xs text-slate-400 transition-transform duration-300"></i>
                        </button>
                        <div id="accUpcoming" class="hidden px-4 pb-3 pt-1 bg-slate-50/50 space-y-2 text-xs">
                            <a href="#" onclick="toggleMobileMenu()"
                                class="block py-2 px-3 rounded-xl hover:bg-white text-slate-700 font-medium">Domestic
                                Travels</a>
                            <a href="#" onclick="toggleMobileMenu()"
                                class="block py-2 px-3 rounded-xl hover:bg-white text-slate-700 font-medium">International
                                Travels</a>
                        </div>
                    </div>

                    <div class="border border-slate-100 rounded-2xl overflow-hidden">
                        <button onclick="toggleAccordion('accExplore', 'iconExplore')"
                            class="w-full flex items-center justify-between px-4 py-3 text-slate-800 font-semibold text-sm hover:bg-slate-50 transition">
                            <span class="flex items-center gap-2.5">
                                <i class="fa-solid fa-earth-americas text-brand-600"></i> Explore Tours
                            </span>
                            <i id="iconExplore"
                                class="fa-solid fa-chevron-down text-xs text-slate-400 transition-transform duration-300"></i>
                        </button>
                        <div id="accExplore" class="hidden px-4 pb-3 pt-1 bg-slate-50/50 space-y-1 text-xs">
                            <p class="font-bold text-[10px] uppercase tracking-wider text-brand-700 pt-2 px-3">Asia</p>
                            <a href="#" onclick="toggleMobileMenu()"
                                class="block py-1.5 px-3 rounded-lg hover:bg-white text-slate-600">Dubai & UAE
                                Packages</a>
                            <a href="#" onclick="toggleMobileMenu()"
                                class="block py-1.5 px-3 rounded-lg hover:bg-white text-slate-600">Thailand Island
                                Trips</a>
                            <a href="#" onclick="toggleMobileMenu()"
                                class="block py-1.5 px-3 rounded-lg hover:bg-white text-slate-600">Bali & Singapore
                                Combo</a>
                            <p class="font-bold text-[10px] uppercase tracking-wider text-brand-700 pt-2 px-3">Europe
                            </p>
                            <a href="#" onclick="toggleMobileMenu()"
                                class="block py-1.5 px-3 rounded-lg hover:bg-white text-slate-600">Swiss Alps &
                                Paris</a>
                            <a href="#" onclick="toggleMobileMenu()"
                                class="block py-1.5 px-3 rounded-lg hover:bg-white text-slate-600">Italian
                                Highlights</a>
                            <p class="font-bold text-[10px] uppercase tracking-wider text-brand-700 pt-2 px-3">Domestic
                            </p>
                            <a href="#" onclick="toggleMobileMenu()"
                                class="block py-1.5 px-3 rounded-lg hover:bg-white text-slate-600">Kashmir Valley</a>
                            <a href="#" onclick="toggleMobileMenu()"
                                class="block py-1.5 px-3 rounded-lg hover:bg-white text-slate-600">Kerala
                                Backwaters</a>
                        </div>
                    </div>

                    <div class="border border-slate-100 rounded-2xl overflow-hidden">
                        <button onclick="toggleAccordion('accServices', 'iconServices')"
                            class="w-full flex items-center justify-between px-4 py-3 text-slate-800 font-semibold text-sm hover:bg-slate-50 transition">
                            <span class="flex items-center gap-2.5">
                                <i class="fa-solid fa-briefcase text-brand-600"></i> Other Services
                            </span>
                            <i id="iconServices"
                                class="fa-solid fa-chevron-down text-xs text-slate-400 transition-transform duration-300"></i>
                        </button>
                        <div id="accServices" class="hidden px-4 pb-3 pt-1 bg-slate-50/50 space-y-1 text-xs">
                            <a href="#" onclick="toggleMobileMenu()"
                                class="flex items-center gap-2 py-2 px-3 rounded-xl hover:bg-white text-slate-700"><i
                                    class="fa-solid fa-car text-brand-600 w-4"></i> Car Rental</a>
                            <a href="#" onclick="toggleMobileMenu()"
                                class="flex items-center gap-2 py-2 px-3 rounded-xl hover:bg-white text-slate-700"><i
                                    class="fa-solid fa-plane text-brand-600 w-4"></i> Flight Booking</a>
                            <a href="#" onclick="toggleMobileMenu()"
                                class="flex items-center gap-2 py-2 px-3 rounded-xl hover:bg-white text-slate-700"><i
                                    class="fa-solid fa-hotel text-brand-600 w-4"></i> Hotel Booking</a>
                            <a href="#" onclick="toggleMobileMenu()"
                                class="flex items-center gap-2 py-2 px-3 rounded-xl hover:bg-white text-slate-700"><i
                                    class="fa-solid fa-passport text-brand-600 w-4"></i> Visa Assistance</a>
                            <!-- <a href="#" onclick="toggleMobileMenu()"
                                class="flex items-center gap-2 py-2 px-3 rounded-xl hover:bg-white text-slate-700"><i
                                    class="fa-solid fa-compass text-brand-600 w-4"></i> Experiences</a> -->
                        </div>
                    </div>

                    <a href="#blog" onclick="toggleMobileMenu()"
                        class="flex items-center justify-between px-4 py-3 rounded-2xl hover:bg-slate-50 text-slate-800 font-semibold text-sm transition">
                        <span class="flex items-center gap-2.5">
                            <i class="fa-regular fa-newspaper text-brand-600"></i> Travel Blog
                        </span>
                        <i class="fa-solid fa-arrow-right text-xs text-slate-400"></i>
                    </a>

                    <a href="#contact" onclick="toggleMobileMenu()"
                        class="flex items-center justify-between px-4 py-3 rounded-2xl hover:bg-slate-50 text-slate-800 font-semibold text-sm transition">
                        <span class="flex items-center gap-2.5">
                            <i class="fa-regular fa-envelope text-brand-600"></i> Contact Us
                        </span>
                        <i class="fa-solid fa-arrow-right text-xs text-slate-400"></i>
                    </a>
                </nav>

                <div class="mx-5 p-4 rounded-2xl bg-slate-900 text-white space-y-2 text-xs">
                    <p
                        class="font-montserrat font-bold text-xs text-emerald-400 uppercase tracking-wider flex items-center gap-1.5">
                        <i class="fa-solid fa-location-dot"></i> Kolkata Office
                    </p>
                    <p class="text-slate-300 text-[11px] leading-relaxed">C-211, Survey Park, Santoshpur, Kolkata
                        700075
                    </p>
                    <p class="text-slate-400 text-[10px]">10:30 AM – 6:30 PM (Mon - Sat)</p>
                </div>
            </div>

            <div class="p-5 border-t border-gray-100 bg-white grid grid-cols-2 gap-2.5">
                <a href="tel:03345280335"
                    class="bg-brand-600 hover:bg-brand-700 text-white font-montserrat font-bold text-xs py-3 px-2 rounded-xl flex items-center justify-center gap-1.5 shadow-md shadow-brand-600/20">
                    <i class="fa-solid fa-phone"></i> Call Desk
                </a>
                <a href="https://wa.me/919933072153" target="_blank"
                    class="bg-[#25D366] hover:bg-[#20ba5a] text-white font-montserrat font-bold text-xs py-3 px-2 rounded-xl flex items-center justify-center gap-1.5 shadow-md">
                    <i class="fa-brands fa-whatsapp text-sm"></i> WhatsApp
                </a>
            </div>

        </div>
    </div>
</div>
