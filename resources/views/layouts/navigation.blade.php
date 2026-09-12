<nav x-data="{ open: false }" class="bg-white/95 backdrop-blur-md border-b border-slate-200/80 sticky top-0 z-30">
    <div class="px-4 sm:px-8">
        <div class="flex justify-between items-center h-16 gap-4">

            <!-- Left: Search Bar & Context Indicator -->
            <div class="flex items-center gap-4 flex-1 max-w-md">
                <div class="relative w-full">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                        <i class="fa-solid fa-magnifying-glass text-xs"></i>
                    </span>
                    <input type="text" placeholder="Search bookings, travelers, packages..."
                        class="w-full pl-9 pr-4 py-2 text-xs font-medium rounded-xl border border-slate-200 bg-slate-50/70 text-slate-800 placeholder-slate-400 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/10 focus:outline-none transition duration-150" />
                </div>
            </div>

            <!-- Right: Actions & User Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:gap-3">

                <!-- Quick Notifications -->
                <button type="button"
                    class="relative p-2.5 rounded-xl text-slate-500 hover:text-slate-900 hover:bg-slate-100 transition duration-150">
                    <span class="sr-only">Notifications</span>
                    <i class="fa-regular fa-bell text-sm"></i>
                    <span class="absolute top-2 right-2 w-2 h-2 rounded-full bg-emerald-500 ring-2 ring-white"></span>
                </button>

                <div class="h-6 w-px bg-slate-200"></div>

                <!-- User Dropdown Menu -->
                <x-dropdown align="right" width="56">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center gap-2.5 p-1.5 pr-3 rounded-xl border border-slate-200/80 bg-white hover:bg-slate-50 focus:outline-none transition duration-150 shadow-sm group">
                            <!-- Avatar with initials -->
                            <div
                                class="w-8 h-8 rounded-lg bg-emerald-50 border border-emerald-200 text-emerald-700 font-bold text-xs flex items-center justify-center">
                                {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}
                            </div>

                            <div class="flex flex-col text-left">
                                <span
                                    class="text-xs font-semibold text-slate-800 group-hover:text-emerald-700 transition">
                                    {{ Auth::user()->name }}
                                </span>
                                <span class="text-[10px] text-slate-400 font-medium -mt-0.5">Admin</span>
                            </div>

                            <i
                                class="fa-solid fa-chevron-down text-[10px] text-slate-400 ms-1 group-hover:text-slate-600 transition"></i>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- User Meta Header -->
                        <div class="px-4 py-3 border-b border-slate-100 bg-slate-50/50">
                            <p class="text-xs font-medium text-slate-400">Signed in as</p>
                            <p class="text-xs font-bold text-slate-800 truncate mt-0.5">{{ Auth::user()->email }}</p>
                        </div>

                        <!-- Menu Items -->
                        <div class="py-1">
                            <x-dropdown-link :href="route('profile.edit')"
                                class="flex items-center gap-2.5 text-xs text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 font-medium py-2 px-4">
                                <i class="fa-regular fa-circle-user text-slate-400 w-4"></i>
                                {{ __('My Profile') }}
                            </x-dropdown-link>
                        </div>

                        <div class="border-t border-slate-100 my-1"></div>

                        <!-- Logout -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                class="flex items-center gap-2.5 text-xs text-rose-600 hover:bg-rose-50 font-medium py-2 px-4"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                <i class="fa-solid fa-arrow-right-from-bracket text-rose-500 w-4"></i>
                                {{ __('Sign Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="p-2 rounded-xl text-slate-500 hover:text-slate-900 hover:bg-slate-100 focus:outline-none transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer / Dropdown Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden border-t border-slate-200 bg-white">
        <div class="pt-3 pb-2 px-4 border-b border-slate-100 flex items-center gap-3">
            <div
                class="w-9 h-9 rounded-xl bg-emerald-50 text-emerald-700 font-bold flex items-center justify-center border border-emerald-200">
                {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}
            </div>
            <div>
                <div class="font-bold text-sm text-slate-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-xs text-slate-500">{{ Auth::user()->email }}</div>
            </div>
        </div>

        <div class="py-2 px-3 space-y-1">
            <x-responsive-nav-link :href="route('profile.edit')"
                class="rounded-lg text-xs font-semibold text-slate-700 hover:bg-emerald-50 hover:text-emerald-700">
                <i class="fa-regular fa-user mr-2 text-slate-400"></i> {{ __('Profile Settings') }}
            </x-responsive-nav-link>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')"
                    class="rounded-lg text-xs font-semibold text-rose-600 hover:bg-rose-50"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="fa-solid fa-arrow-right-from-bracket mr-2 text-rose-500"></i> {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
        </div>
    </div>
</nav>
