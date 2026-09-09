@extends('frontend.layout')
@section('content')
    <!-- ==================== SEARCH MODAL / LISTING POPUP ==================== -->
    <div id="searchModal"
        class="fixed inset-0 z-[100] hidden flex items-center justify-center bg-black/60 backdrop-blur-sm p-4">
        <div
            class="bg-white w-full min-h-[50vh] max-w-4xl rounded-3xl shadow-2xl overflow-hidden max-h-[90vh] flex flex-col border border-gray-100 animate-fadeIn">

            <!-- Modal Header -->
            <div class="p-6 border-b border-gray-100 flex items-center justify-between bg-brand-50/40">
                <div>
                    <h3 class="font-montserrat font-bold text-lg text-slate-900">Explore All Tour Destinations</h3>
                    <p class="text-xs text-slate-500">Filter by destination name, duration, or departure month</p>
                </div>
                <button onclick="closeSearchModal()"
                    class="w-9 h-9 rounded-full bg-white hover:bg-gray-100 text-gray-500 flex items-center justify-center shadow-sm transition">
                    <i class="fa-solid fa-xmark text-sm"></i>
                </button>
            </div>

            <!-- Search & Filters -->
            <div class="p-6 border-b border-gray-100 bg-white">
                <div class="relative">
                    <i class="fa-solid fa-magnifying-glass absolute left-4 top-3.5 text-gray-400"></i>
                    <input id="modalSearchInput" type="text" onkeyup="filterTours()"
                        placeholder="Search by country, city or festival (e.g. Dubai, Egypt, Switzerland, Japan)..."
                        class="w-full pl-11 pr-4 py-3 rounded-2xl bg-gray-50 border border-gray-200 text-sm focus:outline-none focus:border-brand-600 focus:bg-white transition">
                </div>
            </div>

            <!-- Tour List Container -->
            <div id="tourList" class="p-6 overflow-y-auto space-y-3 divide-y divide-gray-100">

                <!-- List Item 1 -->
                <div class="tour-item pt-3 first:pt-0 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="flex items-center gap-4 w-full sm:w-auto">
                        <img src="https://images.unsplash.com/photo-1568322445389-f64ac2515020?auto=format&fit=crop&w=150&q=80"
                            class="w-16 h-16 rounded-xl object-cover" alt="Egypt">
                        <div>
                            <h4 class="font-montserrat font-bold text-sm text-slate-900 tour-name">Egypt Sun Festival
                                Tour</h4>
                            <p class="text-xs text-slate-500">9 Nights / 10 Days • Fixed Departure: 18 Oct 2026</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 w-full sm:w-auto justify-between sm:justify-end">
                        <span class="text-xs font-bold text-brand-700">₹89,999</span>
                        <a href="#"
                            class="bg-brand-600 hover:bg-brand-700 text-white text-xs font-semibold px-4 py-2 rounded-xl transition">View
                            Package</a>
                    </div>
                </div>

                <!-- List Item 2 -->
                <div class="tour-item pt-3 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="flex items-center gap-4 w-full sm:w-auto">
                        <img src="https://images.unsplash.com/photo-1530122037265-a5f1f91d3b99?auto=format&fit=crop&w=150&q=80"
                            class="w-16 h-16 rounded-xl object-cover" alt="Europe">
                        <div>
                            <h4 class="font-montserrat font-bold text-sm text-slate-900 tour-name">Jewels of Europe
                                (Swiss & Paris)</h4>
                            <p class="text-xs text-slate-500">11 Nights / 12 Days • Fixed Departure: 21 Oct 2026</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 w-full sm:w-auto justify-between sm:justify-end">
                        <span class="text-xs font-bold text-brand-700">₹1,45,000</span>
                        <a href="#"
                            class="bg-brand-600 hover:bg-brand-700 text-white text-xs font-semibold px-4 py-2 rounded-xl transition">View
                            Package</a>
                    </div>
                </div>

                <!-- List Item 3 -->
                <div class="tour-item pt-3 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="flex items-center gap-4 w-full sm:w-auto">
                        <img src="https://images.unsplash.com/photo-1508804185872-d7badad00f7d?auto=format&fit=crop&w=150&q=80"
                            class="w-16 h-16 rounded-xl object-cover" alt="China">
                        <div>
                            <h4 class="font-montserrat font-bold text-sm text-slate-900 tour-name">Magical China &
                                Beijing Wonders</h4>
                            <p class="text-xs text-slate-500">8 Nights / 9 Days • Fixed Departure: 27 Oct 2026</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 w-full sm:w-auto justify-between sm:justify-end">
                        <span class="text-xs font-bold text-brand-700">₹98,500</span>
                        <a href="#"
                            class="bg-brand-600 hover:bg-brand-700 text-white text-xs font-semibold px-4 py-2 rounded-xl transition">View
                            Package</a>
                    </div>
                </div>

                <!-- List Item 4 -->
                <div class="tour-item pt-3 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="flex items-center gap-4 w-full sm:w-auto">
                        <img src="https://images.unsplash.com/photo-1503899036084-c55cdd92da26?auto=format&fit=crop&w=150&q=80"
                            class="w-16 h-16 rounded-xl object-cover" alt="Japan">
                        <div>
                            <h4 class="font-montserrat font-bold text-sm text-slate-900 tour-name">Captivating Japan
                                Tour (Tokyo & Kyoto)</h4>
                            <p class="text-xs text-slate-500">7 Nights / 8 Days • Fixed Departure: 27 Oct 2026</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 w-full sm:w-auto justify-between sm:justify-end">
                        <span class="text-xs font-bold text-brand-700">₹1,25,000</span>
                        <a href="#"
                            class="bg-brand-600 hover:bg-brand-700 text-white text-xs font-semibold px-4 py-2 rounded-xl transition">View
                            Package</a>
                    </div>
                </div>

                <!-- List Item 5 -->
                <div class="tour-item pt-3 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="flex items-center gap-4 w-full sm:w-auto">
                        <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?auto=format&fit=crop&w=150&q=80"
                            class="w-16 h-16 rounded-xl object-cover" alt="NZ">
                        <div>
                            <h4 class="font-montserrat font-bold text-sm text-slate-900 tour-name">Naturally New Zealand
                                Explorer</h4>
                            <p class="text-xs text-slate-500">8 Nights / 9 Days • Fixed Departure: 29 Oct 2026</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 w-full sm:w-auto justify-between sm:justify-end">
                        <span class="text-xs font-bold text-brand-700">₹1,85,000</span>
                        <a href="#"
                            class="bg-brand-600 hover:bg-brand-700 text-white text-xs font-semibold px-4 py-2 rounded-xl transition">View
                            Package</a>
                    </div>
                </div>

                <!-- List Item 6 (Dubai) -->
                <div class="tour-item pt-3 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="flex items-center gap-4 w-full sm:w-auto">
                        <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=150&q=80"
                            class="w-16 h-16 rounded-xl object-cover" alt="Dubai">
                        <div>
                            <h4 class="font-montserrat font-bold text-sm text-slate-900 tour-name">Dubai Luxury Oasis &
                                Desert Safari</h4>
                            <p class="text-xs text-slate-500">4 Nights / 5 Days • Fixed Departure: 15 Oct 2026</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 w-full sm:w-auto justify-between sm:justify-end">
                        <span class="text-xs font-bold text-brand-700">₹46,000</span>
                        <a href="#"
                            class="bg-brand-600 hover:bg-brand-700 text-white text-xs font-semibold px-4 py-2 rounded-xl transition">View
                            Package</a>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- ==================== HERO SLIDER (VIDEO + PHOTO) ==================== -->
    <section class="relative bg-black min-h-[660px] flex items-center justify-center overflow-hidden font-poppins">

        <!-- ==================== BACKGROUND SLIDES ==================== -->
        <div class="hero-slide absolute inset-0 transition-opacity duration-1000 opacity-100 pointer-events-auto">
            <video autoplay muted loop playsinline class="w-full h-full object-cover">
                <source src="{{ asset('video.mp4') }}" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/40 to-black/90"></div>
        </div>

        <div class="hero-slide absolute inset-0 transition-opacity duration-1000 opacity-0 pointer-events-none">
            <img src="{{ asset('banner.png') }}" alt="Mountain Tour" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/40 to-black/90"></div>
        </div>

        <!-- ==================== MOBILE TOP-RIGHT SQUARE CONTROLS ==================== -->
        <!-- Visible only on mobile/tablets (hidden on desktop) -->
        <div
            class="absolute top-6 right-4 z-40 flex sm:hidden items-center gap-1.5 bg-black/60 backdrop-blur-md p-1.5 rounded-xl border border-white/15 shadow-xl">
            <button onclick="document.getElementById('prevBtn').click()"
                class="w-8 h-8 rounded-lg bg-white/10 active:bg-brand-600 text-white flex items-center justify-center transition border border-white/10"
                aria-label="Previous">
                <i class="fa-solid fa-chevron-left text-xs"></i>
            </button>
            <button onclick="document.getElementById('nextBtn').click()"
                class="w-8 h-8 rounded-lg bg-white/10 active:bg-brand-600 text-white flex items-center justify-center transition border border-white/10"
                aria-label="Next">
                <i class="fa-solid fa-chevron-right text-xs"></i>
            </button>
        </div>

        <!-- ==================== DESKTOP SIDE ARROWS ==================== -->
        <!-- Visible only from sm screens up -->
        <button id="prevBtn"
            class="hidden sm:flex group absolute left-4 sm:left-8 top-1/2 -translate-y-1/2 z-30 w-12 h-12 rounded-full bg-black/40 hover:bg-brand-600 text-white items-center justify-center backdrop-blur-md transition-all duration-300 border border-white/10 shadow-lg active:scale-95">
            <i class="fa-solid fa-chevron-left text-sm transition-transform duration-300"></i>
        </button>
        <button id="nextBtn"
            class="hidden sm:flex group absolute right-4 sm:right-8 top-1/2 -translate-y-1/2 z-30 w-12 h-12 rounded-full bg-black/40 hover:bg-brand-600 text-white items-center justify-center backdrop-blur-md transition-all duration-300 border border-white/10 shadow-lg active:scale-95">
            <i class="fa-solid fa-chevron-right text-sm transition-transform duration-300"></i>
        </button>

        <!-- ==================== HERO CONTENT & SEARCH ==================== -->
        <div class="relative z-20 max-w-5xl mx-auto px-4 text-center py-20 w-full">
            <span
                class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-400 bg-black/80 backdrop-blur-md px-4 py-1.5 rounded-full border border-white/10 shadow-lg">
                Let's Go Travels • Kolkata
            </span>

            <h1 class="font-montserrat font-extrabold text-3xl sm:text-6xl text-white mt-6 leading-tight drop-shadow-md">
                Experience Nature, Cityscapes & Beyond
            </h1>

            <p class="text-gray-200 text-sm sm:text-base max-w-2xl mx-auto mt-4 font-normal drop-shadow">
                Fixed departures, domestic gems, international packages, flights, visa assistance, and private rentals
                designed for effortless journeys.
            </p>

            <!-- Search Box -->
            <div class="mt-10 max-w-5xl mx-auto w-full">
                <div
                    class="bg-white/95 backdrop-blur-xl p-4 sm:p-5 rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.3)] border border-white/60">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-3 items-center">

                        <!-- Destination -->
                        <div
                            class="lg:col-span-4 flex items-center gap-3 px-4 py-3 bg-slate-50 hover:bg-white rounded-xl border border-slate-200/80 hover:border-brand-500 focus-within:border-brand-600 focus-within:bg-white focus-within:ring-2 focus-within:ring-brand-500/20 transition-all duration-200 group">
                            <div
                                class="w-9 h-9 rounded-lg bg-white border border-slate-200 text-brand-600 flex items-center justify-center text-sm shrink-0 shadow-sm group-hover:bg-brand-600 group-hover:text-white group-hover:border-brand-600 transition-colors">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="w-full text-left min-w-0">
                                <label
                                    class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400">Destination</label>
                                <input type="text" placeholder="Where to next?"
                                    class="w-full mt-0.5 text-xs sm:text-sm font-bold text-slate-900 bg-transparent focus:outline-none placeholder:text-slate-400 placeholder:font-normal truncate">
                            </div>
                        </div>

                        <!-- Category -->
                        <div
                            class="lg:col-span-3 flex items-center gap-3 px-4 py-3 bg-slate-50 hover:bg-white rounded-xl border border-slate-200/80 hover:border-brand-500 focus-within:border-brand-600 focus-within:bg-white focus-within:ring-2 focus-within:ring-brand-500/20 transition-all duration-200 group">
                            <div
                                class="w-9 h-9 rounded-lg bg-white border border-slate-200 text-brand-600 flex items-center justify-center text-sm shrink-0 shadow-sm group-hover:bg-brand-600 group-hover:text-white group-hover:border-brand-600 transition-colors">
                                <i class="fa-solid fa-compass"></i>
                            </div>
                            <div class="w-full text-left min-w-0">
                                <label
                                    class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400">Category</label>
                                <select
                                    class="w-full mt-0.5 text-xs sm:text-sm font-bold text-slate-900 bg-transparent focus:outline-none cursor-pointer truncate">
                                    <option value="all">All Tour Types</option>
                                    <option value="international">International Tours</option>
                                    <option value="domestic">Domestic Holidays</option>
                                    <option value="fixed">Fixed Departures</option>
                                </select>
                            </div>
                        </div>

                        <!-- Departure Month -->
                        <div
                            class="lg:col-span-3 flex items-center gap-3 px-4 py-3 bg-slate-50 hover:bg-white rounded-xl border border-slate-200/80 hover:border-brand-500 focus-within:border-brand-600 focus-within:bg-white focus-within:ring-2 focus-within:ring-brand-500/20 transition-all duration-200 group">
                            <div
                                class="w-9 h-9 rounded-lg bg-white border border-slate-200 text-brand-600 flex items-center justify-center text-sm shrink-0 shadow-sm group-hover:bg-brand-600 group-hover:text-white group-hover:border-brand-600 transition-colors">
                                <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <div class="w-full text-left min-w-0">
                                <label
                                    class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400">Departure</label>
                                <select
                                    class="w-full mt-0.5 text-xs sm:text-sm font-bold text-slate-900 bg-transparent focus:outline-none cursor-pointer truncate">
                                    <option value="any">Flexible Dates</option>
                                    <option value="oct">October 2026</option>
                                    <option value="nov">November 2026</option>
                                    <option value="dec">December 2026</option>
                                    <option value="festive">Festive Specials</option>
                                </select>
                            </div>
                        </div>

                        <!-- Search Button -->
                        <div class="sm:col-span-2 lg:col-span-2 h-full">
                            <button
                                class="w-full h-full min-h-[50px] bg-slate-950 hover:bg-brand-600 text-white font-montserrat font-bold text-xs sm:text-sm rounded-xl px-5 py-3 flex items-center justify-center gap-2 shadow-lg shadow-black/10 hover:shadow-brand-600/30 transition-all duration-300 active:scale-95 group">
                                <i
                                    class="fa-solid fa-magnifying-glass text-xs transition-transform duration-300 group-hover:rotate-12"></i>
                                <span>Search</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Indicator Dots -->
        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-30 flex items-center space-x-2.5">
            <button class="slider-dot w-3 h-3 rounded-full bg-white transition"></button>
            <button class="slider-dot w-3 h-3 rounded-full bg-white/40 transition"></button>
        </div>
    </section>

    <!-- ==================== FIXED DEPARTURES ==================== -->
    <section id="upcoming" class="py-20 bg-brand-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <span
                        class="text-xs font-bold uppercase tracking-wider text-brand-600 bg-brand-100 px-3 py-1 rounded-full">Confirmed
                        Dates</span>
                    <h2 class="font-montserrat text-3xl font-bold text-slate-900 mt-2">Upcoming Fixed Departures</h2>
                </div>
                <p class="text-sm text-slate-600 max-w-sm mt-2 md:mt-0">Hassle-free group tours with dedicated Bengali &
                    English speaking tour leaders.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-7">

                <article
                    class="group relative bg-white rounded-[1rem] overflow-hidden border border-slate-100 shadow-[0_10px_40px_rgba(15,23,42,0.06)] hover:shadow-[0_25px_70px_rgba(15,23,42,0.14)] hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between">

                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('image/dubai.png') }}" alt="Dubai"
                            class="w-full h-full object-cover scale-100 group-hover:scale-110 transition-transform duration-700 ease-out">

                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-900/10 to-transparent">
                        </div>

                        <div class="absolute top-4 left-4">
                            <span
                                class="inline-flex items-center gap-1.5 bg-white/95 backdrop-blur-md text-slate-900 text-xs font-bold px-3.5 py-1.5 rounded-full shadow-lg">
                                <i class="fa-regular fa-calendar text-brand-600"></i>
                                Oct 18
                            </span>
                        </div>

                        <div class="absolute top-4 right-4">
                            <div
                                class="flex items-center gap-2 bg-slate-950/75 backdrop-blur-md border border-white/20 text-white px-3 py-1.5 rounded-full shadow-lg">
                                <div class="flex items-center gap-1">
                                    <i class="fa-solid fa-sun text-amber-300 text-xs"></i>
                                    <span class="text-xs font-bold">5 Days</span>
                                </div>
                                <span class="w-px h-3.5 bg-white/30"></span>
                                <div class="flex items-center gap-1">
                                    <i class="fa-solid fa-moon text-indigo-200 text-xs"></i>
                                    <span class="text-xs font-bold">4 Nights</span>
                                </div>
                            </div>
                        </div>

                        <div class="absolute bottom-4 left-4">
                            <span class="text-[10px] uppercase tracking-[0.2em] font-bold text-white/80">
                                United Arab Emirates
                            </span>
                            <h3 class="font-montserrat font-bold text-2xl text-white mt-0.5">
                                Dubai
                            </h3>
                        </div>
                    </div>

                    <div class="p-5 lg:p-6 flex flex-col justify-between flex-1">
                        <div>
                            <h3
                                class="font-montserrat font-bold text-lg text-slate-900 leading-snug group-hover:text-brand-700 transition-colors">
                                Dubai Oasis & Desert Safari
                            </h3>
                            <p class="text-xs text-slate-500 mt-2.5 leading-relaxed line-clamp-2">
                                Burj Khalifa 124th floor, Marina Dhow cruise, Desert BBQ & shopping tour.
                            </p>
                        </div>

                        <div class="mt-4">
                            <div class="my-4 h-px bg-gradient-to-r from-slate-100 via-slate-200 to-transparent"></div>

                            <div class="flex items-end justify-between gap-2">
                                <div>
                                    <span class="block text-[10px] uppercase tracking-[0.15em] font-bold text-slate-400">
                                        Starting from
                                    </span>
                                    <div class="flex items-baseline gap-1 mt-0.5">
                                        <span class="text-xs font-semibold text-slate-500">₹</span>
                                        <p class="font-montserrat font-extrabold text-xl text-brand-700">
                                            54,999
                                        </p>
                                    </div>
                                </div>

                                <a href="#"
                                    class="group/btn inline-flex items-center gap-1.5 bg-slate-950 text-white text-xs font-bold px-4 py-2.5 rounded-xl hover:bg-brand-600 transition-all duration-300 shadow-md">
                                    View Details
                                    <i
                                        class="fa-solid fa-arrow-right text-[10px] group-hover/btn:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <article
                    class="group relative bg-white rounded-[1rem] overflow-hidden border border-slate-100 shadow-[0_10px_40px_rgba(15,23,42,0.06)] hover:shadow-[0_25px_70px_rgba(15,23,42,0.14)] hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between">

                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('image/bali.png') }}" alt="Bali"
                            class="w-full h-full object-cover scale-100 group-hover:scale-110 transition-transform duration-700 ease-out">

                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-900/10 to-transparent">
                        </div>

                        <div class="absolute top-4 left-4">
                            <span
                                class="inline-flex items-center gap-1.5 bg-white/95 backdrop-blur-md text-slate-900 text-xs font-bold px-3.5 py-1.5 rounded-full shadow-lg">
                                <i class="fa-regular fa-calendar text-brand-600"></i>
                                Nov 05
                            </span>
                        </div>

                        <div class="absolute top-4 right-4">
                            <div
                                class="flex items-center gap-2 bg-slate-950/75 backdrop-blur-md border border-white/20 text-white px-3 py-1.5 rounded-full shadow-lg">
                                <div class="flex items-center gap-1">
                                    <i class="fa-solid fa-sun text-amber-300 text-xs"></i>
                                    <span class="text-xs font-bold">7 Days</span>
                                </div>
                                <span class="w-px h-3.5 bg-white/30"></span>
                                <div class="flex items-center gap-1">
                                    <i class="fa-solid fa-moon text-indigo-200 text-xs"></i>
                                    <span class="text-xs font-bold">6 Nights</span>
                                </div>
                            </div>
                        </div>

                        <div class="absolute bottom-4 left-4">
                            <span class="text-[10px] uppercase tracking-[0.2em] font-bold text-white/80">
                                Indonesia
                            </span>
                            <h3 class="font-montserrat font-bold text-2xl text-white mt-0.5">
                                Bali
                            </h3>
                        </div>
                    </div>

                    <div class="p-5 lg:p-6 flex flex-col justify-between flex-1">
                        <div>
                            <h3
                                class="font-montserrat font-bold text-lg text-slate-900 leading-snug group-hover:text-brand-700 transition-colors">
                                Bali & Nusa Penida Island
                            </h3>
                            <p class="text-xs text-slate-500 mt-2.5 leading-relaxed line-clamp-2">
                                Kintamani volcano, Ubud swings, luxury pool villa stay & water sports.
                            </p>
                        </div>

                        <div class="mt-4">
                            <div class="my-4 h-px bg-gradient-to-r from-slate-100 via-slate-200 to-transparent"></div>

                            <div class="flex items-end justify-between gap-2">
                                <div>
                                    <span class="block text-[10px] uppercase tracking-[0.15em] font-bold text-slate-400">
                                        Starting from
                                    </span>
                                    <div class="flex items-baseline gap-1 mt-0.5">
                                        <span class="text-xs font-semibold text-slate-500">₹</span>
                                        <p class="font-montserrat font-extrabold text-xl text-brand-700">
                                            68,500
                                        </p>
                                    </div>
                                </div>

                                <a href="#"
                                    class="group/btn inline-flex items-center gap-1.5 bg-slate-950 text-white text-xs font-bold px-4 py-2.5 rounded-xl hover:bg-brand-600 transition-all duration-300 shadow-md">
                                    View Details
                                    <i
                                        class="fa-solid fa-arrow-right text-[10px] group-hover/btn:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <article
                    class="group relative bg-white rounded-[1rem] overflow-hidden border border-slate-100 shadow-[0_10px_40px_rgba(15,23,42,0.06)] hover:shadow-[0_25px_70px_rgba(15,23,42,0.14)] hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between">

                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('image/kashmir.png') }}" alt="Kashmir"
                            class="w-full h-full object-cover scale-100 group-hover:scale-110 transition-transform duration-700 ease-out">

                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-900/10 to-transparent">
                        </div>

                        <div class="absolute top-4 left-4">
                            <span
                                class="inline-flex items-center gap-1.5 bg-white/95 backdrop-blur-md text-slate-900 text-xs font-bold px-3.5 py-1.5 rounded-full shadow-lg">
                                <i class="fa-regular fa-calendar text-brand-600"></i>
                                Dec 12
                            </span>
                        </div>

                        <div class="absolute top-4 right-4">
                            <div
                                class="flex items-center gap-2 bg-slate-950/75 backdrop-blur-md border border-white/20 text-white px-3 py-1.5 rounded-full shadow-lg">
                                <div class="flex items-center gap-1">
                                    <i class="fa-solid fa-sun text-amber-300 text-xs"></i>
                                    <span class="text-xs font-bold">6 Days</span>
                                </div>
                                <span class="w-px h-3.5 bg-white/30"></span>
                                <div class="flex items-center gap-1">
                                    <i class="fa-solid fa-moon text-indigo-200 text-xs"></i>
                                    <span class="text-xs font-bold">5 Nights</span>
                                </div>
                            </div>
                        </div>

                        <div class="absolute bottom-4 left-4">
                            <span class="text-[10px] uppercase tracking-[0.2em] font-bold text-white/80">
                                India
                            </span>
                            <h3 class="font-montserrat font-bold text-2xl text-white mt-0.5">
                                Kashmir
                            </h3>
                        </div>
                    </div>

                    <div class="p-5 lg:p-6 flex flex-col justify-between flex-1">
                        <div>
                            <h3
                                class="font-montserrat font-bold text-lg text-slate-900 leading-snug group-hover:text-brand-700 transition-colors">
                                Enchanting Kashmir Valley
                            </h3>
                            <p class="text-xs text-slate-500 mt-2.5 leading-relaxed line-clamp-2">
                                Srinagar Houseboat, Gulmarg Gondola ride, Pahalgam valleys & Sonmarg.
                            </p>
                        </div>

                        <div class="mt-4">
                            <div class="my-4 h-px bg-gradient-to-r from-slate-100 via-slate-200 to-transparent"></div>

                            <div class="flex items-end justify-between gap-2">
                                <div>
                                    <span class="block text-[10px] uppercase tracking-[0.15em] font-bold text-slate-400">
                                        Starting from
                                    </span>
                                    <div class="flex items-baseline gap-1 mt-0.5">
                                        <span class="text-xs font-semibold text-slate-500">₹</span>
                                        <p class="font-montserrat font-extrabold text-xl text-brand-700">
                                            28,900
                                        </p>
                                    </div>
                                </div>

                                <a href="#"
                                    class="group/btn inline-flex items-center gap-1.5 bg-slate-950 text-white text-xs font-bold px-4 py-2.5 rounded-xl hover:bg-brand-600 transition-all duration-300 shadow-md">
                                    View Details
                                    <i
                                        class="fa-solid fa-arrow-right text-[10px] group-hover/btn:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>


            </div>
            <!-- CTA -->
            <div class="text-center mt-12">
                <a href="#"
                    class="inline-flex items-center gap-2 bg-brand-600 hover:bg-brand-700 text-white font-semibold text-sm px-8 py-3.5 rounded-full transition shadow-lg shadow-brand-600/30">
                    Explore More Destinations <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ==================== DOMESTIC VS INTERNATIONAL ==================== -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Header -->
            <div class="text-center max-w-xl mx-auto mb-10">
                <span
                    class="text-xs font-bold uppercase tracking-wider text-brand-600 bg-brand-50 px-3 py-1 rounded-full">Curated
                    Categories</span>
                <h2 class="font-montserrat text-3xl font-bold text-slate-900 mt-2">Domestic & International</h2>
            </div>

            <!-- Dual Wide Banner Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">

                <!-- Banner 1: Domestic Holidays (Left-Aligned Banner Style) -->
                <div
                    class="group relative rounded-2xl overflow-hidden h-[220px] sm:h-[260px] max-h-[300px] shadow-lg border border-slate-100 flex items-center">
                    <!-- Background Image -->
                    <img src="{{ asset('domestic.png') }}" alt="Domestic Holidays"
                        class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">

                    <!-- Horizontal Gradient Overlay (Dark Left to Subtle Green/Clear Right) -->
                    <!-- <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/80 to-transparent"></div>
                                <div class="absolute inset-0 bg-gradient-to-t from-brand-950/40 to-transparent opacity-60"></div> -->

                    <!-- Content -->
                    <div class="relative z-10 p-6 sm:p-8 max-w-[60%] flex flex-col justify-center items-start">
                        <span class="text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-emerald-400">Discover
                            India</span>
                        <h3 class="font-montserrat font-extrabold text-xl sm:text-2xl text-white mt-1 leading-tight">
                            Domestic Holidays
                        </h3>
                        <p class="text-xs text-slate-300 mt-1.5 font-light">
                            Celebrate local cultures, hills & serene backwaters
                        </p>

                        <a href="#"
                            class="mt-4 inline-flex items-center gap-2 bg-brand-600 hover:bg-brand-500 text-white text-xs font-bold px-5 py-2.5 rounded-md shadow-md transition duration-300">
                            View Tours
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                <!-- Banner 2: International Holidays (Left-Aligned Banner Style) -->
                <div
                    class="group relative rounded-2xl overflow-hidden h-[220px] sm:h-[260px] max-h-[300px] shadow-lg border border-slate-100 flex items-center">
                    <!-- Background Image -->
                    <img src="{{ asset('international.png') }}" alt="International Holidays"
                        class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">

                    <!-- Horizontal Gradient Overlay (Dark Left to Subtle Green/Clear Right) -->
                    <!-- <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/80 to-transparent"></div>
                                <div class="absolute inset-0 bg-gradient-to-t from-brand-950/40 to-transparent opacity-60"></div> -->

                    <!-- Content -->
                    <div class="relative z-10 p-6 sm:p-8 max-w-[70%] flex flex-col justify-center items-start">
                        <span
                            class="text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-emerald-400">Worldwide
                            Escapes</span>
                        <h3 class="font-montserrat font-extrabold text-xl sm:text-2xl text-white mt-1">
                            International Tours
                        </h3>
                        <p class="text-xs text-slate-300 mt-1.5  font-light">
                            Experience the magic of global <br> wonders & visas
                        </p>

                        <a href="#"
                            class="mt-4 inline-flex items-center gap-2 bg-[#fff] hover:bg-brand-600 text-[#102a45] hover:text-white text-xs font-bold px-5 py-2.5 rounded-md shadow-md transition duration-300">
                            View Tours
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ==================== LOCATION SPOTLIGHT (DUBAI) ==================== -->
    <section class="py-16 bg-[#fbfdfc]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-xl mx-auto mb-10">
                <span
                    class="text-xs font-bold uppercase tracking-wider text-brand-600 bg-brand-50 px-3 py-1 rounded-full">Top
                    Destinations</span>
                <h2 class="font-montserrat text-3xl font-bold text-slate-900 mt-2">Affordable Places to Explore</h2>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-2 sm:gap-4">

                <a href="#"
                    class="group relative rounded-2xl overflow-hidden aspect-square shadow-sm hover:shadow-xl transition-all duration-300">
                    <img src="{{ asset('image/dubai-category.png') }}" alt="Dubai"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-black/0 group-hover:from-black/90 transition-colors">
                    </div>
                    <div
                        class="absolute left-0 right-0 bottom-4 flex flex-col items-center justify-center p-3 text-center">
                        <h3 class="font-montserrat font-bold text-white text-base sm:text-lg drop-shadow-md">Dazzling
                            Dubai</h3>
                        <span
                            class="text-[11px] text-emerald-300 mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300 font-medium">12+
                            Packages &rarr;</span>
                    </div>
                </a>

                <a href="#"
                    class="group relative rounded-2xl overflow-hidden aspect-square shadow-sm hover:shadow-xl transition-all duration-300">
                    <img src="{{ asset('image/vietanam.png') }}" alt="Vietnam"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-black/0 group-hover:from-black/90 transition-colors">
                    </div>
                    <div
                        class="absolute left-0 right-0 bottom-4 flex flex-col items-center justify-center p-3 text-center">
                        <h3 class="font-montserrat font-bold text-white text-base sm:text-lg drop-shadow-md">Vietnam
                        </h3>
                        <span
                            class="text-[11px] text-emerald-300 mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300 font-medium">8+
                            Packages &rarr;</span>
                    </div>
                </a>

                <a href="#"
                    class="group relative rounded-2xl overflow-hidden aspect-square shadow-sm hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=600&q=80"
                        alt="Vietnam & Cambodia"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-black/0 group-hover:from-black/90 transition-colors">
                    </div>
                    <div
                        class="absolute left-0 right-0 bottom-4 flex flex-col items-center justify-center p-3 text-center">
                        <h3 class="font-montserrat font-bold text-white text-base sm:text-lg drop-shadow-md leading-tight">
                            Vietnam & Cambodia</h3>
                        <span
                            class="text-[11px] text-emerald-300 mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300 font-medium">6+
                            Packages &rarr;</span>
                    </div>
                </a>

                <a href="#"
                    class="group relative rounded-2xl overflow-hidden aspect-square shadow-sm hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=600&q=80"
                        alt="Bali"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-black/0 group-hover:from-black/90 transition-colors">
                    </div>
                    <div
                        class="absolute left-0 right-0 bottom-4 flex flex-col items-center justify-center p-3 text-center">
                        <h3 class="font-montserrat font-bold text-white text-base sm:text-lg drop-shadow-md">Blissful
                            Bali</h3>
                        <span
                            class="text-[11px] text-emerald-300 mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300 font-medium">10+
                            Packages &rarr;</span>
                    </div>
                </a>

                <a href="#"
                    class="group relative rounded-2xl overflow-hidden aspect-square shadow-sm hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1596402184320-417e7178b2cd?auto=format&fit=crop&w=600&q=80"
                        alt="Indonesia"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-black/0 group-hover:from-black/90 transition-colors">
                    </div>
                    <div
                        class="absolute left-0 right-0 bottom-4 flex flex-col items-center justify-center p-3 text-center">
                        <h3 class="font-montserrat font-bold text-white text-base sm:text-lg drop-shadow-md">Iconic
                            Indonesia</h3>
                        <span
                            class="text-[11px] text-emerald-300 mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300 font-medium">5+
                            Packages &rarr;</span>
                    </div>
                </a>

                <a href="#"
                    class="group relative rounded-2xl overflow-hidden aspect-square shadow-sm hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1586861635167-e5223aadc9fe?auto=format&fit=crop&w=600&q=80"
                        alt="Sri Lanka"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-black/0 group-hover:from-black/90 transition-colors">
                    </div>
                    <div
                        class="absolute left-0 right-0 bottom-4 flex flex-col items-center justify-center p-3 text-center">
                        <h3 class="font-montserrat font-bold text-white text-base sm:text-lg drop-shadow-md">Serene
                            Srilanka</h3>
                        <span
                            class="text-[11px] text-emerald-300 mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300 font-medium">7+
                            Packages &rarr;</span>
                    </div>
                </a>

                <a href="#"
                    class="group relative rounded-2xl overflow-hidden aspect-square shadow-sm hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1525625293386-3f8f99389edd?auto=format&fit=crop&w=600&q=80"
                        alt="Singapore Malaysia"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-black/0 group-hover:from-black/90 transition-colors">
                    </div>
                    <div
                        class="absolute left-0 right-0 bottom-4 flex flex-col items-center justify-center p-3 text-center">
                        <h3 class="font-montserrat font-bold text-white text-base sm:text-lg drop-shadow-md leading-tight">
                            Singapore Malaysia</h3>
                        <span
                            class="text-[11px] text-emerald-300 mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300 font-medium">9+
                            Packages &rarr;</span>
                    </div>
                </a>

                <a href="#"
                    class="group relative rounded-2xl overflow-hidden aspect-square shadow-sm hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1552465011-b4e21bf6e79a?auto=format&fit=crop&w=600&q=80"
                        alt="Thailand"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-black/0 group-hover:from-black/90 transition-colors">
                    </div>
                    <div
                        class="absolute left-0 right-0 bottom-4 flex flex-col items-center justify-center p-3 text-center">
                        <h3 class="font-montserrat font-bold text-white text-base sm:text-lg drop-shadow-md">Thailand
                        </h3>
                        <span
                            class="text-[11px] text-emerald-300 mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300 font-medium">14+
                            Packages &rarr;</span>
                    </div>
                </a>

            </div>

        </div>
    </section>

    <!-- ==================== PROMO BANNER ==================== -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="relative rounded-3xl overflow-hidden bg-brand-950 text-white min-h-[420px] sm:min-h-[380px] flex items-center border border-brand-900 shadow-2xl">

                <div
                    class="promo-slide absolute inset-0 transition-opacity duration-700 opacity-100 pointer-events-auto p-8 sm:p-14 flex items-center">
                    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1600&q=80"
                        alt="Maldives" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-brand-950 via-brand-950/80 to-transparent"></div>

                    <div class="relative z-10 max-w-xl">
                        <span
                            class="bg-brand-600 text-white text-xs font-bold px-3.5 py-1 rounded-full uppercase tracking-wider shadow">
                            Exclusive Offer
                        </span>
                        <h2 class="font-montserrat font-bold text-3xl sm:text-4xl mt-4 leading-tight text-white">
                            Maldives Water Villa Holiday
                        </h2>
                        <p class="text-xs sm:text-sm text-brand-100 mt-3 font-light leading-relaxed">
                            5 Days, 4 Nights of paradise with speed boat transfers, breakfast & dinner, and
                            complimentary snorkeling gear.
                        </p>
                        <div class="flex items-center gap-6 mt-6">
                            <div>
                                <span class="text-xs text-brand-200">Starting From</span>
                                <p class="text-2xl font-bold font-montserrat text-emerald-300">
                                    ₹94,999 <span class="text-xs text-brand-200 font-normal">/ person</span>
                                </p>
                            </div>
                            <a href="#"
                                class="bg-white text-brand-950 hover:bg-brand-600 hover:text-white font-semibold text-xs px-6 py-3 rounded-full transition shadow-lg">
                                Book This Deal
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="promo-slide absolute inset-0 transition-opacity duration-700 opacity-0 pointer-events-none p-8 sm:p-14 flex items-center">
                    <img src="https://images.unsplash.com/photo-1530122037265-a5f1f91d3b99?auto=format&fit=crop&w=1600&q=80"
                        alt="Switzerland" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-brand-950 via-brand-950/80 to-transparent"></div>

                    <div class="relative z-10 max-w-xl">
                        <span
                            class="bg-brand-600 text-white text-xs font-bold px-3.5 py-1 rounded-full uppercase tracking-wider shadow">
                            Winter Special
                        </span>
                        <h2 class="font-montserrat font-bold text-3xl sm:text-4xl mt-4 leading-tight text-white">
                            Swiss Alps & Scenic Express
                        </h2>
                        <p class="text-xs sm:text-sm text-brand-100 mt-3 font-light leading-relaxed">
                            7 Days, 6 Nights exploring Mt. Titlis cable cars, Lucerne lake cruise, and panoramic Glacier
                            Express train rides.
                        </p>
                        <div class="flex items-center gap-6 mt-6">
                            <div>
                                <span class="text-xs text-brand-200">Starting From</span>
                                <p class="text-2xl font-bold font-montserrat text-emerald-300">
                                    ₹1,35,000 <span class="text-xs text-brand-200 font-normal">/ person</span>
                                </p>
                            </div>
                            <a href="#"
                                class="bg-white text-brand-950 hover:bg-brand-600 hover:text-white font-semibold text-xs px-6 py-3 rounded-full transition shadow-lg">
                                Book This Deal
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="promo-slide absolute inset-0 transition-opacity duration-700 opacity-0 pointer-events-none p-8 sm:p-14 flex items-center">
                    <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=1600&q=80"
                        alt="Bali" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-brand-950 via-brand-950/80 to-transparent"></div>

                    <div class="relative z-10 max-w-xl">
                        <span
                            class="bg-brand-600 text-white text-xs font-bold px-3.5 py-1 rounded-full uppercase tracking-wider shadow">
                            Early Bird Deal
                        </span>
                        <h2 class="font-montserrat font-bold text-3xl sm:text-4xl mt-4 leading-tight text-white">
                            Bali Luxury Villa & Island Tour
                        </h2>
                        <p class="text-xs sm:text-sm text-brand-100 mt-3 font-light leading-relaxed">
                            6 Days, 5 Nights with private pool villa stay, Nusa Penida island hopping, and traditional
                            Balinese spa therapy.
                        </p>
                        <div class="flex items-center gap-6 mt-6">
                            <div>
                                <span class="text-xs text-brand-200">Starting From</span>
                                <p class="text-2xl font-bold font-montserrat text-emerald-300">
                                    ₹62,999 <span class="text-xs text-brand-200 font-normal">/ person</span>
                                </p>
                            </div>
                            <a href="#"
                                class="bg-white text-brand-950 hover:bg-brand-600 hover:text-white font-semibold text-xs px-6 py-3 rounded-full transition shadow-lg">
                                Book This Deal
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Promo Banner Square Slider Buttons -->
                <div class="absolute right-6 sm:right-10 bottom-6 z-20 flex items-center gap-2">
                    <button id="promoPrevBtn"
                        class="group w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-white/10 hover:bg-brand-600 text-white flex items-center justify-center backdrop-blur-md transition-all duration-300 border border-white/20 shadow-lg active:scale-95"
                        aria-label="Previous Promo">
                        <i class="fa-solid fa-chevron-left text-xs transition-transform duration-300"></i>
                    </button>
                    <button id="promoNextBtn"
                        class="group w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-white/10 hover:bg-brand-600 text-white flex items-center justify-center backdrop-blur-md transition-all duration-300 border border-white/20 shadow-lg active:scale-95"
                        aria-label="Next Promo">
                        <i class="fa-solid fa-chevron-right text-xs transition-transform duration-300"></i>
                    </button>
                </div>

                <div class="absolute left-8 sm:left-14 bottom-6 z-20 flex items-center gap-2">
                    <button class="promo-dot w-2.5 h-2.5 rounded-full bg-emerald-400 transition-all"></button>
                    <button class="promo-dot w-2.5 h-2.5 rounded-full bg-white/30 transition-all"></button>
                    <button class="promo-dot w-2.5 h-2.5 rounded-full bg-white/30 transition-all"></button>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== BLOG SECTION ==================== -->
    <section id="blog" class="py-24 bg-[#f8faf9] relative overflow-hidden">

        <div class="absolute -top-40 -left-40 w-96 h-96 bg-brand-200/30 rounded-full blur-3xl pointer-events-none">
        </div>
        <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-brand-100/40 rounded-full blur-3xl pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16">
                <div>
                    <div
                        class="inline-flex items-center gap-2 bg-brand-100/80 border border-brand-200 px-3.5 py-1.5 rounded-full text-brand-800 text-xs font-bold uppercase tracking-widest mb-3">
                        <i class="fa-solid fa-feather-pointed text-brand-600"></i>
                        <span>Curated Travel Journals</span>
                    </div>
                    <h2 class="font-montserrat font-extrabold text-3xl sm:text-4xl text-slate-900 tracking-tight">
                        Travel Stories, Guides & Inspiration
                    </h2>
                </div>
                <p class="text-sm text-slate-500 max-w-sm mt-3 md:mt-0 leading-relaxed font-light">
                    Expert itineraries, local secrets, visa guidelines, and packing tips handcrafted by our seasoned
                    tour managers.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-10">

                <article
                    class="group bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-[0_10px_35px_rgba(0,0,0,0.04)] hover:shadow-[0_20px_60px_rgba(5,150,105,0.12)] hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between">
                    <div>
                        <div class="relative h-60 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=800&q=80"
                                alt="Dubai Skyline"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-transparent to-transparent">
                            </div>

                            <span
                                class="absolute top-4 left-4 bg-white/95 backdrop-blur-md text-slate-900 text-[11px] font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full shadow-md">
                                Travel Tips
                            </span>

                            <span
                                class="absolute bottom-4 right-4 bg-black/60 backdrop-blur-md text-white text-[11px] font-medium px-3 py-1 rounded-full flex items-center gap-1.5">
                                <i class="fa-regular fa-clock text-emerald-400"></i> 5 min read
                            </span>
                        </div>

                        <div class="p-6 sm:p-7">
                            <div class="flex items-center gap-2 text-xs text-slate-400 mb-2.5 font-medium">
                                <span>Oct 12, 2026</span>
                                <span>•</span>
                                <span class="text-brand-600 font-semibold">City Guides</span>
                            </div>

                            <h3
                                class="font-montserrat font-bold text-lg sm:text-xl text-slate-900 leading-snug group-hover:text-brand-600 transition-colors line-clamp-2">
                                <a href="#">The Ultimate First-Timer's Guide to Exploring Dubai in 2026</a>
                            </h3>

                            <p class="text-xs sm:text-sm text-slate-500 mt-3 leading-relaxed line-clamp-2 font-light">
                                Essential etiquette rules, public transport shortcuts, budget-friendly foodie havens,
                                and desert safari secrets.
                            </p>
                        </div>
                    </div>

                    <div class="px-6 sm:px-7 pb-6 pt-4 border-t border-slate-100/80 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-8 h-8 rounded-full bg-brand-100 text-brand-800 font-bold text-xs flex items-center justify-center">
                                AK
                            </div>
                            <span class="text-xs font-semibold text-slate-700">Amit Karmakar</span>
                        </div>
                        <a href="#"
                            class="text-xs font-bold text-brand-600 group-hover:text-brand-700 flex items-center gap-1">
                            Read <i
                                class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </article>

                <article
                    class="group bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-[0_10px_35px_rgba(0,0,0,0.04)] hover:shadow-[0_20px_60px_rgba(5,150,105,0.12)] hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between">
                    <div>
                        <div class="relative h-60 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&w=800&q=80"
                                alt="Visa Passport"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-transparent to-transparent">
                            </div>

                            <span
                                class="absolute top-4 left-4 bg-white/95 backdrop-blur-md text-slate-900 text-[11px] font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full shadow-md">
                                Visa Advisory
                            </span>

                            <span
                                class="absolute bottom-4 right-4 bg-black/60 backdrop-blur-md text-white text-[11px] font-medium px-3 py-1 rounded-full flex items-center gap-1.5">
                                <i class="fa-regular fa-clock text-emerald-400"></i> 7 min read
                            </span>
                        </div>

                        <div class="p-6 sm:p-7">
                            <div class="flex items-center gap-2 text-xs text-slate-400 mb-2.5 font-medium">
                                <span>Nov 04, 2026</span>
                                <span>•</span>
                                <span class="text-brand-600 font-semibold">Documentation</span>
                            </div>

                            <h3
                                class="font-montserrat font-bold text-lg sm:text-xl text-slate-900 leading-snug group-hover:text-brand-600 transition-colors line-clamp-2">
                                <a href="#">Fast-Track Schengen & UK Tourist Visa Checklist for Indian Travelers</a>
                            </h3>

                            <p class="text-xs sm:text-sm text-slate-500 mt-3 leading-relaxed line-clamp-2 font-light">
                                Step-by-step paperwork breakdown, financial proofs checklist, and interview preparation
                                tactics for quick approvals.
                            </p>
                        </div>
                    </div>

                    <div class="px-6 sm:px-7 pb-6 pt-4 border-t border-slate-100/80 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-8 h-8 rounded-full bg-slate-900 text-white font-bold text-xs flex items-center justify-center">
                                SD
                            </div>
                            <span class="text-xs font-semibold text-slate-700">Sneha Dutta</span>
                        </div>
                        <a href="#"
                            class="text-xs font-bold text-brand-600 group-hover:text-brand-700 flex items-center gap-1">
                            Read <i
                                class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </article>

                <article
                    class="group bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-[0_10px_35px_rgba(0,0,0,0.04)] hover:shadow-[0_20px_60px_rgba(5,150,105,0.12)] hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between">
                    <div>
                        <div class="relative h-60 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1599661046827-dacff0c0f09a?auto=format&fit=crop&w=800&q=80"
                                alt="Kashmir Valley"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-transparent to-transparent">
                            </div>

                            <span
                                class="absolute top-4 left-4 bg-white/95 backdrop-blur-md text-slate-900 text-[11px] font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full shadow-md">
                                Domestic Escapes
                            </span>

                            <span
                                class="absolute bottom-4 right-4 bg-black/60 backdrop-blur-md text-white text-[11px] font-medium px-3 py-1 rounded-full flex items-center gap-1.5">
                                <i class="fa-regular fa-clock text-emerald-400"></i> 4 min read
                            </span>
                        </div>

                        <div class="p-6 sm:p-7">
                            <div class="flex items-center gap-2 text-xs text-slate-400 mb-2.5 font-medium">
                                <span>Dec 01, 2026</span>
                                <span>•</span>
                                <span class="text-brand-600 font-semibold">Destinations</span>
                            </div>

                            <h3
                                class="font-montserrat font-bold text-lg sm:text-xl text-slate-900 leading-snug group-hover:text-brand-600 transition-colors line-clamp-2">
                                <a href="#">Top 5 Hidden Hill Stations in North & North-East India</a>
                            </h3>

                            <p class="text-xs sm:text-sm text-slate-500 mt-3 leading-relaxed line-clamp-2 font-light">
                                Escape the crowds and immerse yourself in pristine valleys, pine forests, organic
                                homestays, and crisp mountain views.
                            </p>
                        </div>
                    </div>

                    <div class="px-6 sm:px-7 pb-6 pt-4 border-t border-slate-100/80 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-8 h-8 rounded-full bg-brand-100 text-brand-800 font-bold text-xs flex items-center justify-center">
                                RG
                            </div>
                            <span class="text-xs font-semibold text-slate-700">Rohan Guha</span>
                        </div>
                        <a href="#"
                            class="text-xs font-bold text-brand-600 group-hover:text-brand-700 flex items-center gap-1">
                            Read <i
                                class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </article>

            </div>
            <div class="text-center mt-12">
                <a href="#"
                    class="inline-flex items-center gap-2 bg-brand-600 hover:bg-brand-700 text-white font-semibold text-sm px-8 py-3.5 rounded-full transition shadow-lg shadow-brand-600/30">
                    View All <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>


        </div>
    </section>

    <section class="py-20 bg-[#f8faf9] relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12 gap-4">
                <div>
                    <div
                        class="inline-flex items-center gap-2 bg-emerald-100 text-brand-800 text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full mb-3">
                        <i class="fa-solid fa-star text-amber-500"></i>
                        <span>Rated 4.9/5 by 2,400+ Travelers</span>
                    </div>
                    <h2 class="font-montserrat font-extrabold text-3xl sm:text-4xl text-slate-900 tracking-tight">
                        What Our Travelers Say
                    </h2>
                </div>

                <div class="flex items-center gap-2">
                    <button onclick="scrollTestimonials(-1)"
                        class="group w-9 h-9 sm:w-10 sm:h-10 rounded-xl border border-slate-200 bg-white hover:bg-brand-600 hover:border-brand-600 hover:text-white text-slate-700 flex items-center justify-center shadow-sm transition-all duration-300 active:scale-95"
                        aria-label="Previous Testimonial">
                        <i class="fa-solid fa-chevron-left text-xs transition-transform duration-300"></i>
                    </button>
                    <button onclick="scrollTestimonials(1)"
                        class="group w-9 h-9 sm:w-10 sm:h-10 rounded-xl border border-slate-200 bg-white hover:bg-brand-600 hover:border-brand-600 hover:text-white text-slate-700 flex items-center justify-center shadow-sm transition-all duration-300 active:scale-95"
                        aria-label="Next Testimonial">
                        <i class="fa-solid fa-chevron-right text-xs transition-transform duration-300"></i>
                    </button>
                </div>
            </div>

            <div id="testiSlider" class="flex gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory pb-6 no-scrollbar"
                style="scrollbar-width: none; -ms-overflow-style: none;">

                <div
                    class="snap-start flex-shrink-0 w-[300px] sm:w-[350px] bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-lg hover:shadow-xl transition flex flex-col justify-between">

                    <div class="relative h-60 w-full overflow-hidden group cursor-pointer"
                        onclick="playVideo('https://www.youtube-nocookie.com/embed/dQw4w9WgXcQ')">
                        <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=700&q=80"
                            alt="Dubai Story"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/30 to-transparent">
                        </div>

                        <span
                            class="absolute top-4 left-4 bg-red-600 text-white text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full flex items-center gap-1.5 shadow">
                            <i class="fa-solid fa-circle text-[6px] animate-ping"></i> Video Story
                        </span>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-12 h-12 rounded-full bg-white text-brand-700 flex items-center justify-center shadow-2xl group-hover:scale-110 group-hover:bg-brand-600 group-hover:text-white transition">
                                <i class="fa-solid fa-play ml-0.5 text-sm"></i>
                            </div>
                        </div>

                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <p class="text-xs font-semibold text-emerald-300">Dubai Explorer Group</p>
                            <h4 class="font-montserrat font-bold text-sm">Soumyajit's Dubai Trip Vlog</h4>
                        </div>
                    </div>

                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <div class="flex text-amber-400 text-xs mb-2">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i>
                            </div>
                            <p class="text-xs text-slate-600 italic leading-relaxed">
                                "The desert safari and Atlantis waterpark arrangements were top-notch. Everything was on
                                time from Kolkata airport."
                            </p>
                        </div>

                        <div class="mt-5 pt-4 border-t border-gray-100 flex items-center gap-3">
                            <div
                                class="w-9 h-9 rounded-full bg-brand-600 text-white font-bold text-xs flex items-center justify-center">
                                SM
                            </div>
                            <div>
                                <p class="font-bold text-xs text-slate-900">Soumyajit Mondal</p>
                                <p class="text-[10px] text-slate-400">Santoshpur, Kolkata</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="snap-start flex-shrink-0 w-[300px] sm:w-[350px] bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-lg hover:shadow-xl transition flex flex-col justify-between p-6">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <div
                                class="w-9 h-9 rounded-xl bg-brand-50 text-brand-600 flex items-center justify-center text-sm font-bold">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>
                            <div class="flex text-amber-400 text-xs">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i>
                            </div>
                        </div>

                        <h4 class="font-montserrat font-bold text-base text-slate-900 mb-2">
                            "Magical Kashmir Fixed Departure"
                        </h4>
                        <p class="text-xs text-slate-600 leading-relaxed italic">
                            "Their Kashmir group tour took all stress away. Dedicated tour leader, warm houseboat stays
                            in Dal Lake, and punctual cabs throughout the trip."
                        </p>
                    </div>

                    <div class="mt-8 pt-4 border-t border-gray-100 flex items-center gap-3">
                        <div
                            class="w-9 h-9 rounded-full bg-brand-900 text-emerald-300 font-bold text-xs flex items-center justify-center">
                            AB
                        </div>
                        <div>
                            <p class="font-bold text-xs text-slate-900">Arup Banerjee</p>
                            <p class="text-[10px] text-slate-400">Salt Lake, Kolkata • Kashmir Tour</p>
                        </div>
                    </div>
                </div>

                <div
                    class="snap-start flex-shrink-0 w-[300px] sm:w-[350px] bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-lg hover:shadow-xl transition flex flex-col justify-between">

                    <div class="relative h-60 w-full overflow-hidden group cursor-pointer"
                        onclick="playVideo('https://www.youtube-nocookie.com/embed/dQw4w9WgXcQ')">
                        <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=700&q=80"
                            alt="Bali Story"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/30 to-transparent">
                        </div>

                        <span
                            class="absolute top-4 left-4 bg-red-600 text-white text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full flex items-center gap-1.5 shadow">
                            <i class="fa-solid fa-circle text-[6px] animate-ping"></i> Video Story
                        </span>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-12 h-12 rounded-full bg-white text-brand-700 flex items-center justify-center shadow-2xl group-hover:scale-110 group-hover:bg-brand-600 group-hover:text-white transition">
                                <i class="fa-solid fa-play ml-0.5 text-sm"></i>
                            </div>
                        </div>

                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <p class="text-xs font-semibold text-emerald-300">Bali Honeymoon</p>
                            <h4 class="font-montserrat font-bold text-sm">Rima &amp; Rahul's Bali Vlog</h4>
                        </div>
                    </div>

                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <div class="flex text-amber-400 text-xs mb-2">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i>
                            </div>
                            <p class="text-xs text-slate-600 italic leading-relaxed">
                                "The private pool villa in Ubud was sheer bliss. Swift visa support and fast WhatsApp
                                replies by the Kolkata team."
                            </p>
                        </div>

                        <div class="mt-5 pt-4 border-t border-gray-100 flex items-center gap-3">
                            <div
                                class="w-9 h-9 rounded-full bg-slate-900 text-white font-bold text-xs flex items-center justify-center">
                                RD
                            </div>
                            <div>
                                <p class="font-bold text-xs text-slate-900">Rima Das</p>
                                <p class="text-[10px] text-slate-400">Jadavpur, Kolkata</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="snap-start flex-shrink-0 w-[300px] sm:w-[350px] bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-lg hover:shadow-xl transition flex flex-col justify-between p-6">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <div
                                class="w-9 h-9 rounded-xl bg-brand-50 text-brand-600 flex items-center justify-center text-sm font-bold">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>
                            <div class="flex text-amber-400 text-xs">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i>
                            </div>
                        </div>

                        <h4 class="font-montserrat font-bold text-base text-slate-900 mb-2">
                            "Fast Visa & Swiss Rail Passes"
                        </h4>
                        <p class="text-xs text-slate-600 leading-relaxed italic">
                            "Got our Schengen visa approved in just 10 days thanks to the Let's Go Travels team. Mt.
                            Titlis and Glacier Express are unforgettable."
                        </p>
                    </div>

                    <div class="mt-8 pt-4 border-t border-gray-100 flex items-center gap-3">
                        <div
                            class="w-9 h-9 rounded-full bg-brand-600 text-white font-bold text-xs flex items-center justify-center">
                            PM
                        </div>
                        <div>
                            <p class="font-bold text-xs text-slate-900">Poulomi Mukherjee</p>
                            <p class="text-[10px] text-slate-400">Garia, Kolkata • Europe Tour</p>
                        </div>
                    </div>
                </div>

            </div>

            <div
                class="mt-16 relative rounded-3xl overflow-hidden bg-gradient-to-r from-brand-950 via-slate-900 to-brand-950 text-white p-8 sm:p-12 shadow-2xl border border-brand-900/60 flex flex-col lg:flex-row items-center justify-between gap-8">

                <div
                    class="absolute -right-10 -bottom-10 w-60 h-60 bg-brand-600/20 rounded-full blur-2xl pointer-events-none">
                </div>

                <div class="relative z-10 max-w-xl text-center lg:text-left">
                    <span
                        class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-emerald-400 bg-brand-900/80 px-3 py-1 rounded-full border border-emerald-500/30">
                        Weekly Travel Digest
                    </span>
                    <h3 class="font-montserrat font-extrabold text-2xl sm:text-3xl text-white mt-3">
                        Get Secret Deals & Travel Guides Directly In Your Inbox
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-300 mt-2 font-light">
                        Join 15,000+ wanderers from Kolkata. Receive bespoke holiday alerts, festival departure dates,
                        and early bird discounts.
                    </p>
                </div>

                <div class="relative z-10 w-full lg:w-auto flex flex-col sm:flex-row items-center gap-3">
                    <div class="relative w-full sm:w-80">
                        <i
                            class="fa-regular fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                        <input type="email" placeholder="Enter your email address..."
                            class="w-full bg-white/10 backdrop-blur-md border border-white/15 text-white placeholder-slate-400 text-xs rounded-2xl pl-10 pr-4 py-3.5 focus:outline-none focus:border-brand-500 transition">
                    </div>
                    <button
                        class="w-full sm:w-auto whitespace-nowrap bg-brand-600 hover:bg-brand-500 text-white font-montserrat font-bold text-xs px-7 py-3.5 rounded-2xl shadow-lg shadow-brand-600/30 transition flex items-center justify-center gap-2">
                        <span>Subscribe Now</span>
                        <i class="fa-solid fa-paper-plane text-[10px]"></i>
                    </button>
                </div>

            </div>
        </div>
    </section>

    <div id="videoModalBox"
        class="fixed inset-0 z-[150] hidden bg-black/80 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="relative w-full max-w-2xl bg-black rounded-2xl overflow-hidden shadow-2xl border border-white/20">
            <button onclick="closeVideo()"
                class="absolute top-3 right-3 z-20 w-8 h-8 rounded-full bg-black/70 text-white flex items-center justify-center hover:bg-red-600 transition">
                <i class="fa-solid fa-xmark text-sm"></i>
            </button>
            <div class="aspect-video w-full">
                <iframe id="modalIframe" class="w-full h-full" src="" frameborder="0"
                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection
