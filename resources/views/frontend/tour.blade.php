@extends('frontend.layout')
@section('content')
    <style>
        /* List View Container & Max Image Height Constraints */
        .list-view-container {
            display: flex !important;
            flex-direction: column !important;
            gap: 1.5rem !important;
        }

        .list-view-container .tour-card {
            display: flex !important;
            flex-direction: column !important;
            max-height: none;
        }

        @media (min-width: 768px) {
            .list-view-container .tour-card {
                flex-direction: row !important;
                align-items: stretch !important;
                max-height: 266px !important;
            }

            .list-view-container .tour-card .card-img-wrapper {
                width: 38% !important;
                height: 100% !important;
                max-height: 266px !important;
                flex-shrink: 0 !important;
            }

            .list-view-container .tour-card .card-img-wrapper img {
                height: 100% !important;
                max-height: 266px !important;
                object-fit: cover !important;
            }

            .list-view-container .tour-card .card-content-wrapper {
                width: 62% !important;
                display: flex !important;
                flex-direction: column !important;
                justify-content: space-between !important;
                overflow: hidden !important;
            }
        }
    </style>
    <!-- Compact Breadcrumb Banner -->
    <div class="bg-gradient-to-r from-brand-950 via-slate-900 to-brand-950 py-5 text-white border-b border-brand-900/50">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2">
            <div>
                <h1 class="font-montserrat font-bold text-lg sm:text-xl text-white">Explore Tour Packages</h1>
                <p class="text-[11px] text-slate-400">Discover handpicked destinations & fixed departures</p>
            </div>
            <nav class="flex items-center gap-2 text-xs font-medium text-slate-400">
                <a href="{{ route('home') }}" class="hover:text-emerald-400">Home</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
                <span class="text-emerald-400 font-semibold">Tours Listing</span>
            </nav>
        </div>
    </div>

    <!-- Main Section -->
    <section class="py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 items-start">

                <!-- Rich Filter Sidebar -->
                <aside class="bg-white rounded-2xl border border-slate-200/80 shadow-sm p-5 space-y-6 sticky top-24">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                        <h3 class="font-montserrat font-bold text-slate-900 text-md flex items-center gap-2">
                            <i class="fa-solid fa-sliders text-brand-600"></i> Filter Packages
                        </h3>
                        <button onclick="resetAllFilters()"
                            class="text-[11px] font-semibold text-brand-600 hover:text-brand-800 transition">Reset
                            All</button>
                    </div>

                    <!-- Destination -->
                    <div class="space-y-3">
                        <label class="block text-xs font-bold text-slate-900 uppercase tracking-wider">Destination
                            Region</label>
                        <div class="space-y-2 text-xs text-slate-600">
                            <label class="flex items-center gap-2.5 cursor-pointer hover:text-slate-900">
                                <input type="checkbox" value="africa" onchange="applyFilters()"
                                    class="dest-checkbox w-4 h-4 rounded border-slate-300 text-brand-600 focus:ring-brand-500 accent-brand-600">
                                <span>Africa</span>
                            </label>
                            <label class="flex items-center gap-2.5 cursor-pointer hover:text-slate-900">
                                <input type="checkbox" value="asia" onchange="applyFilters()"
                                    class="dest-checkbox w-4 h-4 rounded border-slate-300 text-brand-600 focus:ring-brand-500 accent-brand-600">
                                <span>Asia (Dubai, Bali, Japan, Vietnam)</span>
                            </label>
                            <label class="flex items-center gap-2.5 cursor-pointer hover:text-slate-900">
                                <input type="checkbox" value="domestic" onchange="applyFilters()"
                                    class="dest-checkbox w-4 h-4 rounded border-slate-300 text-brand-600 focus:ring-brand-500 accent-brand-600">
                                <span>Domestic India (Kashmir, Kerala)</span>
                            </label>
                            <label class="flex items-center gap-2.5 cursor-pointer hover:text-slate-900">
                                <input type="checkbox" value="europe" onchange="applyFilters()"
                                    class="dest-checkbox w-4 h-4 rounded border-slate-300 text-brand-600 focus:ring-brand-500 accent-brand-600">
                                <span>Europe (Switzerland, Paris)</span>
                            </label>
                        </div>
                    </div>

                    <div class="h-px bg-slate-100"></div>

                    <!-- Price Slider -->
                    <div class="space-y-3">
                        <label class="block text-xs font-bold text-slate-900 uppercase tracking-wider">Max Budget
                            (INR)</label>
                        <input id="priceRange" type="range" min="20000" max="200000" step="5000" value="200000"
                            oninput="updatePriceLabel(this.value); applyFilters();"
                            class="w-full h-1.5 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-brand-600">
                        <div class="flex items-center justify-between text-xs font-semibold text-slate-700">
                            <span>₹20,000</span>
                            <span id="priceDisplay"
                                class="text-brand-700 bg-brand-50 px-2 py-0.5 rounded border border-brand-200">Up to
                                ₹2,00,000</span>
                        </div>
                    </div>

                    <div class="h-px bg-slate-100"></div>

                    <!-- Duration Slider -->
                    <div class="space-y-3">
                        <label class="block text-xs font-bold text-slate-900 uppercase tracking-wider">Max Duration</label>
                        <input id="durationRange" type="range" min="3" max="15" step="1" value="15"
                            oninput="updateDurationLabel(this.value); applyFilters();"
                            class="w-full h-1.5 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-brand-600">
                        <div class="flex items-center justify-between text-xs font-semibold text-slate-700">
                            <span>3 Days</span>
                            <span id="durationDisplay"
                                class="text-brand-700 bg-brand-50 px-2 py-0.5 rounded border border-brand-200">Up to 15
                                Days</span>
                        </div>
                    </div>

                    <div class="h-px bg-slate-100"></div>

                    <!-- Tour Type / Category -->
                    <div class="space-y-3">
                        <label class="block text-xs font-bold text-slate-900 uppercase tracking-wider">Tour Category</label>
                        <div class="space-y-2 text-xs text-slate-600">
                            <label class="flex items-center gap-2.5 cursor-pointer hover:text-slate-900">
                                <input type="checkbox"
                                    class="w-4 h-4 rounded border-slate-300 text-brand-600 focus:ring-brand-500 accent-brand-600">
                                <span>Fixed Group Departures</span>
                            </label>
                            <label class="flex items-center gap-2.5 cursor-pointer hover:text-slate-900">
                                <input type="checkbox"
                                    class="w-4 h-4 rounded border-slate-300 text-brand-600 focus:ring-brand-500 accent-brand-600">
                                <span>Custom / Honeymoon Private</span>
                            </label>
                            <label class="flex items-center gap-2.5 cursor-pointer hover:text-slate-900">
                                <input type="checkbox"
                                    class="w-4 h-4 rounded border-slate-300 text-brand-600 focus:ring-brand-500 accent-brand-600">
                                <span>Family Special</span>
                            </label>
                        </div>
                    </div>

                    <div class="h-px bg-slate-100"></div>

                    <!-- Included Amenities -->
                    <div class="space-y-3">
                        <label class="block text-xs font-bold text-slate-900 uppercase tracking-wider">Inclusions</label>
                        <div class="grid grid-cols-2 gap-2 text-[11px] text-slate-600">
                            <span class="flex items-center gap-1.5 bg-slate-50 p-2 rounded-lg border border-slate-100"><i
                                    class="fa-solid fa-plane text-brand-600 text-[10px]"></i> Flights</span>
                            <span class="flex items-center gap-1.5 bg-slate-50 p-2 rounded-lg border border-slate-100"><i
                                    class="fa-solid fa-hotel text-brand-600 text-[10px]"></i> 4★ Hotels</span>
                            <span class="flex items-center gap-1.5 bg-slate-50 p-2 rounded-lg border border-slate-100"><i
                                    class="fa-solid fa-utensils text-brand-600 text-[10px]"></i> Meals</span>
                            <span class="flex items-center gap-1.5 bg-slate-50 p-2 rounded-lg border border-slate-100"><i
                                    class="fa-solid fa-passport text-brand-600 text-[10px]"></i> Visa Help</span>
                        </div>
                    </div>
                </aside>

                <!-- Right Listings Container -->
                <main class="lg:col-span-3 space-y-6">

                    <!-- Search & Switcher Bar -->
                    <div
                        class="bg-white p-3.5 rounded-2xl border border-slate-200/80 shadow-sm flex flex-col sm:flex-row items-center justify-between gap-3">
                        <div class="relative w-full sm:flex-1">
                            <i
                                class="fa-solid fa-magnifying-glass absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                            <input id="searchInput" type="text" onkeyup="applyFilters()"
                                placeholder="Search tour name, country, or attractions..."
                                class="w-full pl-9 pr-4 py-2 rounded-xl bg-slate-50 border border-slate-200 text-xs focus:outline-none focus:border-brand-600 focus:bg-white transition">
                        </div>

                        <div class="flex items-center gap-2.5 w-full sm:w-auto justify-end">
                            <select id="sortSelect" onchange="sortCards()"
                                class="text-xs bg-slate-50 border border-slate-200 text-slate-700 rounded-xl px-3 py-2 font-medium focus:outline-none focus:border-brand-600">
                                <option value="default">Sort: Recommended</option>
                                <option value="price-asc">Price: Low to High</option>
                                <option value="price-desc">Price: High to Low</option>
                                <option value="days-asc">Duration: Short to Long</option>
                                <option value="days-desc">Duration: Long to Short</option>
                            </select>

                            <div
                                class="flex items-center border border-slate-200 rounded-xl overflow-hidden bg-slate-50 p-0.5">
                                <button id="listViewBtn" onclick="setViewMode('list')"
                                    class="w-8 h-7 flex items-center justify-center text-xs text-slate-500 hover:text-brand-600 rounded-lg transition"
                                    title="List View">
                                    <i class="fa-solid fa-bars"></i>
                                </button>
                                <button id="gridViewBtn" onclick="setViewMode('grid')"
                                    class="w-8 h-7 flex items-center justify-center text-xs bg-white text-brand-600 shadow-sm rounded-lg"
                                    title="Grid View">
                                    <i class="fa-solid fa-grip"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Cards Container -->
                    <div id="toursContainer" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

                        <!-- Tour 1: Egypt -->
                        <div class="tour-card group bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-[0_4px_20px_rgba(0,0,0,0.04)] hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between"
                            data-region="africa" data-price="89999" data-days="9" data-nights="10">
                            <div class="card-img-wrapper relative h-48 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1568322445389-f64ac2515020?auto=format&fit=crop&w=600&q=80"
                                    alt="Egypt"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            </div>

                            <div class="card-content-wrapper flex flex-col justify-between flex-1">
                                <div class="p-4 space-y-3">
                                    <div class="flex items-start justify-between gap-2">
                                        <div>
                                            <h3
                                                class="tour-title font-montserrat font-bold text-slate-900 text-md group-hover:text-brand-600 transition">
                                                Sun Festival Egypt</h3>
                                            <p class="tour-desc text-[11px] text-slate-500 mt-0.5">Sunlight illuminates Abu
                                                Simbel statues & Pyramids</p>
                                        </div>
                                        <span
                                            class="text-xs font-extrabold text-brand-700 whitespace-nowrap">₹89,999</span>
                                    </div>

                                    <div class="flex items-center justify-between text-xs">
                                        <div class="flex items-center gap-1">
                                            <div class="flex text-amber-400 text-[10px]">
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star-half-stroke"></i>
                                            </div>
                                            <span class="text-[11px] font-bold text-slate-700 ml-1">4.7</span>
                                            <span class="text-[10px] text-slate-400">(24)</span>
                                        </div>
                                        <span
                                            class="text-[10px] font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200/60">
                                            All Inclusive
                                        </span>
                                    </div>

                                    <div
                                        class="grid grid-cols-3 gap-1 bg-slate-50 rounded-xl p-2 text-center text-[10px] border border-slate-100">
                                        <div>
                                            <span class="text-slate-400 block text-[9px]">Nights</span>
                                            <strong class="text-slate-800 font-montserrat">10</strong>
                                        </div>
                                        <div class="border-x border-slate-200">
                                            <span class="text-slate-400 block text-[9px]">Days</span>
                                            <strong class="text-slate-800 font-montserrat">9</strong>
                                        </div>
                                        <div>
                                            <span class="text-slate-400 block text-[9px]">Destinations</span>
                                            <strong class="text-slate-800 font-montserrat">1C / 7 Cities</strong>
                                        </div>
                                    </div>

                                    <div class="text-[11px]">
                                        <span class="font-bold text-brand-700">Tour Highlights:</span>
                                        <p class="tour-highlight text-slate-500 text-[11px] truncate mt-0.5">Economy Return
                                            Airfare, Nile Cruise, Abu Simbel</p>
                                    </div>
                                </div>

                                <div class="p-4 pt-0 grid grid-cols-2 gap-2">
                                    <button
                                        class="w-full bg-brand-600 hover:bg-brand-700 text-white font-montserrat font-bold text-xs py-2.5 rounded-xl transition active:scale-95">Enquire
                                        Now</button>
                                    <button
                                        class="w-full border border-slate-200 hover:border-brand-600 hover:text-brand-600 text-slate-700 font-montserrat font-semibold text-xs py-2.5 rounded-xl transition">View
                                        Details</button>
                                </div>
                            </div>
                        </div>

                        <!-- Tour 2: Vietnam -->
                        <div class="tour-card group bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-[0_4px_20px_rgba(0,0,0,0.04)] hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between"
                            data-region="asia" data-price="52000" data-days="8" data-nights="7">
                            <div class="card-img-wrapper relative h-48 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1528127269322-539801943592?auto=format&fit=crop&w=600&q=80"
                                    alt="Vietnam"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            </div>

                            <div class="card-content-wrapper flex flex-col justify-between flex-1">
                                <div class="p-4 space-y-3">
                                    <div class="flex items-start justify-between gap-2">
                                        <div>
                                            <h3
                                                class="tour-title font-montserrat font-bold text-slate-900 text-md group-hover:text-brand-600 transition">
                                                Vietnam with Ninh Binh</h3>
                                            <p class="tour-desc text-[11px] text-slate-500 mt-0.5">Scenic Tam Coc boat ride
                                                & Halong Bay cruises</p>
                                        </div>
                                        <span
                                            class="text-xs font-extrabold text-brand-700 whitespace-nowrap">₹52,000</span>
                                    </div>

                                    <div class="flex items-center justify-between text-xs">
                                        <div class="flex items-center gap-1">
                                            <div class="flex text-amber-400 text-[10px]">
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i>
                                            </div>
                                            <span class="text-[11px] font-bold text-slate-700 ml-1">4.7</span>
                                            <span class="text-[10px] text-slate-400">(18)</span>
                                        </div>
                                        <span
                                            class="text-[10px] font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200/60">
                                            All Inclusive
                                        </span>
                                    </div>

                                    <div
                                        class="grid grid-cols-3 gap-1 bg-slate-50 rounded-xl p-2 text-center text-[10px] border border-slate-100">
                                        <div>
                                            <span class="text-slate-400 block text-[9px]">Nights</span>
                                            <strong class="text-slate-800 font-montserrat">7</strong>
                                        </div>
                                        <div class="border-x border-slate-200">
                                            <span class="text-slate-400 block text-[9px]">Days</span>
                                            <strong class="text-slate-800 font-montserrat">8</strong>
                                        </div>
                                        <div>
                                            <span class="text-slate-400 block text-[9px]">Destinations</span>
                                            <strong class="text-slate-800 font-montserrat">1C / 5 Cities</strong>
                                        </div>
                                    </div>

                                    <div class="text-[11px]">
                                        <span class="font-bold text-brand-700">Tour Highlights:</span>
                                        <p class="tour-highlight text-slate-500 text-[11px] truncate mt-0.5">Return Economy
                                            Air Fare, Halong Cruise, Local Meals</p>
                                    </div>
                                </div>

                                <div class="p-4 pt-0 grid grid-cols-2 gap-2">
                                    <button
                                        class="w-full bg-brand-600 hover:bg-brand-700 text-white font-montserrat font-bold text-xs py-2.5 rounded-xl transition active:scale-95">Enquire
                                        Now</button>
                                    <button
                                        class="w-full border border-slate-200 hover:border-brand-600 hover:text-brand-600 text-slate-700 font-montserrat font-semibold text-xs py-2.5 rounded-xl transition">View
                                        Details</button>
                                </div>
                            </div>
                        </div>

                        <!-- Tour 3: Dubai Luxury Oasis -->
                        <div class="tour-card group bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-[0_4px_20px_rgba(0,0,0,0.04)] hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between"
                            data-region="asia" data-price="46000" data-days="5" data-nights="4">
                            <div class="card-img-wrapper relative h-48 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=600&q=80"
                                    alt="Dubai"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            </div>

                            <div class="card-content-wrapper flex flex-col justify-between flex-1">
                                <div class="p-4 space-y-3">
                                    <div class="flex items-start justify-between gap-2">
                                        <div>
                                            <h3
                                                class="tour-title font-montserrat font-bold text-slate-900 text-md group-hover:text-brand-600 transition">
                                                Dubai Luxury Oasis</h3>
                                            <p class="tour-desc text-[11px] text-slate-500 mt-0.5">Burj Khalifa 124th floor
                                                & Desert Safari</p>
                                        </div>
                                        <span
                                            class="text-xs font-extrabold text-brand-700 whitespace-nowrap">₹46,000</span>
                                    </div>

                                    <div class="flex items-center justify-between text-xs">
                                        <div class="flex items-center gap-1">
                                            <div class="flex text-amber-400 text-[10px]">
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i>
                                            </div>
                                            <span class="text-[11px] font-bold text-slate-700 ml-1">4.9</span>
                                            <span class="text-[10px] text-slate-400">(41)</span>
                                        </div>
                                        <span
                                            class="text-[10px] font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200/60">
                                            Fixed Departure
                                        </span>
                                    </div>

                                    <div
                                        class="grid grid-cols-3 gap-1 bg-slate-50 rounded-xl p-2 text-center text-[10px] border border-slate-100">
                                        <div>
                                            <span class="text-slate-400 block text-[9px]">Nights</span>
                                            <strong class="text-slate-800 font-montserrat">4</strong>
                                        </div>
                                        <div class="border-x border-slate-200">
                                            <span class="text-slate-400 block text-[9px]">Days</span>
                                            <strong class="text-slate-800 font-montserrat">5</strong>
                                        </div>
                                        <div>
                                            <span class="text-slate-400 block text-[9px]">Destinations</span>
                                            <strong class="text-slate-800 font-montserrat">1C / 2 Cities</strong>
                                        </div>
                                    </div>

                                    <div class="text-[11px]">
                                        <span class="font-bold text-brand-700">Tour Highlights:</span>
                                        <p class="tour-highlight text-slate-500 text-[11px] truncate mt-0.5">Direct Flights
                                            from CCU, BBQ Safari, Marina Dhow</p>
                                    </div>
                                </div>

                                <div class="p-4 pt-0 grid grid-cols-2 gap-2">
                                    <button
                                        class="w-full bg-brand-600 hover:bg-brand-700 text-white font-montserrat font-bold text-xs py-2.5 rounded-xl transition active:scale-95">Enquire
                                        Now</button>
                                    <button
                                        class="w-full border border-slate-200 hover:border-brand-600 hover:text-brand-600 text-slate-700 font-montserrat font-semibold text-xs py-2.5 rounded-xl transition">View
                                        Details</button>
                                </div>
                            </div>
                        </div>

                        <!-- Tour 4: Bali Luxury Villa -->
                        <div class="tour-card group bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-[0_4px_20px_rgba(0,0,0,0.04)] hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between"
                            data-region="asia" data-price="68500" data-days="7" data-nights="6">
                            <div class="card-img-wrapper relative h-48 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=600&q=80"
                                    alt="Bali"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            </div>

                            <div class="card-content-wrapper flex flex-col justify-between flex-1">
                                <div class="p-4 space-y-3">
                                    <div class="flex items-start justify-between gap-2">
                                        <div>
                                            <h3
                                                class="tour-title font-montserrat font-bold text-slate-900 text-md group-hover:text-brand-600 transition">
                                                Bali & Nusa Penida</h3>
                                            <p class="tour-desc text-[11px] text-slate-500 mt-0.5">Private pool villa in
                                                Ubud & island hopping</p>
                                        </div>
                                        <span
                                            class="text-xs font-extrabold text-brand-700 whitespace-nowrap">₹68,500</span>
                                    </div>

                                    <div class="flex items-center justify-between text-xs">
                                        <div class="flex items-center gap-1">
                                            <div class="flex text-amber-400 text-[10px]">
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i>
                                            </div>
                                            <span class="text-[11px] font-bold text-slate-700 ml-1">4.8</span>
                                            <span class="text-[10px] text-slate-400">(36)</span>
                                        </div>
                                        <span
                                            class="text-[10px] font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200/60">
                                            Honeymoon Special
                                        </span>
                                    </div>

                                    <div
                                        class="grid grid-cols-3 gap-1 bg-slate-50 rounded-xl p-2 text-center text-[10px] border border-slate-100">
                                        <div>
                                            <span class="text-slate-400 block text-[9px]">Nights</span>
                                            <strong class="text-slate-800 font-montserrat">6</strong>
                                        </div>
                                        <div class="border-x border-slate-200">
                                            <span class="text-slate-400 block text-[9px]">Days</span>
                                            <strong class="text-slate-800 font-montserrat">7</strong>
                                        </div>
                                        <div>
                                            <span class="text-slate-400 block text-[9px]">Destinations</span>
                                            <strong class="text-slate-800 font-montserrat">1C / 4 Cities</strong>
                                        </div>
                                    </div>

                                    <div class="text-[11px]">
                                        <span class="font-bold text-brand-700">Tour Highlights:</span>
                                        <p class="tour-highlight text-slate-500 text-[11px] truncate mt-0.5">Kintamani
                                            Volcano, Watersports, Pool Villa</p>
                                    </div>
                                </div>

                                <div class="p-4 pt-0 grid grid-cols-2 gap-2">
                                    <button
                                        class="w-full bg-brand-600 hover:bg-brand-700 text-white font-montserrat font-bold text-xs py-2.5 rounded-xl transition active:scale-95">Enquire
                                        Now</button>
                                    <button
                                        class="w-full border border-slate-200 hover:border-brand-600 hover:text-brand-600 text-slate-700 font-montserrat font-semibold text-xs py-2.5 rounded-xl transition">View
                                        Details</button>
                                </div>
                            </div>
                        </div>

                        <!-- Tour 5: Kashmir Valley -->
                        <div class="tour-card group bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-[0_4px_20px_rgba(0,0,0,0.04)] hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between"
                            data-region="domestic" data-price="28900" data-days="6" data-nights="5">
                            <div class="card-img-wrapper relative h-48 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1599661046827-dacff0c0f09a?auto=format&fit=crop&w=600&q=80"
                                    alt="Kashmir"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            </div>

                            <div class="card-content-wrapper flex flex-col justify-between flex-1">
                                <div class="p-4 space-y-3">
                                    <div class="flex items-start justify-between gap-2">
                                        <div>
                                            <h3
                                                class="tour-title font-montserrat font-bold text-slate-900 text-md group-hover:text-brand-600 transition">
                                                Enchanting Kashmir Valley</h3>
                                            <p class="tour-desc text-[11px] text-slate-500 mt-0.5">Houseboats in Dal Lake &
                                                Gulmarg snow gondola</p>
                                        </div>
                                        <span
                                            class="text-xs font-extrabold text-brand-700 whitespace-nowrap">₹28,900</span>
                                    </div>

                                    <div class="flex items-center justify-between text-xs">
                                        <div class="flex items-center gap-1">
                                            <div class="flex text-amber-400 text-[10px]">
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star-half-stroke"></i>
                                            </div>
                                            <span class="text-[11px] font-bold text-slate-700 ml-1">4.9</span>
                                            <span class="text-[10px] text-slate-400">(62)</span>
                                        </div>
                                        <span
                                            class="text-[10px] font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200/60">
                                            Domestic Gem
                                        </span>
                                    </div>

                                    <div
                                        class="grid grid-cols-3 gap-1 bg-slate-50 rounded-xl p-2 text-center text-[10px] border border-slate-100">
                                        <div>
                                            <span class="text-slate-400 block text-[9px]">Nights</span>
                                            <strong class="text-slate-800 font-montserrat">5</strong>
                                        </div>
                                        <div class="border-x border-slate-200">
                                            <span class="text-slate-400 block text-[9px]">Days</span>
                                            <strong class="text-slate-800 font-montserrat">6</strong>
                                        </div>
                                        <div>
                                            <span class="text-slate-400 block text-[9px]">Destinations</span>
                                            <strong class="text-slate-800 font-montserrat">India / 4 Valleys</strong>
                                        </div>
                                    </div>

                                    <div class="text-[11px]">
                                        <span class="font-bold text-brand-700">Tour Highlights:</span>
                                        <p class="tour-highlight text-slate-500 text-[11px] truncate mt-0.5">Srinagar
                                            Shikara, Gulmarg, Pahalgam, Sonmarg</p>
                                    </div>
                                </div>

                                <div class="p-4 pt-0 grid grid-cols-2 gap-2">
                                    <button
                                        class="w-full bg-brand-600 hover:bg-brand-700 text-white font-montserrat font-bold text-xs py-2.5 rounded-xl transition active:scale-95">Enquire
                                        Now</button>
                                    <button
                                        class="w-full border border-slate-200 hover:border-brand-600 hover:text-brand-600 text-slate-700 font-montserrat font-semibold text-xs py-2.5 rounded-xl transition">View
                                        Details</button>
                                </div>
                            </div>
                        </div>

                        <!-- Tour 6: Swiss Alps & Paris -->
                        <div class="tour-card group bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-[0_4px_20px_rgba(0,0,0,0.04)] hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between"
                            data-region="europe" data-price="145000" data-days="12" data-nights="11">
                            <div class="card-img-wrapper relative h-48 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1530122037265-a5f1f91d3b99?auto=format&fit=crop&w=600&q=80"
                                    alt="Swiss Alps"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            </div>

                            <div class="card-content-wrapper flex flex-col justify-between flex-1">
                                <div class="p-4 space-y-3">
                                    <div class="flex items-start justify-between gap-2">
                                        <div>
                                            <h3
                                                class="tour-title font-montserrat font-bold text-slate-900 text-md group-hover:text-brand-600 transition">
                                                Jewels of Europe (Swiss & Paris)</h3>
                                            <p class="tour-desc text-[11px] text-slate-500 mt-0.5">Mt. Titlis cable cars &
                                                Eiffel Tower summit</p>
                                        </div>
                                        <span
                                            class="text-xs font-extrabold text-brand-700 whitespace-nowrap">₹1,45,000</span>
                                    </div>

                                    <div class="flex items-center justify-between text-xs">
                                        <div class="flex items-center gap-1">
                                            <div class="flex text-amber-400 text-[10px]">
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i>
                                            </div>
                                            <span class="text-[11px] font-bold text-slate-700 ml-1">4.9</span>
                                            <span class="text-[10px] text-slate-400">(29)</span>
                                        </div>
                                        <span
                                            class="text-[10px] font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200/60">
                                            All Inclusive
                                        </span>
                                    </div>

                                    <div
                                        class="grid grid-cols-3 gap-1 bg-slate-50 rounded-xl p-2 text-center text-[10px] border border-slate-100">
                                        <div>
                                            <span class="text-slate-400 block text-[9px]">Nights</span>
                                            <strong class="text-slate-800 font-montserrat">11</strong>
                                        </div>
                                        <div class="border-x border-slate-200">
                                            <span class="text-slate-400 block text-[9px]">Days</span>
                                            <strong class="text-slate-800 font-montserrat">12</strong>
                                        </div>
                                        <div>
                                            <span class="text-slate-400 block text-[9px]">Destinations</span>
                                            <strong class="text-slate-800 font-montserrat">2C / 6 Cities</strong>
                                        </div>
                                    </div>

                                    <div class="text-[11px]">
                                        <span class="font-bold text-brand-700">Tour Highlights:</span>
                                        <p class="tour-highlight text-slate-500 text-[11px] truncate mt-0.5">Glacier
                                            Express, Swiss Rail Pass, Schengen Visa Assistance</p>
                                    </div>
                                </div>

                                <div class="p-4 pt-0 grid grid-cols-2 gap-2">
                                    <button
                                        class="w-full bg-brand-600 hover:bg-brand-700 text-white font-montserrat font-bold text-xs py-2.5 rounded-xl transition active:scale-95">Enquire
                                        Now</button>
                                    <button
                                        class="w-full border border-slate-200 hover:border-brand-600 hover:text-brand-600 text-slate-700 font-montserrat font-semibold text-xs py-2.5 rounded-xl transition">View
                                        Details</button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- No Results Fallback -->
                    <div id="noResults" class="hidden text-center py-16 bg-white rounded-2xl border border-slate-200/80">
                        <i class="fa-solid fa-map-location-dot text-4xl text-slate-300 mb-3"></i>
                        <h4 class="font-montserrat font-bold text-slate-800 text-base">No Matching Tours Found</h4>
                        <p class="text-xs text-slate-500 mt-1">Try adjusting your filters, price range, or search keyword.
                        </p>
                        <button onclick="resetAllFilters()"
                            class="mt-4 px-5 py-2 bg-brand-600 hover:bg-brand-700 text-white text-xs font-bold rounded-xl shadow-md transition">Reset
                            All Filters</button>
                    </div>

                    <!-- Pagination -->
                    <div class="flex items-center justify-between pt-6 border-t border-slate-200/80">
                        <p class="text-xs text-slate-500">Showing <span id="visibleCount"
                                class="font-bold text-slate-800">6</span> tour packages</p>
                        <div class="flex items-center gap-1.5">
                            <button
                                class="w-8 h-8 rounded-lg border border-slate-200 text-slate-400 flex items-center justify-center text-xs"><i
                                    class="fa-solid fa-chevron-left"></i></button>
                            <button class="w-8 h-8 rounded-lg bg-brand-600 text-white font-bold text-xs">1</button>
                            <button
                                class="w-8 h-8 rounded-lg border border-slate-200 text-slate-700 text-xs font-semibold">2</button>
                            <button
                                class="w-8 h-8 rounded-lg border border-slate-200 text-slate-700 flex items-center justify-center text-xs"><i
                                    class="fa-solid fa-chevron-right"></i></button>
                        </div>
                    </div>

                </main>
            </div>
        </div>
    </section>

    <!-- Filter & View Switcher Script -->
    <script>
        const toursContainer = document.getElementById('toursContainer');
        const cards = Array.from(document.querySelectorAll('.tour-card'));
        const searchInput = document.getElementById('searchInput');
        const priceRange = document.getElementById('priceRange');
        const durationRange = document.getElementById('durationRange');
        const priceDisplay = document.getElementById('priceDisplay');
        const durationDisplay = document.getElementById('durationDisplay');
        const visibleCount = document.getElementById('visibleCount');
        const noResults = document.getElementById('noResults');
        const gridViewBtn = document.getElementById('gridViewBtn');
        const listViewBtn = document.getElementById('listViewBtn');

        function updatePriceLabel(val) {
            priceDisplay.innerText = `Up to ₹${Number(val).toLocaleString('en-IN')}`;
        }

        function updateDurationLabel(val) {
            durationDisplay.innerText = `Up to ${val} Days`;
        }

        function applyFilters() {
            const query = searchInput.value.trim().toLowerCase();
            const maxPrice = Number(priceRange.value);
            const maxDays = Number(durationRange.value);

            const checkedDestinations = Array.from(document.querySelectorAll('.dest-checkbox:checked'))
                .map(cb => cb.value.toLowerCase());

            let matchedCount = 0;

            cards.forEach(card => {
                const title = card.querySelector('.tour-title').innerText.toLowerCase();
                const desc = card.querySelector('.tour-desc').innerText.toLowerCase();
                const highlight = card.querySelector('.tour-highlight').innerText.toLowerCase();
                const region = card.getAttribute('data-region').toLowerCase();
                const price = Number(card.getAttribute('data-price'));
                const days = Number(card.getAttribute('data-days'));

                const matchesQuery = query === '' || title.includes(query) || desc.includes(query) || highlight
                    .includes(query);
                const matchesRegion = checkedDestinations.length === 0 || checkedDestinations.includes(region);
                const matchesPrice = price <= maxPrice;
                const matchesDuration = days <= maxDays;

                if (matchesQuery && matchesRegion && matchesPrice && matchesDuration) {
                    card.style.display = 'flex';
                    matchedCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            visibleCount.innerText = matchedCount;

            if (matchedCount === 0) {
                noResults.classList.remove('hidden');
            } else {
                noResults.classList.add('hidden');
            }
        }

        function resetAllFilters() {
            searchInput.value = '';
            priceRange.value = 200000;
            durationRange.value = 15;
            updatePriceLabel(200000);
            updateDurationLabel(15);
            document.querySelectorAll('.dest-checkbox').forEach(cb => cb.checked = false);
            document.getElementById('sortSelect').value = 'default';
            applyFilters();
            sortCards();
        }

        function sortCards() {
            const sortBy = document.getElementById('sortSelect').value;

            const sortedCards = [...cards].sort((a, b) => {
                const priceA = Number(a.getAttribute('data-price'));
                const priceB = Number(b.getAttribute('data-price'));
                const daysA = Number(a.getAttribute('data-days'));
                const daysB = Number(b.getAttribute('data-days'));

                if (sortBy === 'price-asc') return priceA - priceB;
                if (sortBy === 'price-desc') return priceB - priceA;
                if (sortBy === 'days-asc') return daysA - daysB;
                if (sortBy === 'days-desc') return daysB - daysA;
                return 0;
            });

            sortedCards.forEach(card => toursContainer.appendChild(card));
        }

        function setViewMode(mode) {
            if (mode === 'list') {
                toursContainer.classList.remove('grid', 'grid-cols-1', 'md:grid-cols-2', 'xl:grid-cols-3');
                toursContainer.classList.add('list-view-container');

                listViewBtn.className =
                    'w-8 h-7 flex items-center justify-center text-xs bg-white text-brand-600 shadow-sm rounded-lg';
                gridViewBtn.className =
                    'w-8 h-7 flex items-center justify-center text-xs text-slate-500 hover:text-brand-600 rounded-lg transition';
            } else {
                toursContainer.classList.remove('list-view-container');
                toursContainer.classList.add('grid', 'grid-cols-1', 'md:grid-cols-2', 'xl:grid-cols-3');

                gridViewBtn.className =
                    'w-8 h-7 flex items-center justify-center text-xs bg-white text-brand-600 shadow-sm rounded-lg';
                listViewBtn.className =
                    'w-8 h-7 flex items-center justify-center text-xs text-slate-500 hover:text-brand-600 rounded-lg transition';
            }
        }
    </script>
@endsection
