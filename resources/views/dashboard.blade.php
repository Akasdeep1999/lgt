<x-app-layout>
    <!-- Welcome Header Banner -->
    <div class="relative overflow-hidden rounded-3xl bg-white border border-slate-200/80 p-8 lg:p-10 shadow-sm">
        <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div class="max-w-2xl">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs font-bold uppercase tracking-wider mb-3">
                    <i class="fa-solid fa-location-crosshairs"></i> Travel Admin
                </div>
                <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">
                    Welcome back, {{ Auth::user()->name }} 👋
                </h1>
                <p class="mt-2 text-slate-500 text-sm sm:text-base leading-relaxed">
                    Track tour packages, accept real-time bookings, and review visitor inquiries from one centralized
                    desk.
                </p>
            </div>

            <div class="flex items-center gap-3 shrink-0">
                <a href="#"
                    class="px-5 py-2.5 rounded-xl bg-white hover:bg-slate-50 text-slate-700 font-semibold text-sm border border-slate-200 shadow-sm transition duration-200 flex items-center gap-2">
                    <i class="fa-regular fa-file-lines text-slate-400"></i> Reports
                </a>
                <a href="#"
                    class="px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-sm shadow-md shadow-emerald-600/20 transition duration-200 flex items-center gap-2">
                    <i class="fa-solid fa-plus text-xs"></i> New Package
                </a>
            </div>
        </div>
    </div>

    <!-- Metric Cards (Standard White Theme) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        <!-- Card 1 -->
        <div
            class="rounded-2xl bg-white border border-slate-200/80 p-6 shadow-sm hover:shadow-md transition duration-200">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total Bookings</span>
                <div
                    class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 border border-emerald-100 flex items-center justify-center">
                    <i class="fa-solid fa-passport text-base"></i>
                </div>
            </div>
            <div class="mt-4 flex items-baseline gap-2">
                <span class="text-3xl font-extrabold text-slate-900 tracking-tight">1,429</span>
                <span class="text-xs font-bold text-emerald-600 flex items-center">
                    <i class="fa-solid fa-arrow-trend-up mr-1 text-[10px]"></i> +12%
                </span>
            </div>
            <p class="mt-1 text-xs text-slate-400">Compared to last month</p>
        </div>

        <!-- Card 2 -->
        <div
            class="rounded-2xl bg-white border border-slate-200/80 p-6 shadow-sm hover:shadow-md transition duration-200">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Active Destinations</span>
                <div
                    class="w-10 h-10 rounded-xl bg-teal-50 text-teal-600 border border-teal-100 flex items-center justify-center">
                    <i class="fa-solid fa-earth-americas text-base"></i>
                </div>
            </div>
            <div class="mt-4 flex items-baseline gap-2">
                <span class="text-3xl font-extrabold text-slate-900 tracking-tight">48</span>
                <span class="text-xs font-bold text-emerald-600">
                    Live Tours
                </span>
            </div>
            <p class="mt-1 text-xs text-slate-400">Across 14 countries</p>
        </div>

        <!-- Card 3 -->
        <div
            class="rounded-2xl bg-white border border-slate-200/80 p-6 shadow-sm hover:shadow-md transition duration-200">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Travelers This Mo.</span>
                <div
                    class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 border border-emerald-100 flex items-center justify-center">
                    <i class="fa-solid fa-person-walking-luggage text-base"></i>
                </div>
            </div>
            <div class="mt-4 flex items-baseline gap-2">
                <span class="text-3xl font-extrabold text-slate-900 tracking-tight">3,890</span>
                <span class="text-xs font-bold text-emerald-600 flex items-center">
                    <i class="fa-solid fa-arrow-trend-up mr-1 text-[10px]"></i> +18%
                </span>
            </div>
            <p class="mt-1 text-xs text-slate-400">Seasonal visitor traffic</p>
        </div>

        <!-- Card 4 -->
        <div
            class="rounded-2xl bg-white border border-slate-200/80 p-6 shadow-sm hover:shadow-md transition duration-200">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Estimated Revenue</span>
                <div
                    class="w-10 h-10 rounded-xl bg-slate-100 text-slate-800 border border-slate-200 flex items-center justify-center">
                    <i class="fa-solid fa-vault text-base"></i>
                </div>
            </div>
            <div class="mt-4 flex items-baseline gap-2">
                <span class="text-3xl font-extrabold text-slate-900 tracking-tight">$78,450</span>
                <span class="text-xs font-bold text-emerald-600 flex items-center">
                    <i class="fa-solid fa-arrow-trend-up mr-1 text-[10px]"></i> +9.4%
                </span>
            </div>
            <p class="mt-1 text-xs text-slate-400">Total processed volume</p>
        </div>
    </div>

    <!-- Second Row: Quick Actions & Website Details -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- Quick Actions (2 cols on large screen) -->
        <div class="lg:col-span-2 rounded-2xl bg-white border border-slate-200/80 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-slate-100 flex items-center justify-between">
                <div>
                    <h2 class="font-bold text-base text-slate-900">Quick Actions</h2>
                    <p class="text-xs text-slate-400 mt-0.5">Common shortcuts for everyday travel operations</p>
                </div>
                <span class="text-xs text-slate-500 bg-slate-100 px-3 py-1 rounded-full font-medium">
                    Shortcuts
                </span>
            </div>

            <div class="p-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
                <a href="#"
                    class="p-4 rounded-xl bg-slate-50/70 border border-slate-200/70 hover:border-emerald-500/50 hover:bg-emerald-50/20 transition duration-200 flex items-start gap-4 group">
                    <div
                        class="w-10 h-10 rounded-lg bg-emerald-100/70 text-emerald-700 flex items-center justify-center shrink-0 group-hover:bg-emerald-600 group-hover:text-white transition duration-200">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-slate-800 group-hover:text-emerald-700 transition">Add
                            Destination</h3>
                        <p class="text-xs text-slate-500 mt-1 leading-relaxed">Add new cities, landmarks, and regional
                            guidelines.</p>
                    </div>
                </a>

                <a href="#"
                    class="p-4 rounded-xl bg-slate-50/70 border border-slate-200/70 hover:border-emerald-500/50 hover:bg-emerald-50/20 transition duration-200 flex items-start gap-4 group">
                    <div
                        class="w-10 h-10 rounded-lg bg-emerald-100/70 text-emerald-700 flex items-center justify-center shrink-0 group-hover:bg-emerald-600 group-hover:text-white transition duration-200">
                        <i class="fa-solid fa-suitcase-rolling"></i>
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-slate-800 group-hover:text-emerald-700 transition">Create Tour
                            Package</h3>
                        <p class="text-xs text-slate-500 mt-1 leading-relaxed">Configure prices, schedules, and
                            discounts for groups.</p>
                    </div>
                </a>

                <a href="#"
                    class="p-4 rounded-xl bg-slate-50/70 border border-slate-200/70 hover:border-emerald-500/50 hover:bg-emerald-50/20 transition duration-200 flex items-start gap-4 group">
                    <div
                        class="w-10 h-10 rounded-lg bg-emerald-100/70 text-emerald-700 flex items-center justify-center shrink-0 group-hover:bg-emerald-600 group-hover:text-white transition duration-200">
                        <i class="fa-solid fa-tags"></i>
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-slate-800 group-hover:text-emerald-700 transition">Promo
                            Coupons</h3>
                        <p class="text-xs text-slate-500 mt-1 leading-relaxed">Issue promo vouchers and discounts for
                            summer specials.</p>
                    </div>
                </a>

                <a href="#"
                    class="p-4 rounded-xl bg-slate-50/70 border border-slate-200/70 hover:border-emerald-500/50 hover:bg-emerald-50/20 transition duration-200 flex items-start gap-4 group">
                    <div
                        class="w-10 h-10 rounded-lg bg-emerald-100/70 text-emerald-700 flex items-center justify-center shrink-0 group-hover:bg-emerald-600 group-hover:text-white transition duration-200">
                        <i class="fa-solid fa-bullhorn"></i>
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-slate-800 group-hover:text-emerald-700 transition">Broadcast
                            Alert</h3>
                        <p class="text-xs text-slate-500 mt-1 leading-relaxed">Display weather advisory or flight
                            warning on top banner.</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- System & Session Info -->
        <div
            class="rounded-2xl bg-white border border-slate-200/80 shadow-sm overflow-hidden flex flex-col justify-between">
            <div>
                <div class="p-6 border-b border-slate-100 flex items-center gap-3">
                    <div class="w-9 h-9 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center">
                        <i class="fa-solid fa-circle-info text-base"></i>
                    </div>
                    <div>
                        <h2 class="font-bold text-base text-slate-900">System Information</h2>
                        <p class="text-xs text-slate-400">Environment status & active operator</p>
                    </div>
                </div>

                <div class="p-6 space-y-4">
                    <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                        <span class="text-xs font-medium text-slate-500">Website</span>
                        <span class="text-xs font-semibold text-slate-800">Let's Go Travel</span>
                    </div>

                    <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                        <span class="text-xs font-medium text-slate-500">Administrator</span>
                        <span class="text-xs font-semibold text-emerald-700">{{ Auth::user()->name }}</span>
                    </div>

                    <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                        <span class="text-xs font-medium text-slate-500">Role Status</span>
                        <span
                            class="text-[11px] font-bold bg-emerald-50 border border-emerald-200 text-emerald-700 px-2.5 py-0.5 rounded-md">
                            Super Admin
                        </span>
                    </div>

                    <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                        <span class="text-xs font-medium text-slate-500">Login Time</span>
                        <span class="text-xs font-mono text-slate-700">{{ now()->format('d M Y h:i A') }}</span>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-xs font-medium text-slate-500">Database & System</span>
                        <span class="flex items-center gap-1.5 text-xs font-bold text-emerald-600">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            Online / Healthy
                        </span>
                    </div>
                </div>
            </div>

            <!-- Mini Session Logout -->
            <div class="p-4 bg-slate-50 border-t border-slate-100">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full py-2 px-4 rounded-xl bg-white hover:bg-rose-50 hover:border-rose-300 hover:text-rose-600 border border-slate-200 text-slate-700 text-xs font-semibold transition duration-200 flex items-center justify-center gap-2 shadow-sm">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i> Sign Out
                    </button>
                </form>
            </div>
        </div>

    </div>
</x-app-layout>
