<aside
    class="w-72 bg-white border-r border-slate-200 flex flex-col justify-between min-h-screen shrink-0 transition-all duration-300">
    <div>
        <!-- Brand / Header -->
        <div class="px-6 py-6 border-b border-slate-100 flex items-center gap-3.5">
            <a href="{{ route('dashboard') }}" class="flex items-center gap-3.5 group">
                <div
                    class="w-full rounded-xl text-white flex items-center justify-center p-2.5 shadow-md shadow-slate-900/10 group-hover:bg-emerald-600 transition duration-300">
                    <x-application-logo class="w-full h-full fill-current text-emerald-400 group-hover:text-white" />
                </div>
            </a>
        </div>

        <!-- Links Navigation -->
        <nav class="mt-6 px-4 space-y-6">
            <!-- Section 1 -->
            <div>
                <p class="px-3 text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-2">Main Menu</p>
                <div class="space-y-1">
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl font-semibold text-sm transition duration-200 {{ request()->routeIs('dashboard')
                            ? 'bg-emerald-600 text-white shadow-md shadow-emerald-600/20'
                            : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100' }}">
                        <i
                            class="fa-solid fa-compass text-base w-5 text-center {{ request()->routeIs('dashboard') ? 'text-white' : 'text-slate-400' }}"></i>
                        <span>Dashboard</span>
                    </a>
                </div>
            </div>

            <!-- Section 2: Tours & Trips -->
            <div>
                <p class="px-3 text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-2">Tours & Destinations
                </p>
                <div class="space-y-1">
                    <a href="#"
                        class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-100 transition group">
                        <div class="flex items-center gap-3">
                            <i
                                class="fa-solid fa-map-location-dot text-base w-5 text-center text-slate-400 group-hover:text-emerald-600 transition"></i>
                            <span>Destinations</span>
                        </div>
                        <span
                            class="px-2 py-0.5 text-xs rounded-md bg-emerald-50 text-emerald-700 font-bold border border-emerald-200/60">18</span>
                    </a>

                    <a href="#"
                        class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-100 transition group">
                        <div class="flex items-center gap-3">
                            <i
                                class="fa-solid fa-plane-departure text-base w-5 text-center text-slate-400 group-hover:text-emerald-600 transition"></i>
                            <span>Tour Packages</span>
                        </div>
                    </a>

                    <a href="#"
                        class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-100 transition group">
                        <div class="flex items-center gap-3">
                            <i
                                class="fa-solid fa-ticket text-base w-5 text-center text-slate-400 group-hover:text-emerald-600 transition"></i>
                            <span>Bookings</span>
                        </div>
                        <span class="px-2 py-0.5 text-xs rounded-md bg-slate-900 text-white font-bold">New</span>
                    </a>
                </div>
            </div>

            <!-- Section 3: Communications -->
            <div>
                <p class="px-3 text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-2">Inquiries & Content
                </p>
                <div class="space-y-1">
                    <a href="#"
                        class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-100 transition group">
                        <i
                            class="fa-solid fa-comments text-base w-5 text-center text-slate-400 group-hover:text-emerald-600 transition"></i>
                        <span>Traveler Inquiries</span>
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-100 transition group">
                        <i
                            class="fa-solid fa-pen-nib text-base w-5 text-center text-slate-400 group-hover:text-emerald-600 transition"></i>
                        <span>Travel Blogs</span>
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-100 transition group">
                        <i
                            class="fa-solid fa-sliders text-base w-5 text-center text-slate-400 group-hover:text-emerald-600 transition"></i>
                        <span>System Settings</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <!-- Bottom Action Card -->
    <div class="p-4 m-4 rounded-2xl bg-slate-50 border border-slate-200/80">
        <div class="flex items-center gap-3">
            <div
                class="w-9 h-9 rounded-xl bg-white border border-slate-200 text-emerald-600 flex items-center justify-center shadow-sm">
                <i class="fa-solid fa-earth-americas"></i>
            </div>
            <div>
                <p class="text-xs font-bold text-slate-900">Live Website</p>
                <p class="text-[11px] text-slate-500">letsgotravel.com</p>
            </div>
        </div>
        <a href="/" target="_blank"
            class="mt-3 block text-center w-full py-2 rounded-xl bg-slate-900 hover:bg-emerald-600 text-white font-medium text-xs transition duration-200 shadow-sm">
            Visit Public Site <i class="fa-solid fa-arrow-up-right-from-square ml-1 text-[10px]"></i>
        </a>
    </div>
</aside>
